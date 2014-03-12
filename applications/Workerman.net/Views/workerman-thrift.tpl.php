<ul class="breadcrumb">
	<li>
		<a href="/">首页</a> <span class="divider"></span>
	</li>
	<li>
		<a href="/applications">相关应用</a> <span class="divider"></span>
	</li>
	<li class="active">
		Thrift Rpc远程调用框架
	</li>
</ul>
<div class="row clearfix">
		<div class="col-md-7 column">
			<h2>
				workerman-thrift-rpc
			</h2>
			<p class="f16">
				workerman-thrift-rpc是一个以workerman作为服务器容器，使用<a href="http://thrift.apache.org" target="_blank"><strong>Thrift</strong></a>协议及其传输层模块搭建起来的跨语言的RPC远程调用框架。
			</p>
			<p class="f16">
				workerman-thrift-rpc的目标是解决异构系统之间通信的问题，workerman-thrift-rpc使用PHP开发远程调用服务，
				然后使用thrift自动生成C++, Java, Python, PHP, Ruby, Erlang, Perl, Haskell, C#, Cocoa, JavaScript, Node.js, Smalltalk, OCaml等这些语言的客户端，
				通过这些客户端去调用PHP语言开发的服务。
			</p>
		</div>
		<div class="col-md-5 column text-center">
			<div class="list-group">
				<div class="list-group-item active">
					Thrift RPC 远程调用框架
				</div>
				<a class="list-group-item" href="/workerman-jsonrpc">Json Rpc远程调用框架</a>
				<a class="list-group-item" href="/workerman-chat">聊天室框架</a>
				<a class="list-group-item" href="/workerman-statistics">统计监控系统</a>
			</div>
			<div class="thumbnail">
				<div class="caption">
					<p class="f24">下载</p>
					<a class="btn btn-primary btn-large" href="/download/thriftczip">下载 </a> <font class='f11 gray'>下载<?php echo $thrift_download_count;?>次</font>
				</div>
			</div>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-12 column">
			<h3>
				特性
			</h3>
			<ul>
			<li>使用PHP开发</li>
			<li>PHP多进程</li>
			<li>支持libevent事件轮询库，支持高并发</li>
			<li>支持服务平滑重启</li>
			<li>支持PHP文件更新检测及自动加载</li>
			<li>支持原生thrift协议，自动生成c/c++/java等各种语言的客户端</li>
			<li>集成统计监控模块，方便查看服务调用量、成功率、耗时等情况</li>
			<li>自带PHP客户端，支持异步并发调用，实现并行计算</li>
			<li>PHP客户端支持故障节点自动踢出</li>
			<li>PHP客户端支持故障节点恢复检测</li>
			</ul>
			<h3>
				服务端开发示例
			</h3>
			<h4>1、定义一个Thrift的IDL文件 如HelloWorld.thrift</h4>
			<pre><code>
namespace php Services.HelloWorld
service HelloWorld
{
    string sayHello(string name);
}
			</code></pre>
			<h4>2、使用thrift编译生成框架文件</h4>
			<code>thrift -gen php:server HelloWorld.thrift && cp ./gen-php/Services/HelloWorld ./applications/ThriftRpc/Services/ -r</code>
			<h4>3、完善框架文件逻辑</h4>
			./applications/ThriftRpc/Services/HelloWorld/HelloWorldHandler.php
			<pre><code>
<span style="color: #000000">
<span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">namespace&nbsp;</span><span style="color: #0000BB">Services</span><span style="color: #007700">\</span><span style="color: #0000BB">HelloWorld</span><span style="color: #007700">;<br /><br />class&nbsp;</span><span style="color: #0000BB">HelloWorldHandler&nbsp;</span><span style="color: #007700">implements&nbsp;</span><span style="color: #0000BB">HelloWorldIf&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;public&nbsp;function&nbsp;</span><span style="color: #0000BB">sayHello</span><span style="color: #007700">(</span><span style="color: #0000BB">$name</span><span style="color: #007700">)<br />&nbsp;&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;</span><span style="color: #DD0000">"Hello&nbsp;</span><span style="color: #0000BB">$name</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br />&nbsp;&nbsp;}<br />}<br /></span>
</span>
			</code></pre>
			<h4>4、./conf/conf.d/下创建HelloWorld.conf文件如下</h4>
			<pre><code>
;Thrift HelloWorld 服务
;监听的端口,每个服务设置成一个单独的端口
listen = tcp://0.0.0.0:9090
;短连接，每次请求后服务端主动断开
persistent_connection = 0
;启动多少worker进程,一般设置成 cpu核数*3
start_workers=72
;接收多少请求后退出
max_requests=10000
;以哪个用户运行该服务进程，默认使用www-data用户，如果没有该用户可以改成其它权限较低的用户
user=www-data
;worker_file，worker入口文件，统一使用ThriftWorker.php
worker_file = ./workers/ThriftWorker.php
;thrift transport，默认使用TBufferedTransport，可以改成其它transport（注意不要忘记修改客户端对应的thrift_transport配置项）
thrift_transport = TBufferedTransport
;thrift protocol，默认使用二进制协议，可以设置成其它协议（注意不要忘记修改客户端对应的thrift_protocol配置项）
thrift_protocol  = TBinaryProtocol
			</code></pre>
			<h4>5、启动服务端</h4>
			<code>./bin/workermand start</code>
			<br/>
			<h3>客户端使用示例</h3>
			<pre><code>
<span style="color: #000000">
<span style="color: #0000BB">&lt;?php</span><span style="color: #FF8000">//&nbsp;引入客户端文件<br /></span><span style="color: #007700">require_once&nbsp;</span><span style="color: #DD0000">'yourdir/workerman/applications/ThriftRpc/Clients/ThriftClient.php'</span><span style="color: #007700">;<br />use&nbsp;</span><span style="color: #0000BB">ThriftClient</span><span style="color: #007700">\</span><span style="color: #0000BB">ThriftClient</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">//&nbsp;传入配置，一般在某统一入口文件中调用一次该配置接口即可<br /></span><span style="color: #0000BB">thriftClient</span><span style="color: #007700">::</span><span style="color: #0000BB">config</span><span style="color: #007700">(<br />&nbsp;&nbsp;&nbsp;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'HelloWorld'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'addresses'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'127.0.0.1:9090'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'127.0.0.2:9191'</span><span style="color: #007700">,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'thrift_protocol'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'TBinaryProtocol'</span><span style="color: #007700">,</span><span style="color: #FF8000">//不配置默认是TBinaryProtocol，对应服务端HelloWorld.conf配置中的thrift_protocol<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'thrift_transport'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;</span><span style="color: #DD0000">'TBufferedTransport'</span><span style="color: #007700">,</span><span style="color: #FF8000">//不配置默认是TBufferedTransport，对应服务端HelloWorld.conf配置中的thrift_transport<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'UserInfo'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'addresses'&nbsp;</span><span style="color: #007700">=&gt;&nbsp;array(<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #DD0000">'127.0.0.1:9393'<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">),<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;),<br />&nbsp;&nbsp;&nbsp;&nbsp;)<br />);<br /></span><span style="color: #FF8000">//&nbsp;=========&nbsp;&nbsp;以上在WEB入口文件中调用一次即可&nbsp;&nbsp;===========<br /><br /><br />//&nbsp;=========&nbsp;&nbsp;以下是开发过程中的调用示例&nbsp;&nbsp;==========<br /><br />//&nbsp;初始化一个HelloWorld的实例<br /></span><span style="color: #0000BB">$client&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">ThriftClient</span><span style="color: #007700">::</span><span style="color: #0000BB">instance</span><span style="color: #007700">(</span><span style="color: #DD0000">'HelloWorld'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;--------同步调用实例----------<br /></span><span style="color: #0000BB">var_export</span><span style="color: #007700">(</span><span style="color: #0000BB">$client</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">sayHello</span><span style="color: #007700">(</span><span style="color: #DD0000">"TOM"</span><span style="color: #007700">));<br /><br /></span><span style="color: #FF8000">//&nbsp;--------异步调用示例-----------<br />//&nbsp;异步调用&nbsp;之&nbsp;发送请求给服务端（注意：异步发送请求格式统一为&nbsp;asend_XXX($arg),既在原有方法名前面增加'asend_'前缀）<br /></span><span style="color: #0000BB">$client</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">asend_sayHello</span><span style="color: #007700">(</span><span style="color: #DD0000">"JERRY"</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$client</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">asend_sayHello</span><span style="color: #007700">(</span><span style="color: #DD0000">"KID"</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;这里是其它业务逻辑<br /></span><span style="color: #0000BB">sleep</span><span style="color: #007700">(</span><span style="color: #0000BB">1</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;异步调用&nbsp;之&nbsp;接收服务端的回应（注意：异步接收请求格式统一为&nbsp;arecv_XXX($arg),既在原有方法名前面增加'arecv_'前缀）<br /></span><span style="color: #0000BB">var_export</span><span style="color: #007700">(</span><span style="color: #0000BB">$client</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">arecv_sayHello</span><span style="color: #007700">(</span><span style="color: #DD0000">"KID"</span><span style="color: #007700">));<br /></span><span style="color: #0000BB">var_export</span><span style="color: #007700">(</span><span style="color: #0000BB">$client</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">arecv_sayHello</span><span style="color: #007700">(</span><span style="color: #DD0000">"JERRY"</span><span style="color: #007700">));</span>
</span>
			</code></pre>
			<h3>性能</h3>
			<h4>环境</h4>
<pre><code>系统：Debian GNU/Linux 6.0
cpu ：Intel(R) Xeon(R) CPU E5-2420 0 @ 1.90GHz * 24
内存：64G

WorkerMan：开启24个Worker进程处理业务请求
压测软件：loadrunner
</code></pre>

<h4>业务逻辑</h4>
<p><code>HelloWorld sayHello</code></p>
<h4>结果</h4>

<pre><code>吞吐量：平均8200/S
内存占用：24*12M=288M
cpu平均使用率：55%
load：16
流量：15M/S

处理曲线平稳，无内存泄漏，无流量抖动
</code></pre>
		</div>
	</div>