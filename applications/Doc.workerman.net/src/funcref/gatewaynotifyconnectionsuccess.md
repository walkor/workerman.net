# GateWay::notifyConnectionSuccess
(WorkerMan>=2.0)

## 说明:
```
void Gateway::notifyConnectionSuccess(int $uid);
```

通知gateway进程，将当前链接与```$uid```绑定（表示当前链接是验证过的合法的链接），当前链接再发来数据时，会触发```Event::onMessage($uid, $message);```,自动获得参数uid。


## 参数

* ```$uid```

全局唯一的id，来唯一标识这个链接。当向这个链接发送数据时```sendToUid```需要提供这个id。注意这个id不一定真的使用用户真实的uid，聊天室应用中，当一个用户登录了多个聊天室，那么就有多个TCP链接，为了区分链接，参数的id不应该与uid相同并且是全局唯一的，这样才能区分向哪个链接发送数据，也就是向哪个聊天室发送数据。


## 范例
```
use \Lib\Gateway;

// 通知gateway进程，将当前链接与$uid绑定，$uid全局唯一的id，不一定用真实的用户的uid
Gateway::notifyConnectionSuccess($uid);
```
