# SocketWorker::onStop
(WorkerMan>=2.0)  此方法不是必须实现的

## 说明:
```
void SocketWorker::onStop(void)
```

当子进程停止时触发，可以用来设置每个子进程停止即将退出时的工作，例如将内存中的数据保存到磁盘。

## 注意
* 整个进程生命周期只触发一次onStop，只对子进程有效

#### 以下情况将导致子进程停止并触发onStop函数
* 1、运行 workermand reload，全部进程都会收到reload信号，如果对应进程conf没有配置no_reload，会重启对应进程
* 2、开启workerman.conf.debug=1，并且子进程使用的文件在磁盘里有更新，全部进程会收到reload信号，如果对应进程conf没有配置no_reload，会重启对应进程
* 3、telnet远程控制workerman，运行 reload 命令，全部进程会收到reload信号, ，如果对应进程conf没有配置no_reload，会重启对应进程
* 4、telnet远程控制workerman，运行 kill pid 命令，pid对应进程会收到reload信号, ，如果对应进程conf没有配置no_reload，会重启对应进程
* 5、当前进程内存占用大于Monitor.conf.max_mem_limit 时当前进程会被重启
* 6、当运行workermand stop 或者 workermand restart时，所有进程会被重启


## 范例
```
/**
 * 进程停止时需要将数据写入磁盘
 * @see Man\Core.SocketWorker::onStop()
 */
protected function onStop()
{
    // 将内存中的日志保存到磁盘(writeLogToDisk函数实现忽略)
    $this->writeLogToDisk();
}
```
