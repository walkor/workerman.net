# Statistics统计模块

WorkerMan的Gateway/Worker模型集成了统计模块，用来统计系统中各个模块接口的调用量、成功率、耗时、错误日志等，并以曲线表格的方式表现出来，方便监控系统运行情况及排查系统故障。

### 注意
Statistics统计模块是支持分布式的，比如在多台服务器上运行了WorkerMan，而这些服务器上也运行了Statistics统计模块，则只是要通过浏览器登录任意一台服务器的查看统计数据的页面，就能查看到整个WorkerMan集群的运行状况（各个模块接口调用量、成功率、延迟等图表曲线），Statistics统计模块展示时会将你设置的数据源的服务器上的统计数据做汇总统计展示。

### 配置及作用
1、StatisticsWorker.conf
StatisticsWorker进程负责将上报的数据整理并存储成本机数据文件，以便StatisticsProvider进程根据这些文件按对外提供统计数据查询服务。

```ini
进程入口文件
worker_file = ../applications/Statistics/Bootstrap/StatisticWorker.php
;监听ip及端口
listen = udp://0.0.0.0:55656
;启动多少进程，这里可以只启动一个，如果统计量很大（3000+/S）可以多开一些进程
start_workers=1
;以哪个用户运行这个worker进程,要设置成权限较低的用户，如www-data
user=root
;预读长度
preread_length=65507
```

2、StatisticsProvider.conf
StatisticsProvider进程对外提供真正的数据查询服务

```ini
;提供查询统计信息数据接口
;进程入口文件
worker_file = ../applications/Statistics/Bootstrap/StatisticProvider.php
;监听ip及端口
listen = tcp://0.0.0.0:55858
;启动多少进程，只开1个
start_workers=1
;以哪个用户运行这个worker进,要设置成权限较低的用户
user=root
;预读长度
preread_length=65507
```

3、StatisticsWeb.conf

StatisticsWeb进程以HTTP协议对外提供查询服务，而数据的来源就是每台服务器上的StatisticsProvider进程提供的基础统计数据。也就是说StatisticsWeb进程可以将其它服务器上的统计数据通过运行在其它服务器上的StatisticsProvider进程汇总展示，从而实现分布式监控。

```ini
;进程入口文件
worker_file = ./Common/WebServer.php
;监听的端口
listen = tcp://0.0.0.0:55757
;http 协议 这里设置成短连接
persistent_connection = 0
;启动多少worker进程,只开一个
start_workers=1
;接收多少请求后退出
max_requests=1000
;以哪个用户运行该worker进程,要设置成权限较低的用户
user=root
;socket有数据可读的时候预读长度，一般设置为应用层协议包头的长度
preread_length=84000

;mime
include = ./Common/Protocols/Http/mime.types
;域名 统计服务
server_name = workerman.net
;统计服务根目录
root[workerman.net] = ../applications/Statistics/Web
```
