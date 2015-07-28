<?php
namespace WorkerMan\Modules;

function workerman()
{
    $html_title = '介绍 | workerman PHP Socket 服务器框架';
    $html_desc = '';
    $html_keywords = 'workerman介绍';
    $html_nav = 'about';
    $download_workerman_count_key = 'download_workerman_count';
    $workerman_download_count =  \WorkerMan\Lib\Store::get($download_workerman_count_key);
    include NET_ROOT . '/Views/header.tpl.php';
    include NET_ROOT . '/Views/workerman.tpl.php';
    include NET_ROOT . '/Views/footer.tpl.php';
}
