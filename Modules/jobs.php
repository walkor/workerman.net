<?php
namespace WorkerMan\Modules;

function jobs()
{
    $html_title = 'Workerman人才招聘';
    $html_nav = 'jobs';
    $html_keywords = 'workerman,人才招聘';
    $html_desc = '提供Workerman技术的招聘岗位';
    include NET_ROOT . '/Views/header.tpl.php';
    include NET_ROOT . '/Views/jobs.tpl.php';
    include NET_ROOT . '/Views/footer.tpl.php';
}
