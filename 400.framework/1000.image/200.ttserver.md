# ttserver图片分离方案

- [简介](#introduction)
- [配置](#install)
- [数据迁移](#move)

<a name="introduction"></a>

## 简介

    使用nginx + Tokyo Tyrant进行存储的方案
    nginx的NginxHttpMemcachedModule有个很牛X的特性，可以使用url作为memcache的key进行资源访问。

    使用内存做存储有两个缺点，一是有容量限制，二是不能永久存储。因此我们使用 Tokyo Tyrant 做存储方案。
    只要在进行图片存储时，将url作为key，将图片存储到Tokyo Tyrant
    Tokyo Tyrant是Tokyo Cabinet的网络接口，可以使用memcached一样的协议。同memcache相比，Tokyo Cabinet可以将资源存放在硬盘中

>**注意**：ttserver方案的缺点为，Tokyo Tyrant在存储超过20G的时候会出现不稳定现象，因此不推荐

<a name="install"></a>

## 配置

### 图片存储服务器, Tokyo Tyrant的安装配置

1. 安装Tokyo Tyrant
   ```shell
    #资源地址
    wget http://fallabs.com/tokyocabinet/tokyocabinet-1.4.47.tar.gz
    wget http://fallabs.com/tokyotyrant/tokyotyrant-1.1.41.tar.gz
   ```

    ##### 安装Tokyo Cabinet
    ```shell
    tar zxvf tokyocabinet-1.4.47.tar.gz
    cd tokyocabinet-1.4.47
    sudo ./configure
    sudo make
    sudo make install
    ```
    ##### 安装Tokyo Tyrant
    ```shell
    tar zxvf tokyotyrant-1.1.41.tar.gz
    cd tokyotyrant-1.1.41
    sudo ./configure
    sudo make
    sudo make install
    ```
  参考文档：http://www.ttlsa.com/ttserver/install-ttserver-on-linux/

  >**注意**
  因为tt可以无密码进行操作，并且在tt中存储了挂件的php文件，
  因此需要在防火墙配置，保证tt服务器的安全性

2. 启动ttservctl

	```shell
	#安装完成之后启动文件 默认在 /usr/local/sbin/ttservctl

	ttservctl start
	```

### 图片调用服务配置，安装nginx，并且在加入memc-nginx-module模块

1. memc-nginx-module模块下载
   ```
   下载地址：https://github.com/agentzh/memc-nginx-module
   已安装git可以执行：git clone https://github.com/agentzh/memc-nginx-module.git
   ```

2. nginx编译加载memc-nginx-module
   因为Nginx并不支持模块动态加载，所以要安装新的模块，必须重新编译Nginx

   ```shell
   wget http://nginx.org/download/nginx-1.4.7.tar.gz
   tar zxvf nginx-1.4.7.tar.gz
   cd nginx-1.4.7

   ./configure --prefix=/usr/local/nginx --add-module=/path_to_memc-nginx-module(memc-nginx-modul模块下载的文件地址)

   make && make install
   ```

3. nginx安装成功后,nginx.conf 配置中加入以下部分配置
   ```
    upstream tt_server1{  #配置一个tt服务器组
      server localhost:1978; #ttserver的地址和启动端口
    }

    server {
      listen       80;
      server_name  localhost;

      location / {
        set $memcached_key $uri;
        memcached_pass tt_server1;
      }
    }
   ```

### web服务器配置

1. php安装memcached扩展
  >phpinfo检查php是否安装了memcache扩展，如果没有安装这安装扩展,则进行安装

  ```
  命令仅供参考:

  /usr/local/php/bin/pecl install memcache

  vim /usr/local/php/php.ini

  extension=memcache.so
  ```
2. 修改B2B2C中的conifig/storager.php配置
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
        'default' => 'ttprosystem',
        //'default' => 'filesystem',

        /*
        |--------------------------------------------------------------------------
        | mongodb配置
        |--------------------------------------------------------------------------
        |
        | hosts 支持多实例. 目前只支持 192.168.0.230:11211 风格的写法
        | "mongodb:///tmp/mongo-27017.sock" 两种风格
        | options MongoClient::__construct 第二个参数 An array of options for the
        | connection
        */
        'ttprosystem' => array(
            'hosts' => array(
              '192.168.51.96:1978',
            //'192.168.0.231:11211',
            ),
        ),

        /*
        |--------------------------------------------------------------------------
        | 图片映象站地址
        |--------------------------------------------------------------------------
        |
        | 图片资源映像站地址，可以配置多个图片服务器，上传图片的时候随机分配
        |
        */
        'host_mirrors_img' => array(
            'http://img2.example.com',//图片调用服务器的域名或者IP
            //'http://img1.example.com',//图片调用服务器的域名或者IP
         )
     );
  ```

<a name="move"></a>
## 数据迁移 将本地的图片存储到Tokyo Tyrait中

1. 修改b2b2c/script/storage/ttserver.sh中的图片存储服务地址
   ```shell
    #storage存储服务器地址，修改为Tokyo Tyrant 部署的地址和端口
    host=127.0.0.1
    #ttserver端口
    port=1978
   ```

2. 执行b2b2c/script/storage/init.sh
   ```shell
   #!/bin/bash

    source $(cd `dirname $0`; pwd)/ttserver.sh

    #默认将public/images/下的图片都存储到Tokyo Tyrant 中,也可以根据需求自定义目录存储
    if [ x$1 = x ]
    then
        src=$root/public/images
    else
        src=$1
    fi

   ```
