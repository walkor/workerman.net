<?php
namespace WorkerMan\Modules;

function contact()
{
    $html_title = '联系我们 | workerman PHP Socket 服务器框架';
    $html_nav = 'about';
    $html_keywords = 'workerman 联系方式';
    include NET_ROOT . '/Views/header.tpl.php';
    include NET_ROOT . '/Views/contact.tpl.php';
    include NET_ROOT . '/Views/footer.tpl.php';
}

