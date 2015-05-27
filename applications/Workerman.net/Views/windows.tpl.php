<div class="row clearfix">
	<div class="col-md-10 column">
	<h2>workerman-for-win</h2>
	<p class="f14">
		workerman-for-win是运行在windows平台的版本，开发接口与Linux多进程版本一致，
		也就是说基于workerman开发的应用程序即可以运行在Linux系统，也可以运行在Windows系统上。
		<br>
		<b>注意：windows版本建议使用者用于开发调试，实际部署使用Linux多进程版本
		</b>
	</p>
	<table><tbody><tr><td><iframe src="http://ghbtns.com/github-btn.html?user=walkor&amp;repo=workerman-for-win&amp;type=watch&amp;count=true&amp;size=large" height="30" width="170" frameborder="0" scrolling="0" style="width:150px; height: 30px;" allowtransparency="true"></iframe></td><td><iframe src="http://ghbtns.com/github-btn.html?user=walkor&amp;repo=workerman-for-win&amp;type=fork&amp;count=true&amp;size=large" height="30" width="170" frameborder="0" scrolling="0" style="width:150px; height: 30px;" allowtransparency="true"></iframe></td></tr></tbody></table>
		<a class="btn btn-default btn-large" href="https://github.com/walkor/workerman-for-win" target="_blank"><b>Fork on Github</b></a>&nbsp;
		<a class="btn btn-default btn-large" href="/download/workermanwinzip"><b>下载ZIP压缩文件</b></a> <font class='f11 gray'>下载<?php echo $workermanwin_download_count;?>次</font>
	<br><hr>
	<h3>workerman-for-win安装教程</h3>
	<br>
	<h4>需要PHP版本>=5.3.3 并设置PHP的环境变量（参考下图）</h4>
	PHP下载页面：<a href="http://windows.php.net/download">http://windows.php.net/download</a>
	<br><br>
	<img src="/img/gif/install-php.gif" alt="PHP环境变量设置示意图">
	<br><br>
	<h3>运行</h3>
	<code>php your_file.php</code>
	<p>注意windows版本没有stop、reload、restart、status命令，启动时直接运行 php 文件.php 即可，停止运行按ctrl+c</p>
	<br><hr>
	<h3>主页demo如何用windows版本workerman运行</h3>
	总的来讲就是下载windows版本workerman，替换Workerman目录，<br>
	以workerman-chat为例
1、删除Workerman目录包括文件
2、下载或者clone windows版本workerman，zip地址 <a href="https://github.com/walkor/workerman-for-win/archive/master.zip">https://github.com/walkor/workerman-for-win/archive/master.zip</a>
3、解压到原Worekrman目录所在位置，同时目录workerman-for-win-master重命名为Workerman(注意第一个字母W为大写)
4、双击start_for_win.bat启动（目前只有workerman-chat、workerman-todpole、web-msg-sender三个应用有这个启动脚本，其它应用直接运行 php Applications/xxx/xxx.php 运行 ）
5、浏览器访问地址 http://127.0.0.1:8383
	<br><hr>
</div>
<div class="col-md-2column">
</div>

