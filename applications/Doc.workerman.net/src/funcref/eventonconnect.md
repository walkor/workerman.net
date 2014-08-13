# Event::onConnect
(WorkerMan>=2.0)

## 说明:
```
void Gateway::onConnect(string $recv_buffer);
```

当前链接没调用GateWay::notifyConnectionSuccess($uid)前（即没有得到验证）发送的请求都触发onConnect

已经调用GateWay::notifyConnectionSuccess($uid)的连接上有请求消息时，则触发onMessage

## 参数
``` $recv_buffer ```

完整的客户端请求数据。

## 范例

```
/**
 *
 * 这里一般是通过客户端传递的$message验证用户
 * 并绑定socket连接与uid
 */
public static function onConnect($message)
{
   /*
    * 通过message验证用户，并获得uid。
    * 一般流程这里$message应该包含用户名密码，然后根据用户名密码从数据库中获取uid
    * （checkUser的实现这里省略）
    */
   $uid = checkUser($message);
   // 不合法踢掉
   if(!$uid)
   {
       // 踢掉
       return GateWay::kickCurrentUser(TextProtocol::encode('uid非法'));
   }

   // 获取用户信息（getUserInfo的实现这里省略）
   $user_info = getUserInfo($uid);

   // 将用户信息存储在session中，下次该连接上有请求到来时，不必再读数据库，可以直接使用
   $_SESSION['name'] = $user_info['name'];
   $_SESSION['sex'] = $user_info['sex'];

   // [这步是必须的]合法，记录uid到gateway通信地址的映射
   GateWay::storeUid($uid);

   // [这步是必须的]当前连接于uid绑定
   GateWay::notifyConnectionSuccess($uid);

   // 广播所有用户，xxx come
   GateWay::sendToAll(TextProtocol::encode("{$_SESSION['name']}[$uid] come"));
}
```
