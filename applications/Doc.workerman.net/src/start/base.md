# 基本流程
基于Gateway/Worker模型的长链接应用开发者可以直接使用applications/Demo这个应用框架来做。

### applications/Demo这个框架提供了以下基本功能。

1、维持客户端长链接

2、为每个客户端连接分配client_id标识

3、在服务端可以调用相关接口给其它客户端发送消息数据

4、提供了定时向客户端发送心跳的功能，用来检测与客户端的联通性

5、客户端可以是任意的，Demo中的客户端是telnet应用程序。即在终端运行```telnet ip 8480```,开启多个telnet窗口，每个窗口打字可以实时聊天

### Demo的测试方法

  * 终端运行 ```telnet ip 8480``` （ip为WorkerMan运行的服务器ip，本机的话可以使用127.0.0.1）
  * 直接打字回车是向所有人发消息
  * $uid:xxx 是向$uid用户发送消息xxx，类似私聊
  * 开启多个telnet窗口，窗口间可以实时聊天

## 基于applications/Demo开发流程

### 1、建立一个新的项目

1.1、选定项目名，例如项目名叫ChatRoom，更改```applications/Demo``` 为 ```applications/ChatRoom```

1.2、将配置```workerman/conf/conf.d/Gateway.php```中的 ```worker_file```设置为新的路径```worker_file=../applications/ChatRoom/Bootstrap/Gateway.php```

1.3、将配置```workerman/conf/conf.d/BusinessWorker.conf```中的```worker_file```设置为新的路径```worker_file = ../applications/Demo/Bootstrap/BusinessWorker.php```

1.4、重新启动WorkerMan ```workerman/bin/workermand restart```

1.5 至此，一个新的基于Gateway/Worker模型的项目建立好了

### 2、选定协议

appplications/Demo中使用的默认应用层协议是文本请求末尾加回车，即 Text+"\n",协议解析的文件是Procotols\TextProtocol.php

下面是一个请求数据的样本：```Hi,大家好，我是小明\n```（注意末尾的\n是回车字符，代表一个请求的结束）

TextProtocol协议只是一个例子，开发者可以订制自己的协议，具体可参考上一章WorkerMan基本开发流程中的订制协议部分

### 3、通过接口实现相关业务逻辑
Gateway/Worker模型的业务逻辑入口全部在```applications/ChatRoom/Event.php```中。接口如下：

#### 3.1、Event::onGatewayConnect()
当Gateway进程每收一个客户端链接时触发，如果你的应用需要在此时需要做些操作的话可以在这里实现。如果没有需要可以不实现这个方法。

#### 3.2、Event::onGatewayMessage($recv_buffer)
此接口就是```Gateway```进程的```dealInput```函数，```Gateway```用这个函数来区分TCP流中的请求边界。根据协议判断请求是否完整，```onGatewayMessage```返回数字N，如果```N=0```，代表```Gateway```进程当前的请求接收完整，紧接着```Gateway```进程会将客户端这个请求转发到```BusinessWorker```处理(```onConnect```或者```onMessage```）。```onGatewayMessage```的实现可以参考基本开发流程章节的实现```dealInput/dealProcess```小节中的```dealInput```部分

#### 3.4、Event::onMessage($client_id, $recv_message)
当WorkerMan接收到客户端发来的一个完整的请求时触发，$client_id是系统自动生成的（大于0的int整型），用来唯一标识客户端。在```onMessage```里面一般是根据协议解析请求并做处理，如果有需要通过```Gateway::sendToAll/sendToClient```向其它用户发送消息。

#### 3.5、Event::onClose($client_id)
当客户端断开时触发，不管是客户端主动断开还是服务端主动断开都会触发。一般在这里清理用户的数据，例如更新数据库中的在线状态为下线

###  4、与客户端调试
调试除了在程序中打断点，还可以通过```tcpdump```等命令抓取网络的请求来判断网络请求是否整正确。见调试章节

### 5、发布






