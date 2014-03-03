<?php
require_once WORKERMAN_ROOT_DIR .'applications/Workerman.net/Web/_init.php';

$url_info = parse_url($_SERVER['REQUEST_URI']);
$path = isset($url_info['path']) ? $url_info['path'] : 'workerman';
$func = str_replace('/', '', $path);
if(empty($func))
{
    $func = 'workerman';
}
if(!function_exists($func))
{
    foreach(glob(NET_ROOT . "/Modules/*") as $php_file)
    {
        require_once $php_file;
    }
}

if(!function_exists($func))
{
    $func = "\\Workerman\\Modules\\workerman";
}

call_user_func_array($func, array());