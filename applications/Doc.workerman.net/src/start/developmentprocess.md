# 开发流程


## 基本开发流程

1、和客户端协定请求协议

2、实现dealInput，使得dealInput能够识别你的协议，并且能够分辨出请求边界

3、实现dealProcess，使得请求完整到达时，能够进行相应的处理。

*详细流程参考后面基本开发流程一章*

## 基于Gateway/Worker模型开发

WorkerMan中有一个例子Demo，这个例子虽然是个聊天的例子（通过```telnet ip 8480```测试)，但是适合很多长连接相关的应用，例如移动APP通讯、游戏服务器、与硬件通讯等等。

如果你的应用是需要长连接，并且需要向客户端推送数据，那么可以直接使用Demo。

### Gateway/Worker开发流程

1、和客户端协定请求协议

2、根据协议实现Demo/Event.php 中onGatewayMessage($recv_buffer)方法，用来判断请求边界，作用同dealInput($recv_buffer)。

4、实现Demo/Event.php 中的onMessage($client_id, $recv_buffer)方法。当已经验证的客户端发来数据请求时触发，可以在这里做业务逻辑，比如向其他客户端发送消息(Gateway::sendToClient/sendToAll)

4、实现Demo/Event.php 中的 onClose方法。当客户端主动断开连接时触发此方法。一般在这里做一些状态记录如下线和数据清理工作。

*详细流程参考后面Gateway/Worker开发流程一章*
