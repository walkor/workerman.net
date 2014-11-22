# 2014-09-17
### 版本号: 2.1.4
### 下载地址: [点击下载版本2.1.4](https://github.com/walkor/workerman-2.1.4/archive/master.zip)
### 特性更新
```  更新全部针对针对Gateway/Worker模型  ```
 * 记录了更详细的日志
 * 增加了一些重要接口的统计监控，监控数据在浏览器中访问 ip:55757 查看
 * 心跳设置支持ping_data为空(即设置```ping_data=```)。即服务端不发送心跳，但是会定时检查客户端的最后响应时间，如果在```ping_interval*ping_not_response_limit```时间内客户端一直空闲无任何数据发来则断开客户端的连接。同样```ping_interval=0```时关闭检测。
