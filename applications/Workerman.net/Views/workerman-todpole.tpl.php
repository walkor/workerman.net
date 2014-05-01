<ul class="breadcrumb">
	<li>
		<a href="/applications">相关应用</a> <span class="divider"></span>
	</li>
	<li class="active">
		PHP小蝌蚪实时交互游戏
	</li>
</ul>
<div class="row clearfix">
		<div class="col-md-7 column">
			<h2>
				workerman-todpole
			</h2>
			<p class="f16">
				workerman-todpole是一个以workerman作为服务器为后端服务器，前端采用HTML5+WebSocket开发的小蝌蚪即时交互游戏。
				游戏交互很简单，点击屏幕小蝌蚪可以自由游动，其它玩家可以看到周围玩家的游动状态，并且可以即时聊天。
			</p>
			<p><a href="http://workerman.net:8383" target="_blank">DEMO点击这里</a></p>
			<h3>
				特性
			</h3>
			<ul>
			<li>前端采用HTML5开发</li>
			<li>以workerman作为后台游戏服务器</li>
			<li>后端PHP多进程支持</li>
			<li>采用WebSocket协议</li>
			<li>PHP实时推送技术</li>
			<li>即时互动</li>
			<li>即时聊天</li>
			</ul>
		</div>
		<div class="col-md-5 column text-center">
			<h3>其它应用</h3>
			<div class="list-group">
				<a class="list-group-item" href="/workerman-thrift">Thrift RPC 远程调用框架</a>
				<a class="list-group-item" href="/workerman-jsonrpc">Json RPC远程调用框架</a>
				<a class="list-group-item" href="/workerman-chat">聊天室框架</a>
				<a class="list-group-item" href="/workerman-statistics">统计监控系统</a>
				<div class="list-group-item active">
					PHP小蝌蚪实时交互游戏
				</div>
			</div>
			<div class="thumbnail">
				<div class="caption">
					<p class="f24">下载PHP小蝌蚪游戏</p>
					<a class="btn btn-primary btn-large" href="/download/todpolezip">下载workerman-todpole </a> <font class='f11 gray'>下载<?php echo $todpole_download_count;?>次</font>
				</div>
			</div>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-12 column">
			<h3>
				在自己的服务器上安装使用
			</h3>
			<p>下载后直接解压</p>
			<p>运行 <code>./bin/workerman start</code>如图：</p>
			<img src="/img/workerman-todpole-start.png" alt="php蝌蚪小游戏启动届满" />
			<p>浏览器访问 http://ip:8383 如图:</p>
			<img src="/img/workerman-todpole-browser.png" alt="php蝌蚪小游戏浏览器界面" />
			<h3>说明：</h3>
			<p>小蝌蚪游戏交互比较简单，只包含了游动和聊天功能，开发者可以基于这个程序开发出自己的更为丰富的游戏应用。</p>
			<p><a href="http://workerman.net:8383" target="_blank">小蝌蚪游戏DEMO点击这里</a></p>
		</div>
	</div>