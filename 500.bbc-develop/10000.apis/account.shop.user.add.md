# 创建商家子账号(account.shop.user.add)

## 店铺相关API

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
| login_account |  | string | required | 1 |  | 子帐号登录用户名 |
| login_password |  | string | required | 1 |  | 子帐号密码 |
| psw_confirm |  | string | required | 1 |  | 子帐号确认密码 |
| shop_id |  | int | required | 1 |  | 店铺id |
| role_id |  | string | required | 1 |  | 子帐号绑定角色ID |
| name |  | string | required | 李二 |  | 姓名 |
| mobile |  | string | required | 13918765432 |  | 手机号 |
| email |  | string | required | example@shopex.cn |  | 邮箱 |


*返回内容示例

```



```

