# 2015-01-31
### 版本号: 3.0.0
### 下载地址: [点击下载版本3.0.0](https://github.com/walkor/workerman/archive/master.zip)
### 特性更新
1、内核全部重写

2、增加Worker类，作为WorkerMan的基础功能单元，用于初始化服务端口、协议、进程数等

3、去掉原有WorkerMan的配置机制，所有配置变成类的属性

4、增加Connection类，每个连接为一个connection对象，用于发送数据，获得连接属性，也可以动态向其添加用户数据

5、业务代码不再规定必须继承SocketWorker类，而以更灵活的onMessage等钩子的方式调用业务逻辑，降低业务与WorkerMan的耦合度

6、协议相关优化，业务代码不在和协议耦合在一起，可以方便的切换协议或者支持多协议。规范了协议接口，所有协议必须遵循协议接口规范

7、Gateway/Worker模型除了初始化时与Worker类似，接口无变化，同样Event.php中业务不在有协议相关的处理逻辑，协议全部在Gateway进程处理

8、Gateway/Worker模型去掉了onGatewayMessage接口，onGatewayConnect接口名称变为onConnect。至此Event.php中可用的接口实现分别为 onConnect、onMessage、onClose


### 升级注意事项

此次版本更新变化很大，主要是让WorkerMan开发更简单，增加了Worker、Connection，优化了协议处理，已经基于2.x开发的WorkerMan没有必要更新到此版本。新的项目可以基于3.x开发







