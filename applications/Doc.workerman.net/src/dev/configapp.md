# 配置
(```WorkerMan>=2.0，基础开发模型```)

applications/MyApp/conf.d/MyApp.conf如下
```ini
;进程入口文件
worker_file = ../MyApp.php

;传输层协议及监听的ip端口
listen = tcp://0.0.0.0:8480

;是否是长连接,根据自己的需要设置
persistent_connection = 1

;开多少服务进程，根据自己的需要设置
start_workers = 5

;以哪个用户运行，为了安全，应该使用权限较低的用户，例如www-data nobody
user = www-data

;每个请求预读长度，假如使用\n作为请求结束边界
preread_length = 1

;接收缓冲区大小设置
max_recv_buffer_size = 10485760

;发送缓冲区大小设置
max_send_buffer_size = 20971520

;不reload，当有reload命令时是否安全重启这个进程，根据需要设置
no_reload = 1

;workerman.conf.debug=1 时有效。echo var_dump 等输出是否打印到终端，根据需要设置
no_debug = 1

;接收多少请求后重启进程，根据需要设置
;max_requests = 1000
```

###详细配置说明参考配置章节


#启动

运行命令：```workerman/bin/workermand start```
