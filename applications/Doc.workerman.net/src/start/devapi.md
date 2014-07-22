# 实现相关接口

Gateway/Worker模型的业务逻辑入口全部在Event.php中。接口如下：

### 1、Event::onGatewayMessage($recv_buffer)

此接口就是Gateway进程的dealInput函数，根据协议返回数字N，如果```N=0```，代表Gateway进程当前的请求接收完整，紧接着Gateway进程会将客户端这个请求转发到BusinessWorker处理(onConnect或者onMessage）。onGatewayMessage的实现可以参考基本开发流程章节的实现dealInput/dealProcess小节中的dealInput部分

### 2、Event::onConnect($recv_buffer)
当客户端发来请求，并且这个客户端对应的socket并没有绑定uid(使用GateWay::notifyConnectionSuccess($uid)绑定)时，也就是未验证用户发来的数据都触发这个方法。开发者需要实现这个方法，一般在这个方法中通过客户端传递的$recv_buffer中的数据如用户名密码验证用户是否合法，如果合法得到uid（必须为大于0的数字），在gateway上将uid和对应的socket绑定。则这个socket再次发来请求时会触发Event::onMessge($uid, $recv_buffer)，从而直接能获得uid和对应的请求数。

### 3、Event::onMessage($uid, $recv_message)
当使用GateWay::notifyConnectionSuccess($uid)绑定的用户发来消息时触发，$uid为对应socket绑定的uid，用来唯一识别客户端。在onMessage里面一般是根据协议解析请求并做处理，如果有需要通过Gateway::sendToAll/sendToUid向其它用户发送消息。

### 4、Event::onClose($uid)
当客户端**主动**断开时触发，一般在这里清理用户的数据，例如更新数据库中的在线状态为下线




