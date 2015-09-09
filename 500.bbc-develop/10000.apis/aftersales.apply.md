# ONEX B2B2C 商城API文档

## 售后相关API

### 创建售后服务(aftersales.apply)

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
| tid |  | int | required |  |  | 申请售后的订单编号 |
| oid |  | int | required |  |  | 申请售后的子订单编号 |
| reason |  | string | required |  |  | 申请售后原因 |
| description |  | string |  |  |  | 申请售后详细说明 |
| evidence_pic |  | string |  |  |  | 照片凭证,imageId逗号隔开,最多五张照片 |
| aftersales_type |  | int |  |  |  | 售后服务类型(ONLY_REFUND:只退款，REFUND_GOODS:退货退款，EXCHANGING_GOODS:换货) 默认为只退款 |


*返回内容示例

```



```

