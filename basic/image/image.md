# 图片使用说明

- [image app v0.1 升级到 v0.2说明](#update)
- [店铺图片组件使用说明](#shop_image)
- [更改图片服务器域名](#update_host)


<a name="update"></a>
### image app v0.1 升级到 v0.2说明

 	在image v0.1中所有的图片存储的是存储一个image_id,在使用的时候是用image_id 查找到对应的图片URL地址，再使用。
	v0.2改造，则在所有使用的图片存储的为一个图片地址的URL，在使用的时候不再需要用image_id去查询对应的URL地址。

- 升级执行脚本

	>v0.1升级到v0.2数据迁移说明
	1. 首先需要讲数据库中老的图片管理表迁移到新的表图片管理表中
	2. 需要将以前图片存储的image_id替换为URL地址

	```
	 打开config/storager.php文件,设置host_mirrors_img参数
cmd命令: image:imagedata update
	```

- 重新生成图片大中小图片

	```
	因为以前大中小是不同的图片文件，而在新版本中存储的原图的URL地址，那么要调用到大中小图，那么则需要根据原图的URL进行
调用，因此改造后的默认规则是：
	1. 原图URL：http://images.bbc.shopex123.com/images/0d/85/f3/e15d07725cc84b02b31a101ff670b44c51804d93.png
	2 .大图URL:http://images.bbc.shopex123.com/images/0d/85/f3/e15d07725cc84b02b31a101ff670b44c51804d93.png_l.png

 因为大中小图用调用方式不同，所有需要重新生成大中小图
cmd命令: image:resize do
	```

<a name="shop_image"></a>
### 店铺图片组件说明
- 单图上传

	```html
	<a class="select-image" data-toggle="modal" href="<{url action=topshop_ctl_shop_image@loadImageModal}>" data-target="#gallery_modal">
	  <input type="hidden" name="shop_logo" value="<{$shop.shop_logo}>">
	  <div class="img-put">
	    <img src="<{$shop.shop_logo}>">
		  <i class="glyphicon glyphicon-picture"></i>
	  </div>
	</a>
	```
- 多图上传
	```html
	<!--已经上传的图片显示-->
	<div class="multiple-item">
	  <div class="multiple-del glyphicon glyphicon-remove-circle"></div>
	  <a class="select-image" data-toggle="modal" href="<{url action=topshop_ctl_shop_image@loadImageModal}>" data-target="#gallery_modal">
	   <input type="hidden" name="listimages[]" value="<{$image_id}>">
	   <div class="img-put"><img src="<{$image_id|storager:s}>"></div>
	  </a>
	</div>
	<!--多图上传 data-limit 对多上传几张图片 -->
	<div class="multiple-add" data-name="listimages[]" data-limit="10" data-url="<{url action=topshop_ctl_shop_image@loadImageModal}>" ><i class="glyphicon glyphicon-plus"></i></div>
	```

<a name="update_host"></a>
### 更改图片服务器域名
因为图片存储的都是URL地址，以此如果要替换图片服务器域名，则需要将所有图片的URL地址中的域名替换
，这里我们提供了一个替换域名的命令

```
1. 打开config/storager.php 设置host_mirrors_img 改为新的域名
2. cmd image:imagedata update --uphost [这里第一个参数为以前的域名地址]
```

>**注意** 因为需要替换所有表中的图片URL地址，因此需要新开发的表中存储的图片URL，或者是其他方式存储的图片URL，需要在
**app/image/lib/command/imagedata.php**中添加配置，特殊情况需要自定义函数进行替换
