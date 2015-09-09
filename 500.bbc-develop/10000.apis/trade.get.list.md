# 获取订单列表(trade.get.list)

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
| user_id |  | int |  |  |  | 订单所属用户id |
| shop_id |  | int |  |  |  | 订单所属店铺id |
| status |  | string |  |  |  | 订单状态 |
| buyer_rate |  | string |  |  |  | 订单评价状态 |
| tid |  | string |  |  |  | 订单编号,多个用逗号隔开 |
| create_time_start |  | string |  |  |  | 查询指定时间内的交易创建时间开始yyyy-MM-dd |
| create_time_end |  | string |  |  |  | 查询指定时间内的交易创建时间结束yyyy-MM-dd |
| page_no |  | int |  |  | 1 | 分页当前页码,1<=no<=499 |
| page_size |  | int |  |  | 40 | 分页每页条数(1<=size<=200) |
| order_by |  | int |  |  | created_time desc | 排序方式 |
| fields |  | field_list |  |  |  | 获取的交易字段集 |


*返回内容示例

```



```

