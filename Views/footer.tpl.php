			<div class="row clearfix">
				<div class="col-md-12 column">
				<br/><br/><br/><hr>
				</div>
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
						<li>邮箱：walkor@workerman.net</li>
						<li>
						QQ群1：257046084(2000人已满)<br>
						QQ群2：137410824(2000人)<br>
						QQ群3：527941005(500人)<br>
						VIP群：544584915 <a target="_blank" href="http://shang.qq.com/wpa/qunwpa?idkey=48fac857de63cfc2847595e14e168040a1416fa5f82ab6f72fdd778e3c67a8fe"><img border="0" src="http://pub.idqqimg.com/wpa/images/group.png" alt="Workerman 官方收费群1" title="Workerman 官方收费群1"></a><br>
						商务合作联系QQ：2202055656
						
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

</body>
</html>
