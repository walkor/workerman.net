<?php
namespace WorkerMan\Modules;

/**
 * 下载页面
 */
function download()
{
    $html_title = 'workerman下载  |  workerman PHP Socket 服务器框架';
    $html_nav = 'download';
    $download_workerman_count_key = 'download_workerman_count';
    $workerman_download_count =  \WorkerMan\Lib\Store::get($download_workerman_count_key);
    include NET_ROOT . '/Views/\Man\Common\Protocols\Http\header.tpl.php';
    include NET_ROOT . '/Views/download.tpl.php';
    include NET_ROOT . '/Views/footer.tpl.php';
}

/**
 * 下载workerman.zip
 * @param unknown_type $file_type
 */
function download_workermanzip($file_type = '')
{
    $download_workerman_count_key = 'download_workerman_count';
    $count = \WorkerMan\Lib\Store::get($download_workerman_count_key);
    $count = $count >= 0 ? intval($count) : 0;
    \WorkerMan\Lib\Store::set($download_workerman_count_key, ++$count);
    return \Man\Common\Protocols\Http\header('Location: https://github.com/walkor/workerman/archive/master.zip');
}

/**
 * 下载页面
 */
function download_workerman()
{
    return download();
}

/**
 * 下载workerman-thrift-rpc页面
 */
function download_thrift()
{
    $html_title = 'workerman-thrift-rpc下载 | 一个高性能的PHP Thrift Rpc框架';
    $html_nav = 'download';
    $github_repo = 'workerman-thrift';
    $download_thrift_count_key = 'download_thrift_count';
    $thrift_download_count =  \WorkerMan\Lib\Store::get($download_thrift_count_key);
    include NET_ROOT . '/Views/\Man\Common\Protocols\Http\header.tpl.php';
    include NET_ROOT . '/Views/download-thrift.tpl.php';
    include NET_ROOT . '/Views/footer.tpl.php';
}

/**
 * 下载workerman-thrift-rpc.zip
 */
function download_thriftzip()
{
    $download_thrift_count_key = 'download_thrift_count';
    $count = \WorkerMan\Lib\Store::get($download_thrift_count_key);
    $count = $count >= 0 ? intval($count) : 0;
    \WorkerMan\Lib\Store::set($download_thrift_count_key, ++$count);
    return \Man\Common\Protocols\Http\header('Location: https://github.com/walkor/workerman-thrift/archive/master.zip');
}

/**
 * 下载workerman-json-rpc页面
 */
function download_jsonrpc()
{
    $html_title = 'workerman-json-rpc下载 | 一个高性能的PHP Json Rpc框架';
    $html_nav = 'download';
    $github_repo = 'workerman-jsonrpc';
    $download_jsonrpc_count_key = 'download_jsonrpc_count';
    $jsonrpc_download_count =  \WorkerMan\Lib\Store::get($download_jsonrpc_count_key);
    include NET_ROOT . '/Views/\Man\Common\Protocols\Http\header.tpl.php';
    include NET_ROOT . '/Views/download-jsonrpc.tpl.php';
    include NET_ROOT . '/Views/footer.tpl.php';
}

/**
 * 下载workerman-json-rpc.zip
 */
function download_jsonrpczip()
{
    $download_jsonrpc_count_key = 'download_jsonrpc_count';
    $count = \WorkerMan\Lib\Store::get($download_jsonrpc_count_key);
    $count = $count >= 0 ? intval($count) : 0;
    \WorkerMan\Lib\Store::set($download_jsonrpc_count_key, ++$count);
    return \Man\Common\Protocols\Http\header('Location: https://github.com/walkor/workerman-jsonrpc/archive/master.zip');
}

/**
 * 下载workerman-chat页面
 */
function download_chat()
{
    $html_title = 'workerman-chat下载 | 一个高性能的PHP 聊天室框架';
    $html_nav = 'download';
    $github_repo = 'workerman-chat';
    $download_chat_count_key = 'download_chat_count';
    $chat_download_count =  \WorkerMan\Lib\Store::get($download_chat_count_key);
    include NET_ROOT . '/Views/\Man\Common\Protocols\Http\header.tpl.php';
    include NET_ROOT . '/Views/download-chat.tpl.php';
    include NET_ROOT . '/Views/footer.tpl.php';
}

/**
 * 下载workerman-chat.zip
 */
function download_chatzip()
{
    $download_chat_count_key = 'download_chat_count';
    $count = \WorkerMan\Lib\Store::get($download_chat_count_key);
    $count = $count >= 0 ? intval($count) : 0;
    \WorkerMan\Lib\Store::set($download_chat_count_key, ++$count);
    return \Man\Common\Protocols\Http\header('Location: https://github.com/walkor/workerman-chat/archive/master.zip');
}

/**
 * 下载workerman-statistics页面
 */
function download_statistics()
{
    $html_title = 'workerman-statistics下载 | PHP开发的一个分布式统计监控系统';
    $html_nav = 'download';
    $github_repo = 'workerman-statistics';
    $download_statistics_count_key = 'download_statistics_count';
    $statistics_download_count =  \WorkerMan\Lib\Store::get($download_statistics_count_key);
    include NET_ROOT . '/Views/\Man\Common\Protocols\Http\header.tpl.php';
    include NET_ROOT . '/Views/download-statistics.tpl.php';
    include NET_ROOT . '/Views/footer.tpl.php';
}

/**
 * 下载workerman-thrift-rpc.zip
 */
function download_statisticszip()
{
    $download_statistics_count_key = 'download_statistics_count';
    $count = \WorkerMan\Lib\Store::get($download_statistics_count_key);
    $count = $count >= 0 ? intval($count) : 0;
    \WorkerMan\Lib\Store::set($download_statistics_count_key, ++$count);
    return \Man\Common\Protocols\Http\header('Location: https://github.com/walkor/workerman-statistics/archive/master.zip');
}

/**
 * 下载workerman-statistics页面
 */
function download_todpole()
{
    $html_title = 'workerman-todpole下载 | PHP蝌蚪小游戏 HTML5+WebSocket+PHP 服务器实时推送技术';
    $html_nav = 'download';
    $github_repo = 'workerman-todpole';
    $download_todpole_count_key = 'download_todpole_count';
    $todpole_download_count =  \WorkerMan\Lib\Store::get($download_todpole_count_key);
    include NET_ROOT . '/Views/\Man\Common\Protocols\Http\header.tpl.php';
    include NET_ROOT . '/Views/download-todpole.tpl.php';
    include NET_ROOT . '/Views/footer.tpl.php';
}

/**
 * 下载workerman-thrift-rpc.zip
 */
function download_todpolezip()
{
    $download_todpole_count_key = 'download_todpole_count';
    $count = \WorkerMan\Lib\Store::get($download_todpole_count_key);
    $count = $count >= 0 ? intval($count) : 0;
    \WorkerMan\Lib\Store::set($download_todpole_count_key, ++$count);
    return \Man\Common\Protocols\Http\header('Location: https://github.com/walkor/workerman-todpole/archive/master.zip');
}

/**
 * 下载workerman-flappy-bird页面
 */
function download_flappybird()
{
    $html_title = 'workerman-flappy-bird下载 | 多人在线flappy bird 源代码下载';
    $html_nav = 'download';
    $github_repo = 'workerman-flappy-bird';
    $download_flappybird_count_key = 'download_flappybird_count';
    $flappybird_download_count =  \WorkerMan\Lib\Store::get($download_flappybird_count_key);
    include NET_ROOT . '/Views/\Man\Common\Protocols\Http\header.tpl.php';
    include NET_ROOT . '/Views/download-flappy-bird.tpl.php';
    include NET_ROOT . '/Views/footer.tpl.php';
}


/**
 * 下载workerman-flappy-bird
 */
function download_flappybirdzip()
{
    $download_flappybird_count_key = 'download_flappybird_count';
    $count = \WorkerMan\Lib\Store::get($download_flappybird_count_key);
    $count = $count >= 0 ? intval($count) : 0;
    \WorkerMan\Lib\Store::set($download_flappybird_count_key, ++$count);
    return \Man\Common\Protocols\Http\header('Location: https://github.com/walkor/workerman-flappy-bird/archive/master.zip');
}

/**
 * 下载workerman-for-win
 */
function download_workermanwinzip()
{
    $download_workermanwin_count_key = 'download_workermanwin_count';
    $count = \WorkerMan\Lib\Store::get($download_workermanwin_count_key);
    $count = $count >= 0 ? intval($count) : 0;
    \WorkerMan\Lib\Store::set($download_workermanwin_count_key, ++$count);
    return \Man\Common\Protocols\Http\header('Location: https://github.com/walkor/workerman-for-win/archive/master.zip');
}

/**
 * 下载手册
 */
function download_manual()
{
    \Man\Common\Protocols\Http\header('Content-Type: application/pdf');
    \Man\Common\Protocols\Http\header('Content-Disposition: attachment; filename="workerman-manual.pdf"');
    readfile(NET_ROOT.'/Web/downloads/workerman-manual.pdf');
}