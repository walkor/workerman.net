# 环境要求

## 运行所需环境

1、WorkerMan 要求运行在Linux环境下（centos、RedHat、Ubuntu、debian、mac os等）

2、安装有PHP-CLI(版本不低于5.3),并安装了pcnlt、posix扩展

3、sysvshm、sysvmsg、libevent、proctitle扩展建议安装，但不是必须的

## 详细说明

### 关于PHP-CLI

WorkerMan是以PHP[命令行](http://php.net/manual/zh/features.commandline.php)的模式运行的，所以需要安装PHP-CLI,并且WorkerMan核心使用了命名空间等特性，所以需要PHP版本不小于5.3。

### 关于WorkerMan依赖的扩展

1、[pcntl扩展](http://cn2.php.net/manual/zh/book.pcntl.php)

pcntl扩展是PHP在Linux环境下进程控制的重要扩展，WorkerMan用到了其[进程创建](http://cn2.php.net/manual/zh/function.pcntl-fork.php)、[信号控制](http://cn2.php.net/manual/zh/function.pcntl-signal.php)、[定时器](http://cn2.php.net/manual/zh/function.pcntl-alarm.php)、[进程状态监控](http://cn2.php.net/manual/zh/function.pcntl-waitpid.php)等特性。此扩展win平台不支持。

2、[posix扩展](http://cn2.php.net/manual/zh/book.posix.php)

posix扩展使得PHP在Linux环境可以调用系统通过[POSIX标准](http://baike.baidu.com/view/209573.htm)提供的接口。WorkerMan主要使用了其相关的接口实现了守护进程化、用户组控制等功能。此扩展win平台不支持。

3、[sysvshm、sysvmsg扩展](http://cn2.php.net/manual/en/ref.sem.php)

sysvshm([共享内存](http://baike.baidu.com/view/120892.htm))、sysvmsg（[消息队列](http://baike.baidu.com/view/262473.htm)）扩展使得PHP在Linux环境下实现高效的进程间通信（[IPC](http://zh.wikipedia.org/wiki/%E8%BF%9B%E7%A8%8B%E9%97%B4%E9%80%9A%E8%AE%AF)），WorkerMan主要通过sysvshm实现进程间信息的共享（主要是主进程将全局信息如所有子进程进程pid共享给其它进程），使用sysvmsg实现进程间消息的传递(如子进程将自己使用的PHP文件通过消息队列传递给监控进程，一边监控进程监控文件更新自动加载)。

这些扩展不是必须安装，如果未安装会影响以下功能：文件监控及自动更新、WorkerMan状态查看(即workermand satus 命令不可用)。

win平台不支持这些扩展。

4、[libevent扩展](http://cn2.php.net/manual/en/book.libevent.php)

libevent扩展使得PHP可以使用系统[Epoll](http://baike.baidu.com/view/1385104.htm)、Kqueue等高级事件处理机制，能够显著提高WorkerMan在高并发连接时CPU利用率。在高并发长连接相关应用中非常重要。libevent扩展不是必须的，如果没安装，则默认使用PHP原生Select事件处理机制。

5、[proctitle扩展](http://cn2.php.net/manual/en/book.proctitle.php)

此扩展不是必须的。proctitle扩展使得WorkerMan可以更改进程的名称，在运行 ps aux 命令时比较有用，可以通过进程名称看到每个进程的比较详细的信息 类似下面


    root     10342  0.0  0.8 150684  4332 ?        S    Jun10   5:22 WorkerMan:master with-config:/home/web-msg-sender/conf/workerman.conf
    www-data 10353  0.0  1.2 151484  6128 ?        S    Jun10   0:00 WorkerMan:worker SenderWorker udp://127.0.0.1:3434
    www-data 10354  0.0  1.1 151484  6068 ?        S    Jun10   0:00 WorkerMan:worker SenderGateway tcp://127.0.0.1:5252     


## 如何安装扩展

正常情况按照1.3安装方法即可满足WorkerMan所需环境。如果发现所需扩展没有安装科尝试以下方法：

### 如果您的php是源码编译
那么请进到php的源码目录，再进入ext目录下，分别找到相应的php模块目录，进行编译

1、 假设php目录为/usr/local/php, 进到相应的php模块目录，执行```
/usr/local/php/bin/phpize```


2、 接着执行```
 ./configure –with-php-config=/usr/local/php/bin/php-config```


3、 接着执行以下命令 (没有权限则在命令前加sudo)```
make && make install ```


4、 编译完成后，会显示so在哪个目录下，然后打开php.ini之后，在相应地方加入```
extension=xx.so```


### centos系统并且PHP是yum安装
1、命令行运行```
yum install php-cli php-process git php-devel php-pear libevent-devel```

2、命令行运行```
pecl install channel://pecl.php.net/libevent-0.1.0```

3、命令行运行```
echo extension=libevent.so > /etc/php.d/libevent.ini```


### debian/ubuntu并且PHP是apt-install安装
1、命令行运行```
apt-get update && apt-get install php5-cli git php-pear php5-dev libevent-dev```

2、命令行运行```
pecl install channel://pecl.php.net/libevent-0.1.0```

3、命令行运行```
echo extension=libevent.so > /etc/php5/cli/conf.d/libevent.ini```



