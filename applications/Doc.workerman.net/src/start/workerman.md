# 1.10 查看运行状态

运行 ```./workerman/bin/workermand status```
可以查看到WorkerMan的运行状态，类似如下:

```
Hello admin
---------------------------------------GLOBAL STATUS--------------------------------------------
WorkerMan version:2.1.1
start time:2014-07-14 23:37:00   run 6 days 22 hours
load average: 0, 0, 0
1 users          8 workers       14 processes
worker_name       exit_status     exit_count
BusinessWorker    0                0
ChatWeb           0                2
FileMonitor       0                0
Gateway           0                0
Monitor           0                0
StatisticProvider 0                0
StatisticWeb      0                24
StatisticWorker   0                0
---------------------------------------PROCESS STATUS-------------------------------------------
pid     memory      listening        timestamp  worker_name       total_request packet_err thunder_herd client_close send_fail throw_exception suc/total
17508   2.25M   tcp://127.0.0.1:7373 1405352220 BusinessWorker    0              0          0            0            0         0               100%
17509   2.25M   tcp://127.0.0.1:7373 1405352220 BusinessWorker    0              0          0            0            0         0               100%
17510   2.25M   tcp://127.0.0.1:7373 1405352220 BusinessWorker    0              0          0            0            0         0               100%
17511   2.5M    tcp://127.0.0.1:7373 1405352220 BusinessWorker    0              0          0            0            0         0               100%
24345   2.25M   tcp://0.0.0.0:55151  1405950078 ChatWeb           14             0          0            0            0         0               100%
17514   2.25M   tcp://0.0.0.0:7272   1405352220 Gateway           5              0          0            5            0         0               100%
17515   2.25M   tcp://0.0.0.0:7272   1405352220 Gateway           17             0          0            16           0         0               100%
17516   2.25M   tcp://0.0.0.0:7272   1405352220 Gateway           12             0          0            11           0         0               100%
17517   2.25M   tcp://0.0.0.0:7272   1405352220 Gateway           199            0          0            149          0        0               100%
17519   4.5M    tcp://0.0.0.0:55858  1405352220 StatisticProvider 32055          0          0            0            0         0               100%
14256   5M      tcp://0.0.0.0:55757  1405929526 StatisticWeb      676            0          0            23           0         0               100%
17527   2M      udp://0.0.0.0:55656  1405352220 StatisticWorker   3929424        0          0            0            0         0               100%
```

## 说明

### GLOBAL STATUS

从这以栏中我们可以看到

WorkerMan的版本```version:2.1.1```

启动时间```2014-07-14 23:37:00   run 6 days 22 hours```

服务器负载 ```load average: 0, 0, 0```

```1 users```（一个WorkerMan远程登录管理员）          ```8workers```（8种进程，包括Monitor、FileMonitor进程）       ```14 processes```(共14个进程)

```worker_name```(服务名)       ```exit_status```（退出状态值）     ```exit_count```（该状态的退出次数）

可以看到其中```ChatWeb``` 退出2次，退出状态码为0（为0一般为正常退出，例如配置设置了max_requests）


## PROCESS STATUS

```pid```：进程pid

```memory```：该进程占用内存

```listening```：传输层协议及监听ip端口

```timestamp```：该进程启动时间戳

```worker_name```：该进程运行的服务服务名，对应于conf/conf.d下的配置名

```total_request```：该进程接收多少连接

```packet_err```：该进程接收的错误包数量

```thunder_herd```：该进程惊群数，注意多核处理器该值大于1是正常的

```client_close```：该进程对应的客户端主动关闭连接次数

```send_fail```：该进程向客户端发送数据失败次数

```throw_exception```：该进程内业务未捕获的异常数量

```suc/total```：该进程处理请求成功率


