# 获取参加活动的商品(promotion.activity.item.list)

## 促销相关API

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
| id |  | string |  |  |  | 主键id |
| activity_id |  | string |  |  |  | 活动id,多个用“,”隔开 |
| cat_id |  | string |  |  |  | 类目id,多个用“,”隔开 |
| item_id |  | string |  |  |  | 商品id，多个用“,”隔开 |
| status |  | string |  |  |  | 活动状态 |
| start_time |  | string |  | sthan |  | 与开始时间相比，大于或小于指定时间,值为(sthan、bthan) |
| end_time |  | string |  | bthan |  | 与开结束相比，大于或小于指定时间,值为(sthan、bthan) |
| time |  | string | date | 2015-14-04 20:30 |  | 指定时间(2015-14-04) |
| shop_id |  | int | int |  |  | 店铺id |
| page_no |  | int | int |  | 1 | 分页当前页码,1<=no<=499 |
| page_size |  | int | int |  | 40 | 分页每页条数(1<=size<=200) |
| order_by |  | int | string |  | item_id desc | 排序方式 |
| fields |  | field_list | string |  | activity_name | 查询字段 |


*返回内容示例

```



```

