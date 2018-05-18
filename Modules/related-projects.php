<?php
namespace WorkerMan\Modules;
function related_projects()
{
    $html_title = 'workerman第三方项目';
    $html_nav = 'related_projects';
    $html_keywords = 'workerman 第三方项目';
    include NET_ROOT . '/Views/header.tpl.php';
    include NET_ROOT . '/Views/related_projects.tpl.php';
    include NET_ROOT . '/Views/footer.tpl.php';
}
