<ul class="breadcrumb">
	<li>
		<a href="/applications">相关应用</a> <span class="divider"></span>
	</li>
	<li class="active">
		Json Rpc远程调用框架
	</li>
</ul>
<div class="row clearfix">
		<div class="col-md-7 column">
			<h2>
				workerman-json-rpc
			</h2>
			<p class="f16">
				JSON  (JavaScript Object Notation)是一种用于在组件间交互信息的数据交换格式，其是以JavaScript 为基础的数据表示语言。既方便于人的读写习惯，又有利于计算机的解析和生成。
				</p>
				<p class="f16">
				RPC（Remote Procedure Call）是远程调用，既客户端通过某种协议向服务器发起请求并获得结果。RPC使得开发分布式网络程序非常方便，并且能极大限度的将网络系统的各个部分解耦，方便后续开发、维护。
				</p>
				<p class="f16">
				workerman-json-rpc是一个以workerman作为服务器容器，使用Json作为协议简单高效的RPC远程调用框架。
				</p>
			<h3>
				特性
			</h3>
			<ul>
			<li>使用PHP开发</li>
			<li>PHP多进程</li>
			<li>支持libevent事件轮询库，支持高并发</li>
			<li>支持服务平滑重启</li>
			<li>支持PHP文件更新检测及自动加载</li>
			<li>使用json作为协议，开发调试非常高效</li>
			<li>集成统计监控模块，方便查看服务调用量、成功率、耗时等情况</li>
			<li>自带PHP客户端，支持异步并发调用，实现并行计算</li>
			</ul>
		</div>
		<div class="col-md-5 column text-center">
			<h3>其它应用</h3>
			<div class="list-group">
				<a class="list-group-item" href="/workerman-thrift">Thrift RPC 远程调用框架</a>
				<div class="list-group-item active">
					Json RPC远程调用框架
				</div>
				<a class="list-group-item" href="/workerman-chat">聊天室框架</a>
				<a class="list-group-item" href="/workerman-statistics">统计监控系统</a>
			</div>
			<div class="thumbnail">
				<div class="caption">
					<p class="f24">下载Json RPC远程调用框架</p>
					<a class="btn btn-primary btn-large" href="/download/jsonrpczip">下载workerman-json-rpc </a> <font class='f11 gray'>下载<?php echo $jsonrpc_download_count;?>次</font>
				</div>
			</div>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-12 column">
			<h3>
				服务端开发示例
			</h3>
			<h4>创建文件./applications/JsonRpc/Services/User.php</h4>
			<pre><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class&nbsp;</span><span style="color: #0000BB">User<br /></span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">getInfoByUid</span><span style="color: #007700">(</span><span style="color: #0000BB">$uid</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;....<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;public&nbsp;static&nbsp;function&nbsp;</span><span style="color: #0000BB">getEmail</span><span style="color: #007700">(</span><span style="color: #0000BB">$uid</span><span style="color: #007700">)<br />&nbsp;&nbsp;&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;...<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">}<br />}<br /></span></span></code></pre>
			<h4>启动服务如图：</h4>
			<code>./bin/workermand start</code>
			<img src="/img/workerman-jsonrpc-start.png" />
			<br/>
			<h3>客户端使用示例</h3>
			<h4>客户端同步调用</h4>
			<pre><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">include_once&nbsp;</span><span style="color: #DD0000">'yourClientDir/RpcClient.php'</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$address_array&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'tcp://127.0.0.1:2015'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'tcp://127.0.0.1:2015'<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">//&nbsp;配置服务端列表<br /></span><span style="color: #0000BB">RpcClient</span><span style="color: #007700">::</span><span style="color: #0000BB">config</span><span style="color: #007700">(</span><span style="color: #0000BB">$address_array</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$uid&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">567</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;User对应applications/JsonRpc/Services/User.php&nbsp;中的User类<br /></span><span style="color: #0000BB">$user_client&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">RpcClient</span><span style="color: #007700">::</span><span style="color: #0000BB">instance</span><span style="color: #007700">(</span><span style="color: #DD0000">'User'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;getInfoByUid对应User类中的getInfoByUid方法<br /></span><span style="color: #0000BB">$ret_sync&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$user_client</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">getInfoByUid</span><span style="color: #007700">(</span><span style="color: #0000BB">$uid</span><span style="color: #007700">);<br /></span></span></code></pre>
			<h4>客户端异步调用</h4>
			<pre><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">include_once&nbsp;</span><span style="color: #DD0000">'yourClientDir/RpcClient.php'</span><span style="color: #007700">;<br /></span><span style="color: #FF8000">//&nbsp;服务端列表<br /></span><span style="color: #0000BB">$address_array&nbsp;</span><span style="color: #007700">=&nbsp;array(<br />&nbsp;&nbsp;</span><span style="color: #DD0000">'tcp://127.0.0.1:2015'</span><span style="color: #007700">,<br />&nbsp;&nbsp;</span><span style="color: #DD0000">'tcp://127.0.0.1:2015'<br />&nbsp;&nbsp;</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">//&nbsp;配置服务端列表<br /></span><span style="color: #0000BB">RpcClient</span><span style="color: #007700">::</span><span style="color: #0000BB">config</span><span style="color: #007700">(</span><span style="color: #0000BB">$address_array</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$uid&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">567</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$user_client&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">RpcClient</span><span style="color: #007700">::</span><span style="color: #0000BB">instance</span><span style="color: #007700">(</span><span style="color: #DD0000">'User'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;异步调用User::getInfoByUid方法<br /></span><span style="color: #0000BB">$user_client</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">asend_getInfoByUid</span><span style="color: #007700">(</span><span style="color: #0000BB">$uid</span><span style="color: #007700">);<br /></span><span style="color: #FF8000">//&nbsp;异步调用User::getEmail方法<br /></span><span style="color: #0000BB">$user_client</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">asend_getEmail</span><span style="color: #007700">(</span><span style="color: #0000BB">$uid</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">这里是其它的业务代码<br /></span><span style="color: #007700">....................<br />....................<br /><br /></span><span style="color: #FF8000">//&nbsp;需要数据的时候异步接收数据<br /></span><span style="color: #0000BB">$ret_async1&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$user_client</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">arecv_getEmail</span><span style="color: #007700">(</span><span style="color: #0000BB">$uid</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$ret_async2&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$user_client</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">arecv_getInfoByUid</span><span style="color: #007700">(</span><span style="color: #0000BB">$uid</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">这里是其他业务逻辑<br /></span></span></code></pre>
			<h3>配置</h3>
			<p>配置文件位置 ./conf/conf.d/JsonRpcWorker.conf</p>
			<pre><code>
;Rpc网络服务应用配置
;所用的传输层协议及绑定的ip端口
listen = tcp://0.0.0.0:2015
;长连接还是短连接，Rpc服务这里设置成短连接，每次请求后服务器主动断开
persistent_connection = 0
;启动多少worker进程，这里建议设置成cpu核数的整数倍，例如 CPU数*3
start_workers=12
;接收多少请求后退出该进程，重新启动一个新进程，设置成0代表永不重启
max_requests=1000
;以哪个用户运行该worker进程，建议使用权限较低的用户运行worker进程，例如www-data
user=www-data
;socket有数据可读的时候预读长度，一般设置为应用层协议包头的长度，这里设置成尽可能读取更多的数据
preread_length=84000
			</code></pre>
			<h3>监控界面如下（http://ip:33737）：</h3>
			<img src="/img/statistics.png" />
		</div>
	</div>