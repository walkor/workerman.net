# 2.3 应用配置说明

## 一个典型的应用配置 conf/conf.d/Gateway.conf如下
```
;进程入口文件
worker_file = ../applications/ChatDemo/Bootstrap/Gateway.php

;传输层协议及监听的ip端口
listen = tcp://0.0.0.0:8480

;是否是长连接
persistent_connection = 1

;开多少服务进程
start_workers = 5

;以哪个用户运行，为了安全，应该使用权限较低的用户，例如www-data nobody
user = www-data

;每个请求预读长度，避免读取数据超过一个协议包，
;一般设置为协议头的长度，当请求到来时在dealInput中根据头部标识的数据包长度计算还有多少数据没接收完毕，并返回这个值
preread_length = 4

;接收缓冲区大小设置
max_recv_buffer_size = 10485760

;发送缓冲区大小设置
max_send_buffer_size = 20971520

;不reload，当有reload命令时是否安全重启这个进程
no_reload = 1

;workerman.conf.debug=1 时有效。echo var_dump 等输出是否打印到终端
no_debug = 1

;接收多少请求后重启进程，这个是gateway进程，不需要设置
;max_requests = 1000
```

### 1、worker_file选项

worker_file 用来设置应用程序入口文件。这个入口文件必须满足以下要求：
* 必须继承```Man\Core\SocketWorker```类并实现```dealInput```、```dealProcess``` 方法。
* 入口文件名与内部类名一样。

### 2、listen选项

listen用来设置应用程序传输层协议(tcp/udp)以及监听的ip与端口。

* TCP:如果应用程序使用tcp传输协议则设置类似listen=tcp://....

* UDP:如果应用程序使用udp传输协议则设置类似listen=udp://....

* ip:如果是设置为0.0.0.0，则是监听了所有网卡的ip，既可以可以通过该主机的内网ip也可以通过该主机的外网ip访问服务

* ip:如果设置为 xxx.xxx.xxx.xxx,则只能通过xxx.xxx.xxx.xxx访问服务

* 端口:端口范围一般为1 - 65535，其中1-1024一般是系统预留的常用端口，常用于系统服务等，例如http服务的端口号是80。所以端口范围建议一般为1025-65535。当然如果你清楚1-1024端口的意义是可以使用这些端口的，例如你确认服务器上没有apache、nginx之类的http服务完全可以使用80端口用WorkerMan对外提供http服务。

### 3、persistent_connection选项

persistent_connection用来设置该应用是否是长连接应用。1为长连接，0为短连接。

* 长连接：是指建立TCP连接后，会通过这个连接接收和发送多个请求。典型的长连接应用如聊天类应用、游戏应用、物联网等。

* 短连接：是指建立TCP连接后，客户端发送一个请求并得到服务器的回应后便断开了此链接，下次如果需要再次请求时则会再次建立TCP链接。典型的短连接应用如http服务等。

### 4、start_workers选项

start_workers用来设置使用多少个进程来提供此服务。

start_workers一般设置规则需要参考cpu核数、应用程序类型、内存限制：。下面提供一个规则可供参考：

* 每个进程会占用大概40M内存，所以进程数*进程占用内存不能超过系统内存。

* 如果是CPU密集型应用，则建议设置为cpu核数的1-5倍
* 如果是IO密集型应用，则建议设置为cpu核数的5-10倍

### 5、user选项

user选项用来设置应用进程运行用户。为了系统安全，建议使用权限较低的用户（如www-data nobody等）而不是root用户运行服务

### 6、preread_length

preread_length用来设置一个新的请求到来时从socket缓冲区读取的数据长度。这个选项用来防止应用程序读取了大于一个请求长度的数据，导致处理这个请求异常。

由于TCP是基于流的，服务端收到的数据可能不是完整请求的也可能是多个请求连在一起。所以需要配置中的preread_length和应用程序的dealInput区分TCP流中的请求边界。

preread_length设置规则参考如下：

* 如果是短连接应用，因为一个连接只发一次请求，所以不会有多个请求连在一起到达服务端的情况，所以这个值可以设置一个较大值，例如65535
* 如果是长连接，则会有多个请求连在一起到达服务端的情况，这时需要设置为小于一个请求长度的值，这个值一般为你的应用层协议头的长度，通过读取协议头，我们能够得到当前请求的数据长度，就能区分出请求边界。

### 7、max_recv_buffer_size选项

max_recv_buffer_size用来设置应用单个用户的请求接收缓冲区大小(单位：字节)。这个选项主要是防止客户端发送了超大的请求数据包，导致服务进程内存耗尽风险。这个值默认是10M，也就是默认一次只能接受最大10M的大小的请求数据。假如你的服务是上传文件类的服务，文件大小可能大于10M，则可以更改此设置。

当客户端发来一个超大请求并且超过max_recv_buffer_size设置时，WorkerMan会断开此客户端的连接，并且记录日志


### 8、max_send_buffer_size选项

max_send_buffer_size用来设置应用单个用户发送缓冲区大小（单位：字节）。这个选项用来防止客户端网络阻塞等原因导致该用户的发送缓冲区越来越大造成服务端内存耗尽风险。这个值默认是20M，你可以更改成你期望的值。

当某个客户端的发送缓冲区大于max_send_buffer_size的大小时，WorkerMan会断开此客户端的连接，并记录日志

### 9、no_reload选项

no_reload选项影响该服务进程的文件更新检测以及服务平滑重启行为。

no_reload=1：当文件更新时，该进程不会重新载入文件，即该进程不会重启（WorkerMan是通过重启进程完成文件重新载入的）。

no_reload=1：当运行workermand reload时，该进程不会重启

在聊天类的应用中，进程一般分为gateway进程和businessWorker进程，gateway进程用来保持与客户端的连接，businessWorker进程用来处理业务。当业务更新时其实只要重启businessWorker进程便可以重新载入磁盘文件按完成业务更新，gatewaty进程由于维持着客户端连接，是不能重启的，否则会导致客户端断开。所以在gateway服务中经常会设置no_reload=1

### 10、no_debug选项

当workerman开启debug=1时，开发者不希望某个服务进程打印数据到终端时，可设置对应服务的no_debug=1


### 11、max_requests选项

max_requests用来设置对应进程接受多少用户请求后安全重启。次选项主要是为了避免业务代码有内存泄露而导致的内存耗尽。

