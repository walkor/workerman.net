# close
## 说明:
```php
void Connection::close(mixed $data [,$raw = false])
```

向客户端发送数据

## 参数

``` $data ```

要发送的数据，如果在初始化Worker类时指定了协议，则会自动调用协议的encode方法,完成协议打包工作后发送给客户端

``` $raw ```
是否发送原始数据，即不调用协议的encode方法，默认是false，即自动调用协议的encode方法


## 范例

```php
use WorkerMan\Worker;
$worker = new Worker('websocket://0.0.0.0:8484');
$worker->onMessage = function($connection, $data)
{
    $connection->send("hello\n");
};
```
