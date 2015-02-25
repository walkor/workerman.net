<?php
define('NET_ROOT', realpath(dirname(__FILE__) . '/..'));
require_once NET_ROOT . '/Lib/Store.php';

function _header($content, $replace = true, $http_response_code = 0)
{
    if(!defined('WORKERMAN_ROOT_DIR'))
    {
        return header($content, $replace, $http_response_code);
    }
    return \Man\Common\Protocols\Http\header($content, $replace, $http_response_code);
}

global $bd_ad_250_250, $bd_ad_468_60, $bd_ad_960_90;
//$bd_ad_250_250 = '<script type="text/javascript">/*250*250，创建于2014-7-5*/var cpro_id = "u1611641";</script><script src="http://cpro.baidustatic.com/cpro/ui/c.js" type="text/javascript"></script>';
//$bd_ad_468_60 = '<script type="text/javascript">/*468*60，创建于2014-7-5*/var cpro_id = "u1611676";</script><script src="http://cpro.baidustatic.com/cpro/ui/c.js" type="text/javascript"></script>';
//$bd_ad_960_90 = '<script type="text/javascript">/*960*90，创建于2014-7-5*/var cpro_id = "u1611699";</script><script src="http://cpro.baidustatic.com/cpro/ui/c.js" type="text/javascript"></script>';
