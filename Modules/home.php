<?php
namespace WorkerMan\Modules;

function home()
{
    if(!empty($_GET))
    {
        return _header('Location: /', 301);
    }
    $html_title = 'workerman 高性能异步PHP Socket框架';
    $html_keywords = 'workerman, php socket, php websocket, php异步';
    $html_desc = 'Workerman是一款纯PHP开发的开源高性能的异步PHP socket框架。支持TCP长连接，支持websocket、MQTT等诸多协议。被广泛的用于手机app、手游服务端、网络游戏服务器、聊天室、硬件通讯、智能家居、车联网、物联网等领域的开发。';
    $html_nav = 'home';
    $download_workerman_count_key = 'download_workerman_count';
    $workerman_download_count =  \WorkerMan\Lib\Store::get($download_workerman_count_key);
    include NET_ROOT . '/Views/header.tpl.php';
    include NET_ROOT . '/Views/home.tpl.php';
    include NET_ROOT . '/Views/footer.tpl.php';
}
