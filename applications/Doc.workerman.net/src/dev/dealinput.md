# 实现dealInput接口

dealInput($recv_buffer)接口是WorkerMan给开发者的一个钩子函数，是专门用来处理请求边界问题的。

当Workeran收到请求后，会将之前收到的未处理的buffer加上这次收到的buffer拼接并通过$recv_buffer传递给dealnput函数，让dealInput函数来判断$recv_buffer是否是一个完整的请求数据，如果是完整的则返回0，如果不是则返回N，返回N代表还差N个字节请求数据才接收完整，则WorkerMan会继续等待/读取其余数据。如果```N<0``` 或者```N===false```则代表数据包出错，则当前链接会断开，这时WorkerMan状态统计中对应进程的packet_err会+1，WorkerMan状态可以通过```./bin/workermand status```命令查看。
