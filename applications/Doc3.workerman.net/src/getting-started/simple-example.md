# 简单的开发实例

## 使用WorkerMan开发一个简单的WebServer
创建test.php文件
```php
require_once './Workerman/Autoloader.php';
use Workerman\Worker;

// 创建一个Worker监听，使用http协议，端口为2345
$http_worker = new Worker("http://0.0.0.0:2345");

// 启动4个进程监听2345，并提供服务
$http_worker->count = 4;

// 当有客户端连接时发送$_GET数组
$http_worker->onMessage = function($connection)
{
    // 获取$_GET数据
    $html_string = "<html><body><b>".var_export($_GET)."</b></body></html>";
    $connection->send($html_string);
};
```

运行
```shell
php test.php start

```

测试


在浏览器中访问url http://127.0.0.1:2345
