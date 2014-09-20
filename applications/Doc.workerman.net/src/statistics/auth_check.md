# 权限验证

如果统计数据需要设置访问用户名密码，可以在applications\Statistics\Config\Config.php中设置

例如设置登录登录用户名为 admin，密码为123456，则配置如下：

```php
namespace Statistics\Config;
class Config
{
    // 数据源端口，会向这个端口发送udp广播获取ip，然后从这个端口以tcp协议获取统计信息
    public static $ProviderPort = 55858;

    // 管理员用户名，用户名密码都为空字符串时说明不用验证
    public static $adminName = 'admin';

    // 管理员密码，用户名密码都为空字符串时说明不用验证
    public static $adminPassword = '123456';
}
```

如果不加登录验证，设置
```php
public static $adminName = '';
public static $adminPassword = '';
```
即可
