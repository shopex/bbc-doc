# ONEX B2B2C 商城API文档

## 店铺相关API

### 商家入驻申请更改(shop.update.enterapply)

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
| seller_id |  | int | required |  |  | 入驻申请编号 |
| shop_name |  | int | required |  |  | 申请店铺名称 |
| shop_type |  | int | required |  |  | 申请店铺类型{flag,brand,cat} |
| shopuser_name |  | int | required |  |  | 申请店铺店主名称 |
| company_name |  | int | required |  |  | 申请店铺公司名称 |
| shop |  | json | required |  |  | 店铺基本信息集合 |
| shop_info |  | json | required |  |  | 店铺详细信息集合 |


*返回内容示例

```



```

