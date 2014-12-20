# 如何使用

WorkerMan的一些demo或者例子已经集成了统计监控系统，会自动统计一些重要的监控数据。

如果业务想要监控自己感兴趣的接口或者想在其它项目中使用，可以参考本节

## 客户端的使用

1、客户端位置在applications/Statistics/Clients/StatisticClient.php，客户端只有一个文件，将该文件拷贝到需要监控的项目

2、引入客户端文件

3、上报示例

```php
<?php
require 'yourpath/StatisticClient.php';
// 统计开始
StatisticClient::tick("User", 'getInfo');
// 统计的产生，接口调用是否成功、错误码、错误日志
$success = true; $code = 0; $msg = '';
// 假如有个User::getInfo方法要监控
$user_info = User::getInfo();
if(!$user_info){
    // 标记失败
    $success = false;
    // 获取错误码，假如getErrCode()获得
    $code = User::getErrCode();
    // 获取错误日志，假如getErrMsg()获得
    $msg = User::getErrMsg();
}
// 上报结果
StatisticClient::report('User', 'getInfo', $success, $code, $msg);
```

## 服务端的使用

1、如果要单独部署服务端，可以从这个连接下载服务端 http://www.workerman.net/workerman-statistics

2、如果应用上已经运行了统计系统，例如Gateway/Worker模型的applications/Demo、workerman-chat等,则可以不用再部署服务端

3、服务端的配置可以用默认值

4、通过网页浏览器访问 ip:55757查询统计数据，55757是默认端口，可以在conf.d\StatisticsWeb.conf里更改

5、55757端口可以改成80端口，但是要确认80端口没有被其它WebServer占用，例如apache、nginx等

6、可以把ip:55757这个服务部署在apache或者nginx下，只要将根目录指向applications\Statistics\Web即可

7、首次使用服务端需要配置数据源的ip（运行了统计监控系统的服务器ip），可以自动探测或者手动添加。

