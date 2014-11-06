# 什么是超全局数组```$_SERVER```
**(```WorkerMan>=2.1.2，Gateway/Worker模型```)**

###什么是超全局数组```$_SERVER```
WorkerMan中的超全局数组```$_SERVER```包含了5个元素，分别是：

  * REMOTE_ADDR // 客户端ip（如果客户端处于局域网，则是客户端所在局域网的出口ip）
  * REMOTE_PORT // 客户端端口（如果客户端处于局域网，则是客户端所在局域网的出口端口）
  * GATEWAY_ADDR // gateway所在服务器的ip
  * GATEWAY_PORT // geteway所在服务器的端口
  * GATEWAY_CLIENT_ID // 全局唯一的客户端id
