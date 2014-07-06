<?php
namespace WorkerMan\Modules;

function home()
{
    $html_title = 'workerman 一个高性能的PHP Socket 服务器框架';
    $html_desc = 'workerman是一个高性能的PHP socket 服务器框架。已经被多家公司用于Rpc服务器、聊天室服务器、网络游戏服务器、手机游戏等后台开发。只要会PHP，你就可以基于workerman轻而易举的开发出你想要的网络应用，不必再为PHP Socket底层开发而烦恼。';
    $html_nav = 'home';
    $download_workerman_count_key = 'download_workerman_count';
    $workerman_download_count =  \WorkerMan\Lib\Store::get($download_workerman_count_key);
    include NET_ROOT . '/Views/header.tpl.php';
    include NET_ROOT . '/Views/home.tpl.php';
    include NET_ROOT . '/Views/footer.tpl.php';
}
