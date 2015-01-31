# Gateway类的使用

文件位置：GatewayWorker/Gateway.php

Gateway类其实也是基于基础的Worker开发的。由于Gateway类的工作内容固定，所以不提供Worker的基本回调接口，也请不要给Gateway对象的onWorkerStart、onWorkerStop、onConnect、onMessage、onClose设置回调函数

## Gateway类可以定制的内容

1、 协议

和Worker一样，在初始化Gateway对象时设置Gateway的协议，例如下面设置Gateway的通讯协议为websocket

```php
use \GatewayWorker\Gateway;

// 指定websocket协议
$gateway = new Gateway("websocket://0.0.0.0:8585");

```

2、name

和Worker一样，可以设置Gateway进程的名称，方便status命令中查看统计

3、count

和Worker一样，可以设置Gateway进程的数量，以便充分利用多cpu资源

4、lanIp

lanIp是Gateway所在服务器的内网IP，只有在分布式部署时才需要设置

5、startPort

Gateway进程启动后会监听一个本机端口，用来给BusinessWorker提供链接服务，然后Gateway与BusinessWorker之间就通过这个连接通讯。这里设置的是Gateway监听本机端口的起始端口。比如启动了4个Gateway进程，startPort为2000，则每个Gateway进程分别启动的本地端口一般为2001、2003、2003、2004。

当本机有多个Gateway/BusinessWorker项目时，需要把每个项目的startPort设置成不同的段

6、心跳设置，具体说明见心跳一节
