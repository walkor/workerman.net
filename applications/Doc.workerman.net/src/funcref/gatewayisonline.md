# Gateway::isOnline
(WorkerMan>=2.1.2)

## 说明:
```
int Gateway::isOnline(int $uid);
```

判断$uid对应的连接是否还在线


## 参数

* ```$uid```

该id应该与```GateWay::notifyConnectionSuccess($uid)```中的```$uid```相同

## 返回值
在线返回1，不在线返回0


## 范例
```
use \Lib\Gateway;

// 判断$uid对应的连接是否还在线
Gateway::isOnline($uid);
```
