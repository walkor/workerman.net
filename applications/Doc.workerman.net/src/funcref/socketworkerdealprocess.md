# SocketWorker::dealProcess
(```WorkerMan>=2.0，基础开发模型```)

## 说明:
```php
void SocketWorker::dealProcess(string $recv_buffer)
```

当```SocketWorker::dealInput($recv_buffer)``` 返回0，即收到一个完整请求时触发。此函数是业务处理函数，即根据请求内容做相应的处理。

## 参数
``` $recv_buffer ```

一个完整的客户端请求


## 范例

例如json+回车协议，一个请求 ``` {"type":"say_to_all", "content":"Hello everybody！"}\n ```

```php
public function dealProcess($recv_str)
{
    $req_data = json_decode(trim($recv_str));
    switch($req_data['type'])
    {
        case 'say_to_all':
            // say_to_all函数实现省略
            say_to_all($req_data['content']);
        case .......
    }
}

```
