<?php
header('HTTP/1.1 206 Partial Content');
header("Content-Type: application/octet-stream");

echo '<?php
$version_ok = $pcntl_loaded = $posix_loaded = false;
if(version_compare(phpversion(), "5.3.3", ">"))
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

echo "PHP Version >= 5.3                   " . check($version_ok);

echo "Extension pcntl check                " . check($pcntl_loaded);

echo "Extension posix check                " . check($posix_loaded);
';

