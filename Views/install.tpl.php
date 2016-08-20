<div class="row clearfix">
	<div class="col-md-9 column">
	<h3>提示</h3>
	<b>workerman只是一个代码包，如果php环境满足要求，下载后即可使用，实际上没有安装过程。
	<br>workerman对php环境的要求是：
	<br>1、php>=5.3.3，可以运行命令 php -v 查看版本
	<br>2、Linux系统要求php安装了posix和pcntl扩展
	<br>可以在命令中运行 <code>curl -Ss http://www.workerman.net/check.php | php </code> 检测本地环境是否满足workerman。
	</b>
	<h2>全新系统参考以下安装教程</h2>
	<h3>centos系统安装教程 </h3>
	<a href="/img/gif/centos-install.gif" target="_blank">>>点击这里查看动画教程<<</a><br>
	<h5>1、命令行运行<code>yum install php-cli php-process  git gcc  php-devel php-pear libevent-devel -y</code></h5>
	<h5>2、命令行运行<code>pecl install channel://pecl.php.net/libevent-0.1.0</code> 提示libevent installation [autodetect]: 时按回车</h5>
	<h5>3、命令行运行<code>echo extension=libevent.so > /etc/php.d/libevent.ini</code></h5>
	<h5>4、命令行运行<code>git clone https://github.com/walkor/Workerman</code></h5>
	<h5>5、参考<a href="http://doc3.workerman.net/getting-started/simple-example.html" target="_blank">手册</a>写例子运行或者从主页下载<a href="/applications">demo</a>运行</h5>
	<br>
	<h3>debian/ubuntu系统安装教程</h3>
	<a href="/img/gif/ubuntu-install.gif" target="_blank">>>点击这里查看动画教程<<</a><br>
	<h5>1、命令行运行<code>apt-get install php5-cli git gcc php-pear php5-dev libevent-dev -y</code></h5>
	<h5>2、命令行运行<code>pecl install channel://pecl.php.net/libevent-0.1.0</code> 提示libevent installation [autodetect]: 时按回车</h5>
	<h5>3、命令行运行(需要切换到root用户)<code>echo extension=libevent.so > /etc/php5/cli/conf.d/libevent.ini</code></h5>
	<h5>4、命令行运行<code>git clone https://github.com/walkor/Workerman</code></h5>
	<h5>5、参考<a href="http://doc3.workerman.net/getting-started/simple-example.html" target="_blank">手册</a>写例子运行或者从主页下载<a href="/applications">demo</a>运行</h5>
	<br>
	<h3>以上命令说明</h3>
	<h5>1、第一步安装php相关环境，包括<a href="http://php.net/manual/zh/features.commandline.php" target="_blank">php cli</a>，workerman运行在php cli下，如果已经安装好php环境则不用安装；
	php-process（一般centos系统下需要安装）为进程控制相关扩展，
	包括<a href="http://php.net/manual/zh/book.posix.php" target="_blank">posix</a>和<a href="http://php.net/manual/zh/book.pcntl.php" target="_blank">pcntl</a>；
	git是一款免费、开源的分布式版本控制系统，用于下载或者更新workerman源代码（如果手动下载zip文件则可以不用安装git，并跳过安装步骤中的第4步）;
	gcc、php-devel、php-pear、libevent-devel用于安装php的<a href="http://php.net/manual/zh/book.libevent.php" target="_blank">libevent</a>扩展，如果不想安装libevent则可以省略并跳过安装步骤中的第2和第3步；</h5>
	<h5>2、第二步和第三步通过pecl安装libevent扩展，并配置扩展的ini文件（安装libevent扩展不是必须的，libevent扩展可以让php使用更高级的事件库，在并发量很高时发挥作用，如果并发量比较低，例如5000并发，可以不用安装）</h5>
	<h5>3、第四步是通过git下载workerman的应用程序，这里默认下载的是workerman的Demo程序，如果下载workerman的其他应用程序可以修改地址，例如下载workerman-chat则命令为git clone https://github.com/walkor/workerman-chat。
	如果手动下载过了想要的workerman应用程序，则此步骤可以省略。</h5>
	
	<h3>mac os 系统安装教程</h3>
	<h5>mac os 自带PHP，但是可能缺少pcntl扩展</h5>
	<h5>1、参考手册<a href="http://doc3.workerman.net/appendices/install-extension.html" target="_blank">附录-安装扩展</a>一节中方法三源码编译安装pcntl扩展。</h5>
	<h5>2、参考手册<a href="http://doc3.workerman.net/appendices/install-extension.html" target="_blank">附录-安装扩展</a>一节中方法四利用phpize安装libevent扩展（可省略）。</h5>
	<h5>3、通过<a href="http://www.workerman.net/download/workermanzip" target="_blank">http://www.workerman.net/download/workermanzip</a> 下载WorkerMan主程序，或者到<a href="http://www.workerman.net/" target="_blank">官网</a>下载例子运行。</h5>
	<br>
	
	<h3>关于libevent扩展</h3>
	<p>如果无法安装<a href="http://php.net/manual/zh/book.libevent.php" target="_blank">libevent扩展</a>，可以用<a href="http://php.net/manual/zh/book.event.php" target="_blank">Event扩展</a>代替。</p>
<p><strong>安装Event扩展方法如下：</strong></p>
<p>注意：Event扩展也同样依赖libevent库，所以首先需要安装libevent-devel包(并非扩展)。</p>
<p>centos系统</p>
<pre><code>yum install libevent-devel
pecl install event
echo extension=event.so &gt; /etc/php.d/event.ini
</code></pre><p>debian/ubuntu系统</p>
<pre><code>apt-get install libevent-dev
pecl install event
echo extension=event.so &gt; /etc/php5/cli/conf.d/event.ini
</code></pre>
	
	<h3>编译安装workerman的php环境(以centos为例)</h3>
<h5>1、 yum install wget gcc git php-devel php-pear libevent-devel libxml2-devel cmake</h5>
<h5>2、 wget  http://cn2.php.net/distributions/php-5.6.8.tar.gz              (下载php)</h5>
<h5>3、 tar zxvf php-5.6.8.tar.gz</h5>
<h5>4、 cd php-5.6.8</h5>
<h5>5、 ./configure --enable-posix --enable-pcntl</h5>
<h5>6、 make</h5>
<h5>7、 make install</h5>
<h5>8、 pecl install channel://pecl.php.net/libevent-0.1.0</h5>
<h5>9、 echo extension=libevent.so > /etc/php.d/libevent.ini</h5>
<h5>10、 git clone https://github.com/walkor/workerman</h5>
<h5>5、参考<a href="http://doc3.workerman.net/getting-started/simple-example.html" target="_blank">手册</a>写例子运行或者从主页下载<a href="/applications">demo</a>运行</h5>
	</div>
	<div class="bd-ad"><?php global $bd_ad_468_60; echo $bd_ad_468_60;?></div>
	<div class="col-md-3 column">
	
	</div>
</div>
