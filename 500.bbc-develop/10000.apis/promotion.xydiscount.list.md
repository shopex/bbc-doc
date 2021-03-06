# 获取多条X件Y折促销列表(promotion.xydiscount.list)

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
| page_no |  | int |  |  |  | 分页当前页数,默认为1 |
| page_size |  | int |  |  |  | 每页数据条数,默认10条 |
| fields |  | field_list |  |  |  | 需要的字段 |
| orderBy |  | string |  |  |  | 排序，默认created_time asc |
| shop_id |  | int | required |  |  | 店铺ID,user_id和shop_id必填一个 |
| xydiscount_id |  | int |  |  |  | X件Y折促销id |
| xydiscount_name |  | string |  |  |  | X件Y折促销名称 |
| xydiscount_status |  | int |  |  |  | X件Y折促销状态 |
| is_valid |  | int |  |  |  | 是否生效的X件Y折促销 |
| platform |  | int |  |  |  | X件Y折促销适用平台 |


*返回内容示例

```



```

