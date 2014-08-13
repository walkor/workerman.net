# Gateway::kickCurrentUser
(WorkerMan>=2.0)

## 说明:
```
void Gateway::kickCurrentUser(string $message);
```

踢掉当前socket连接，使当前的客户端下线

## 参数

* ``` $message ```

断开连接前，向客户端发送的消息。（注意有可能客户端还没有收到消息时就断开连接了，```$message```可能发不到客户端）

## 范例
```
use \Lib\Gateway;

// 使得当前客户端连接下线
Gateway::kickCurrentUser('');
```
