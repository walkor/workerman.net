<?php
namespace WorkerMan\Modules;

function home()
{
    $html_title = 'workerman 一个高性能的PHP Socket 异步框架';
    $html_desc = 'Workerman是一款纯PHP开发的开源的高性能的PHP socket 异步框架。支持TCP长连接，支持Websocket、HTTP等协议，支持自定义协议。被广泛的用于手机app、手游服务端、网络游戏服务器、聊天室服务器、硬件通讯服务器、智能家居、车联网、物联网等领域的开发。基于workerman开发者可以更专注于业务逻辑开发，不必再为PHP Socket底层开发而烦恼。';
    $html_nav = 'home';
    $download_workerman_count_key = 'download_workerman_count';
    $workerman_download_count =  \WorkerMan\Lib\Store::get($download_workerman_count_key);
    include NET_ROOT . '/Views/header.tpl.php';
    include NET_ROOT . '/Views/home.tpl.php';
    include NET_ROOT . '/Views/footer.tpl.php';
}
