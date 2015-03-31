# onBufferFull
## 说明:
```php
callback Worker::$onBufferFull
```

每个连接都有一个单独的应用层发送缓冲区，缓冲区大小由```TcpConnection::$maxSendBufferSize```决定，默认值为1MB，可以手动设置更改大小，更改后会对所有连接生效。

该回调**可能**会在调用Connection::send后立刻被触发，比如发送大数据或者连续快速的向对端发送数据，由于网络等原因数据被大量积压在对应连接的发送缓冲区，当超过```TcpConnection::$maxSendBufferSize```上限时触发。

当发生onBufferFull事件时，开发者一般需要采取措施，例如停止向对端发送数据，等待发送缓冲区的数据被发送完毕(onBufferDrain事件)等。如果已经触发onBufferFull事件，仍然向对端发送数据，并且发送缓冲区仍然是满的状态，则此次发送的数据将会被丢弃。


## 回调函数的参数

``` $connection ```

连接对象


## 范例

```php
use WorkerMan\Worker;
$worker = new Worker('websocket://0.0.0.0:8484');
$worker->onBufferFull = function($connection)
{
    echo "bufferFull and do not send again\n";
};
```

## 参见
onBufferDrain 当连接的应用层发送缓冲区数据全部发送完毕时触发
