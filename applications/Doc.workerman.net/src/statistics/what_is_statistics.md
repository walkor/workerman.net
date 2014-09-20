# 关于统计监控模块

当我们的程序部署在正式环境后，我们需要监控我的程序是否运行正常。统计监控模块就是用来监控系统运转情况的一个工具，它提供了一些重要接口的调用情况，如各个时段的调用量、调用耗时、成功率、失败日志等等，并以曲线图和表格的形式通过网页展示出来。

例如：http://www.workerman.net:55757


## 代码及配置

* 统计监控系统代码位置在 applications/Statistics 下
* 对应的配置为 workerman/conf/conf.d/下的 StatisticWeb.conf StatisticPrivoder.conf StatisitcWorker.conf

