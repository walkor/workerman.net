# 一些例子

## 例子一

### 协议定义
  * 首部部固定10个字节长度用来保存整个数据包长度，位数不够补0
  * 数据格式为xml

### 数据包样本
```xml
0000000121<?xml version="1.0" encoding="ISO-8859-1"?>
<request>
    <module>user</module>
    <action>getInfo</action>
</request>
```
其中0000000121代表整个数据包长度，后面紧跟xml数据格式的包体内容

### 协议实现
```php
namespace Protocols;
class XmlProtocol
{
    public static function input($recv_buffer)
    {
        if(strlen($recv_buffer) < 10)
        {
            // 不够10字节，返回0继续等待数据
            return 0;
        }
        // 返回包长，包长包含 头部数据长度+包体长度
        $total_len = base_convert($json_str, 10, 10);
        return $total_len;
    }

    public static function decode($recv_buffer)
    {
        // 请求包体
        $body = substr($recv_buffer, 10);
        return simplexml_load_string($body);
    }

    public static function encode($xml_string)
    {
        // 包体+包头的长度
        $total_length = strlen($xml_string)+10;
        // 长度部分凑足10字节，位数不够补0
        $total_length_str = str_pad($total_length, 10, '0', STR_PAD_LEFT);
        // 返回数据
        return $total_length_str . $xml_string;
    }
}
```

## 例子二

### 协议定义
  * 首部4字节网络字节序unsigned int，标记整个包的长度
  * 数据部分为Json字符串

### 数据包样本
<pre>
****{"type":"message","content":"hello all"}
</pre>

其中首部四字节*号代表一个网络字节序的unsigned int数据，为不可见字符，紧接着是Json的数据格式的包体数据

### 协议实现
```php
namespace Protocols;
class JsonInt
{
    public static function input($recv_buffer)
    {
        // 接收到的数据还不够4字节，无法得知包的长度，返回0继续等待数据
        if(strlen($recv_buffer)<4)
        {
            return 0;
        }
        // 利用unpack函数将首部4字节转换成数字，首部4字节即为整个数据包长度
        $unpack_data = unpack('Ntotal_length', $recv_buffer);
        return $unpack_data['total_length'];
    }

    public static function decode($recv_buffer)
    {
        // 去掉首部4字节，得到包体Json数据
        $body_json_str = substr($recv_buffer, 4);
        // json解码
        return json_decode($body_json_str, true);
    }

    public static function encode($data)
    {
        // Json编码得到包体
        $body_json_str = json_encode($data);
        // 计算整个包的长度，首部4字节+包体字节数
        $total_length = 4 + strlen($body_json_str);
        // 返回打包的数据
        return $total_length . $body_json_str;
    }
}
```
