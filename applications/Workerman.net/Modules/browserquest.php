<?php
namespace WorkerMan\Modules;

function browserquest()
{
    $html_title = 'browserquest | MMO 多人在线游戏 BrowserQuest PHP 版本';
    $html_nav = 'applications';
    $html_keywords = 'BrowserQuest php版本';
    $github_repo = 'BrowserQuest-php';
    $download_browserquest_count_key = 'download_browserquest_count';
    $browserquest_download_count =  \WorkerMan\Lib\Store::get($download_browserquest_count_key);
    include NET_ROOT . '/Views/header.tpl.php';
    include NET_ROOT . '/Views/browserquest.tpl.php';
    include NET_ROOT . '/Views/footer.tpl.php';
}
