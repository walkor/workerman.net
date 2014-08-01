# 系统流程

## 请求处理流程

1、客户端发来请求

2、WorkerMan读取请求数据交给dealInput($recv_buffer)函数

3、dealInput($recv_buffer)函数判断接收的请求数据$recv_buffer是否是一个完整的请求

4、不完整则返回一个大于零的数字N，则WorkerMan会继等待N字节的请求数据

5、数据完整会自动调用dealProcess($recv_buffer)处理请求

6、请求处理完毕根据需要向客户端发送(sendToClient($response_buffer))数据

## 流程说明

1、为什么有个dealInput($recv_buffer)函数？作用是什么？

由于TCP是基于流的，也就是连接建立后可以一直不停的发送请求数据，发送的请求之间并没有明确的边界。在请求数据传输过程中由于很多原因（TCP分片、Socket缓冲区满等），请求的数据可能不会一次全部传输到WorkerMan，也有可能多个请求连在一起（粘包）同时到达WorkerMan。

dealInput就是WorkerMan留给开发者的一个钩子函数，开发者根据自己的协议实现dealInput,用来区分TCP流中每个请求边界，避免由于请求数据接收不全或者粘包导致请求处理异常。

WorkerMan正是通过这个钩子函数实现了请求边界的划分，并且通过这个函数支持各种应用层协议。

2、dealProcess($recv_buffer)的作用

当dealInput($recv_buffer)返回0代表请求接收完整,便进入请求处理流程 dealProcess($recv_buffer),dealProcess根据$recv_buffer中的数据按照与客户端约定的协议规则解析出请求的具体内容进行相应的处理。



