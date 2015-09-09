# 商家对评论进行申诉(rate.appeal.add)

## 评价相关API

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
| rate_id |  | string | required |  |  | 需要申诉评论ID |
| is_again |  | bool |  |  |  | 是否为再次申诉，true再次申诉，false首次申诉 |
| appeal_type |  | string |  |  |  | 申诉类型(首次申诉必填)，APPLY_DELETE 申请删除评论;APPLY_UPDATE 申请修改评论 |
| content |  | string | required |  |  | 申诉内容 |
| evidence_pic |  | string |  |  |  | 申诉图片凭证 |


*返回内容示例

```



```

