# Gateway::kickUid
(WorkerMan>=2.0)

## 说明:
```
void Gateway::kickUid(int $uid, string $message);
```

踢掉与$uid绑定的socket连接，使对应的客户端下线


## 参数

* ```$uid```

该id应该与```GateWay::notifyConnectionSuccess($uid)```中的```$uid```相同

* ``` $message ```

断开连接前，向客户端发送的消息。（注意有可能客户端还没有收到消息时就断开连接了，```$message```可能发不到客户端）


## 范例
```
use \Lib\Gateway;

// 使得$uid对应的连接下线
Gateway::kickUid($uid, '');
```
