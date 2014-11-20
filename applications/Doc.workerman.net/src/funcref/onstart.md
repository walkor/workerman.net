## SocketWorker::onStart
(```WorkerMan>=2.0，基础开发模型```) *此方法不是必须实现的*

## 说明:
```php
void SocketWorker::onStart(void)
```

当子进程启动时触发，可以用来设置每个子进程启动后做的工作，例如初始化一个定时任务等。

## 返回值
无返回值，任何返回值都会被视为无效的

**注意：**
* 整个进程生命周期只触发一次onStart，只对子进程有效
* 多进程时注意并发问题，例如多个进程同时操作一个文件



## 范例
```php
    /**
     * 进程启动时初始化一个定时任务
     * @see Man\Core.SocketWorker::onStart()
     */
    protected function onStart()
    {
        // 初始化任务
        \Man\Core\Lib\Task::init($this->event);

        // 每隔10秒清理一次磁盘上的日志文件（clearDiskLog函数的实现这里省略）
        $time_interval = 10;
        \Man\Core\Lib\Task::add($time_interval, array($this, 'clearDiskLog'));
    }
```
