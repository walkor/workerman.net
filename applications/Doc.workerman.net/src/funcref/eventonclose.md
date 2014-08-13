# Event::onClose
(WorkerMan>=2.0)

## 说明:
```
void Gateway::onClose(int $uid);
```

客户端主动断开时触发。一般在这里做一些数据清理工作

## 参数
``` $uid ```

该链接上绑定的id，与```GateWay::notifyConnectionSuccess($uid)```中的```uid```一致


## 范例

```
/**
 * 当用户断开连接时触发的方法
 * @param integer $uid 断开连接的用户id
 * @return void
 */
public static function onClose($uid)
{
   // 广播 xxx 退出了
   GateWay::sendToAll(TextProtocol::encode("{$_SESSION['name']}[$uid] logout"));
}
```
