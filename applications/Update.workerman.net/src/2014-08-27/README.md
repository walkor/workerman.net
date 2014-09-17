# 2014-08-27
### 版本号: 2.1.3
### 下载地址: [点击下载版本2.1.3](https://github.com/walkor/workerman-2.1.3/archive/master.zip)
### 特性更新
```  更新全部针对针对Gateway/Worker模型  ```

**主要是去掉了uid的概念，取而代之使用client_id唯一标志一个客户端（因为一个uid可能发起多个链接，例如聊天室应用中用户登录了多个房间，所以需要client_id唯一标识每个房间的链接，而uid无法唯一标识），注意clien_id是系统自动生成的，为int整型。**

* 去掉```Gateway::onConnect```方法，统一使用```Gateway::onMessage($client_id, $message)```
* 使用```Gateway::sendToClient($client_id, $message)```取代原```Gateway::sendToUid($uid, $message)```
* 使用```Gateway::sendToCurrentClient($message)```取代原来的```Gateway::sendToCurrentUid($message)```
* 使用```Gateway::kickClient($client_id)```取代原来```Gateway::kickUid($uid)```
* 使用```Gateway::kickCurrentClient()```取代原来```Gateway::kickCurrentUid()```
* 废除```Gateway::storeUid```方法，该方法的工作由框架内部自动完成，开发者不用再关注
* 废除```Gateway::notifyConnectionSuccess```方法，该方法的工作由框架内部自动完成，开发者不用再关注
* 废除```Gateway::deleteUidAddress```方法，该方法的工作由框架内部自动完成，开发者不用再关注

**上一版本未验证用户走```Gateway::onConnect($message)```,已经验证的用户**（*调用```Gateway::notifyConnectionSuccess($uid)```验证*）**走```Gateway::onMessage($uid, $message)```，以后的版本废除了```Gateway::onConnect($message)```，统一使用```Gateway::onMessge($client_id, $message)```处理用户请求其中```client_id```由系统自动生成，唯一标识一个客户端，如果想向这个客户端发送消息，使用```Gateway::sendToClient($client_id, $message)```。用户是否已经验证可以使用```$_SESSION```来存储，例如用户合法就设置```$_SESSION['uid']=$uid```，这里的uid才是真正的用户uid，后面的请求就可以通过判断```$_SESSION['uid']```来判断用户是否通过验证**
