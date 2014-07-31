# 通过composer引用第三方库

- [安装Composer](#install-composer)

<a name="install-composer"></a>
## 安装Composer

LuckyMall框架使用[Composer](http://getcomposer.org)（PHP包管理工具，参考 [Composer 中文文档](http://www.phpcomposer.com/)）来管理代码依赖性。
首先，你需要下载Composer的PHAR打包文件（ `composer.phar` ），下载完成后把它放在项目目录下或者放到 `usr/local/bin` 目录下以便在系统中全局调用。在Windows操作系统中，你可以使用Composer的[Windows安装工具](https://getcomposer.org/Composer-Setup.exe)。

## 安装composer库
想要很好的掌控composer, 可以参考[composer中文文档](https://github.com/golaravel/composer-doc-cn).

**注意事项**
- 修改composer.json后, 需要执行

  composer update
  
- 跟新后会同时更新composer.lock文件和`vender`目录, 勿忘一并提交


