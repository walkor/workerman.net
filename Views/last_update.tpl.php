<h3>2018-04-03 Workerman 3.5.5版本发布</h3>
<ul>
    <li>支持swoole-eventloop</li>
    <li>status支持Summary统计</li>
    <li>WebServer支持Custom 404 page 和 Custom Headers</li>
    <li>增加AsyncUdpConnection类</li>
    <li>AsyncTcpConnection支持非阻塞ssl</li>
</ul>
<hr>


<h3>2017-12-06 Workerman 3.5.4版本发布</h3>
<ul>
    <li>修改composer.json，去掉强依赖ext-pcntl ext-posix，因为它们不支持windows系统</li>
</ul>
<hr>

<h3>2017-12-04 Workerman 3.5.3版本发布</h3>
<ul>
    <li>Linux版本兼容windows系统</li>
</ul>
<hr>

<h3>2017-12-04 Workerman 3.5.3版本发布</h3>
<ul>
    <li>Linux版本兼容windows系统</li>
</ul>
<hr>

<h3>2017-11-02 Workerman 3.5.2版本发布</h3>
<ul>
    <li>status 支持qps统计</li>
    <li>增加unlisten pauseAccept resumeAccept接口</li>
    <li>支持-g参数优雅reload/stop服务</li>
    <li>作为websocket客户端支持子协议</li>
    <li>修复SSL Reconnect问题</li>
    <li>修复作为websocket客户端心跳问题</li>
</ul>
<hr>

<h3>2017-08-25 Workerman 3.5.1版本发布</h3>
<ul>
    <li>修复udp协议错误</li>
</ul>
<hr>

<h3>2017-08-25 Workerman 3.5.0版本发布</h3>
<ul>
    <li>增加connections命令，用于查看连接统计</li>
</ul>
<hr>

<h3>2017-08-08 Workerman 3.4.7版本发布</h3>
<ul>
    <li>status命令增加定时器统计</li>
</ul>
<hr>


<h3>2017-07-24 Workerman 3.4.6版本发布</h3>
<ul>
    <li>修复使用ReactPHP的StreamSelectLoop时内存泄漏问题</li>
</ul>
<hr>


<h3>2017-07-14 Workerman 3.4.5版本发布</h3>
<ul>
    <li>http协议支持多文件上传</li>
</ul>
<hr>


<h3>2017-07-06 Workerman 3.4.4版本发布</h3>
<ul>
    <li>修复select-eventloop定时器嵌套bug</li>
</ul>
<hr>

<h3>2017-06-27 Gateway 3.0.6版本发布</h3>
<ul>
    <li>修复3.0.5/3.0.6版本使用GatewayClient操作session后，导致onClose无法获得$_SESSION的bug</li>
</ul>
<hr>

<h3>2017-06-20 workerman3.4.3版本发布</h3>
<ul>
    <li><a href="https://github.com/walkor/Workerman/issues/166" rel="nofollow">修复HTTP协议OPTIONS和HEAD请求包长计算错误问题</a></li>
    <li>HTTP协议时Session支持php7</li>
    <li>其它一些优化</li>
</ul>
<hr>

<h3>2017-06-19 Gateway 3.0.5版本发布</h3>
<ul>
    <li>修复session延迟导致session数据不是最新的问题</li>
</ul>
<hr>

<h3>2017-06-19 Gateway 3.0.4版本发布</h3>
<ul>
    <li>修复Register类日志类找不到问题</li>
</ul>
<hr>

<h3>2017-06-04 Gateway 3.0.3版本发布</h3>
<ul>
    <li>Gateway::closeClient($msg)支持参数$msg，可以在关闭客户端链接前发送一段数据</li>
</ul>
<hr>

<h3>2017-05-04 workerman3.4.2版本发布</h3>
<ul>
    <li>修复开SSL后发送大数据失败问题</li>
    <li>HTTP协议的一些优化</li>
</ul>
<hr>

<h3>2017-04-21 workerman3.4.1版本发布</h3>
<ul>
    <li>修复AsyncTcpConnection开SSL时无法通讯的bug</li>
</ul>
<hr>

<h3>2017-02-15 workerman3.4.0版本发布</h3>
<ul>
    <li><a href="https://github.com/walkor/Workerman/issues/146" rel="nofollow">检查sys_getloadavg函数是否存在，避免status时发生FatalError</a></li>
    <li><a href="https://github.com/walkor/Workerman/pull/148" rel="nofollow">$_SERVER中新增REQUEST_TIME</a></li>
    <li><a href="https://github.com/walkor/Workerman/issues/119" rel="nofollow"> 支持指定事件轮询库</a></li>
    <li><a href="https://github.com/walkor/Workerman/pull/153" rel="nofollow">Http协议上传文件$_FILES增加name和file_type数据</a> </li>
    <li><a href="https://github.com/walkor/Workerman/pull/158" rel="nofollow">支持运行过程中stdoutFile和logFile动态重定向，例如按照日期分割日志等</a></li>
</ul>
<hr>

<h3>2017-02-15 workerman3.3.9版本发布</h3>
<ul>
    <li>支持非阻塞SSL握手</li>
    <li>支持SSLv2 SSLv3</li>
    <li>AysncTcpConnection支持unix socket</li>
</ul>
<hr>

<h3>2017-02-09 workerman3.3.8版本发布</h3>
<ul>
    <li>修复当使用ReactPHP时定时器Timer::add()方法返回值为对象的bug</li>
</ul>
<hr>


<h3>2017-02-05 workerman3.3.7版本发布</h3>
<ul>
<li>原生支持<a href="http://doc3.workerman.net/worker-development/transport.html" target="_balnk" rel="nofollow">SSL</a>，用来支持https以及wss</li>
</ul>
<hr>

<h3>2017-01-13 Gateway 3.0.1版本发布</h3>
<ul>
    <li>增加gateway->sendToWorkerBufferSize属性，用来设置Gateway到businessWorker的缓冲区大小</li>
    <li>增加gateway->sendToClientBufferSize属性，用来设置gateway到客户端的缓冲区大小</li>
    <li>增加businessWorker->sendToGatewayBufferSize属性，用来设置businessWorker到Gateway的缓冲区大小</li>
</ul>
<hr>

<h3>2016-12-06 workerman3.3.6版本发布</h3>
<ul>
    <li>支持<a href="https://github.com/reactphp" target="_balnk" rel="nofollow">ReactPHP</a>同步支持ReactPHP的以下组件</li>
    <li>支持异步Mysql客户端</li>
    <li>支持异步Redis客户端</li>
    <li>支持异步HTTP客户端</li>
    <li>支持异步dns客户端</li>
    <li>支持异步zmq客户端</li>
    <li>支持异步whois客户端</li>
    <li>支持异步RabbitMQ客户端</li>
    <li>支持异步文件系统</li>
    <li>支持异步进程组件</li>
    <li>支持promise</li>
</ul>
<hr>

<h3>2016-11-23 workerman3.3.5版本发布</h3>
<ul>
<li>AsyncTcpConnection 支持 context，用于设置ssl等参数</li>
<li>AsyncTcpConnection 支持 reconnect 方法，用于断线时定时重连</li>
<li>修复 IE10 IE11 websocket兼容性问题</li>
</ul>
<hr>

<h3>2016-09-19 workerman3.3.4版本发布</h3>
<ul>
<li>WebServer支持了keep-alive</li>
<li>http协议及websocket协议一些优化</li>
<li>hhvm兼容优化</li>
</ul>
<hr>

<h3>2016-07-06 workerman3.3.3版本发布</h3>
<ul>
<li>
<a href="http://doc3.workerman.net/worker-development/async-tcp-connection.html">AsyncTcpConnection</a>增加了ssl支持
</li>
<li>支持ipv6</li>
<li>记录Exception日志、hhvm兼容、减少fread调用次数等优化</li>
</ul>
<hr>

<h3>2016-07-05 GatewayWorker2.0.7版本发布</h3>
<ul>
<li>
<a href="http://workerman.net/gatewaydoc/gateway-worker-development/send-to-all.html">Gateway::sendToAll()</a>
<a href="http://workerman.net/gatewaydoc/gateway-worker-development/send-to-group.html">Gateway::sendToGroup()</a>方法增加$exclude_client_id和$raw参数
</li>
<li>Gateway::getClientInfoByGroup更名为Gateway::getClientSessionsByGroup, Gateway::getALLClientInfo更名为Gateway::getAllClientSessions</li>
<li>一些性能优化</li>
<li><a href="https://github.com/walkor/GatewayClient" rel="nofollow">GatewayClient</a>同步更新到<a href="https://github.com/walkor/GatewayClient/releases/tag/v2.0.7" rel="nofollow">2.0.7版本</a>用于支持GatewayWorker2.0.7</li>
</ul>
<hr>

<h3>2016-04-29 GatewayWorker2.0.5版本发布</h3>
<ul>
<li>增加<a href="http://workerman.net/gatewaydoc/gateway-worker-development/get-session.html">Gateway::getSession($client_id)</a>方法，用于获取某个客户端session</li>
<li>增加<a href="http://workerman.net/gatewaydoc/gateway-worker-development/set-session.html">Gateway::setSession($client_id, $session)</a>方法，用于设置某个客户端session</li>
<li>增加<a href="http://workerman.net/gatewaydoc/gateway-worker-development/update-session.html">Gateway::updateSession($client_id, $session)</a>方法，用于更新某个客户端session某个(些)键的值。</li>
<li><a href="https://github.com/walkor/GatewayClient" rel="nofollow">GatewayClient</a>同步更新到<a href="https://github.com/walkor/GatewayClient/releases/tag/2.0.5" rel="nofollow">2.0.5版本</a>用于支持GatewayWorker2.0.5</li>
</ul>
<hr>

<h3>2016-04-20 GatewayWorker2.0.4版本发布</h3>
<ul>
<li>为避免和Event扩展冲突，原Event.php更名为Events.php，类名也同步改为Events</li>
<li>Events.php中支持设置BusinessWorker进程的<a href="http://workerman.net/gatewaydoc/gateway-worker-development/onworkerstart.html">onWorkerStart</a>、<a href="http://workerman.net/gatewaydoc/gateway-worker-development/onworkerstop.html">onWorkerStop</a>回调，</li>
<li>增加<a href="http://workerman.net/gatewaydoc/gateway-worker-development/get-all-client-count.html">Gateway::getAllClientCount()</a>方法，用于获取当前在线总数(在线的client_id总数)</li>
<li>增加<a href="http://workerman.net/gatewaydoc/gateway-worker-development/is-uid-online.html">Gateway::isUidOnline($uid)</a>方法，用来判断uid是否在线。</li>
</ul>
<hr>


<h3>2016-03-19 workerman3.3.1版本发布</h3>
<ul>
<li>新增ws协议，用于AsyncTcpConnection作为客户端连接websocket协议服务，见下面示例</li></ul>
<pre>
use Workerman\Worker;
use Workerman\Connection\AsyncTcpConnection;
require_once __DIR__ . '/Workerman/Autoloader.php';
$worker = new Worker();
$worker->onWorkerStart = function()
{
    $ws_connection = new AsyncTcpConnection("ws://echo.websocket.org:80");
    $ws_connection->onConnect = function($connection){
        $connection->send('hello');
    };
    $ws_connection->onMessage = function($connection, $data){
        echo "recv: $data\n";
    };
    $ws_connection->onError = function($connection, $code, $msg){
        echo "error: $msg\n";
    };
    $ws_connection->onClose = function($connection){
        echo "connection closed\n";
    };
    $ws_connection->connect();
};
Worker::runAll();
</pre>
<ul>
<li>支持<a href="http://php.net/manual/en/book.event.php" target="_blank" rel="nofollow">Event扩展</a>(libevent扩展的替代品)，用于提高并发链接数。Event扩展支持php7</li></ul>
<hr>

<h3>2016-02-28 workerman3.3.0版本发布</h3>
<ul>
<li>新增<a href = "http://doc3.workerman.net/appendices/about-frame.html">frame协议</a>。</li>
<li>发布全局变量共享组件<a href="http://doc3.workerman.net/component/global-data.html">GlobalData</a>(需要workerman>=3.3.0)，用于进程间/服务器间变量共享。</li>
<li>升级进程间/服务器间通讯组件<a href="http://doc3.workerman.net/component/channel.html">Channel</a>(需要workerman>=3.3.0)，使之支持二进制数据通讯。</li>
</ul>

