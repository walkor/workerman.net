# Gateway::sendToAll
(WorkerMan>=2.0)

## 说明:
```
void Gateway::sendToAll(string $send_buffer [, array $uid_array=array()]);
```

向所有客户端或者指定的uid客户端发送```$send_buffer```数据。

## 参数

* ```$send_buffer```

要发送的数据（可能是二进制数据）


* ```$uid_array```

(WorkerMan>=2.1.2)

指定向哪些uid发送，如果不传递该参数或者为空，则是向所有在线用户发送 ```$send_buffer``` 数据

## 范例
```
use \Lib\Gateway;

// 向所有客户端发送数据
Gateway::sendToAll('{"type":"say","content":"Hi ALL !"}');

// 向uid为 101 102 103的客户端发送数据
Gateway::sendToAll('{"type":"say","content":"Hi ALL !"}', array(101, 102, 103));

```
