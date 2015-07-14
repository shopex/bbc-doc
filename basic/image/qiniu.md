# 使用七牛存储，图片分离方案

- [系统依赖说明](#system )
- [七牛网站配置](#qiniu-init)
- [B2B2C配置](#bbc-conf)
- [旧图片URL替换](#uphost)

<a name="system"></a>

### 系统依赖说明
>七牛的php-sdk包需要 php的 php_curl扩张进行支持，因此需要保证php有php_curl扩展

<a name="qiniu-init"></a>
### 七牛网站配置
七牛网站地址：http://www.qiniu.com
- 注册后新建一个空间
- 进入数据处理TAB
	```
	1. 设置分隔符为下划线
 2. 新建图片样式(新建三种图片样式，分别为 L M S 三个规格的小写字母加上jpg的样式名称)
 	样式名称为 l.jpg m.jpg s.jpg
	 样式大小应该和运营平台的 商品相册图 商品页详细图 列表页缩略图的大小一致
	```

<a name="bbc-conf"></a>
### B2B2C配置

打开config/storager.php
```php
<?php
/**
 * ShopEx licence
 *
 * @copyright  Copyright (c) 2005-2012 ShopEx Technologies Inc. (http://www.shopex.cn)
 * @license  http://ecos.shopex.cn/ ShopEx License
 */

return array(
    /*
    |--------------------------------------------------------------------------
    | 默认storage处理类
    |--------------------------------------------------------------------------
    |
    | 默认storage处理方式
    | 目前支持 ttprosystem | base_storage_filesystem
    | 对应原系统:  KVSTORE_STORAGE
    |
    */
    'default' => 'qiniu',

	//配置七牛的调用权限
    'qiniu' => array(
        'auth' => [
			//账号中的密匙中的AK
            'accessKey'=>'kejAhJms5tFC7foJqqoML3RKYueYNHQKUjRakbKK',
			//账号中的密匙中的SK
            'secretKey'=>'6BGwR95rnSsq5XDK5csknfhNBFX_ons2ff4K4Y_c'
        ],
		//刚才新建的图片空间名称
        'bucket' => 'test',
    ),

    /*
    |--------------------------------------------------------------------------
    | 图片映象站地址
    |--------------------------------------------------------------------------
    |
    | 图片资源映像站地址
    |
    */
    'host_mirrors_img' => array(
		//选择一个空间 空间设置-域名设置 里面会有七牛提供的域名 也可以替换为自己的域名
        'http://7xk29g.com1.z0.glb.clouddn.com'
    )
);
?>
```

<a name="uphost"></a>
### 旧图片URL替换
- 替换就图片域名
- 选择图片空间－》空间设置－》设置镜像存储
