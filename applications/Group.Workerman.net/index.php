<?php
/*
+--------------------------------------------------------------------------
|   WeCenter [#RELEASE_VERSION#]
|   ========================================
|   by WeCenter Software
|   © 2011 - 2013 WeCenter. All Rights Reserved
|   http://www.wecenter.com
|   ========================================
|   Support: WeCenter@qq.com
|   
+---------------------------------------------------------------------------
*/

if (! file_exists(dirname(__FILE__) . '/system/config/database.php') AND ! file_exists(dirname(__FILE__) . '/system/config/install.lock.php') AND !defined('SAE_TMP_PATH'))
{
	\App\Common\Protocols\Http\header('Location: ./install/');
	\App\Common\Protocols\Http\jump_exit();
}

include(WORKERMAN_ROOT_DIR.'applications/Group.Workerman.net/system/system.php');

AWS_APP::run();