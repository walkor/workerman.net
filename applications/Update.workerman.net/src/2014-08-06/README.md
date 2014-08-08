# 2014-08-06
### 版本号 2.1.2
* 将```FileReceiverDemo```、```BenchMark```从```applications```移出
* ```ChatDemo```目录更名为```Demo```
* ```applications/Demo/Event.php``` 增加 ```onGatewayConnect```事件，即当客户端连接到```gateway```进程时触发的事件
* ```applications/Demo```支持```$_SESSION```超级变量
* ```applications/Demo``` 中支持```$_SERVER['REMOTE_ADDR']```(客户端ip)、```$_SERVER['REMOTE_PORT']```（客户端端口）、```$_SERVER['GATEWAY_ADDR']```（gateway进程所在内网通信ip）、```$_SERVER['GATEWAY_PORT']```（gateway进程内网通信端口）、```$_SERVER['GATEWAY_SOCKET_ID']```（对应gateway进程的socketid）超级变量
* ```applications/Demo```增加命名空间
* ```applications/Demo```支持文件自动加载
* ```applications/Demo```中```Gateway::sendToAll($message, $uid_array);```方法增加```$uid_array```参数，用来向特定uid群体发送消息
* ```applications/Demo```增加```Gateway::isOnline($uid)```用来判断用户是否在线
* ```applications/Demo```增加```Gateway::getOnlineStatus()```，获取所有在线用户列表
* 更改```applications/Demo/Lib/Store.php```用法，由原来```Store::xxx()``` 更改为 ```Store::instance('config_name')->xxx();``` ```config_name``` ```Config/Store.php```中配置


###此更新已经应用于，开发者更新时请注意

* workerman/applications/Demo
* workerman-chat
* workerman-todpole
* workerman-falppy-bird


