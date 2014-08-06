# 2014-08-06
### 版本号 2.1.2
* 将```FileReceiverDemo```、```BenchMark```从```applications```移出
* ```ChatDemo```目录更名为```Demo```
* ```Demo```中```Event.php``` 增加 ```onGatewayConnect```事件，即当客户端连接到```gateway```进程时触发的事件
* ```Demo```支持```$_SESSION```超级变量
* ```Demo``` 中支持```$_SERVER['REMOTE_ADDR']```(客户端ip)、```$_SERVER['REMOTE_PORT']```（客户端端口）、```$_SERVER['GATEWAY_ADDR']```（gateway进程所在内网通信ip）、```$_SERVER['GATEWAY_PORT']```（gateway进程内网通信端口）、```$_SERVER['GATEWAY_SOCKET_ID']```（对应gateway进程的socketid）超级变量
* ```Demo```增加命名空间
* ```Demo```支持文件自动加载
* ```Demo```中Gateway::sendToAll($message, $uid_array);方法增加$uid_array参数，用来向特定uid群体发送消息

