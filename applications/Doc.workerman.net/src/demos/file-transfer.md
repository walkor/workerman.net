# 文件传输

### 二进制传输协议说明
四字节网络字节序unsigned int标识整个包的长度 + 一字节char标识文件名长度 + 文件名 + 文件二进制数据

### 创建文件 applications/FileTransferDemo/BinaryTransfer.php

```php
<?php

/*
 * 文件传输协议
 * struct
 * {
 *    unsigned int total_len;  // 整个包的长度。大端，网络字节序
 *    char         name_len;   // 文件名的长度
 *    char         name[name_len]; // 文件名
 *    char         file[total_len - BinaryTransfer::PACKAGE_HEAD_LEN - name_len]; // 文件数据
 * }
 */

class BinaryTransfer extends Man\Core\SocketWorker
{
    // 协议头长度
    const PACKAGE_HEAD_LEN = 5;

    /**
      * 分包，判断数据是否完整
      * 不完整返回还需要多少字节数据要接收
      * 完整的话返回0
      *
      */
    public function dealInput($recv_buffer)
    {
        $recv_len = strlen($recv_buffer);
        // 如果不够一个协议头的长度，则继续等待
        if($recv_len < self::PACKAGE_HEAD_LEN)
        {
            return self::PACKAGE_HEAD_LEN - $recv_len;
        }
        // 解包
        $package_data = unpack('Ntotal_len/Cname_len', $recv_buffer);
        // 整个包的长度
        $total_len = $package_data['total_len'];
        // 返回还有多少字节没有收完
        return $total_len - $recv_len;
    }

    /**
      * 收到完整上传数据后如何处理
      * 这里将文件保存到了tmp目录
      */
    public function dealProcess($recv_buffer)
    {
        // 解包
        $package_data = unpack('Ntotal_len/Cname_len', $recv_buffer);
        // 文件名长度
        $name_len = $package_data['name_len'];
        // 从数据流中截取出文件名
        $file_name = substr($recv_buffer, self::PACKAGE_HEAD_LEN, $name_len);
        // 从数据流中截取出文件二进制数据
        $file_data = substr($recv_buffer, self::PACKAGE_HEAD_LEN + $name_len);
        // 文件保存路径
        $save_path = "/tmp/$file_name";
        // 保存文件
        file_put_contents($save_path, $file_data);
        // 发送给客户端结果
        $this->sendToClient("upload $file_name to $save_path success.\n");
    }

}
```

## 创建配置文件 workerman/conf/conf.d/BinaryTransfer.conf

```ini
;业务进程入口文件
worker_file = ../applications/FileTransferDemo/BinaryTransfer.php
;传输层协议 ip 及端口
listen = tcp://0.0.0.0:8333
;启动多少服务进程
start_workers = 5
;以哪个用户运行该进程，为了安全请使用权限较低的用户，例如www-data nobody
user = root
;请求到来时预读长度，这里固定5
preread_length = 5
;长链接
persistent_connection = 1
```

## 客户端文件 client.php
```php
<?php
/** 上传文件客户端 **/

// 上传地址
$address = "127.0.0.1:8333";

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
// 设置成阻塞
stream_set_blocking($client, 0);

// 文件名
$file_name = basename($file_to_transfer);

// 文件名长度
$name_len = strlen($file_name);

// 文件二进制数据
$file_data = file_get_contents($file_to_transfer);

// 协议头长度 4字节包长+1字节文件名长度
$PACKAGE_HEAD_LEN = 5;

// 协议包
$package = pack('NC', $PACKAGE_HEAD_LEN  + strlen($file_name) + strlen($file_data), $name_len) . $file_name . $file_data;

// 执行上传
fwrite($client, $package);

// 打印结果
echo fread($client, 8192);
```

## 测试

```php
// 命令行运行，其中$filepath是本地文件的路径
php client.php $filepath
```
