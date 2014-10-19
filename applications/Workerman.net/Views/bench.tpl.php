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
<pre><code>// HTTP协议返回hello字符串，非HTTP协议客户端发来什么就返回什么
class Benchmark extends Man\Core\SocketWorker
{
    // 分包
    public function dealInput($buffer)
    {
       return 0;
    }
    
    // HTTP协议返回hello字符串，非HTTP协议客户端发来什么就返回什么
    public function dealProcess($buffer)
    {
        // 是HTTP协议
        if('G' == $buffer[0] )
        {
            // http 改成短链接
            $this->isPersistentConnection = 0;
            return $this->sendToClient("HTTP/1.1 200 OK\r\nContent-Length: 5\r\n\r\nhello");
        }
        // 是benchmark脚本， 长链接
        $this->isPersistentConnection = 1;
        return $this->sendToClient($buffer);
    }
} 
</code></pre>

<h3>压测方法</h3>
<h4>方法一 ab软件(只能以HTTP协议压测workerman短连接性能)：</h4>
<pre><code>#例如下面的语句是模拟200个客户端向127.0.0.1:56789发送100000个HTTP请求
ab -n 100000 -c200 127.0.0.1:56789/
</code></pre>

<h4>方法二：使用workerman自带的benchmark软件，只支持64位linux系统</h4>
<pre><code>1、#例如下面的命令含义是400并发线程模拟400个并发用户，每个用户连接127.0.0.1:56789端口发送一个hello服务端收到hello后返回一个hello后断开连接，这样每个线程并发运行10000次
./benchmark -n10000 -h1 -c400 -p56789 127.0.0.1 
2、#例如下面的命令含义是1000并发线程模拟1000个并发用户，每个用户连接127.0.0.1:56789端口，然后每个线程并发连续发送10000个hello,服务端收到hello后返回一个hello
./benchmark -n1 -h10000 -c1000 -p56789 127.0.0.1 
</code></pre>

<h3>结果</h3>
<h4>普通PHP（版本5.3.10）压测</h4>
<pre><code><b>短链接</b>（每次请求完成后关闭链接，下次请求建立新的链接）:
    <b>脚本：</b>./benchmark -n100000 -h1 -c500 -p56789 127.0.0.1
    <b>含义：</b> 压测脚本开500个并发线程模拟500个并发用户，每个线程链接Workerman 10W次，每次链接发送1个请求
    <b>结果：</b> 吞吐量：<b>1.9W/S</b> ， cpu利用率：32%

<b>长链接</b>（每次请求后不关闭链接，下次请求继续复用这个链接）:
    <b>脚本：</b>./benchmark -n1 -h100000 -c2000 -p56789 127.0.0.1 
    <b>含义</b>： 压测脚本开2000个并发线程模拟2000个并发用户，每个线程链接Workerman 1次，每个链接发送10W请求
    <b>结果</b>： 吞吐量：<b>36.7W/S</b> ， cpu利用率：69%

<b>内存：</b>每个进程内存稳定在6444K，无内存泄漏
</code></pre>

<h4>HHVM环境压测</h4>
<pre><code><b>短链接</b>（每次请求完成后关闭链接，下次请求建立新的链接）:
    <b>脚本：</b>./benchmark -n100000 -h1 -c1000 -p56789 127.0.0.1
    <b>含义：</b> 压测脚本开1000个并发线程模拟1000个并发用户，每个线程链接Workerman 10W次，每次链接发送1个请求
    <b>结果：</b> 吞吐量：<b>3.5W/S</b> ， cpu利用率：35%

<b>长链接</b>（每次请求后不关闭链接，下次请求继续复用这个链接）:
    <b>脚本：</b>./benchmark -n1 -h100000 -c6000 -p56789 127.0.0.1 
    <b>脚本：</b> 压测脚本开6000个并发线程模拟6000个并发用户，每个线程链接Workerman 1次，每个链接发送10W请求
    <b>结果：</b> 吞吐量：<b>45W/S</b> ， cpu利用率：67%

<b>内存：</b>HHVM环境每个进程内存稳定在46M，无内存泄漏
</code></pre>
<pre><code><b>无流量抖动，无内存泄漏，性能非常强悍</b></code></pre>

<h3>压测代码及脚本下载：</h3>
<pre><code>
<b>压测代码及脚本：</b><a href="https://github.com/walkor/workerman-bench">https://github.com/walkor/workerman-bench</a>
<b>压测脚本benchmark位置：</b>workerman-bench/applications/Benchmark/benchmark
<b>说明：</b>由于各个系统配置不同，所以压测时可能需要根据系统配置调整压测参数才能达到最优
</code></pre>

<h3>压测评价</h3>
<pre><code>压力测试脚本和workerman服务端运行在同一台服务器上，因为压测的地址均为为127.0.0.1，所以流量没有走网卡。压测使用的是版本较低的PHP5.3.10版本，使用高版本PHP如PHP5.6性能将会更高，压测成绩也将会更好。
另外也压测了facebook的HHVM虚拟机，在短连接方面相比PHP5.3.10吞吐量高出84%左右，在长连接方面比PHP5.3.10吞吐量高出25%左右，期待HHVM后续新版本会有更加出色的成绩。
压测均使用较小的数据包，并且业务逻辑简单，复杂的业务压力测试开发者可以根据自己的业务情况自行实施，肯定也会给开发者一个不小的惊喜。
</code></pre>
	</div>
</div>
