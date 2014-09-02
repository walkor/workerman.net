<ul class="breadcrumb">
	<li>
		<a href="/applications">相关应用</a> <span class="divider"></span>
	</li>
	<li class="active">
		PHP统计监控系统
	</li>
</ul>
<div class="row clearfix">
		<div class="col-md-7 column">
			<h2>
				workerman-statistics
			</h2>
			<p class="f16">
				workerman-statistics是一个以workerman作为服务器容器的分布式统计监控系统。
				workermans-statisitcs使用PHP开发，无需安装Mysql等数据库，无需安装nginx、apache、php-fpm等软件。
				只要安装了PHP（>=5.3，非Win系统）便可以直接运行。
			</p>
			<p class="f16">
				workerman-statistics包含了客户端和服务端，客户端是一个类库，通过函数调用的方式以UDP协议上报数据给服务端，服务端接收上报数据然后汇总展示。
				workerman-statistics以曲线图和表格的方式展示请求量、耗时、成功率、错误日志等。
			</p>
			<h3>
				特性
			</h3>
			<ul>
			<li>使用PHP开发</li>
			<li>PHP多进程</li>
			<li>支持libevent事件轮询库，支持高并发</li>
			<li>支持服务平滑重启</li>
			<li>UDP上报数据，对业务无影响</li>
			<li>支持分布式部署</li>
			<li>分布式部署节点自动感知，查询时结果自动汇总展示</li>
			<li>可以部署在本地，不占用带宽</li>
			</ul>
			<div class="bd-ad"><?php global $bd_ad_468_60; echo $bd_ad_468_60;?></div>
		</div>
		<div class="col-md-5 column text-center">
			<h3>其它应用</h3>
			<div class="list-group">
				<a class="list-group-item" href="/workerman-thrift">Thrift RPC 远程调用框架</a>
				<a class="list-group-item" href="/workerman-jsonrpc">Json RPC远程调用框架</a>
				<a class="list-group-item" href="/workerman-chat">聊天室框架</a>
				<div class="list-group-item active">
					统计监控系统
				</div>
				<a class="list-group-item" href="/workerman-todpole">PHP小蝌蚪实时交互游戏&nbsp;&nbsp;<font style="font-size:12px;color:red;">hot</font></a>
				<a class="list-group-item" href="/workerman-flappybird">flappy bird 多人在线版游戏&nbsp;&nbsp;<font style="font-size:12px;color:red;">new</font></a>
			</div>
			<div class="thumbnail">
				<div class="caption-download">
					<h4>统计监控系统</h4>
					<p></p><table><tbody><tr><td><iframe src="http://ghbtns.com/github-btn.html?user=walkor&amp;repo=workerman-statistics&amp;type=watch&amp;count=true&amp;size=large" height="30" width="170" frameborder="0" scrolling="0" style="width:150px; height: 30px;" allowtransparency="true"></iframe></td><td><iframe src="http://ghbtns.com/github-btn.html?user=walkor&amp;repo=workerman-statistics&amp;type=fork&amp;count=true&amp;size=large" height="30" width="170" frameborder="0" scrolling="0" style="width:150px; height: 30px;" allowtransparency="true"></iframe></td></tr></tbody></table><p></p>
					<a class="btn btn-default btn-large" href="https://github.com/walkor/workerman-statistics" target="_blank"><b>Fork on Github</b></a>&nbsp;
					<a class="btn btn-default btn-large" href="/download/statisticszip"><b>下载ZIP压缩文件</b> </a> <font class='f11 gray'>下载<?php echo $statistics_download_count;?>次</font>
				</div>
			</div>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-12 column">
			<h3>安装启动只需两步</h3>
			<p>1、<a  href="/download/statisticszip" target="_blank">下载</a>后解压缩到目标目录</p>
			<p>2、运行<code>./workerman/bin/workermand start</code></p>
			<h3>
				客户端使用方法
			</h3>
			<pre><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php&nbsp;<br /></span><span style="color: #007700">require&nbsp;</span><span style="color: #DD0000">'./workerman-statistics/applications/Statistics/Clients/StatisticClient.php';&nbsp;<br /></span><span style="color: #0000BB">StatisticClient</span><span style="color: #007700">::</span><span style="color: #0000BB">tick</span><span style="color: #007700">(</span><span style="color: #DD0000">"User"</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'getInfo'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$success&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">true</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$code&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">0</span><span style="color: #007700">;&nbsp;</span><span style="color: #0000BB">$msg&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">''</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$user_info&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">User</span><span style="color: #007700">::</span><span style="color: #0000BB">getInfo</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">StatisticClient</span><span style="color: #007700">::</span><span style="color: #0000BB">report</span><span style="color: #007700">(</span><span style="color: #DD0000">'User'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'getInfo'</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$success</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$code</span><span style="color: #007700">,&nbsp;</span><span style="color: #0000BB">$msg</span><span style="color: #007700">);<br /></span></span></code></pre>
			<h3>服务端的使用</h3>
			<p>直接访问http://ip:55757便可以看到统计结果</p>
			<p>界面示例：<a href="http://workerman.net:55757" target="_blank">workerman.net:55757</a></p>
			<h3>界面截图</h3>
			<img src="/img/workerman-statistics-page.png" alt="workerman-statistics 统计监控系统截图"  max-width="1100"/>
		</div>
	</div>
