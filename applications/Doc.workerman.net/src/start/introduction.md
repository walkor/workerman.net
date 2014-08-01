#简介

## WorkerMan是什么
workerman是一个高性能的PHP Socket服务器框架，它类似[PHP-FPM](http://php.net/manual/zh/install.fpm.php)，提供进程控制及socket通讯功能，区别是[PHP-FPM](http://php.net/manual/zh/install.fpm.php)是以[FAST-CGI](http://baike.baidu.com/view/641394.htm)的协议对外提供服务的，而workerman却可以支持各种协议（包括自定义协议），并且支持长链接，支持进程内全局对象资源等永久保持等特性。

## WorkerMan能做什么
虽然workerman可以作为Webserver的替代Nginx PHP-FPM等架构，并且性能也比Nginx PHP-FPM高，但是我们不推荐这样做，因为PHP的WebServer市场上已经很成熟了，workerman不会再去做重复的事情。反而workerman把精力花在传统WebServer无法胜任的角色上，例如**非**HTTP协议的应用、TCP长链接应用、UDP应用、IM、游戏服务器、物联网等。
