<div class="row clearfix">
	<div class="col-md-10 column">
	<h2>workerman-MT 多线程版本</h2>
	<p class="f14">
		workerman-MT 多线程版本即支持Linux平台也支持Windows平台，并且开发接口与Linux多进程版本完全一致，也就是说基于workerman开发的应用程序即可以运行在Linux系统，也可以运行在Windows系统上。
	</p>
	<table><tbody><tr><td><iframe src="http://ghbtns.com/github-btn.html?user=walkor&amp;repo=workerman-MT&amp;type=watch&amp;count=true&amp;size=large" height="30" width="170" frameborder="0" scrolling="0" style="width:150px; height: 30px;" allowtransparency="true"></iframe></td><td><iframe src="http://ghbtns.com/github-btn.html?user=walkor&amp;repo=workerman-MT&amp;type=fork&amp;count=true&amp;size=large" height="30" width="170" frameborder="0" scrolling="0" style="width:150px; height: 30px;" allowtransparency="true"></iframe></td></tr></tbody></table>
		<a class="btn btn-default btn-large" href="https://github.com/walkor/workerman-MT" target="_blank"><b>Fork on Github</b></a>&nbsp;
		<a class="btn btn-default btn-large" href="/download/workermanwinzip"><b>下载ZIP压缩文件</b></a> <font class='f11 gray'>下载<?php echo $workermanwin_download_count;?>次</font>
	</div>
	<hr>
	<h3>安装</h3>
	<h4>1、要求安装线程安全(Thread Safe)版PHP</h4>
	线程安全版本下载页面：<a href="http://windows.php.net/download">http://windows.php.net/download</a>
	<br>
	<img src="/img/gif/install-php.gif" alt="安装线程安全版本PHP流程图">
	<h4>2、pthreads扩展</h4>
	pthreads下载下载页面： <a href="http://windows.php.net/downloads/pecl/releases/pthreads">http://windows.php.net/downloads/pecl/releases/pthreads</a>
	<br>
	<img src="/img/gif/install-pthreads.gif" alt="安装pthreads扩展流程图">
	<h4>3、运行</h4>
	双击start.bat文件，即可启动workerman-MT
	<hr>
	<h3>windows多线程版本其它资源</h3>
	小蝌蚪聊天室:<a href="https://github.com/walkor/workerman-todpole-for-win">https://github.com/walkor/workerman-todpole-for-win</a>
	<h3>workerman 多线程版本与workerman Linux多进程版本异同</h3>
	<table class="table">
		<thead>
			<tr>
				<th>特性</th>
				<th>workerman</th>
				<th>workerman-MT</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>多进程支持</td>
				<td>是</td>
				<td>否</td>
			</tr>
			<tr class="success">
				<td>多线程支持</td>
				<td>否</td>
				<td>是</td>
			</tr>
			<tr>
				<td>支持守护进程化</td>
				<td>是</td>
				<td>后续支持</td>
			</tr>
			<tr class="success">
				<td>支持 workermand status 状态查询</td>
				<td>是</td>
				<td>后续支持</td>
			</tr>
		</tbody>
	</table>
</div>
