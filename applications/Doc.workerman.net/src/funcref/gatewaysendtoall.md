# Gateway::sendToAll
(WorkerMan>=2.0)

## 说明:
```
void Gateway::sendToAll(string $send_buffer [, array $client_id_array=array()]);
```

向所有客户端或者指定的client_id_array客户端发送```$send_buffer```数据。如果指定的$client_id_array中的client_id不存在则自动丢弃对应的client的发送数据

## 参数

* ```$send_buffer```

要发送的数据（可能是二进制数据）


* ```$client_id_array```

(WorkerMan>=2.1.2)

指定向哪些client_id发送，如果不传递该参数或者为空，则是向所有在线客户端发送 ```$send_buffer``` 数据

## 范例
```
use \Lib\Gateway;

class Event
{
...

    public static function onMessage($client_id, $message)
    {
        // $message = '{"type":"say_to_all","content":"hello"}'
        $req_data = json_decode(trim($message), true);
        // 如果是向所有客户端发送消息
        if($req_data['type'] == 'say_to_all')
        {
            // 向所有客户端发送数据
            Gateway::sendToAll($req_data['content']);
        }
    }

...
}

```
