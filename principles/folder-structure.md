Ecos目录结构


下表中, 左侧列黑体字代表目录 普通字代表文件

| 文件/目录名    | 作用           |
| ------------- |:-------------:|
| index.php | web访问入口文件 |
| .htaccess | apache支持的目录配置文件, 作用是让Ecos支持url rewrite, 可参考[Apache重写指南 http://www.myembed.com/online/Apache2.2_chinese_manual/misc/rewriteguide.html] |
| licence.txt | ShopEx的软件授权协议 |
| readme.txt | Ecos简要说明 |
| **app** | 系统里的所有app都在放置在这个目录下, 每个app单独目录存放 |
| **app/{$app_name}** | {$app_name}代表一个具体的app, 例如:base |
| **app/{$app_name}/dbschema** | {$app_name}的数据库表定义文件 |
| **app/{$app_name}/docs** | {$app_name}的帮助文件, 格式为t2t. 如果安装了desktop app和dev app则会在后台桌面上看到所有系统里app所提供的帮助文件 |
| **app/{$app_name}/lang** | {$app_name}的多语言包 |
| **app/{$app_name}/lib** | {$app_name}的library库 |
| **app/{$app_name}/model** | {$app_name}的model文件 |
| **app/{$app_name}/controller** | {$app_name}的控制器文件 |
| **app/{$app_name}/statics** | {$app_name}的静态文件, 例如css/gif等 |
| **app/{$app_name}/testcase** | {$app_name}的测试用例 |
| **app/{$app_name}/xmlschema** | {$app_name}所支持的xml的定义文件, 文件格式为xsd |
| **app/{$app_name}/widgets** | {$app_name}存放本app定义的所有挂件, 每一个目录代表一个widget. 在app安装时安装到系统 |
| app/{$app_name}/app.xml | {$app_name}的app定义文件, 文件定义:app/base/xmlschema/app.xsd |
| app/{$app_name}/services.xml | {$app_name}的service定义文件, 文件定义:app/base/xmlschema/services.xsd |
| app/{$app_name}/icon.png | {$app_name}的图标, 当系统应用setup app进行安装时, 可以在安装过程中看到 | 
| app/{$app_name}/desktop.xml | {$app_name}的后台配置文件, 文件定义:app/desktop/xmlschema/desktop.xsd |
| app/{$app_name}/services.xml | {$app_name}的service box及service配置文件, 文件定义:app/base/xmlschema/services.xsd |
| app/{$app_name}/task.php | {$app_name}本app的应用维护程序, 所包含的全部是回调函数. 包含pre_install/post_install/pre_update/post_update等  |
| app/{$app_name}/setting.php | {$app_name}所提供的初始化setting数据 |
| **config** | 存放系统的配置文件 |
| config/config.php | 系统配置文件. 包含数据库配置, 目录配置, session配置等 | 
| config/deploy.xml | 系统部署配置文件, 如果系统想通过setup app进行安装, 需要配置此文件. 文件定义:app/base/xmlschema/deploy.xsd |
| config/install.lock.php | 安装锁定文件. 如果系统开始安装任何app则生成此文件. 如果系统依赖于setup app进行安装, 当发现有install.lock.php则拒绝安装, 除非手动删除此文件. 例如:Ecstore |
| config/mapper.php | 路由配置文件 |
| config/certi.php | ShopEx证书 |
| **customize** | 二次开发目录 |
| **demo** | 演示数据, |
| **data** | 数据目录 |
| **public** | 公用文件目录 |
| **themes** | 模板目录 |






