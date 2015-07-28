<?php
namespace WorkerMan\Modules;

function bench()
{
    $html_title = '压力测试 | workerman PHP Socket 服务器框架';
    $html_nav = 'bench';
    $html_keywords = 'workerman压力测试';
    include NET_ROOT . '/Views/header.tpl.php';
    include NET_ROOT . '/Views/bench.tpl.php';
    include NET_ROOT . '/Views/footer.tpl.php';
}

