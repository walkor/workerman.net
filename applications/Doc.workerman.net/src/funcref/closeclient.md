# SocketWorker::closeClient
(```WorkerMan>=2.0，基础开发模型```)   此方法直接可以调用

## 说明:
```php
void SocketWorker::closeClient([int $fd])
```

关闭客户端的连接

## 参数

``` $fd ```

如果传递了```$fd```，则将关闭```$fd```对应的客户端连接。否则将关闭当前处理的客户端连接

## 范例


```php
public function dealProcess($recv_buf)
{
    $recv_buf = trim($recv_buf);
    switch($recv_buf)
    {
        case 'say_hello':
            $this->sendToClient('hello');
            break;
        case 'quit':
            $this->closeClient();
            break;
        default:
            $this->sendToClient('unknow commend');

    }
}

```
