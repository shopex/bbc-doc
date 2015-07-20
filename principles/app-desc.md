BBC的app目录说明

- sys***开头的app只提供基础服务，代码的
- top***开头的app是提供与用户交互界面，即调用各种sys*** app提供的基础服务
- 原ecos2.0时代每个app下都可能存在的控制器，现在只为平台端提供，即以sys***开头的app内会存在
- 原ecos2.0时代的前台控制器(controller/)默认都是放在聚合app下，如topc,topm,topshop
- 原ecos.20时代的前台页面(view/)默认都是放在聚合app下的view文件夹内
- 原ecos2.0时代每个app下都可能存在的dbschmea现在主要都放在sys***开头的app当中
- top***开头的app下默认不存放dbschema
- 其他不是按sys***,top***开头的app都是ecos基础框架app

- app类型在app.xml中声明
```
<app>
    <type>core</type>
</app>
```
| *APP类型*  | *说明*         |
| ------------- |:-------------:|
| core | 这类app为ec-os基础app，提供基础的架构 |
| service | 这类app为其它app提供服务，可以调用api，也可以提供api |
| site | 这类app是站点app，外部直接访问到这类app上，可以访问别的app的api |

| *APP名*  | *说明*         |
| ------------- |:-------------:|
| base | 框架基础app,基本的MVC框架。带有队列，key-value存储接口。类smarty的模版系统 |
| dbeav | 数据动态扩展，使用Entity-Attribute-Value模型动态扩展数据列，并提供数据回收站机制 |
| desktop | 设置管理员账户，提供一个带有权限和工作流的操作环境。 |
| ectools | 电商通用组件 |
| image | 图片存储系统 |
| importexport | 导入导出 |
| pam | 用户认证系统 |
| search | 分词索引 |
| serveradm | 服务器管理 |
| site | 站点管理 |
| sysaftersales | 售后服务功能 |
| syscategory | 类目属性系统，提供类目基本功能 |
| sysclearing | 商家结算系统，提供商家结算基本功能 |
| sysconf | 商城配置项模块，商城常用的配置项 |
| sysdecorate | 装修中心系统，提供店铺装修功能 |
| sysitem | 商品中心系统，提供商品基本功能 |
| syslogistics | 物流中心系统，提供物流基本功能 |
| syspromotion | 促销中心系统,提供促销基本功能 |
| sysrate | 评价系统,提供评价基本功能 |
| sysshop | 店铺中心系统,提供店铺基本功能 |
| sysstat | 统计模块，提供系统基本统计功能 |
| system | 系统模块，定时任务,队列... |
| systrade | 交易中心系统，提供交易基本功能 |
| sysuser | 用户中心系统，提供用户基本功能 |
| theme | 模板，shopex site 模板支持 |
| topc | 客户PC前端系统聚合app |
| topm | 客户移动端系统聚合app |
| topshop | 店铺业务管理聚合app |
| toputil | 店铺通用显示数据处理，方便不同端进行ajax调用等 |







