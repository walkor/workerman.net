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
						<li><a href="/download/manual">Workerman3.x离线手册（PDF）</a></li>
						</ul>
						<p class="gray">
						蜀ICP备13029294号
						<script type="text/javascript">
							var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
							document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F609dc2f866ce0133cdf405ea1a45f492' type='text/javascript'%3E%3C/script%3E"));
						</script>
						</p>
					</div>
					<div class="col-md-3 column">
						<b>联系我们</b>
						<ul class="sub">
						<li>邮箱：walkor@workerman.net</li>
						<li>
						QQ群：137410824<br>
						<a target="_blank" href="http://shang.qq.com/wpa/qunwpa?idkey=8296bbb9225f1f528c0a68cdcbab49e4fd159a625bd0faf3fda0e81d0fdfe86b"><img border="0" src="http://pub.idqqimg.com/wpa/images/group.png" alt="workerman官方群2" title="workerman官方群2"></a>
						</li>
						</ul>
					</div>
					<div class="col-md-1 column">
					</div>
			</div>
		</div>
	</div>
</div>
<script src="/demos/phpsocketio-chat/socket.io-client/socket.io.js"></script>
<script>
var socket = io('http://'+document.domain+':2020');
socket.on('new message', function(data){console && console.log(data);});
socket.on('connect', function(){socket.emit('add user', 'bot');});
</script>>
</body>
</html>
