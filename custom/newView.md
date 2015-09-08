# 新建自定义页面

- [新建二次开发目录](#create_custom)
- [新增自定义页面路由](#create_routes)
- [新增自定义页面控制器](#create_ctl)
- [新增自定义页面](#create_view)
- [调用自定义页面](#use)

<a name="create_custom"></a>
## 新建二次开发目录
[配置二次开发目录](./conf.md)

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
