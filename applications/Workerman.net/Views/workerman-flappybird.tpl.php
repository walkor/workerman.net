<ul class="breadcrumb">
	<li>
		<a href="/applications">相关应用</a> <span class="divider"></span>
	</li>
	<li class="active">
		flappy bird 多人在线版
	</li>
</ul>
<div class="row clearfix">
		<div class="col-md-7 column">
			<h2>
				workerman-flappy-bird
			</h2>
			<p class="f16">
				workerman-flappy-bird是一个以workerman作为服务器为后端服务器，前端采用HTML5+WebSocket开发的即时交互游戏，flappy bird 游戏多人在线版。
			</p>
			<p><a href="http://flap.workerman.net" target="_blank">在线DEMO点击这里</a></p>
			<h3>
				特性
			</h3>
			<ul>
			<li>前端采用HTML5开发</li>
			<li>以workerman作为后台游戏服务器</li>
			<li>后端PHP多进程支持</li>
			<li>采用WebSocket协议</li>
			<li>PHP实时推送技术</li>
			<li>独立运行，不依赖Mysql、apache、nginx等软件</li>
			</ul>
			<a href="http://flap.workerman.net" target="_blank"><img src="/img/workerman-flappy-bird.png" alt="php 多人在线flappy bird小游戏浏览器界面" /></a>
		</div>
		<div class="col-md-5 column text-center">
			<h3>其它应用</h3>
			<div class="list-group">
				<a class="list-group-item" href="/workerman-thrift">Thrift RPC 远程调用框架</a>
				<a class="list-group-item" href="/workerman-jsonrpc">Json RPC远程调用框架</a>
				<a class="list-group-item" href="/workerman-chat">聊天室框架</a>
				<a class="list-group-item" href="/workerman-statistics">统计监控系统</a>
				<a class="list-group-item" href="/workerman-todpole">PHP小蝌蚪实时交互游戏</a>
				<div class="list-group-item active">
					flappy bird 多人在线版游戏
				</div>
			</div>
			<div class="thumbnail">
				<div class="caption">
					<p class="f24">下载flappy bird 多人在线版游戏源代码</p>
					<a class="btn btn-primary btn-large" href="/download/flappybirdzip">下载workerman-flappy-bird </a> <font class='f11 gray'>下载<?php echo $flappybird_download_count;?>次</font>
				</div>
			</div>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-12 column">
			<h3>
				阿里云详细安装教程之debian/ubuntu系统
			</h3>
			<h4>1、终端运行<code>apt-get update</code>如图：</h4>
			<img src="/img/apt-update.png"  alt="apt-get update 命令"/>
			<h4>2、终端运行<code>apt-get install php5-cli</code>如图:</h4>
			<img src="/img/apt-install-php5-cli.png" alt="apt-get 安装 php5-cli"/>
			<h4>3、终端运行<code>apt-get install git</code>如图：</h4>
			<img src="/img/apt-install-git.png" alt="apt-get 安装 git"/>
			<h4>4、终端运行<code> cd /home/ && git clone https://github.com/walkor/workerman-flappy-bird</code></h4>
			<h4>5、终端运行<code>/home/workerman-todpole/workerman/bin/workermand start</code></h4>
			<h4>6、大功告成！浏览器访问 http://ip:8484 如图:（如果不知道自己服务器ip，则运行 <code>ip addr | grep eth1 | grep inet</code>查看）</h4>
			<a href="http://flap.workerman.net" target="_blank"><img src="/img/workerman-flappy-bird.png" alt="php 多人在线flappy bird小游戏浏览器界面" /></a>
			<br><br>
			<h3>阿里云详细安装教程之centos系统</h3>
			<h4>1、<code>yum install php-cli php-process git</code></h4>
			<h4>2、<code>cd /home/ && git clone https://github.com/walkor/workerman-flappy-bird</code></h4>
			<h4>3、<code>/home/workerman-flappy-bird/workerman/bin/workermand start</code></h4>
			<h4>4、大功告成！浏览器访问 http://ip:8484 （如果不知道自己服务器ip，则运行 <code>ip addr | grep eth1 | grep inet</code>查看）</h4>
			<br>
			<p><a href="http://flap.workerman.net" target="_blank">多人在线 flappy bird DEMO点击这里</a></p>
		</div>
	</div>