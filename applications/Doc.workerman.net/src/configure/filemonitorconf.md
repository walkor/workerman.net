# FileMonitor.conf
**(WorkkerMan内置应用模块)**

**文件位置：**workerman/conf/conf.d/FileMonitor.conf

**作用：**FileMonitor是Workerman内置的应用模块，用于监控workerman所使用文件的更新，如果文件有更新，并且conf/Workerman.conf中debug=1则自动运行reload，即平滑重启所有进程以便重新加载修改的php文件到内存

**默认配置:**

```ini
;进程入口文件
worker_file = Common/FileMonitor.php
;此worker进程不监听端口，主要用来监控文件更新，需要root权限
;listen=
;启动多少worker进程
start_workers=1
;以哪个用户运行该worker进程，需要root权限
user=root
;排除文件或者目录,这些文件或者目录下的文件将不会被监控，可以是相对路径或者绝对路径
exclude_path[]=./logs/
exclude_path[]=/tmp/
exclude_path[]=/path/example.php
```

**注意：**

有时文件有更新时我们并不希望自动运行reload命令重启子进程去更新文件，例如Gateway/Worker模型中当Store类的数据文件```/tmp/xxx/gateway.store.cache.php```，这是我们可以把这个文件或者文件的目录加到FileMonitor的监控白名单中，例如FileMonitor.conf加上exclude_path[]=/tmp/xxx/代表将/tmp/xxx/下的所有文件加入到监控白名单中，也就是不监控这些文件的更新。

**FileMonitor默认是开启的，如果不需要此模块，可以将此配置文件按删除或者移出**


