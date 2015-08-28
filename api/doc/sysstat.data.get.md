# ONEX B2B2C 商城API文档

## 统计相关API

### 获取商家统计的数据(sysstat.data.get)

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
| inforType |  | string | required |  |  | 传入的类型 一共有4种（trade,tradecount,item,itemcount） |
| timeType |  | string | required |  |  | 传入的时间类型 一共有6种(yesterday,beforday,week,month,selecttime,select) |
| starttime |  | string |  |  |  | 起始时间段。如：2015/05/15-2015/05/15 |
| endtime |  | string |  |  |  | 结束时间段。如：2015/05/03-2015/05/03 |
| limit |  | int |  |  |  | 查询限制的条数 |
| start |  | int |  |  |  | 查询开始的条数 |
| orderBy |  | string |  |  |  | 查询按什么排序 |
| dataType |  | string |  |  |  | 获取的数据类型 |
| tradeType |  | string |  |  |  | 报表ajax请求的数据类型 |


*返回内容示例

```



```

