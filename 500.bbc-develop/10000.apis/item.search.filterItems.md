# 根据搜索条件，列出渐进式的筛选项(item.search.filterItems)

## 商品相关API

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
| item_id |  | string |  | 2,3,5,6 |  | 商品id，多个id用，隔开 |
| shop_id |  | int |  |  |  | 店铺id |
| shop_cat_id |  | int |  |  |  | 店铺自有类目id |
| cat_id |  | int |  |  |  | 商城类目id |
| approve_status |  | string |  |  |  | 商品上架状态 |
| search_keywords |  | string |  |  |  | 搜索商品关键字 |
| use_platform |  | string |  | 1 | 0 | 商品使用平台(0=全部支持,1=仅支持pc端,2=仅支持wap端)如果查询不限制平台，则不需要传入该参数 |


*返回内容示例

```



```

