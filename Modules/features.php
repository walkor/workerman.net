<?php
namespace WorkerMan\Modules;

function features()
{
    $html_title = '特性 | workerman PHP Socket 服务器框架';
    $html_keywords = 'workerman特性';
    $html_nav = 'about';
    include NET_ROOT . '/Views/header.tpl.php';
    include NET_ROOT . '/Views/features.tpl.php';
    include NET_ROOT . '/Views/footer.tpl.php';
}

