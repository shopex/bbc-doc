# 系统依赖服务/组件

- pecl mcrypt
- composer
- gettext
- php > 5.4
- mysql > 5.6.10
- gd > 2.0.35

# linux单击部署
- 软件来源
% | [mysql5.6.12下载地址 http://192.168.51.67/mysql-5.6.12-l64.tar.gz] |
% | [nginx1.5.1下载地址 http://192.168.51.67/nginx-1.5.1.tar.gz] |
% | [php5.4.33下载地址 http://php.net/get/php-5.4.36.tar.gz/from/a/mirror] |
% | [zendguardloader下载地址 http://192.168.51.67/zendguardloader-l64.tar.gz] |


- 标准库安装————标准库是一些基本的底层库，有很多软件都是依附与这些底层库
'''
yum -y install wget make vim install gcc gcc-c++ ncurses ncurses-devel autoconf libjpeg libjpeg-devel libpng libpng-devel freetype freetype-devel libxml2 libxml2-devel zlib zlib-devel glibc glibc-devel glib2 glib2-devel bzip2 bzip2-devel curl curl-devel e2fsprogs e2fsprogs-devel krb5 krb5-devel libidn libidn-devel openssl openssl-devel openldap openldap-devel nss_ldap openldap-clients openldap-servers pcre pcre-devel  zlip zlip-devel

'''
