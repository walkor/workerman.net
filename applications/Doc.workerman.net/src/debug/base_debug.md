# 基本调试

在WorkerMan中调试需开启```workerman.conf.debug=1```，然后重启WorkerMan，然后可以在想要debug的地方使用```echo、var_dump、var_export```等函数打印变量，等程序运行到此处后便可以将变量打印在终端。

开启```workerman.conf.debug=1```后，载入到业务进程的任何PHP文件有修改都会被自动检测到，并自动运行reload命令平滑重启业务进程，以便新的业务代码载入到内存。如果不想某组进程被平滑重启，可以在对应进程的配置中加入```no_reload=1```

如果不想某组进程打印数据到终端，可以单独设置对应进程的配置```no_debug=1```，则即使```workerman.conf.debug=1```并且用了```echo、var_demp、var_export```等函数打印了数据，对应进程也不会打印数据到终端
