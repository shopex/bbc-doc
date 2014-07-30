# 配置

- [简介](#introduction)
- [增加新的配置项](#new-configuration-item)
- [历史兼容](#compatible)

<a name="introduction"></a>
## 简介

所有关于LuckyMall的配置文件都放在`app/base/examples/config`目录里, 在安装后会挪到`config`目录里. 所有文件里的配置选项都有说明文档, 因此你可以轻松的查看这些文件, 并熟悉写配置项.

> **兼容** 系统前身ecstore中的`config/config.php`被取消掉. 不再采用常量定义的方式. 有部分常量定义被挪到`compatible.php`中, 会陆续搬出.


当你需要在运行访问配置项时, 可以使用`config`类：

#### 获取一个配置项的值

     config::get('app.timezone');

如果配置项不存在，你还可以指定返回的默认值:

    $timezone = config::get('app.timezone', 8);

配置项获取支持任何节点, 因此可以这样做, 获取一个数组:

    config::get('app);

#### 为配置项赋值
注意"点"式语法可以用来访问不同文件里的配置项的值。你还可以在运行时为配置项赋值:

	config::set('database.host, '127.0.0.1');

在程序运行时设置的配置值只在本次请求中有效，不会对以后的请求造成影响。

<a name="new-configuration-item"></a>

## 增加新的配置项
#### 采用setting还是config机制
需要考虑几方面的考量:

1. 配置项是否是应该存在框架中的?
1. 配置是否真的需要
1. 

#### 增加新的配置文件
查看`app/base/examples/config`目录下是否存在相关配置文件, 如果不存在, 首先要建立新的配置文件

在系统安装时会将文件copy到`config`目录下

为了避免`config`目录被污染, 需要将添加的文件放入`config/.gitignore`.

> **注意** config目录是用来放置本地的配置, 属于个性化数据, 因此不能提交到git中. 

#### 增加新的配置项
在`app/base/examples/config`找到对应的配置文件进行修改

<a name="compatible"></a>




