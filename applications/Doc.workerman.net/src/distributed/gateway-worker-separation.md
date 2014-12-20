# gateway worker 分离部署

以applications/Demo为例，假如需要部署三台服务器提供高可用服务。瓶颈在worker进程，则可使用1台作为gateway服务器，另外两台做worker服务器。（如果瓶颈在gateway进程（一般是带宽瓶颈），则可以2台gateway机器，1台worker机器，部署方法类似）。由于瓶颈只在worker进程或者Gateway进程，所以不需要二者同时扩容。所以可以分开部署并根据情况扩容。


## gateway worker 分离部署扩容步骤
1、首先将进程切分，将Gateway进程部署在一台机器上(假设内网ip为192.168.0.1)，BusinessWorker部署在另外两台机器上（内网ip为192.168.0.2/3）

2、由于192.168.0.1这台机器只部署Gateway进程，所以将该ip上的```workerman/conf/conf.d/BusinessWorker.conf```删掉，避免运行BusinessWorker进程

3、配置Gateway服务器(192.168.0.1)上的```workerman/conf/conf.d/Gateway.conf```中的```lan_ip=192.168.0.1```与本机ip一致

3、由于192.168.0.2/3 两台服务器只部署BusinessWorker进程，所以将这两台ip上的workerman/conf/conf.d/Gateway.conf删掉，避免运行Gateway进程

4、由于物理机之间需要共享一些数据，需要部署一台memcache服务器，假设部署在Gateway（192.168.0.1）这台机器上，memcache服务端口为22322

5、给三台服务器的PHP添加memcached或者memcache扩展。推荐用memcached扩展，ubuntu/debian可使用 sudo apt-get install php5-memcached安装。安装memcache扩展在ubuntu/debian系统可使用 sudo apt-get install php5-memcache安装

6、配置memcache，更改三台服务器上```applications/Demo/Config/Store.php```中的```driver```、```gateway```两项配置如下，

```php
// 存储驱动改为memcache
public static $driver = self::DRIVER_MC
// 更改memcache ip和端口
public static $gateway = array(
     '192.168.0.1:22322',
);

```

7、首先启动Gateway服务器192.168.0.1，然后启动BusinessWorker的服务器192.168.0.2/3

*至此，WorkerMan分布式部署完毕。*

## 一些问题及解答

### 一、为什么将Gateway与BusinesWorker分别部署在不同的服务器上？
首先说明的是不一定非要将Gateway BusinessWorker分开部署，但是推荐分开部署，原因如下：

1、由于Gateway只负责网络IO，只要服务器带宽够用，绝大多数情况下Gateway服务器不会成为瓶颈，所以在很长时间我们只需要一台或者少数几台Gateway服务器即可。由于我们不想BusinessWorker影响到Gateway，所以将Gateway和BusinessWorker分开部署

2、BusinessWorker主要负责业务逻辑。当请求量增大时，由于可能BusinessWorker业务比较复杂，当请求量增大时，负载可能会明显升高，这时我们只要单纯增加BusinessWorker服务器即可，Gateway服务器则一般不许要变动，也就是不用通知客户端Gateway的ip有所变动

3、当系统BusinessWorker负载较低，需要下线服务器时，我们只需要下线BusinessWorker服务器即可，无需变动GateWay服务器，也就不会导致客户端链接因为服务器下线而断开。

### 二、当Gateway服务器集群负载较高时，我们怎么扩容？

*假如memcache扩展已经安装*

### 扩容Gateway （假设ip为192.168.0.100）

1、删除```workerman/conf/conf.d/BusinessWorker.conf```，确保BusinessWorker在这台服务器不会运行

2、配置```workerman/conf/conf.d/Gateway.conf```中的```lan_ip=192.168.0.100```与本机内网ip一致

3、配置```applications/Demo/Config/Store.php```中的```driver```、```gateway```两项配置如下，

```php
// 存储驱动改为memcache
public static $driver = self::DRIVER_MC
// 设置gateway存储ip端口为memcache服务的ip和端口，可以设置多个
public static $gateway = array(
     '192.168.0.1:22322',
);

```
4、启动workerman ```./workerman/bin/workermand start```

*至此Gateway服务器扩容完成。BusinessWorker会自动感知到有Gateway服务器有扩容，并且与该Gateway服务器建立联系，如果Gateway服务器接入LVS则整个扩容过程客户端无感知*

### 三、当BusinessWorker服务器集群负载较高时，我们怎么扩容？

*假如memcache扩展已经安装*

### 扩容BusinessWorker：

1、删除```workerman/conf/conf.d/Gateway.conf```，确保Gateway进程不会在该服务器上运行

2、配置```applications/Demo/Config/Store.php```中的```driver```、```gateway```两项配置如下

```php
// 存储驱动改为memcache
public static $driver = self::DRIVER_MC
// 设置gateway存储ip端口为memcache服务的ip和端口，可以设置多个
public static $gateway = array(
     '192.168.0.1:22322',
);

```
3、启动workerman ```./workerman/bin/workermand start```

*至此BusinessWorker服务器扩容完成。新扩容的BusinessWorker会自动与线上Gateway进程建立联系，整个扩容过程客户端无感知*

### 当BusinessWorker服务器集群负载较低时，需要下线一些机器怎么实施?
只需要停止BusinessWorker的服务，运行```./workerman/bin/workermand stop```，然后下线即可。Gateway服务器会自动感知有BusinessWorker服务器下线，不会再将请求转发给下线的机器，整个下线过程中不影响服务质量。

### 当Gateway服务器集群负载较低时，需要下线一些机器怎么实施?
*首先还是要说明下Gateway服务器一般情况下不会成为系统瓶颈，所以一般你很长时间内Gateway服务器数量是一个稳定的值，一般一台即可*

下线Gateway服务器，首先停止服务，运行```./workerman/bin/workermand stop```，此时会导致该服务器上已有的客户端链接断开，然后下线服务器即可。此时BusinessWorker会感知到有Gateway服务器下线，会自动断开与Gateway进程的联系。
