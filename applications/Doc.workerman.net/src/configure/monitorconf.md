# Monitor.conf
**(WorkkerMan内置应用模块，WorkerMan>=2.1.6此配置被移除)**

**位置：**
workerman/conf/conf.d/Monitor.conf

**作用：**

1、监听2009端口（每个项目可能有所不同）,并提供telnet远程控制功能

2、监控worker进程退出次数及状态，有异常时告警（告警发送邮件或者短信需要自己实现）

3、监控master进程是否异常退出

4、监控每个worker进程内存是否大于设定值，大于设定值则安全重启对应进程

5、提供workermand status 命令的统计数据


**配置示例：**

```ini
;入口文件
worker_file = Common/Monitor.php
;监听ip及端口，不使用的情况为了安全请绑定到127.0.0.1只限本机访问，如果绑定0.0.0.0，则记得更改下面telnet密码配置
listen = tcp://127.0.0.1:2009
;telnet需要长连接
persistent_connection = 1
;启动多少进程，1个就够
start_workers=1
;以哪个用户运行这个worker进程，需要root权限
user=root
;预读长度
preread_length=64

;==以下是自定义的配置==
;如果worker进程1分钟内退出max_worker_exit_count次则触发告警
max_worker_exit_count=2000
;worker进程最大内存阈值(单位KByte)，超过这个值安全重启(reload)这个进程
max_mem_limit=124000
;telnet密码
password=yourpassword
```

**说明：**

**max_worker_exit_count：**如果worker进程1分钟内退出max_worker_exit_count次则触发告警

**max_mem_limit:**子进程最大内存阈值(单位KByte)，如果某个子进程超过这个值则安全重启(reload)这个进程，以避免内存耗尽

**password:**远程登录时需要提供的密码

**注意**

此配置在WorkerMan>=2.1.6时被合并到workerman/conf/workerman.conf中的[Monitor]段表示，并且listen默认使用本地unixsocket，地址默认为listen=unix://workerman_path/workerman/bin/unixsock，你仍然可以配置成Internet域的地址如listen=tcp://0.0.0.0:2009以便telnet远程登录




