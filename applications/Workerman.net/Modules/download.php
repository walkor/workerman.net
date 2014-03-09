<?php
namespace WorkerMan\Modules;

function download()
{
    $html_title = 'workerman相关相关下载';
    $html_nav = 'download';
    include NET_ROOT . '/Views/header.tpl.php';
    include NET_ROOT . '/Views/download.tpl.php';
    include NET_ROOT . '/Views/footer.tpl.php';
}

function download_workerman($file_type = '')
{
    $download_workerman_count_key = 'download_workerman_count';
    $count = \WorkerMan\Lib\Store::get($download_workerman_count_key);
    $count = $count >= 0 ? intval($count) : 0;
    \WorkerMan\Lib\Store::set($download_workerman_count_key, $count++);
    return \App\Common\Protocols\Http\header('Location: https://github.com/walkor/workerman/archive/master.zip');
}
