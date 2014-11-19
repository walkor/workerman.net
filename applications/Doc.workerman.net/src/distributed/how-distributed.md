# 如何分布式WorkerMan
##关键点
### 1、配置 ```workerman/conf/conf.d/Gateway.conf``` 中的 ```lan_ip``` 与当前服务器内网ip一致
### 2、```applications/XXX/Config/Store.php``` 中 memcache 相关配置
```php
// self::DRIVER_MC代表使用memcache存储
public static $driver = self::DRIVER_MC;
// 改成memcache服务器内网ip端口
public static $gateway = array(
     'memcache内网ip:memcache端口',
);
```

## 部署实例
以applications/Demo为例，假如需要部署三台服务器(192.168.1.1-3)提供高可用服务。。另外有一台memcache服务器（ip 192.168.1.4，端口11211）做全局数据共享。

1、给三台服务器的PHP添加memcached或者memcache扩展。推荐用memcached扩展，ubuntu/debian可使用 sudo apt-get install php5-memcached安装。安装memcache扩展在ubuntu/debian系统可使用 sudo apt-get install php5-memcache安装

2、配置三台服务器```applications/Demo/Config/Store.php```如下

```php
// 存储驱动改为memcache
public static $driver = self::DRIVER_MC
// 更改memcache ip和端口
public static $gateway = array(
     '192.168.1.4:11211',
);
```

3、分别配置三台服务器的```workerman/conf/conf.d/Gateway.conf```中的```lan_ip```为当前服务器的内网ip。例如配置192.168.1.1服务器Gateway.conf中```lan_ip=192.168.1.1```

4、逐台启动WorkerMan，至此WorkerMan分布式部署完毕。

**说明：**

1、三台WorkerMan机器都运行了Gateway进程和Worker进程，客户端连接上任意一台WorkerMan的Gateway端口即可。

2、为了方便前端接入和扩容，可以在Gateway前加一层DNS、LVS等负载均衡策略

3、如果服务器不够用可以使用同样的方法增加服务器

4、如果需要下线服务器，可以停止WorkerMan，然后执行后续停机等下线操作(由于Gateway进程维护着客户端连接，当对应服务器下线时，对应服务器的客户端会掉线一次)。


