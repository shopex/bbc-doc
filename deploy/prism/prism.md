# prism 部署

- [prism依赖](#prism-depend)
- [mongodb安装](#mongodb-install)
- [rabbitmq安装](#rabbitmq-install)
- [prism安装](#prism-install)
- [prism初始化](#prism-init)

<a name="prism-depend"></a>
## prism依赖

prism分为两部分，api管理和消息队列管理，如果仅仅需要启用api管理功能，需要安装mongodb，如果需要用到消息队列管理，则需要安装rabbitmq。

<a name="mongodb-install"></a>
## mongodb安装

mongodb需要2.4以及以下版本，新版本目前不支持。

mac下通过brew安装(2.4.12)：

```
brew install mongodb24
```

mongodb启动方法:

```
mongod --config /usr/local/etc/mongod.conf
```


<a name="rabbit-install"></a>
## rabbitmq安装
mac下通过brew安装(2.4.12)：

```
brew install rabbitmq
```

启动rabbitmq

```
sudo /usr/local/Cellar/rabbitmq/3.4.4/sbin/rabbitmq-server
```

打开http://localhost:15672/ 进入rabbitmq后台，输入用户名:guest，密码:guest登陆后台。
在admin页面下右侧栏选择“virtual host”，新建名为prism的vhost。


<a name="prism-install"></a>
## prism安装

解压prism的tar包

```
tar xvf prism.tar.gz
```

配置config

```
vim config/app.conf
```

```
[default]
appname = prism
runmode = dev
debug = prod
mongodb = 127.0.0.1
webapp_listen = :8080
super_listen = :8081
masterdomain = .local:8080
db_base = prism
db_stat = prism_stat
db_token = prism_token

oauth_backend = OAuthMysql

[notify]
notify_support = false
rabbitmq_server = amqp://127.0.0.1:5672
rabbitmq_user = guest
rabbitmq_password = guest
rabbitmq_vhost = prism
rabbitmq_web = http://127.0.0.1:15672/
```

不需要消息队列的话，notify_support要关掉。

运行prism.single就可以启动了。

```
./prism.single
```

前后台访问地址：
```
localhost:8080/
localhost:8080/admin/
```
后台默认用户名密码均为admin




<a name="prism-init"></a>
## prism初始化
* 获取prism的api添加权限
** 在prism前台注册开发者用户
** 后台审核通过
** 在prism前台登陆，并申请成为api提供者
** 在后台审核api提供者
* 添加接口
** 使用之前具有api提供者身份的账号登陆前台
** 在“我提供的Api”页面中添加新的api
** 在后台审核api上线
** 在前台创建app
** 在后台给app分配对应的api
** 在前台给app创建key，使用key即可调用prism对应的app包含的api



