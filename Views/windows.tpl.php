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
		<a class="btn btn-default btn-large" href="https://github.com/walkor/workerman-for-win" target="_blank" rel="nofollow"><b>Fork on Github</b></a>&nbsp;
		<a class="btn btn-default btn-large" href="/download/workermanwinzip"><b>下载ZIP压缩文件</b></a> <font class='f11 gray'>下载<?php echo $workermanwin_download_count;?>次</font>
	<br><hr>
	<h3>直接下载可用的windows demo</h3>
        <font class="f16">
	windows版本聊天室<a href="https://github.com/walkor/workerman-chat-for-win" rel="nofollow">点击下载workerman-chat-for-win</a><br>
        windows版本小蝌蚪聊天室<a href="https://github.com/walkor/workerman-todpole-for-win" rel="nofollow">点击下载workerman-todpole-for-win</a>
        <br>以上demo下载后双击start_for_win.bat即可启动（无需安装其它扩展）
        </font>
        <div style="margin:10px 0">提示：如果出现类似"php不是内部或外部命令"的提示，说明没有设置好php环境变量，请参考下面步骤设置</div>
        <hr>
	<h4>PHP的环境变量设置</h4>
	PHP下载页面：<a href="http://windows.php.net/download">http://windows.php.net/download</a><br>
        提示：要求下载PHP版本>=5.3.3，如果已经有下载或安装，则直接设置PHP环境变量即可
	<br><br>
	<img src="/img/gif/install-php.gif" alt="PHP环境变量设置示意图">
	<br><hr>
	<h3>主页其它demo如何用windows版本workerman运行</h3>
	总的来讲就是下载windows版本workerman，替换源码中的Workerman目录，<br>
	以<a href="https://github.com/walkor/workerman-chat" rel="nofollow">workerman-chat</a>为例
<h5>1、进入源代码删除Workerman目录包括文件</h5>
<h5>2、下载windows版本workerman，zip地址 <a href="https://github.com/walkor/workerman-for-win/archive/master.zip">https://github.com/walkor/workerman-for-win/archive/master.zip</a></h5>
<h5>3、解压到原Workerman目录所在位置，同时目录workerman-for-win-master重命名为Workerman，完成Workerman目录的替换</h5>
<h5>4、cd Applications/Chat/，运行 php start_register.php start_gateway.php start_businessworker.php start_web.php start_web.php 完成启动</h5>
<h5>5、浏览器访问地址 http://127.0.0.1:55151（workerman-chat默认55151是http端口，其他应用根据启动界面查看http协议端口）</h5>
	<br><hr>

        <h3>workerman的Windows版本与Linux版本异同</h3>
        1、win版本count属性无效，全部为单进程<br>
        2、不支持start stop reload restart status命令<br>
        3、cmd命令行启动，后面可接多个文件，例如 php start_web.php start_gateway.php start_worker.php<br>
        4、每个启动文件只能实例化一个容器(Worker/WebServer/Gateway/BusinessWorker)，需要实例化多个容器时<br>
        需要拆成多个文件，例如 start_web.php start_gateway.php start_worker.php 分别初始化web gateway worker<br>
        <br><br>
        <h3>Windows版本workerman的启动与停止</h3>
        cmd命令行中运行
        <code>php your_file.php</code>(注意后面可以接多个文件)<br>
        注意windows版本没有stop、reload、restart、status命令，启动时直接运行 php 文件.php 即可，停止运行按ctrl+c
        <br>
       <hr>
</div>
<div class="col-md-2column">
</div>

