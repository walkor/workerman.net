<div class="row clearfix">
	<div class="col-md-7 column">
		<h2>
			什么是Workerman
		</h2>
		<p class="f14">
			Workerman是一款<strong class="c4">纯PHP开发</strong>的<strong class="c4">开源</strong><strong class="c2">高性能</strong>的<strong class="c3">PHP socket 服务器框架</strong>。被广泛的用于手机app、手游服务端、网络游戏服务器、聊天室服务器、硬件通讯服务器、智能家居、车联网、物联网等领域的开发。
			支持TCP长连接，支持Websocket、HTTP等协议，支持自定义协议。基于workerman开发者可以更专注于业务逻辑开发，不必再为PHP Socket底层开发而烦恼。<a class="btn" target="_blank" href="/workerman">查看更多 »</a>
		</p>
		<table><tbody><tr><td><iframe src="http://ghbtns.com/github-btn.html?user=walkor&amp;repo=workerman&amp;type=watch&amp;count=true&amp;size=large" height="30" width="170" frameborder="0" scrolling="0" style="width:150px; height: 30px;" allowtransparency="true"></iframe></td><td><iframe src="http://ghbtns.com/github-btn.html?user=walkor&amp;repo=workerman&amp;type=fork&amp;count=true&amp;size=large" height="30" width="170" frameborder="0" scrolling="0" style="width:150px; height: 30px;" allowtransparency="true"></iframe></td></tr></tbody></table>
		<a class="btn btn-default btn-large" href="https://github.com/walkor/workerman" target="_blank" rel="nofollow"><b>Fork on Github</b></a>&nbsp;
		<a class="btn btn-default btn-large" href="/download/workermanzip"><b>下载ZIP压缩文件</b></a> <font class='f11 gray'>下载<?php echo $workerman_download_count;?>次</font>
	</div>
	<div class="col-md-5 column">
		<div class="thumbnail">
			<div class="caption">
				<h3>Workerman支持的特性</h3>
				<ol>
					<li>纯PHP开发，多进程支持，支持hhvm</li>
					<li>支持TCP/UDP，单机可支持数百万以上TCP长连接</li>
					<li>支持分布式，集群能支持数百万甚至更高的并发TCP连接</li>
					<li>支持libevent事件触发网络库</li>
					<li>支持热更新及服务器平滑重启</li>
					<li>支持守护进程化和统计监控模块</li>
				</ol>
				<a class="btn" target="_blank" href="/features">查看更多 »</a>
			</div>
		</div>
	</div>
</div>
<div class="row clearfix">
	<div class="col-md-12 column">
		<nav role="navigation" class="navbar navbar-default text-center the-workerman-framework" >The <b>Workerman</b> Framework</nav>
		<div class="div-shadow3"></div><div class="div-shadow2"></div><div class="div-shadow1"></div>
	</div>
</div>
<div class="row clearfix">
	<div class="col-md-4">
		<div class="thumbnail">
			<div class="caption">
				<h3>
					<img src="/img/high-performance.png" alt="高性能"/><strong>高性能</strong>
				</h3>
				<p>
					基于高性能的libevent事件网络库，单机可支持百万的并发连接，长连接吞吐量高达36W/S。PHP数据库等对象可以常驻内存，减少解析编译及网络开销。
				</p>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="thumbnail">
			<div class="caption">
				<h3>
					<img src="/img/high-availability.png" alt="高可用性"/><strong>高可用</strong>
				</h3>
				<p>
					已被多家公司证实其高可用性，这些公司不乏日营业额过亿的电子商务公司用于服务器后台的开发，以及知名网游公司用于游戏后台的开发。
				</p>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="thumbnail">
			<div class="caption">
				<h3>
					<img src="/img/so-easy.png" alt="开发使用简单"/><strong>开发简单</strong>
				</h3>
				<p>
					接口简单，并已经有很多成熟的网络应用，只要你会PHP，你就可以在这些应用的基础上快速的开发出自己的Socket应用服务。
				</p>
			</div>
		</div>
	</div>
</div>
<div class="row clearfix">
	<div class="col-md-7 column">
		<h3>
			相关应用
		</h3>
		<div class="media">
			 <a href="http://kedou.workerman.net/" class="pull-left" target="_blank" ><img src="/img/workerman-todpole.png" class="media-object" alt='PHP 小蝌蚪聊天室界面' /></a>
			<div class="media-body">
				<h4 class="media-heading">
					<a target="_blank" href="http://kedou.workerman.net/">PHP小蝌蚪聊天室</a>&nbsp;&nbsp;<font style="font-size:12px;color:red;">置顶推荐</font>
				</h4>
				<p>使用HTML5+WebSocket+Workerman实时推送技术开发的小蝌蚪聊天室，聊天室中玩家们化身为小蝌蚪，可以自由游动，并且可以实时聊天，非常有趣。
				<br><a target="_blank" class="btn" href="/workerman-todpole">详情 »</a>
				<a class="btn" target="_blank" href="http://github.com/walkor/workerman-todpole" rel="nofollow">下载源代码 »</a>
				</p>
			</div>
		</div>
		<div class="media">
			 <a href="http://browserquest.workerman.net/" class="pull-left" target="_blank"><img src="/img/browserquest.jpg" class="media-object" alt="browserquest php 版本示意图"/></a>
			<div class="media-body">
				<h4 class="media-heading">
					<a target="_blank" href="http://browserquest.workerman.net/">BrowserQuest WorkerMan版本</a>
				</h4>
				<p>
				BrowserQuest是Mozilla发布的一款2D图形的MMO（大型多人在线）游戏，玩家可以聊天、打怪、升级、寻宝、获得成就。这里基于WorkerMan框架重写了BrowserQuest服务端nodejs部分，浏览器与后端同样是基于websocket协议通讯。
				<br>
				<a target="_blank" class="btn" href="/browserquest">详情 »</a>
				<a class="btn" target="_blank" href="https://github.com/walkor/BrowserQuest-PHP" rel="nofollow">下载源代码 »</a>
				</p>
			</div>
		</div>
		<div class="media">
			 <a href="/workerman-chat" class="pull-left"><img src="/img/workerman-chat.png" class="media-object" alt="PHP聊天室"/></a>
			<div class="media-body">
				<h4 class="media-heading">
					<a target="_blank" href="/workerman-chat">聊天室</a>
				</h4>
				<p>一个可扩展的php socket的聊天室，服务端采用workerman作为socket服务器框架，采用web-socket-js作为前端websocket库，支持多浏览器。同样可以用作app聊天室开发。
				<br><a target="_blank" class="btn" href="/workerman-chat">详情 »</a>
				<a class="btn" target="_blank" href="https://github.com/walkor/workerman-chat" rel="nofollow">下载源代码 »</a>
				</p>
			</div>
		</div>
		<div class="media">
			 <a href="https://github.com/walkor/shadowsocks-php" class="pull-left" target="_blank" rel="nofollow"><img src="/img/shadowsocks-php.png" class="media-object" alt="shadowsocks-php"/></a>
			<div class="media-body">
				<h4 class="media-heading">
					<a target="_blank" href="https://github.com/walkor/shadowsocks-php" rel="nofollow">Shdowsocks-PHP</a>
				</h4>
				<p>
				轻量级科学上网姿势，改变您的生活体验！
				<br>
				<a class="btn" target="_blank" href="https://github.com/walkor/shadowsocks-php" rel="nofollow">下载源代码 »</a>
				</p>
			</div>
		</div>
		<div class="media">
			 <a href="http://vmstat.workerman.net/" class="pull-left" target="_blank"><img src="/img/workerman-vmstat.png" class="media-object" alt="web vmstat"/></a>
			<div class="media-body">
				<h4 class="media-heading">
					<a target="_blank" href="http://vmstat.workerman.net/">Web VMStat 监控</a>
				</h4>
				<p>
				一个通过浏览器查看vmstat命令的工具，以更友好的方式实时展示服务器cpu、内存、IO等情况
				<br>
				<a target="_blank" class="btn" href="/workerman-vmstat">详情 »</a>
				<a class="btn" target="_blank" href="https://github.com/walkor/workerman-vmstat" rel="nofollow">下载源代码 »</a>
				</p>
			</div>
		</div>
		<div class="media">
			 <a href="https://github.com/walkor/live-ascii-camera" class="pull-left" target="_blank" rel="nofollow"><img src="/img/live-ascii-camera.png" class="media-object" alt="ascii 视频流 "/></a>
			<div class="media-body">
				<h4 class="media-heading">
					<a target="_blank" href="https://github.com/walkor/live-ascii-camera" rel="nofollow">摄像头 ascii 视频流实时传输</a>
				</h4>
				<p>
				利用浏览器HTML5捕获摄像头视频并转换成ascii码流，并实时转发给其它浏览器展示
				<br>
				<a class="btn" target="_blank" href="https://github.com/walkor/live-ascii-camera" rel="nofollow">下载源代码 »</a>
				</p>
			</div>
		</div>
		<div class="media">
			 <a href="/camera" class="pull-left" target="_blank"><img src="/img/live-camera.jpg" class="media-object" alt="live-camera 截图"/></a>
			<div class="media-body">
				<h4 class="media-heading">
					<a target="_blank" href="/camera">摄像头视频流实时传输</a>
				</h4>
				<p>
				网页HTML5调用摄像头，利用websocket将摄像头视频流实时传输给workerman，并实时转发给其它浏览器展示
				<br>
				<a target="_blank" class="btn" href="/camera">详情 »</a>
				<a class="btn" target="_blank" href="https://github.com/walkor/live-camera" rel="nofollow">下载源代码 »</a>
				</p>
			</div>
		</div>
		<div class="media">
			 <a href="/web-sender" class="pull-left"><img src="/img/web-msg-sender.png" class="media-object" alt="web 消息推送示意图" /></a>
			<div class="media-body">
				<h4 class="media-heading">
					<a target="_blank" href="/web-sender">Web消息推送系统</a>
				</h4>
				<p>web消息推送系统，能够通过网页实时推送消息给所有用户，支持各种浏览器（需要浏览器支持html5或者flash）
				<br><a target="_blank" class="btn" href="/web-sender">详情 »</a>
				<a class="btn" target="_blank" href="https://github.com/walkor/web-msg-sender" rel="nofollow">下载源代码 »</a>
				</p>
			</div>
		</div>
		<div class="media">
			<a href="http://www.10ss.net/" rel="nofollow"  class="pull-left" target="_blank"><img src="/img/yilianyun.png" class="media-object" alt='workerman 打印机' /></a>
			<div class="media-body">
				<h4 class="media-heading">
					<a target="_blank" href="http://www.10ss.net/" rel="nofollow">高扩展云打印机</a>
				</h4>
				<p>
				易联云平台是依托移动互联网的超远程打印解决方案，包含了设备管理中心、互联网API等模块。能够有效的实现易联云和应用之间的对接，帮助用户和开发者方便的使用超远程打印的构架和功能。
				<a target="_blank" class="btn" href="http://www.10ss.net/" rel="nofollow">本应用来自www.10ss.net</a></p>
			</div>
		</div>
		<div class="media">
			<a href="http://www.yuchats.com/" class="pull-left" target="_blank" rel="nofollow"><img src="/img/app-ya.png" class="media-object" alt='php服务端手机app 萌mark' /></a>
			<div class="media-body">
				<h4 class="media-heading">
					<a target="_blank" href="http://www.yuchats.com/" rel="nofollow">手机app萌Mark</a>
				</h4>
				<p>
				一款有趣的手机app，后端基于workerman开发
				<a target="_blank" class="btn" href="http://www.yuchats.com/" rel="nofollow">本应用由www.yuchats.com提供</a></p>
			</div>
		</div>
		<div class="media">
			 <a href="http://j.yunleyou.com/" class="pull-left" target="_blank" rel="nofollow"><img src="/img/jinglingweiji.jpg" class="media-object" alt="workerman手机游戏"/></a>
			<div class="media-body">
				<h4 class="media-heading">
					<a target="_blank" href="http://j.yunleyou.com/" rel="nofollow">手机游戏 精灵危机</a>
				</h4>
				<p>
				基于workerman开发的一款手机游戏
				<br>
				<a class="btn" target="_blank" href="http://j.yunleyou.com/" rel="nofollow">本游戏由云乐游平台提供 »</a>
				</p>
			</div>
		</div>
		<div class="media">
			 <a href="/workerman-flappybird" class="pull-left"><img src="/img/workerman-flappy-bird.png" class="media-object" alt='多人在线 flappy bird ' /></a>
			<div class="media-body">
				<h4 class="media-heading">
					<a target="_blank" href="/workerman-flappybird">flappy bird 游戏多人在线版</a>
				</h4>
				<p>多人在线版flappy bird，游戏中你可以看到无数玩家同时控制小鸟前赴后继地向前送死的壮烈(搞笑)场面。
				<br><a target="_blank" class="btn" href="/workerman-flappybird">详情 »</a>
				<a class="btn" target="_blank" href="https://github.com/walkor/workerman-flappy-bird" rel="nofollow">下载源代码 »</a>
				</p>
			</div>
		</div>
		<div class="media">
			 <a href="/workerman-thrift" class="pull-left"><img src="/img/workerman-thrift.png" class="media-object" alt="php thrift RPC模块关系示意图"/></a>
			<div class="media-body">
				<h4 class="media-heading">
					<a target="_blank" href="/workerman-thrift">Thrift RPC远程调用框架</a>
				</h4>
				 <p>Workerman和Thrift框架相结合，目的是解决异构系统与PHP通信的问题，使你的服务更方便的被其它语言调用。
				 <br><a target="_blank" class="btn" href="/workerman-thrift">详情 »</a>
				 <a class="btn" target="_blank" href="https://github.com/walkor/workerman-thrift" rel="nofollow">下载源代码 »</a>
				 </p>
			</div>
		</div>
		<div class="media">
			 <a href="/workerman-jsonrpc" class="pull-left"><img src="/img/workerman-json-rpc.png" class="media-object" alt="PHP json RPC模块关系示意图"/></a>
			<div class="media-body">
				<h4 class="media-heading">
					<a target="_blank" href="/workerman-jsonrpc">json RPC远程调用框架</a>
				</h4>
				 <p>使用json数据格式通讯的远程调用系统，通讯格式简单明了，方便其它语言调用，并集成了监控模块。
				 <br><a target="_blank" class="btn" href="/workerman-jsonrpc">详情 »</a>
				 <a class="btn" target="_blank" href="https://github.com/walkor/workerman-jsonrpc" rel="nofollow">下载源代码 »</a>
				 </p>
			</div>
		</div>
		<div class="media">
			 <a href="/workerman-statistics" class="pull-left"><img src="/img/workerman-statistics.png" class="media-object" alt="PHP统计系统示意图" /></a>
			<div class="media-body">
				<h4 class="media-heading">
					<a target="_blank" href="/workerman-statistics">分布式统计系统</a>
				</h4>
				<p>基于php socket开发的一款分布式统计监控系统，udp数据上报，分布式统计，结果自动汇总展示。纯PHP开发、无需安装Mysql、Nginx、Apache等软件。
				<br><a target="_blank" class="btn" href="/workerman-statistics">详情 »</a>
				<a class="btn" target="_blank" href="https://github.com/walkor/workerman-statistics" rel="nofollow">下载源代码 »</a>
				</p>
			</div>
		</div>
	</div>
	<div class="col-md-5 column">
		<h3></h3>
		<h4>问答动态</h4>
		<ul>
			<li>
				<a href="http://wenda.workerman.net/?/question/29">workerman 工作流程，如进程，子进程，socket等关系，是如何运作的？</a>
			</li>
			<li>
			<a href="http://gatewayworker-doc.workerman.net/advanced/push.html" rel="nofollow">其它项目如何利用GatewayWorker推送数据</a>
			</li>
			<li>
			<a href="http://wenda.workerman.net/?/question/358">如何使用worker进程处理繁重的业务</a>
			</li>
		</ul>
		<h4>
			最近更新
		</h4>
		<ul>
			<li>
				<a href="https://github.com/walkor/shadowsocks-php" rel="nofollow">2015-04-19 shadowsocks php版本服务端 发布</a>
			</li>
			<li>
				<a href="/windows">2015-04-07 workerman3.x windows版本 发布</a>
			</li>
			<li>
				<a href="/camera">2015-03-30 摄像头视频流直播demo发布</a>
			</li>
			<li>
				<a href="https://github.com/walkor/live-ascii-camera" rel="nofollow">2015-03-25 摄像头视频流转ascii码流实时传输demo发布</a>
			</li>
			<li>
				<a href="/workerman-vmstat" rel="nofollow">2015-03-23 web vmstat工具发布</a>
			</li>
			<li>
				<a href="/browserquest">2015-03-22 BrowserQuest php版本发布</a>
			</li>
			<li>
				<a href="https://github.com/walkor/workerman" rel="nofollow">2015-01-31 workerman-3.0 发布</a>
			</li>
			<li>
				<a href="http://www.workerman.net/windows">2014-11-2 workerman-MT多线程版本发布，同时支持Linux Windows平台</a>
			</li>
			<li>
				<a href="http://www.workerman.net/workerman-chat">2014-08-30 聊天室支持分房间等功能</a>
			</li>
			<li>
				<a href="http://doc.workerman.net/index.html" rel="nofollow">2014-07-23 workerman 手册发布</a>
			</li>
			<li>
				<a href="/windows" rel="nofollow">2014-06-10 workerman windows 平台多线程测试版本发布</a>
			</li>
			<li>
				<a href="http://wenda.workerman.net">2014-06-07 社区功能上线</a>
			</li>
			<li>
				<a href="/workerman-todpole">2014-06-03 flappy bird 多人在线版发布</a>
			</li>
		    <li>
				<a href="/workerman-todpole">2014-05-01 PHP小蝌蚪游戏发布</a>
			</li>
			<li>
				<a href="/workerman-chat">2014-03-25 聊天室发布</a>
			</li>
			<li>
				<a href="/workerman-statistics">2014-01-03 分布式监控系统发布</a>
			</li>
			<li>
				<a href="/workerman-thrift">2013-10-05 Thrif Rpc框架发布</a>
			</li>
			<li>
				<a href="/workerman-jsonrpc">2013-09-11 Json Rpc 框架发布</a>
			</li>
			<li>
				<a href="/workerman">2013-03-01 workerman 框架发布</a>
			</li>
		</ul>
		<h4 class="btl">更多帮助</h4>
		<ul>
			<li>
				<a href="http://wenda.workerman.net" class="c2"><b>去社区提问</b></a>
			</li>
			<li><b class="c2">发邮件至&nbsp;walkor@workerman.net</b></li>
			<li>
				<a target="_blank" href="http://shang.qq.com/wpa/qunwpa?idkey=37e8137d627745ff3f6d12238d0c36d94bd8a589d10d99082561550daeb43cfa" rel="nofollow"><img border="0" src="http://pub.idqqimg.com/wpa/images/group.png" alt="workerman技术交流群" title="workerman技术交流群"></a>
				 257046084
			</li>
		</ul>
		<br>
		<h4><a href="/donate_list"><b>捐赠墙</b></a></h4>
                <?php include __DIR__ . '/__donate_list.tpl.php';?>
		<div class="bd-ad"><?php global $bd_ad_250_250; echo $bd_ad_250_250;?></div>
	</div>
</div>

<div class="row clearfix">
	<div class="col-md-12 column">
		<h4 class="btl">用户案例</h4>
		<table class="anli">
		<tr>
		<td><img src="/img/logos/yilianyun.png" alt="易联云logo"></td>
		<td><img src="/img/logos/ebox.png" alt="ebox 易泊网 logo"></td>
		<td><img src="/img/logos/mitaole.png" alt="米淘乐logo"></td>
		<td><img src="/img/logos/duowan.png" alt="多玩logo"></td>
		<td><img src="/img/logos/meng-mark.png" alt="萌mark logo"></td>
		</tr>
		<tr>
		<td><img src="/img/logos/ilongterm.png" alt="龙腾海外房产网logo"></td>
		<td><img src="/img/logos/dbfen.png" alt="多备份logo"></td>
		<td><img src="/img/logos/zhibo8.png" alt="zhibo8 logo"></td>
		</tr>
		</table>
	</div>
</div>
