# ONEX B2B2C 商城API文档

## 售后相关API

### 消费者回寄退货物流信息(aftersales.send.back)

* 系统参数

| *字段* | *标题* | *数据类型* | *验证条件* | *示例值* | *默认值* | *详细说明* |
| ------------- | ------------- | ------------- | ------------- | ------------- | ------------- | ------------- |
| method | API的方法名 | string | required | trade.get | null | 标识请求的是哪个API |
| timestamp | 请求时间 | unix时间戳 | required , numeric , > time()-300 | 1440596821 | null | 标识API请求的发起时间，如果超时300秒则拒绝请求 |
| format | 返回数据格式 | string | required | json | json | 返回数据是json格式的，目前只支持json |
| v | 版本号 | string | required | v1 | null | 标识该接口的版本 |
| sign_type | 签名方式 | string | required | MD5 | null | 标识签名算法 |
| sign | 签名 | string | required | AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA | null | 数据签名，32位长度16进制数字 |


* 业务参数

| *字段* | *标题* | *数据类型* | *验证条件* | *示例值* | *默认值* | *详细说明* |
| ------------- | ------------- | ------------- | ------------- | ------------- | ------------- | ------------- |
| aftersales_bn |  | string | required |  |  | 申请售后的订单编号 |
| user_id |  | string |  |  |  | 售后单所属店用户id |
| corp_code |  | int | required |  |  | 物流公司代码 |
| logi_name |  | string |  |  |  | 物流公司名称 |
| logi_no |  | string | required |  |  | 物流单号 |
| receiver_address |  | string |  |  |  | 换货发货地址 |
| mobile |  | string |  |  |  | 手机号 |


*返回内容示例

```



```

