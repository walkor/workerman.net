# GateWay::storeUid
(WorkerMan>=2.0)

## 说明:
```
void Gateway::storeUid(int $uid);
```

存储当前用户的uid网关通讯地址，当调用```Gateway::sendToUid($uid, $message)```时会获取$uid的网关通讯地址进行通讯


## 参数

* ```$uid```

该id应该与```GateWay::notifyConnectionSuccess($uid)```中的```$uid```相同


## 范例
```
use \Lib\Gateway;

// 存储当前用户的uid网关通讯地址
Gateway::storeUid($uid);
```
