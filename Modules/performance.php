<?php
namespace WorkerMan\Modules;

function performance()
{
    $html_title = '性能 | workerman PHP Socket 服务器框架';
    $html_nav = 'about';
    $html_keywords = 'workerman性能';
    include NET_ROOT . '/Views/header.tpl.php';
    include NET_ROOT . '/Views/performance.tpl.php';
    include NET_ROOT . '/Views/footer.tpl.php';
}

