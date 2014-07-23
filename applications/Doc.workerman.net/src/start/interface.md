# Gateway/Worker接口参考

###### 假如项目名为ChatRoom

## applications/ChatRoom/Event.php

#### 3.1、Event::onGatewayMessage($recv_buffer)

此接口就是Gateway进程的dealInput函数，被Gateway进程用来区分TCP流中的请求边界。根据协议判断请求是否完整

#### 3.2、Event::onConnect($recv_buffer)
当客户端发来请求，并且这个客户端对应的socket并没有绑定uid(使用```GateWay::notifyConnectionSuccess($uid)```绑定)时，也就是未验证用户发来的数据都触发这个方法。开发者需要实现这个方法

#### 3.3、Event::onMessage($uid, $recv_message)
当使用```GateWay::notifyConnectionSuccess($uid)```绑定的用户发来消息时触发，$uid为对应socket绑定的uid，用来唯一识别客户端。

#### 3.4、Event::onClose($uid)
当客户端**主动**断开时触发，一般在这里清理用户的数据，例如更新数据库中的在线状态为下线

## applications/ChatRoom/Gateway.php类

### Gateway::sendUid($uid, $message)
向客户端uid发送消息，$message是要发的消息字符串（可能是二进制数据流）

### Gateway::sendToCurrentUid($message)
向当前客户端d发送消息，$message是要发的消息字符串（可能是二进制数据流）

### Gateway::sendToAll($message)
向所有客户端发送消息，$message是要发的消息字符串（可能是二进制数据流）

### Gateway::kickUid($uid, $message)
踢掉客户端uid的链接，$message一般留空

### Gateway::kickCurrentUser($message)
踢掉当前用户，$message一般为留空

### GateWay::storeUid($uid)
当某个链接的客户端是合法用户时，需要调用```GateWay::storeUid($uid)```来保存客户端的uid的通讯地址，以便后续通过 ```Gateway::sendUid($uid, $message)``` 向其发送消息

### GateWay::notifyConnectionSuccess($uid)
当某个链接的客户端是合法用户时，需要调用```GateWay::notifyConnectionSuccess($uid)```来绑定该链接和客户端的uid，以便后续请求在```Event::onMessage($uid, $message)```能够获得uid




