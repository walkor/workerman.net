<div class="row clearfix">
	<div class="col-md-9 column">
	<h5>安装小蝌蚪聊天室（安装workerman及其它应用是一样的过程）</h5>
	<h3>centos系统安装教程</h3>
	<h5>1、命令行运行<code>yum install php-cli php-process  git gcc  php-devel php-pear libevent-devel</code></h5>
	<h5>2、命令行运行<code>pecl install channel://pecl.php.net/libevent-0.1.0</code></h5>
	<h5>3、命令行运行<code>echo extension=libevent.so > /etc/php.d/libevent.ini</code></h5>
	<h5>4、命令行运行<code>git clone https://github.com/walkor/workerman-todpole</code></h5>
	<h5>5、命令行运行<code>./workerman-todpole/workerman/bin/workermand start</code></h5>
	<br>
	<h3>debian/ubuntu系统安装教程(如果不是root用户请用sudo 后面加命令)</h3>
	<h5>1、命令行运行<code>apt-get install php5-cli git gcc php-pear php5-dev libevent-dev</code></h5>
	<h5>2、命令行运行<code>pecl install channel://pecl.php.net/libevent-0.1.0</code></h5>
	<h5>3、命令行运行<code>echo extension=libevent.so > /etc/php5/cli/conf.d/libevent.ini</code></h5>
	<h5>4、命令行运行<code>git clone https://github.com/walkor/workerman-todpole</code></h5>
	<h5>5、命令行运行<code>./workerman-todpole/workerman/bin/workermand start</code></h5>
	<br>
	</div>
	<div class="bd-ad"><?php global $bd_ad_468_60; echo $bd_ad_468_60;?></div>
	<div class="col-md-3 column">
	
	</div>
</div>
