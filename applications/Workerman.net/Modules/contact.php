<?php
namespace WorkerMan\Modules;

function features()
{
    $html_title = '联系我们 | workerman PHP Socket 服务器框架';
    $html_nav = 'about';
    include NET_ROOT . '/Views/header.tpl.php';
    include NET_ROOT . '/Views/contact.tpl.php';
    include NET_ROOT . '/Views/footer.tpl.php';
}

