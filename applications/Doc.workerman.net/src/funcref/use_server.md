###```$_SERVER```使用场景
**(```WorkerMan>=2.1.2，Gateway/Worker模型```)**

当需要在Event.php中获得客户端的ip及端口信息时，可以使用```$_SERVER['REMOTE_ADDR']```和```$_SERVER['REMOTE_PORT']```获得。当想在某个函数逻辑处理时获得当前客户端的client_id时，可以使用```$_SERVER['GATEWAY_CLIENT_ID']```方便的获得

###WorkerMan中$_SERVER使用注意事项
* ```$_SERVER['GATEWAY_ADDR'] ``` 和 ```$_SERVER['GATEWAY_PORT']```开发者一般用不到，可以忽略。


