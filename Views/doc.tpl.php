<ul class="breadcrumb">
	<li class="active">
		文档手册
	</li>
</ul>
		<div class="media">
			<div class="media-body">
				<h4 class="media-heading">
					<a target="_blank" href="http://doc.workerman.net/">Workerman3.x版本手册</a>
				</h4>
				<p>Workerman是一个高性能的socket服务器通讯框架，用于快速开发各种网络应用，包括tcp的、udp的、长连接、短连接应用。
				<br><a target="_blank" class="btn" href="http://doc.workerman.net/">在线手册 »</a> 
				</p>
			</div>
		</div>
		<div class="media">
			<div class="media-body">
				<h4 class="media-heading">
					<a target="_blank" href="http://doc2.workerman.net/">GatewayWorker手册</a>
				</h4>
				<p>
				GatewayWorker是基于Workerman开发的一套<b>TCP长连接</b>的应用框架，<br>
				实现了单发、群发、广播等接口，内置了mysql类库，<br>
				GatewayWorker分为Gateway进程和Worker进程，天然支持分布式部署，能够支持庞大的连接数（百万甚至千万连接级别的应用）。<br>
				可用于开发IM聊天应用、移动通讯、游戏后台、物联网、智能家居后台等等。<br>
				<br>
				<a class="btn" target="_blank" href="http://doc2.workerman.net/">GatewayWorker手册</a>
				</p>
			</div>
		</div>
		
		<div class="media">
			<div class="media-body">
				<h4 class="media-heading">
					选择Workerman还是GatewayWorker
				</h4>
				<p>
				如果你的项目是长连接并且需要客户端与客户端之间通讯，建议使用GatewayWorker。<br>
短连接或者不需要客户端与客户端之间通讯的项目建议使用Workerman。<br>
GatewayWorker不支持UDP监听，所以UDP服务请选择Workerman。<br>
如果你是一个有多进程socket编程经验的人，喜欢定制自己的进程模型，可以选择Workerman。<br>
				</p>
			</div>
		</div>
<br><?php global $bd_ad_960_90; echo $bd_ad_960_90;?>
