# 关于统计监控模块

当我们的程序部署在正式环境后，我们需要监控我的程序是否运行正常。统计监控模块就是用来监控系统运转情况的一个工具，它提供了一些重要接口的调用情况，如各个时段的调用量、调用耗时、成功率、失败日志等等，并以曲线图和表格的形式通过网页展示出来。

WorkerMan默认都开启了统计模块，如果想要去掉，可以设置```conf.d/StatisticWeb.conf,StatisticPrivoder.conf,StatisitcWorker.conf```三个配置文件的enable=0，或者删除```applications/Statistics```目录。

## 统计模块界面

默认统计页面通过浏览器访问，默认为55757端口。例如```http://{$ip}:55757```，```$ip```为workerman运行的服务器ip，可在```conf.d/StatisticWeb.conf```配置域名。

界面Demo:http://www.workerman.net:55757


## 代码及配置

* 统计监控系统代码位置在 applications/Statistics 下
* 配置说明见[Statistics统计模块配置](/configure/statisticsconf.html)

