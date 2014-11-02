<?php
namespace WorkerMan\Modules;

function windows()
{
    $html_title = 'workerman windows 版本下载安装';
    $html_nav = 'windows';
    $download_workermanwin_count_key = 'download_workerman_count';
    $workermanwin_download_count =  \WorkerMan\Lib\Store::get($download_workermanwin_count_key);
    include NET_ROOT . '/Views/header.tpl.php';
    include NET_ROOT . '/Views/windows.tpl.php';
    include NET_ROOT . '/Views/footer.tpl.php';
}
