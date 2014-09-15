<ul class="about-nav">
	<li class="nav-head">
		关于
	</li>
	<li>
		<a href="/workerman">workerman</a> 
	</li>
	<li>
		<a href="/features">特性</a> 
	</li>
	<li class="active">
		性能
	</li>
	<li>
		<a href="/license">许可</a> 
	</li>
	<li>
		<a href="/contact">联系我们</a>
	</li>
</ul>
<div class="row clearfix">
	<div class="col-md-12 column">
	<h2 class="text-center">
		为什么workerman拥有卓越的性能
	</h2>
	</div>
</div>
<div class="row clearfix">
	<div class="col-md-5 column">
	<div class="text-center"><img src="/img/workerman-request-map.png" alt="workerman 运行机制"  class="img-thumbnail" /></div>
	</div>
	<div class="col-md-7 column">
	<div class="thumbnail">
		<div class="caption">
			<h4>避免读取磁盘和反复编译</h4>
			<p>
    			workerman运行过程中，单个进程生命周期内只要PHP文件被载入编译过一次，便会常驻内存，不会再去从磁盘读取或者再去编译。
    			workerman省去了重复的请求初始化、创建执行环境、词法解析、语法解析、编译生成opcode以及请求关闭等诸多耗时的步骤。
    			实际上workerman运行起来后便几乎没有磁盘IO及PHP文件编译开销，剩下的只是简单的计算过程，这使得workerman运行飞快。
			</p>
			</div>
	</div>
	<div class="thumbnail">
		<div class="caption">
			<h4>数据或者资源可以全局共享</h4>
			<p>
    			workerman中多个请求是可以共享数据或者资源的，当前请求产生的全局变量或者类的静态成员在下一次请求中仍然有效。
    			这对于减少开销，提高运行效率非常有用。例如业务只要初始化一次数据库连接，那么全局都可以共享这个连接，这实现了真正意义上的数据库长连接。
    			从而不必每次用户请求都去创建新的连接，避免了连接时三次握手、连接后权限验证以及断开连接时四次握手等耗时的交互过程。不仅数据库，像redis、
    			memcache等同样有效。少了这些开销和网络交互，使得workerman运行更快。
			</p>
			</div>
	</div>
	<div class="thumbnail">
		<div class="caption">
			<h4>没有多余的网络开销</h4>
			<p>
			    传统PHP应用程序需要借助apache、nginx等容器才能对外提供网络服务，这就导致多了一层apache、nginx等容器到PHP进程的网络传输开销。
			    workerman便没有这部分开销，这是由于workerman自身便是一个服务器容器具有PHP进程管理以及网络通讯功能，
			    完全不依赖于apache、nginx、php-fpm等这些容器便可以独立运行。
			</p>
		</div>
	</div>
	</div>
</div>
<div class="row clearfix">
	<div class="col-md-12 column">
	<h2>性能测试</h2>
			<h3>测试环境：</h3>
<pre><code>系统：debian 6.0 64位
内存：64G
cpu：ntel(R) Xeon(R) CPU E5-2420 0 @ 1.90GHz （2颗物理cpu，6核心，2线程）
Workerman：开启200个Benchark进程
压测脚本：benchmark
业务：发送并返回hello字符串
</code></pre>

<h3>业务逻辑</h3>
<code>客户端发送hello，服务端返回hello</code>
<h3>结果</h3>

<h4>普通PHP（版本5.3.10）压测</h4>
<pre><code>短链接（每次请求完成后关闭链接，下次请求建立新的链接）:
    条件： 压测脚本开500个并发线程模拟500个并发用户，每个线程链接Workerman 10W次，每次链接发送1个请求
    结果： 吞吐量：1.9W/S ， cpu利用率：32%

长链接（每次请求后不关闭链接，下次请求继续复用这个链接）:
    条件： 压测脚本开2000个并发线程模拟2000个并发用户，每个线程链接Workerman 1次，每个链接发送10W请求
    结果： 吞吐量：36.7W/S ， cpu利用率：69%

内存：每个进程内存稳定在6444K，无内存泄漏
</code></pre>

<h4>HHVM环境压测</h4>
<pre><code>短链接（每次请求完成后关闭链接，下次请求建立新的链接）:
    条件： 压测脚本开1000个并发线程模拟1000个并发用户，每个线程链接Workerman 10W次，每次链接发送1个请求
    结果： 吞吐量：3.5W/S ， cpu利用率：35%

长链接（每次请求后不关闭链接，下次请求继续复用这个链接）:
    条件： 压测脚本开6000个并发线程模拟6000个并发用户，每个线程链接Workerman 1次，每个链接发送10W请求
    结果： 吞吐量：45W/S ， cpu利用率：67%

内存：HHVM环境每个进程内存稳定在46M，无内存泄漏
</code></pre>
<pre><code>无流量抖动，无内存泄漏，性能非常强悍</code></pre>
	</div>
</div>
