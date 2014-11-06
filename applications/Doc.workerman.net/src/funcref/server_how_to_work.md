##WorkerMan中```$_SERVER```原理
**(```WorkerMan>=2.1.2，Gateway/Worker模型```)**

在WorkerMan的Gateway/Worker模型中，每个客户端都会连接在gateway进程上，当gateway进程收到客户端的数据时，会将客户端的ip端口及client_id连通消息传递给worker进程，worker进程初始化$_SERVER数组（包含GATEWAY_ADDR/GATEWAY_PORT）。
