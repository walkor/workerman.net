# 查看运行状态

运行 ```php start.php status```
可以查看到WorkerMan的运行状态，类似如下:

```
---------------------------------------GLOBAL STATUS--------------------------------------------
Workerman version:3.0.1          PHP version:5.3.29-1~dotdeb.0
start time:2015-02-06 23:03:46   run 1 days 12 hours
load average: 0.08, 0.02, 0.01
3 workers       10 processes
worker_name        exit_status     exit_count
ChatGateway        0                0
ChatBusinessWorker 0                0
WebServer          0                0
---------------------------------------PROCESS STATUS-------------------------------------------
pid     memory  listening                worker_name        total_request send_fail throw_exception
1700    2.11M   Websocket://0.0.0.0:7272 ChatGateway        333            0         0
1701    2.11M   Websocket://0.0.0.0:7272 ChatGateway        1709           0         0
1702    2.13M   Websocket://0.0.0.0:7272 ChatGateway        20746          0         0
1703    2.11M   Websocket://0.0.0.0:7272 ChatGateway        856            0         0
1704    2.25M   none                     ChatBusinessWorker 5576           0         0
1705    2.24M   none                     ChatBusinessWorker 5818           0         0
1706    2.25M   none                     ChatBusinessWorker 5590           0         0
1707    2.24M   none                     ChatBusinessWorker 5658           0         0
1708    1.8M    http://0.0.0.0:55151     WebServer          1              0         0
1709    1.8M    http://0.0.0.0:55151     WebServer          10             0         0
```

## 说明

### GLOBAL STATUS

从这以栏中我们可以看到

WorkerMan的版本```version:3.0.1```

启动时间```2015-02-06 23:03:46```，运行了```run 6 days 22 hours```

服务器负载 ```load average: 0, 0, 0```

```3 workers```（3种进程，包括ChatGateway、ChatBusinessWorker、WebServer进程）

```14 processes```(共10个进程)

```worker_name```(服务名)

```exit_status```（退出状态值）

```exit_count```（该状态的退出次数）


其中exit_status为0为正常退出，如果为其它值，代表进程是异常退出的，比如exit_status为65280，exit_count为60，代表业务代码有FatalError，导致进程退出60次，需要根据php的错误日志查找FatalError原因

## PROCESS STATUS

pid：进程pid

memory：该进程占用内存（不包括php自身可执行文件的占用的内存）

listening：传输层协议及监听ip端口

timestamp：该进程启动时间戳

worker_name：该进程运行的服务服务名

total_request：该进程接收多少连接

send_fail：该进程向客户端发送数据失败次数

throw_exception：该进程内业务未捕获的异常数量



