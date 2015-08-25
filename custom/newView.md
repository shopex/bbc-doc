# 新建自定义页面

- [新建二次开发目录](#create_custom)
- [新增自定义页面路由](#create_routes)
- [新增自定义页面控制器](#create_ctl)
- [新增自定义页面](#create_view)
- [调用自定义页面](#use)

<a name="create_custom"></a>
## 新建二次开发目录
检查是否已经开启二次开发目录，如果已经开启则可以跳过该步骤。
在**config/production/compatible.php**或者**config/compatible.php**中查看
###开启二次开发目录
将**config/compatible.php**复制到**config/production/compatible.php**并且修改配置
```php
 <?php
 //二次开发目录设置,`custom`可以替换为自己的二次开发目录
 //如果该配置已开启，并且有对应的目录，则表示已经开启二次开发目录
 define('CUSTOM_CORE_DIR', ROOT_DIR.'/custom');
```
新建目录custom
```shell
drwxr-xr-x  38 www  www   1292  8  5 22:21 app
drwxr-xr-x   7 www  www    238  8 24 19:38 bootstrap
drwxrwxrwx  33 www  www   1122  8 24 12:00 config
drwxr-xr-x   3 www  www    102  8 25 13:57 custom //和app同目录
```

<a name="create_routes"></a>
##新增自定义页面路由
路由使用说明文档：https://github.com/shopex/bbc-doc/blob/master/basic/routing.md

修改路由文件：**bootstrap/routes.php**
```php
<?php

......

//自定义页面路由
route::group(array(), function(){
    route::get('custom-act.html', [ 'uses' => 'topc_ctl_act@index' ]);
});

/*
|--------------------------------------------------------------------------
| 文章相关
|--------------------------------------------------------------------------
*/
route::group(array(), function() {
    route::get('content-index.html', [ 'uses' => 'topc_ctl_content@index' ]);
    route::get('content-info.html', [ 'uses' => 'topc_ctl_content@getContentInfo' ]);
});

......

```
<a name="create_ctl"></a>
##新增自定义页面控制器

新增控制器文件**coutom/controller/act.php**
控制器名称根据路由的配置
```php
<?php
/**
 * ShopEx licence
 *
 * @copyright  Copyright (c) 2005-2010 ShopEx Technologies Inc. (http://www.shopex.cn)
 * @license  http://ecos.shopex.cn/ ShopEx License
 */
class topc_ctl_act extends topc_controller {

    public function __construct(&$app)
    {
        parent::__construct();
    }

    public function index()
    {
        return $this->page('topc/act/index.html', $pagedata);
    }
}
```

<a name="create_view"></a>
##新增自定义页面
新增自定义页面文件**custom/topc/view/act/index.html**
```html
<div class="content" >
  自定义页面内容
</div>
```

<a name="use"></a>
##调用自定义页面
挂件中配置该自定义页面的链接地址

视图中URL生成：
>根据action创建URL <{url action=topc_ctl_act@index}>
