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
						<li><a href="/download">下载</a></li>
						<li><a href="http://doc.workerman.net/315116" rel="nofollow">安装</a></li>
						<li><a href="http://doc.workerman.net/" rel="nofollow">workerman手册</a></li>
						<li><a href="http://doc2.workerman.net/" rel="nofollow">gatewayWorker手册</a></li>
						<li><a href="http://video.workerman.net/">workerman视频教程</a></li>
						<li><a href="http://wenda.workerman.net/">问答</a></li>
						<li><a href="/applications">相关应用</a></li>
						<li><a href="/bench">压力测试</a></li>
						<li><a href="/last_update">最近更新</a></li>
						<li><a href="/windows">windows用户</a></li>
						<li><a href="https://github.com/walkor/Workerman/graphs/contributors" rel="nofollow">开发者</a></li>
						<li><a href="/donate">捐赠</a></li>
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
						QQ群4：172789145(2000人已满)<br>
						QQ群5：605328640(2000人已满)<br>
						QQ群6：532976970(2000人)<br>
						游戏开发群：564297822(2000人)<br>
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
var socket = io('https://laychat.workerman.net:3121');
socket.on('connect', function(){socket.emit('login', '<?php echo session_id();?>');});
socket.on('update_online_count', function(count){$('#online_count').html(count);});
</script>

<link href="/css/bootstrap.min.css" rel="stylesheet">
<link href="/css/style.css?v3.1" rel="stylesheet">
<!--
<link rel="stylesheet" href="http://s.workerman.net/layui/css/layui.css">
<script src="http://s.workerman.net/common/swfobject.js"></script>
<script src="http://s.workerman.net/common/json2.js"></script>
<script src="http://s.workerman.net/common/web_socket.js"></script>
<script src="http://s.workerman.net/layui/layui.js"></script>
<script src="http://s.workerman.net/common/laychat.js"></script>
<script>
    laychat.address         = 'ws://laychat.workerman.net:9292';
    laychat.initUrl         = '/laychat/init.php';
    laychat.bindUrl         = '/laychat/bind.php';
    laychat.chatLogUrl      = '/laychat/chat_log.php';
    laychat.membersUrl      = '/laychat/members.php';
    laychat.sendMessageUrl  = '/laychat/send_message.php';
    laychat.uploadFileUrl   = '/laychat/upload_file.php';        
    laychat.uploadImageUrl  = '/laychat/upload_img.php';      
    laychat.updateSignUrl   = '/laychat/update_sign.php';    
    laychat.msgBoxUrl       = '/laychat/msg_box.php';     
    laychat.getNoticeUrl    = '/laychat/get_notice.php'; 
    laychat.agreeUrl        = '/laychat/agree.php'; 
    laychat.setMin          = true;
    laychat.jq              = $;
    laychat.voice     = false;
    laychat.open();
</script>
<style>
.layui-layim-list li p {
    display: block;
    line-height: 18px;
    font-size: 12px;
    color: #999;
    text-indent: 0;
}
</style>
-->

</body>
</html>
