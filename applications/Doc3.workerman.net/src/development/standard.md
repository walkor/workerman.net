# 开发规范

## 应用程序目录

应用程序目录一般放在applications目录下，如applications/ChatApp

## 入口文件

和nginx+PHP-FPM下的PHP应用程序一样，WorkerMan中的应用程序也需要一个入口文件，WorkerMan的入口文件为start.php，放在applications/YourApp/下（YourApp为你应用的名称）。

applications/YourApp/start.php 中是创建监听进程相关的代码，例如下面的代码
```php
<?php
require_once './Workerman/Autoloader.php';
use Workerman\Worker;

// 创建一个Worker监听2345端口，使用http协议通讯
$http_worker = new Worker("http://0.0.0.0:2345");

// 启动4个进程对外提供服务
$http_worker->count = 4;

// 接收到浏览器发送的数据时回复hello world给浏览器
$http_worker->onMessage = function($connection, $data)
{
    // 向浏览器发送hello world
    $connection->send('hello world');
};

```

## 注意
applications下的启动文件start.php中不要运行```Worker::runAll();```，```Worker::runAll();```统一由WorkerMan根目录中的start.php运行





