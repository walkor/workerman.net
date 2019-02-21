<?php
namespace WorkerMan\Modules;

function workerman_chat()
{
    $html_title = 'workerman-chat | PHP开源分布式聊天室框架';
    $html_nav = 'applications';
    $github_repo = 'workerman-chat';
    $html_keywords = 'php聊天室,php websocket聊天室';
    $html_desc = 'workerman-chat 是一款基于PHP websocket开发的支持分布式部署的聊天室框架，支持群聊和私聊';
    $download_chat_count_key = 'download_chat_count';
    $chat_download_count =  \WorkerMan\Lib\Store::get($download_chat_count_key);
    include NET_ROOT . '/Views/header.tpl.php';
    include NET_ROOT . '/Views/workerman-chat.tpl.php';
    include NET_ROOT . '/Views/footer.tpl.php';
}
