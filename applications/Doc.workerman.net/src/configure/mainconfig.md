# 主配置说明

### 主配置conf/workerman.conf

```ini
;debug=1则var_dump、echo、php notcie等会在终端上打印出来，并且会自动检测文件更新并自动加载
;注意正式环境需要配置成debug=0，以减少不必要的debug性能损耗
debug=1
;记录输出的文件路径
stdout_file = ../output.log
;保存主进程pid的文件，此项可以不配置，不配置pid默认存储在workerman/bin/pid
pid_file=/var/run/workerman.pid
;日志文件目录；此项可以不配置，不配置默认使用workerman/logs目录作为存储目录
log_dir=./logs/
;backlog；此项可以不配置，不配置默认为1024或者系统允许的最大值
backlog=1024
;应用程序配置位置，workerman启动后从这些位置读取应用的配置
include=../applications/*/conf.d/*.conf
```

### 主配置说明

1、debug选项

debug=1，则在应用程序中```echo var_dump```等函数打印的数据都会在终端展示出来，方便调试。并且当有文件更新时，会自动加载更新的文件

debug=0，则应用程序中的```echo var_dump```等函数打印的数据不会在终端展示，并且当有文件更新时，也不会自动加载文件，要想加载文件需要手动运行 workermand reload 或者重启WorkerMan

建议开发环境debug=1,生产环境debug=0

2、stdout_file选项```（WorkerMan>=2.1.6）```

此选项不是必须的，当配置此选项时，不管debug是否为1，都会将```echo var_dump```等打印输出写入文件stdout_file。开启此选项时注意如果程序输出内容很多时，stdout_file文件尺寸可能会很大，并且因为有磁盘IO，对性能会有一定的影响


3、pid_file选项

pid_file用于设置WorkerMan进程pid存放位置。WorkerMan启动后，会将主进程的pid保存到一个文件，以便workermand脚本运行停止、重启、平滑重启时能够得到主进程pid，然后向主进程发送相应的信号

如果你的服务器运行了多个WorkerMan，可以将多个WorkerMan的pid_file设置成不同的文件，避免workermand脚本操作了错误的WorkerMan主进程

WorkerMan>=2.1.6版本可以不用设置此选项，默认使用workerman/bin/pid，启动多个WorkerMan时也不会有冲突

3、log_dir选项

用于设置WorkerMan日志文件目录。WorkerMan日志会按照日期分割，每天一一个日志文件。日志文件记录的日志包括WorkerMan启动、停止、重启、平滑重启、以及一些异常日志如子进程异常退出等。

WorkerMan日志会被WorkerMan定时清理

此项如果没配置则默认使用workerman/logs

4、backlog
设置完成TCP三次握手等待被处理的客户端连接队列长度。此选项的值是全局默认的值，如果conf.d/下的配置中的有设置backlog，则对应的backlog将被替换。

如果没有配置此项，则默认使用1024或者操作系统允许的最大值

5、include选项```(WorkerMan>=2.1.6必须配置)```

用于设置应用程序配置目录，WorkerMan启动后会从这些位置寻找应用的配置。2.1.6之前的版本固定为```/conf.d/*.conf```，2.1.6版本开始可以自定义，建议使用```../applications/*/conf.d/*.conf```，即应用和配置放在一起。也可以根据自己的需要设置应用配置文件位置，例如```/etc/workerman/conf.d/*.conf```则WorkerMan启动时会去```/etc/workerman/conf.d/```下寻找conf扩展名的文件作为应用配置

7、[Monitor]```(WorkerMan>=2.1.6)```

exclude_path 设置哪些文件或者目录不进行文件更新监控。WorkerMan会监控所有进程正在使用的文件，如果文件有更新会所有的进程会重启，以便重新载入更新的文件。可以针对某个应用设置为no_reload则不会重启应用对应的进程，或者设置debug=0，则不会监控文件更新。
