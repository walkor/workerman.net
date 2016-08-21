<?php
namespace WorkerMan\Modules;

function phpsocket_io()
{
    $html_title = 'phpsocket.io php版本的socket.io';
    $html_nav = 'applications';
    $github_repo = 'phpsocket.io';
    $html_keywords = 'php socket.io 实时通信 跨平台';
    $download_phpsocket_io_count_key = 'download_phpsocket_io_count';
    $phpsocket_io_download_count =  \WorkerMan\Lib\Store::get($download_phpsocket_io_count_key);
    
    include NET_ROOT . '/Views/header.tpl.php';
    include NET_ROOT . '/Views/phpsocket_io.tpl.php';
    include NET_ROOT . '/Views/footer.tpl.php';
}
