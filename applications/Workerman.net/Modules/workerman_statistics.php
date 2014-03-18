<?php
namespace WorkerMan\Modules;

function workerman_statistics()
{
    $html_title = 'workerman-statistics|一个高性能的PHP监控统计系统';
    $html_nav = 'applications';
    $download_statistics_count_key = 'download_statistics_count';
    $statistics_download_count =  \WorkerMan\Lib\Store::get($download_statistics_count_key);
    include NET_ROOT . '/Views/header.tpl.php';
    include NET_ROOT . '/Views/workerman-statistics.tpl.php';
    include NET_ROOT . '/Views/footer.tpl.php';
}
