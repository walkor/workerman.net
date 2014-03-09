<?php
require_once WORKERMAN_ROOT_DIR .'applications/Workerman.net/Web/_init.php';

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
    if($tmp_arr[0] == 'workerman')
    {
        \App\Common\Protocols\Http\header('Location: /'.(!empty($_GET) ? '?'.http_build_query($_GET) : ''));
        return \App\Common\Protocols\Http\header('HTTP/1.1 301 Moved Permanently');
    }
    $func = "\\Workerman\\Modules\\{$tmp_arr[0]}";
    if(isset($tmp_arr[1]))
    {
        $func .= '_'.$tmp_arr[1];
        unset($tmp_arr[1]);
    }
    unset($tmp_arr[0]);
}else 
{
    $func = "\\Workerman\\Modules\\workerman";
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
    return \App\Common\Protocols\Http\header('Location: /');
    $func = "\\Workerman\\Modules\\workerman";
}

call_user_func_array($func, $tmp_arr);