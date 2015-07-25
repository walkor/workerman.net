<?php
namespace WorkerMan\Modules;

function doc()
{
    $html_title = '开发手册 | workerman PHP Socket 服务器框架';
    $html_nav = 'doc';
    $html_keywords = 'workerman手册,workerman教程';
    include NET_ROOT . '/Views/header.tpl.php';
    include NET_ROOT . '/Views/doc.tpl.php';
    include NET_ROOT . '/Views/footer.tpl.php';
}

