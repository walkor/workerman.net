# SocketWorker::dealInput
(WorkerMan>=2.0)

## 说明:
```
mixed SocketWorker::dealInput(string $recv_buffer)
```

当客户端的socket链接上有数据可读时触发。该函数作用是从TCP请求流中判断请求的边界和支持各种协议。

由于TCP是基于流的，服务端收到的数据可能是不完整的，也可能是多个请求连在一起（粘包），所以要通过这个函数区分请求边界。

区分方法为根据协议约定去解析 ```$recv_buffer```，如果```$recv_buffer```是一个完整的请求，则返回。如果不是一个完整的请求则返回```N```，即再接收```N```字节的数据。如果```$recv_buffer```不符合协议格式可以返回false，此时会主动断开与客户端的链接。

## 参数
``` $recv_buffer ```

客户端请求的数据，包含了之前接收到的不完整的请求数据。

## 返回值
返回值N
* N>0代表当前请求还有N字节数据未接收(N不可以无限大，如果大于conf中配置的max_recv_buffer_size时会记录日志并断开链接)
* N==0代表请求接收完整，进入SocketWorker::dealProcess($recv_buffer)请求处理流程
* N<0 或者 N===false 代表协议出错，会断开与客户端的链接，并记录日志

## 注意：
``` SocketWorker::dealInput ```函数的实现完全依赖与开发者所使用的应用层通信协议。``` SocketWorker::dealInput ``` 通常与conf配置中 preread_length配合使用。conf配置中的```preread_length```配置是为了避免从客户端socket缓冲区内读取了大于一个请求的数据，也就是避免读取越界（在长链接应用中尤其重要）。一个**新**的请求数据到来时WorkerMan预先从客户端的socket缓冲区读取的数据长度，这个长度一定是小于等于**最小合法请求**的数据长度，一般设置为请求协议头的长度，然后通过请求协议头获得本次请求实际数据长度，然后``` SocketWorker::dealInput ``` 再返回```N```告诉WorkerMan本次请求我还需要```N```字节的数据才是一个完整请求。

## 范例

### 1、自定义协议: json+回车

**conf配置:** preread_length=1，最小合法请求为```\n```，即一个回车字符，所以为1

**协议样例:**  ```{"module":"user","action":"getInfo"}\n``` ,其中```\n```代表回车字符
```
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
```

### 2、自定义协议: 首部四字节int+json

其中首部四字节是一个pack的int，代表请求的数据长度

**conf配置:** preread_length=4，最小合法请求可能为值为0的四字节int（一个空请求），所以设置为4

**协议样例:**  ``` ****{"module":"user","action":"getInfo"}``` ,其中``` **** ```首部四字节int，由于是二进制，所以首部四字节看起来是乱码
```
public function dealInput($recv_buffer)
{
    // 接收到的数据长度
    $recv_len = strlen($recv_buffer);
    // 如果接收的长度还不够四字节，那么要等够四字节才能解包到请求长度
    if($redv_len < 4)
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
```

### 3、HTTP协议：

HTTP协议包含协议头与包体，二者直接使用\r\n\r\n分割，POST请求协议头中包含```Content-Length```代表包体的长度。

**conf配置:** preread_length=65535，由于HTTP协议是短链接的，即一个链接上只发一个请求，所以不会有多个请求连在一起的粘包现象，也就是说不会有读取越界的情况，所以预读长度可以设置为很大的值。短链接请求中主要任务就是判断读取的数据是否是一个完整的请求

```
public function dealInput($recv_buffer)
{
    // 协议头不完整，再读一些数据
    if(!strpos($recv_buffer, "\r\n\r\n"))
    {
        return 65535;
    }

    // GET请求只有协议头，POST请求还要读包体，包体长度在协议头中的Content-Length中存储
    if(strpos($recv_buffer, "POST"))
    {
        // 找Content-Length
        $match = array();
        if(preg_match("/\r\nContent-Length: ?(\d*)\r\n/", $recv_buffer, $match))
        {
            $content_lenght = $match[1];
        }
        else
        {
            return 0;
        }
        // 看包体长度是否符合
        $tmp = explode("\r\n\r\n", $recv_buffer, 2);
        $remain_length = $content_lenght - strlen($tmp[1]);
        return $remain_length >= 0 ? $remain_length : 0;
    }

    return 0;
}

```
