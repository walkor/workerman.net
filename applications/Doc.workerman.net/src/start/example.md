# 应用开发实例（提供服务器信息）
(```WorkerMan>=2.0，基础开发模型```)

### 本示例功能
* 开放端口8181给外部
* 通过这个端口能够返回当前服务器日期
* 通过这个端口能够返回当前服务器负载
* 你可以返回其它数据...

### 本示例工作流程
1、telnet 到服务端8181端口

2、输入date回车，回显服务器日期

3、输入load回车，回显服务器负载

5、输入quit回车，断开链接


### 开发流程流程
1、订制协议
由于需要使用telnet客户端，则协议应该是 文本+回车

2、建立一个文件```applications/EchoService/EchoService.php```并实现dealInput、dealProcess如下

```php
<?php
class EchoService extends \Man\Core\SocketWorker
{
   /**
    * 判断telnet客户端发来的数据是否接收完整
    */
   public function dealInput($recv_buffer)
   {
        // 根据协议,判断最后一个字符是不是回车 \n
        if($recv_buffer[strlen($recv_buffer)-1] != "\n")
        {
            // 不是回车返回1告诉workerman我还需要再读一个字符
            return 1;
        }
        // 告诉workerman数据完整了
        return 0;
   }

   /**
    * 处理业务逻辑，这里只是按照telnet客户端发来的命令返回对应的数据
    */
   public function dealProcess($recv_buffer)
   {
        // 判断telnet客户端发来的是什么
        $cmd = trim($recv_buffer);
        switch($cmd)
        {
            // 获得服务器的日期
            case 'date':
            return $this->sendToClient(date('Y-m-d H:i:s')."\n");
            // 获得服务器的负载 （注意：sys_getloadavg只支持Linux系统）
            case 'load':
            return $this->sendToClient(var_export(sys_getloadavg(), true)."\n");
            case 'quit':
            return $this->closeClient($this->currentDealFd);
            default:
            return $this->sendToClient("unknown cmd\n");
        }
   }
}

```

3、配置与启动
建立配置文件 ```workerman/conf/conf.d/EchoService.conf```,内容如下
```in
;监听ip及端口
;进程入口文件
worker_file = ../applications/EchoService/EchoService.php
;监听的端口
listen = tcp://0.0.0.0:8181
;是否是长连接
persistent_connection = 1
;启动多少进程
start_workers=4
;以哪个用户运行这个worker进程，应该用权限较低的用户如www-data nobody等
user=root
;预读长度，由于协议是 文本+回车 ，最小请求为 回车1个字符，这里设置为1
preread_length=1
```
启动workerman 运行 ```./workerman/bin/workermand start```

4、测试（以telnet作为客户端）
运行 telnet
```
telnet 127.0.0.1 8181
Trying 127.0.0.1...
Connected to 127.0.0.1.
Escape character is '^]'.
date
2014-08-22 15:50:17
load
array (
  0 => 1.83,
  1 => 1.69,
  2 => 1.65,
)
quit
Connection closed by foreign host.
```

### php客户端
一般我们都是通过php去获取数据，就像在php中读取mysql数据一样。在php调用EchoService服务如下：
```php
<?php
// 建立与服务端的链接
$socket = stream_socket_client("tcp://127.0.0.1:8181", $err_no, $err_msg);
if(!$socket)
{
   exit($err_msg);
}

// 设置为阻塞模式
stream_set_blocking($socket, true);

// 发送date命令
stream_socket_sendto($socket, "date\n");
// 读取服务端返回的数据
echo stream_socket_recvfrom($socket, 65535);

// 发送load命令
stream_socket_sendto($socket, "load\n");
// 读取服务端返回的数据
echo stream_socket_recvfrom($socket, 65535);

// 关闭链接
fclose($socket);
```

### 说明
本示例是一个简单的测试示例，是一个长链接应用（即telnet链接后通过这个链接发送多个请求），由于不需要telnet客户端之间传递数据，所有使用基本开发流程开发即可

如果是复杂的长链接应用，例如需要客户端之间通讯，建议使用Gateway/Worker开发流程，能够极大的减少开发工作量。例如```applications/Demo```是一个基于Gateway/Worker模型开发的聊天示例，支持群聊私聊，客户端同样是telnet



