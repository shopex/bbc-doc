# ONEX B2B2C 商城API文档

## 用户相关API

### 用户密码找回和修改(user.pwd.update)

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
| type |  | int | required | reset | update | 类型形式(密码重置[reset]、密码修改[update])必填 |
| new_pwd |  | int | required |  |  | 新的密码6-20个字符，必填 |
| confirm_pwd |  | int | required |  |  | 新密码确认, 必填 |
| user_id |  | int |  |  | null | 用户名id |
| old_pwd |  | int |  |  | null | 原有密码(当类型形式type的值为update时，此值必填) |
| uname |  | int |  |  | null | 用户名 |


*返回内容示例

```



```

