<ul class="breadcrumb">
	<li>
		<a href="/applications">相关应用</a> <span class="divider"></span>
	</li>
	<li class="active">
		PHP小蝌蚪聊天室
	</li>
</ul>
<div class="row clearfix">
		<div class="col-md-7 column">
			<h2>
				workerman-todpole
			</h2>
			<p class="f16">
				workerman-todpole采用PHP(workerman框架)+HTML5技术开发，是一款以workerman作为应用服务器，前端采用HTML5+WebSocket开发的小蝌蚪即时交互聊天室。
				游戏交互很简单，点击屏幕小蝌蚪可以自由游动，其它玩家可以看到周围玩家的游动状态，并且可以即时聊天。
			</p>
			<p><a href="http://workerman.net:8383" target="_blank"><h4>线上DEMO效果点击这里</h4></a></p>
			<h3>下载</h3>
			<div class="thumbnail">
				<div class="caption-download">
					<h4>下载PHP小蝌蚪聊天室</h4>
					    <p></p><table><tbody><tr><td><iframe src="https://ghbtns.com/github-btn.html?user=walkor&amp;repo=workerman-todpole&amp;type=watch&amp;count=true&amp;size=large" height="30" width="170" frameborder="0" scrolling="0" style="width:150px; height: 30px;" allowtransparency="true"></iframe></td><td><iframe src="https://ghbtns.com/github-btn.html?user=walkor&amp;repo=workerman-todpole&amp;type=fork&amp;count=true&amp;size=large" height="30" width="170" frameborder="0" scrolling="0" style="width:150px; height: 30px;" allowtransparency="true"></iframe></td></tr></tbody></table><p></p>
    					<a class="btn btn-default btn-large" href="https://github.com/walkor/workerman-todpole" target="_blank" rel="nofollow"><b>Fork on Github</b></a>&nbsp;
    					<a class="btn btn-default btn-large" href="/download/todpolezip"><b>下载ZIP压缩文件</b></a> 
    					<br><br>
    					<!--<h4>Windows版本下载</h4>
						<a class="btn btn-default btn-large" href="/download/workerman-todpole-for-win.zip"><b>下载Win版本ZIP压缩文件</b> </a> 
				--></div>
			</div>
			<h3>
				特性
			</h3>
			<ul>
			<li>前端采用HTML5开发</li>
			<li>以PHP的workerman框架开发后台游戏服务器</li>
			<li>后端PHP多进程支持</li>
			<li>采用WebSocket协议</li>
			<li>PHP实时推送技术</li>
			<li>即时互动</li>
			<li>即时聊天</li>
			<li>独立运行，不依赖Mysql、apache、nginx等软件</li>
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
				<a class="list-group-item" href="/workerman-chat">聊天室框架</a>
				<a class="list-group-item" href="/workerman-statistics">统计监控系统</a>
				<div class="list-group-item active">
					PHP小蝌蚪聊天室
				</div>
				<a class="list-group-item" href="/workerman-flappybird">flappy bird 多人在线版游戏</a>
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
			<h4>4、下载 workerman-todpole 并解压到任意目录（下载地址在本页面上方）</h4>
			<h4>5、终端运行<code>cd workerman-todpole && php start.php start -d</code>如图</h4>
			<img src="/img/workerman-todpole-start-without-libevent.png" alt="php蝌蚪小游戏启动界面" />
			<h4>6、大功告成！浏览器访问 http://ip:8383 如图:（如果无法访问请检查服务器防火墙，如果是云服务器还要设置安全组）</h4>
			<a href="http://kedou.workerman.net" target="_blank"><img src="/img/workerman-todpole-browser.png" alt="php蝌蚪小游戏浏览器界面" /></a>
			<br><br>
			<h3>阿里云详细安装教程之centos系统</h3>
			<h4>1、<code>yum install php-cli php-process git</code></h4>
			<h4>2、<code>下载 workerman-todpole 并解压到任意目录（下载地址在本页面上方）</code></h4>
			<h4>3、<code>cd workerman-todpole && php start.php start -d</code></h4>
			<h4>4、大功告成！浏览器访问 http://ip:8383 （如果无法访问请检查服务器防火墙）</h4>
			<br>
			<h3>网页空间/虚拟空间安装教程</h3>
			<a href="https://github.com/walkor/workerman-todpole-web">请使用这个安装包</a>
			<h4>上传文件到根目录，能访问kedou.html即可</h4>
			<h4 style="color:red">请保留页面上workerman作者的链接，不然会被主机屏蔽，导致不可使用</h4>
			<br>
			<h3>Windows系统安装教程</h3>
			<h4>1、配置好php环境变量</h4>
			<h4>2、双击start_for_win.bat启动</h4>
			<h4>4、浏览器访问 http://ip:8383 （如果无法访问请检查服务器防火墙）</h4>
			<br>
			<h3>说明：</h3>
			<p>小蝌蚪游戏交互比较简单，只包含了游动和聊天功能，开发者可以基于这个程序开发出自己的更为丰富的游戏应用。</p>
			<p>游戏原型来自<a href="https://github.com/danielmahal/Rumpetroll">rumpetroll.com</a>，后端代码由原来的ruby改成PHP。整个游戏后台包括Web服务全部由workerman来支撑。</p>
			<p><a href="http://kedou.workerman.net" target="_blank">小蝌蚪游戏DEMO点击这里</a></p>
			
			<br><br>
			<h3>相关项目：</h3>
			<a href="https://www.popoim.com">APP聊天源码</a>
			<br>
		</div>
	</div>
