# Gateway::getOnlineStatus
(WorkerMan>=2.1.2)

## 说明:
```php
array Gateway::getOnlineStatus(void);
```

获取当前所有在线client_id列表


## 范例
```php
use \Lib\Gateway;

// 打印在线client_id列表
var_export(Gateway::getOnlineStatus());
```

打印出的数据类似如下：
```php
array(
    0=>1001,
    1=>1009,
    2=>99,
);
```
