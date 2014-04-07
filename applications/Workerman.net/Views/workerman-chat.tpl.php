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
				workers采用的是PHP开发者所熟悉的同步模型，并提供了开发者基本的接口 onConnect、onMessage、onClose、sendToUid、sendToAll等方法。
				开发者只要在onConnect、onMessage、onClose三个方法中添加上自己的业务逻辑即可，开发维护非常简单。
			</p>
			<p class="f16">
				由于采用的是gateway workers 进程模型，gateway和workers之间是无状态的，gateway和workers可以分别部署在不同的物理机上，所以扩容和升级都非常方便。
				workerman-chat也非常适合游戏后台开发。
			</p>
			<p class="f16">查看php聊天室demo请点击<a href="http://workerman.net:55151" target="_blank"><b>这里</b></a></p>
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
			<li>同样非常适合游戏后台开发</li>
			</ul>
		</div>
		<div class="col-md-5 column text-center">
			<h3>其它应用</h3>
			<div class="list-group">
				<a class="list-group-item" href="/workerman-thrift">Thrift RPC 远程调用框架</a>
				<a class="list-group-item" href="/workerman-jsonrpc">Json RPC远程调用框架</a>
				<div class="list-group-item active">
					聊天室框架
				</div>
				<a class="list-group-item" href="/workerman-statistics">统计监控系统</a>
			</div>
			<div class="thumbnail">
				<div class="caption">
					<p class="f24">下载PHP 聊天室框架</p>
					<a class="btn btn-primary btn-large" href="/download/chatzip">下载workerman-chat </a> <font class='f11 gray'>下载<?php echo $chat_download_count;?>次</font>
				</div>
			</div>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-12 column">
			
			<h3>
				安装启动
			</h3>
			<p>1、<a href="/download/chatzip" target="_blank">下载</a>workerman-chat，并解压缩到任意目录</p>
			<p>2、启动workerman<code>./bin/workermand start</code>如下图</p>
			<img src="/img/workerman-chat-start.png" />
			<p>3、浏览器访问端口55151，例如<a href="http://workerman.net:55151">workerman.net:55151</a>如图：</p>
			<img src="/img/workerman-chat-page.png" />
		</div>
	</div>