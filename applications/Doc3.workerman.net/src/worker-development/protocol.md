# protocol

## 说明:
```php
int Connection::$protocol
```

设置此链的应用层协议打包解包所使用的类


## 范例


```php
use WorkerMan\Worker;
$worker = new Worker('tcp://0.0.0.0:8484');
$worker->onConnect = function($connection)
{
    $connection->protocol = 'Workerman\\Protocols\\Http';
};
$worker->onMessage = function($connection, $data)
{
    var_dump($_GET, $_POST);
    $connection->send("hello");
};
```
