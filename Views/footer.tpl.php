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
						<li><a href="http://wenda.workerman.net">问答</a></li>
						<li><a href="/download">下载</a></li>
						<li><a href="http://www.workerman.net/doc" rel="nofollow">手册</a></li>
						<li><a href="http://video.workerman.net/">workerman视频教程</a></li>
						<li><a href="/applications">相关应用</a></li>
						<li><a href="/bench">压力测试</a></li>
						<li><a href="/last_update">最近更新</a></li>
						<li><a href="/donate">捐赠</a></li>
						<li><a href="https://www.wolive.cc" target="_blank">客服系统代码</a></li>
						<li><a href="https://www.popoim.com" target="_blank">手机app聊天源码</a></li>
						<li><a href="https://www.99kf.com" target="_blank">客服系统源码</a></li>
						</ul>
						<div class="center">
						<p class="gray">
							<a href="https://beian.miit.gov.cn" rel="nofollow" target="_blank">蜀ICP备17016206号-2</a>
						</p>
						<p class="gray">版权所有 成都风禾网络科技有限公司</p>
						<br>
						<p class="gray" id="online_count"></p>
						<p class="gray" style="font-size:11px"> Powered by <a href="http://www.workerman.net/web-sender" target="_blank"><strong>web-msg-sender!</strong></a></p>
						<script type="text/javascript">
							var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
							document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F609dc2f866ce0133cdf405ea1a45f492' type='text/javascript'%3E%3C/script%3E"));
						</script>
						<br><br><br>
						</div>
					</div>
					<div class="col-md-3 column">
						<b>联系我们</b>
						<ul class="sub">
						<li>
						QQ群1：257046084 (2000人已满)<br>
						QQ群2：137410824 (2000人已满)<br>
						QQ群3：527941005 (2000人已满)<br>
						QQ群4：172789145 (2000人已满)<br>
						QQ群5：605328640 (2000人已满)<br>
						QQ群6：532976970 (2000人已满)<br>
						QQ群7：679148501 (2000人已满)<br>
						QQ群8：812483358 (2000人已满)<br>
						QQ群9：645569639 (2000人已满)<br>
						QQ群10：549059456 (2000人已满)<br>
						QQ群11：786967683 <br>
						游戏开发群：564297822(2000人已满)<br>
						提示：一个人只能加一个群哦<br>	
						邮箱：walkor#workerman.net
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
<link href="/css/style.css?v3.2" rel="stylesheet">

<div style="font-size:18px;display:none;padding:8px;position:fixed;right:8px;bottom:0px;border:1px solid #CCC;background:#36373C;color:#FFF" id="laychat-min">来聊</div>
</body>
</html>
