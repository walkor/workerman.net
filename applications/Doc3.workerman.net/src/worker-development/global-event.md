# globalEvent

## 说明:
```php
static Event Worker::$globalEvent
```

此属性为全局静态属性，为全局的eventloop实例，可以向其注册文件描述符的读写事件或者信号事件。


## 范例

```php
use WorkerMan\Worker;
use \Workerman\Events\EventInterface;

$worker = new Worker('Text://0.0.0.0:8484');
$worker->onWorkerStart = function($worker)
{
    Worker::$globalEvent->add(SIGALRM, EventInterface::EV_SIGNAL, function()
    {
        echo "Get signal SIGALRM\n";
    });
};
