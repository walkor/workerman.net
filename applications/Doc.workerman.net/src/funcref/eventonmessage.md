# Event::onMessage
(WorkerMan>=2.0)

## 说明:
```
void Gateway::onMessage(int $uid, string $recv_buffer);
```

已经调用GateWay::notifyConnectionSuccess($uid)的连接上有请求消息时，则触发onMessage

## 参数
``` $uid ```

该链接上绑定的id，与```GateWay::notifyConnectionSuccess($uid)```中的```uid```一致


``` $recv_buffer ```

完整的客户端请求数据。

## 范例

```
/**
 * 有消息时触发该方法
 * @param int $uid 发消息的uid
 * @param string $message 消息
 * @return void
 */
public static function onMessage($uid, $message)
{
    $message_data = TextProtocol::decode($message);

    // 群聊，转发请求给其它所有的客户端
    return GateWay::sendToAll(TextProtocol::encode($_SESSION['name'] . "[$uid] said :" . $message_data));
}
```
