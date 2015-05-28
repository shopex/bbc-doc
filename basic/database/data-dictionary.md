# BBC数据词典

- [数据库tables列表](#tables)
- [APP:base](#app-base-define)
    - [base_app_content](#table-base_app_content-define)
    - [base_apps](#table-base_apps-define)
    - [base_crontab](#table-base_crontab-define)
    - [base_kvstore](#table-base_kvstore-define)
    - [base_network](#table-base_network-define)
    - [base_rpcpoll](#table-base_rpcpoll-define)
    - [base_setting](#table-base_setting-define)
    - [base_syscache_resources](#table-base_syscache_resources-define)
  - [APP:dbeav](#app-dbeav-define)
  - [APP:desktop](#app-desktop-define)
    - [desktop_account](#table-desktop_account-define)
    - [desktop_filter](#table-desktop_filter-define)
    - [desktop_hasrole](#table-desktop_hasrole-define)
    - [desktop_menus](#table-desktop_menus-define)
    - [desktop_roles](#table-desktop_roles-define)
    - [desktop_tag](#table-desktop_tag-define)
    - [desktop_tag_rel](#table-desktop_tag_rel-define)
    - [desktop_users](#table-desktop_users-define)
  - [APP:dev](#app-dev-define)
  - [APP:ectools](#app-ectools-define)
    - [ectools_analysis](#table-ectools_analysis-define)
    - [ectools_analysis_logs](#table-ectools_analysis_logs-define)
    - [ectools_payments](#table-ectools_payments-define)
    - [ectools_refunds](#table-ectools_refunds-define)
  - [APP:entermembercenter](#app-entermembercenter-define)
  - [APP:image](#app-image-define)
    - [image_image](#table-image_image-define)
    - [image_image_attach](#table-image_image_attach-define)
  - [APP:importexport](#app-importexport-define)
    - [importexport_task](#table-importexport_task-define)
  - [APP:pam](#app-pam-define)
  - [APP:search](#app-search-define)
    - [search_associate](#table-search_associate-define)
    - [search_delta](#table-search_delta-define)
  - [APP:serveradm](#app-serveradm-define)
    - [serveradm_xhprof](#table-serveradm_xhprof-define)
  - [APP:setup](#app-setup-define)
  - [APP:site](#app-site-define)
    - [site_explorers](#table-site_explorers-define)
    - [site_link](#table-site_link-define)
    - [site_menus](#table-site_menus-define)
    - [site_seo](#table-site_seo-define)
    - [site_themes](#table-site_themes-define)
    - [site_themes_file](#table-site_themes_file-define)
    - [site_themes_tmpl](#table-site_themes_tmpl-define)
    - [site_widgets](#table-site_widgets-define)
    - [site_widgets_instance](#table-site_widgets_instance-define)
  - [APP:sysaftersales](#app-sysaftersales-define)
    - [sysaftersales_aftersales](#table-sysaftersales_aftersales-define)
    - [sysaftersales_refunds](#table-sysaftersales_refunds-define)
  - [APP:syscategory](#app-syscategory-define)
    - [syscategory_brand](#table-syscategory_brand-define)
    - [syscategory_cat](#table-syscategory_cat-define)
    - [syscategory_cat_rel_brand](#table-syscategory_cat_rel_brand-define)
    - [syscategory_cat_rel_prop](#table-syscategory_cat_rel_prop-define)
    - [syscategory_prop_values](#table-syscategory_prop_values-define)
    - [syscategory_props](#table-syscategory_props-define)
  - [APP:sysclearing](#app-sysclearing-define)
    - [sysclearing_settlement](#table-sysclearing_settlement-define)
    - [sysclearing_settlement_detail](#table-sysclearing_settlement_detail-define)
  - [APP:sysconf](#app-sysconf-define)
  - [APP:sysdecorate](#app-sysdecorate-define)
    - [sysdecorate_widgets_instance](#table-sysdecorate_widgets_instance-define)
  - [APP:sysitem](#app-sysitem-define)
    - [sysitem_item](#table-sysitem_item-define)
    - [sysitem_item_count](#table-sysitem_item_count-define)
    - [sysitem_item_desc](#table-sysitem_item_desc-define)
    - [sysitem_item_nature_props](#table-sysitem_item_nature_props-define)
    - [sysitem_item_status](#table-sysitem_item_status-define)
    - [sysitem_item_store](#table-sysitem_item_store-define)
    - [sysitem_item_tag_promotion](#table-sysitem_item_tag_promotion-define)
    - [sysitem_sku](#table-sysitem_sku-define)
    - [sysitem_sku_store](#table-sysitem_sku_store-define)
    - [sysitem_spec_index](#table-sysitem_spec_index-define)
  - [APP:syslogistics](#app-syslogistics-define)
    - [syslogistics_coupon](#table-syslogistics_coupon-define)
    - [syslogistics_delivery](#table-syslogistics_delivery-define)
    - [syslogistics_delivery_detail](#table-syslogistics_delivery_detail-define)
    - [syslogistics_dlycorp](#table-syslogistics_dlycorp-define)
    - [syslogistics_dlytmpl](#table-syslogistics_dlytmpl-define)
  - [APP:syspromotion](#app-syspromotion-define)
    - [syspromotion_coupon](#table-syspromotion_coupon-define)
    - [syspromotion_coupon_item](#table-syspromotion_coupon_item-define)
    - [syspromotion_fullminus](#table-syspromotion_fullminus-define)
    - [syspromotion_fullminus_item](#table-syspromotion_fullminus_item-define)
    - [syspromotion_promotions](#table-syspromotion_promotions-define)
  - [APP:sysrate](#app-sysrate-define)
    - [sysrate_appeal](#table-sysrate_appeal-define)
    - [sysrate_dsr](#table-sysrate_dsr-define)
    - [sysrate_score](#table-sysrate_score-define)
    - [sysrate_traderate](#table-sysrate_traderate-define)
  - [APP:sysshop](#app-sysshop-define)
    - [sysshop_account](#table-sysshop_account-define)
    - [sysshop_enterapply](#table-sysshop_enterapply-define)
    - [sysshop_seller](#table-sysshop_seller-define)
    - [sysshop_shop](#table-sysshop_shop-define)
    - [sysshop_shop_cat](#table-sysshop_shop_cat-define)
    - [sysshop_shop_info](#table-sysshop_shop_info-define)
    - [sysshop_shop_rel_brand](#table-sysshop_shop_rel_brand-define)
    - [sysshop_shop_rel_lv1cat](#table-sysshop_shop_rel_lv1cat-define)
    - [sysshop_shop_rel_seller](#table-sysshop_shop_rel_seller-define)
    - [sysshop_shop_type](#table-sysshop_shop_type-define)
  - [APP:sysstat](#app-sysstat-define)
    - [sysstat_item_statics](#table-sysstat_item_statics-define)
    - [sysstat_statmember](#table-sysstat_statmember-define)
    - [sysstat_trade_statics](#table-sysstat_trade_statics-define)
  - [APP:system](#app-system-define)
    - [system_matrixset](#table-system_matrixset-define)
    - [system_messenger_systmpl](#table-system_messenger_systmpl-define)
    - [system_prism_initstep](#table-system_prism_initstep-define)
    - [system_queue_mysql](#table-system_queue_mysql-define)
  - [APP:systrade](#app-systrade-define)
    - [systrade_cart](#table-systrade_cart-define)
    - [systrade_cart_coupon](#table-systrade_cart_coupon-define)
    - [systrade_log](#table-systrade_log-define)
    - [systrade_order](#table-systrade_order-define)
    - [systrade_promotion_detail](#table-systrade_promotion_detail-define)
    - [systrade_trade](#table-systrade_trade-define)
    - [systrade_tradeabnormal](#table-systrade_tradeabnormal-define)
  - [APP:sysuser](#app-sysuser-define)
    - [sysuser_account](#table-sysuser_account-define)
    - [sysuser_shop_fav](#table-sysuser_shop_fav-define)
    - [sysuser_trustinfo](#table-sysuser_trustinfo-define)
    - [sysuser_user](#table-sysuser_user-define)
    - [sysuser_user_addrs](#table-sysuser_user_addrs-define)
    - [sysuser_user_coupon](#table-sysuser_user_coupon-define)
    - [sysuser_user_experience](#table-sysuser_user_experience-define)
    - [sysuser_user_fav](#table-sysuser_user_fav-define)
    - [sysuser_user_grade](#table-sysuser_user_grade-define)
    - [sysuser_user_point](#table-sysuser_user_point-define)
    - [sysuser_user_pointlog](#table-sysuser_user_pointlog-define)
    - [sysuser_user_points](#table-sysuser_user_points-define)
    - [sysuser_user_trade_count](#table-sysuser_user_trade_count-define)
  - [APP:tags](#app-tags-define)
  - [APP:theme](#app-theme-define)
  - [APP:topc](#app-topc-define)
  - [APP:topm](#app-topm-define)
  - [APP:topshop](#app-topshop-define)
  - [APP:toputil](#app-toputil-define)
  ## [数据库tables列表]

| Table Name | Comment | 
| ------------- |-------------|
| base_app_content | app资源信息表, 记录app的service信息 |
| base_apps | 系统应用表 |
| base_crontab | 定时任务表 |
| base_kvstore | kvstore存储表 |
| base_network | 网络互联表 |
| base_rpcpoll | ec-rpc连接池表 |
| base_setting | setting存储表 |
| base_syscache_resources | kvstore存储表 |
| desktop_account | 用户权限账户表 |
| desktop_filter | 后台搜索过滤器表 |
| desktop_hasrole | 后台权限, 角色和用户关联表 |
| desktop_menus | 后台菜单表 |
| desktop_roles | 管理员角色表 |
| desktop_tag | finder tag(标签)表 |
| desktop_tag_rel | tag和对象关联表 |
| desktop_users | 商店后台管理员表 |
| ectools_analysis | ectools app统计表 |
| ectools_analysis_logs | ectools统计日志 |
| ectools_payments | 支付记录 |
| ectools_refunds | 退款单表 |
| image_image | 图片表 |
| image_image_attach | 图片关联表 |
| importexport_task | 导出、导入任务表 |
| search_associate |  |
| search_delta |  |
| serveradm_xhprof | xphrof |
| site_explorers | site地图表 |
| site_link | 前台链接表 |
| site_menus | 导航菜单表 |
| site_seo | 前台SEO配置表 |
| site_themes | 模板表 |
| site_themes_file | 模板文件表 |
| site_themes_tmpl | 页面模板表 |
| site_widgets | 挂件表 |
| site_widgets_instance | 挂件实例表 |
| sysaftersales_aftersales | 售后申请 |
| sysaftersales_refunds | 退款申请表 |
| syscategory_brand | 品牌表 |
| syscategory_cat | 类别属性值有限表 |
| syscategory_cat_rel_brand | 分类和品牌关联表 |
| syscategory_cat_rel_prop | 商品属性表 |
| syscategory_prop_values | 属性值表 |
| syscategory_props | 属性表 |
| sysclearing_settlement | 商家账号信息 |
| sysclearing_settlement_detail | 结算明细表 |
| sysdecorate_widgets_instance | 挂件实例表 |
| sysitem_item | 商品表 |
| sysitem_item_count | 商品次数表 |
| sysitem_item_desc | 商品详情表 |
| sysitem_item_nature_props | 商品自然属性信息表 |
| sysitem_item_status | 商品上下架状态表 |
| sysitem_item_store | 商品总库存表 |
| sysitem_item_tag_promotion | 商品关联的促销表 |
| sysitem_sku | 货品表 |
| sysitem_sku_store | 商品库存表 |
| sysitem_spec_index | 商品规格索引表 |
| syslogistics_coupon | 优惠券表 |
| syslogistics_delivery | 发货单表 |
| syslogistics_delivery_detail | 发货/退货单明细表 |
| syslogistics_dlycorp | 物流公司表 |
| syslogistics_dlytmpl | 快递模板配置表 |
| syspromotion_coupon | 优惠券表 |
| syspromotion_coupon_item | 商品与促销规则关联表 |
| syspromotion_fullminus | 满减促销规则表 |
| syspromotion_fullminus_item | 商品与促销规则关联表 |
| syspromotion_promotions | 各种促销关联表 |
| sysrate_appeal | 评论申诉表 |
| sysrate_dsr | 店铺动态评分统计表 |
| sysrate_score | 店铺评分表 |
| sysrate_traderate | 商品评分表 |
| sysshop_account | 商家会员表 |
| sysshop_enterapply | 入驻申请表 |
| sysshop_seller | 商家账号信息 |
| sysshop_shop | 店铺表 |
| sysshop_shop_cat | 店铺分类表 |
| sysshop_shop_info | 企业信息表 |
| sysshop_shop_rel_brand |  |
| sysshop_shop_rel_lv1cat | 店铺关联类目表 |
| sysshop_shop_rel_seller |  |
| sysshop_shop_type | 店铺类型表 |
| sysstat_item_statics |  |
| sysstat_statmember |  |
| sysstat_trade_statics |  |
| system_matrixset |  |
| system_messenger_systmpl | 邮件短信模板 |
| system_prism_initstep |  |
| system_queue_mysql | 队列-mysql实现表 |
| systrade_cart | 购物车 |
| systrade_cart_coupon | 购物车使用优惠券表 |
| systrade_log | 订单日志表 |
| systrade_order | 订单子表 |
| systrade_promotion_detail | 订单使用的促销信息表 |
| systrade_trade | 订单主表 |
| systrade_tradeabnormal | 取消异常订单表 |
| sysuser_account | 商城会员用户表 |
| sysuser_shop_fav |  |
| sysuser_trustinfo |  |
| sysuser_user | 商店会员表 |
| sysuser_user_addrs | 会员地址表 |
| sysuser_user_coupon | 用户优惠券表 |
| sysuser_user_experience | 会员经验值详细记录表 |
| sysuser_user_fav | 收藏/缺货登记 |
| sysuser_user_grade | 会员等级表 |
| sysuser_user_point | 会员积分值详细记录表 |
| sysuser_user_pointlog | 会员积分值明细表 |
| sysuser_user_points | 会员积分表 |
| sysuser_user_trade_count |  |

<a name="app-base-define"></a>
## app:base tables

<a name="table-base_app_content-define"></a>
## base_app_content
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  content_id | 序号 |  int(10) unsigned | Yes |  | Yes |
|  content_type | service类型(service_category和service) |  varchar(80) | Yes |  | No |
|  app_id | 应用的app_id |  varchar(32) | Yes |  | No |
|  content_name | service category name - service id |  varchar(80) | No |  | No |
|  content_title | optname |  varchar(100) | No |  | No |
|  content_path | class name只有type为service才有 |  varchar(255) | No |  | No |
|  ordernum |  |  smallint(6) | No | 50 | No |
|  input_time |  |  int(10) unsigned | No |  | No |
|  disabled | 是否有效 |  tinyint(1) | No | 0 | No |
- 主键 

| columnName |
| ------------- |
| content_id |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| ind_content_type | content_type | N |  |
<a name="table-base_apps-define"></a>
## base_apps
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  app_id |  |  varchar(32) | Yes |  | No |
|  app_name |  |  varchar(50) | No |  | No |
|  debug_mode |  |  tinyint(1) | No | 0 | No |
|  app_config |  |  longtext | No |  | No |
|  status |  |  varchar(11) | No | uninstalled | No |
|  webpath | 远程地址 |  varchar(20) | No |  | No |
|  description |  |  varchar(255) | No |  | No |
|  local_ver |  |  varchar(20) | No |  | No |
|  remote_ver |  |  varchar(20) | No |  | No |
|  author_name | 作者名 |  varchar(100) | No |  | No |
|  author_url | 作者url |  varchar(100) | No |  | No |
|  author_email | 作者邮件 |  varchar(100) | No |  | No |
|  dbver | 目前安装版本 |  varchar(32) | No |  | No |
|  remote_config | 远程配置信息 |  longtext | No |  | No |
- 主键 

| columnName |
| ------------- |
| app_id |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
<a name="table-base_crontab-define"></a>
## base_crontab
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  id |  |  varchar(100) | Yes |  | No |
|  description |  |  varchar(255) | Yes |  | No |
|  enabled |  |  tinyint(1) | Yes | 1 | No |
|  schedule |  |  varchar(255) | Yes |  | No |
|  last |  |  int(10) unsigned | Yes |  | No |
|  app_id |  |  varchar(32) | Yes |  | No |
|  class |  |  varchar(100) | Yes |  | No |
|  type |  |  varchar(6) | No |  | No |
- 主键 

| columnName |
| ------------- |
| id |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
<a name="table-base_kvstore-define"></a>
## base_kvstore
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  id | 序号 |  int(10) unsigned | Yes |  | Yes |
|  prefix | kvstore类型 |  varchar(255) | Yes |  | No |
|  key | kvstore存储的键值 |  varchar(255) | Yes |  | No |
|  value | kvstore存储值 |  longtext | No |  | No |
|  dateline | 存储修改时间 |  int(10) unsigned | No |  | No |
|  ttl | 过期时间,0代表不过期 |  int(10) unsigned | No | 0 | No |
- 主键 

| columnName |
| ------------- |
| id |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| ind_prefix | prefix | N |  |
| ind_key | key | N |  |
<a name="table-base_network-define"></a>
## base_network
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  node_id | 序号 |  int(10) unsigned | Yes |  | Yes |
|  node_name |  |  varchar(255) | Yes |  | No |
|  node_url |  |  varchar(100) | Yes |  | No |
|  node_api |  |  varchar(100) | Yes |  | No |
|  link_status |  |  varchar(6) | Yes | wait | No |
|  node_detail |  |  varchar(255) | No |  | No |
|  token |  |  varchar(32) | No |  | No |
- 主键 

| columnName |
| ------------- |
| node_id |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
<a name="table-base_rpcpoll-define"></a>
## base_rpcpoll
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  id |  |  varchar(32) | No |  | No |
|  process_id |  |  varchar(32) | No |  | No |
|  type |  |  varchar(8) | No |  | No |
|  calltime |  |  int(10) unsigned | No |  | No |
|  network |  |  int(10) unsigned | No |  | No |
|  method |  |  varchar(100) | No |  | No |
|  params | 请求和响应的参数(序列化) |  longtext | No |  | No |
|  callback |  |  varchar(200) | No |  | No |
|  callback_params |  |  longtext | No |  | No |
|  result |  |  longtext | No |  | No |
|  fail_times |  |  varchar(10) | Yes | 1 | No |
|  status |  |  varchar(6) | Yes | failed | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| ind_rpc_task_id | id,type,process_id | Y |  |
| ind_rpc_response_id | process_id | N |  |
<a name="table-base_setting-define"></a>
## base_setting
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  app | app名 |  varchar(50) | Yes |  | No |
|  key | setting键值 |  varchar(255) | Yes |  | No |
|  value | setting存储值 |  longtext | No |  | No |
- 主键 

| columnName |
| ------------- |
| app |
| key |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
<a name="table-base_syscache_resources-define"></a>
## base_syscache_resources
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  id | 序号 |  int(10) unsigned | Yes |  | Yes |
|  type | kvstore类型 |  varchar(255) | Yes |  | No |
|  key | kvstore存储的键值 |  varchar(255) | Yes |  | No |
|  value | kvstore存储值 |  longtext | No |  | No |
|  dateline | 存储修改时间 |  int(10) unsigned | No |  | No |
|  ttl | 过期时间,0代表不过期 |  int(10) unsigned | No | 0 | No |
- 主键 

| columnName |
| ------------- |
| id |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| ind_prefix | type | N |  |
| ind_key | key | N |  |
