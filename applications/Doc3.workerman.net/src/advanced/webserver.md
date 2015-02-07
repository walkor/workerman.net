# WebServer

WorkerMan自带了一个简单那的Web服务器，同样也是基于Worker实现的。文件位置在Workerman/WebServer.php。这个WebServer开发的目的主要是为了方便运行一些简单的Web程序，例如workerman-todpole等web界面程序。

## 使用方法

```php

use \Workerman\WebServer;

$webserver = new WebServer('http://0.0.0.0:8080');
$webserver->setRoot('www.example.com', '/your/path/of/web/');
```
