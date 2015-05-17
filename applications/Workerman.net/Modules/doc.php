<?php
namespace WorkerMan\Modules;

function applications()
{
    $html_title = '开发手册 | workerman PHP Socket 服务器框架';
    $html_nav = 'doc';
    include NET_ROOT . '/Views/header.tpl.php';
    include NET_ROOT . '/Views/doc.tpl.php';
    include NET_ROOT . '/Views/footer.tpl.php';
}

