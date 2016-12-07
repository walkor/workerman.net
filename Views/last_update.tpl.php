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

