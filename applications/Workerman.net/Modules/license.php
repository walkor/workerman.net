<?php
namespace WorkerMan\Modules;

function license()
{
    $html_title = '许可 | workerman PHP Socket 服务器框架';
    $html_nav = 'about';
    $html_keywords = 'workerman许可';
    include NET_ROOT . '/Views/header.tpl.php';
    include NET_ROOT . '/Views/license.tpl.php';
    include NET_ROOT . '/Views/footer.tpl.php';
}

