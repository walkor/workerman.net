# Gateway/Worker模型开发快速入门

Gateway/Worker模型开发者只需要关注一个文件```Event.php```即可
## applications/XXX/Event.php
**Event.php中几乎包含了所有的你需要关注的内容。你需要关注：**

###1、当监测到客户端有请求数据到来时我们要做什么
当客户端发来一个请求消息时，Gateway进程最先探测到有数据流入，这时会调用```Event::onGatewayMessage($recv_buffer)```方法区分数据流中的请求边界，所以开发者最先要实现```Event::onGatewayMessage($recv_buffer)```方法。其实```Event::onGatewayMessage($recv_buffer)```方法就是Gateway进程的dealInput函数，请参考[基本开发流程](dev/README.md)中[制定协议](dev/protocols.md)部分及[dealInput实现](dev/dealinput.md)部分实现```Event::onGatewayMessage($recv_buffer)```

###2、当接收到一个完整的请求时我们要做什么
当接收一个完整的请求时，```Event::onMessage($client_id, $recv_buffer)```方法会被自动触发，其中```$recv_buffer```就是客户端发送的消息，如果这个消息是json字符串，则就可以用```json_decode```解码出请求内容，然后做相应的处理。而$client_id是全局唯一的，用来标识当前客户端，每个客户端在连接那一刻框架遍自动为其分配了一个全局唯一的```$client_id```,可以说这个```client_id```就是客户端的身份证（直到这个客户端断开后才失效），给客户端发送消息时就需要这个身份证，例如调用向某一个客户端发送消息就可以用```Gateway::sendToClient($client_id, $buffer)```,向某些客户端发送消息就用```Gateway::sendToAll($buffer, $client_id_array)```，如果$client_id_array为空则是向所有客户端发送消息。

###3、如果客户端断开是我们要做什么
如果客户端断开，不管是客户端主动断开还是服务端主动断开（踢出用户），都会触发```Event::onClose($client_id)```，如果有需要可以在这里做一些数据清理工作，或者这里什么也不做。

**以上便是Event.php的全部内容，而开发者实现了上面3个方法后便开发出了自己所要的网络服务**

## 一个Event.php实现实例

```php
// 协议为 文本+回车
class Event
{
    /**
     * 网关有消息时，区分请求边界，判断消息是否完整
     */
    public static function onGatewayMessage($buffer)
    {
        // 判断最后一个字符是否是回车("\n")
        if($buffer[strlen($buffer)-1] === "\n")
        {
            return 0;
        }

        // 说明还有请求数据没收到，但是由于不知道还有多少数据没收到，所以只能返回1，因为有可能下一个字符就是回车（"\n"）
        return 1;
    }

   /**
    * 有消息时触发该方法
    * @param int $client_id 发消息的client_id
    * @param string $message 消息
    * @return void
    */
   public static function onMessage($client_id, $message)
   {
        // 获得客户端来发的消息具体内容，trim去掉了请求末尾的回车
        $message_data = trim($message);

        // ****如果没有$_SESSION['not_first_time']说明是第一次发消息****
        if(empty($_SESSION['not_first_time']))
        {
            $_SESSION['not_first_time'] = true;

            // 广播所有用户，xxx come
            GateWay::sendToAll("client_id:$client_id come\n");
        }

        // 向所有人转发消息
        return GateWay::sendToAll("client[$client_id] said :" . $message));
   }

   /**
    * 当用户断开连接时触发的方法
    * @param integer $client_id 断开连接的用户id
    * @return void
    */
   public static function onClose($client_id)
   {
       // 广播 xxx logout
       GateWay::sendToAll("client[$client_id] logout\n");
   }
}
```

**以上便完成了一个简单的聊天室，我们可以通过telent命令使用它，运行```telnet ip port```,运行多个telnet窗口，则窗口之间可以互相聊天了**



