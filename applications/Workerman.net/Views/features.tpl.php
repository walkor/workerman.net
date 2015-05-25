<ul class="about-nav">
	<li class="nav-head">
		关于
	</li>
	<li>
		<a href="/workerman">workerman</a> 
	</li>
	<li class="active">
		特性 
	</li>
	<li>
		<a href="/performance">性能</a> 
	</li>
	<li>
		<a href="/license">许可</a> 
	</li>
	<li>
		<a href="/contact">联系我们</a>
	</li>
</ul>
<div class="row clearfix">
	<div class="col-md-8 column">
		<h2>
			workerman的特性
		</h2>
		<p>
			workerman诸多的不同寻常的特性，使得PHP开发者可以开发出不同寻常的应用程序。
		</p>
	</div>
	<div class="col-md-4 column">
	</div>
</div>
<div class="row clearfix">
	<div class="col-md-12 column">
		<div class="row">
			<div class="col-md-4">
				<div class="thumbnail">
					<div class="caption">
						<h3>
							纯PHP开发
						</h3>
						<p>
							workerman完全使用PHP开发，使用workerman开发的应用程序不依赖php-fpm、apache、nginx这些容器就可以独立运行。
							这使得PHP开发者开发、部署、调试应用程序非常方便。
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="thumbnail">
					<div class="caption">
						<h3>
							支持PHP多进程
						</h3>
						<p>
							为了充分发挥服务器多CPU的性能，workerman默认支持多进程多任务。workerman开启一个主进程和多个子进程对外提供服务，
							主进程负责监控子进程退出信号，并负责生成新的子进程去处理服务，这样做不仅提高了应用程序的性能，而且使得workerman更加稳定。
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="thumbnail">
					<div class="caption">
						<h3>
							支持TCP、UDP
						</h3>
						<p>
							workerman支持TCP和UDP两种传输层协议，只需要更改配置的一个字段，便可以更换传输层协议，业务代码无需任何改动。
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="thumbnail">
					<div class="caption">
						<h3>
							支持长连接
						</h3>
						<p>
							很多时候需要PHP应用程序要与客户端保持长连接，比如聊天室、游戏等，但是传统的PHP容器（apache、nginx、php-fpm）很难做到这一点。
							使用workerman可以轻松使用PHP长连接。php单个进程可以支持几千甚至几万的并发连接，多进程则可支持数十万甚至上百万的并发连接。
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="thumbnail">
					<div class="caption">
						<h3>
							支持各种应用层协议
						</h3>
						<p>
							接口上支持各种应用层协议，包括自定义协议。Workerman默认支持的协议有HTTP、WebSocket、以及简单的Text文本协议。
							同时Workerman提供了通用的协议接口，开发者基于此接口便可以方便的开发出自己的协议。
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="thumbnail">
					<div class="caption">
						<h3>
							支持高并发
						</h3>
						<p>
							workerman支持Libevent事件轮询库（需要安装<a href="http://www.php.net/manual/en/book.libevent.php" target="_blank">Libevent扩展</a>），
							使用Libevent在高并发时性能非常卓越，如果没有安装Libevent则使用PHP内置的Select相关系统调用。
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="thumbnail">
					<div class="caption">
						<h3>
							支持服务平滑重启
						</h3>
						<p>
							当需要重启服务时（例如发布版本），我们不希望正在处理用户请求的进程被立刻终止，更不希望重启的那一刻没有足够的进程对外提供服务，
							为了保证任意时刻都有足够的进程对外提供服务，则可以使用平滑重启命令，平滑重启过程中workerman会让子进程处理完请求后才退出，
							并且能够保证在任意时刻都有足够的进程对外服务。
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="thumbnail">
					<div class="caption">
						<h3>
							支持文件更新检测及自动加载
						</h3>
						<p>
							基于workerman开发应用程序过程中，我们希望在我们改动代码后能够立刻生效，则只要你开启配置中debug功能即可。
							开启后workerman会有一个<b>单独的进程</b>轮询（因为PHP在Mac系统无法使用linux内核提供的Inotify机制，所以只好轮询）应用程序<b>真实</b>使用的所有PHP文件，
							当文件有更新时，启动平滑重启，自动载入新的PHP文件。
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="thumbnail">
					<div class="caption">
						<h3>
							支持以指定用户运行子进程
						</h3>
						<p>
							因为子进程是实际处理用户请求的进程，为了安全考虑，子进程不能有太高的权限，所以workerman支持设置子运行进程运行的用户。
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="thumbnail">
					<div class="caption">
						<h3>
							自带监控
						</h3>
						<p>
							workerman内部带有监控统计模块，能够统计workerman自身的一些数据，如进程退出次数及退出状态，每个进程占用内存大小及监听的ip端口、每个进程启动时间、
							进程运行的服务名、每个进程处理请求数、连接数、数据包发送失败量等等。这些信息可以本地运行<code>php start.php status</code>本地查看。
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="thumbnail">
					<div class="caption">
						<h3>
							支持毫秒级别定时器
						</h3>
						<p>
							支持毫秒级别定时器，可以做定时任务或者定时计算，如游戏中地图上AI相关计算。
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="thumbnail">
					<div class="caption">
						<h3>
							支持异步IO
						</h3>
						<p>
							Workerman自带的网络IO接口是异步的，开发者可实现基于事件的异步编程
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="thumbnail">
					<div class="caption">
						<h3>
							支持对象或者资源永久保持
						</h3>
						<p>
							在一个进程生命周期内静态成员或者全局变量在不主动销毁的情况下是永久保持的，也就是只要初始化一次静态成员或者全局变量在当前进程的整个生命周期内的所有请求都可以复用这个
							静态成员或者全局变量。例如只要单个进程内初始化一次数据库连接，则以后这个进程的所有请求都可以复用这个数据库连接，不用每个用户请求都去重连数据库，避免了频繁连接数据库过程中TCP三次握手、
							数据库权限验证、断开连接时TCP四次握手的过程，极大的提高了应用程序效率。memcache、redis等初始化也是同样的道理。
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="thumbnail">
					<div class="caption">
						<h3>
							高性能
						</h3>
						<p>
							由于php文件从磁盘读取解析一次后便会常驻内存，下次使用时直接使用内存中的opcode，
							极大的减少了磁盘IO及PHP中请求初始化、创建执行环境、词法解析、语法解析、编译opcode、请求关闭等诸多耗时过程，
							并且不依赖nginx、apache等容器，少了nginx等容器与PHP通信的网络开销，最主要的是资源可以永久保持，不必每次初始化数据库连接等等，
							所以使用workerman开发应用程序，性能非常高。
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="thumbnail">
					<div class="caption">
						<h3>
							诸多应用
						</h3>
						<p>
							workerman拥有诸多的应用，如<a href="/workerman-thrift">Thrift-Rpc</a>、<a href="/workerman-jsonrpc">Json-Rpc</a>、
							<a href="/workerman-chat">聊天室</a>、<a href="workerman-statistics">统计监控服务</a>以及本站Web程序等.
							目前workerman已经被多家公司使用，其中不乏<b>日</b>营业额<b>过亿</b>的电子商务公司用户订单系统的开发，以及大型游戏公司用于游戏后台的开发。
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="thumbnail">
					<div class="caption">
						<h3>
							支持分布式部署
						</h3>
						<p>
							WorkerMan支持分布式部署，可以平滑的动态添加减少服务器而不影响服务质量。从而使得WorkerMan集群能够支持相当大的吞吐量或者并发TCP连接。
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="thumbnail">
					<div class="caption">
						<h3>
							支持HHVM
						</h3>
						<p>
							支持HHVM，对于php性能有大幅度（一般为50%左右甚至更高）的提升，尤其是在cpu密集运算中。实际经过压力测试确实有明显性能提升效果。
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="thumbnail">
					<div class="caption">
						<h3>
							支持心跳检测
						</h3>
						<p>
							Gateway/Worker开发模型支持服务端的心跳检测，可以定时向客户端发送应用层的心跳，能够及时检测到客户端极端掉线情况（掉电、突发网络故障等）。
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				
			</div>
			<div class="col-md-4">
			</div>
			<div class="col-md-4">
			</div>
		</div>
	</div>
</div>
