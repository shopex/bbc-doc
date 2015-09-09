# prism响应结果

## 数据格式
- 数据类型
  返回结果默认为json，当传入参数'format'的值为xml时，才返回xml格式的数据
  ```
{"error":{"code":"system.request.sign.signError","message":"sign error"},"result":null}
  ```
  error字段为错误内容，code字段为错误码，错误码以访问的接口开头。message字段对应错误的详细信息
  result字段对应返回内容

