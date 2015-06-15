# 配置

- [简介](#introduction)
- [增加新的配置项](#new-configuration-item)

<a name="introduction"></a>
## 咋玩

所有关于LuckyMall的配置文件都放在`app/config`目录里, 在安装后会挪到`config/production`目录里. 所有文件里的配置选项都有说明文档, 因此你可以轻松的查看这些文件, 并熟悉写配置项.

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
1. 配置是否需要由运营人员在, 在系统运行时修改? 如果是肯定的, 需要考量是否会对系统造成影响尤其是在集群部署环境下?
   1. 是否可以采用动态修改config值的方式?

如果都没问题, 那么可以采用config方式

#### 增加新的配置文件
查看`app/config`目录下是否存在相关配置文件, 如果不存在, 首先要建立新的配置文件

在系统安装时会将变更的文件copy到`config/production`目录下, 如果使用默认设置将不会做额外动作

为了避免`config`目录被污染, 需要将添加的文件放入`config/production/.gitignore`.

> **注意** config目录是用来放置本地的配置, 属于个性化数据, 因此不能提交到git中. 

#### 增加新的配置项
在`app/config/production`找到对应的配置文件进行修改

如果目录下没有, 需要从`app/config`下找到对应文件copy过来


