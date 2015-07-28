<?php
namespace WorkerMan\Modules;

function workerman_flappybird()
{
    $html_title = 'workerman-flappy-bird | flappy bird （像素小鸟）多人在线版源代码 PHP+Websocket+HTML5';
    $html_nav = 'applications';
    $github_repo = 'workerman-flappy-bird';
    $html_keywords = '多人在线小鸟,php websocket';
    $download_flappybird_count_key = 'download_flappybird_count';
    $flappybird_download_count =  \WorkerMan\Lib\Store::get($download_flappybird_count_key);
    include NET_ROOT . '/Views/header.tpl.php';
    include NET_ROOT . '/Views/workerman-flappybird.tpl.php';
    include NET_ROOT . '/Views/footer.tpl.php';
}
