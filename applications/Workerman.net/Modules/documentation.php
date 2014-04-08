<?php
namespace WorkerMan\Modules;

function documentation()
{
    return documentation_workerman();
}


function documentation_workerman()
{
    $html_title = '文档 | workerman PHP Socket 服务器框架';
    $html_nav = 'documentation';
    include NET_ROOT . '/Views/header.tpl.php';
    include NET_ROOT . '/Views/documentation-workerman.tpl.php';
    include NET_ROOT . '/Views/footer.tpl.php';
}

function documentation_phpThriftRpc()
{
    $html_title = '文档 | php thrift rpc';
    $html_nav = 'documentation';
    include NET_ROOT . '/Views/header.tpl.php';
    include NET_ROOT . '/Views/building.tpl.php';
    include NET_ROOT . '/Views/footer.tpl.php';
}

function documentation_phpJsonRpc()
{
    $html_title = '文档 | php json rpc';
    $html_nav = 'documentation';
    include NET_ROOT . '/Views/header.tpl.php';
    include NET_ROOT . '/Views/building.tpl.php';
    include NET_ROOT . '/Views/footer.tpl.php';
}

function documentation_phpChatRoom()
{
    $html_title = '文档 | php 聊天室';
    $html_nav = 'documentation';
    include NET_ROOT . '/Views/header.tpl.php';
    include NET_ROOT . '/Views/building.tpl.php';
    include NET_ROOT . '/Views/footer.tpl.php';
}

function documentation_phpStatistics()
{
    $html_title = '文档 | php监控统计系统';
    $html_nav = 'documentation';
    include NET_ROOT . '/Views/header.tpl.php';
    include NET_ROOT . '/Views/building.tpl.php';
    include NET_ROOT . '/Views/footer.tpl.php';
}