# p2p之UDP打洞

### 创建applications/p2p/p2p.php
```php
<?php
class p2p extends Man\Core\SocketWorker
{

    /**
      * 分包，判断数据是否完整
      * 不完整返回还需要多少字节数据要接收
      * 完整的话返回0
      *
     **/
    public function dealInput($recv_buffer)
    {
        if($recv_buffer[strlen($recv_buffer)-1] !== "\n")
        {
            return 1;
        }
        return 0;
    }

    /**
      * 收到完整上传数据后如何处理
      *
     **/
    public function dealProcess($recv_buffer)
    {
        $commend = trim($recv_buffer);
        if($commend !== 'get_address')
        {
            return $this->sendToClient("unknown commend\n");
        }
        // 返回远程客户端的ip及端口
        $address = $this->getRemoteAddress();
        return $this->sendToClient($address);
    }

}
```

### 配置 applications/p2p/conf.d/p2p.conf

```ini
;业务进程入口文件
worker_file = ../p2p.php
;传输层协议 ip 及端口
listen = udp://0.0.0.0:8666
;启动多少服务进程
start_workers = 5
;以哪个用户运行该进程，为了安全请使用权限较低的用户，例如www-data nobody
user = root
;请求到来时预读长度，这里固定1
preread_length = 1
;长链接
persistent_connection = 1
```

### 获得客户端出口ip及端口（php模拟）
```php
<?php
// xxx.xxx.xxx.xxx 为远程workerman服务器ip
$client = stream_socket_client("udp://xxx.xxx.xxx.xxx:8666", $errno, $errmsg);
if(!$client)
{
    exit($errmsg);
}
fwrite($client, "get_address\n");

echo "your address is ".fread($client, 8192)."\n";
```
