<?php
namespace WorkerMan\Modules;

function workerman_chat()
{
    $html_title = 'workerman-chat | 一个高性能的PHP 聊天室框架';
    $html_nav = 'applications';
    $github_repo = 'workerman-chat';
    $download_chat_count_key = 'download_chat_count';
    $chat_download_count =  \WorkerMan\Lib\Store::get($download_chat_count_key);
    include NET_ROOT . '/Views/header.tpl.php';
    include NET_ROOT . '/Views/workerman-chat.tpl.php';
    include NET_ROOT . '/Views/footer.tpl.php';
}
