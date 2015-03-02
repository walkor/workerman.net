<?php
namespace WorkerMan\Lib;

/**
 *
* 这里用php数组文件来存储数据，
* 为了获取高性能需要用类似memcache、redis的存储
* @author walkor <walkor@workerman.net>
*
*/

class Store
{
    // 为了避免频繁读取磁盘，增加了缓存机制
    protected static $dataCache = array();
    // 上次缓存时间
    protected static $lastCacheTime = 0;
    // 保存数据的文件相对与WORKERMAN_LOG_DIR目录目录
    protected static $dataFile = 'data.php';
    // 打开文件的句柄
    protected static $dataFileHandle = null;

    // 缓存过期时间
    const CACHE_EXP_TIME = 1;
    
    public static function config($data_file)
    {
        self::$dataFile = $data_file;
    }

    public static function set($key, $value, $ttl = 0)
    {
        self::readDataFromDisk();
        self::$dataCache[$key] = $value;
        return self::writeToDisk();
    }

    public static function get($key, $use_cache = true)
    {
        if(time() - self::$lastCacheTime > self::CACHE_EXP_TIME)
        {
            self::readDataFromDisk();
        }
        return isset(self::$dataCache[$key]) ? self::$dataCache[$key] : null;
    }
     
    public static function delete($key)
    {
        self::readDataFromDisk();
        unset(self::$dataCache[$key]);
        return self::writeToDisk();
    }
     
    protected static function writeToDisk()
    {
        if(!self::$dataFileHandle)
        {
            if(!is_file(self::$dataFile))
            {
                touch(self::$dataFile);
            }
            self::$dataFileHandle = fopen(self::$dataFile, 'r+');
            if(!self::$dataFileHandle)
            {
                return false;
            }
        }
        flock(self::$dataFileHandle, LOCK_EX);
        $ret = file_put_contents(self::$dataFile, "<?php \n return " . var_export(self::$dataCache, true). ';');
        flock(self::$dataFileHandle, LOCK_UN);
        return $ret;
    }

    protected static function readDataFromDisk()
    {
        if(!is_file(self::$dataFile))
        {
            touch(self::$dataFile);
        }
        $cache = include self::$dataFile;
        if(is_array($cache))
        {
            self::$dataCache = $cache;
        }
        self::$lastCacheTime = time();
    }
}