<ul class="breadcrumb">
	<li>
		<a href="/applications">相关应用</a> <span class="divider"></span>
	</li>
	<li class="active">            
		PHPSocket.IO
	</li>
</ul>
<div class="row clearfix">
		<div class="col-md-7 column">
			<h2>
				PHPSocket.IO，PHP跨平台实时通讯框架
			</h2>
			<p class="f16">
				PHPSocket.IO是PHP版本的Socket.IO服务端实现，基于workerman开发，用于替换node.js版本Socket.IO服务端。PHPSocket.IO底层采用websocket协议通讯，如果客户端不支持websocket协议，
				则会自动采用http长轮询的方式通讯。PHPSocket.IO实现的Polling通信机制包括Adobe Flash Socket、AJAX长轮询、JSONP轮询等。具体采用哪种机制通讯对于开发者完全透明，
				开发者使用的是统一的接口。
			</p>
			<h3>下载</h3>
			<div class="thumbnail">
				<div class="caption-download">
					<h4>PHPSocket.IO</h4>
					<p></p><table><tbody><tr><td><iframe src="https://ghbtns.com/github-btn.html?user=walkor&amp;repo=phpsocket.io&amp;type=watch&amp;count=true&amp;size=large" height="30" width="170" frameborder="0" scrolling="0" style="width:150px; height: 30px;" allowtransparency="true"></iframe></td><td><iframe src="https://ghbtns.com/github-btn.html?user=walkor&amp;repo=phpsocket.io&amp;type=fork&amp;count=true&amp;size=large" height="30" width="170" frameborder="0" scrolling="0" style="width:150px; height: 30px;" allowtransparency="true"></iframe></td></tr></tbody></table><p></p>
					<a class="btn btn-default btn-large" href="https://github.com/walkor/phpsocket.io" target="_blank"  rel="nofollow"><b>Fork on Github</b></a>&nbsp;
					<a class="btn btn-default btn-large" href="/download/phpsocket.io.zip"  rel="nofollow"><b>下载ZIP压缩文件</b> </a>
					<h4>Windows版本下载</h4>
					<a class="btn btn-default btn-large" href="/download/phpsocket.io-for-win.zip"><b>下载Win版本ZIP压缩文件</b> </a> 
				</div>
			</div>
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
				<a class="list-group-item" href="/workerman-chat">聊天室框架	</a>
				<a class="list-group-item" href="/workerman-statistics">统计监控系统</a>
				<a class="list-group-item" href="/workerman-todpole">PHP小蝌蚪实时交互游戏&nbsp;&nbsp;<font style="font-size:12px;color:red;">hot</font></a>
				<a class="list-group-item" href="/workerman-flappybird">flappy bird 多人在线版游戏</a>
			</div>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-8 column">
			<p class="f16">PHPSocket.IO设计的目标是利用PHP构建能够在不同浏览器和移动设备上良好运行的实时应用，如实时分析系统、在线聊天室、在线客服系统、评论系统、WebIM等。
				PHPSocket.IO与workerman的区别是，PHPSocket.IO基于workerman开发，workerman有的特性PHPSocket.IO都支持。
				PHPSocket.IO最大的优势是对各种浏览器的兼容性更好。
			</p>
            <div class="f16">
                <h3>在线示例</h3>
                <a class="btn" target="_blank" href="https://demos.workerman.net/phpsocketio-chat/" rel="nofollow">在线示例-聊天室</a> <a href="https://github.com/walkor/phpsocket.io/tree/master/examples/chat" rel="nofollow" class="btn" target="_blank">示例源码</a>
            </div>
            <div class="f16">
                <h3>手册</h3>
                <a class="btn" target="_blank" href="https://github.com/walkor/phpsocket.io/tree/master/docs/zh" rel="nofollow">手册</a>
            </div>
            <h3 >
            	安装
            </h3>
            <p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 16px; color: rgb(51, 51, 51); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px; line-height: 24px;">
            	请使用composer集成phpsocket.io。
            </p>
            <p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 16px; color: rgb(51, 51, 51); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px; line-height: 24px;">
            	脚本中引用vendor中的autoload.php实现SocketIO相关类的加载。例如
            </p>
            <div class="highlight highlight-text-html-php" style="box-sizing: border-box; margin-bottom: 16px; color: rgb(51, 51, 51); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px; line-height: 24px;">
            	<pre style="box-sizing: border-box; font-family: Consolas, &quot;Liberation Mono&quot;, Menlo, Courier, monospace; font-size: 13.6px; margin-top: 0px; margin-bottom: 0px; font-stretch: normal; line-height: 1.45; word-wrap: normal; padding: 16px; overflow: auto; border-radius: 3px; word-break: normal; background-color: rgb(247, 247, 247);"><span class="pl-s1" style="box-sizing: border-box;"><span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">require_once</span> <span class="pl-s" style="box-sizing: border-box; color: rgb(24, 54, 145);"><span class="pl-pds" style="box-sizing: border-box;">'</span>/你的vendor路径/autoload.php<span class="pl-pds" style="box-sizing: border-box;">'</span></span>;</span></pre>
            </div>
            <p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 16px; color: rgb(51, 51, 51); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px; line-height: 24px;">
            	下面服务端的代码略去了这段代码。
            </p>
            <h3 style="box-sizing: border-box; margin-top: 24px; margin-bottom: 16px; font-size: 1.25em; line-height: 1.25; color: rgb(51, 51, 51); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;">
            	服务端和客户端连接
            </h3>
            <p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 16px; color: rgb(51, 51, 51); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px; line-height: 24px;">
            	创建一个SocketIO服务端
            </p>
            <div class="highlight highlight-text-html-php" style="box-sizing: border-box; margin-bottom: 16px; color: rgb(51, 51, 51); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px; line-height: 24px;">
            	<pre style="box-sizing: border-box; font-family: Consolas, &quot;Liberation Mono&quot;, Menlo, Courier, monospace; font-size: 13.6px; margin-top: 0px; margin-bottom: 0px; font-stretch: normal; line-height: 1.45; word-wrap: normal; padding: 16px; overflow: auto; border-radius: 3px; word-break: normal; background-color: rgb(247, 247, 247);">
<span class="pl-s1" style="box-sizing: border-box;"><span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">use</span> <span class="pl-c1" style="box-sizing: border-box; color: rgb(0, 134, 179);">PHPSocketIO\SocketIO</span>;</span>
<span class="pl-s1" style="box-sizing: border-box;"><span class="pl-c" style="box-sizing: border-box; color: rgb(150, 152, 150);">// 创建socket.io服务端，监听2021端口</span></span>
<span class="pl-s1" style="box-sizing: border-box;"><span class="pl-smi" style="box-sizing: border-box;">$io</span> <span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">=</span> <span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">new</span> <span class="pl-c1" style="box-sizing: border-box; color: rgb(0, 134, 179);">SocketIO</span>(<span class="pl-c1" style="box-sizing: border-box; color: rgb(0, 134, 179);">2021</span>);</span>
<span class="pl-s1" style="box-sizing: border-box;"><span class="pl-c" style="box-sizing: border-box; color: rgb(150, 152, 150);">// 当有客户端连接时打印一行文字</span></span>
<span class="pl-s1" style="box-sizing: border-box;"><span class="pl-smi" style="box-sizing: border-box;">$io</span><span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">-&gt;</span>on(<span class="pl-s" style="box-sizing: border-box; color: rgb(24, 54, 145);"><span class="pl-pds" style="box-sizing: border-box;">'</span>connection<span class="pl-pds" style="box-sizing: border-box;">'</span></span>, <span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">function</span>(<span class="pl-smi" style="box-sizing: border-box;">$connection</span>)<span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">use</span>(<span class="pl-smi" style="box-sizing: border-box;">$io</span>){</span>
<span class="pl-s1" style="box-sizing: border-box;">  <span class="pl-c1" style="box-sizing: border-box; color: rgb(0, 134, 179);">echo</span> <span class="pl-s" style="box-sizing: border-box; color: rgb(24, 54, 145);"><span class="pl-pds" style="box-sizing: border-box;">&quot;</span>new connection coming<span class="pl-cce" style="box-sizing: border-box;">\n</span><span class="pl-pds" style="box-sizing: border-box;">&quot;</span></span>;</span>
<span class="pl-s1" style="box-sizing: border-box;">});</span>
<span class="pl-c1" style="box-sizing: border-box; color: rgb(0, 134, 179);">Worker</span><span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">::</span>runAll();</span></pre>
            </div>
            <p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 16px; color: rgb(51, 51, 51); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px; line-height: 24px;">
            	客户端
            </p>
            <div class="highlight highlight-source-js" style="box-sizing: border-box; margin-bottom: 16px; color: rgb(51, 51, 51); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px; line-height: 24px;">
	    <pre style="box-sizing: border-box; font-family: Consolas, &quot;Liberation Mono&quot;, Menlo, Courier, monospace; font-size: 13.6px; margin-top: 0px; margin-bottom: 0px; font-stretch: normal; line-height: 1.45; word-wrap: normal; padding: 16px; overflow: auto; border-radius: 3px; word-break: normal; background-color: rgb(247, 247, 247);">
<span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">&lt;</span>script src<span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">=</span><span class="pl-s" style="box-sizing: border-box; color: rgb(24, 54, 145);"><span class="pl-pds" style="box-sizing: border-box;">'</span>https://cdn.bootcss.com/socket.io/2.0.3/socket.io.js<span class="pl-pds" style="box-sizing: border-box;">'</span></span><span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">&gt;&lt;</span><span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">/</span>script<span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">&gt;</span>
<span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">&lt;</span>script<span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">&gt;</span>
<span class="pl-c" style="box-sizing: border-box; color: rgb(150, 152, 150);">// 如果服务端不在本机，请把127.0.0.1改成服务端ip</span>
<span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">var</span> socket <span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">=</span> <span class="pl-en" style="box-sizing: border-box; color: rgb(121, 93, 163);">io</span>(<span class="pl-s" style="box-sizing: border-box; color: rgb(24, 54, 145);"><span class="pl-pds" style="box-sizing: border-box;">'</span>http://127.0.0.1:2021<span class="pl-pds" style="box-sizing: border-box;">'</span></span>);
<span class="pl-c" style="box-sizing: border-box; color: rgb(150, 152, 150);">// 当连接服务端成功时触发connect默认事件</span>
<span class="pl-smi" style="box-sizing: border-box;">socket</span>.<span class="pl-en" style="box-sizing: border-box; color: rgb(121, 93, 163);">on</span>(<span class="pl-s" style="box-sizing: border-box; color: rgb(24, 54, 145);"><span class="pl-pds" style="box-sizing: border-box;">'</span>connect<span class="pl-pds" style="box-sizing: border-box;">'</span></span>, <span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">function</span>(){
<span class="pl-en" style="box-sizing: border-box; color: rgb(121, 93, 163);">console</span>.<span class="pl-c1" style="box-sizing: border-box; color: rgb(0, 134, 179);">log</span>(<span class="pl-s" style="box-sizing: border-box; color: rgb(24, 54, 145);"><span class="pl-pds" style="box-sizing: border-box;">'</span>connect success<span class="pl-pds" style="box-sizing: border-box;">'</span></span>);
});
<span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">&lt;</span><span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">/</span>script<span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">&gt;</span></pre>
            </div>
            <h3 style="box-sizing: border-box; margin-top: 24px; margin-bottom: 16px; font-size: 1.25em; line-height: 1.25; color: rgb(51, 51, 51); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;">
            	自定义事件
            </h3>
            <p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 16px; color: rgb(51, 51, 51); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px; line-height: 24px;">
            	socket.io主要是通过事件来进行通讯交互的。
            </p>
            <p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 16px; color: rgb(51, 51, 51); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px; line-height: 24px;">
            	除了自带的connect，message，disconnect三个事件以外，在服务端和客户端用户可以自定义事件。
            </p>
            <p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 16px; color: rgb(51, 51, 51); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px; line-height: 24px;">
            	服务端和客户端都通过emit方法触发对端的事件。
            </p>
            <p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 16px; color: rgb(51, 51, 51); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px; line-height: 24px;">
            	例如下面的代码在服务端定义了一个<code style="box-sizing: border-box; font-family: Consolas, &quot;Liberation Mono&quot;, Menlo, Courier, monospace; font-size: 13.6px; padding: 0.2em 0px; margin: 0px; border-radius: 3px; background-color: rgba(0, 0, 0, 0.0392157);">chat message</code>事件，事件参数为<code style="box-sizing: border-box; font-family: Consolas, &quot;Liberation Mono&quot;, Menlo, Courier, monospace; font-size: 13.6px; padding: 0.2em 0px; margin: 0px; border-radius: 3px; background-color: rgba(0, 0, 0, 0.0392157);">$msg</code>。
            </p>
            <div class="highlight highlight-text-html-php" style="box-sizing: border-box; margin-bottom: 16px; color: rgb(51, 51, 51); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px; line-height: 24px;">
            	<pre style="box-sizing: border-box; font-family: Consolas, &quot;Liberation Mono&quot;, Menlo, Courier, monospace; font-size: 13.6px; margin-top: 0px; margin-bottom: 0px; font-stretch: normal; line-height: 1.45; word-wrap: normal; padding: 16px; overflow: auto; border-radius: 3px; word-break: normal; background-color: rgb(247, 247, 247);">
<span class="pl-s1" style="box-sizing: border-box;"><span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">use</span> <span class="pl-c1" style="box-sizing: border-box; color: rgb(0, 134, 179);">PHPSocketIO\SocketIO</span>;</span>
<span class="pl-s1" style="box-sizing: border-box;"><span class="pl-smi" style="box-sizing: border-box;">$io</span> <span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">=</span> <span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">new</span> <span class="pl-c1" style="box-sizing: border-box; color: rgb(0, 134, 179);">SocketIO</span>(<span class="pl-c1" style="box-sizing: border-box; color: rgb(0, 134, 179);">2021</span>);</span>
<span class="pl-s1" style="box-sizing: border-box;"><span class="pl-c" style="box-sizing: border-box; color: rgb(150, 152, 150);">// 当有客户端连接时</span></span>
<span class="pl-s1" style="box-sizing: border-box;"><span class="pl-smi" style="box-sizing: border-box;">$io</span><span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">-&gt;</span>on(<span class="pl-s" style="box-sizing: border-box; color: rgb(24, 54, 145);"><span class="pl-pds" style="box-sizing: border-box;">'</span>connection<span class="pl-pds" style="box-sizing: border-box;">'</span></span>, <span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">function</span>(<span class="pl-smi" style="box-sizing: border-box;">$connection</span>)<span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">use</span>(<span class="pl-smi" style="box-sizing: border-box;">$io</span>){</span>
<span class="pl-s1" style="box-sizing: border-box;">  <span class="pl-c" style="box-sizing: border-box; color: rgb(150, 152, 150);">// 定义chat message事件回调函数</span></span>
<span class="pl-s1" style="box-sizing: border-box;">  <span class="pl-smi" style="box-sizing: border-box;">$connection</span><span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">-&gt;</span>on(<span class="pl-s" style="box-sizing: border-box; color: rgb(24, 54, 145);"><span class="pl-pds" style="box-sizing: border-box;">'</span>chat message<span class="pl-pds" style="box-sizing: border-box;">'</span></span>, <span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">function</span>(<span class="pl-smi" style="box-sizing: border-box;">$msg</span>)<span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">use</span>(<span class="pl-smi" style="box-sizing: border-box;">$io</span>){</span>
<span class="pl-s1" style="box-sizing: border-box;">    <span class="pl-c" style="box-sizing: border-box; color: rgb(150, 152, 150);">// 触发所有客户端定义的chat message from server事件</span></span>
<span class="pl-s1" style="box-sizing: border-box;">    <span class="pl-smi" style="box-sizing: border-box;">$io</span><span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">-&gt;</span>emit(<span class="pl-s" style="box-sizing: border-box; color: rgb(24, 54, 145);"><span class="pl-pds" style="box-sizing: border-box;">'</span>chat message from server<span class="pl-pds" style="box-sizing: border-box;">'</span></span>, <span class="pl-smi" style="box-sizing: border-box;">$msg</span>);</span>
<span class="pl-s1" style="box-sizing: border-box;">  });</span>
<span class="pl-s1" style="box-sizing: border-box;">});</span></pre>
            </div>
            <p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 16px; color: rgb(51, 51, 51); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px; line-height: 24px;">
            	客户端通过下面的方法触发服务端的chat message事件。
            </p>
            <div class="highlight highlight-source-js" style="box-sizing: border-box; margin-bottom: 16px; color: rgb(51, 51, 51); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px; line-height: 24px;">
            	<pre style="box-sizing: border-box; font-family: Consolas, &quot;Liberation Mono&quot;, Menlo, Courier, monospace; font-size: 13.6px; margin-top: 0px; margin-bottom: 0px; font-stretch: normal; line-height: 1.45; word-wrap: normal; padding: 16px; overflow: auto; border-radius: 3px; word-break: normal; background-color: rgb(247, 247, 247);">
<span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">&lt;</span>script src<span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">=</span><span class="pl-s" style="box-sizing: border-box; color: rgb(24, 54, 145);"><span class="pl-pds" style="box-sizing: border-box;">'</span>//cdn.bootcss.com/socket.io/1.3.7/socket.io.js<span class="pl-pds" style="box-sizing: border-box;">'</span></span><span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">&gt;&lt;</span><span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">/</span>script<span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">&gt;</span>
<span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">&lt;</span>script<span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">&gt;</span>
<span class="pl-c" style="box-sizing: border-box; color: rgb(150, 152, 150);">// 连接服务端</span>
<span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">var</span> socket <span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">=</span> <span class="pl-en" style="box-sizing: border-box; color: rgb(121, 93, 163);">io</span>(<span class="pl-s" style="box-sizing: border-box; color: rgb(24, 54, 145);"><span class="pl-pds" style="box-sizing: border-box;">'</span>http://127.0.0.1:3120<span class="pl-pds" style="box-sizing: border-box;">'</span></span>);
<span class="pl-c" style="box-sizing: border-box; color: rgb(150, 152, 150);">// 触发服务端的chat message事件</span>
<span class="pl-smi" style="box-sizing: border-box;">socket</span>.<span class="pl-en" style="box-sizing: border-box; color: rgb(121, 93, 163);">emit</span>(<span class="pl-s" style="box-sizing: border-box; color: rgb(24, 54, 145);"><span class="pl-pds" style="box-sizing: border-box;">'</span>chat message<span class="pl-pds" style="box-sizing: border-box;">'</span></span>, <span class="pl-s" style="box-sizing: border-box; color: rgb(24, 54, 145);"><span class="pl-pds" style="box-sizing: border-box;">'</span>这个是消息内容...<span class="pl-pds" style="box-sizing: border-box;">'</span></span>);
<span class="pl-c" style="box-sizing: border-box; color: rgb(150, 152, 150);">// 服务端通过emit('chat message from server', $msg)触发客户端的chat message from server事件</span>
<span class="pl-smi" style="box-sizing: border-box;">socket</span>.<span class="pl-en" style="box-sizing: border-box; color: rgb(121, 93, 163);">on</span>(<span class="pl-s" style="box-sizing: border-box; color: rgb(24, 54, 145);"><span class="pl-pds" style="box-sizing: border-box;">'</span>chat message from server<span class="pl-pds" style="box-sizing: border-box;">'</span></span>, <span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">function</span>(<span class="pl-smi" style="box-sizing: border-box;">msg</span>){
<span class="pl-en" style="box-sizing: border-box; color: rgb(121, 93, 163);">console</span>.<span class="pl-c1" style="box-sizing: border-box; color: rgb(0, 134, 179);">log</span>(<span class="pl-s" style="box-sizing: border-box; color: rgb(24, 54, 145);"><span class="pl-pds" style="box-sizing: border-box;">'</span>get message:<span class="pl-pds" style="box-sizing: border-box;">'</span></span> <span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">+</span> msg <span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">+</span> <span class="pl-s" style="box-sizing: border-box; color: rgb(24, 54, 145);"><span class="pl-pds" style="box-sizing: border-box;">'</span> from server<span class="pl-pds" style="box-sizing: border-box;">'</span></span>);
});
<span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">&lt;</span><span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">/</span>script<span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">&gt;</span></pre>
            </div>
            <h3 style="box-sizing: border-box; margin-top: 24px; margin-bottom: 16px; font-size: 1.25em; line-height: 1.25; color: rgb(51, 51, 51); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;">
            	分组
            </h3>
            <p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 16px; color: rgb(51, 51, 51); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px; line-height: 24px;">
            	socket.io提供分组功能，允许向某个分组发送事件，例如向某个房间广播数据。
            </p>
            <p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 16px; color: rgb(51, 51, 51); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px; line-height: 24px;">
            	1、加入分组（一个连接可以加入多个分组）
            </p>
            <div class="highlight highlight-text-html-php" style="box-sizing: border-box; margin-bottom: 16px; color: rgb(51, 51, 51); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px; line-height: 24px;">
            	<pre style="box-sizing: border-box; font-family: Consolas, &quot;Liberation Mono&quot;, Menlo, Courier, monospace; font-size: 13.6px; margin-top: 0px; margin-bottom: 0px; font-stretch: normal; line-height: 1.45; word-wrap: normal; padding: 16px; overflow: auto; border-radius: 3px; word-break: normal; background-color: rgb(247, 247, 247);"><span class="pl-s1" style="box-sizing: border-box;"><span class="pl-smi" style="box-sizing: border-box;">$connection</span><span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">-&gt;</span>join(<span class="pl-s" style="box-sizing: border-box; color: rgb(24, 54, 145);"><span class="pl-pds" style="box-sizing: border-box;">'</span>group name<span class="pl-pds" style="box-sizing: border-box;">'</span></span>);</span></pre>
            </div>
            <p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 16px; color: rgb(51, 51, 51); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px; line-height: 24px;">
            	2、离开分组（连接断开时会自动从分组中离开）
            </p>
            <div class="highlight highlight-text-html-php" style="box-sizing: border-box; margin-bottom: 16px; color: rgb(51, 51, 51); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px; line-height: 24px;">
            	<pre style="box-sizing: border-box; font-family: Consolas, &quot;Liberation Mono&quot;, Menlo, Courier, monospace; font-size: 13.6px; margin-top: 0px; margin-bottom: 0px; font-stretch: normal; line-height: 1.45; word-wrap: normal; padding: 16px; overflow: auto; border-radius: 3px; word-break: normal; background-color: rgb(247, 247, 247);"><span class="pl-s1" style="box-sizing: border-box;"><span class="pl-smi" style="box-sizing: border-box;">$connection</span><span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">-&gt;</span>leave(<span class="pl-s" style="box-sizing: border-box; color: rgb(24, 54, 145);"><span class="pl-pds" style="box-sizing: border-box;">'</span>group name<span class="pl-pds" style="box-sizing: border-box;">'</span></span>);</span></pre>
            </div>
            <h3>
            	向客户端发送事件的各种方法
            </h3>
            <p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 16px; color: rgb(51, 51, 51); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px; line-height: 24px;">
            	$io是SocketIO对象。$connection是客户端连接
            </p>
            <p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 16px; color: rgb(51, 51, 51); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px; line-height: 24px;">
            	$data可以是数字和字符串，也可以是数组。当$data是数组时，客户端会自动转换为javascript对象。
            </p>
            <p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 16px; color: rgb(51, 51, 51); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px; line-height: 24px;">
            	同理如果客户端向服务端emit某个事件传递的是一个javascript对象，在服务端接收时会自动转换为php数组。
            </p>
            <p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 16px; color: rgb(51, 51, 51); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px; line-height: 24px;">
            	1、向当前客户端发送事件
            </p>
            <div class="highlight highlight-text-html-php" style="box-sizing: border-box; margin-bottom: 16px; color: rgb(51, 51, 51); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px; line-height: 24px;">
            	<pre style="box-sizing: border-box; font-family: Consolas, &quot;Liberation Mono&quot;, Menlo, Courier, monospace; font-size: 13.6px; margin-top: 0px; margin-bottom: 0px; font-stretch: normal; line-height: 1.45; word-wrap: normal; padding: 16px; overflow: auto; border-radius: 3px; word-break: normal; background-color: rgb(247, 247, 247);"><span class="pl-s1" style="box-sizing: border-box;"><span class="pl-smi" style="box-sizing: border-box;">$connection</span><span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">-&gt;</span>emit(<span class="pl-s" style="box-sizing: border-box; color: rgb(24, 54, 145);"><span class="pl-pds" style="box-sizing: border-box;">'</span>event name<span class="pl-pds" style="box-sizing: border-box;">'</span></span>, <span class="pl-smi" style="box-sizing: border-box;">$data</span>);</span></pre>
            </div>
            <p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 16px; color: rgb(51, 51, 51); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px; line-height: 24px;">
            	2、向所有客户端发送事件
            </p>
            <div class="highlight highlight-text-html-php" style="box-sizing: border-box; margin-bottom: 16px; color: rgb(51, 51, 51); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px; line-height: 24px;">
            	<pre style="box-sizing: border-box; font-family: Consolas, &quot;Liberation Mono&quot;, Menlo, Courier, monospace; font-size: 13.6px; margin-top: 0px; margin-bottom: 0px; font-stretch: normal; line-height: 1.45; word-wrap: normal; padding: 16px; overflow: auto; border-radius: 3px; word-break: normal; background-color: rgb(247, 247, 247);"><span class="pl-s1" style="box-sizing: border-box;"><span class="pl-smi" style="box-sizing: border-box;">$io</span><span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">-&gt;</span>emit(<span class="pl-s" style="box-sizing: border-box; color: rgb(24, 54, 145);"><span class="pl-pds" style="box-sizing: border-box;">'</span>event name<span class="pl-pds" style="box-sizing: border-box;">'</span></span>, <span class="pl-smi" style="box-sizing: border-box;">$data</span>);</span></pre>
            </div>
            <p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 16px; color: rgb(51, 51, 51); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px; line-height: 24px;">
            	3、向所有客户端发送事件，但不包括当前连接。
            </p>
            <div class="highlight highlight-text-html-php" style="box-sizing: border-box; margin-bottom: 16px; color: rgb(51, 51, 51); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px; line-height: 24px;">
            	<pre style="box-sizing: border-box; font-family: Consolas, &quot;Liberation Mono&quot;, Menlo, Courier, monospace; font-size: 13.6px; margin-top: 0px; margin-bottom: 0px; font-stretch: normal; line-height: 1.45; word-wrap: normal; padding: 16px; overflow: auto; border-radius: 3px; word-break: normal; background-color: rgb(247, 247, 247);"><span class="pl-s1" style="box-sizing: border-box;"><span class="pl-smi" style="box-sizing: border-box;">$connection</span><span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">-&gt;</span><span class="pl-smi" style="box-sizing: border-box;">sockets</span><span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">-&gt;</span>emit(<span class="pl-s" style="box-sizing: border-box; color: rgb(24, 54, 145);"><span class="pl-pds" style="box-sizing: border-box;">'</span>event name<span class="pl-pds" style="box-sizing: border-box;">'</span></span>, <span class="pl-smi" style="box-sizing: border-box;">$data</span>);</span></pre>
            </div>
            <p style="box-sizing: border-box; margin-top: 0px; margin-bottom: 16px; color: rgb(51, 51, 51); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px; line-height: 24px;">
            	4、向某个分组的所有客户端发送事件
            </p>
            <div class="highlight highlight-text-html-php" style="box-sizing: border-box; margin-bottom: 16px; color: rgb(51, 51, 51); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px; line-height: 24px;">
            	<pre style="box-sizing: border-box; font-family: Consolas, &quot;Liberation Mono&quot;, Menlo, Courier, monospace; font-size: 13.6px; margin-top: 0px; margin-bottom: 0px; font-stretch: normal; line-height: 1.45; word-wrap: normal; padding: 16px; overflow: auto; border-radius: 3px; word-break: normal; background-color: rgb(247, 247, 247);"><span class="pl-s1" style="box-sizing: border-box;"><span class="pl-smi" style="box-sizing: border-box;">$io</span><span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">-&gt;</span>to(<span class="pl-s" style="box-sizing: border-box; color: rgb(24, 54, 145);"><span class="pl-pds" style="box-sizing: border-box;">'</span>group name<span class="pl-pds" style="box-sizing: border-box;">'</span></span>)<span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">-&gt;</span>emit(<span class="pl-s" style="box-sizing: border-box; color: rgb(24, 54, 145);"><span class="pl-pds" style="box-sizing: border-box;">'</span>event name<span class="pl-pds" style="box-sizing: border-box;">'</span></span>, <span class="pl-smi" style="box-sizing: border-box;">$data</span>);</span></pre>
            </div>
            
            
            <h2 style="box-sizing: border-box; margin-top: 24px; margin-bottom: 16px; line-height: 1.25; padding-bottom: 0.3em; border-bottom: 1px solid rgb(238, 238, 238); color: rgb(51, 51, 51); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;">
            	一个非常简单的聊天服务端示例
            </h2>
            <div class="highlight highlight-text-html-php" style="box-sizing: border-box; margin-bottom: 16px; color: rgb(51, 51, 51); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Helvetica, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px; line-height: 24px;">
            	<pre style="box-sizing: border-box; font-family: Consolas, &quot;Liberation Mono&quot;, Menlo, Courier, monospace; font-size: 13.6px; margin-top: 0px; margin-bottom: 0px; font-stretch: normal; line-height: 1.45; word-wrap: normal; padding: 16px; overflow: auto; border-radius: 3px; word-break: normal; background-color: rgb(247, 247, 247);"><span class="pl-s1" style="box-sizing: border-box;"><span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">use</span> <span class="pl-c1" style="box-sizing: border-box; color: rgb(0, 134, 179);">PHPSocketIO\SocketIO</span>;</span>
<span class="pl-s1" style="box-sizing: border-box;"></span>
<span class="pl-s1" style="box-sizing: border-box;"><span class="pl-c" style="box-sizing: border-box; color: rgb(150, 152, 150);">// listen port 2021 for socket.io client</span></span>
<span class="pl-s1" style="box-sizing: border-box;"><span class="pl-smi" style="box-sizing: border-box;">$io</span> <span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">=</span> <span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">new</span> <span class="pl-c1" style="box-sizing: border-box; color: rgb(0, 134, 179);">SocketIO</span>(<span class="pl-c1" style="box-sizing: border-box; color: rgb(0, 134, 179);">2021</span>);</span>
<span class="pl-s1" style="box-sizing: border-box;"><span class="pl-smi" style="box-sizing: border-box;">$io</span><span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">-&gt;</span>on(<span class="pl-s" style="box-sizing: border-box; color: rgb(24, 54, 145);"><span class="pl-pds" style="box-sizing: border-box;">'</span>connection<span class="pl-pds" style="box-sizing: border-box;">'</span></span>, <span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">function</span>(<span class="pl-smi" style="box-sizing: border-box;">$socket</span>)<span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">use</span>(<span class="pl-smi" style="box-sizing: border-box;">$io</span>){</span>
<span class="pl-s1" style="box-sizing: border-box;">  <span class="pl-smi" style="box-sizing: border-box;">$socket</span><span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">-&gt;</span>on(<span class="pl-s" style="box-sizing: border-box; color: rgb(24, 54, 145);"><span class="pl-pds" style="box-sizing: border-box;">'</span>chat message<span class="pl-pds" style="box-sizing: border-box;">'</span></span>, <span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">function</span>(<span class="pl-smi" style="box-sizing: border-box;">$msg</span>)<span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">use</span>(<span class="pl-smi" style="box-sizing: border-box;">$io</span>){</span>
<span class="pl-s1" style="box-sizing: border-box;">    <span class="pl-smi" style="box-sizing: border-box;">$io</span><span class="pl-k" style="box-sizing: border-box; color: rgb(167, 29, 93);">-&gt;</span>emit(<span class="pl-s" style="box-sizing: border-box; color: rgb(24, 54, 145);"><span class="pl-pds" style="box-sizing: border-box;">'</span>chat message<span class="pl-pds" style="box-sizing: border-box;">'</span></span>, <span class="pl-smi" style="box-sizing: border-box;">$msg</span>);</span>
<span class="pl-s1" style="box-sizing: border-box;">  });</span>
<span class="pl-s1" style="box-sizing: border-box;">});</span></pre>
            	<div>
            		<br />
            		
            	</div>
            </div>
		</div>
	</div>
