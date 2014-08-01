# WorkerMan能做什么
虽然workerman可以作为Webserver的替代Nginx PHP-FPM等架构，并且性能也比Nginx PHP-FPM高，但是我们不推荐这样做，因为PHP的WebServer市场上已经很成熟了，workerman不会再去做重复的事情。反而workerman把精力花在传统WebServer无法胜任的角色上，例如**非**HTTP协议的应用、TCP长链接应用、UDP应用、IM、游戏服务器、物联网等。
