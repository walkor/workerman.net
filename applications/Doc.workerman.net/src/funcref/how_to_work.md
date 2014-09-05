##WorkerMan中```$_SESSION```原理
**(```WorkerMan>=2.1.2，Gateway/Worker模型```)**

在WorkerMan的Gateway/Worker模型中，每个客户端的```$_SESSION```数据是存储在Gateway进程内存中的，每次Gateway进程转发消息给BusibuessWorker进程时，都会顺便携带上对应客户端的```$_SESSION```数据给BusibuessWorker进程，这时BusibuessWorker进程就能使用```$_SESSION```了。而当```$_SESSION```数据有更改时，BusibuessWorker会将新的```$_SESSION```数据传递给Gateway进程进行保存。
