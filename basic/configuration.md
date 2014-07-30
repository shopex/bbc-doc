# 配置

- [简介](#introduction)

<a name="introduction"></a>
## 简介

所有关于LuckyMall的配置文件都放在`config`目录里. 所有文件里的配置选项都有说明文档, 因此你可以轻松的查看这些文件, 并熟悉写配置项.

当你需要在运行访问配置项时, 可以使用`config`类：

#### 获取一个配置项的值

     config::get('app.timezone');

如果配置项不存在，你还可以指定返回的默认值:

    $timezone = config::get('app.timezone', 8);

#### 为配置项赋值
注意"点"式语法可以用来访问不同文件里的配置项的值。你还可以在运行时为配置项赋值。:

	config::set('database.host, '127.0.0.1');

在程序运行时设置的配置值只在本次请求中有效，不会对以后的请求造成影响。




    
