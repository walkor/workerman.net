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
			<li>独立运行，不依赖Mysql、apache、nginx等软件</li>
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
				<a class="list-group-item" href="/workerman-flappybird">flappy bird 多人在线版游戏&nbsp;&nbsp;<font style="font-size:12px;color:red;">new</font></a>
			</div>
			<div class="thumbnail">
				<div class="caption-download">
					<h4>下载PHP小蝌蚪游戏</h4>
					<p></p><table><tbody><tr><td><iframe src="http://ghbtns.com/github-btn.html?user=walkor&amp;repo=workerman-todpole&amp;type=watch&amp;count=true&amp;size=large" height="30" width="170" frameborder="0" scrolling="0" style="width:150px; height: 30px;" allowtransparency="true"></iframe></td><td><iframe src="http://ghbtns.com/github-btn.html?user=walkor&amp;repo=workerman-todpole&amp;type=fork&amp;count=true&amp;size=large" height="30" width="170" frameborder="0" scrolling="0" style="width:150px; height: 30px;" allowtransparency="true"></iframe></td></tr></tbody></table><p></p>
					<a class="btn btn-primary btn-large" href="/download/todpolezip">下载workerman-todpole </a> <font class='f11 gray'>下载<?php echo $todpole_download_count;?>次</font>
					<p></p>
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
			<h4>4、终端运行<code> cd /home/ && git clone https://github.com/walkor/workerman-todpole</code>如图：</h4>
			<img src="/img/git-clone-workerman-todpole.png" alt="git 下载小蝌蚪代码"/>
			<h4>5、终端运行<code>/home/workerman-todpole/workerman/bin/workermand start</code>如图</h4>
			<img src="/img/workerman-todpole-start-without-libevent.png" alt="php蝌蚪小游戏启动界面" />
			<h4>6、大功告成！浏览器访问 http://ip:8383 如图:（如果不知道自己服务器ip，则运行 <code>ip addr | grep eth1 | grep inet</code>查看）</h4>
			<a href="http://kedou.workerman.net" target="_blank"><img src="/img/workerman-todpole-browser.png" alt="php蝌蚪小游戏浏览器界面" /></a>
			<br><br>
			<h3>阿里云详细安装教程之centos系统</h3>
			<h4>1、<code>yum install php-cli php-process git</code></h4>
			<h4>2、<code>cd /home/ && git clone https://github.com/walkor/workerman-todpole</code></h4>
			<h4>3、<code>/home/workerman-todpole/workerman/bin/workermand start</code></h4>
			<h4>4、大功告成！浏览器访问 http://ip:8383 （如果不知道自己服务器ip，则运行 <code>ip addr | grep eth1 | grep inet</code>查看）</h4>
			<br>
			<h3>网页空间/虚拟空间安装教程</h3>
			<a href="https://github.com/walkor/workerman-todpole-web">请使用这个安装包</a>
			<h4>上传文件到根目录，能访问kedou.html即可</h4>
			<h4 style="color:red">请保留页面上workerman作者的链接，不然会被主机屏蔽，导致不可使用</h4>
			<br>
			<h3>说明：</h3>
			<p>小蝌蚪游戏交互比较简单，只包含了游动和聊天功能，开发者可以基于这个程序开发出自己的更为丰富的游戏应用。</p>
			<p>游戏原型来自<a href="https://github.com/danielmahal/Rumpetroll">rumpetroll.com</a>，后端代码由原来的ruby改成PHP。整个游戏后台包括Web服务全部由workerman来支撑。</p>
			<p><a href="http://kedou.workerman.net" target="_blank">小蝌蚪游戏DEMO点击这里</a></p>
		</div>
	</div>
