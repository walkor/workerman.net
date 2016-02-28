<?php
namespace WorkerMan\Modules;

function last_update()
{
    $html_title = 'workerman最近更新';
    $html_nav = 'last_update';
    $html_keywords = 'workerman 最近更新';
    include NET_ROOT . '/Views/header.tpl.php';
    include NET_ROOT . '/Views/last_update.tpl.php';
    include NET_ROOT . '/Views/footer.tpl.php';
}

