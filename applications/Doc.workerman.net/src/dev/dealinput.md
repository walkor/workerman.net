# 实现dealInput/dealProcess接口
## dealInput

dealInput($recv_buffer)接口是WorkerMan给开发者的一个钩子函数，是专门用来处理请求边界问题的。

当Workeran收到请求后，会将之前收到的未处理的buffer加上这次收到的buffer拼接并通过$recv_buffer传递给dealnput函数，让dealInput函数来判断$recv_buffer是否是一个完整的请求数据，如果是完整的则返回0，如果不是则返回N，返回N代表还差N个字节请求数据才接收完整，则WorkerMan会继续等待/读取其余数据。如果```N<0``` 或者```N===false```则代表数据包出错，则当前链接会断开，这时WorkerMan状态统计中对应进程的packet_err会+1，WorkerMan状态可以通过```./workerman/bin/workermand status```命令查看。

## dealProcess
dealProcess($recv_buffer)接口是WorkerMan给开发者的一个钩子函数，当dealInput($recv_buffer)返回0即请求完整时被调用。一般在这里根据$recv_buffer获得请求的具体数据，然后做相应的处理

## 几个示例，假如应用叫做MyApp

##### 示例一、以```\n ```为请求结束标记，以json为数据格式
如 ```{"module":"user","action":"getInfo"}\n```是一个请求，我们要能正确读取它，需要以下步骤：

1、设置配置文件preread_length=1，代表一个请求开始时，预先读取的数据1字节长度。为什么是1字节，因为协议规定以```\n```标记一个请求结束，有可能客户端就只发来一个```\n```字符,我们需要处理这种情况，固设置请求到来时先预读一个字符。

2、创建applications/MyApp/MyApp.php并实现dealInput/dealProcess如下
```
class MyApp extends Man\Core\SocketWorker
{
    public function dealInput($recv_buffer)
    {
        // 如果最后一个字符是\n代表数据读取完整，返回0
        if($recv_buffer[strlen($recv_buffer)-1] === "\n")
        {
            return 0;
        }

        // 说明还有请求数据没收到，但是由于不知道还有多少数据没收到，所以只能返回1，因为有可能下一个字符就是\n
        return 1;
    }

    public function dealProcess($recv_buffer)
    {
        // 去除末尾\n，得到完整json字符串
        $json_str = trim($recv_buffer);
        // 根据json字符长解析出$req_data
        $req_data = json_decode(, true);
        // 根据$req_data的值进入不同的处理逻辑
        // ...............
    }
}
```


##### 实例二、首部四个字节网络字节序pack的int+json数据格式

如客户端这样打包

```
// 请求的包体
$req_data = '{"module":"user","action":"getInfo"}';
// 整个请求数据长度，首部4字节+包体
$total_len = pack('N', strlen($req_data)+4)
$req_package =  $total_len . $req_data;
```

得到类似这样的请求数据``` ****{"module":"user","action":"getInfo"} ```，由于首部四个字节是pack的二进制数据，所以首部看起来是乱码。要想正确处理这样的请求，需要如下步骤:

1、设置配置文件中preread_length=4，因为通过请求头部的四个字节，我们能获取到整个数据包的长度，进而能够区分出请求的边界。

2、创建applications/MyApp/MyApp.php并实现dealInput/dealProcess如下
```
class MyApp extends Man\Core\SocketWorker
{
    public function dealInput($recv_buffer)
    {
        // 接收到的数据长度
        $recv_len = strlen($recv_buffer);
        // 如果接收的长度还不够四字节，那么要等够四字节才能解包到请求长度
        if($recv_len < 4)
        {
            // 不够四字节，等够四字节
            return 4 - $recv_len;
        }
        // 从请求数据头部解包出整体数据长度
        $unpack_data = unpack('Ntotal_len', $recv_buffer);
        $total_len = $unpack_data['total_len'];

        // 返回还差多少字节没有收到，这里可能返回0，代表请求接收完整
        return $total_len - $recv_len;
    }

    public function dealProcess($recv_buffer)
    {
        // 去掉首部四个字节，得到完整json字符串
        $json_str = substr($recv_buffer, 4);
        // 根据json字符长解析出$req_data
        $req_data = json_decode($json_str, true);
        // 根据$req_data的值进入不同的处理逻辑
        // ...............
    }
}
```


#### 实例三、首部固定10个字节长度用来保存整个数据包长度，位数不够补0，数据格式为json
请求数据类似 ```0000000046{"module":"user","action":"getInfo"}```,其中```0000000046```代表整个请求```0000000046{"module":"user","action":"getInfo"}```的长度。要想正确处理这这样的请求需要如下步骤：

1、设置preread_length=10，因为要完整读取前10个字节才能获取整个数据包的长度。

2、创建applications/MyApp/MyApp.php并实现dealInput/dealProcess如下

```
class MyApp extends Man\Core\SocketWorker
{
    public function dealInput($recv_buffer)
    {
       // 接收到的数据长度
        $recv_len = strlen($recv_buffer);
        // 如果接收的长度还不够十字节，那么要等够十字节才能解包到请求长度
        if($recv_len < 10)
        {
            // 不够十字节，等够十字节
            return 10 - $recv_len;
        }
        // 从请求数据头部解包出整体数据长度
        $json_str = substr($recv_buffer, 0, 10);
        $total_len = base_convert($json_str, 10, 10);

        // 返回还差多少字节没有收到，这里可能返回0，代表请求接收完整
        return $total_len - $recv_len;
    }

    public function dealProcess($recv_buffer)
    {
        // 去掉首部十个字节，得到完整json字符串
        $json_str = substr($recv_buffer, 10);
        // 根据json字符长解析出$req_data
        $req_data = json_decode($json_str, true);
        // 根据$req_data的值进入不同的处理逻辑
        // ...............
    }
}
```
