<ul class="breadcrumb">
	<li>
		<a href="/applications">相关应用</a> <span class="divider"></span>
	</li>
	<li class="active">
		摄像头视频直播
	</li>
</ul>
<div class="row clearfix">
		<div class="col-md-7 column">
			<h2>
				摄像头视频直播
			</h2>
			<p class="f16">
				LiveCamera是一款基于HTML5+WebSocket+PHP的视频直播系统，通过网页(HTML5)调用摄像头，通过websocket传输给PHP后端(workerman)，
				再由后端广播给所有在线播放网页，观看者可以通过这个播放页面实时观看摄像头拍摄的内容。此应用支持部分手机浏览器调用摄像头直播摄像头视频流。
			        <br>注意：目前不支持部署在windows系统
			</p>
			<h3>下载</h3>
			<div class="thumbnail">
				<div class="caption-download">
					<h4>下载摄像头视频直播代码</h4>
					<p></p><table><tbody><tr><td><iframe src="https://ghbtns.com/github-btn.html?user=walkor&amp;repo=live-camera&amp;type=watch&amp;count=true&amp;size=large" height="30" width="170" frameborder="0" scrolling="0" style="width:150px; height: 30px;" allowtransparency="true"></iframe></td><td><iframe src="https://ghbtns.com/github-btn.html?user=walkor&amp;repo=live-camera&amp;type=fork&amp;count=true&amp;size=large" height="30" width="170" frameborder="0" scrolling="0" style="width:150px; height: 30px;" allowtransparency="true"></iframe></td></tr></tbody></table><p></p>
					<a class="btn btn-default btn-large" href="https://github.com/walkor/live-camera" target="_blank" rel="nofollow"><b>Fork on Github</b></a>&nbsp;
					<a class="btn btn-default btn-large" href="/download/camerazip"><b>下载ZIP压缩文件</b> </a> <font class='f11 gray'>下载<?php echo $camera_download_count;?>次</font>
				</div>
			</div>
			<h3>线上Demo</h3>
			<p>提示：最好用火狐测试，谷歌浏览器升级了安全策略，谷歌浏览器只能在https下才能利用html5打开摄像头。</p>
			<p>注意：此页面并不是支持所有浏览器</p>
			<p class="f16"><a href="https://demos.workerman.net/live-camera/camera.html" target="_blank">摄像头录制页面</a></p>
			<p class="f16"><a href="https://demos.workerman.net/live-camera/" target="_blank">实时接收视频流页面</a></p>
			<div class="bd-ad"><?php global $bd_ad_468_60; echo $bd_ad_468_60;?></div>
		</div>
		<div class="col-md-5 column text-center">
			<h3>其它应用</h3>
			<div class="list-group">
				<a class="list-group-item" href="/workerman-vmstat">vmstat服务器状态监控服务</a>
				<a class="list-group-item" href="/web-sender">WEB消息推送框架</a>
				<a class="list-group-item" href="/browserquest">BrowserQuest PHP版本</a>
				<div class="list-group-item active">
					摄像头视频直播
				</div>
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
			<p>1、<a href="/download/camerazip" target="_blank">下载</a>LiveCamera，并解压缩到任意目录</p>
			<p>2、进入目录启动workerman<code>php start.php start -d</code>如下图</p>
			<img src="/img/camera-start.png" alt="网页摄像头直播启动示意图"/>
			<div>3、录像页面：http://ip:8088/camera.html(ip为运行liveCamera服务的ip或者域名)<br>
			观看页面：http://ip:8088/ <br>提示：如果无法访问请检查服务器防火墙，如果是云服务器还要设置安全组，端口为8080 8008 8088三个</div>
			<img src="/img/camera.jpg" alt="网页摄像头直播使用界面"/>
			
			<h3>提示：</h3>
				<p>此demo实际是将摄像头的视频转化成图片分发给所有浏览器，所以没有办法支持声音，并且占用带宽较大，不适合生产环境</p>
				<p>蜗壳市场有人开发出带声音的直播，可用于生产环境。</p>
				<p><a href="http://www.woker.cc/shop/index/application-detail?application_id=37">Flash rtmp 一对一视频对话</p>
				<p><a href="http://www.woker.cc/shop/index/application-detail?application_id=36">WebRTC一对一视频通话私</p>
		</div>
	</div>
<hr>
