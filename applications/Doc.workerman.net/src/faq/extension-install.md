# WorkerMan下扩展的安装
### 首先
**虽然你的环境Apache或者php-fpm支持某个扩展，但是不代表着WorkerMan能直接使用这个扩展，原因如下：**


* php是有很多运行模式的，或者说很多sapi。
比如 apache 的mod_php、apache2handler
php-fpm的 fpm
还有isapi 、phttpd、cli等有20多个sapi


* 每种运行模式的php可执行文件一般都不是相同的,所以可能内置的扩展有所差异


* 每种运行模式的 php.ini 文件可能都不是相同的。
比如apache可能用的是 ```/etc/php5/apache2/php.ini```
php-fpm可能用的是```/etc/php5/fpm/php.ini```
而 workerman是以cli模式运行的，用的可能是```/etc/php5/cli/php.ini```


* 而有时安装扩展的时候是需要在php.ini中配置的，所以即使apache配置了php.ini，不代表cli模式下的的workerman就支持了那个扩展，还是需要在cli 的 php.ini配置一下的


### 现在的问题
的问题就是找到php cli模式使用的php.ini。
运行如下命令，可以列出所有php cli所使用的扩展的ini文件包括php.ini

```
php --ini
Configuration File (php.ini) Path: /etc/php5/cli
Loaded Configuration File:         /etc/php5/cli/php.ini
Scan for additional .ini files in: /etc/php5/cli/conf.d
Additional .ini files parsed:      /etc/php5/cli/conf.d/apc.ini,
/etc/php5/cli/conf.d/curl.ini,
/etc/php5/cli/conf.d/gd.ini,
/etc/php5/cli/conf.d/libevent.ini,
/etc/php5/cli/conf.d/memcache.ini,
/etc/php5/cli/conf.d/mysql.ini,
/etc/php5/cli/conf.d/mysqli.ini,
/etc/php5/cli/conf.d/pdo.ini,
/etc/php5/cli/conf.d/pdo_mysql.ini,
/etc/php5/cli/conf.d/proctitle.ini
```
上面的路径可能因为系统不同而不一样，如果你有扩展的.so文件，只是缺少一个php.ini配置，可以参考上面的规则配置下


### 最后
如果你的cli是apt-get install 或者 yum install 安装的，那么扩展也可以通过apt-get 或者 yum安装，php cli的php.ini 会自动配置，非常方便。

apt yum可以通过以下命令查找 扩展，例如memcache 扩展
apt: apt-cache search memcache | grep php
yum: yum search memcache | grep php

然后
apt-get install 你搜到的要装的扩展名
yum install 你搜到的要装的扩展名
