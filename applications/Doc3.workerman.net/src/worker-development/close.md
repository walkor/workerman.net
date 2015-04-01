# close
## 说明:
```php
void Connection::close(mixed $data)
```

关闭连接

## 参数

``` $data ```

要发送的数据（如果有指定协议，则会自动调用协议的encode方法打包```$data```数据），当数据发送完毕后关闭连接，随后会触发onClose回调


## 范例

```php
use WorkerMan\Worker;
$worker = new Worker('websocket://0.0.0.0:8484');
$worker->onMessage = function($connection, $data)
{
    $connection->close("hello\n");
};
```
