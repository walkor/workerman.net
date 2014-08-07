# 基于Gateway/Worker模型开发

Gateway/Worker模型一般用来开发长连接应用，例如聊天类、实时推送、即时游戏、与硬件实时通讯等。如果开发者需要开发这类应用，可以直接基于applications/Demo这个应用程序开发，applications/Demo是基于Gateway/Worker模型的一个基本应用框架。

## 什么是Gateway/Worker模型?

Gateway/Worker模型的应用程序由两组进程Gateway进程和Worker进程组成，两组进程互相配合，形成一个高性能长连接通讯框架。

### Gateway进程
Gateway进程负责接受客户端的连接和连接上发来的请求数据，并转发Worker进程给客户端发送的数据。即Gateway进程无任何业务相关的逻辑，它只负责网络IO。


### Worker进程（BusinessWorker）
负责接收Gateway进程转发来的请求数据，进行相应的处理，如果有需要，将结果通过Gateway进程转发给其它客户端。

## 为什么用Gateway/Worker进程模型?
* Gateway进程只负责网络IO，Worker进程只负责业务逻辑，各司其职，简单高效
* Gateway进程保存着客户端的连接，业务逻辑简单不易出错
* Worker进程是无状态的，即使单个请求因为业务出现致命错误也不会影响其他请求，更不会影响客户端连接
* 由于Worker进程无状态，则可以平滑重启业务进程，做到不影响用户的情况下完成代码热更新
* 由于Gateway进程和Worker进程是分开的，我们可以针对两种进程的负载情况动态扩容，甚至将Gateway Worker服务部署在多台服务器上，做到水平扩展




