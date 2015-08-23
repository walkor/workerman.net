<ul class="breadcrumb">
	<li>
		<a href="/applications">相关应用</a> <span class="divider"></span>
	</li>
	<li class="active">
		PHP聊天室框架
	</li>
</ul>
<div class="row clearfix">
		<div class="col-md-7 column">
			<h2>
				PHP聊天室框架
			</h2>
			<p class="f16">
				workerman-chat是一个以workerman作为服务器容器，使用PHP开发的基于Websocket协议的一个可分布式部署的聊天室框架。
			</p>
			<p class="f16">
				workerman-chat采用gateway workers 进程模型。gateway只负责网络IO，全异步非阻塞，每个gateway进程都可以同时接受上万客户端连接。
				workers采用的是PHP开发者所熟悉的同步模型，并提供了开发者基本的接口 onConnect、onMessage、onClose、sendToClient、sendToAll等方法。
				开发者只要在onConnect、onMessage、onClose三个方法中添加上自己的业务逻辑即可，开发维护非常简单。
			</p>
			<p class="f16">
				由于采用的是gateway workers 进程模型，gateway和workers之间是无状态的，gateway和workers可以分别部署在不同的物理机上，所以扩容和升级都非常方便。
				workerman-chat也非常适合游戏后台开发。
			</p>
			<p class="f16"><a href="http://chat.workerman.net" target="_blank">查看php聊天室demo请点击<b>这里</b></a></p>
			<h3>
				特性
			</h3>
			<ul>
			<li>使用PHP开发</li>
			<li>PHP多进程</li>
			<li>gateway workers进程模型</li>
			<li>支持libevent事件轮询库，支持高并发</li>
			<li>默认使用Websocket协议，更小带宽，更好性能</li>
			<li>支持分布式部署，可横向扩容</li>
			<li>客户端跨浏览器支持（需要浏览器支持html5或者flash）</li>
			<li>多房间支持</li>
			<li>支持私聊</li>
			<li>支持心跳检测</li>
			<li>同样非常适合游戏后台开发</li>
			</ul>
			<div class="bd-ad"><?php global $bd_ad_468_60; echo $bd_ad_468_60;?></div>
		</div>
		<div class="col-md-5 column text-center">
			<h3>其它应用</h3>
			<div class="list-group">
				<a class="list-group-item" href="/workerman-vmstat">vmstat服务器状态监控服务</a>
				<a class="list-group-item" href="/web-sender">WEB消息推送框架</a>
				<a class="list-group-item" href="/browserquest">BrowserQuest PHP版本</a>
				<a class="list-group-item" href="/camera">摄像头视频直播</a>
				<a class="list-group-item" href="/workerman-thrift">Thrift RPC 远程调用框架</a>
				<a class="list-group-item" href="/workerman-jsonrpc">Json RPC远程调用框架</a>
				<div class="list-group-item active">
					聊天室框架
				</div>
				<a class="list-group-item" href="/workerman-statistics">统计监控系统</a>
				<a class="list-group-item" href="/workerman-todpole">PHP小蝌蚪实时交互游戏&nbsp;&nbsp;<font style="font-size:12px;color:red;">hot</font></a>
				<a class="list-group-item" href="/workerman-flappybird">flappy bird 多人在线版游戏</a>
			</div>
			<div class="thumbnail">
				<div class="caption-download">
					<h4>下载PHP 聊天室框架</h4>
					<p></p><table><tbody><tr><td><iframe src="http://ghbtns.com/github-btn.html?user=walkor&amp;repo=workerman-chat&amp;type=watch&amp;count=true&amp;size=large" height="30" width="170" frameborder="0" scrolling="0" style="width:150px; height: 30px;" allowtransparency="true"></iframe></td><td><iframe src="http://ghbtns.com/github-btn.html?user=walkor&amp;repo=workerman-chat&amp;type=fork&amp;count=true&amp;size=large" height="30" width="170" frameborder="0" scrolling="0" style="width:150px; height: 30px;" allowtransparency="true"></iframe></td></tr></tbody></table><p></p>
					<a class="btn btn-default btn-large" href="https://github.com/walkor/workerman-chat" target="_blank"><b>Fork on Github</b></a>&nbsp;
					<a class="btn btn-default btn-large" href="/download/chatzip"><b>下载ZIP压缩文件</b> </a> <font class='f11 gray'>下载<?php echo $chat_download_count;?>次</font>
					<br><br>
					<h4>Windows版本下载</h4>
					<a class="btn btn-default btn-large" href="https://github.com/walkor/workerman-chat-for-win"><b>下载Win版本ZIP压缩文件</b> </a> 
				</div>
			</div>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-12 column">
			
			<h3>
				linux环境安装启动
			</h3>
			<p>1、<a href="/download/chatzip" target="_blank">下载</a>workerman-chat，并解压缩到任意目录</p>
			<p>2、启动workerman<code>php start.php start -d</code>如下图</p>
			<img src="/img/workerman-chat-start.png" alt="php聊天室启动示意图"/>
			<p>3、浏览器访问端口http://ip:55151或者http://域名:55151，例如<a href="http://chat.workerman.net">http://workerman.net:55151</a>如图：</p>
			<img src="/img/workerman-chat-page.png" alt="php聊天室使用界面"/>
			<h3>Windows版本安装启动</h3>
			<p>1、点击<a href="https://github.com/walkor/workerman-chat-for-win/archive/master.zip">这里</a>下载windows版本聊天室源码</p>
			<p>2、参考<a href="/windows" >这里</a>设置PHP环境变量</p>
			<p>3、双击start_for_win.bat运行</p>
			<p>4、关闭终端停止</p>
			<h3>说明</h3>
			<p>本聊天室业务逻辑非常简单，业务逻辑都在文件./Applications/Chat/Event.php中，开发者可以随意修改，比如增加表情等功能</p>
			<br>
		</div>
	</div>