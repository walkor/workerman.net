<?php
namespace WorkerMan\Modules;

function applications()
{
    $html_title = '相关应用 | workerman PHP Socket 服务器框架';
    $html_nav = 'applications';
    $html_keywords = 'workerman相关应用';
    include NET_ROOT . '/Views/header.tpl.php';
    include NET_ROOT . '/Views/applications.tpl.php';
    include NET_ROOT . '/Views/footer.tpl.php';
}

