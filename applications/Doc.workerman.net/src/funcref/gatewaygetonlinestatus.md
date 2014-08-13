# Gateway::getOnlineStatus
(WorkerMan>=2.1.2)

## 说明:
```
array Gateway::getOnlineStatus(void);
```

获取当前所有在线id列表，该id与```GateWay::notifyConnectionSuccess($uid)```中的```$uid```相同


## 范例
```
use \Lib\Gateway;

// 打印在线id列表
var_export(Gateway::getOnlineStatus());
```

打印出的数据类似如下：
```
array(
    0=>1001,
    1=>1009,
    2=>99,
);
```
