<h3>2016-02-28</h3>
<ul>
<li>workerman3.3.0版本发布，新增<a href = "http://doc3.workerman.net/appendices/about-frame.html">frame协议</a>。</li>
<li>发布全局变量共享组件<a href="http://doc3.workerman.net/component/global-data.html">GlobalData</a>(需要workerman>=3.3.0)，用于进程间/服务器间变量共享。</li>
<li>升级进程间/服务器间通讯组件<a href="http://doc3.workerman.net/component/channel.html">Channel</a>(需要workerman>=3.3.0)，使之支持二进制数据通讯。</li>
</ul>
<hr>
<h3>2016-03-19</h3>
<ul>
<li>workerman3.3.1版本发布，新增ws协议，用于AsyncTcpConnection作为客户端连接websocket协议服务，见下面示例</li></ul>
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
