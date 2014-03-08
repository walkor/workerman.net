<?php
namespace WorkerMan\Modules;

function applications()
{
    $html_title = 'workerman相关应用';
    $html_nav = 'applications';
    include NET_ROOT . '/Views/header.tpl.php';
    include NET_ROOT . '/Views/applications.tpl.php';
    include NET_ROOT . '/Views/footer.tpl.php';
}
