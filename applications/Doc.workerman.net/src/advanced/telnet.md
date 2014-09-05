# telnet远程登录控制
WorkerMan允许管理员通过Monitor.conf开放的端口远程telnet远程登录WorkerMan（相关的安全信息参见安全章节）。

```shell
输入
telnet xxx.xxx.xxx.xxx 2009
远程登录需要输入密码
输入命令
status
展示workerman状态
status
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
###### ```status```展示的信息与 ```workerman/bin/workermand status```展示的信息相同，status详细信息参见第一章中查看运行状态章节

## 远程控制支持的命令

#### 1、```status```
展示WorkerMan运行状态

#### 2、```stop```
停止WorkerMan（注意运行stop后telnet远程控制也将断开）

#### 3、```reload```
平滑重启WorkerMan

#### 4、```kill $pid```
安全重启$pid对应进程。 $pid为```status```中看到的进程pid，为数字

#### 5、```quit```
断开telnet远程控制
