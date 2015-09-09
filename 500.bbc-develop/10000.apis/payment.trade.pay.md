# 订单支付请求支付网关(payment.trade.pay)

## 电商工具相关API

### 

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
| payment_id |  | string | required |  |  | 支付单编号 |
| pay_app_id |  | string | required | alipay |  | 支付方式 |
| platform |  | string | required | pc | pc | 来源平台（wap、pc） |
| money |  | string | required | 234.50 |  | 支付金额 |
| user_id |  | string | required | 1 |  | 用户id |
| tids |  | string | required | 1241231213432,2354234523452 |  | 被支付的订单号集合,用逗号隔开 |


*返回内容示例

```



```

