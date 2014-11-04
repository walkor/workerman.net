# 什么是超全局数组```$_SESSION```
**(```WorkerMan>=2.1.2，Gateway/Worker模型```)**

###什么是超全局数组```$_SESSION```
WorkerMan中的超全局数组```$_SESSION```和PHP自身的```$_SESSION```功能基本相同。每个client_id对应一个```$_SESSION```数组，```$_SESSION```数组中可以保存对应客户端的会话数据，对应的client_id的后续请求可以直接使用这个数据。
