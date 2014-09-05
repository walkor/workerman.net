# SocketWorker类(基础开发模型)
(```WorkerMan>=2.0，基础开发模型```)


**文件位置:**

workerman/Core/SocketWorker.php


**基于WorkerMan基础接口开发：**

SocketWorker类提供了WorkerMan的基本接口，如果开发者想基于WorkerMan基础接口进行开发，入口文件需要继承SocketWorker类，并且必须实现```dealInput```（请求接收）和```dealProcess```（请求处理）方法，才能完成服务的开发。

**基于Gateway/Worker模型开发：**

在Gateway/Worker模型开发中（TCP长链接应用），开发者可以直接使用```applications/Demo```例子开发，dealInput和dealProcess等都应经实现，开发者只需要关注```applications/Demo/Event.php```即可


