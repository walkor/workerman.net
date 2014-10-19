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
<pre><code>
客户端发送hello，服务端返回hello
</code></pre>

<h3>压测方法</h3>
<h4>方法一 ab软件(只能以HTP协议压测workerman短连接性能)：</h4>
<pre><code>
#模拟200个客户端，向127.0.0.1:56789发送100000个HTTP请求
ab -n 100000 -c200 127.0.0.1:56789/
</code></pre>

<h4>方法二：使用workerman自带的benchmark软件，只支持64位linux系统</h4>
<pre><code>
1: ./benchmark -n10000 -h1 -c400 -p56789 127.0.0.1 
#命令含义是400并发线程，连接127.0.0.1:56789端口发送一个hello服务端收到hello后返回一个hello后断开连接，这样每个线程并发运行10000次

2：./benchmark -n1 -h10000 -c1000 -p56789 127.0.0.1 
#命令含义是1000并发线程，连接127.0.0.1:56789端口，然后每个线程并发连续发送10000个hello,服务端收到hello后返回一个hello
</code></pre>

<h3>结果</h3>
<h4>普通PHP（版本5.3.10）压测</h4>
<pre><code><b>短链接</b>（每次请求完成后关闭链接，下次请求建立新的链接）:
    <b>条件：</b> 压测脚本开500个并发线程模拟500个并发用户，每个线程链接Workerman 10W次，每次链接发送1个请求
    <b>结果：</b> 吞吐量：<b>1.9W/S</b> ， cpu利用率：32%

<b>长链接</b>（每次请求后不关闭链接，下次请求继续复用这个链接）:
    <b>条件</b>： 压测脚本开2000个并发线程模拟2000个并发用户，每个线程链接Workerman 1次，每个链接发送10W请求
    <b>结果</b>： 吞吐量：<b>36.7W/S</b> ， cpu利用率：69%

<b>内存：</b>每个进程内存稳定在6444K，无内存泄漏
</code></pre>

<h4>HHVM环境压测</h4>
<pre><code><b>短链接</b>（每次请求完成后关闭链接，下次请求建立新的链接）:
    <b>条件：</b> 压测脚本开1000个并发线程模拟1000个并发用户，每个线程链接Workerman 10W次，每次链接发送1个请求
    <b>结果：</b> 吞吐量：<b>3.5W/S</b> ， cpu利用率：35%

<b>长链接</b>（每次请求后不关闭链接，下次请求继续复用这个链接）:
    <b>条件：</b> 压测脚本开6000个并发线程模拟6000个并发用户，每个线程链接Workerman 1次，每个链接发送10W请求
    <b>结果：</b> 吞吐量：<b>45W/S</b> ， cpu利用率：67%

<b>内存：</b>HHVM环境每个进程内存稳定在46M，无内存泄漏
</code></pre>
<pre><code><b>无流量抖动，无内存泄漏，性能非常强悍</b></code></pre>

<h3>压测脚本</h3>
<pre><code>
压测代码及脚本：https://github.com/walkor/workerman-bench
</code></pre>
	</div>
</div>
