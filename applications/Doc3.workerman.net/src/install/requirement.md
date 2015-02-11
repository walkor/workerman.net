# 环境要求

## 运行所需环境

1、WorkerMan 要求运行在Linux环境下（centos、RedHat、Ubuntu、debian、mac os等）

2、安装有PHP-CLI(版本高于5.3.3),并安装了pcnlt、posix扩展

3、建议安装libevent扩展，但不是必须的

## 详细说明

### 关于PHP-CLI

WorkerMan是以[PHP命令行](http://php.net/manual/zh/features.commandline.php)的模式运行的，所以需要安装PHP-CLI。

### 关于WorkerMan依赖的扩展

1、[pcntl扩展](http://cn2.php.net/manual/zh/book.pcntl.php)

pcntl扩展是PHP在Linux环境下进程控制的重要扩展，WorkerMan用到了其[进程创建](http://cn2.php.net/manual/zh/function.pcntl-fork.php)、[信号控制](http://cn2.php.net/manual/zh/function.pcntl-signal.php)、[定时器](http://cn2.php.net/manual/zh/function.pcntl-alarm.php)、[进程状态监控](http://cn2.php.net/manual/zh/function.pcntl-waitpid.php)等特性。此扩展win平台不支持。

2、[posix扩展](http://cn2.php.net/manual/zh/book.posix.php)

posix扩展使得PHP在Linux环境可以调用系统通过[POSIX标准](http://baike.baidu.com/view/209573.htm)提供的接口。WorkerMan主要使用了其相关的接口实现了守护进程化、用户组控制等功能。此扩展win平台不支持。

3、[libevent扩展](http://cn2.php.net/manual/en/book.libevent.php)

libevent扩展使得PHP可以使用系统[Epoll](http://baike.baidu.com/view/1385104.htm)、Kqueue等高级事件处理机制，能够显著提高WorkerMan在高并发连接时CPU利用率。在高并发长连接相关应用中非常重要。libevent扩展不是必须的，如果没安装，则默认使用PHP原生Select事件处理机制。


## 如何安装扩展

如果发现所需扩展没有安装科尝试以下方法：

### 如果您的php是源码编译
那么请进到php的源码目录，再进入ext目录下，分别找到相应的php模块目录，进行编译

1、 假设php目录为/usr/local/php, 进到相应的php模块目录，执行```
/usr/local/php/bin/phpize```


2、 接着执行```
 ./configure –with-php-config=/usr/local/php/bin/php-config```


3、 接着执行以下命令 (没有权限则在命令前加sudo)```
make && make install ```


4、 编译完成后，会显示so在哪个目录下，然后打开php.ini之后，在相应地方加入```
extension=your_extension.so```


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



