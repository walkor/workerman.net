<?php
header('HTTP/1.1 206 Partial Content');
header("Content-Type: application/octet-stream");

echo '<?php
$version_ok = $pcntl_loaded = $posix_loaded = false;
if(version_compare(phpversion(), "5.3.3", ">="))
{
  $version_ok = true;
}
if(in_array("pcntl", get_loaded_extensions()))
{
    $pcntl_loaded = true;
}
if(in_array("posix", get_loaded_extensions()))
{
    $posix_loaded = true;
}

function check($val)
{
    if($val)
    {
       return "\033[32;40m [OK] \033[0m\n";
    }
    else
    {
       return "\033[31;40m [fail] \033[0m\n";
    }
}

echo "PHP Version >= 5.3.3                 " . check($version_ok);

echo "Extension pcntl check                " . check($pcntl_loaded);

echo "Extension posix check                " . check($posix_loaded);

$check_func_map = array(
    "stream_socket_server",
    "stream_socket_client",
    "pcntl_signal_dispatch",
);
// 获取php.ini中设置的禁用函数
if($disable_func_string = ini_get("disable_functions"))
{
    $disable_func_map = array_flip(explode(",", $disable_func_string));
}
// 遍历查看是否有禁用的函数
foreach($check_func_map as $func)
{
    if(isset($disable_func_map[$func]))
    {
        echo "\n\033[31;40mFunction $func may be disabled. Please check disable_functions in php.ini\n";
        echo "see http://doc.workerman.net/faq/disable-function-check.html\033[0m\n";
        exit;
    }
}
';

