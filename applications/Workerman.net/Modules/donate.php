<?php
namespace WorkerMan\Modules;

function donate()
{
    $html_title = '捐赠Workerman项目';
    $html_nav = 'donate';
    include NET_ROOT . '/Views/header.tpl.php';
    include NET_ROOT . '/Views/donate.tpl.php';
    include NET_ROOT . '/Views/footer.tpl.php';
}

