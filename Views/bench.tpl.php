<div class="row clearfix">
	<div class="col-md-12 column">
	<h2>性能测试</h2>
		<h3>测试环境：</h3>
<pre><code>CPU:      Intel(R) Core(TM) i3-3220 CPU @ 3.30GHz and 4 processors totally
Memory:   8G
OS:       Ubuntu 14.04 LTS
Software: ab
PHP:      5.5.9
</code></pre>

<h3>业务逻辑</h3>
<pre><code><?php
require_once './Workerman/Autoloader.php';
use Workerman\Worker;
$worker = new Worker('tcp://0.0.0.0:1234');
// 进程数配置成cpu核数-1，保留一个cpu给ab进程
$worker->count=3;
$worker->onMessage = function($connection, $data)
{
    $connection->send("HTTP/1.1 200 OK\r\nConnection: keep-alive\r\nServer: workerman\1.1.4\r\n\r\nhello");
};
Worker::runAll();
</code></pre>

<h3>结果</h3>
<pre>ab -n1000000 -c100 -k http://127.0.0.1:1234/
This is ApacheBench, Version 2.3 <$Revision: 1528965 $>
Copyright 1996 Adam Twiss, Zeus Technology Ltd, http://www.zeustech.net/
Licensed to The Apache Software Foundation, http://www.apache.org/

Benchmarking 127.0.0.1 (be patient)
Completed 100000 requests
Completed 200000 requests
Completed 300000 requests
Completed 400000 requests
Completed 500000 requests
Completed 600000 requests
Completed 700000 requests
Completed 800000 requests
Completed 900000 requests
Completed 1000000 requests
Finished 1000000 requests


Server Software:        workerman/3.1.4
Server Hostname:        127.0.0.1
Server Port:            1234

Document Path:          /
Document Length:        5 bytes

Concurrency Level:      100
Time taken for tests:   7.240 seconds
Complete requests:      1000000
Failed requests:        0
Keep-Alive requests:    1000000
Total transferred:      73000000 bytes
HTML transferred:       5000000 bytes
Requests per second:    138124.14 [#/sec] (mean)
Time per request:       0.724 [ms] (mean)
Time per request:       0.007 [ms] (mean, across all concurrent requests)
Transfer rate:          9846.74 [Kbytes/sec] received

Connection Times (ms)
              min  mean[+/-sd] median   max
Connect:        0    0   0.0      0       5
Processing:     0    1   0.2      1       9
Waiting:        0    1   0.2      1       9
Total:          0    1   0.2      1       9

Percentage of the requests served within a certain time (ms)
  50%      1
  66%      1
  75%      1
  80%      1
  90%      1
  95%      1
  98%      1
  99%      1
 100%      9 (longest request)</pre>
<pre><code><b>无流量抖动，无内存泄漏，性能非常强悍</b></code></pre>

<h3>压测评价</h3>
<pre><code><b>    压力测试脚本和workerman服务端运行在同一台服务器上，因为压测的地址均为为127.0.0.1，所以流量没有走网卡。压测使用的是版本较低的PHP5.3.10版本，使用高版本PHP如PHP5.6性能将会更高，压测成绩也将会更好。
    压测均使用较小的数据包，并且业务逻辑简单，复杂的业务压力测试开发者可以根据自己的业务情况自行实施，肯定也会给开发者一个大大的惊喜。</b>
</code></pre>

<h3>为什么workerman拥有卓越的性能</h3>
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
			从而不必每次用户请求都去创建新的连接，避免了连接时三次握手、连接后权限验证以及断开连接时四次挥手等耗时的交互过程。不仅数据库，像redis、
			memcache等同样有效。少了这些开销和网络交互，使得workerman运行更快。
		</p>
		</div>
</div>
<div class="thumbnail">
	<div class="caption">
		<h4>没有多余的网络开销</h4>
		<p>
		    传统PHP应用程序需要借助apache、nginx等容器才能对外提供网络服务，这就导致多了一层apache、nginx等容器到PHP进程的数据传输开销。
		    并且由于运行了apache或者nginx容器，这将进一步消耗服务器的资源。
		    workerman便没有这部分开销，这是由于workerman自身便是一个服务器容器具有PHP进程管理以及网络通讯功能，
		    完全不依赖于apache、nginx、php-fpm等这些容器便可以独立运行，所以性能更高。
		</p>
	</div>
</div>
<div class="thumbnail">
	<div class="caption">
		<h4>进程模型简单</h4>
		<p>
		    workerman是多进程（也有多线程版本）的，可以充分利用服务器多核资源。并且workerman具有简单的进程模型，主进程只负责监控子进程，而每个子进程独自接受维护客户端的连接，独自读取连接上发来的数据，独自处理。
		    子进程间默认没有任何数据通讯，主进程和子进程之间只有一次信号通讯。简单的进程通讯模型使得workerman相比其它复杂的进程模型的软件更高效。
		</p>
	</div>
</div>
	</div>
</div>
