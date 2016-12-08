<div class="row clearfix">
	<div class="col-md-10 column">
	<h2>workerman-for-win</h2>
	<p class="f14">
		workerman-for-win是运行在windows平台的版本，开发接口与Linux多进程版本一致，
		也就是说基于workerman开发的应用程序即可以运行在Linux系统，也可以运行在Windows系统上。
		<br>
		<b>注意：Window版本workerman不依赖任何扩展。
		另外由于windows版本无法做到守护进程，并且无法fork多进程充分利用多cpu资源，所以建议windows版本只用于开发调试，
		实际部署使用Linux多进程版本。
		</b>
	</p>
	<table><tbody><tr><td><iframe src="http://ghbtns.com/github-btn.html?user=walkor&amp;repo=workerman-for-win&amp;type=watch&amp;count=true&amp;size=large" height="30" width="170" frameborder="0" scrolling="0" style="width:150px; height: 30px;" allowtransparency="true"></iframe></td><td><iframe src="http://ghbtns.com/github-btn.html?user=walkor&amp;repo=workerman-for-win&amp;type=fork&amp;count=true&amp;size=large" height="30" width="170" frameborder="0" scrolling="0" style="width:150px; height: 30px;" allowtransparency="true"></iframe></td></tr></tbody></table>
		<a class="btn btn-default btn-large" href="https://github.com/walkor/workerman-for-win" target="_blank" rel="nofollow"><b>Fork on Github</b></a>&nbsp;
		<a class="btn btn-default btn-large" href="/download/workermanwinzip"><b>下载ZIP压缩文件</b></a> <font class='f11 gray'>下载<?php echo $workermanwin_download_count;?>次</font>
	<br><hr>
	<h3>直接下载可用的windows demo</h3>
        <font class="f16">
        windows版本聊天室<a href="/download/workerman-chat-for-win.zip" rel="nofollow">点击下载workerman-chat-for-win</a> 详情参见<a href="/workerman-chat">这里</a><br>
        windows版本小蝌蚪聊天室<a href="/download/workerman-todpole-for-win.zip" rel="nofollow">点击下载workerman-todpole-for-win</a> 详情参见<a href="/workerman-todpole">这里</a><br>
        windows版本web消息推送框架<a href="/download/web-msg-sender-for-win.zip" rel="nofollow">点击下载web-msg-sender</a> 详情参见<a href="/web-sender">这里</a><br>
        windows版本GatewayWorker<a href="/download/GatewayWorker-for-win.zip" rel="nofollow">点击下载GatewayWorker-for-win</a> 详情参见<a href="http://www.workerman.net/gatewaydoc/" rel="nofollow">这里</a><br>
       
        以上demo下载后双击start_for_win.bat即可启动（无需安装其它扩展）
        </font>
        <div style="margin:10px 0">提示：如果出现类似"php不是内部或外部命令"的提示，说明没有设置好php环境变量，请参考下面步骤设置</div>
        <hr>
	<h4>PHP的环境变量设置</h4>
	PHP下载页面：<a href="http://windows.php.net/download">http://windows.php.net/download</a><br>
        提示：要求下载PHP版本>=5.3.3，如果已经有下载或安装，则直接设置PHP环境变量即可
	<br><br>
	<img src="/img/gif/install-php.gif" alt="PHP环境变量设置示意图">
	<br><hr>
        <h3>workerman的Windows版本与Linux版本异同</h3>
        1、win版本count属性无效，全部为单进程<br>
        2、不支持start stop reload restart status命令<br>
        3、cmd命令行启动，后面可接多个文件，例如 php start_web.php start_gateway.php start_worker.php<br>
        4、无法守护进程，cmd窗口关掉后服务即停止<br>
        5、每个启动文件只能实例化一个容器(Worker/WebServer/Gateway/BusinessWorker)，需要实例化多个容器时<br>
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

