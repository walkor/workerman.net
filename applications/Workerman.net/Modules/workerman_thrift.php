<?php
namespace WorkerMan\Modules;

function workerman_thrift()
{
    $html_title = 'workerman-thrift-rpc | 一个高性能的PHP Thrift Rpc框架';
    $html_nav = 'applications';
    $github_repo = 'workerman-thrift';
    $download_thrift_count_key = 'download_thrift_count';
    $thrift_download_count =  \WorkerMan\Lib\Store::get($download_thrift_count_key);
    include NET_ROOT . '/Views/header.tpl.php';
    include NET_ROOT . '/Views/workerman-thrift.tpl.php';
    include NET_ROOT . '/Views/footer.tpl.php';
}
