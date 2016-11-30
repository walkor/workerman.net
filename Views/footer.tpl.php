			<div class="row clearfix">
				<br>
			</div>
			<div class="row clearfix">
					<div class="col-md-1 column">
					</div>
					<div class="col-md-3 column">
						<b>关于</b>
						<ul class="sub">
						<li><a href="/workerman">Workerman</a></li>
						<li><a href="/features">特性</a></li>
						<li><a href="/performance">性能</a></li>
						<li><a href="/license">许可</a></li>
						<li><a href="/contact">联系我们</a></li>
						</ul>
					</div>
					<div class="col-md-4 column">
						<b>相关连接</b>
						<ul class="sub">
						<li><a href="/download/workerman">Workerman Linux多进程版本（稳定）</a></li>
						<li><a href="/windows">Workerman Windows版本</a></li>
						<li><a href="/download/todpole">flappy bird 多人在线版</a></li>
						<li><a href="/download/todpole">小蝌蚪聊天室</a></li>
						<li><a href="/download/thrift">Thrift Rpc远程调用框架</a></li>
						<li><a href="/download/jsonrpc">Json Rpc远程调用框架</a></li>
						<li><a href="/download/chat">PHP 聊天室</a></li>
						<li><a href="/download/statistics">分布式统计监控系统</a></li>
						<li><a href="http://www.workerman.net/gatewaydoc/">GatewayWorker手册</a></li>
						</ul>
						<div class="center">
						<p class="gray" id="online_count"></p>
						<p class="gray" style="font-size:11px"> Powered by <a href="http://www.workerman.net/web-sender" target="_blank"><strong>web-msg-sender!</strong></a></p>
						<script type="text/javascript">
							var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
							document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F609dc2f866ce0133cdf405ea1a45f492' type='text/javascript'%3E%3C/script%3E"));
						</script>
						<p class="gray">
						蜀ICP备13029294号
						</p>
						</div>
					</div>
					<div class="col-md-3 column">
						<b>联系我们</b>
						<ul class="sub">
						<li>
						QQ群1：257046084(2000人已满)<br>
						QQ群2：137410824(2000人已满)<br>
						QQ群3：527941005(500人已满)<br>
						QQ群4：172789145(2000人)<br>
						&nbsp;VIP群：544584915 <br>
						商务合作联系QQ：2202055656<br>
						邮箱：walkor@workerman.net
						</li>
						</ul>
					</div>
					<div class="col-md-1 column">
					</div>
			</div>
		</div>
	</div>
</div>
<script src='//cdn.bootcss.com/socket.io/1.3.7/socket.io.js'></script>
<script>
var socket = io('http://'+document.domain+':3120');
socket.on('connect', function(){socket.emit('login', '<?php echo session_id();?>');});
socket.on('update_online_count', function(count){$('#online_count').html(count);});
</script>

<script src="http://s.workerman.net/common/swfobject.js"></script>
<script src="http://s.workerman.net/common/json2.js"></script>
<script src="http://s.workerman.net/common/web_socket.js"></script>
<script src="http://s.workerman.net/layui/layui.js"></script>
<script src="http://s.workerman.net/common/laychat.js"></script>
<script>
    laychat.address         = 'ws://laychat.workerman.net:8282';
    laychat.initUrl         = '/laychat/init.php';
    laychat.bindUrl         = '/laychat/bind.php';
    laychat.chatLogUrl      = '/laychat/chat_log.php';
    laychat.membersUrl      = '/laychat/members.php';
    laychat.sendMessageUrl  = '/laychat/send_message.php';
    laychat.uploadFileUrl   = '/laychat/upload_file.php';
    laychat.uploadImageUrl  = '/laychat/upload_img.php';
    laychat.setMin          = true;
    laychat.jq              = $;
    laychat.open();
</script>

</body>
</html>
