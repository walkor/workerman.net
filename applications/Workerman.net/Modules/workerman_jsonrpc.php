<?php
namespace WorkerMan\Modules;

function workerman_jsonrpc()
{
    $html_title = 'workerman-json-rpc|一个高性能的PHP Json Rpc框架';
    $html_nav = 'applications';
    $download_jsonrpc_count_key = 'download_jsonrpc_count';
    $jsonrpc_download_count =  \WorkerMan\Lib\Store::get($download_jsonrpc_count_key);
    include NET_ROOT . '/Views/header.tpl.php';
    include NET_ROOT . '/Views/workerman-jsonrpc.tpl.php';
    include NET_ROOT . '/Views/footer.tpl.php';
}
