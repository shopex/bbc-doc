# B2B2C开发文档
## 序言
- [简介](/preface/introduction.md)

## 约定
- [PHP编码规范](/agreement/php-convention.md)
- [LuckyMall编码规范](/agreement/luckymall-convention.md)
- [商派页面开发规范](/frontend/shopex-develop-standards.md)
- [前端编码规范](/frontend/frontend-coding-standards.md)

## ECOS3.0基本原则
- [简要说明](/principles/summarize.md)
- [目录结构](/principles/folder-structure.md)
- [app说明](/principles/app-desc.md)
- [命名规则]
  - [api](/principles/conventions/api-conventions.md)
  - [业务逻辑库(library)](/principles/conventions/library-conventions.md)
  - [数据库表,数据库表定义文件及模型命名规则](/principles/conventions/model-conventions.md)
  - [控制器类及文件命名规则](/principles/conventions/controller-conventions.md)
  - [视图文件命名规则](/principles/conventions/view-conventions.md)

## 基础
- [配置](/basic/configuration.md)
- [配置详细说明](/basic/configuration-detail.md)
- [通过composer引用第三方库](/basic/use-composer.md)
- [请求与输入](/basic/requests.md)
- [路由](/basic/routing.md)
- [Response](/basic/responses.md)
- [Facades](/basic/facades.md)
- [prism调用](/basic/prism.md)
- [validator验证](/basic/validator.md)
- [数据库]
  - 基本用法
  - [数据类型](/basic/database/types.md)
- [xhprof优化](/basic/xhprof.md)
- [图片]
  - [图片升级及其域名替换](/basic/image/image.md)
  - [图片分离方案]
    - [nfs方案]
    - [ttserver方案](/basic/image/ttserver.md)
    - [七牛方案](/basic/image/qiniu.md)


## 系统功能配置说明
- [搜索配置文档和使用方法](/basic/search.md)
- [前台样式用例说明](/frontend/styles-example.md)
- [前台脚本调用说明](/frontend/scripts-calling.md)

## 安装
- [系统依赖服务/组件](/deploy/dependence.md)
- [安装FAQ](/install/faq_bbc_install.md)
- [linux下安装](/install/linux_bbc_install.md)
- [windows下安装](/install/windows_bbc_install.md)
- [vagrant部署](/install/vagrant/index.md)
- [ONex B2b2c安装流程](/install/setup/setup.md)
- [ONex B2b2c激活流程](/install/setup/active.md)
- [ONex B2b2c单机打压部署](/install/linux_bbc_daya.md)
- [ONex B2b2c多机打压部署](/install/linux_bbc_jqdaya.md)

## misc
- [prism相关](/deploy/prism/index.md)
- [统计相关](/deploy/sysstat.md)

## DONE
- [LuckyMall浏览器兼容性说明:Z](/tasks/browser-compatible.md)
- [异常处理机制:B](/tasks/exception.md)
- [商家中心管理框架](/shop/basic.md)

## TODO
- [alias机制:B](/tasks/alias_mechanism.md)
- [routing:B](/tasks/configuration.md)

## 二次开发实践
- [新建自定义页面](/custom/newView.md)
- [API文档](/api/doc/index.md)
