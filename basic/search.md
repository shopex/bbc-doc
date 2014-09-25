# 搜索配置文档和使用方法

- [sphinx安装](# install)
- [sphinx配置文件存放路径](# conf)
- [使用sphinx搜索，并调用](# call)

<a name="install"></a>
## 安装sphinx
  [参照ecstore2.0安装](http://www.ec-os.net/append-c/sphinx-2.html)


<a name="conf"></a>
## sphinx配置文件存放路径
   在sphinx配置文件sphinx.conf的同级目录中新增一个conf.d文件夹
   所有的索引配置可以单独配置对应的索引配置

<a name="call"></a>
## 使用sphinx搜索，并调用
  **如果对应的表已经配置了sphinx索引，那么如果需要在在getList中或者getRow中调用则需要在对应的model中定义**

    class syscategory_mdl_brand extends dbeav_model {

        /**
         * @brief getList getRow 支持sphinx搜索
         */
        public $useSearchPolicy = true;
    }

  ** 如果在model中定义了在使用getList和getRow的时候，但是不需要进行sphinx搜索，则可以在filte中定义 **

    filter['unSearchPolicy'] = true;


