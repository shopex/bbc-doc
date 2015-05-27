# prism 初始化相关设置

- [设置路径](#setup-url)

<a name="setup-url"></a>
## 设置路径
> b2b2c/config/prism.php

<a name="setup-params"></a>
## 设置参数
  - 是否启用prism
  若开启，则api访问通过prism中转；若不开启，则在系统中直接调用

    开启、关闭

  - Prism地址(prismUrl)

    prism服务器的地址

    ```
    http://localhost:8080
    ```

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


<a name="setup-steps"></a>
## prism初始化操作步骤

填写好配置文件中的设置以后，命令行提供以下3条命令
```
system:prism init                     //初始化api信息到prism
system:prism forceinit               // 强制初始化api信息到prism（慎用）。如果系统因为之前同步过一次数据，prism上数据清空导致无法初始化，请执行此命令
system:prism update                  // 更新prism上的API数据
```

执行system:prism init即可自动初始化

当api更新以后，执行system:prism update，prism也会更新


