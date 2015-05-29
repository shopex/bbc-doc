# BBC数据词典

- [数据库tables列表](#tables)
- [APP:base](#app-base-define)
  - [base_app_content(app资源信息表, 记录app的service信息)](#table-base_app_content-define)
  - [base_apps(系统应用表)](#table-base_apps-define)
  - [base_crontab(定时任务表)](#table-base_crontab-define)
  - [base_kvstore(kvstore存储表)](#table-base_kvstore-define)
  - [base_network(网络互联表)](#table-base_network-define)
  - [base_rpcpoll(ec-rpc连接池表)](#table-base_rpcpoll-define)
  - [base_setting(setting存储表)](#table-base_setting-define)
  - [base_syscache_resources(kvstore存储表)](#table-base_syscache_resources-define)
- [APP:desktop](#app-desktop-define)
  - [desktop_account(用户权限账户表)](#table-desktop_account-define)
  - [desktop_filter(后台搜索过滤器表)](#table-desktop_filter-define)
  - [desktop_hasrole(后台权限, 角色和用户关联表)](#table-desktop_hasrole-define)
  - [desktop_menus(后台菜单表)](#table-desktop_menus-define)
  - [desktop_roles(管理员角色表)](#table-desktop_roles-define)
  - [desktop_tag(finder tag(标签)表)](#table-desktop_tag-define)
  - [desktop_tag_rel(tag和对象关联表)](#table-desktop_tag_rel-define)
  - [desktop_users(商店后台管理员表)](#table-desktop_users-define)
- [APP:ectools](#app-ectools-define)
  - [ectools_analysis(ectools app统计表)](#table-ectools_analysis-define)
  - [ectools_analysis_logs(ectools统计日志)](#table-ectools_analysis_logs-define)
  - [ectools_payments(支付记录)](#table-ectools_payments-define)
  - [ectools_refunds(退款单表)](#table-ectools_refunds-define)
- [APP:image](#app-image-define)
  - [image_image(图片表)](#table-image_image-define)
  - [image_image_attach(图片关联表)](#table-image_image_attach-define)
- [APP:importexport](#app-importexport-define)
  - [importexport_task(导出、导入任务表)](#table-importexport_task-define)
- [APP:search](#app-search-define)
  - [search_associate()](#table-search_associate-define)
  - [search_delta()](#table-search_delta-define)
- [APP:serveradm](#app-serveradm-define)
  - [serveradm_xhprof(xphrof)](#table-serveradm_xhprof-define)
- [APP:site](#app-site-define)
  - [site_explorers(site地图表)](#table-site_explorers-define)
  - [site_link(前台链接表)](#table-site_link-define)
  - [site_menus(导航菜单表)](#table-site_menus-define)
  - [site_seo(前台SEO配置表)](#table-site_seo-define)
  - [site_themes(模板表)](#table-site_themes-define)
  - [site_themes_file(模板文件表)](#table-site_themes_file-define)
  - [site_themes_tmpl(页面模板表)](#table-site_themes_tmpl-define)
  - [site_widgets(挂件表)](#table-site_widgets-define)
  - [site_widgets_instance(挂件实例表)](#table-site_widgets_instance-define)
- [APP:sysaftersales](#app-sysaftersales-define)
  - [sysaftersales_aftersales(售后申请)](#table-sysaftersales_aftersales-define)
  - [sysaftersales_refunds(退款申请表)](#table-sysaftersales_refunds-define)
- [APP:syscategory](#app-syscategory-define)
  - [syscategory_brand(品牌表)](#table-syscategory_brand-define)
  - [syscategory_cat(类别属性值有限表)](#table-syscategory_cat-define)
  - [syscategory_cat_rel_brand(分类和品牌关联表)](#table-syscategory_cat_rel_brand-define)
  - [syscategory_cat_rel_prop(商品属性表)](#table-syscategory_cat_rel_prop-define)
  - [syscategory_prop_values(属性值表)](#table-syscategory_prop_values-define)
  - [syscategory_props(属性表)](#table-syscategory_props-define)
- [APP:sysclearing](#app-sysclearing-define)
  - [sysclearing_settlement(商家账号信息)](#table-sysclearing_settlement-define)
  - [sysclearing_settlement_detail(结算明细表)](#table-sysclearing_settlement_detail-define)
- [APP:sysdecorate](#app-sysdecorate-define)
  - [sysdecorate_widgets_instance(挂件实例表)](#table-sysdecorate_widgets_instance-define)
- [APP:sysitem](#app-sysitem-define)
  - [sysitem_item(商品表)](#table-sysitem_item-define)
  - [sysitem_item_count(商品次数表)](#table-sysitem_item_count-define)
  - [sysitem_item_desc(商品详情表)](#table-sysitem_item_desc-define)
  - [sysitem_item_nature_props(商品自然属性信息表)](#table-sysitem_item_nature_props-define)
  - [sysitem_item_status(商品上下架状态表)](#table-sysitem_item_status-define)
  - [sysitem_item_store(商品总库存表)](#table-sysitem_item_store-define)
  - [sysitem_item_tag_promotion(商品关联的促销表)](#table-sysitem_item_tag_promotion-define)
  - [sysitem_sku(货品表)](#table-sysitem_sku-define)
  - [sysitem_sku_store(商品库存表)](#table-sysitem_sku_store-define)
  - [sysitem_spec_index(商品规格索引表)](#table-sysitem_spec_index-define)
- [APP:syslogistics](#app-syslogistics-define)
  - [syslogistics_coupon(优惠券表)](#table-syslogistics_coupon-define)
  - [syslogistics_delivery(发货单表)](#table-syslogistics_delivery-define)
  - [syslogistics_delivery_detail(发货/退货单明细表)](#table-syslogistics_delivery_detail-define)
  - [syslogistics_dlycorp(物流公司表)](#table-syslogistics_dlycorp-define)
  - [syslogistics_dlytmpl(快递模板配置表)](#table-syslogistics_dlytmpl-define)
- [APP:syspromotion](#app-syspromotion-define)
  - [syspromotion_coupon(优惠券表)](#table-syspromotion_coupon-define)
  - [syspromotion_coupon_item(商品与促销规则关联表)](#table-syspromotion_coupon_item-define)
  - [syspromotion_fullminus(满减促销规则表)](#table-syspromotion_fullminus-define)
  - [syspromotion_fullminus_item(商品与促销规则关联表)](#table-syspromotion_fullminus_item-define)
  - [syspromotion_promotions(各种促销关联表)](#table-syspromotion_promotions-define)
- [APP:sysrate](#app-sysrate-define)
  - [sysrate_appeal(评论申诉表)](#table-sysrate_appeal-define)
  - [sysrate_dsr(店铺动态评分统计表)](#table-sysrate_dsr-define)
  - [sysrate_score(店铺评分表)](#table-sysrate_score-define)
  - [sysrate_traderate(商品评分表)](#table-sysrate_traderate-define)
- [APP:sysshop](#app-sysshop-define)
  - [sysshop_account(商家会员表)](#table-sysshop_account-define)
  - [sysshop_enterapply(入驻申请表)](#table-sysshop_enterapply-define)
  - [sysshop_seller(商家账号信息)](#table-sysshop_seller-define)
  - [sysshop_shop(店铺表)](#table-sysshop_shop-define)
  - [sysshop_shop_cat(店铺分类表)](#table-sysshop_shop_cat-define)
  - [sysshop_shop_info(企业信息表)](#table-sysshop_shop_info-define)
  - [sysshop_shop_rel_brand()](#table-sysshop_shop_rel_brand-define)
  - [sysshop_shop_rel_lv1cat(店铺关联类目表)](#table-sysshop_shop_rel_lv1cat-define)
  - [sysshop_shop_rel_seller()](#table-sysshop_shop_rel_seller-define)
  - [sysshop_shop_type(店铺类型表)](#table-sysshop_shop_type-define)
- [APP:sysstat](#app-sysstat-define)
  - [sysstat_item_statics()](#table-sysstat_item_statics-define)
  - [sysstat_statmember()](#table-sysstat_statmember-define)
  - [sysstat_trade_statics()](#table-sysstat_trade_statics-define)
- [APP:system](#app-system-define)
  - [system_matrixset()](#table-system_matrixset-define)
  - [system_messenger_systmpl(邮件短信模板)](#table-system_messenger_systmpl-define)
  - [system_prism_initstep()](#table-system_prism_initstep-define)
  - [system_queue_mysql(队列-mysql实现表)](#table-system_queue_mysql-define)
- [APP:systrade](#app-systrade-define)
  - [systrade_cart(购物车)](#table-systrade_cart-define)
  - [systrade_cart_coupon(购物车使用优惠券表)](#table-systrade_cart_coupon-define)
  - [systrade_log(订单日志表)](#table-systrade_log-define)
  - [systrade_order(订单子表)](#table-systrade_order-define)
  - [systrade_promotion_detail(订单使用的促销信息表)](#table-systrade_promotion_detail-define)
  - [systrade_trade(订单主表)](#table-systrade_trade-define)
  - [systrade_tradeabnormal(取消异常订单表)](#table-systrade_tradeabnormal-define)
- [APP:sysuser](#app-sysuser-define)
  - [sysuser_account(商城会员用户表)](#table-sysuser_account-define)
  - [sysuser_shop_fav()](#table-sysuser_shop_fav-define)
  - [sysuser_trustinfo()](#table-sysuser_trustinfo-define)
  - [sysuser_user(商店会员表)](#table-sysuser_user-define)
  - [sysuser_user_addrs(会员地址表)](#table-sysuser_user_addrs-define)
  - [sysuser_user_coupon(用户优惠券表)](#table-sysuser_user_coupon-define)
  - [sysuser_user_experience(会员经验值详细记录表)](#table-sysuser_user_experience-define)
  - [sysuser_user_fav(收藏/缺货登记)](#table-sysuser_user_fav-define)
  - [sysuser_user_grade(会员等级表)](#table-sysuser_user_grade-define)
  - [sysuser_user_point(会员积分值详细记录表)](#table-sysuser_user_point-define)
  - [sysuser_user_pointlog(会员积分值明细表)](#table-sysuser_user_pointlog-define)
  - [sysuser_user_points(会员积分表)](#table-sysuser_user_points-define)
  - [sysuser_user_trade_count()](#table-sysuser_user_trade_count-define)

<a name="app-base-define"></a>
## app:base tables

<a name="table-base_app_content-define"></a>
## base_app_content
- 表结构
> **会员表**
> 会员表

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  content_id | 序号 |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  content_type | service类型(service_category和service) |  VARCHAR(80) | Yes |  | No |
|  app_id | 应用的app_id |  VARCHAR(32) | Yes |  | No |
|  content_name | service category name - service id |  VARCHAR(80) | No |  | No |
|  content_title | optname |  VARCHAR(100) | No |  | No |
|  content_path | class name只有type为service才有 |  VARCHAR(255) | No |  | No |
|  ordernum |  |  SMALLINT | No | 50 | No |
|  input_time |  |  INT UNSIGNED | No |  | No |
|  disabled | 是否有效 |  TINYINT(1) | No | 0 | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | content_id | Yes |  |
| ind_content_type | content_type | No |  |
<a name="table-base_apps-define"></a>
## base_apps
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  app_id |  |  VARCHAR(32) | Yes |  | No |
|  app_name |  |  VARCHAR(50) | No |  | No |
|  debug_mode |  |  TINYINT(1) | No | 0 | No |
|  app_config |  |  LONGTEXT | No |  | No |
|  status | installed:已安装, 未启动;resolved:已配置;starting:正在启动;active:运行中;stopping:正在关闭;uninstalled:尚未安装;installing:正在安装;broken:已损坏;paused:已暂停; |  VARCHAR(11) | No | uninstalled | No |
|  webpath | 远程地址 |  VARCHAR(20) | No |  | No |
|  description |  |  VARCHAR(255) | No |  | No |
|  local_ver |  |  VARCHAR(20) | No |  | No |
|  remote_ver |  |  VARCHAR(20) | No |  | No |
|  author_name | 作者名 |  VARCHAR(100) | No |  | No |
|  author_url | 作者url |  VARCHAR(100) | No |  | No |
|  author_email | 作者邮件 |  VARCHAR(100) | No |  | No |
|  dbver | 目前安装版本 |  VARCHAR(32) | No |  | No |
|  remote_config | 远程配置信息 |  LONGTEXT | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | app_id | Yes |  |
<a name="table-base_crontab-define"></a>
## base_crontab
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  id |  |  VARCHAR(100) | Yes |  | No |
|  description |  |  VARCHAR(255) | Yes |  | No |
|  enabled |  |  TINYINT(1) | Yes | 1 | No |
|  schedule |  |  VARCHAR(255) | Yes |  | No |
|  last |  |  INT UNSIGNED | Yes |  | No |
|  app_id |  |  VARCHAR(32) | Yes |  | No |
|  class |  |  VARCHAR(100) | Yes |  | No |
|  type | custom:客户自定义;system:系统内置; |  VARCHAR(6) | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | id | Yes |  |
<a name="table-base_kvstore-define"></a>
## base_kvstore
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  id | 序号 |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  prefix | kvstore类型 |  VARCHAR(255) | Yes |  | No |
|  key | kvstore存储的键值 |  VARCHAR(255) | Yes |  | No |
|  value | kvstore存储值 |  LONGTEXT | No |  | No |
|  dateline | 存储修改时间 |  INT UNSIGNED | No |  | No |
|  ttl | 过期时间,0代表不过期 |  INT UNSIGNED | No | 0 | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | id | Yes |  |
| ind_prefix | prefix | No |  |
| ind_key | key | No |  |
<a name="table-base_network-define"></a>
## base_network
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  node_id | 序号 |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  node_name |  |  VARCHAR(255) | Yes |  | No |
|  node_url |  |  VARCHAR(100) | Yes |  | No |
|  node_api |  |  VARCHAR(100) | Yes |  | No |
|  link_status | active:正常;group:维护;wait:等待对方确认...; |  VARCHAR(6) | Yes | wait | No |
|  node_detail |  |  VARCHAR(255) | No |  | No |
|  token |  |  VARCHAR(32) | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | node_id | Yes |  |
<a name="table-base_rpcpoll-define"></a>
## base_rpcpoll
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  id |  |  VARCHAR(32) | No |  | No |
|  process_id |  |  VARCHAR(32) | No |  | No |
|  type | request:发出请求;response:接收的请求; |  VARCHAR(8) | No |  | No |
|  calltime |  |  INT UNSIGNED | No |  | No |
|  network |  |  INT UNSIGNED | No |  | No |
|  method |  |  VARCHAR(100) | No |  | No |
|  params | 请求和响应的参数(序列化) |  LONGTEXT | No |  | No |
|  callback |  |  VARCHAR(200) | No |  | No |
|  callback_params |  |  LONGTEXT | No |  | No |
|  result |  |  LONGTEXT | No |  | No |
|  fail_times |  |  VARCHAR(10) | Yes | 1 | No |
|  status | succ:成功;failed:失败; |  VARCHAR(6) | Yes | failed | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| ind_rpc_task_id | id, type, process_id | Yes |  |
| ind_rpc_response_id | process_id | No |  |
<a name="table-base_setting-define"></a>
## base_setting
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  app | app名 |  VARCHAR(50) | Yes |  | No |
|  key | setting键值 |  VARCHAR(255) | Yes |  | No |
|  value | setting存储值 |  LONGTEXT | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | app, key | Yes |  |
<a name="table-base_syscache_resources-define"></a>
## base_syscache_resources
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  id | 序号 |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  type | kvstore类型 |  VARCHAR(255) | Yes |  | No |
|  key | kvstore存储的键值 |  VARCHAR(255) | Yes |  | No |
|  value | kvstore存储值 |  LONGTEXT | No |  | No |
|  dateline | 存储修改时间 |  INT UNSIGNED | No |  | No |
|  ttl | 过期时间,0代表不过期 |  INT UNSIGNED | No | 0 | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | id | Yes |  |
| ind_prefix | type | No |  |
| ind_key | key | No |  |
  
<a name="app-desktop-define"></a>
## app:desktop tables

<a name="table-desktop_account-define"></a>
## desktop_account
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  account_id | 账户序号ID |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  account_type | 账户类型(会员和管理员等) |  VARCHAR(30) | No |  | No |
|  login_name | 登录用户名 |  VARCHAR(100) | Yes |  | No |
|  login_password | 登录密码 |  VARCHAR(60) | Yes |  | No |
|  disabled |  |  TINYINT(1) | No | 0 | No |
|  createtime | 创建时间 |  INT UNSIGNED | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | account_id | Yes |  |
| ind_account | login_name, disabled | Yes |  |
<a name="table-desktop_filter-define"></a>
## desktop_filter
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  filter_id | finder过滤器ID |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  filter_name | 过滤条件名称 |  VARCHAR(20) | No |  | No |
|  user_id | 过滤器所属后台用户ID |  INT UNSIGNED | Yes |  | No |
|  model | 过滤器对应的model(表名) |  VARCHAR(100) | Yes |  | No |
|  filter_query | 过滤器对应的过滤条件 |  LONGTEXT | No |  | No |
|  ctl | 过滤器对应的controller(控制器) |  VARCHAR(100) | Yes |  | No |
|  app | 过滤器对应的app(应用) |  VARCHAR(50) | Yes |  | No |
|  act | 过滤器对应的act(方法) |  VARCHAR(50) | Yes |  | No |
|  create_time | 过滤器创建时间 |  INT UNSIGNED | Yes | 0 | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | filter_id | Yes |  |
<a name="table-desktop_hasrole-define"></a>
## desktop_hasrole
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  user_id | 后台用户ID |  INT UNSIGNED | Yes |  | No |
|  role_id | 角色ID |  INT UNSIGNED | Yes |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | user_id, role_id | Yes |  |
<a name="table-desktop_menus-define"></a>
## desktop_menus
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  menu_id | 后台菜单ID |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  menu_type | 菜单类型 |  VARCHAR(80) | Yes |  | No |
|  app_id | 所属app(应用)ID |  VARCHAR(32) | Yes |  | No |
|  workground | 顶级菜单 |  VARCHAR(200) | No |  | No |
|  menu_group | 菜单组 |  VARCHAR(200) | No |  | No |
|  menu_title | 菜单标题 |  VARCHAR(100) | No |  | No |
|  menu_path | 菜单对应执行的url路径 |  VARCHAR(255) | No |  | No |
|  disabled |  |  TINYINT(1) | No | 0 | No |
|  display | 是否显示 |  TINYINT(1) | No | 0 | No |
|  permission | 权限,有效显示范围 |  VARCHAR(80) | No |  | No |
|  addon | 额外信息 |  LONGTEXT | No |  | No |
|  target | 跳转 |  VARCHAR(10) | No |  | No |
|  menu_order | 排序 |  INT UNSIGNED | No | 0 | No |
|  parent | 父节点 |  VARCHAR(255) | No | 0 | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | menu_id | Yes |  |
| ind_menu_type | menu_type | No |  |
| ind_menu_path | menu_path | No |  |
| ind_menu_order | menu_order | No |  |
<a name="table-desktop_roles-define"></a>
## desktop_roles
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  role_id | 管理员角色ID |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  role_name |  |  VARCHAR(100) | Yes |  | No |
|  workground |  |  LONGTEXT | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | role_id | Yes |  |
<a name="table-desktop_tag-define"></a>
## desktop_tag
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  tag_id | tag ID |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  tag_name |  |  VARCHAR(20) | Yes |  | No |
|  tag_mode | normal:普通标签;filter:自动标签; |  VARCHAR(6) | Yes | normal | No |
|  app_id | app(应用)ID |  VARCHAR(32) | Yes |  | No |
|  tag_type |  |  VARCHAR(20) | Yes |  | No |
|  tag_abbr |  |  VARCHAR(150) | Yes |  | No |
|  tag_bgcolor |  |  VARCHAR(7) | Yes |  | No |
|  tag_fgcolor |  |  VARCHAR(7) | Yes |  | No |
|  tag_filter |  |  VARCHAR(255) | Yes |  | No |
|  rel_count | 关联的个数 |  INT UNSIGNED | Yes | 0 | No |
|  params |  |  LONGTEXT | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | tag_id | Yes |  |
| ind_type | tag_type | No |  |
| ind_name | tag_name | No |  |
<a name="table-desktop_tag_rel-define"></a>
## desktop_tag_rel
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  tag_id | tag ID |  INT UNSIGNED | Yes | 0 | No |
|  rel_id | 对象ID |  VARCHAR(32) | Yes | 0 | No |
|  app_id | app(应用)ID |  VARCHAR(32) | Yes |  | No |
|  tag_type | 标签对应的model(表) |  VARCHAR(20) | Yes |  | No |
|  last_modify |  |  INT UNSIGNED | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | tag_id, rel_id | Yes |  |
<a name="table-desktop_users-define"></a>
## desktop_users
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  user_id | 后台用户ID |  INT UNSIGNED | Yes |  | No |
|  status |  |  TINYINT(1) | Yes | 0 | No |
|  name |  |  VARCHAR(30) | No |  | No |
|  lastlogin |  |  INT UNSIGNED | Yes | 0 | No |
|  config | 配置信息 |  LONGTEXT | No |  | No |
|  favorite | 爱好 |  LONGTEXT | No |  | No |
|  super |  |  TINYINT(1) | Yes | 0 | No |
|  lastip | 上次登录ip |  VARCHAR(20) | No |  | No |
|  logincount |  |  INT UNSIGNED | Yes | 0 | No |
|  disabled |  |  TINYINT(1) | Yes | 0 | No |
|  op_no | 操作员no |  VARCHAR(50) | No |  | No |
|  memo |  |  LONGTEXT | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | user_id | Yes |  |
| ind_disabled | disabled | No |  |
  
<a name="app-ectools-define"></a>
## app:ectools tables

<a name="table-ectools_analysis-define"></a>
## ectools_analysis
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  id | ectools统计ID |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  service | 对应的service |  VARCHAR(80) | Yes |  | No |
|  interval | hour:hour;day:day;comment:执行监控间隔时间; |  VARCHAR(7) | Yes |  | No |
|  modify | 最后修改时间 |  INT UNSIGNED | Yes | 0 | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | id | Yes |  |
<a name="table-ectools_analysis_logs-define"></a>
## ectools_analysis_logs
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  id | ectools统计日志ID |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  analysis_id | ectools统计ID |  INT UNSIGNED | Yes |  | No |
|  type |  |  INT UNSIGNED | Yes | 0 | No |
|  target |  |  INT UNSIGNED | Yes | 0 | No |
|  flag |  |  INT UNSIGNED | Yes | 0 | No |
|  value |  |  DOUBLE PRECISION | Yes | 0 | No |
|  time |  |  INT UNSIGNED | Yes |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | id | Yes |  |
| ind_analysis_id | analysis_id | No |  |
| ind_type | type | No |  |
| ind_target | target | No |  |
| ind_time | time | No |  |
<a name="table-ectools_payments-define"></a>
## ectools_payments
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  payment_id | 支付单号 |  VARCHAR(20) | Yes |  | No |
|  tids | 订单id集 |  LONGTEXT | Yes |  | No |
|  money | 需要支付的金额 |  NUMERIC(20, 3) | Yes | 0 | No |
|  trade_own_money | 订单自有的金额 |  LONGTEXT | No |  | No |
|  cur_money | 支付货币金额 |  NUMERIC(20, 3) | Yes | 0 | No |
|  status | succ:支付成功;failed:支付失败;cancel:未支付;error:处理异常;invalid:非法参数;progress:已付款至担保方;timeout:超时;ready:准备中; |  VARCHAR(8) | Yes | ready | No |
|  pay_type | online:在线支付; |  VARCHAR(6) | Yes | online | No |
|  payment_bn | 支付单唯一编号 |  VARCHAR(32) | No |  | No |
|  pay_app_id | 支付方式名称 |  VARCHAR(100) | No |  | No |
|  user_id | 会员用户名 |  VARCHAR(100) | No |  | No |
|  pay_name | 支付方式名 |  VARCHAR(100) | No |  | No |
|  payed_time | 支付完成时间 |  INT UNSIGNED | No |  | No |
|  op_id | 操作员 |  INT UNSIGNED | No |  | No |
|  account | 收款账号 |  VARCHAR(50) | No |  | No |
|  bank | 收款银行 |  VARCHAR(50) | No |  | No |
|  pay_account | 支付账户 |  VARCHAR(50) | No |  | No |
|  currency | 货币 |  VARCHAR(10) | No |  | No |
|  paycost | 支付网关费用 |  NUMERIC(20, 3) | No |  | No |
|  pay_ver | 支付版本号 |  VARCHAR(50) | No |  | No |
|  ip | 支付IP |  VARCHAR(20) | No |  | No |
|  created_time | 支付单创建时间 |  INT UNSIGNED | No |  | No |
|  modified_time | 最后更新时间 |  INT UNSIGNED | No |  | No |
|  memo | 支付注释 |  LONGTEXT | No |  | No |
|  return_url | 支付返回地址 |  VARCHAR(100) | No |  | No |
|  disabled | 支付单状态 |  TINYINT(1) | No | 0 | No |
|  trade_no | 支付单交易编号 |  VARCHAR(30) | No |  | No |
|  thirdparty_account | 第三方支付账户 |  VARCHAR(50) | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | payment_id | Yes |  |
| ind_disabled | disabled | No |  |
<a name="table-ectools_refunds-define"></a>
## ectools_refunds
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  refund_id |  |  VARCHAR(20) | Yes |  | No |
|  money |  |  NUMERIC(20, 3) | Yes | 0 | No |
|  cur_money |  |  NUMERIC(20, 3) | Yes | 0 | No |
|  refund_bank |  |  VARCHAR(50) | No |  | No |
|  refund_account |  |  VARCHAR(50) | No |  | No |
|  refund_people |  |  VARCHAR(100) | No |  | No |
|  receive_bank |  |  VARCHAR(50) | No |  | No |
|  receive_account |  |  VARCHAR(50) | No |  | No |
|  beneficiary |  |  VARCHAR(50) | No |  | No |
|  currency |  |  VARCHAR(10) | No | CNY | No |
|  paycost |  |  NUMERIC(20, 3) | No |  | No |
|  pay_type | online:在线支付;offline:线下支付; |  VARCHAR(7) | Yes | offline | No |
|  status | succ:支付成功;failed:支付失败;cancel:未支付;error:处理异常;invalid:非法参数;progress:处理中;timeout:超时;ready:准备中; |  VARCHAR(8) | Yes | ready | No |
|  pay_ver |  |  VARCHAR(50) | No |  | No |
|  op_id |  |  INT UNSIGNED | No |  | No |
|  aftersales_bn |  |  VARCHAR(32) | No |  | No |
|  pay_app_id |  |  VARCHAR(100) | Yes | 0 | No |
|  created_time |  |  INT UNSIGNED | No |  | No |
|  finish_time |  |  INT UNSIGNED | No |  | No |
|  confirm_time |  |  INT UNSIGNED | No |  | No |
|  memo | 备注 |  LONGTEXT | No |  | No |
|  oid | 交易子订单号 |  VARCHAR(30) | No |  | No |
|  tid | 交易主订单号 |  VARCHAR(30) | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | refund_id | Yes |  |
  
<a name="app-image-define"></a>
## app:image tables

<a name="table-image_image-define"></a>
## image_image
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  image_id |  |  CHAR(32) | Yes |  | No |
|  storage |  |  VARCHAR(50) | Yes | filesystem | No |
|  image_name |  |  VARCHAR(50) | No |  | No |
|  ident |  |  VARCHAR(200) | Yes |  | No |
|  url |  |  VARCHAR(200) | Yes |  | No |
|  l_ident | 大图唯一标识 |  VARCHAR(200) | No |  | No |
|  l_url | 大图URL地址 |  VARCHAR(200) | No |  | No |
|  m_ident | 中图唯一标识 |  VARCHAR(200) | No |  | No |
|  m_url | 中图URL地址 |  VARCHAR(200) | No |  | No |
|  s_ident | 小图唯一标识 |  VARCHAR(200) | No |  | No |
|  s_url | 小图URL地址 |  VARCHAR(200) | No |  | No |
|  width |  |  INT UNSIGNED | No |  | No |
|  height |  |  INT UNSIGNED | No |  | No |
|  watermark |  |  TINYINT(1) | No | 0 | No |
|  last_modified |  |  INT UNSIGNED | Yes | 0 | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | image_id | Yes |  |
<a name="table-image_image_attach-define"></a>
## image_image_attach
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  attach_id | 图片关联表ID |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  target_id | 对象id-外键 |  BIGINT UNSIGNED | Yes | 0 | No |
|  target_type | 用户类型 |  VARCHAR(20) | Yes | 0 | No |
|  image_id | 图片的主键-外键关联image表 |  CHAR(32) | Yes | 0 | No |
|  last_modified |  |  INT UNSIGNED | Yes | 0 | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | attach_id | Yes |  |
| index_1 | target_id, target_type | No |  |
  
<a name="app-importexport-define"></a>
## app:importexport tables

<a name="table-importexport_task-define"></a>
## importexport_task
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  task_id |  |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  name |  |  VARCHAR(255) | Yes |  | No |
|  message |  |  VARCHAR(255) | No |  | No |
|  filetype |  |  VARCHAR(20) | No |  | No |
|  create_date |  |  INT UNSIGNED | No |  | No |
|  complete_date |  |  INT UNSIGNED | No |  | No |
|  type | export:导出;import:导入; |  VARCHAR(6) | No |  | No |
|  status | 0:等待执行;1:正在导出;2:导出成功;3:导出失败;4:正在导入;5:导入成功;6:导入失败;7:中断;8:部分导入; |  VARCHAR(1) | No | 0 | No |
|  is_display | 0:隐藏;1:显示; |  VARCHAR(1) | No | 0 | No |
|  key |  |  VARCHAR(255) | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | task_id | Yes |  |
  
<a name="app-search-define"></a>
## app:search tables

<a name="table-search_associate-define"></a>
## search_associate
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  id |  |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  words |  |  VARCHAR(50) | Yes |  | No |
|  type_id |  |  INT UNSIGNED | No |  | No |
|  from_type |  |  VARCHAR(50) | No |  | No |
|  last_modify |  |  INT UNSIGNED | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | id | Yes |  |
| ind_last_modify | last_modify | No |  |
<a name="table-search_delta-define"></a>
## search_delta
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  id |  |  INT UNSIGNED | Yes |  | No |
|  index_name |  |  VARCHAR(50) | Yes |  | No |
|  last_modify |  |  INT UNSIGNED | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | id, index_name | Yes |  |
| ind_last_modify | last_modify | No |  |
  
<a name="app-serveradm-define"></a>
## app:serveradm tables

<a name="table-serveradm_xhprof-define"></a>
## serveradm_xhprof
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  run_id | run_id |  VARCHAR(100) | Yes |  | No |
|  source | source |  VARCHAR(50) | No |  | No |
|  app | app |  VARCHAR(30) | No |  | No |
|  ctl | controller |  VARCHAR(100) | No |  | No |
|  act | action |  VARCHAR(50) | No |  | No |
|  request_uri | request_uri |  VARCHAR(255) | No |  | No |
|  params |  |  LONGTEXT | No |  | No |
|  addtime |  |  INT UNSIGNED | No |  | No |
|  wt |  |  VARCHAR(80) | No |  | No |
|  mu |  |  INT UNSIGNED | No |  | No |
|  pmu |  |  INT UNSIGNED | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | run_id | Yes |  |
  
<a name="app-site-define"></a>
## app:site tables

<a name="table-site_explorers-define"></a>
## site_explorers
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  id | site地图表ID |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  app | 应用(app)名 |  VARCHAR(50) | Yes |  | No |
|  title |  |  VARCHAR(100) | Yes |  | No |
|  path | 路径 |  VARCHAR(100) | Yes |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | id | Yes |  |
<a name="table-site_link-define"></a>
## site_link
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  link_id | 链接ID |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  link_name |  |  VARCHAR(128) | Yes |  | No |
|  href |  |  VARCHAR(255) | Yes |  | No |
|  image_url |  |  VARCHAR(255) | No |  | No |
|  orderlist |  |  INT UNSIGNED | Yes | 0 | No |
|  hidden |  |  TINYINT(1) | Yes | 0 | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | link_id | Yes |  |
<a name="table-site_menus-define"></a>
## site_menus
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  id | 导航菜单表 |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  title |  |  VARCHAR(100) | Yes |  | No |
|  app |  |  VARCHAR(50) | No |  | No |
|  ctl |  |  VARCHAR(50) | No |  | No |
|  act |  |  VARCHAR(50) | No |  | No |
|  custom_url |  |  VARCHAR(200) | No |  | No |
|  display_order |  |  SMALLINT | Yes | 0 | No |
|  target_blank |  |  TINYINT(1) | Yes | 0 | No |
|  hidden |  |  TINYINT(1) | Yes | 0 | No |
|  params |  |  LONGTEXT | No |  | No |
|  config |  |  LONGTEXT | No |  | No |
|  update_modified | 更新时间 |  INT UNSIGNED | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | id | Yes |  |
<a name="table-site_seo-define"></a>
## site_seo
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  id | ID |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  app | 应用(app) |  VARCHAR(50) | Yes |  | No |
|  ctl |  |  VARCHAR(50) | Yes |  | No |
|  act |  |  VARCHAR(50) | Yes |  | No |
|  title |  |  VARCHAR(50) | Yes |  | No |
|  config |  |  LONGTEXT | No |  | No |
|  param |  |  LONGTEXT | No |  | No |
|  update_modified | 更新时间 |  INT UNSIGNED | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | id | Yes |  |
<a name="table-site_themes-define"></a>
## site_themes
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  theme | 主题唯一英文名称 |  VARCHAR(50) | Yes |  | No |
|  name | 主题名称 |  VARCHAR(50) | No |  | No |
|  platform | pc:电脑端;wap:无线端; |  VARCHAR(3) | Yes | pc | No |
|  stime | 开始使用时间 |  INT UNSIGNED | No |  | No |
|  author |  |  VARCHAR(50) | No |  | No |
|  site |  |  VARCHAR(100) | No |  | No |
|  version |  |  VARCHAR(50) | No |  | No |
|  info | 详细说明 |  VARCHAR(255) | No |  | No |
|  config | 配置信息 |  LONGTEXT | No |  | No |
|  is_used | 是否启用 |  TINYINT(1) | No | 0 | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | theme | Yes |  |
<a name="table-site_themes_file-define"></a>
## site_themes_file
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  id | 模板文件ID |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  platform | pc:电脑端;wap:无线端; |  VARCHAR(3) | Yes | pc | No |
|  filename | 文件名 |  VARCHAR(255) | No |  | No |
|  filetype | 文件扩展名 |  VARCHAR(30) | No |  | No |
|  fileuri | 文件路径标识,包括模板名. [theme name]:[filename] |  VARCHAR(255) | No |  | No |
|  version | 版本号 |  INT UNSIGNED | No |  | No |
|  theme | 模板名标识 |  VARCHAR(50) | No |  | No |
|  memo | 备注 |  VARCHAR(100) | No |  | No |
|  content | 文件内容 |  LONGTEXT | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | id | Yes |  |
<a name="table-site_themes_tmpl-define"></a>
## site_themes_tmpl
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  id | 页面模板ID |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  platform | pc:电脑端;wap:无线端; |  VARCHAR(3) | Yes | pc | No |
|  tmpl_type | 对应前台页面标示符 |  VARCHAR(20) | Yes |  | No |
|  tmpl_name | 名称 |  VARCHAR(30) | Yes |  | No |
|  tmpl_path | 页面路径 |  VARCHAR(100) | Yes |  | No |
|  theme | 对应模板 |  VARCHAR(20) | Yes |  | No |
|  rel_file_id | 关联模板文件表:site_themes_file |  INT UNSIGNED | Yes |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | id | Yes |  |
<a name="table-site_widgets-define"></a>
## site_widgets
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  id | 挂件ID |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  app | 如果是系统挂件, 此字段为应用名. 如果是模板挂件此字段为空 |  VARCHAR(30) | Yes |  | No |
|  theme | 如果是模板级挂件, 此字段为模板名. 如果是系统挂件此字段为空 |  VARCHAR(30) | Yes |  | No |
|  name | 挂件名 |  VARCHAR(30) | Yes |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | id | Yes |  |
| ind_uniq | app, theme, name | No |  |
<a name="table-site_widgets_instance-define"></a>
## site_widgets_instance
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  widgets_id | 挂件实例ID |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  core_file | 挂件挂在模版的页面 |  VARCHAR(50) | Yes |  | No |
|  core_slot | 模版中提供给挂件位置序号 |  SMALLINT UNSIGNED | Yes | 0 | No |
|  core_id | 位置的ID |  VARCHAR(20) | No |  | No |
|  widgets_type | 所属挂件的名称 |  VARCHAR(30) | Yes |  | No |
|  app | 所属的应用 |  VARCHAR(30) | No |  | No |
|  theme | 模版的名称 |  VARCHAR(30) | No |  | No |
|  widgets_order | 挂件顺序 |  SMALLINT UNSIGNED | Yes | 5 | No |
|  title | 挂件自定义标题 |  VARCHAR(100) | No |  | No |
|  domid | 挂件id |  VARCHAR(100) | No |  | No |
|  classname | css class name |  VARCHAR(100) | No |  | No |
|  tpl | 模版的名称 |  VARCHAR(100) | No |  | No |
|  params | 配置参数 |  LONGTEXT | No |  | No |
|  modified | 修改时间 |  INT UNSIGNED | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | widgets_id | Yes |  |
| ind_wgbase | core_file, core_id, widgets_order | No |  |
| ind_wginfo | core_file, core_slot, widgets_order | No |  |
  
<a name="app-sysaftersales-define"></a>
## app:sysaftersales tables

<a name="table-sysaftersales_aftersales-define"></a>
## sysaftersales_aftersales
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  aftersales_bn |  |  BIGINT UNSIGNED | Yes |  | No |
|  user_id |  |  INT UNSIGNED | Yes |  | No |
|  shop_id | 店铺ID |  INT UNSIGNED | No |  | No |
|  aftersales_type | ONLY_REFUND:仅退款;REFUND_GOODS:退货退款;EXCHANGING_GOODS:换货; |  VARCHAR(16) | Yes | ONLY_REFUND | No |
|  progress | 0:等待商家处理;1:商家接受申请，等待消费者回寄;2:消费者回寄，等待商家收货确认;3:商家已驳回;4:商家已处理;5:商家确认收货，同意退款,提交到平台,等待平台处理;6:平台驳回退款申请;7:平台已处理退款申请; |  VARCHAR(1) | Yes | 0 | No |
|  status | 0:待处理;1:处理中;2:已处理;3:已驳回; |  VARCHAR(1) | Yes | 0 | No |
|  tid |  |  BIGINT UNSIGNED | Yes |  | No |
|  oid |  |  BIGINT UNSIGNED | Yes |  | No |
|  title |  |  VARCHAR(60) | Yes |  | No |
|  num |  |  INT UNSIGNED | No |  | No |
|  reason |  |  VARCHAR(255) | No |  | No |
|  description | 申请描述 |  VARCHAR(255) | No |  | No |
|  evidence_pic | 图片凭证信息 |  VARCHAR(255) | No |  | No |
|  shop_explanation | 商家处理申请说明 |  VARCHAR(255) | No |  | No |
|  admin_explanation | 平台处理申请说明 |  VARCHAR(255) | No |  | No |
|  sendback_data | 消费者提交退货物流信息 |  LONGTEXT | No |  | No |
|  sendconfirm_data | 商家重新发货物流信息 |  LONGTEXT | No |  | No |
|  created_time |  |  INT UNSIGNED | No |  | No |
|  modified_time |  |  INT UNSIGNED | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | aftersales_bn | Yes |  |
<a name="table-sysaftersales_refunds-define"></a>
## sysaftersales_refunds
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  refunds_id | 退款申请ID |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  aftersales_bn |  |  BIGINT UNSIGNED | Yes |  | No |
|  refunds_type | 0:售后申请退款;1:商家取消异常订单退款; |  VARCHAR(1) | Yes | 0 | No |
|  status | 0:待处理;1:已处理;2:已驳回; |  VARCHAR(1) | Yes | 0 | No |
|  refunds_reason |  |  VARCHAR(255) | No |  | No |
|  total_price |  |  NUMERIC(20, 3) | No | 0 | No |
|  created_time |  |  INT UNSIGNED | No |  | No |
|  modified_time |  |  INT UNSIGNED | No |  | No |
|  user_id | 会员id |  INT UNSIGNED | No |  | No |
|  shop_id | 店铺id |  INT UNSIGNED | No |  | No |
|  tid | 该退款单的主订单号 |  LONGTEXT | No |  | No |
|  oid | 该退款单的订单号 |  LONGTEXT | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | refunds_id | Yes |  |
  
<a name="app-syscategory-define"></a>
## app:syscategory tables

<a name="table-syscategory_brand-define"></a>
## syscategory_brand
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  brand_id | 品牌id |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  brand_name | 品牌名称 |  VARCHAR(50) | Yes |  | No |
|  brand_alias | 品牌别名 |  VARCHAR(50) | No |  | No |
|  brand_url | 品牌网址(保留字段) |  VARCHAR(255) | No |  | No |
|  order_sort | 排序 |  INT UNSIGNED | No | 0 | No |
|  brand_desc | 品牌介绍(保留字段) |  LONGTEXT | No |  | No |
|  brand_logo | 品牌图片标识 |  VARCHAR(255) | No |  | No |
|  modified_time |  |  INT UNSIGNED | No |  | No |
|  disabled | 失效 |  TINYINT(1) | No | 0 | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | brand_id | Yes |  |
| ind_disabled | disabled | No |  |
| ind_ordernum | order_sort | No |  |
<a name="table-syscategory_cat-define"></a>
## syscategory_cat
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  cat_id | 分类ID |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  parent_id | 分类父级ID |  INT UNSIGNED | No |  | No |
|  cat_name |  |  VARCHAR(100) | Yes |  | No |
|  cat_path | 分类路径(从根至本结点的路径,逗号分隔,首部有逗号) |  VARCHAR(100) | No | , | No |
|  level | 1:一级分类;2:二级分类;3:三级分类; |  VARCHAR(1) | No | 1 | No |
|  is_leaf | 是否叶子结点（true：是；false：否） |  TINYINT(1) | Yes | 0 | No |
|  disabled | 是否屏蔽（true：是；false：否） |  TINYINT(1) | Yes | 0 | No |
|  addon | 附加项 |  LONGTEXT | No |  | No |
|  child_count | 子类别数量 |  INT UNSIGNED | Yes | 0 | No |
|  params | 参数表结构(序列化) array(参数组名=>array(参数名1=>别名1|别名2,参数名2=>别名1|别名2)) |  LONGTEXT | No |  | No |
|  guarantee_money |  |  NUMERIC(20, 3) | No | 0 | No |
|  platform_fee |  |  NUMERIC(20, 3) | No | 0 | No |
|  cat_service_rates |  |  NUMERIC(20, 3) | No | 0 | No |
|  order_sort |  |  INT UNSIGNED | No | 0 | No |
|  modified_time |  |  INT UNSIGNED | No |  | No |
|  cat_template | 类目对应的模板 |  VARCHAR(50) | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | cat_id | Yes |  |
<a name="table-syscategory_cat_rel_brand-define"></a>
## syscategory_cat_rel_brand
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  cat_id | 商品分类ID |  INT UNSIGNED | Yes | 0 | No |
|  brand_id | 品牌ID |  INT UNSIGNED | Yes | 0 | No |
|  order_sort | 排序 |  INT UNSIGNED | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | cat_id, brand_id | Yes |  |
<a name="table-syscategory_cat_rel_prop-define"></a>
## syscategory_cat_rel_prop
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  prop_id | 属性ID |  INT UNSIGNED | Yes | 0 | No |
|  cat_id | 分类ID |  INT UNSIGNED | Yes | 0 | No |
|  order_sort |  |  INT UNSIGNED | Yes | 0 | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | prop_id, cat_id | Yes |  |
<a name="table-syscategory_prop_values-define"></a>
## syscategory_prop_values
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  prop_value_id | 属性值ID |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  prop_id | 属性ID |  INT UNSIGNED | Yes | 0 | No |
|  prop_value | 属性值 |  VARCHAR(100) | Yes |  | No |
|  prop_image | 属性图片 |  CHAR(32) | No |  | No |
|  order_sort | 排序 |  INT UNSIGNED | Yes | 0 | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | prop_value_id | Yes |  |
<a name="table-syscategory_props-define"></a>
## syscategory_props
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  prop_id | 属性id |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  prop_name |  |  VARCHAR(50) | Yes |  | No |
|  type |  |  VARCHAR(20) | No |  | No |
|  search |  |  VARCHAR(20) | Yes | select | No |
|  show | 是否显示 |  VARCHAR(10) | Yes |  | No |
|  is_def | 是否系统默认属性 |  TINYINT(1) | Yes | 0 | No |
|  show_type | text:文字;image:图片; |  VARCHAR(5) | Yes | text | No |
|  prop_type | spec:销售属性;nature:自然属性; |  VARCHAR(6) | Yes | spec | No |
|  prop_memo |  |  VARCHAR(50) | Yes |  | No |
|  order_sort |  |  INT UNSIGNED | Yes | 1 | No |
|  modified_time |  |  INT UNSIGNED | No |  | No |
|  disabled |  |  TINYINT(1) | Yes | 0 | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | prop_id | Yes |  |
  
<a name="app-sysclearing-define"></a>
## app:sysclearing tables

<a name="table-sysclearing_settlement-define"></a>
## sysclearing_settlement
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  settlement_no |  |  BIGINT UNSIGNED | Yes |  | No |
|  shop_id |  |  INT UNSIGNED | No |  | No |
|  tradecount |  |  INT UNSIGNED | Yes | 0 | No |
|  item_fee_amount |  |  NUMERIC(20, 3) | Yes | 0 | No |
|  post_fee_amount |  |  NUMERIC(20, 3) | Yes | 0 | No |
|  refund_fee_amount |  |  NUMERIC(20, 3) | No | 0 | No |
|  commission_fee_amount |  |  NUMERIC(20, 3) | No | 0 | No |
|  settlement_fee_amount |  |  NUMERIC(20, 3) | No | 0 | No |
|  settlement_status | 1:未结算;2:已结算; |  VARCHAR(1) | No | 1 | No |
|  account_start_time |  |  INT UNSIGNED | No |  | No |
|  account_end_time |  |  INT UNSIGNED | No |  | No |
|  settlement_time |  |  INT UNSIGNED | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | settlement_no | Yes |  |
<a name="table-sysclearing_settlement_detail-define"></a>
## sysclearing_settlement_detail
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  id | settlement_detail_id |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  oid | 子订单编号 |  BIGINT UNSIGNED | Yes |  | No |
|  tid | 订单编号 |  BIGINT UNSIGNED | Yes |  | No |
|  shop_id | 所属商家 |  INT UNSIGNED | Yes |  | No |
|  settlement_time |  |  INT UNSIGNED | No |  | No |
|  pay_time |  |  INT UNSIGNED | No |  | No |
|  item_id | 商品id |  INT UNSIGNED | Yes |  | No |
|  sku_id | 货品id |  INT UNSIGNED | Yes |  | No |
|  bn | 明细商品的编码 |  VARCHAR(45) | No |  | No |
|  title | 商品标题 |  VARCHAR(60) | Yes |  | No |
|  spec_nature_info | sku描述 |  LONGTEXT | No |  | No |
|  price | 商品价格 |  NUMERIC(20, 3) | No |  | No |
|  num | 购买数量 |  INT UNSIGNED | No |  | No |
|  sku_properties_name | SKU的值 |  VARCHAR(500) | No |  | No |
|  divide_order_fee | 分摊之后的实付金额 |  NUMERIC(20, 3) | No |  | No |
|  part_mjz_discount | 优惠分摊 |  NUMERIC(20, 3) | No |  | No |
|  payment | 实付金额 |  NUMERIC(20, 3) | No |  | No |
|  post_fee |  |  NUMERIC(20, 3) | Yes |  | No |
|  refund_fee |  |  NUMERIC(20, 3) | No |  | No |
|  cat_service_rate |  |  NUMERIC(20, 3) | No | 0 | No |
|  commission_fee |  |  NUMERIC(20, 3) | No |  | No |
|  settlement_fee |  |  NUMERIC(20, 3) | No |  | No |
|  settlement_type | 1:普通结算;2:运费结算;3:退款结算; |  VARCHAR(1) | No | 1 | No |
|  discount_fee | 子订单级订单优惠金额 |  NUMERIC(20, 3) | No |  | No |
|  adjust_fee | 手工调整金额 |  NUMERIC(20, 3) | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | id | Yes |  |
  
<a name="app-sysdecorate-define"></a>
## app:sysdecorate tables

<a name="table-sysdecorate_widgets_instance-define"></a>
## sysdecorate_widgets_instance
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  widgets_id | 挂件实例ID |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  shop_id |  |  INT UNSIGNED | Yes |  | No |
|  widgets_type | 所属挂件的名称 |  VARCHAR(30) | Yes |  | No |
|  theme | 模版的名称 |  VARCHAR(30) | No |  | No |
|  title | 挂件自定义标题 |  VARCHAR(100) | No |  | No |
|  params | 配置参数 |  LONGTEXT | No |  | No |
|  modified_time | 修改时间 |  INT UNSIGNED | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | widgets_id | Yes |  |
| ind_wgbase | shop_id, widgets_type | No |  |
  
<a name="app-sysitem-define"></a>
## app:sysitem tables

<a name="table-sysitem_item-define"></a>
## sysitem_item
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  item_id | item_id |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  shop_id | 店铺id |  INT UNSIGNED | Yes |  | No |
|  cat_id | 商品类目ID |  INT UNSIGNED | Yes |  | No |
|  brand_id | 品牌 |  INT UNSIGNED | Yes |  | No |
|  shop_cat_id | 商家自定义分类id |  VARCHAR(255) | Yes |  | No |
|  title | 商品标题 |  VARCHAR(60) | Yes |  | No |
|  sub_title | 商品子标题 |  VARCHAR(200) | No |  | No |
|  bn | bn |  VARCHAR(45) | Yes |  | No |
|  price | 商品价格 |  NUMERIC(20, 3) | Yes |  | No |
|  cost_price | 商品成本价格 |  NUMERIC(20, 3) | No |  | No |
|  mkt_price | 商品市场价格 |  NUMERIC(20, 3) | No |  | No |
|  weight | 商品重量 |  NUMERIC(20, 3) | Yes | 0 | No |
|  image_default_id | 商品默认图 |  VARCHAR(32) | No |  | No |
|  list_image | 商品图片 |  LONGTEXT | No |  | No |
|  store | 商品数量 |  INT UNSIGNED | Yes | 0 | No |
|  freez | 预扣库存 |  INT UNSIGNED | No |  | No |
|  order_sort | 排序 |  INT UNSIGNED | No | 0 | No |
|  modified_time | 商品最后更新时间 |  INT UNSIGNED | Yes |  | No |
|  has_discount | 是否支持会员打折 |  TINYINT(1) | No | 0 | No |
|  is_virtual | 是否是虚拟商品 |  TINYINT(1) | No | 0 | No |
|  is_timing | 是否定时上下架 |  TINYINT(1) | No | 0 | No |
|  violation | 是否违规 |  TINYINT(1) | No | 0 | No |
|  is_selfshop | 是否自营 |  TINYINT(1) | No | 0 | No |
|  nospec |  |  TINYINT(1) | Yes | 0 | No |
|  spec_desc | 销售属性序列化 |  LONGTEXT | No |  | No |
|  props_name | 商品属性 |  LONGTEXT | No |  | No |
|  params | 商品参数序列化 |  LONGTEXT | No |  | No |
|  sub_stock | 是否支持下单减库存 |  TINYINT(1) | No | 1 | No |
|  outer_id | 商家外部编码 |  VARCHAR(32) | No |  | No |
|  is_offline | 是否是线下商品 |  TINYINT(1) | No | 0 | No |
|  barcode | 商品级别的条形码 |  VARCHAR(128) | No |  | No |
|  disabled | disabled |  TINYINT(1) | Yes | 0 | No |
|  use_platform | 0:全部;1:pc端;2:wap端; |  VARCHAR(1) | No | 0 | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | item_id | Yes |  |
<a name="table-sysitem_item_count-define"></a>
## sysitem_item_count
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  item_id | 商品id |  INT UNSIGNED | Yes |  | No |
|  sold_quantity | 商品销量 |  INT UNSIGNED | No | 0 | No |
|  rate_count | 评论次数 |  INT UNSIGNED | Yes | 0 | No |
|  rate_good_count | 好评次数 |  INT UNSIGNED | Yes | 0 | No |
|  rate_neutral_count | 中评次数 |  INT UNSIGNED | Yes | 0 | No |
|  rate_bad_count | 差评次数 |  INT UNSIGNED | Yes | 0 | No |
|  view_count | 浏览次数 |  INT UNSIGNED | Yes | 0 | No |
|  buy_count | 购买次数 |  INT UNSIGNED | Yes | 0 | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | item_id | Yes |  |
<a name="table-sysitem_item_desc-define"></a>
## sysitem_item_desc
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  item_id | 商品id |  INT UNSIGNED | Yes |  | No |
|  pc_desc | 宝贝详情 |  LONGTEXT | No |  | No |
|  wap_desc | Wap宝贝详情 |  LONGTEXT | No |  | No |
|  wireless_desc | 无线端宝贝详情 |  LONGTEXT | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | item_id | Yes |  |
<a name="table-sysitem_item_nature_props-define"></a>
## sysitem_item_nature_props
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  item_id | 商品ID |  INT UNSIGNED | Yes | 0 | No |
|  prop_id | 自然属性ID |  INT UNSIGNED | Yes | 0 | No |
|  prop_value_id | 自然属性值ID |  INT UNSIGNED | Yes | 0 | No |
|  pv_type | select:下拉框select;text:输入值text; |  VARCHAR(6) | Yes | select | No |
|  pv_number |  |  INT UNSIGNED | No |  | No |
|  pv_str |  |  VARCHAR(255) | No |  | No |
|  modified_time |  |  INT UNSIGNED | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | item_id, prop_id | Yes |  |
<a name="table-sysitem_item_status-define"></a>
## sysitem_item_status
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  item_id | 商品 ID |  INT UNSIGNED | Yes |  | No |
|  shop_id | 店铺id |  INT UNSIGNED | Yes |  | No |
|  approve_status | onsale:出售中;instock:库中; |  VARCHAR(7) | Yes | instock | No |
|  list_time | 上架时间 |  INT UNSIGNED | No |  | No |
|  delist_time | 下架时间 |  INT UNSIGNED | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | item_id | Yes |  |
<a name="table-sysitem_item_store-define"></a>
## sysitem_item_store
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  item_id | 商品 ID |  INT UNSIGNED | Yes |  | No |
|  store | 总商品数量 |  INT UNSIGNED | Yes | 0 | No |
|  freez | sku预占库存总和 |  INT UNSIGNED | No | 0 | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | item_id | Yes |  |
<a name="table-sysitem_item_tag_promotion-define"></a>
## sysitem_item_tag_promotion
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  item_id | 商品ID |  INT UNSIGNED | Yes |  | No |
|  promotion_ids | 促销id信息 |  LONGTEXT | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | item_id | Yes |  |
<a name="table-sysitem_sku-define"></a>
## sysitem_sku
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  sku_id | sku_id |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  item_id | 商品id |  INT UNSIGNED | Yes |  | No |
|  title | 商品标题 |  VARCHAR(60) | Yes |  | No |
|  bn | 商品编号 |  VARCHAR(30) | Yes |  | No |
|  price | 商品价格 |  NUMERIC(20, 3) | Yes |  | No |
|  cost_price | 成本价 |  NUMERIC(20, 3) | No | 0 | No |
|  mkt_price | 市场价 |  NUMERIC(20, 3) | No | 0 | No |
|  barcode | 条形码 |  VARCHAR(32) | No |  | No |
|  weight | 商品重量 |  NUMERIC(20, 3) | Yes | 0 | No |
|  created_time | 创建时间 |  INT UNSIGNED | No |  | No |
|  modified_time | 最后更新时间 |  INT UNSIGNED | No |  | No |
|  properties | sku销售属性 |  LONGTEXT | No |  | No |
|  spec_info | 物品描述 |  LONGTEXT | No |  | No |
|  spec_desc |  |  LONGTEXT | No |  | No |
|  status | normal:正常;delete:删除; |  VARCHAR(6) | No | normal | No |
|  outer_id | 商家设置的外部id |  VARCHAR(32) | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | sku_id | Yes |  |
<a name="table-sysitem_sku_store-define"></a>
## sysitem_sku_store
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  item_id | 商品 ID |  INT UNSIGNED | Yes |  | No |
|  sku_id | sku ID |  INT UNSIGNED | Yes |  | No |
|  store | 商品数量 |  INT UNSIGNED | Yes | 0 | No |
|  freez | sku预占库存 |  INT UNSIGNED | No | 0 | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | item_id, sku_id | Yes |  |
<a name="table-sysitem_spec_index-define"></a>
## sysitem_spec_index
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  prop_value_id | 销售属性值ID |  INT UNSIGNED | Yes | 0 | No |
|  sku_id | sku ID |  INT UNSIGNED | Yes | 0 | No |
|  cat_id | 商品三级分类ID |  INT UNSIGNED | Yes | 0 | No |
|  prop_id | 销售属性ID |  INT UNSIGNED | Yes | 0 | No |
|  item_id | 商品ID |  INT UNSIGNED | Yes | 0 | No |
|  modified_time |  |  INT UNSIGNED | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | prop_value_id, sku_id | Yes |  |
  
<a name="app-syslogistics-define"></a>
## app:syslogistics tables

<a name="table-syslogistics_coupon-define"></a>
## syslogistics_coupon
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  cpns_id | 优惠券方案id |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  cpns_name | 优惠券名称 |  VARCHAR(255) | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | cpns_id | Yes |  |
<a name="table-syslogistics_delivery-define"></a>
## syslogistics_delivery
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  delivery_id | 配送流水号 |  BIGINT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  tid | 订单号 |  VARCHAR(100) | No |  | No |
|  user_id | 订货会员ID |  INT UNSIGNED | No |  | No |
|  seller_id | 商家账号 |  INT UNSIGNED | No |  | No |
|  shop_id | 商家ID |  INT UNSIGNED | No |  | No |
|  post_fee | 配送费用 |  NUMERIC(20, 3) | Yes | 0 | No |
|  is_protect | 是否保价 |  TINYINT(1) | Yes | 0 | No |
|  dlytmpl_id | 配送方式(货到付款、EMS...) |  INT UNSIGNED | No |  | No |
|  logi_id | 物流公司ID |  VARCHAR(50) | No |  | No |
|  logi_name | 物流公司名称 |  VARCHAR(100) | No |  | No |
|  corp_code | 物流公司代码 |  VARCHAR(200) | Yes |  | No |
|  logi_no | 物流单号 |  VARCHAR(50) | No |  | No |
|  receiver_name | 收货人姓名 |  VARCHAR(50) | No |  | No |
|  receiver_state | 收货人所在省 |  VARCHAR(20) | No |  | No |
|  receiver_city | 收货人所在市 |  VARCHAR(20) | No |  | No |
|  receiver_district | 收货人所在地区 |  VARCHAR(20) | No |  | No |
|  receiver_address | 收货人详细地址 |  VARCHAR(200) | No |  | No |
|  receiver_zip | 收货人邮编 |  VARCHAR(20) | No |  | No |
|  receiver_mobile | 收货人手机号 |  VARCHAR(20) | No |  | No |
|  receiver_phone | 收货人电话 |  VARCHAR(20) | No |  | No |
|  t_begin | 单据生成时间 |  INT UNSIGNED | No |  | No |
|  t_send | 单据结束时间 |  INT UNSIGNED | No |  | No |
|  t_confirm | 单据确认时间 |  INT UNSIGNED | No |  | No |
|  op_name | 操作者 |  VARCHAR(50) | No |  | No |
|  status | succ:成功到达;failed:发货失败;cancel:已取消;lost:货物丢失;progress:运送中;timeout:超时;ready:准备发货; |  VARCHAR(8) | Yes | ready | No |
|  memo | 备注 |  LONGTEXT | No |  | No |
|  disabled | 无效 |  TINYINT(1) | No | 0 | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | delivery_id | Yes |  |
| ind_disabled | disabled | No |  |
| ind_logi_no | logi_no | No |  |
<a name="table-syslogistics_delivery_detail-define"></a>
## syslogistics_delivery_detail
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  detail_id | 序号 |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  delivery_id | 发货单号 |  BIGINT UNSIGNED | Yes | 0 | No |
|  oid | 发货明细子订单号 |  BIGINT UNSIGNED | No | 0 | No |
|  item_type | item:商品;gift:赠品;pkg:捆绑商品;adjunct:配件商品; |  VARCHAR(7) | Yes | item | No |
|  sku_id | SKU ID |  BIGINT UNSIGNED | Yes | 0 | No |
|  sku_bn | sku编号 |  VARCHAR(30) | No |  | No |
|  sku_title | sku名称 |  VARCHAR(200) | No |  | No |
|  number | 发货数量 |  DOUBLE PRECISION | Yes | 0 | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | detail_id | Yes |  |
<a name="table-syslogistics_dlycorp-define"></a>
## syslogistics_dlycorp
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  corp_id | 物流公司ID |  SMALLINT AUTO_INCREMENT | Yes |  | Yes |
|  corp_code | 物流公司代码 |  VARCHAR(200) | Yes |  | No |
|  full_name | 物流公司全名 |  VARCHAR(200) | No |  | No |
|  corp_name | 物流公司简称 |  VARCHAR(200) | Yes |  | No |
|  website | 物流公司网址 |  VARCHAR(100) | No |  | No |
|  request_url | 查询接口网址 |  VARCHAR(100) | No |  | No |
|  order_sort | 排序 |  INT UNSIGNED | Yes | 0 | No |
|  custom |  |  TINYINT(1) | No | 0 | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | corp_id | Yes |  |
| ind_corp_code | corp_code | No |  |
<a name="table-syslogistics_dlytmpl-define"></a>
## syslogistics_dlytmpl
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  template_id |  |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  shop_id |  |  INT UNSIGNED | Yes |  | No |
|  name |  |  VARCHAR(50) | No |  | No |
|  valuation | 0:按件数;1:按重量;2:按体积; |  VARCHAR(1) | No | 1 | No |
|  corp_id | 物流公司ID |  INT UNSIGNED | No |  | No |
|  order_sort |  |  INT UNSIGNED | No | 0 | No |
|  protect |  |  TINYINT(1) | Yes | 0 | No |
|  protect_rate | 保价费率 |  NUMERIC(6, 3) | No |  | No |
|  minprice | 保价费最低值 |  NUMERIC(10, 2) | Yes | 0.00 | No |
|  status | off:关闭;on:启用; |  VARCHAR(3) | No | on | No |
|  fee_conf | 运费模板中运费信息对象，包含默认运费和指定地区运费 |  LONGTEXT | No |  | No |
|  create_time | 创建时间 |  INT UNSIGNED | No |  | No |
|  modifie_time | 最后修改时间 |  INT UNSIGNED | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | template_id | Yes |  |
| ind_shop_temp_id | shop_id, template_id | No |  |
| ind_shop_id | shop_id | No |  |
  
<a name="app-syspromotion-define"></a>
## app:syspromotion tables

<a name="table-syspromotion_coupon-define"></a>
## syspromotion_coupon
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  coupon_id | 优惠券方案id |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  shop_id | 所属商家的店铺id |  INT UNSIGNED | Yes |  | No |
|  coupon_name | 优惠券名称 |  VARCHAR(255) | Yes |  | No |
|  coupon_desc | 优惠券描述 |  VARCHAR(255) | Yes |  | No |
|  used_platform | 0:商家全场可用;1:只能用于pc;2:只能用于wap; |  VARCHAR(1) | Yes | 0 | No |
|  valid_grade |  |  VARCHAR(255) | Yes |  | No |
|  limit_money | 满足条件金额 |  NUMERIC(20, 3) | No | 0 | No |
|  deduct_money | 优惠金额 |  NUMERIC(20, 3) | No | 0 | No |
|  max_gen_quantity | 最大优惠券号码数量 |  INT UNSIGNED | No | 0 | No |
|  send_couponcode_quantity | 已生成的优惠券号码数量 |  INT UNSIGNED | No | 0 | No |
|  userlimit_quantity | 用户总计可领取优惠券数量 |  INT UNSIGNED | No | 0 | No |
|  use_bound | 0:商家全场可用;1:指定商品可用; |  VARCHAR(1) | No | 0 | No |
|  coupon_prefix | 优惠券前缀 |  VARCHAR(50) | Yes |  | No |
|  coupon_key | 优惠券生成的key |  VARCHAR(20) | Yes |  | No |
|  cansend_start_time | 发优惠券开始时间 |  INT UNSIGNED | No |  | No |
|  cansend_end_time | 发优惠券结束时间 |  INT UNSIGNED | No |  | No |
|  canuse_start_time | 优惠券生效时间 |  INT UNSIGNED | No |  | No |
|  canuse_end_time | 优惠券失效时间 |  INT UNSIGNED | No |  | No |
|  created_time | 建券时间 |  INT UNSIGNED | No |  | No |
|  promotion_tag | 促销标签 |  VARCHAR(15) | Yes |  | No |
|  coupon_status | pending:待审核;agree:审核通过;refuse:审核拒绝;cancel:已取消; |  VARCHAR(7) | Yes | agree | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | coupon_id | Yes |  |
<a name="table-syspromotion_coupon_item-define"></a>
## syspromotion_coupon_item
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  coupon_id | 优惠券ID |  INT UNSIGNED | Yes |  | No |
|  item_id | 商品ID |  INT UNSIGNED | Yes |  | No |
|  leaf_cat_id | 商品关联的平台叶子节点分类ID |  INT UNSIGNED | Yes |  | No |
|  title | 商品名称 |  VARCHAR(60) | Yes |  | No |
|  image_default_id | 商品图片 |  VARCHAR(32) | Yes |  | No |
|  price | 商品价格 |  NUMERIC(20, 3) | Yes |  | No |
|  promotion_tag |  |  VARCHAR(10) | Yes | 0 | No |
|  status | 促销状态 |  TINYINT(1) | Yes | 0 | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | coupon_id, item_id | Yes |  |
<a name="table-syspromotion_fullminus-define"></a>
## syspromotion_fullminus
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  fullminus_id | 满减规则id |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  shop_id | 所属商家的店铺id |  INT UNSIGNED | Yes |  | No |
|  fullminus_name | 满减规则名称 |  VARCHAR(255) | Yes |  | No |
|  fullminus_desc | 规则描述 |  LONGTEXT | No |  | No |
|  used_platform | 0:商家全场可用;1:只能用于pc;2:只能用于wap; |  VARCHAR(1) | Yes | 0 | No |
|  use_bound | 0:商家全场可用;1:指定商品可用; |  VARCHAR(1) | No | 0 | No |
|  valid_grade |  |  VARCHAR(255) | No |  | No |
|  condition_value |  |  VARCHAR(255) | No |  | No |
|  join_limit |  |  INT UNSIGNED | Yes | 1 | No |
|  canjoin_repeat |  |  TINYINT(1) | Yes | 0 | No |
|  free_postage |  |  TINYINT(1) | No | 0 | No |
|  created_time | 创建时间 |  INT UNSIGNED | No |  | No |
|  start_time | 起始时间 |  INT UNSIGNED | No | 0 | No |
|  end_time | 截止时间 |  INT UNSIGNED | No | 0 | No |
|  promotion_tag | 促销标签 |  VARCHAR(15) | Yes |  | No |
|  fullminus_status | pending:待审核;agree:审核通过;refuse:审核拒绝;cancel:已取消; |  VARCHAR(7) | Yes | agree | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | fullminus_id | Yes |  |
<a name="table-syspromotion_fullminus_item-define"></a>
## syspromotion_fullminus_item
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  fullminus_id | 满减ID |  INT UNSIGNED | Yes |  | No |
|  item_id | 商品ID |  INT UNSIGNED | Yes |  | No |
|  shop_id | 所属商家的店铺id |  INT UNSIGNED | Yes |  | No |
|  leaf_cat_id | 商品关联的平台叶子节点分类ID |  INT UNSIGNED | Yes |  | No |
|  title | 商品名称 |  VARCHAR(60) | Yes |  | No |
|  image_default_id | 商品图片 |  VARCHAR(32) | No |  | No |
|  price | 商品价格 |  NUMERIC(20, 3) | Yes |  | No |
|  promotion_tag |  |  VARCHAR(10) | Yes | 0 | No |
|  start_time | 起始时间 |  INT UNSIGNED | No | 0 | No |
|  end_time | 截止时间 |  INT UNSIGNED | No | 0 | No |
|  status | 是否生效中 |  TINYINT(1) | Yes | 0 | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | fullminus_id, item_id | Yes |  |
<a name="table-syspromotion_promotions-define"></a>
## syspromotion_promotions
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  promotion_id | 促销id |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  rel_promotion_id | 关联的促销类型id |  INT UNSIGNED | Yes |  | No |
|  promotion_type | 促销类型 |  VARCHAR(50) | Yes |  | No |
|  shop_id | 所属商家的店铺id |  INT UNSIGNED | Yes |  | No |
|  promotion_name | 促销名称 |  VARCHAR(255) | Yes |  | No |
|  promotion_tag | 促销标签 |  VARCHAR(255) | Yes |  | No |
|  promotion_desc | 促销描述 |  VARCHAR(255) | No |  | No |
|  used_platform | 0:商家全场可用;1:只能用于pc;2:只能用于wap; |  VARCHAR(1) | Yes | 0 | No |
|  start_time | 开始时间 |  INT UNSIGNED | No |  | No |
|  end_time | 结束时间 |  INT UNSIGNED | Yes |  | No |
|  created_time | 创建时间 |  INT UNSIGNED | Yes |  | No |
|  check_status | pending:待审核;agree:审核通过;refuse:审核拒绝;cancel:已取消; |  VARCHAR(7) | Yes |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | promotion_id | Yes |  |
  
<a name="app-sysrate-define"></a>
## app:sysrate tables

<a name="table-sysrate_appeal-define"></a>
## sysrate_appeal
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  appeal_id | 申诉ID |  BIGINT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  rate_id | 评价ID |  BIGINT UNSIGNED | Yes |  | No |
|  status | WAIT:等待批准;REJECT:申诉驳回;SUCCESS:申诉成功;CLOSE:申诉关闭; |  VARCHAR(7) | No | WAIT | No |
|  appeal_type | APPLY_DELETE:申请删除评论;APPLY_UPDATE:申请修改评论; |  VARCHAR(12) | No | APPLY_UPDATE | No |
|  appeal_again | 再次申诉 |  TINYINT(1) | No | 0 | No |
|  content |  |  LONGTEXT | No |  | No |
|  evidence_pic | 申诉图片凭证 |  VARCHAR(255) | No |  | No |
|  reject_reason |  |  VARCHAR(255) | No |  | No |
|  appeal_log | 申诉日志 |  LONGTEXT | No |  | No |
|  appeal_time |  |  INT UNSIGNED | No |  | No |
|  modified_time |  |  INT UNSIGNED | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | appeal_id | Yes |  |
<a name="table-sysrate_dsr-define"></a>
## sysrate_dsr
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  shop_id | 店铺ID |  BIGINT UNSIGNED | Yes |  | No |
|  cat_id |  关联类目id |  INT UNSIGNED | Yes |  | No |
|  tally_dsr |  |  LONGTEXT | No | 5 | No |
|  attitude_dsr |  |  LONGTEXT | No | 5 | No |
|  delivery_speed_dsr |  |  LONGTEXT | No | 5 | No |
|  modified_time |  |  INT UNSIGNED | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | shop_id | Yes |  |
<a name="table-sysrate_score-define"></a>
## sysrate_score
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  tid | 订单ID |  BIGINT UNSIGNED | Yes |  | No |
|  cat_id |  关联类目id |  INT UNSIGNED | Yes |  | No |
|  user_id | 用户ID |  BIGINT UNSIGNED | Yes |  | No |
|  shop_id | 店铺ID |  BIGINT UNSIGNED | Yes |  | No |
|  tally_score |  |  SMALLINT | No |  | No |
|  attitude_score |  |  SMALLINT | No |  | No |
|  delivery_speed_score |  |  SMALLINT | No |  | No |
|  logistics_service_score |  |  SMALLINT | No |  | No |
|  created_time |  |  INT UNSIGNED | No |  | No |
|  modified_time |  |  INT UNSIGNED | No |  | No |
|  disabled | 是否有效 |  TINYINT(1) | Yes | 0 | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | tid | Yes |  |
<a name="table-sysrate_traderate-define"></a>
## sysrate_traderate
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  rate_id | 评价ID |  BIGINT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  tid | 订单号 |  VARCHAR(100) | No |  | No |
|  oid | 子订单号 |  VARCHAR(100) | No |  | No |
|  user_id |  |  INT UNSIGNED | Yes |  | No |
|  shop_id | 店铺ID |  INT UNSIGNED | No |  | No |
|  item_id | 评论的商品ID |  INT UNSIGNED | Yes |  | No |
|  item_title |  |  VARCHAR(60) | Yes |  | No |
|  item_price | 商品价格 |  NUMERIC(20, 3) | No | 0 | No |
|  item_pic | 商品图片绝对路径 |  VARCHAR(255) | No |  | No |
|  spec_nature_info | sku描述 |  LONGTEXT | No |  | No |
|  result | good:好评;neutral:中评;bad:差评; |  VARCHAR(7) | No | good | No |
|  content |  |  LONGTEXT | No |  | No |
|  rate_pic | 晒单图片 |  VARCHAR(255) | No |  | No |
|  is_reply |  |  TINYINT(1) | No | 0 | No |
|  reply_content |  |  LONGTEXT | No |  | No |
|  reply_time |  |  INT UNSIGNED | No |  | No |
|  anony | 是否匿名 |  TINYINT(1) | Yes | 0 | No |
|  role | seller:卖家;buyer:买家; |  VARCHAR(6) | Yes | buyer | No |
|  is_lock | 该评价是否被锁定 |  TINYINT(1) | No | 1 | No |
|  is_appeal | 是否可以申诉 |  TINYINT(1) | No | 1 | No |
|  appeal_status | NO_APPEAL:未申诉;WAIT:等待批准;REJECT:申诉驳回;SUCCESS:申诉成功;CLOSE:申诉关闭; |  VARCHAR(9) | No | NO_APPEAL | No |
|  appeal_again | 再次申诉 |  TINYINT(1) | No | 0 | No |
|  appeal_time |  |  INT UNSIGNED | No |  | No |
|  created_time |  |  INT UNSIGNED | No |  | No |
|  modified_time |  |  INT UNSIGNED | No |  | No |
|  disabled | 是否有效 |  TINYINT(1) | Yes | 0 | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | rate_id | Yes |  |
  
<a name="app-sysshop-define"></a>
## app:sysshop tables

<a name="table-sysshop_account-define"></a>
## sysshop_account
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  seller_id | 商家账户序号ID |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  login_account | 登录名 |  VARCHAR(100) | Yes |  | No |
|  login_password | 登录密码 |  VARCHAR(60) | Yes |  | No |
|  disabled |  |  TINYINT(1) | No | 0 | No |
|  createtime | 创建时间 |  INT UNSIGNED | No |  | No |
|  modified_time |  |  INT UNSIGNED | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | seller_id | Yes |  |
<a name="table-sysshop_enterapply-define"></a>
## sysshop_enterapply
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  enterapply_id | 入驻申请id 自增 |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  status | active:未审核;locked:审核中;successful:审核通过;failing:审核驳回;finish:开店完成; |  VARCHAR(10) | Yes |  | No |
|  seller_id | 提交申请的账号 |  INT UNSIGNED | Yes |  | No |
|  shop_name | 店铺名称 |  VARCHAR(20) | Yes |  | No |
|  shop_type | flag:品牌旗舰店;brand:品牌专卖店;cat:类目专营店; |  VARCHAR(5) | Yes |  | No |
|  shop | 店铺相关信息 |  LONGTEXT | No |  | No |
|  shop_info | 企业相关信息 |  LONGTEXT | No |  | No |
|  new_brand | 商家新增品牌 |  VARCHAR(20) | No |  | No |
|  shopuser_name | 店主姓名 |  VARCHAR(20) | Yes |  | No |
|  company_name | 公司名称 |  VARCHAR(50) | Yes |  | No |
|  add_time | 修改时间 |  INT UNSIGNED | No |  | No |
|  refuse_time | 拒绝时间 |  INT UNSIGNED | No |  | No |
|  agree_time | 同意时间 |  INT UNSIGNED | No |  | No |
|  enterlog | 操作日志 |  LONGTEXT | No |  | No |
|  reason | 审核不通过原因 |  VARCHAR(500) | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | enterapply_id | Yes |  |
| ind_seller_id | seller_id | No |  |
<a name="table-sysshop_seller-define"></a>
## sysshop_seller
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  seller_id |  |  INT UNSIGNED | Yes |  | No |
|  shop_id | 店铺id |  INT UNSIGNED | No |  | No |
|  seller_type | 0:店主;1:店员; |  VARCHAR(1) | Yes | 0 | No |
|  name |  |  VARCHAR(50) | Yes |  | No |
|  mobile |  |  VARCHAR(20) | Yes |  | No |
|  email |  |  VARCHAR(100) | Yes |  | No |
|  modified_time |  |  INT UNSIGNED | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | seller_id | Yes |  |
<a name="table-sysshop_shop-define"></a>
## sysshop_shop
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  shop_id | 店铺编号id 自增 |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  shop_name | 店铺名称 |  VARCHAR(50) | Yes |  | No |
|  shop_descript | 店铺描述 |  LONGTEXT | No |  | No |
|  shop_type | flag:品牌旗舰店;brand:品牌专卖店;cat:类目专营店;self:运营商自营店铺; |  VARCHAR(5) | Yes |  | No |
|  seller_id | 提交申请时的用户 |  INT UNSIGNED | Yes |  | No |
|  status | active:活动店铺;dead:过期店铺; |  VARCHAR(6) | No | active | No |
|  open_time | 开店时间 |  INT UNSIGNED | Yes |  | No |
|  close_time | 关店时间 |  INT UNSIGNED | No |  | No |
|  close_reason | 店铺关闭原因 |  VARCHAR(500) | No |  | No |
|  shop_logo | 提交logo |  VARCHAR(500) | No |  | No |
|  shopuser_name | 店主姓名 |  VARCHAR(20) | Yes |  | No |
|  email | 邮箱 |  VARCHAR(200) | Yes |  | No |
|  mobile | 手机号 |  VARCHAR(50) | Yes |  | No |
|  shopuser_identity | 店主身份证号 |  CHAR(18) | Yes |  | No |
|  shopuser_identity_img | 店主身份证电子版 |  VARCHAR(32) | No |  | No |
|  shop_area | 店铺所在地区 |  VARCHAR(255) | Yes |  | No |
|  shop_addr | 店铺所在地址 |  LONGTEXT | Yes |  | No |
|  bulletin | 店铺公告 |  VARCHAR(50) | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | shop_id | Yes |  |
| ind_seller_id | seller_id | No |  |
| ind_shop_type | shop_type | No |  |
<a name="table-sysshop_shop_cat-define"></a>
## sysshop_shop_cat
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  cat_id | 分类id |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  shop_id |  |  INT UNSIGNED | Yes |  | No |
|  parent_id | 父类ID |  INT UNSIGNED | Yes | 0 | No |
|  cat_path |  |  VARCHAR(100) | No | , | No |
|  level | 1:一级分类;2:二级分类; |  VARCHAR(1) | No | 1 | No |
|  is_leaf |  |  TINYINT(1) | Yes | 0 | No |
|  cat_name |  |  VARCHAR(100) | Yes |  | No |
|  order_sort |  |  INT UNSIGNED | No | 0 | No |
|  modified_time |  |  INT UNSIGNED | No |  | No |
|  disabled |  |  TINYINT(1) | Yes | 0 | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | cat_id | Yes |  |
| ind_parent_id | parent_id | No |  |
| ind_cat_shop_id | shop_id, cat_id | No |  |
<a name="table-sysshop_shop_info-define"></a>
## sysshop_shop_info
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  info_id | 企业信息id 自增 |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  seller_id | 提交申请的账号 |  INT UNSIGNED | Yes |  | No |
|  shop_id | 商家店铺id |  INT UNSIGNED | Yes |  | No |
|  company_name | 公司名称 |  VARCHAR(50) | Yes |  | No |
|  license_num | 营业执照注册号 |  VARCHAR(50) | Yes |  | No |
|  license_img | 营业执照副本-电子版 |  VARCHAR(32) | No |  | No |
|  representative | 法定代表人姓名  |  VARCHAR(20) | Yes |  | No |
|  corporate_identity | 法人身份证号 |  CHAR(18) | Yes |  | No |
|  corporate_identity_img | 法人身份证号电子版 |  VARCHAR(32) | No |  | No |
|  license_area | 营业执照所在地 |  VARCHAR(255) | Yes |  | No |
|  license_addr | 营业执照详细地址  |  LONGTEXT | Yes |  | No |
|  establish_date | 成立日期 |  INT UNSIGNED | Yes |  | No |
|  license_indate | 营业执照有效期 |  INT UNSIGNED | Yes |  | No |
|  enroll_capital | 注册资本 |  VARCHAR(20) | Yes |  | No |
|  scope | 经营范围  |  VARCHAR(200) | Yes |  | No |
|  shop_url | 公司官网 |  VARCHAR(50) | No |  | No |
|  company_area | 公司所在地 |  VARCHAR(255) | Yes |  | No |
|  company_addr | 公司地址 |  LONGTEXT | Yes |  | No |
|  company_phone | 公司电话 |  VARCHAR(20) | Yes |  | No |
|  company_contacts | 公司联系人 |  VARCHAR(20) | Yes |  | No |
|  company_cmobile | 公司联系人手机号 |  VARCHAR(50) | Yes |  | No |
|  tissue_code | 组织机构代码 |  VARCHAR(50) | Yes |  | No |
|  tissue_code_img | 组织机构代码副本-电子版 |  VARCHAR(32) | No |  | No |
|  tax_code | 税务登记号 |  VARCHAR(20) | Yes |  | No |
|  tax_code_img | 税务登记号副本-电子版 |  VARCHAR(32) | No |  | No |
|  bank_user_name | 银行开户公司名 |  VARCHAR(50) | Yes |  | No |
|  bank_name | 开户银行 |  VARCHAR(50) | Yes |  | No |
|  cnaps_code | 支行联行号 |  VARCHAR(50) | Yes |  | No |
|  bankid | 银行账号 |  VARCHAR(50) | Yes |  | No |
|  bank_area | 开户银行所在地 |  VARCHAR(50) | Yes |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | info_id | Yes |  |
| ind_seller_id | seller_id | No |  |
| ind_shop_id | shop_id | No |  |
<a name="table-sysshop_shop_rel_brand-define"></a>
## sysshop_shop_rel_brand
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  shop_id |  关联店铺id |  INT UNSIGNED | Yes |  | No |
|  brand_id |  关联品牌id |  INT UNSIGNED | Yes |  | No |
|  brand_warranty | 品牌授权书 |  VARCHAR(50) | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | shop_id, brand_id | Yes |  |
<a name="table-sysshop_shop_rel_lv1cat-define"></a>
## sysshop_shop_rel_lv1cat
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  rel_id | 店铺类目关联 |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  cat_id |  关联类目id |  INT UNSIGNED | Yes |  | No |
|  shop_id | 关联店铺id |  INT UNSIGNED | Yes |  | No |
|  fee_confg |  |  LONGTEXT | No | 0 | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | rel_id | Yes |  |
| ind_unique | cat_id, shop_id | Yes |  |
<a name="table-sysshop_shop_rel_seller-define"></a>
## sysshop_shop_rel_seller
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  shop_id | 关联店铺 |  INT UNSIGNED | Yes |  | No |
|  seller_id |  关联商家会员id |  INT UNSIGNED | Yes |  | No |
|  roles | admin:超级管理员;member:普通管理员; |  VARCHAR(6) | Yes | admin | No |
|  authority | all:所有权限;other:其他权限; |  VARCHAR(5) | Yes | all | No |
|  shop_name | 商家所属店铺名称 |  VARCHAR(100) | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | shop_id, seller_id | Yes |  |
<a name="table-sysshop_shop_type-define"></a>
## sysshop_shop_type
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  shoptype_id | 自增id |  SMALLINT AUTO_INCREMENT | Yes |  | Yes |
|  shop_type | flag:品牌旗舰店;brand:品牌专卖店;cat:类目专营店;self:运营商自营店铺; |  VARCHAR(5) | Yes |  | No |
|  name | 店铺类型名称 |  VARCHAR(20) | Yes |  | No |
|  status | 状态 |  TINYINT(1) | Yes |  | No |
|  is_exclusive | 是否排他 |  TINYINT(1) | Yes | 0 | No |
|  brief | 类型描述 |  VARCHAR(500) | Yes |  | No |
|  suffix | 店铺名称后缀 |  VARCHAR(20) | Yes |  | No |
|  max_item | 店铺默认商品上限 |  INT UNSIGNED | Yes |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | shoptype_id | Yes |  |
| ind_shop_type | shop_type | No |  |
  
<a name="app-sysstat-define"></a>
## app:sysstat tables

<a name="table-sysstat_item_statics-define"></a>
## sysstat_item_statics
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  item_stat_id | 商家商品数据统计id 自赠 |  BIGINT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  shop_id | 所属商家 |  INT UNSIGNED | Yes |  | No |
|  item_id | 商品id |  INT UNSIGNED | Yes |  | No |
|  title | 商品标题 |  VARCHAR(60) | Yes |  | No |
|  pic_path | 商品图片绝对路径 |  VARCHAR(255) | No |  | No |
|  amountnum | 销售数量 |  INT UNSIGNED | No |  | No |
|  amountprice | 销售总价 |  NUMERIC(20, 3) | No |  | No |
|  createtime | 创建时间 |  INT UNSIGNED | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | item_stat_id | Yes |  |
<a name="table-sysstat_statmember-define"></a>
## sysstat_statmember
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  statm_id | 会员数据统计id 自赠 |  BIGINT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  newuser | 新增会员数 |  INT UNSIGNED | No | 0 | No |
|  accountuser | 会员数总数 |  INT UNSIGNED | No | 0 | No |
|  shopnum | 新增店铺数 |  INT UNSIGNED | No | 0 | No |
|  shopaccount | 店铺数 |  INT UNSIGNED | No | 0 | No |
|  sellernum | 新增商家数 |  INT UNSIGNED | No | 0 | No |
|  selleraccount | 商家数 |  INT UNSIGNED | No | 0 | No |
|  createtime | 创建时间 |  INT UNSIGNED | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | statm_id | Yes |  |
<a name="table-sysstat_trade_statics-define"></a>
## sysstat_trade_statics
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  stat_id | 商家数据统计id 自赠 |  BIGINT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  shop_id | 店铺id |  INT UNSIGNED | No |  | No |
|  new_trade | 新增订单数 |  INT UNSIGNED | No | 0 | No |
|  new_fee | 新增订单额 |  NUMERIC(20, 3) | No | 0 | No |
|  ready_trade | 待付款订单数 |  INT UNSIGNED | No | 0 | No |
|  ready_fee | 待付款订单额 |  NUMERIC(20, 3) | No | 0 | No |
|  alreadytrade | 以付款订单数 |  VARCHAR(50) | No | 0 | No |
|  alreadyfee | 以付款订单额 |  NUMERIC(20, 3) | No | 0 | No |
|  ready_send_trade | 待发货订单数量 |  INT UNSIGNED | No | 0 | No |
|  ready_send_fee | 待发货订单额 |  NUMERIC(20, 3) | No | 0 | No |
|  already_send_trade | 待收货订单数量 |  INT UNSIGNED | No | 0 | No |
|  already_send_fee | 待收货订单额 |  NUMERIC(20, 3) | No | 0 | No |
|  cancle_trade | 已取消的订单数量 |  INT UNSIGNED | No | 0 | No |
|  cancle_fee | 已取消的订单额 |  NUMERIC(20, 3) | No | 0 | No |
|  complete_trade | 已完成的订单数量 |  INT UNSIGNED | No | 0 | No |
|  complete_fee | 已完成订单额 |  NUMERIC(20, 3) | No | 0 | No |
|  createtime | 创建时间 |  INT UNSIGNED | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | stat_id | Yes |  |
  
<a name="app-system-define"></a>
## app:system tables

<a name="table-system_matrixset-define"></a>
## system_matrixset
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  matrixset_id |  |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  node_id |  |  VARCHAR(20) | No |  | No |
|  status | active:active;dead:dead; |  VARCHAR(6) | No |  | No |
|  api_url |  |  VARCHAR(100) | No |  | No |
|  iframe_url |  |  VARCHAR(100) | No |  | No |
|  token |  |  VARCHAR(100) | No |  | No |
|  node_type |  |  VARCHAR(20) | No |  | No |
|  shopname |  |  VARCHAR(20) | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | matrixset_id | Yes |  |
<a name="table-system_messenger_systmpl-define"></a>
## system_messenger_systmpl
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  tmpl_name | 模版名称 |  VARCHAR(100) | Yes |  | No |
|  content | 模板内容 |  LONGTEXT | No | 0 | No |
|  modified_time |  |  INT UNSIGNED | No |  | No |
|  active | 是否激活 |  TINYINT(1) | No | 1 | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | tmpl_name | Yes |  |
<a name="table-system_prism_initstep-define"></a>
## system_prism_initstep
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  step_id | 执行任务的步骤 |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  state | ready:准备执行中;complete:执行完毕; |  VARCHAR(8) | No | ready | No |
|  handlar | 执行任务的类和方法 |  VARCHAR(50) | No |  | No |
|  params | 请求参数 |  LONGTEXT | No |  | No |
|  result | 返回参数 |  LONGTEXT | No |  | No |
|  create_time | 进入队列的时间 |  INT UNSIGNED | No | 0 | No |
|  start_time | 任务开始执行时间 |  INT UNSIGNED | No | 0 | No |
|  complate_time | 任务执行结束时间 |  INT UNSIGNED | No | 0 | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | step_id | Yes |  |
<a name="table-system_queue_mysql-define"></a>
## system_queue_mysql
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  id | ID |  BIGINT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  queue_name | 队列标识 |  VARCHAR(100) | Yes |  | No |
|  worker | 执行任务类 |  VARCHAR(100) | Yes |  | No |
|  params | 任务参数 |  LONGTEXT | Yes |  | No |
|  create_time | 进入队列的时间 |  INT UNSIGNED | No | 0 | No |
|  last_cosume_time | 任务开始执行时间 |  INT UNSIGNED | No | 0 | No |
|  owner_thread_id | mysql进程ID |  INT | No | -1 | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | id | Yes |  |
| ind_get | queue_name, owner_thread_id | No |  |
  
<a name="app-systrade-define"></a>
## app:systrade tables

<a name="table-systrade_cart-define"></a>
## systrade_cart
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  cart_id |  |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  user_id | 会员id |  INT | Yes | -1 | No |
|  user_ident | 会员ident,会员信息和session生成的唯一值 |  VARCHAR(50) | Yes |  | No |
|  shop_id | 店铺ID |  INT UNSIGNED | Yes |  | No |
|  obj_type | 购物车对象类型 |  VARCHAR(20) | Yes |  | No |
|  item_id | 商品id |  INT UNSIGNED | Yes |  | No |
|  sku_id | sku的id |  INT UNSIGNED | Yes |  | No |
|  title | 商品标题 |  VARCHAR(60) | Yes |  | No |
|  image_default_id | 商品默认图 |  VARCHAR(32) | No |  | No |
|  quantity | 数量 |  DOUBLE PRECISION | Yes |  | No |
|  is_checked | 是否购物车选中 |  TINYINT(1) | Yes | 0 | No |
|  selected_promotion | 购物车选中的促销ID |  VARCHAR(30) | Yes |  | No |
|  created_time | 加入购物车时间 |  INT UNSIGNED | No |  | No |
|  modified_time | 最后修改时间 |  INT UNSIGNED | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | cart_id, user_id | Yes |  |
| ind_sku_id | sku_id, user_ident | No |  |
| ind_shop_id | shop_id | No |  |
| ind_user_id | user_id | No |  |
<a name="table-systrade_cart_coupon-define"></a>
## systrade_cart_coupon
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  id |  |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  user_id | 会员id |  INT | Yes |  | No |
|  shop_id | 店铺ID |  INT UNSIGNED | Yes |  | No |
|  coupon_id | 优惠券id |  INT UNSIGNED | Yes |  | No |
|  coupon_code | 优惠券号码 |  VARCHAR(15) | Yes |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | id | Yes |  |
| ind_shopusers_id | shop_id, user_id | Yes |  |
<a name="table-systrade_log-define"></a>
## systrade_log
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  log_id | 订单日志ID |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  rel_id | 单据对象ID,如订单号，退款单号等 |  BIGINT UNSIGNED | Yes | 0 | No |
|  op_id | 操作员ID |  INT UNSIGNED | No |  | No |
|  op_name |  |  VARCHAR(100) | No |  | No |
|  op_role | buyer:购买者;seller:卖家;shopadmin:平台操作员;system:系统; |  VARCHAR(9) | Yes | system | No |
|  behavior | create:创建;update:修改;payed:支付;delivery:发货;confirm:收货;cancel:取消;refund:退款;reship:退货;exchange:换货;mark:修改备注;finish:完成; |  VARCHAR(8) | Yes | update | No |
|  log_text | 操作内容 |  LONGTEXT | No |  | No |
|  log_time | 记录时间 |  INT UNSIGNED | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | log_id | Yes |  |
<a name="table-systrade_order-define"></a>
## systrade_order
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  oid | 子订单编号 |  BIGINT UNSIGNED | Yes |  | No |
|  tid | 订单编号 |  BIGINT UNSIGNED | Yes |  | No |
|  shop_id | 所属商家 |  INT UNSIGNED | Yes |  | No |
|  user_id | 买家id |  INT UNSIGNED | Yes |  | No |
|  item_id | 商品id |  INT UNSIGNED | Yes |  | No |
|  sku_id | 货品id |  INT UNSIGNED | Yes |  | No |
|  bn | 明细商品的编码 |  VARCHAR(45) | No |  | No |
|  title | 商品标题 |  VARCHAR(60) | Yes |  | No |
|  spec_nature_info | sku描述 |  LONGTEXT | No |  | No |
|  price | 商品价格 |  NUMERIC(20, 3) | No | 0 | No |
|  num | 购买数量 |  INT UNSIGNED | No |  | No |
|  sendnum | 明细商品发货数量 |  DOUBLE PRECISION | Yes | 0 | No |
|  sku_properties_name | SKU的值 |  VARCHAR(500) | No |  | No |
|  refund_id | 最近退款ID |  VARCHAR(20) | No |  | No |
|  is_oversold | 是否超卖 |  TINYINT(1) | No | 0 | No |
|  pay_time | 付款时间 |  INT UNSIGNED | No |  | No |
|  end_time | 结束时间 |  INT UNSIGNED | No |  | No |
|  consign_time | 发货时间 |  INT UNSIGNED | No |  | No |
|  shipping_type | 运送方式 |  VARCHAR(20) | No |  | No |
|  bind_oid | 捆绑的子订单号 |  VARCHAR(20) | No |  | No |
|  logistics_company | 子订单发货的快递公司 |  VARCHAR(30) | No |  | No |
|  invoice_no | 子订单所在包裹的运单号 |  VARCHAR(20) | No |  | No |
|  divide_order_fee | 分摊之后的实付金额 |  NUMERIC(20, 3) | No | 0 | No |
|  part_mjz_discount | 优惠分摊 |  NUMERIC(20, 3) | No | 0 | No |
|  total_fee | 应付金额 |  NUMERIC(20, 3) | No | 0 | No |
|  payment | 实付金额 |  NUMERIC(20, 3) | No | 0 | No |
|  discount_fee | 子订单级订单优惠金额 |  NUMERIC(20, 3) | No | 0 | No |
|  adjust_fee | 手工调整金额 |  NUMERIC(20, 3) | No | 0 | No |
|  modified_time | 最后更新时间 |  INT UNSIGNED | No |  | No |
|  status | WAIT_BUYER_PAY:等待买家付款;WAIT_SELLER_SEND_GOODS:等待卖家发货,即:买家已付款;WAIT_BUYER_CONFIRM_GOODS:等待买家确认收货,即:卖家已发货;TRADE_BUYER_SIGNED:买家已签收,货到付款专用;TRADE_FINISHED:交易成功;TRADE_CLOSED_AFTER_PAY:付款以后,用户退款成功，交易自动关闭;TRADE_CLOSED_BEFORE_PAY:付款以前,卖家或买家主动关闭交易; |  VARCHAR(24) | Yes | WAIT_BUYER_PAY | No |
|  aftersales_status | WAIT_SELLER_AGREE:买家已经申请退款，等待卖家同意;WAIT_BUYER_RETURN_GOODS:卖家已经同意退款，等待买家退货;WAIT_SELLER_CONFIRM_GOODS:买家已经退货，等待卖家确认收货;SUCCESS:退款成功;CLOSED:退款关闭;REFUNDING:退款中;SELLER_REFUSE_BUYER:卖家拒绝退款;SELLER_SEND_GOODS:卖家已发货; |  VARCHAR(25) | No |  | No |
|  refund_fee | 退款金额 |  NUMERIC(20, 3) | No | 0 | No |
|  buyer_rate | 买家是否已评价 |  TINYINT(1) | No | 0 | No |
|  anony | 是否匿名 |  TINYINT(1) | No | 0 | No |
|  seller_rate | 卖家是否已评价 |  TINYINT(1) | No | 0 | No |
|  cat_service_rate |  |  NUMERIC(20, 3) | No | 0 | No |
|  order_from | 订单来源 |  VARCHAR(45) | No |  | No |
|  pic_path | 商品图片绝对路径 |  VARCHAR(255) | No |  | No |
|  timeout_action_time | 订单超时到期时间 |  INT UNSIGNED | No |  | No |
|  outer_iid | 商家外部编码 |  VARCHAR(50) | No |  | No |
|  outer_sku_id | 商家外部sku码 |  VARCHAR(50) | No |  | No |
|  sub_stock | 是否支持下单减库存 |  TINYINT(1) | Yes | 1 | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | oid | Yes |  |
<a name="table-systrade_promotion_detail-define"></a>
## systrade_promotion_detail
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  tid | 主订单id |  BIGINT UNSIGNED | Yes |  | No |
|  oid | 子订单id |  BIGINT UNSIGNED | Yes |  | No |
|  user_id | 会员id |  INT UNSIGNED | Yes |  | No |
|  promotion_id | 促销规则id |  INT UNSIGNED | Yes |  | No |
|  item_id | 商品的ID |  INT UNSIGNED | No |  | No |
|  sku_id | sku的ID |  INT UNSIGNED | No |  | No |
|  promotion_type | 优惠规则类型 |  VARCHAR(10) | Yes |  | No |
|  promotion_tag | 促销标签 |  VARCHAR(10) | No |  | No |
|  promotion_name | 促销名称 |  VARCHAR(255) | No |  | No |
|  promotion_desc | 促销描述 |  LONGTEXT | No |  | No |
<a name="table-systrade_trade-define"></a>
## systrade_trade
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  tid |  |  BIGINT UNSIGNED | Yes |  | No |
|  shop_id | 订单所属的店铺id |  INT UNSIGNED | Yes |  | No |
|  user_id | 会员id |  INT UNSIGNED | Yes |  | No |
|  dlytmpl_id | 配送模板id |  INT UNSIGNED | Yes |  | No |
|  status | WAIT_BUYER_PAY:已下单等待付款;WAIT_SELLER_SEND_GOODS:已付款等待发货;WAIT_BUYER_CONFIRM_GOODS:已发货等待确认收货;TRADE_FINISHED:已完成;TRADE_CLOSED:已关闭(退款关闭订单);TRADE_CLOSED_BY_SYSTEM:已关闭(卖家或买家主动关闭); |  VARCHAR(24) | Yes |  | No |
|  cancel_reason |  |  LONGTEXT | No |  | No |
|  pay_type | online:线上付款;offline:线下付款; |  VARCHAR(7) | Yes | online | No |
|  payment | 实付金额,订单最终总额 |  NUMERIC(20, 3) | No | 0 | No |
|  total_fee | 各子订单中商品price * num的和，不包括任何优惠信息 |  NUMERIC(20, 3) | No | 0 | No |
|  post_fee | 邮费 |  NUMERIC(20, 3) | No |  | No |
|  payed_fee | 已支付金额 |  NUMERIC(20, 3) | No | 0 | No |
|  seller_rate | 卖家是否评价 |  TINYINT(1) | No | 0 | No |
|  receiver_name | 收货人姓名 |  VARCHAR(20) | No |  | No |
|  created_time | 订单创建时间 |  INT UNSIGNED | No |  | No |
|  pay_time | 付款时间 |  INT UNSIGNED | No |  | No |
|  consign_time | 卖家发货时间 |  INT UNSIGNED | No |  | No |
|  end_time | 结束时间 |  INT UNSIGNED | No |  | No |
|  modified_time | 修改时间 |  INT UNSIGNED | No |  | No |
|  timeout_action_time | 超时到期时间 |  INT UNSIGNED | No |  | No |
|  send_time | 订单将在此时间前发出，主要用于预售订单 |  INT UNSIGNED | No |  | No |
|  receiver_state | 收货人所在省份 |  VARCHAR(20) | No |  | No |
|  receiver_city | 收货人所在城市 |  VARCHAR(20) | No |  | No |
|  receiver_district | 收货人所在地区 |  VARCHAR(20) | No |  | No |
|  receiver_address | 收货人详细地址 |  VARCHAR(200) | No |  | No |
|  receiver_zip | 收货人邮编 |  VARCHAR(20) | No |  | No |
|  receiver_mobile | 收货人手机号 |  VARCHAR(20) | No |  | No |
|  receiver_phone | 收货人电话 |  VARCHAR(20) | No |  | No |
|  title | 交易标题 |  VARCHAR(50) | No |  | No |
|  discount_fee | 系统优惠金额 |  NUMERIC(20, 3) | No | 0 | No |
|  consume_point_fee | 买家使用积分 |  INT UNSIGNED | No | 0 | No |
|  buyer_message | 买家留言 |  VARCHAR(255) | No |  | No |
|  need_invoice | 是否需要开票 |  TINYINT(1) | No | 0 | No |
|  invoice_name | 发票抬头 |  VARCHAR(20) | No |  | No |
|  invoice_type | 发票类型 |  VARCHAR(20) | No |  | No |
|  invoice_main | 发票内容 |  VARCHAR(20) | No |  | No |
|  adjust_fee | 卖家手工调整金额,子订单调整金额之和 |  NUMERIC(20, 3) | No | 0 | No |
|  trade_from | pc:标准平台;wap:手机触屏;weixin:微信商城; |  VARCHAR(6) | No | pc | No |
|  itemnum | 子订单商品购买数量总数 |  INT UNSIGNED | No | 0 | No |
|  shop_flag | 卖家备注旗帜 |  VARCHAR(20) | No |  | No |
|  shop_memo | 卖家备注 |  LONGTEXT | No |  | No |
|  buyer_area | 买家下单的地区 |  VARCHAR(30) | No |  | No |
|  area_id | 区域id，代表订单下单的区位码 |  INT UNSIGNED | No |  | No |
|  step_trade_status | 0:定金和尾款都付;1:定金已付尾款未付;2:定金未付尾款未付; |  VARCHAR(1) | No |  | No |
|  step_paid_fee | 分阶段付款的已付金额 |  NUMERIC(20, 3) | No |  | No |
|  shipping_type | free:卖家包邮;post:平邮;express:快递;ems:EMS;virtual:虚拟发货; |  VARCHAR(7) | No |  | No |
|  obtain_point_fee | 买家获得积分,返点的积分 |  INT UNSIGNED | No |  | No |
|  trade_memo | 交易备注 |  LONGTEXT | No |  | No |
|  buyer_rate | 买家是否已评价 |  TINYINT(1) | No | 0 | No |
|  is_part_consign | 是否是多次发货的订单 |  TINYINT(1) | No | 0 | No |
|  real_point_fee | 买家实际使用积分 |  INT UNSIGNED | No |  | No |
|  ip | IP地址 |  VARCHAR(15) | No |  | No |
|  anony | 下单选择的是否匿名，子订单将匿名修改该字段不修改，只表示下单的选择 |  TINYINT(1) | No | 0 | No |
|  is_clearing | 是否生成结算单 |  TINYINT(1) | No | 0 | No |
|  disabled | 是否有效 |  TINYINT(1) | Yes | 0 | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | tid | Yes |  |
<a name="table-systrade_tradeabnormal-define"></a>
## systrade_tradeabnormal
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  id | id |  BIGINT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  tid |  |  BIGINT UNSIGNED | Yes |  | No |
|  reason |  |  VARCHAR(255) | No |  | No |
|  status | WAIT_PROCESSING:等待平台处理;FINISHED:平台已处理;CLOSED:平台已驳回; |  VARCHAR(15) | Yes | WAIT_PROCESSING | No |
|  reject_reason |  |  VARCHAR(100) | No |  | No |
|  created_time |  |  INT UNSIGNED | No |  | No |
|  modified_time |  |  INT UNSIGNED | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | id | Yes |  |
  
<a name="app-sysuser-define"></a>
## app:sysuser tables

<a name="table-sysuser_account-define"></a>
## sysuser_account
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  user_id | 用户ID |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  login_account | 用户名 |  VARCHAR(100) | No |  | No |
|  email | 邮箱 |  VARCHAR(100) | No |  | No |
|  mobile | 手机号 |  VARCHAR(32) | No |  | No |
|  login_password | 登录密码 |  VARCHAR(60) | Yes |  | No |
|  login_type | 登录类型，信任登录或者普通登录 |  VARCHAR(60) | Yes | common | No |
|  disabled |  |  TINYINT(1) | No | 0 | No |
|  createtime | 创建时间 |  INT UNSIGNED | No |  | No |
|  modified_time |  |  INT UNSIGNED | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | user_id | Yes |  |
<a name="table-sysuser_shop_fav-define"></a>
## sysuser_shop_fav
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  snotify_id |  |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  shop_id | 商店ID |  INT UNSIGNED | Yes |  | No |
|  user_id |  |  INT UNSIGNED | No |  | No |
|  shop_name | 店铺名称 |  VARCHAR(50) | Yes |  | No |
|  shop_logo | 提交logo |  VARCHAR(500) | No |  | No |
|  create_time |  |  INT UNSIGNED | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | snotify_id | Yes |  |
<a name="table-sysuser_trustinfo-define"></a>
## sysuser_trustinfo
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  trust_id | 信任id |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  user_id | 会员id |  INT UNSIGNED | No |  | No |
|  openid | 用户openid |  VARCHAR(255) | Yes |  | No |
|  realname | 用户真实名称 |  VARCHAR(255) | No |  | No |
|  nickname | 用户昵称 |  VARCHAR(255) | No |  | No |
|  avatar | 头像 |  VARCHAR(255) | No |  | No |
|  url | 链接 |  VARCHAR(255) | No |  | No |
|  gender | 性别 |  VARCHAR(255) | No |  | No |
|  address | 用户地址 |  VARCHAR(255) | No |  | No |
|  province | 所在省级 |  VARCHAR(255) | No |  | No |
|  city | 所在城市 |  VARCHAR(255) | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | trust_id | Yes |  |
<a name="table-sysuser_user-define"></a>
## sysuser_user
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  user_id |  |  INT UNSIGNED | Yes |  | No |
|  grade_id |  |  INT UNSIGNED | Yes | 0 | No |
|  name |  |  VARCHAR(50) | No |  | No |
|  username |  |  VARCHAR(50) | No |  | No |
|  point |  |  INT UNSIGNED | Yes | 0 | No |
|  refer_id |  |  VARCHAR(50) | No |  | No |
|  refer_url |  |  VARCHAR(200) | No |  | No |
|  birthday |  |  INT UNSIGNED | No |  | No |
|  sex | 0:女;1:男;2:-; |  VARCHAR(1) | Yes | 2 | No |
|  wedlock | 婚姻状况 |  TINYINT(1) | Yes | 0 | No |
|  education | 教育程度 |  VARCHAR(30) | No |  | No |
|  vocation | 职业 |  VARCHAR(50) | No |  | No |
|  reg_ip | 注册时IP地址 |  VARCHAR(16) | No |  | No |
|  regtime | 注册时间 |  INT UNSIGNED | No |  | No |
|  cur | 货币(偏爱货币) |  VARCHAR(20) | No |  | No |
|  lang | 偏好语言 |  VARCHAR(20) | No |  | No |
|  disabled |  |  TINYINT(1) | No | 0 | No |
|  experience |  |  INT UNSIGNED | No | 0 | No |
|  source | pc:标准平台;wap:手机触屏;weixin:微信商城;api:API注册; |  VARCHAR(6) | No | pc | No |
|  area |  |  VARCHAR(55) | No |  | No |
|  addr |  |  VARCHAR(255) | No |  | No |
|  email_verify |  |  TINYINT(1) | No | 0 | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | user_id | Yes |  |
| ind_regtime | regtime | No |  |
| ind_disabled | disabled | No |  |
<a name="table-sysuser_user_addrs-define"></a>
## sysuser_user_addrs
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  addr_id | 会员地址ID |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  user_id | 会员ID |  INT UNSIGNED | Yes | 0 | No |
|  name | 会员名称 |  VARCHAR(50) | No |  | No |
|  area | 地区 |  VARCHAR(255) | No |  | No |
|  addr | 地址 |  VARCHAR(255) | No |  | No |
|  zip | 邮编 |  VARCHAR(20) | No |  | No |
|  tel | 电话 |  VARCHAR(50) | No |  | No |
|  mobile | 手机 |  VARCHAR(50) | No |  | No |
|  def_addr | 默认地址 |  TINYINT(1) | No | 0 | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | addr_id | Yes |  |
<a name="table-sysuser_user_coupon-define"></a>
## sysuser_user_coupon
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  coupon_code | 优惠券号码 |  VARCHAR(32) | Yes |  | No |
|  user_id | 会员ID |  INT UNSIGNED | Yes |  | No |
|  shop_id | 店铺ID |  INT UNSIGNED | Yes | 0 | No |
|  coupon_id | 会员优惠券ID |  INT UNSIGNED | Yes | 0 | No |
|  obtain_desc | 领取方式 |  VARCHAR(255) | Yes |  | No |
|  obtain_time | 优惠券获得时间 |  INT UNSIGNED | No |  | No |
|  tid | 使用该优惠券的订单号 |  BIGINT UNSIGNED | No |  | No |
|  is_valid | 会员优惠券是否当前可用 |  TINYINT(1) | Yes | 1 | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | coupon_code, user_id, shop_id | Yes |  |
<a name="table-sysuser_user_experience-define"></a>
## sysuser_user_experience
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  experience_id |  |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  user_id |  |  INT UNSIGNED | No |  | No |
|  modified_time | 记录时间 |  INT UNSIGNED | No |  | No |
|  behavior_type | obtain:获得;consume:消费; |  VARCHAR(7) | No | obtain | No |
|  behavior | 行为描述 |  VARCHAR(100) | No |  | No |
|  experience | 成长值 |  INT UNSIGNED | No |  | No |
|  remark | 备注(记录订单号) |  VARCHAR(500) | No |  | No |
|  expiration_time | 经验值过期时间 |  INT UNSIGNED | No | 0 | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | experience_id | Yes |  |
<a name="table-sysuser_user_fav-define"></a>
## sysuser_user_fav
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  gnotify_id |  |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  item_id | 商品ID |  INT UNSIGNED | Yes |  | No |
|  user_id |  |  INT UNSIGNED | No |  | No |
|  sku_id | 货品ID |  INT UNSIGNED | No |  | No |
|  cat_id | 商品类目ID |  INT UNSIGNED | Yes |  | No |
|  goods_name |  |  VARCHAR(200) | No |  | No |
|  goods_price |  |  NUMERIC(20, 3) | No | 0 | No |
|  image_default_id |  |  VARCHAR(32) | No |  | No |
|  email | 邮箱 |  VARCHAR(100) | No |  | No |
|  cellphone |  |  VARCHAR(20) | No |  | No |
|  send_time |  |  INT UNSIGNED | No |  | No |
|  create_time |  |  INT UNSIGNED | No |  | No |
|  disabled |  |  TINYINT(1) | No | 0 | No |
|  remark | 备注 |  LONGTEXT | No | 0 | No |
|  object_type | 收藏的类型，goods |  VARCHAR(100) | No | goods | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | gnotify_id | Yes |  |
<a name="table-sysuser_user_grade-define"></a>
## sysuser_user_grade
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  grade_id |  |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  grade_name |  |  VARCHAR(100) | Yes |  | No |
|  grade_logo | 会员等级LOGO |  VARCHAR(255) | No |  | No |
|  experience |  |  INT UNSIGNED | Yes | 0 | No |
|  default_grade | 是否默认等级 |  TINYINT(1) | Yes | 0 | No |
|  validity | 等级有效期 |  INT UNSIGNED | Yes | 0 | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | grade_id | Yes |  |
| ind_experience | experience | No |  |
<a name="table-sysuser_user_point-define"></a>
## sysuser_user_point
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  point_id |  |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  user_id |  |  INT UNSIGNED | Yes |  | No |
|  modified_time | 记录时间 |  INT UNSIGNED | No |  | No |
|  behavior_type | obtain:获得;consume:消费; |  VARCHAR(7) | No | obtain | No |
|  behavior | 行为描述 |  VARCHAR(100) | Yes |  | No |
|  point | 积分值 |  INT UNSIGNED | No | 0 | No |
|  remark | 备注(记录订单号) |  VARCHAR(500) | No |  | No |
|  expiration_time | 积分过期时间 |  INT UNSIGNED | No | 0 | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | point_id | Yes |  |
<a name="table-sysuser_user_pointlog-define"></a>
## sysuser_user_pointlog
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  pointlog_id |  |  INT UNSIGNED AUTO_INCREMENT | Yes |  | Yes |
|  user_id |  |  INT UNSIGNED | Yes |  | No |
|  modified_time | 记录时间 |  INT UNSIGNED | No |  | No |
|  behavior_type | obtain:获得;consume:消费; |  VARCHAR(7) | No | obtain | No |
|  behavior | 行为描述 |  VARCHAR(100) | Yes |  | No |
|  point | 积分值 |  INT UNSIGNED | No | 0 | No |
|  remark | 备注(记录订单号) |  VARCHAR(500) | No |  | No |
|  expiration_time | 积分过期时间 |  INT UNSIGNED | No | 0 | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | pointlog_id | Yes |  |
<a name="table-sysuser_user_points-define"></a>
## sysuser_user_points
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  user_id |  |  INT UNSIGNED | Yes |  | No |
|  point_count | 会员总积分值 |  INT UNSIGNED | No | 0 | No |
|  expired_point | 将要过期积分 |  INT UNSIGNED | No | 0 | No |
|  modified_time | 记录时间 |  INT UNSIGNED | No |  | No |
- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| primary | user_id | Yes |  |
<a name="table-sysuser_user_trade_count-define"></a>
## sysuser_user_trade_count
- 表结构

| ColumnName | Comment | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
|  user_id | 会员id |  INT UNSIGNED | No |  | No |
|  unpay | 未支付订单数量 |  INT UNSIGNED | No |  | No |
|  undelivery | 未发货订单数量 |  INT UNSIGNED | No |  | No |
|  unreceived | 未确认收货订单数量 |  INT UNSIGNED | No |  | No |
|  unrate | 未评论订单 |  INT UNSIGNED | No |  | No |
