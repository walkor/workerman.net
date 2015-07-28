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
		<p>下载后解压即可 <a href="/download/workermanzip" target="_blank">workerman.zip</a></p>
	</div>
</div>