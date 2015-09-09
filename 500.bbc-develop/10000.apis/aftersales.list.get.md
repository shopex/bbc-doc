# ONEX B2B2C 商城API文档

## 售后相关API

### 获取售后列表(aftersales.list.get)

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
| user_id |  | int |  |  |  | 会员ID,user_id和shop_id必填一个 |
| shop_id |  | int |  |  |  | 店铺ID,user_id和shop_id必填一个 |
| tid |  | string |  |  |  | 订单编号 |
| title |  | string |  |  |  | 商品名称 |
| created_time |  | json_encode |  |  |  | 申请时间范围 |
| aftersales_bn |  | int |  |  |  | 退换货编号 |
| aftersales_type |  | string |  |  |  | 退换货类型 |
| progress |  | int |  |  |  | 退换货处理进度 |
| page_no |  | int |  |  |  | 分页当前页数,默认为1 |
| page_size |  | int |  |  |  | 每页数据条数,默认10条 |
| orderBy |  | string |  |  |  | 排序，默认modified_time desc |
| fields |  | field_list | required |  |  | 获取单条售后需要返回的字段 |


*返回内容示例

```



```

