# 图片分离

- [简介](#introduction)
- [安装](#install)
- [使用](#use)

<a name="introduction"></a>

## 简介

    使用nginx + Tokyo Tyrant进行存储的方案
    nginx的NginxHttpMemcachedModule有个很牛X的特性，可以使用url作为memcache的key进行资源访问。

    使用内存做存储有两个缺点，一是有容量限制，二是不能永久存储。因此我们使用 Tokyo Tyrant 做存储方案。
    只要在进行图片存储时，将url作为key，将图片存储到Tokyo Tyrant
    Tokyo Tyrant是Tokyo Cabinet的网络接口，可以使用memcached一样的协议。同memcache相比，Tokyo Cabinet可以将资源存放在硬盘中

<a name="use"></a>

## 安装

### 图片服务安装nginx，并且在加入memc-nginx-module模块

1. memc-nginx-module模块下载
   ```
   下载地址：https://github.com/agentzh/memc-nginx-module
   已安装git可以执行：git clone https://github.com/agentzh/memc-nginx-module.git
   ```

2. nginx编译加载memc-nginx-module
   因为Nginx并不支持模块动态加载，所以要安装新的模块，必须重新编译Nginx

   ```
   wget http://nginx.org/download/nginx-1.4.7.tar.gz
   tar zxvf nginx-1.4.7.tar.gz
   cd nginx-1.4.7

   ./configure --prefix=/usr/local/nginx --add-module=/path_to_memc-nginx-module(memc-nginx-modul模块下载的文件地址)

   make && make install
   ```
