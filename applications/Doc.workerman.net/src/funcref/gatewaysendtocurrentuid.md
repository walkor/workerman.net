# Gateway::sendToCurrentClient
(WorkerMan>=2.1.3)

## 说明:
```
void Gateway::sendToCurrentClient(string $send_buffer);
```

向当前客户端发送```$send_buffer```数据。

## 参数

* ```$send_buffer```

要发送的数据（可能是二进制数据）

## 范例
```
use \Lib\Gateway;
class Event
{
...

    public static function onMessage($client_id, $message)
    {
        if($message == 'tell me the time')
        {
           // 向当前客户端发送数据
           Gateway::sendToCurrentClient(date('Y-m-d H:i:s'));
        }
    }

...
}
```
