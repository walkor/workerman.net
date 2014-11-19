# 配置

```ini
;进程入口文件,Web服务器固定使用./Common/WebServer.php文件
worker_file = ./Common/WebServer.php
;监听的端口，可以改成其它端口
listen = tcp://0.0.0.0:80
;http 协议 这里设置成短连接
persistent_connection = 0
;启动多少worker进程
start_workers=20
;接收多少请求后退出
max_requests=1000
;以哪个用户运行该worker进程
user=www-data
;短连接，预读长度可以设置大一些
preread_length=84000

;;;;;;;;;;;;;;; 以上是WorkerMan的通用配置 ;;;;;;;;;;;;;;
;;;;;;;;;;;;; 以下是WorkerMan的WebServer配置 ;;;;;;;;;;;;;;
; mime配置
include = ./Common/Protocols/Http/mime.types

;域名配置，相当于nginx的server_name配置，可以多个，注意用逗号分隔
server_name = workerman.net,www.workerman.net,doc.workerman.net,update.workerman.net,chat.workerman.net

;默认访问日志路径，相当于nginx的access_log配置
default_access_log = ./logs/access.log

;workerman.net域名的默认网站根目录位置
root[workerman.net] = ../applications/Workerman.net/Web
;workerman.net域名的默认网站根目录位置
root[www.workerman.net] = ../applications/Workerman.net/Web
;doc.workerman.net域名的默认网站根目录位置
root[doc.workerman.net] = ../applications/Doc.workerman.net/publish/book
;update.workerman.net域名的默认网站根目录位置
root[update.workerman.net] = ../applications/Update.workerman.net/publish/book
;chat.workerman.net域名的默认网站根目录位置
root[chat.workerman.net]=/home/workerman-chat/applications/Chat/Web
;monitor.workerman.net域名的默认网站根目录位置
root[monitor.workerman.net]=/home/workerman-chat/applications/Statistics/Web

;www.workerman.net域名访问日志目录
access_log[www.workerman.net] = ./logs/workerman.access.log
```

## 说明
1、```worker_file``` 配置成 ```./Common/WebServer.php```,```WebServer.php```是WorkerMan内置WebServer程序

2、```server_name```配置该服务器绑定的域名，多个用逗号分隔

3、通过 ```root[example.com]```配置域名的根目录，index.php为首页索引文件名称
