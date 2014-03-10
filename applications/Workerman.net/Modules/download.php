<?php
namespace WorkerMan\Modules;

/**
 * 下载页面
 */
function download()
{
    $html_title = 'workerman下载|一个高性能的PHP Socket 服务器框架';
    $html_nav = 'download';
    $download_workerman_count_key = 'download_workerman_count';
    $workerman_download_count =  \WorkerMan\Lib\Store::get($download_workerman_count_key);
    include NET_ROOT . '/Views/header.tpl.php';
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
    return \App\Common\Protocols\Http\header('Location: https://github.com/walkor/workerman/archive/master.zip');
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
    $html_title = 'workerman-thrift-rpc下载|一个高性能的PHP Thrift Rpc框架';
    $html_nav = 'download';
    $download_thrift_count_key = 'download_thrift_count';
    $thrift_download_count =  \WorkerMan\Lib\Store::get($download_thrift_count_key);
    include NET_ROOT . '/Views/header.tpl.php';
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
    return \App\Common\Protocols\Http\header('Location: https://github.com/walkor/workerman-thrift/archive/master.zip');
}

/**
 * 下载workerman-statistics页面
 */
function download_statistics()
{
    $html_title = 'workerman下载';
    $html_nav = 'download';
    $download_statistics_count_key = 'download_statistics_count';
    $statistics_download_count =  \WorkerMan\Lib\Store::get($download_statistics_count_key);
    include NET_ROOT . '/Views/header.tpl.php';
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
    return \App\Common\Protocols\Http\header('Location: https://github.com/walkor/workerman-statistics/archive/master.zip');
}