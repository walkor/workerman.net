<ul class="about-nav">
	<li class="nav-head">
		关于
	</li>
	<li class="active">
		workerman 
	</li>
	<li>
		<a href="/features">特性</a> 
	</li>
	<li>
		<a href="/performance">性能</a> 
	</li>
	<li>
		<a href="/license">许可</a> 
	</li>
	<li>
		<a href="/contact">联系我们</a>
	</li>
</ul>
<div class="row clearfix">
		<div class="col-md-7 column">
			<h2>
				workerman
			</h2>
			<p class="f16">
				workerman是一个高性能的PHP socket 服务器框架，workerman基于PHP多进程以及libevent事件轮询库，PHP开发者只要实现一两个接口，便可以开发出自己的网络应用，例如Rpc服务、聊天室服务器、手机游戏服务器等。
			</p>
			<p class="f16">
				workerman的目标是让PHP开发者更容易的开发出基于socket的高性能的应用服务，而不用去了解PHP socket以及PHP多进程细节。
				workerman本身是一个PHP多进程服务器框架，具有PHP进程管理以及socket通信的模块，所以不依赖php-fpm、nginx或者apache等这些容器便可以独立运行。
			</p>
			<h3>
				特性
			</h3>
			<ul>
			<li>支持HHVM</li>
			<li>使用PHP开发</li>
			<li>支持PHP多进程/多线程（多线程版本）</li>
			<li>标准输入输出重定向</li>
			<li>支持毫秒定时器</li>
			<li>支持基于事件的异步编程</li>
			<li>守护进程化</li>
			<li>支持TCP/UDP</li>
			<li>支持多端口监听</li>
			<li>接口上支持各种应用层协议</li>
			<li>支持libevent事件轮询库，支持高并发</li>
			<li>支持服务平滑重启</li>
			<li>支持PHP文件更新检测及自动加载</li>
			<li>支持PHP长连接</li>
			<li>支持以指定用户运行子进程</li>
			<li>支持telnet远程控制</li>
			<li>高性能</li>
			</ul>
			<a class="btn"  href="/features">查看更多 »</a>
			<div class="bd-ad"><?php global $bd_ad_468_60; echo $bd_ad_468_60;?></div>
		</div>
		<div class="col-md-5 column text-center">
			<h3>workerman相关应用</h3>
			<div class="list-group">
				<a class="list-group-item" href="/workerman-thrift">Thrift RPC 远程调用框架</a>
				<a class="list-group-item" href="/workerman-jsonrpc">Json RPC远程调用框架</a>
				<a class="list-group-item" href="/workerman-chat">聊天室框架</a>
				<a class="list-group-item" href="/workerman-statistics">统计监控系统</a>
				<a class="list-group-item" href="/workerman-todpole">PHP小蝌蚪实时交互游戏&nbsp;&nbsp;<font style="font-size:12px;color:red;">hot</font></a>
				<a class="list-group-item" href="/workerman-flappybird">flappy bird 多人在线版游戏&nbsp;&nbsp;<font style="font-size:12px;color:red;">new</font></a>
			</div>
			<div class="thumbnail">
				<div class="caption-download">
					<h4>下载workerman</h4>
					<p></p><table><tbody><tr><td><iframe src="http://ghbtns.com/github-btn.html?user=walkor&amp;repo=workerman&amp;type=watch&amp;count=true&amp;size=large" height="30" width="170" frameborder="0" scrolling="0" style="width:150px; height: 30px;" allowtransparency="true"></iframe></td><td><iframe src="http://ghbtns.com/github-btn.html?user=walkor&amp;repo=workerman&amp;type=fork&amp;count=true&amp;size=large" height="30" width="170" frameborder="0" scrolling="0" style="width:150px; height: 30px;" allowtransparency="true"></iframe></td></tr></tbody></table><p></p>
					<a class="btn btn-default btn-large" href="https://github.com/walkor/workerman" target="_blank"><b>Fork on Github</b></a>&nbsp;
					<a class="btn btn-default btn-large" href="/download/workermanzip"><b>下载ZIP压缩文件</b> </a> <font class='f11 gray'>下载<?php echo $workerman_download_count;?>次</font>
				</div>
			</div>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-12 column">
			<h3>环境</h3>
			<p>PHP>=5.3 非Win系统&nbsp;&nbsp;<a href="/install">详细安装教程点击这里</a></p>
			<h3>安装</h3>
			<p>下载后解压即可</p>
			<h3>启动停止</h3>
			<p>启动：php start.php start -d</p>
			<p>停止：php start.php  stop</p>
			<p>重启：php start.php  restart</p>
			<p>平滑重启：php start.php reload</p>
			<p>查看状态：php start.php status</p>
			<h3>
			<a name="dev">服务端开发示例EchoServer</a>
			</h3>
			<h4>1、新建文件Applications/Test/start.php</h4>
			<pre><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">use&nbsp;</span><span style="color: #0000BB">Workerman</span><span style="color: #007700">\</span><span style="color: #0000BB">Worker</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;创建一个Worker监听2346端口，使用websocket协议通讯<br /></span><span style="color: #0000BB">$ws_worker&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #0000BB">Worker</span><span style="color: #007700">(</span><span style="color: #DD0000">"websocket://0.0.0.0:2346"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;启动4个进程对外提供服务<br /></span><span style="color: #0000BB">$ws_worker</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">count&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">4</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;当收到客户端发来的数据后返回hello&nbsp;$data给客户端<br /></span><span style="color: #0000BB">$ws_worker</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">onMessage&nbsp;</span><span style="color: #007700">=&nbsp;function(</span><span style="color: #0000BB">$connection</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">)<br />{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;向客户端发送hello&nbsp;$data<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$connection</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">send</span><span style="color: #007700">(</span><span style="color: #DD0000">'hello&nbsp;'&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #0000BB">$data</span><span style="color: #007700">);<br />};<br /><br /></span></span></code></pre>
			<h4>2、启动服务如下图：</h4>
			<p><code>php start.php start -d</code></p>
			<img src="/img/workerman-start.png" alt="workerman启动界面"/>
			<h4>3、查看workerman运行状态类似如下界面：</h4>
			<p><code>php start.php status</code></p>
			<img src="/img/workerman-status.png" alt="workerman 查看运行状态"/>
			<h3>性能</h3>
			<h4>测试环境：</h4>
<pre><code>系统：ubuntu 12.04 LTS 64位
内存：8G
cpu：Intel® Core™ i3-3220 CPU @ 3.30GHz × 4
</code></pre>

<h4>业务逻辑</h4>
<code>EchoServer</code>
<h4>结果</h4>

<pre><code>短链接（每次请求完成后关闭链接，下次请求建立新的链接）:
条件： 压测脚本开500个线程，每个线程链接Workerman 10W次，每次链接发送1个请求
结果： 吞吐量：<b>3W/S</b> ， cpu：60% ， 内存占用：4*8M = 32M
</code></pre>
<pre><code>长链接（每次请求后不关闭链接，下次请求继续复用这个链接）:
条件： 压测脚本开1000个线程，每个线程链接Workerman 1次，每个链接发送10W请求
结果： 吞吐量：<b>15.6W/S</b> ， cpu：68% ， 内存占用：4*8M = 32M
</code></pre>
<pre><code>无流量抖动，无内存泄漏，性能非常强悍</code></pre>
		</div>
	</div>
