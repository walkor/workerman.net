# Event::onMessage
(WorkerMan>=2.0)

## 说明:
```
void Gateway::onMessage(int $client_id, string $recv_buffer);
```

当收到一个完整的客户端请求时触发

## 参数
``` $client_id ```

全局唯一的客户端


``` $recv_buffer ```

完整的客户端请求数据。

## 范例

```
use \Lib\Gateway;

class Event
{
...
    /**
     * 有消息时触发该方法
     * @param int $client_id 发消息的client_id
     * @param string $message 消息
     * @return void
     */
    public static function onMessage($client_id, $message)
    {
        // 群聊，转发请求给其它所有的客户端
        return GateWay::sendToAll($message));
    }
...
}
```
