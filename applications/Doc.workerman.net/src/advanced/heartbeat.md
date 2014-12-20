# 服务端到客户端的心跳检测
WorkerMan支持**服务端**向**客户端**定时发送心跳检测数据

## 为什么服务端要向客户端发心跳检测？
有些极端情况如客户端掉电、网络关闭、拔网线、路由故障等，这些极端情况都属于连接断开的情况，然而这些情况如果没有应用层的心跳检测，服务端是无法快速感知的。而服务端定时向客户端发送心跳数据可以解决这个问题。

## 什么情况需要服务定时向客户端发送心跳检测数据？
一般的应用其实不需要向客户端发送心跳数据，因为正常的情况客户端断开服务端是能立刻感知到的。如果应用要求对于极端连接断开的情况也要及时检测到，则可以使用服务端到客户端的定时心跳检测。

## 心跳检测的原理是什么？
服务端向客户端发送心跳检测，客户端接收到心跳数据后，可以忽略不做任何处理，也可以回应心跳检测（向服务端发送一段任意数据）。这就分为两种情况，

1、当服务端不要求客户端必须回应心跳检测时，假如客户端遇到掉电等极端情况，这时服务端向客户端发送的心跳数据在TCP层面就会发送超时，遇到这种超时情况TCP会重试多次（次数及间隔依赖操作系统的配置），多次无果后会断开连接。这种极端情况从连接断开到服务端检测到可能要持续至少10分钟。

2、当服务端要求必须回应检测时，如果服务端在规定的时间（Gateway.conf配置）内没有收到客户端的任何数据，则立刻判定客户端已经断开，服务端就立即断开连接。

## WorkerMan中如何配置心跳检测？
在conf.d/Gateway.php中设置心跳检测，主要是如下三个选项

```ini
;服务端向客户端发送心跳数据的时间间隔 单位：秒。如果设置为0代表不发送心跳检测
ping_interval = 10

;客户端连续ping_not_response_limit次ping_interval时间内不回应心跳则断开链接。
;如果设置为0代表客户端不用发送回应数据，即通过TCP层面检测连接的连通性（极端情况至少10分钟才能检测到）
ping_not_response_limit = 2

;要发送的心跳请求数据，将心跳请求保存成文件，然后配置文件路径 如ping_data=/yourpath/ping.data，
;workerman会将此文件中的内容当作心跳请求发送给客户端
;注意 心跳请求数据一定要符合你的通讯协议
ping_data = ../applications/Chat/ping.data

```

## ping.data 文件如何生成
workerman会将```ping_data```文件中的内容当作心跳请求发送给客户端。首先一定要注意```ping.data```要符合你的通讯协议，例如是websocket协议，则ping.data中保存的是websocket协议的数据。

**假如**要生成一个内容为 ```{"type":"ping"}``` 的websocket
协议的心跳检测数据，可以这样生成：

```php
php -a
include './applications/Chat/Protocols/WebSocket.php';
file_put_contents('./applications/Chat/ping.data', \Protocols\Websocket::encode('{"type":"ping"}'));
```
然后配置 ```ping_data = ./applications/Chat/ping.data``` 即可。```ping_data```文件按的位置可以随意。注意相对路径是以workerman路径为参考的，例如workerman-chat/workerman。

**假如**生成一个同样内容为```{"type":"ping"}```的 jsonProtocol 协议的心跳数据,可以这样生成

```php
php -a
include './applications/Chat/Protocols/JsonProtocol.php';
file_put_contents('./applications/Chat/ping.data', \Protocols\JsonProtocol::encode(array('type'=>'ping')));
```

**假如**生成一个内容为```{"type":"ping"}```的 json+回车 为协议的心跳检测数据，则可以直接新建一个文件，输入{"type":"ping"}然后后面打一个回车即可。

## 技巧1
``` WorkerMan>=2.1.4 ```

如果客户端有定时向服务端发送心跳检测，则服务端可以不必向客户端发送心跳检测，即利用客户端主动发送的数据判断客户端是否存活。这时我们需要设置```ping_data=```,例如如下配置
```
ping_interval = 10
ping_not_response_limit = 2
ping_data =
```
代表服务端不发送任何心跳数据，但是客户端如果 ```ping_interval*ping_not_response_limit=20``` 秒内连接上没有任何请求则断开连接

## 技巧2
服务端可以只发送心跳检测，而不要求客户端必须回应，则可以像下面这样设置（假设ping.data文件已经准备好）。
```
ping_interval = 10
ping_not_response_limit = 0
ping_data = ../applications/Chat/ping.data
```
其中```ping_not_response_limit = 0```代表服务端允许客户端不响应心跳，也就是通过TCP层面检测连接的状态，这样如果客户端因为断电等极端情况断开连接，可能需要等待TCP超时重传多次才能感应到连接断开，耗时较长。
