# prism调用

- prism概念[#concept]
- 调用方式[#call-method]


<a name="basic-input"></a>
## prism概念

在luckymall系统中, 使用prism作为api管理中心. 以实现类soa的架构, 将服务和应用剥离开

> **什么是prism** 便快捷的搭建自己的API管理中心，导入式的发布API流程，通过建立应用颁发Key和Secret管理API的分组和授权，
完善的流控机制，提供多纬度的统计和监控数据便于精准运营和管理自己的API，通过MQ实现完善的消息机制，支持第三方oauth登录，
提供全面的二次开发支持。

<a name="call-method"></a>
##调用方式

```php
<?php
try
{
    rpc::call('method', array('param1', 'param2'));
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

