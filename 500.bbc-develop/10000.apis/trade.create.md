# 订单创建(trade.create)

## 交易相关API

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
| user_id |  | int | required |  |  | 会员id |
| user_name |  | int | required |  |  | 会员用户名 |
| addr_id |  | int | required |  |  | 收货地址 |
| payment_type |  | string | required | online | online | 支付途径,暂时只支持线上支付 |
| source_from |  | int | required | pc | pc | 订单来源 |
| shipping |  | string | required | 2:3;4:1;20:5 |  | 配送方式，规则为店铺id:配送模板id; |
| mode |  | int | required | cart | fastbuy | 购买方式,立即购买或加入购物车购买 |
| need_invoice |  | int |  |  |  | 是否要开发票 |
| invoice_type |  | int |  |  |  | 发票类型 |
| invoice_content |  | int |  |  |  | 发票内容 |
| invoice_title |  | int |  |  |  | 发票抬头 |


*返回内容示例

```



```

