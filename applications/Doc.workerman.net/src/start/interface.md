# Gateway/Worker接口参考

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
当某个链接的客户端是合法用户时，需要调用GateWay::storeUid($uid)来保存客户端的uid的通讯地址，以便后续通过 Gateway::sendUid($uid, $message) 向其发送消息

### GateWay::notifyConnectionSuccess($uid)
当某个链接的客户端是合法用户时，需要调用GateWay::notifyConnectionSuccess($uid)来绑定该链接和客户端的uid，以便后续请求在Event::onMessage($uid, $message)能够获得uid




