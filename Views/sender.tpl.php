<ul class="breadcrumb">
	<li>
		<a href="/applications">相关应用</a> <span class="divider"></span>
	</li>
	<li class="active">
		WEB消息推送框架
	</li>
</ul>
<div class="row clearfix">
		<div class="col-md-7 column">
			<h2>
				WEB消息推送框架
			</h2>
			<p class="f16">
				web-msg-sender是一款web长连接推送框架，采用<a href="/phpsocket_io">PHPSocket.IO开发</a>，基于WebSocket长连接通讯，如果浏览器不支持WebSocket则自动转用comet推送。
				通过后台推送消息，消息可以即时推送到客户端，非轮询，实时性非常好，性能很高。
			</p>
			<div class="f16">
			<b>特点：</b><br>
			<ul>
			<li>多浏览器支持</li>
			<li>支持针对单个用户推送消息</li>
			<li>支持向所有用户推送消息</li>
			<li>长连接推送（websocket或者comet），消息即时到达</li>
			<li>支持在线用户数实时统计展示</li>
			<li>支持在线页面数实时统计展示</li>
			<li>支持跨域推送</li>
			</ul>
			</div>
			<h3>下载</h3>
			<div class="thumbnail">
				<div class="caption-download">
					<h4>WEB消息推送框架</h4>
					<p></p><table><tbody><tr><td><iframe src="https://ghbtns.com/github-btn.html?user=walkor&amp;repo=web-msg-sender&amp;type=watch&amp;count=true&amp;size=large" height="30" width="170" frameborder="0" scrolling="0" style="width:150px; height: 30px;" allowtransparency="true"></iframe></td><td><iframe src="https://ghbtns.com/github-btn.html?user=walkor&amp;repo=web-msg-sender&amp;type=fork&amp;count=true&amp;size=large" height="30" width="170" frameborder="0" scrolling="0" style="width:150px; height: 30px;" allowtransparency="true"></iframe></td></tr></tbody></table><p></p>
					<a class="btn btn-default btn-large" href="https://github.com/walkor/web-msg-sender" target="_blank" rel="nofollow"><b>Fork on Github</b></a>&nbsp;
					<a class="btn btn-default btn-large" href="/download/senderzip"><b>下载ZIP压缩文件</b> </a> <font class='f11 gray'>下载<?php echo $sender_download_count;?>次</font>
					<!--<h4>Windows版本下载</h4>
					<a class="btn btn-default btn-large" href="/download/web-msg-sender-for-win.zip"><b>下载Win版本ZIP压缩文件</b> </a>--> 
				</div>
			</div>
			<h3>PHPSocket.IO开发手册</h3>
			<a href="https://github.com/walkor/phpsocket.io/tree/master/docs/zh" rel="nofollow">PHPSocket.IO开发手册</a>			
                        
			<h3>Demo:</h3>
			<b>效果1:<b>
                        <p class="f16">接收消息页面：<a rel="nofollow" href="http://demos.workerman.net/web-sender">http://demos.workerman.net/web-sender/</a></p>
			<p class="f16">推送接口url：<a rel="nofollow" href="http://demos.workerman.net:2121/?type=publish&to=&content=content">http://demos.workerman.net:2121/?type=publish&to=uid&content=content</a><br>
其中to为接收消息的uid，如果传空则向所有人推送消息
content 为消息内容
			</p>
                        <br>
                        <b>效果2:</b><br>
                        <p class="f16">见本页面页脚在线统计部分，支持实时的在线人数和在线页面统计</p>
			<div class="bd-ad"><?php global $bd_ad_468_60; echo $bd_ad_468_60;?></div>
		</div>
		<div class="col-md-5 column text-center">
			<h3>其它应用</h3>
			<div class="list-group">
				<a class="list-group-item" href="/workerman-vmstat">vmstat服务器状态监控服务</a>
				<div class="list-group-item active">
					WEB消息推送框架
				</div>
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
		<div class="col-md-12 column">
			<h3>
				安装启动
			</h3>
			<p>首先：参考手册<a href="http://doc.workerman.net/315116">检查/安装workerman环境</a></p>
			<p>1、下载：(<a href="/download/senderzip" target="_blank">下载web-msg-sender</a>，并解压缩到任意目录</p>
			<p>2、启动：linux系统cd到到框架目录里运行<code>php start.php start -d</code>。windows系统进入到框架目录里双击start_for_win.bat文件启动。</p>
			<p>3、测试：浏览器访问端口http://ip:2123或者http://域名:2123，例如
			<a href="http://workerman.net:2123/">http://workerman.net:2123</a>如图：(如果无法访问请检查服务器防火墙，如果是云服务器还要设置安全组)</p>
			<img src="/img/web-msg-sender-demo.png" alt="WEB推送使用界面"/>
			<br>
			<h3>前端测试：</h3>
			<pre>
&lt;script src='http://cdn.bootcss.com/socket.io/1.3.7/socket.io.js'&gt;&lt;/script&gt;
&lt;script&gt;
    // 连接服务端，workerman.net:2120换成实际部署web-msg-sender服务的域名或者ip
    var socket = io('http://workerman.net:2120');
    // uid可以是自己网站的用户id，以便针对uid推送以及统计在线人数
    uid = 123;
    // socket连接后以uid登录
    socket.on('connect', function(){
    	socket.emit('login', uid);
    });
    // 后端推送来消息时
    socket.on('new_msg', function(msg){
        console.log("收到消息："+msg);
    });
    // 后端推送来在线数据时
    socket.on('update_online_count', function(online_stat){
        console.log(online_stat);
    });
&lt;/script&gt;
			</pre>
<h3>后端调用api向任意用户推送：</h3>
<pre>
<?php
  $api_str = '<?php
// 指明给谁推送，为空表示向所有在线用户推送
$to_uid = "";
// 推送的url地址，使用自己的服务器地址
$push_api_url = "http://workerman.net:2121/";
$post_data = array(
   "type" => "publish",
   "content" => "这个是推送的测试数据",
   "to" => $to_uid, 
);
$ch = curl_init ();
curl_setopt ( $ch, CURLOPT_URL, $push_api_url );
curl_setopt ( $ch, CURLOPT_POST, 1 );
curl_setopt ( $ch, CURLOPT_HEADER, 0 );
curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
curl_setopt ( $ch, CURLOPT_POSTFIELDS, $post_data );
curl_setopt ($ch, CURLOPT_HTTPHEADER, array("Expect:"));
$return = curl_exec ( $ch );
curl_close ( $ch );
var_export($return);';
echo htmlspecialchars($api_str);
?>
</pre>
			<h3>HTTPS支持设置：</h3>
			<div>参考手册<a target="_blank" content="nofollow" href="https://github.com/walkor/phpsocket.io/tree/master/docs/zh#%E6%94%AF%E6%8C%81sslhttps-wss">PHPSocket.io手册-HTTPS设置</div>
		</div>
	</div>
