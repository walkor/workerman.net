<ul class="about-nav">
	<li class="nav-head">
		文档
	</li>
	<li class="active">
		workerman 
	</li>
	<li>
		<a href="/documentation/phpThriftRpc">php-thrift-rpc</a> 
	</li>
	<li>
		<a href="/documentation/phpJsonRpc">php-json-rpc</a> 
	</li>
	<li>
		<a href="/documentation/phpChatRoom">php聊天室</a> 
	</li>
	<li>
		<a href="/documentation/phpStatistics">php统计监控系统</a>
	</li>
</ul>
<div class="row clearfix">
	<div class="col-md-3 column">
		<div class="list-group">
			<a class="list-group-item" href="#feature">特性</a>
			<a class="list-group-item" href="#env">运行环境</a>
			<a class="list-group-item" href="#install">下载安装</a>
			<a class="list-group-item" href="#start">启动停止</a>
			<a class="list-group-item" href="#dev">服务端开发示例</a>
			<a class="list-group-item" href="#interface">接口说明</a>
		</div>
		<br><?php global $bd_ad_250_250; echo $bd_ad_250_250;?>
	</div>
	<div class="col-md-9 column">
	    <h1>workerman 高性能的PHP Socket 框架</h1>
		<h3><a name="feature">特性</a></h3>
		<ul>
		<li>使用PHP开发</li>
		<li>支持PHP多进程</li>
		<li>支持TCP/UDP</li>
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
		<h3><a name="env">运行环境</a></h3>
		<h4>1、[必须]Linux系统</h4>		
		<h4>2、[必须]PHP_CLI>=5.3</h4>
		<p>需要开启posix、pcntl、sysvshm、sysvmsg模块。如果未安装PHP_CLI在ubuntu系统可使用命令<code>apt-get install php5-cli</code>安装</p>
		<h4>3、[可选安装]安装libevent扩展</h4>
		<p>为了更好的性能，建议安装libevent扩展。安装libevent扩展的命令:<code>pecl install libevent</code>。
		安装libevent扩展将使得php可以使用Epoll等高级的事件管理机制，大大的提高程序性能。注意：如果未安装libevent扩展，workerman则使用PHP自带的Select事件管理机制。</p>
		<h4>4、[可选安装]安装proctitle扩展</h4>
		<p>PHP>=5.5原生集成可跳过此步。为了方便查看进程信息，建议安装proctitle扩展。安装proctitile扩展命令:<code>pecl install proctitle</code>。
		使用proctitle扩展可以用ps命令看到workerman详细的进程的详细信息包括服务名、ip、端口、协议等如下图:</p>
		<img src="/img/ps-workerman-game.png" alt="ps workerman 进程示例"/>
		<br><a href="/install">详细安装教程点击这里</a>
		<h3><a name="install">下载安装</a></h3>
		<p>下载后解压即可 <a href="/download/workermanzip" target="_blank">workerman.2.0.1.zip</a></p>
		<h3><a name="start">启动停止</a></h3>
		<p>启动：./bin/workermand start</p>
		<p>停止：./bin/workermand stop</p>
		<p>重启：./bin/workermand restart</p>
		<p>平滑重启：./bin/workermand reload</p>
		<p>查看状态：./bin/workermand status</p>
		<h3>
			<a name="dev">服务端开发示例EchoServer</a>
		</h3>
		<h4>1、新建文件applications/EchoWorker/EchoWorker.php</h4>
		<pre><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php&nbsp;<br /></span><span style="color: #007700"><br />class&nbsp;</span><span style="color: #0000BB">EchoWorker&nbsp;</span><span style="color: #007700">extends&nbsp;</span><span style="color: #0000BB">Man</span><span style="color: #007700">\</span><span style="color: #0000BB">Core</span><span style="color: #007700">\</span><span style="color: #0000BB">SocketWorker<br /></span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;确定包是否完整 return 0:完整 return X:还有X字节没有接收完<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">dealInput</span><span style="color: #007700">(</span><span style="color: #0000BB">$buffer</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">/**<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;处理业务，当客户端数据接收完毕后触发（这里只是将客户端发来的字符串直接会写到客户端）<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">public&nbsp;function&nbsp;</span><span style="color: #0000BB">dealProcess</span><span style="color: #007700">(</span><span style="color: #0000BB">$buffer</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #0000BB">$this</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sendToClient</span><span style="color: #007700">(</span><span style="color: #0000BB">$buffer</span><span style="color: #007700">);&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;}<br />&nbsp;&nbsp;&nbsp;&nbsp;<br />}&nbsp;<br /></span></span>	</code></pre>
		<h4>2、新建配置conf/conf.d/EchoWorker.conf</h4>
		<pre><code>;监听ip及端口
;进程入口文件
worker_file = ../applications/EchoWorker/EchoWorker.php
;监听的端口
listen = tcp://0.0.0.0:55555
;是否是长连接
persistent_connection = 0
;启动多少进程
start_workers=4
;以哪个用户运行这个worker进程
user=www-data
;预读长度
preread_length=8192</code></pre>
		<h4>3、启动服务如图</h4>
		<p><code>./bin/workermand start</code></p>
		<img src="/img/workerman-start.png"  alt="workerman启动界面"/>
		<h4>4、测试</h4>
		<pre><code>telnet 127.0.0.1 55555
输入任意字符串回车
服务端会将字符串原封不动的返回</code></pre>
		<p>结果如下</p>
		<pre><code>telnet 127.0.0.1 55555
Trying 127.0.0.1...
Connected to 127.0.0.1.
Escape character is '^]'.
hello world
hello world
Connection closed by foreign host.</code></pre>
    <h3><a name="interface">接口说明</a></h3>
    <p>类<code>Man\Core\SocketWorker</code>预留了4个钩子函数，实现这四个函数方法使得开发者可以在进程启动阶段、有数据到来时、数据接收完毕时、进程退出时加入自己的业务逻辑。</p>
    <h4>1、钩子函数onStart</h4>
    <pre><code>bool public onStart();</code></pre>
    <p><b>[可选实现]</b> 当业务进程启动的时候出发一次，这里可以做一些全局的初始化的工作，例如初始化配置、数据库连接等。</p><br>
    <h4>2、钩子函数onStop</h4>
    <pre><code>bool public onStop();</code></pre>
    <p><b>[可选实现]</b> 当业务进程停止服务准备退出时触发，这里可以做一些全局的收尾工作。引起进程停止服务准备退出的情况或者原因如下：
    <br>1、运行停止命令 ./bin/workermand stop 
    <br>2、运行重启命令 ./bin/workermand restart
    <br>3、平滑重启服务 ./bin/workermand reload
    <br>4、workerman检测到业务进程内存泄露达到上限值 conf/conf.d/Monitor.conf 中的max_mem_limit重启对应进程</p><br>
    <h4>3、钩子函数dealInput</h4>
    <pre><code>int public dealInput(string $bin);</code></pre>
    <p><b>[必须实现]</b>当有数据到达时触发，参数$bin是接受到的全部数据（包括之前接收的未处理的数据）。由于网络延时、本地socket缓冲区大小限制、TCP分片等原因，
    数据包可能不会一次全部到达，这时需要根据选定的协议和已经接收到的数据判断还有多少字节数据没有收到。返回0代表数据全部接收完毕（进入业务处理阶段），
    返回x>0代表还有x字节没有收到（继续等待x字节的数据），返回false表示数据包有错（终止当前请求，等待其它请求），可以通过./bin/workermand status查看每个业务进程的请求量、包错误量等信息。
    </p><br>
    <h4>4、钩子函数dealProcess</h4>
    <pre><code>int public dealProcess(string $bin);</code></pre>
    <p><b>[必须实现]</b>当数据全部接收完毕时（既dealInput()返回0时）触发。参数$bin是接收到的全部数据，根据选定协议解析出请求内容做相应的业务处理</p><br>
    <h4>5、sendToClient</h4>
    <pre><code>void sendToClient($response_bin);</code></pre>
    <p>sendToClient方法用来将响应数据写到客户端。sendToClient是一个异步的过程，如果因客户端socket缓冲区满等原因无法发送全部数据，
    则workerman会异步等待，直到客户端可写则继续发送剩下的数据。</p><br>
	</div>
</div>