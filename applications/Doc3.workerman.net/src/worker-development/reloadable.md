# reloadable
## 说明:
```php
string Worker::$reloadable
```

设置此实例是否可以reload，即收到reload信号后是否退出重启。不设置默认为true，收到reload信号后自动重启进程。


## 范例

```php
use WorkerMan\Worker;
$worker = new Worker('websocket://0.0.0.0:8484');
// 设置此实例收到reload信号后是否reload重启
$worker->reloadable = false;
$worker->onWorkerStart = function($worker)
{
    echo "Worker starting...\n";
};
```
