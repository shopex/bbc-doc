# 获取商品信息场景
- 根据条件查询商品ID (sphinx)
    根据商品名称，自然属性，品牌ID, 店铺ID, 店铺分类ID, 商品类目ID， 等条件获取itemID
- 商家后台商品列表
    根据itemId获取( item_id, image_default_id, cat_name, brand_name, price, store, status, modified_time, list_time)
- 前台商品列表
- 首页或者其他页面挂件中的商品列表
- 店铺商品列表页
- 店铺首页商品列表
- 购物车商品信息
- 订单结算页的商品信息
- 收藏商品列表
- 商品详情
    商品基本字段， cat_name, brand_name, 自然属性名称
- 会员中心订单列表中的商品信息(订单冗余)
- 订单详情的商品列表 (订单冗余)

## 接口列表

- [商品搜索接口](#search)
- [获取单个商品信息](#itemInfo)

<a name="introduction"></a>
### 商品搜索接口

接口文件存储目录 app/sysitem/lib/api/item/search.php

    public function search($params)
    {
        ......
    }
