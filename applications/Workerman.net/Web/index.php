<?php
require_once WORKERMAN_ROOT_DIR .'applications/Workerman.net/Web/_init.php';
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

$host_name = 'www.workerman.net';

if(0 !== strpos($_SERVER['HTTP_HOST'],$host_name))
{
    return \App\Common\Protocols\Http\header('Location: http://' . $host_name .$_SERVER['REQUEST_URI'], true, 301);
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
    return \App\Common\Protocols\Http\header('Location: /'.(!empty($_GET) ? '?'.http_build_query($_GET) : ''));
}

call_user_func_array($func, $tmp_arr);

global $bd_ad_250_250, $bd_ad_468_60;
$bd_ad_250_250 = '<script type="text/javascript">/*250*250，创建于2014-7-5*/var cpro_id = "u1611641";</script><script src="http://cpro.baidustatic.com/cpro/ui/c.js" type="text/javascript"></script>';
$bd_ad_468_60 = '<script type="text/javascript">/*468*60，创建于2014-7-5*/var cpro_id = "u1611676";</script><script src="http://cpro.baidustatic.com/cpro/ui/c.js" type="text/javascript"></script>';
