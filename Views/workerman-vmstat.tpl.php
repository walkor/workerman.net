<ul class="breadcrumb">
	<li>
		<a href="/applications">相关应用</a> <span class="divider"></span>
	</li>
	<li class="active">
		vmstat服务器状态监控服务
	</li>
</ul>
<div class="row clearfix">
		<div class="col-md-7 column">
			<h2>
				workerman vmstat服务器状态监控服务
			</h2>
			<p class="f16">
				vmstat 命令可以展现服务器的CPU使用率，内存使用，虚拟内存交换情况,IO读写情况，用来观察系统状态，评估系统负载查找系统瓶颈。然而vmstat展现界面非常不不友好，而且必须通过终端查看。
				workerman vmstat是一个非常简单方便的vmstat查看工具，以网页动态曲线图的形式展现系统统计信息，查看者无需ssh账号，非常简单直观。
			</p>
			<p class="f16">
				workerman vmstat原理是使用workerman打开一个运行 vmstat命令的进程，监听这个vmstat进程的输出，然后将输出以websocket协议发给所有在线的网页客户端，
				网页通过websocket接收到数据后，在页面上绘图展示。
			</p>
			<h3>下载</h3>
			<div class="thumbnail">
				<div class="caption-download">
					<h4>vmstat服务器状态监控服务</h4>
					<p></p><table><tbody><tr><td><iframe src="https://ghbtns.com/github-btn.html?user=walkor&amp;repo=workerman-vmstat&amp;type=watch&amp;count=true&amp;size=large" height="30" width="170" frameborder="0" scrolling="0" style="width:150px; height: 30px;" allowtransparency="true"></iframe></td><td><iframe src="https://ghbtns.com/github-btn.html?user=walkor&amp;repo=workerman-vmstat&amp;type=fork&amp;count=true&amp;size=large" height="30" width="170" frameborder="0" scrolling="0" style="width:150px; height: 30px;" allowtransparency="true"></iframe></td></tr></tbody></table><p></p>
					<a class="btn btn-default btn-large" href="https://github.com/walkor/workerman-vmstat" target="_blank" rel="nofollow"><b>Fork on Github</b></a>&nbsp;
					<a class="btn btn-default btn-large" href="/download/vmstatzip"><b>下载ZIP压缩文件</b> </a> <font class='f11 gray'>下载<?php echo $vmstat_download_count;?>次</font>
				</div>
			</div>
			
			<p class="f16">线上Demo示例：<a href="http://demos.workerman.net/vmstat/" target="_blank">http://demos.workerman.net/vmstat/</a></p>
			<div class="bd-ad"><?php global $bd_ad_468_60; echo $bd_ad_468_60;?></div>
		</div>
		<div class="col-md-5 column text-center">
			<h3>其它应用</h3>
			<div class="list-group">
				<div class="list-group-item active">
					vmstat服务器状态监控服务
				</div>
				<a class="list-group-item" href="/web-sender">WEB消息推送框架</a>
				<a class="list-group-item" href="/browserquest">BrowserQuest PHP版本</a>
				<a class="list-group-item" href="/camera">摄像头视频直播</a>
				<a class="list-group-item" href="/workerman-thrift">Thrift RPC 远程调用框架</a>
				<a class="list-group-item" href="/workerman-jsonrpc">Json RPC远程调用框架</a>
				<a class="list-group-item" href="/workerman-chat">聊天室框架	</a>
				<a class="list-group-item" href="/workerman-statistics">统计监控系统</a>
				<a class="list-group-item" href="/workerman-todpole">PHP小蝌蚪实时交互游戏&nbsp;&nbsp;<font style="font-size:12px;color:red;">hot</font></a>
				<a class="list-group-item" href="/workerman-flappybird">flappy bird 多人在线版游戏</a>
			</div>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-12 column">
			<h3>
				安装启动
			</h3>
			<p>1、<a href="/download/vmstatzip" target="_blank">下载</a>workerman-vmstat，并解压缩到任意目录</p>
			<p>2、启动workerman<code>php start.php start -d</code>如下图</p>
			<img src="/img/vmstat-start.png" alt="vmstat服务启动示意图"/>
			<p>3、浏览器访问端口http://ip:55555或者http://域名:55555，例如
			<a href="http://workerman.net:55555">http://workerman.net:55555</a>如图：(如果无法访问请检查服务器防火墙，如果是云服务器还要设置安全组)</p>
			<img src="/img/vmstat.png" alt="vmstat服务使用界面"/>
		</div>
	</div>
