# Gateway::kickCurrentClient
(WorkerMan>=2.1.3)

## 说明:
```php
void Gateway::kickCurrentClient();
```

踢掉当前socket连接，使当前的客户端下线


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
            Gateway::kickCurrentClient();
        }
    }

...
}

```
