<?php
namespace WorkerMan\Modules;

function install()
{
    header('HTTP/1.1 404 Not Found');
    die;
    $html_title = 'workerman 详细安装教程';
    $html_nav = 'install';
    $html_keywords = 'workerman安装';
    include NET_ROOT . '/Views/header.tpl.php';
    include NET_ROOT . '/Views/install.tpl.php';
    include NET_ROOT . '/Views/footer.tpl.php';
}
