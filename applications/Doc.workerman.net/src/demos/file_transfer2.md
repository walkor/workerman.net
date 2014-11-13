# 文件传输(文本协议)

### 文本传输协议说明
客户端将二进制文件用base64_encode编码（会增大1/3的体积），转变成明文方便传输。。整体协议采用 json+回车 格式传输，json包含了文件名、文件base64_encode后的数据。协议格式类似如下：

{"file_name":"xxxx.jpg","file_data":"PD9waHAKLyo......"}\n

### 创建文件 applications/FileTransferDemo/TextTransfer.php

```php
<?php
/*
 * 文件传输协议
 * 客户端将文件base64_encode 然后通过 json+回车 协议发送过来
 * 协议样例:
 * {"file_name":"xxx","file_data":"base64_encode(file)"}\n
 *
 */
class TextTransfer extends Man\Core\SocketWorker
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
        // 解包
        $package_data = json_decode(trim($recv_buffer), true);
        if(!isset($package_data['file_name']) || !isset($package_data['file_data']))
        {
            $this->sendToClient("package error\n");
            return;
        }
        // 取出文件名
        $file_name = $package_data['file_name'];
        // 取出base64_encode后的文件数据
        $file_data = $package_data['file_data'];
        // base64_decode还原回原来的二进制文件数据
        $file_data = base64_decode($file_data);
        // 文件保存路径
        $save_path = "/tmp/$file_name";
        // 保存文件
        file_put_contents($save_path, $file_data);
        // 发送给客户端结果
        $this->sendToClient("upload $file_name to $save_path success.\n");
    }

}
```
## 创建配置文件 workerman/conf/conf.d/TextPtotocolTransfer.conf

```ini
;业务进程入口文件
worker_file = ../applications/FileTransferDemo/TextTransfer.php
;传输层协议 ip 及端口
listen = tcp://0.0.0.0:8444
;启动多少服务进程
start_workers = 5
;以哪个用户运行该进程，为了安全请使用权限较低的用户，例如www-data nobody
user = root
;请求到来时预读长度，这里固定1
preread_length = 1
;长链接
persistent_connection = 1
```
## 客户端文件 textclient.php （这里用php模拟客户端上传）

```php
<?php
/** 上传文件客户端 **/

// 上传地址
$address = "127.0.0.1:8444";

// 检查上传文件路径参数
if(!isset($argv[1]))
{
   exit("use php client.php \$file_path\n");
}

// 上传文件路径
$file_to_transfer = trim($argv[1]);

// 上传的文件本地不存在
if(!is_file($file_to_transfer))
{
    exit("$file_to_transfer not exist\n");
}

// 建立socket连接
$client = stream_socket_client($address, $errno, $errmsg);
if(!$client)
{
    exit("$errmsg\n");
}
stream_set_blocking($client, 1);

// 文件名
$file_name = basename($file_to_transfer);

// 文件二进制数据
$file_data = file_get_contents($file_to_transfer);

// base64编码
$file_data = base64_encode($file_data);

// 数据包
$package_data = array(
    'file_name' => $file_name,
    'file_data' => $file_data,
);

// 协议包 json+回车
$package = json_encode($package_data)."\n";

// 执行上传
fwrite($client, $package);

// 打印结果
echo fread($client, 8192);
~
```

## 测试

```php
// 命令行运行，其中$filepath是本地文件的路径
php textclient.php $filepath
```



