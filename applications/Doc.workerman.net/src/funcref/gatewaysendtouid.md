# Gateway::sendToUid
(WorkerMan>=2.0)

## 说明:
```
void Gateway::sendToUid(int $uid, string $send_buffer);
```

向客户端uid发送```$send_buffer```数据。

## 参数

* ```$uid```

客户端绑定的uid，必须为数字

* ```$send_buffer```

要发送的数据（可能是二进制数据）

## 范例
```
use \Lib\Gateway;

// 向uid为100的客户端发送数据
Gateway::sendToUid(100, '{"type":"say","content":"Hi ALL !"}');

```
