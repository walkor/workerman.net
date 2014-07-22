# 相关规范

## 应用程序目录

应用程序目录没有规定固定的位置，一般放在applications目录下，如applications/ChatApp

## 入口文件

和nginx+PHP-FPM下的PHP应用程序一样，WorkerMan中的应用程序也需要一个入口文件，但是入口文件一般不叫index.php，而是和项目相关的有意义的名字，如ChatApp.php。入口文件需要满足以下约定：

1、应用入口文件必须继承```Man\Core\SocketWorker```类

2、入口文件名规定和文件里面类名一样，如 ```class ChatApp extends Man\Core\SocketWorker```,则入口文件的名字为MyApp.php

3、入口文件必须实现```Man\Core\SocketWorker```中的 ```dealInput```、```dealProcess``` 方法

## 配置文件

1、配置文件在```workerman/conf/conf.d/```下

2、配置文件名称一般与入口文件名相同并以conf为后缀，如```workerman/conf/conf.d/ChatApp.conf```




