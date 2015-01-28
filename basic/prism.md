# prism rpc

- [prism概念](#concept)
- [client端调用方式](#call-method)
- [server端API配置](#api-configuration)
- [server端API开发方式](#server-api)

<a name="basic-input"></a>
## prism概念

在luckymall系统中, 使用prism作为api管理中心. 以实现类soa的架构, 将服务和应用剥离开.

> **什么是prism** 便快捷的搭建自己的API管理中心，导入式的发布API流程，通过建立应用颁发Key和Secret管理API的分组和授权，
完善的流控机制，提供多纬度的统计和监控数据便于精准运营和管理自己的API，通过MQ实现完善的消息机制，支持第三方oauth登录，
提供全面的二次开发支持。

luckymall同时支持prism和非prism的方式. 当不使用prism的情况下, 会直接调用对应的api处理类.

<a name="call-method"></a>

##clint端调用方式

调用远程的方式
ou may need to read this to get an overview of the json structures that are used, although the heavy lifting is abstracted away by this implementation. For example, calling a method on a remote server is as simple as:

如果遇到错误会throw Exception.

```php
<?php
try
{
    $result = rpc::call('method', array('param1', 'param2'));
    var_dump($result);
}
catch (\LogicException $e)
{
    // 逻辑处理 
}
catch (\RunException $e)
{
    // 运行时错误处理
}
```

<a name="api-configuration"></a>
## server端API配置

luckymall所有预定义的api接口定义在`config/apis.php`, 如下例所示

```php
return array(
    # ...
    'routes' => array(
        # ...
        # syscategory
        'test.test' => ['uses' => 'syscategory_api_default@test', 'version'=>['v1', 'v2']],
        # ...
    ),
    # ...
);
```

<a name="server-api"></a>
# server端API开发方式

API写到`app/[app name]/api`目录下.
