<ul class="breadcrumb">
	<li>
		<a href="/workerman">关于</a> <span class="divider"></span>
	</li>
	<li class="active">
		特性
	</li>
</ul>
<div class="row clearfix">
	<div class="col-md-12 column">
	<h3>
		为什么workerman拥有卓越的性能
	</h3>
	</div>
</div>
<div class="row clearfix">
	<div class="col-md-4 column">
	<div class="text-center"><img src="/img/workerman-request-map.png" alt="workerman 运行机制" /></div>
	</div>
	<div class="col-md-8 column">
	<div class="thumbnail">
		<div class="caption">
			<h4>避免读取磁盘和反复编译</h4>
			<p>
    			workerman运行过程中，单个进程生命周期内只要PHP文件被载入编译过一次，便会常驻内存，不会再去从磁盘读取或者再去编译。
    			workerman省去了每次请求中的请求初始化、创建执行环境、词法解析、语法解析、编译生成opcode以及请求关闭等诸多耗时的步骤。
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
	<h3>性能测试</h3>
			<h4>测试环境：</h4>
<pre><code>系统：ubuntu 12.04 LTS 64位
内存：8G
cpu：Intel® Core™ i3-3220 CPU @ 3.30GHz × 4
</code></pre>

<h4>业务逻辑</h4>
<code>HelloWorld</code>
<h4>结果</h4>

<pre><code>短链接（每次请求完成后关闭链接，下次请求建立新的链接）:
条件： 压测脚本开500个线程，每个线程链接Workerman 10W次，每次链接发送1个请求
结果： 吞吐量：<b>3W/S</b> ， cpu：60% ， 内存占用：4*8M = 32M
</code></pre>
<pre><code>长链接（每次请求后不关闭链接，下次请求继续复用这个链接）:
条件： 压测脚本开1000个线程，每个线程链接Workerman 1次，每个链接发送10W请求
结果： 吞吐量：<b>9.7W/S</b> ， cpu：68% ， 内存占用：4*8M = 32M
</code></pre>
<pre><code>无流量抖动，无内存泄漏，性能非常强悍</code></pre>
	</div>
</div>
