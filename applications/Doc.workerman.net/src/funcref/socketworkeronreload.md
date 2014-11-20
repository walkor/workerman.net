# SocketWorker::onReload
(```WorkerMan>=2.0，基础开发模型```)   此方法不是必须实现的

## 说明:
```php
void SocketWorker::onReload(void)
```

当子进程收到reload信号时触发，reload信号主要是为了更新进程或者更新配置。

当对应子进程conf中没有配置no_realod时，收到reload信号默认操作是子进程自动退出。

当对应子进程conf中配置no_reload=1时，收到reload信号所做的操作在onReload实现


## 返回值
无返回值，任何返回值都会被视为无效的


## 范例

conf配置中no_reload=1
```php
/**
 * 收到reload信号后重新从磁盘加载配置文件
 * @see Man\Core.SocketWorker::onReload()
 */
protected function onReload()
{
    // 重新从磁盘加载配置文件(updateConfigFromDisk函数实现忽略)
    $this->updateConfigFromDisk();
}
```
