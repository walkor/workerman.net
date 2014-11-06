###```$_SESSION```使用场景
**(```WorkerMan>=2.1.2，Gateway/Worker模型```)**

例如客户端链接WorkerMan后，需要发送验证数据让服务端验证是否合法，一般要传递一次用户名和密码数据，然后在```Gateway::onMessage($client_id, $message)```中通过查询数据库验证```$message```中的用户名密码是否正确，如果正确就可以将用户的uid写入到```$_SESSION```中如```$_SESSION['uid']=$uid;```，那么当这个client_id再次发来数据时，要判断这个客户端是否是被验证过的，就可以用```$_SESSION['uid']```是否被设置来判断。

###WorkerMan中$_SESSION使用注意事项
* 使用```$_SESSION```时无需调用session_start等函数，可直接使用
* ```$_SESSION```中无法保存对象以及资源

