# 2014-12-07
### 版本号: 2.1.6
### 下载地址: [点击下载版本2.1.6](https://github.com/walkor/workerman-2.x/archive/master.zip)
### 特性更新
1、使用主进程监控终端是否关闭并通知各个子进程

2、FileMonitor模块移除，在debug=1时，每个子进程监控自己使用的文件是否有更新并重启加载

3、Monitor配置合并到主配置workerman/conf/workerman.conf中的[Monitor]段中，listen默认使用unix域socket，并且简化了配置

4、支持重定向输出文件stdout_file配置，例如stdout_file=../output.log表示不管debug是否为1，任何echo var_dump等打印输出全部记录到output.log文件中。注意打印内容很多时会使得stdout_file体积很大，并且由于磁盘IO对性能有一定的影响

5、主配置中支持使用include指定应用配置文件位置，之前的版本固定为```include=./conf/conf.d/*.conf```，现在为```../applications/*/conf.d/*.conf```，即将应用配置与应用放在一起，更加方便。你也可以配置成其它位置如```include=/etc/workerman/conf.d/*.ini```则WorkerMan启动时是到```/etc/workerman/conf.d/```下查找ini文件作为应用配置

6、主配置中pid_file可以不用配置，默认使用```workerman/bin/pid```作为pid的存储文件，这样当运行多个WorkerMan实例时就不用再更改pid位置去解决位置冲突。当然也可以如以前版本，配置成自己想要的存储位置。

7、应用配置增加enbale配置，代表是否启动对应的应用，不配置默认启动，enable=0则不启动。

8、配置中支持WORKERMAN_ROOT_DIR常量，代表workerman目录位置，例如workerman-chat中代表```workerman-chat/workerman```。例如配置WebServer的```worker_file=WORKERMAN_ROOT_DIR/Common/WebServer.php```


## 升级注意
1、升级时将原项目备份，git clone或者下载最新的版本，将业务代码拷贝到新的workerman中

2、注意应用配置移动到了applications/yourApp/conf.d下，如果想使用老的配置位置，可以配置```workerman/conf/workerman.conf.include=./conf/conf.d/*.conf```

3、worker_file配置路径可以是相对路径，如果是相对路径，则是相对于该配置文件的路径。也可以使用WORKERMAN_ROOT_DIR常量配置路径，例如```start_file=WORKERMAN_ROOT_DIR/applications/Demo/Bootstrap/Gateway.php```

4、FileMonitor模块已经被移除，对应的配置文件已经删掉

5、Monitor模块配置合并到主配置中的[Monitor]段中

