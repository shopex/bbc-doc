业务逻辑库(library)



业务逻辑库的类名采用下划线命名法, 并且只允许小写字母

library有两种命名规则, 一个是系统内置的核心libary库的命名规则(数量有限), 一个是通用的library的命名规则


= 核心library命名规则 =
这一类是系统内置的核心的library, 都放置在base app的lib/static目录下

- 业务逻辑库类名: {$filename}
- 业务逻辑库存放目录: app/base/lib/static
- 业务逻辑库文件名: {$filename}.php
- 业务逻辑库完整文件名: app/base/lib/static/{$filename}.php
- 控制器所在app: base

内置的核心library并不多, 罗列一下:

- app
- cachemgr
- lang
- modifiers
- service
- utils

因此可以看到如下用法:
```
<?php
$app = app::get($app);
```

```
<?php
$md5 = utils::array_md5($arr);
```


= 通用library命名规则 =

- 业务逻辑库类名: {$app_name}_{$dir_1}/{$dir_n}_{$filename}
- 业务逻辑库存放目录: app/{$app_name}/lib/{$dir_1}/{$dir_2}
- 业务逻辑库文件名: {$filename}.php
- 业务逻辑库完整文件名: app/{$app_name}/lib/{$dir_1}/{$dir_2}/{$filename}.php
- 控制器所在app: {$app_name}

看起来很晕吧, 来几个例子解脱一下

例1:
'''
- 业务逻辑库类名: base_application_dbtable
- 业务逻辑库存放目录: app/base/lib/application
- 业务逻辑库文件名: dbtable.php
- 业务逻辑库完整文件名: app/base/lib/application/dbtable.php
- 控制器所在app: base
'''
