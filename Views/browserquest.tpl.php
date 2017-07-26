<ul class="breadcrumb">
	<li>
		<a href="/applications">相关应用</a> <span class="divider"></span>
	</li>
	<li class="active">
		MMO多人在线游戏BrowserQuest PHP版本
	</li>
</ul>
<div class="row clearfix">
		<div class="col-md-7 column">
			<h2>
				BrowserQuest-PHP
			</h2>
			<p class="f16">
				BrowserQuest是一款HTML+PHP开发的多人在线网页游戏，通过websocket与后端服务器实现双向通讯，支持几乎所有浏览器，包括安卓和IOS上的Firefox上的Safari等浏览器。
				这款游戏由Mozilla发布，BrowserQuest-PHP对其改写，主要是将后台nodejs部分改成了PHP（Workerman框架）。
			</p>
			<h3>
				下载
			</h3>
			<div class="thumbnail">
				<div class="caption-download">
					<h4>下载BrowserQuest PHP</h4>
					<p></p><table><tbody><tr><td><iframe src="http://ghbtns.com/github-btn.html?user=walkor&amp;repo=browserquest-php&amp;type=watch&amp;count=true&amp;size=large" height="30" width="170" frameborder="0" scrolling="0" style="width:150px; height: 30px;" allowtransparency="true"></iframe></td><td><iframe src="http://ghbtns.com/github-btn.html?user=walkor&amp;repo=browserquest-php&amp;type=fork&amp;count=true&amp;size=large" height="30" width="170" frameborder="0" scrolling="0" style="width:150px; height: 30px;" allowtransparency="true"></iframe></td></tr></tbody></table><p></p>
					<a class="btn btn-default btn-large" href="https://github.com/walkor/browserquest-php" target="_blank" rel="nofollow"><b>Fork on Github</b></a>&nbsp;
					<a class="btn btn-default btn-large" href="/download/browserquestzip"><b>下载ZIP压缩文件</b></a> <font class='f11 gray'>下载<?php echo $browserquest_download_count;?>次</font>
					<p></p>
				</div>
			</div>
			<p>
			<h4><a href="http://www.workerman.net/demos/browserquest/" target="_blank">线上DEMO效果点击这里</a></h4>
			</p>
			<h3>
				特性
			</h3>
			<ul>
			<li>前端采用HTML5(Canvas+WebSocket)开发</li>
			<li>以workerman框架开发后台游戏服务器</li>
			<li>PHP实时推送技术</li>
			<li>具备聊天系统、任务系统、玩家可以聊天、打怪、升级、寻宝、获得成就</li>
			<li>独立运行，不依赖Mysql、apache、nginx等软件</li>
			</ul>
			<div class="bd-ad"><?php global $bd_ad_468_60; echo $bd_ad_468_60;?></div>
		</div>
		<div class="col-md-5 column text-center">
			<h3>其它应用</h3>
			<div class="list-group">
				<a class="list-group-item" href="/workerman-vmstat">vmstat服务器状态监控服务</a>
				<a class="list-group-item" href="/web-sender">WEB消息推送框架</a>
				<div class="list-group-item active">
				BrowserQuest PHP版本
				</div>
				<a class="list-group-item" href="/camera">摄像头视频直播</a>
				<a class="list-group-item" href="/workerman-thrift">Thrift RPC 远程调用框架</a>
				<a class="list-group-item" href="/workerman-jsonrpc">Json RPC远程调用框架</a>
				<a class="list-group-item" href="/workerman-chat">聊天室框架</a>
				<a class="list-group-item" href="/workerman-statistics">统计监控系统</a>
				<a class="list-group-item" href="/workerman-todpole">PHP小蝌蚪实时交互游戏</a>
				<a class="list-group-item" href="/workerman-flappybird">flappy bird 多人在线版游戏</a>
			</div>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-12 column">
			<h3>
				安装启动
			</h3>
			<p>首先：参考手册 <a href="http://doc.workerman.net/315116">检查/安装workerman环境</a></p>
			<p>1、<a href="/download/browserquestzip" target="_blank">下载BrowserQuest-PHP</a>，并解压缩到任意目录</p>
			<p>2、进入目录并启动workerman<code>php start.php start -d</code>如下图</p>
			<img src="/img/browserquest-start.png" alt="browserquest启动示意图"/>
			<p>3、浏览器访问端口http://ip:8787或者http://域名:8787，例如
			<a href="http://www.workerman.net/demos/browserquest/">http://workerman.net:8787</a>如图：(如果无法访问请检查服务器防火墙)</p>
			<img src="/img/browserquest.png" alt="browserquest使用界面"/>
			<h3>说明</h3>
			BrowserQuest-PHP由BrowserQuest修改而来，主要是将后台nodejs改成了PHP，原BrowserQuest地址<a href="http://browserquest.mozilla.org/" target="_blank">http://browserquest.mozilla.org/</a>
		</div>
	</div>
