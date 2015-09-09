# 商家审核售后服务(aftersales.check)

## 售后相关API

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
| aftersales_bn |  | string | required |  |  | 申请售后的编号 |
| shop_id |  | string | required |  |  | 售后单所属店铺的店铺id |
| check_result |  | string | required |  |  | 审核结果,同意或不同意,(true,false) |
| shop_explanation |  | string |  |  |  | 商家审核处理说明 |
| total_price |  | money |  |  |  | 退款金额 |
| refunds_reason |  | string |  |  |  | 退款申请原因 |


*返回内容示例

```



```

