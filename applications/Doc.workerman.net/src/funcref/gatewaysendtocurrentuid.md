# Gateway::sendToCurrentUid
(WorkerMan>=2.0)

## 说明:
```
void Gateway::sendToCurrentUid(string $send_buffer);
```

向当前客户端发送```$send_buffer```数据。

## 参数

* ```$send_buffer```

要发送的数据（可能是二进制数据）

## 范例
```
use \Lib\Gateway;

// 向当前客户端发送数据
Gateway::sendToCurrentUid('{"type":"say","content":"Hi ALL !"}');
```
