<?php
namespace WorkerMan\Modules;

function workerman_vmstat()
{
    $html_title = 'VMStat服务器状态监控服务';
    $html_nav = 'applications';
    $github_repo = 'workerman-vmstat';
    $html_keywords = 'php socket, vmstat';
    $download_vmstat_count_key = 'download_vmstat_count';
    $vmstat_download_count =  \WorkerMan\Lib\Store::get($download_vmstat_count_key);
    include NET_ROOT . '/Views/header.tpl.php';
    include NET_ROOT . '/Views/workerman-vmstat.tpl.php';
    include NET_ROOT . '/Views/footer.tpl.php';
}
