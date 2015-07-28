<?php
require_once __DIR__.'/_init.php';
\WorkerMan\Lib\Store::config(NET_ROOT . '/data/data.php');
$url_info = parse_url($_SERVER['REQUEST_URI']);
if(isset($url_info['path']))
{
    $path = $url_info['path'];
}
else
{
    $path = '';
}

$tmp_arr = explode('/', $path);
foreach($tmp_arr as $key=>$value)
{
    if(trim($value) == '')
    {
        unset($tmp_arr[$key]);
    }
}
$tmp_arr = array_values($tmp_arr);
if(isset($tmp_arr[0]))
{
    $func = "\\Workerman\\Modules\\{$tmp_arr[0]}";
    if(isset($tmp_arr[1]))
    {
        $func .= '_'.$tmp_arr[1];
        unset($tmp_arr[1]);
    }
    unset($tmp_arr[0]);
}else 
{
    $func = "\\Workerman\\Modules\\home";
}
$func = str_replace('-', '_', $func);
if(!function_exists($func))
{
    foreach(glob(NET_ROOT . "/Modules/*") as $php_file)
    {
        require_once $php_file;
    }
}

if(!function_exists($func))
{
    return _header('Location: /'.(!empty($_GET) ? '?'.http_build_query($_GET) : ''));
}

call_user_func_array($func, $tmp_arr);
