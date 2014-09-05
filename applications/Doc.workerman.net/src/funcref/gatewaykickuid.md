# Gateway::kickClient
(WorkerMan>=2.1.3)

## 说明:
```php
void Gateway::kickClient(int $client_id);
```

断开与client_id对应的客户端的连接，使对应的客户端下线


## 参数

* ```$client_id```

全局唯一标识客户端连接的id

## 范例
```php
use \Lib\Gateway;

class Event
{
...

    public static function onMessage($client_id, $message)
    {
        // 如果传递的消息不ok就踢掉对应客户端
        $is_ok = your_check_fun($message);
        if(!$is_ok)
        {
            Gateway::kickClient($client_id);
        }
    }

...
}
```
