<?php
namespace WorkerMan\Modules;

function features()
{
    $html_title = 'workerman特性';
    $html_nav = 'about';
    include NET_ROOT . '/Views/header.tpl.php';
    include NET_ROOT . '/Views/features.tpl.php';
    include NET_ROOT . '/Views/footer.tpl.php';
}

