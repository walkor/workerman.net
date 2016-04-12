<?php
namespace WorkerMan\Modules;

function video()
{
    $html_title = 'workerman 视频教程';
    $html_nav = 'doc';
    $html_keywords = 'workerman 视频教程';
    include NET_ROOT . '/Views/header.tpl.php';
    include NET_ROOT . '/Views/video.tpl.php';
    include NET_ROOT . '/Views/footer.tpl.php';
}

