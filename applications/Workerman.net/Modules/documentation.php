<?php
namespace WorkerMan\Modules;

function documentation()
{
    return documentation_workerman();
}


function documentation_workerman()
{
    $html_title = '文档 | workerman PHP Socket 服务器框架';
    $html_nav = 'documentation';
    include NET_ROOT . '/Views/header.tpl.php';
    include NET_ROOT . '/Views/building.tpl.php';
    include NET_ROOT . '/Views/footer.tpl.php';
}