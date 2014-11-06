# SocketWorker::getRemoteAddress
(```WorkerMan>=2.0，基础开发模型```)   此方法直接可以调用

## 说明:
```php
string SocketWorker::getRemoteAddress(void)
```

获取客户端ip及端口（注意：当客户端处于一个封闭内网环境时，获取到的是客户端内网的出口ip及端口）

## 返回值
返回客户端ip及端口，例如返回 ```111.222.333.444:36540```

## 范例


```php
public function dealProcess($recv_buf)
{
    $recv_buf = trim($recv_buf);
    switch($recv_buf)
    {
        case 'tell_me_address':
            // $address will be xxx.xxx.xxx.xxx:xxx
            $address = $this->getRemoteAddress();
            $this->sendToClient($address);
            break;
        case 'tell_me_ip':
            // $ip will be xxx.xxx.xxx.xxx
            $ip = $this->getRemoteIp();
            $this->sendToClient($ip);
            break;
        case 'tel_me_port':
            // $port will be xxx
            $port = $this->getRemotePort();
            $this->sendToClient($port);
            break;
        default:
            $this->sendToClient('unknow commend');

    }
}

```

