# prism 初始化相关设置

- [设置路径](#setup-url)

<a name="setup-url"></a>
## 设置路径
> 在运营商后台-->系统菜单-->prism基础配置项中配置

## 设置参数
  - 是否启用prism
    开启、关闭
  - Prism地址(prismUrl)
    prism服务器的地址

>http://localhost:8080

  - 管理员Key(prismAdminKey)
    管理员的数据连接key，在prism第一次启动的时候可以看到，或者到prism后台管理员用户中心查看
    ```
    2015/04/27 14:26:06 [info] creating domain
    2015/04/27 14:26:06 [info] created user=admin, password="admin"
    2015/04/27 14:26:06 [info] created user[admin], Key="tkhhgpfo", Secret="47zwsqjtcj6d5svgpknq"
    ```

  - 管理员Secret(prismAdminSecret)
    同上
  - APP用户名(prismUserEmail)
    自定义值，api将由哪个用户创建
  - APP用户密码(prismUserPassword)
    自定义值，以后登录prism前台可以用该密码
  - APP用户密码确认(prismUserPassword)
    和上一条完全一样，防止输入错误导致该用户无法登录
  - APP前缀名称（prismAppName）
    bbc的相关app名称都将带这个值


## prism初始化操作步骤
  * 填写完成后先保存参数
  * 然后执行初始化
