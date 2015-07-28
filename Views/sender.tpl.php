<ul class="breadcrumb">
	<li>
		<a href="/applications">相关应用</a> <span class="divider"></span>
	</li>
	<li class="active">
		WEB消息推送框架
	</li>
</ul>
<div class="row clearfix">
		<div class="col-md-7 column">
			<h2>
				WEB消息推送框架
			</h2>
			<p class="f16">
				web-msg-sender 是一款web推送框架，采用服务器推送技术，通讯基于WebSocket协议，如果浏览器不支持WebSocket则自动转用flash websocket推送。
				通过后台推送消息，消息可以即时推送到客户端，可以做到针对某个用户推送数据（需要开发）。服务端采用Workerman，支持Epoll，能够轻松支持上万并发连接，非轮询，性能极高。
			</p>
			<p class="f16">
				web-msg-sender采用经典的gateway worker进程模型。gateway只负责网络IO，负责接受网页上发来的websocket连接，维持这些连接。Gateway进程是全异步非阻塞的，每个gateway进程都可以同时接受上万客户端连接。
				workers采用的是PHP开发者所熟悉的同步模型，开发者选择性的实现onConnect、onMessage、onClose回调皆可轻松扩展功能，开发扩展非常容易。
			</p>
			<p class="f16">
				gateway worker之间是无状态的，gateway和workers可以分别部署在不同的物理机上，实现分布式部署，扩容和升级都非常方便。
				业务接入只需要引入一段js即可实现推送，能做到与现有业务解耦，整合维护很简单。
			</p>
			<p class="f16">后台发消息的Demo页面：<a href="http://workerman.net:3333/" target="_blank" rel="nofollow">http://workerman.net:3333/</a></p>
			<p class="f16">用户接受消息的Demo页面：<a href="http://workerman.net/web-msg-sender.html" target="_blank" rel="nofollow">http://workerman.net/web-msg-sender.html 可以多开几个</a></p>
			<div class="bd-ad"><?php global $bd_ad_468_60; echo $bd_ad_468_60;?></div>
		</div>
		<div class="col-md-5 column text-center">
			<h3>其它应用</h3>
			<div class="list-group">
				<a class="list-group-item" href="/workerman-vmstat">vmstat服务器状态监控服务</a>
				<div class="list-group-item active">
					WEB消息推送框架
				</div>
				<a class="list-group-item" href="/browserquest">BrowserQuest PHP版本</a>
				<a class="list-group-item" href="/camera">摄像头视频直播</a>
				<a class="list-group-item" href="/workerman-thrift">Thrift RPC 远程调用框架</a>
				<a class="list-group-item" href="/workerman-jsonrpc">Json RPC远程调用框架</a>
				<a class="list-group-item" href="/workerman-chat">聊天室框架	</a>
				<a class="list-group-item" href="/workerman-statistics">统计监控系统</a>
				<a class="list-group-item" href="/workerman-todpole">PHP小蝌蚪实时交互游戏&nbsp;&nbsp;<font style="font-size:12px;color:red;">hot</font></a>
				<a class="list-group-item" href="/workerman-flappybird">flappy bird 多人在线版游戏</a>
			</div>
			<div class="thumbnail">
				<div class="caption-download">
					<h4>WEB消息推送框架</h4>
					<p></p><table><tbody><tr><td><iframe src="http://ghbtns.com/github-btn.html?user=walkor&amp;repo=web-msg-sender&amp;type=watch&amp;count=true&amp;size=large" height="30" width="170" frameborder="0" scrolling="0" style="width:150px; height: 30px;" allowtransparency="true"></iframe></td><td><iframe src="http://ghbtns.com/github-btn.html?user=walkor&amp;repo=web-msg-sender&amp;type=fork&amp;count=true&amp;size=large" height="30" width="170" frameborder="0" scrolling="0" style="width:150px; height: 30px;" allowtransparency="true"></iframe></td></tr></tbody></table><p></p>
					<a class="btn btn-default btn-large" href="https://github.com/walkor/web-msg-sender" target="_blank"><b>Fork on Github</b></a>&nbsp;
					<a class="btn btn-default btn-large" href="/download/senderzip"><b>下载ZIP压缩文件</b> </a> <font class='f11 gray'>下载<?php echo $sender_download_count;?>次</font>
				</div>
			</div>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-12 column">
			<h3>
				Linux环境安装启动
			</h3>
			<p>1、<a href="/download/chatzip" target="_blank">下载</a>web-msg-sender，并解压缩到任意目录</p>
			<p>2、启动workerman<code>php start.php start -d</code>如下图</p>
			<img src="/img/sender-start.png" alt="WEB推送启动示意图"/>
			<p>3、浏览器访问端口http://ip:3333或者http://域名:3333，例如<a href="http://workerman.net:3333/">http://workerman.net:3333</a>如图：</p>
			<img src="/img/sender.png" alt="WEB推送使用界面"/>
			<h3>Windows系统安装教程</h3>
			<h4>参见源码中README.md</h4>
			<br>
			<h3>说明</h3>
			<p>本框架逻辑非常简单，业务逻辑都在文件./Applications/Sender/Event.php中，开发者可以随意修改，例如针对某个用户推送消息</p>
		</div>
	</div>