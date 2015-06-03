<?php
namespace WorkerMan\Modules;

function web_sender()
{
    $html_title = 'WEB推送 | 一个WEB消息推送框架，基于WebSocket';
    $html_nav = 'applications';
    $github_repo = 'web-msg-sender';
    $download_sender_count_key = 'download_sender_count';
    $sender_download_count =  \WorkerMan\Lib\Store::get($download_sender_count_key);
    include NET_ROOT . '/Views/header.tpl.php';
    include NET_ROOT . '/Views/sender.tpl.php';
    include NET_ROOT . '/Views/footer.tpl.php';
}
