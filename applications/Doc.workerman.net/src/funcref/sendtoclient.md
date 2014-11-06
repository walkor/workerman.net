# SocketWorker::sendToClient
(```WorkerMan>=2.0，基础开发模型```)   此方法直接可以调用

## 说明:
```php
mixed SocketWorker::sendToClient($buffer_so_send)
```

关闭客户端的连接

## 参数

``` $buffer_so_send ```

要发送的数据（可以是二进制数据）

## 返回值

如果返回true，说明发送成功（成功写入到本地系统socket发送缓冲区）。

如果返回null，则说明没有发送成功（可能是本地系统socket发送缓冲区已满），数据会放到WorkerMan自身的发送缓冲区中，WorkerMan会异步等待数据可发送时(本地系统socket发送缓冲区可写)再发送。如果发送失败，则在WorkerMan统计```send_fail```会加一。使用```workermand status```可以看到计数

如果返回false，则代表发送失败。失败原因可能是超过WorkerMan发送缓冲区限制（在```max_send_buffer_size```中配置，这种情况会有日志产生）;可能是客户端已经关闭;发送的数超过了udp包的大小限制（当配置listen指定的是udp传输层协议时）

## 范例


```php
public function dealProcess($recv_buf)
{
    // send what client send
    $this->sendToClient($recv_buf);
}

```
