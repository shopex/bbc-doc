# ONEX B2B2C 商城API文档

## 物流相关API

### 运费模板添加(logistics.dlytmpl.add)

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
| name |  | string | required | 1 |  | 模板名称 |
| shop_id |  | int | required | 1 |  | 所属店铺id |
| corp_id |  | int | required | 1 |  | 关联的物流公司 |
| order_sort |  | int |  | 1 |  | 排序 |
| status |  | string |  | 1 |  | 模板状态 |
| valuation |  | string |  | 1 |  | 运费计算参数来源 |
| protect |  | string |  | 1 |  | 物流保价 |
| protect_rate |  | string |  | 1 |  | 保价费率 |
| minprice |  | string |  | 1 |  | 保价费最低值 |
| create_time |  | string |  | 1 |  | 模板添加时间 |
| fee_conf |  | json |  | 1 |  | 配送地区配置 |


*返回内容示例

```



```

