<?php
namespace WorkerMan\Modules;

function applications()
{
    $html_title = 'workerman最近更新';
    $html_nav = 'last_change';
    $html_keywords = 'workerman 最近更新';
    include NET_ROOT . '/Views/header.tpl.php';
    include NET_ROOT . '/Views/last_change.tpl.php';
    include NET_ROOT . '/Views/footer.tpl.php';
}

