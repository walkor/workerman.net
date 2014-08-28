# 超全局数组```$_SESSION```

##注意：
**超全局数组```$_SESSION```只在Gateway /Worker模型中支持**

###什么是超全局数组```$_SESSION```
WorkerMan中的超全局数组```$_SESSION```和PHP自身的```$_SESSION```功能基本相同。每个clien_id对应一个```$_SESSION```数组，```$_SESSION```数组中可以保存对应客户端的会话数据，一旦数据保存下来，则该clien_id的后续请求可以直接使用保存下来的数据。

###使用场景
例如客户端链接WorkerMan后，需要发送验证数据让服务端验证是否合法，一般要传递一次用户名和密码数据，然后在```Gateway::onMessage($client_id, $message)```中通过查询数据库验证```$message```中的用户名密码是否正确，如果正确就可以将用户的uid写入到```$_SESSION```中如``$_SESSION['uid']=$uid;```，那么当这个client_id再次发来数据时，要判断这个客户端是否是被验证过的，就可以用```$_SESSION['uid']```是否被设置来判断。

###WorkerMan中$_SESSION使用注意事项
* 使用```$_SESSION```时无需事先调用session_start函数
* ```$_SESSION```中无法保存对象以及资源


###WorkerMan中$_SESSION原理
在WorkerMan的Gateway/Worker模型中，每个客户端的```$_SESSION```数据是存储在Gateway进程内存中的，每次Gateway进程转发消息给BusibuessWorker进程时，都会顺便携带上对应客户端的```$_SESSION```数据给BusibuessWorker进程，这时BusibuessWorker进程就能使用```$_SESSION```了。

