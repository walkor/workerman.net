# WorkerMan日志

### 位置

WorkerMan运行过程中产生的日志存默认放在```workerman/logs/{$date}/server.log```下。可以在```workerman/conf/workerman.conf```中的```log_dir```选项配置。

### 记录的内容
WorkerMan日志记录的是WorkerMan内核运行过程中需要开发者注意的日志，包括WorkerMan运行、停止、重启、平滑重启等正常操作的日志，也包含一些要特别注意的异常日志，例如进程异常（一般是因为业务代码有FatalError）退出的日志、客户端异常关闭连接的日志等等

### 日志内容及含义举例：
```
2014-09-04 09:26:21 Worker[Gateway]:CLIENT_CLOSE<br>
CLIENT_IP:222.77.206.126<br>
BUFFER:[00]
```

表示ip为222.77.206.126的客户端没有发完一个完整的请求（只发了一部分）就断开了，发送的部分请求数据为了方便查看转换成了16进制为，为BUFFER中的值，这里为00。

