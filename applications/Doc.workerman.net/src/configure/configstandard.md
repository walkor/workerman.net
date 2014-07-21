# 2.1 配置规范

1、WorkerMan配置统一放在```workerman/conf/```
下

2、其中```workerman/conf/workerman.conf是WorkerMan```主配置

3、应用程序配置放置于```workerman/conf/conf.d/```下,如```workerman/conf/conf.d/ChatApp.conf```

4、配置的名称与入口文件的名称相同，后缀统一使用.conf

5、配置中涉及路径的可以用相对路径，也可以用绝对路径。其中相对路径是以workerman主程序目录为基准
