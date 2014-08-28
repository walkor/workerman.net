# 什么是超全局数组$_SESSION

###什么是超全局数组```$_SESSION```
WorkerMan中的超全局数组```$_SESSION```和PHP自身的```$_SESSION```功能基本相同。每个clien_id对应一个```$_SESSION```数组，```$_SESSION```数组中可以保存对应客户端的会话数据，对应的clien_id的后续请求可以直接使用这个数据。
