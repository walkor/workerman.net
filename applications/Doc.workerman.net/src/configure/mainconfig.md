# 主配置说明

### 主配置conf/workerman.conf

```ini
;debug=1则var_dump、echo、php notcie等会在终端上打印出来
debug=1
;保存主进程pid的文件
pid_file=/var/run/workerman.pid
;日志文件目录
log_dir=./logs/
;backlog
backlog=1024
;应用配置
include=/conf.d/*.conf
```

### 主配置说明

1、debug选项

debug=1，则在应用程序中```echo var_dump```等函数打印的数据都会在终端展示出来，方便调试。并且当有文件更新时，会自动加载更新的文件

debug=0，则应用程序中的```echo var_dump```等函数打印的数据不会在终端展示，并且当有文件更新时，也不会自动加载文件，要想加载文件需要手动运行 workermand reload 或者重启WorkerMan

建议开发环境debug=1,生产环境debug=0

2、pid_file选项

pid_file用于设置WorkerMan进程pid存放位置。WorkerMan启动后，会将主进程的pid保存到一个文件，以便workermand脚本运行停止、重启、平滑重启时能够得到主进程pid，然后向主进程发送相应的信号

如果你的服务器运行了多个WorkerMan，可以将多个WorkerMan的pid_file设置成不同的文件，避免workermand脚本操作了错误的WorkerMan主进程

3、log_dir选项

用于设置WorkerMan日志文件目录。WorkerMan日志会按照日期分割，每天一一个日志文件。日志文件记录的日志包括WorkerMan启动、停止、重启、平滑重启、以及一些异常日志如子进程异常退出。

WorkerMan日志会被WorkerMan定时清理

4、backlog
设置完成TCP三次握手等待被处理的客户端连接队列长度。此选项的值是全局默认的值，如果conf.d/下的配置中的有设置backlog，则对应的backlog将被替换。

5、include选项(预留选项，目前无作用)

用于设置应用程序配置目录。目前固定为/conf.d/*.conf
