# 基本模型开发流程

**注意：**如果你开发的应用是**短链接**应用，或者逻辑简单的长连接应用（客户端之间不需要通讯），可以参考此流程。

**注意：**如果是**长连接**应用（客户端之间需要通讯，例如IM聊天室、物联网、移动通讯等应用），建议直接使用Gateway/Worker模型开发（在Demo的基础上修改开发修改），官网的workerman-chat、workerman-todpole、workerman-flappy-bird等都是基于此模型开发的

# 基本开发流程
* [制定协议](/dev/protocols.md)
* [实现dealInput/dealProcess](d/ev/dealinput.md)
* [配置与启动](/dev/configapp.md)
* [基本流程开发示例](/start/example.md)
