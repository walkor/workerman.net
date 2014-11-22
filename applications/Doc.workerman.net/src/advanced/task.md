# 定时任务

## 接口
```
void \Man\Core\Lib\Task::add(int $time_interval, callable $callback [, bool $persistent = true])
```
定时执行某个函数或者类方法

### 参数
time_interval

多长时间执行一次，单位秒


callback

回调函数

persistent

是否是持久的，如果只想定时执行一次，则传递false。默认是true，即一直定时执行。

### 返回值
无返回值，任何返回值都会被视为无效

## 范例
新建一个文件 applications/Demo/Task.php

```php
<?php
/*
*  一个定时任务，定时向客户端发送数据
*/
// 向客户端发送数据必须载入这个类
require_once __DIR__ . '/Lib/Gateway.php';

class Task extends Man\Core\SocketWorker
{
    // 子进程启动时会运行onStart， 整个进程生命周期只运行一次，这里用来注册定时任务
    public function onStart()
    {
        // 初始化定时任务(2.1.5及以上版本无需调用此函数)
        \Man\Core\Lib\Task::init($this->event);

        // 定时任务1的时间间隔2秒
        $time_interval1 = 2;
        // 设定定时任务
        \Man\Core\Lib\Task::add($time_interval1, function(){
            // 任务逻辑，这里只发了一个字符串
            \Lib\Gateway::sendToAll("I'm Task 1\n");
        });

        // 定时任务2的时间间隔10秒
        $time_interval2 = 10;
        // 设定定时任务，定时运行 $this->dealProcess();
        \Man\Core\Lib\Task::add($time_interval2, array($this, 'taskTwo'));
    }

    // 另外一个要定时运行的类成员函数
    public function taskTwo()
    {
       \Lib\Gateway::sendToAll("I'm Task 2\n");
    }



    // 这里不接收请求，函数留空
    public function dealInput($recv_buffer){}

    // 这里不接收请求，函数留空
    public function dealProcess($recv_buffer){}
    }
```

然后新建一个配置进程文件
workerman/conf/conf.d/Task.conf

```ini
;定时任务进程入口文件
worker_file = ../applications/Demo/Task.php
;定时任务不接收请求，但是还是要配置一个(2.1.5及以上版本不用设置)
listen = udp://0.0.0.0:12345
;启动多少进程，定时任务一般是一个进程，也可以开多个但是要注意多进程会不会给你带来并发问题
start_workers=1
;以哪个用户运行这个worker进程,要设置成权限较低的用户，如 www-data nobody
user=root
```

最后启动workerman并测试
运行 ./workerman/bin/workermand restart
然后运行telnet 127.0.0.1 8480
就可以看到定时任务的效果了，类似如下
```
telnet 127.0.0.1 8480
Trying 127.0.0.1...
Connected to 127.0.0.1.
Escape character is '^]'.
type in your name:
ff
chat room login success, your client_id is 7, name is ff
use client_id:words send message to one user
use words send message to all
ff[7] come
I'm Task 1
I'm Task 1
I'm Task 1
I'm Task 2
I'm Task 1
I'm Task 1
I'm Task 1
I'm Task 1
I'm Task 1
I'm Task 2
```

