# TODO

## 第一期
** todo
*** 流程整体走一遍
*** 初始化方案
**** 开发者初始化
***** prisum 基本安装
- 后台  https://github.com/shopex/prism-doc/blob/master/4.technical/3.operation/1.install.md
- 配置队列
***** prisum 前台申请 账号
***** 后台审批
***** prisum 前台申请开发者
***** 后台审批
***** prisum 前台申请api提供者
***** 后台审批
***** 获得开发者的key和secret
***** (开发者) 导入api接口       (*需要对时间*) 补接口
***** (开发者) 新建 app 接口 https://openapi.shopex.cn/my/profile/
  ***** (admin) 获取api接口 (唯一key) 补逻辑 机制 文档 (*需要对时间*)
***** (admin) 绑定app 和 API接口(流量)     补逻辑 机制 文档 (*需要对时间*)

  **** 开发者 创建应用 key
  **** 开发者 队列初始化
  - 文档
  https://openapi.shopex.cn/apis/db/prism-notify
  *** 更新方案
**** TODO 开发者  api更新 (*需要对时间*)
  **** admin  重新绑定app和api对应关系 refresh (*需要对时间*)  ?
  **** 开发者 queue 更新
  *** sdk
  **** TODO 错误处理机制


  **** TODO notify/queue
  **** request_id
  ***  server
  ** 时间表
  *** TODO sdk 时间 3-12 订 后续时间...
  *** TODO prism 流程改进 3-20 碰头

## 第二期
3.26------3.31

* prism创建初始化脚本
* - 生成admin的key和secret
* - 用admin的key和secret创建用户和app
*
* * prism admin的相关接口（未确认）
* - 创建待审批用户
* - 将用户成为开发者账号
* - 将用户成为api提供者
* - 将用户成为待审批用户
*
* - 上线api
* - 下线api
* - 获取api_list
*
* - 获取app列表
* - app绑定api
*
* * prism key相关接口
* - /api/platform/key/create 创建key接口
* - /api/platform/key/delete 删除key接口
* - /api/platform/key/info/{key} 查询key信息
* - /api/platform/key/list 获取app的key列表
*
* * prism导入api
* - /api/platform/service/import   导入api的接口
* - /api/platform/service/refresh 更新api接口
*
* * prism 应用接口
* - api/platform/app/create 应用创建
* - /api/platform/app/delete 应用删除
* - /api/platform/app/info/{app_id} 应用查询
* - /api/platform/app/list 应用列表
*
*
* =================================================
*
* * prism消息队列接口
* - 显示某个key的routing_key的绑定
* - key和routing_key的绑定

## 第三期(已完成)
在prism接口测试中，发现以下问题：
1、在实际操作中，api的上线需要由用户发起申请，管理员才能上线，但是没有api申请上线接口（已解决：定为管理员提供的上线接口可以直接上线api，而不需要用户申请）；
2、在api的接口中提到的“Id”字段对应的api的哪个参数（测试过api名称和api的json文件名，均不是）？
3、/api/platform/service/config/set接口中只传Id字段，应该还有对应的一个设置内容。
4、应用创建接口，app_id由客户端生成，会导致客户端不知道生成的id是否会与prism系统中其它的id重复。
5、应用创建接口，name为可空，会创建名称为空的的app。

## 第四期
- 继续完善流程文档
- 准备BBC
  * 切一条新线出来
  * composer引入prism_server和client
  * 了解原有API
  * 异常处理要同步掉
  * API对接的adapter

## 未排期
- prism在新版mongodb上的bug
- prism的Oauth对接接口的部分
