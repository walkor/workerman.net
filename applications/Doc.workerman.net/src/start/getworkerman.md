###版本说明

WorkerMan目前有两个版本，linux平台下的多进程版本和win平台下的[多线程版本](https://github.com/walkor/workerman-for-win)。Linux多进程版本是最稳定，功能最完善的版本，完全可用于生产环境。win平台多线程版本目前是测试版本，不建议用在生产环境。本手册适用于Linux多进程版本，在win多线程版本可能有所不同。

## 通过Github安装

### centos系统安装教程

1、命令行运行```
yum install php-cli php-process git gcc php-devel php-pear libevent-devel```


2、命令行运行```
pecl install channel://pecl.php.net/libevent-0.1.0```


3、命令行运行```
echo extension=libevent.so > /etc/php.d/libevent.ini```<br>
　提示libevent installation [autodetect]: 时按回车


4、命令行运行```
git clone https://github.com/walkor/workerman```


5、命令行运行```
./workerman/workerman/bin/workermand start```


### debian/ubuntu系统安装教程(如果不是root用户请用sudo 后面加命令)

1、命令行运行```
apt-get install php5-cli git gcc php-pear php5-dev libevent-dev```


2、命令行运行```
pecl install channel://pecl.php.net/libevent-0.1.0```<br>
　  提示libevent installation [autodetect]: 时按回车


3、命令行运行```
echo extension=libevent.so > /etc/php5/cli/conf.d/libevent.ini```


4、命令行运行```
git clone https://github.com/walkor/workerman```


5、命令行运行```
./workerman/workerman/bin/workermand start```


##下载ZIP文件安装


1、前提条件你本地安装了必要的运行环境，安装方法根据你的系统参考上面1-3步骤

2、通过http://www.workerman.net/download/workermanzip 连接下载WorkerMan

3、解压后命令行运行```
./workerman/workerman/bin/workermand start```

