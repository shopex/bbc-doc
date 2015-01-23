# 系统依赖服务/组件

- pecl mcrypt
- composer
- gettext
- php > 5.4
- mysql > 5.6.10
- gd > 2.0.35

# linux单击部署
### 软件来源
mysql5.6.12下载地址 http://192.168.51.67/mysql-5.6.12-l64.tar.gz

nginx1.5.1下载地址 http://192.168.51.67/nginx-1.5.1.tar.gz

php5.4.33下载地址 http://php.net/get/php-5.4.36.tar.gz/from/a/mirror

zendguardloader下载地址 http://192.168.51.67/zendguardloader-l64.tar.gz

####标准库安装————标准库是一些基本的底层库，有很多软件都是依附与这些底层库

yum -y install wget make vim install gcc gcc-c++ ncurses ncurses-devel autoconf libjpeg libjpeg-devel libpng libpng-devel freetype freetype-devel libxml2 libxml2-devel zlib zlib-devel glibc glibc-devel glib2 glib2-devel bzip2 bzip2-devel curl curl-devel e2fsprogs e2fsprogs-devel krb5 krb5-devel libidn libidn-devel openssl openssl-devel openldap openldap-devel nss_ldap openldap-clients openldap-servers pcre pcre-devel  zlip zlip-devel

#### php依赖库安装
   libxml2 ———— 包含库和实用工具用于解析XML文件
   
   wget http://xmlsoft.org/sources/libxml2-2.9.0.tar.gz 
   
   tar zxvf libxml2-2.9.0.tar.gz 
   
   cd libxml2-2.9.0 
   
   ./configure 
   
   make&&make install

   libmcrypt ———— 加密算法扩展库(支持DES, 3DES, RIJNDAEL, Twofish, IDEA, GOST, CAST-256, ARCFOUR, SERPENT, SAFER+等算法)
   wget ftp://mcrypt.hellug.gr/pub/crypto/mcrypt/libmcrypt/libmcrypt-2.5.7.tar.gz 

   tar zxvf libmcrypt-2.5.7.tar.gz 
   
   cd libmcrypt-2.5.7 
   
   ./configure 
   
   make && make install

#### MYSQL配置&安装
1 安装

      wget http://dev.mysql.com/get/Downloads/MySQL-5.6/mysql-5.6.12-linux-glibc2.5-x86_64.tar.gz/from/http://cdn.mysql.com/
      tar zxvf mysql-5.6.12-linux-glibc2.5-x86_64.tar.gz -C /usr/local/webserver
      mv mysql-5.6.12-linux-glibc2.5-x86_64 mysql

2 配置

      shell> groupadd mysql
      shell> useradd -r -g mysql mysql
      shell> cd /usr/local/webserver/mysql
      shell> chown -R mysql .
      shell> chgrp -R mysql .
      shell> scripts/mysql_install_db --user=mysql
      shell> chown -R root .
      shell> chown -R mysql data
      # Next command is optional
      shell> cp support-files/my-default.cnf /etc/my.cnf
      shell> bin/mysqld_safe --user=mysql 

3 修改mysql.server脚本

      将
      basedir=
      datadir=
      改为
      basedir=/usr/local/webserver/mysql
      datadir=/usr/local/webserver/mysql/data

4 配置启动脚本

      cd /usr/local/webserver/mysql
      cp support-files/mysql.server /etc/init.d/mysql

5 启动mysql

      service mysql start
      service mysql stop
      service mysql restart

#### NGINX 安装&配置
1 安装

      wget http://nginx.org/download/nginx-1.5.1.tar.gz
      tar zxvf nginx-1.5.1.tar.gz
      cd nginx-1.5.1
      ./configure --prefix=/usr/local/webserver/nginx
      make && make install
      
2 配置启动脚本

      每次启动nginx都要找到nginx的启动目录，这样无疑很麻烦，以下是配置nginx在任意目录都可以执行nginx的启动、停止、重启的脚本
      执行以下命令，书写脚本
   (1) 脚本
      
         #!/bin/sh
         #
         # nginx - this script starts and stops the nginx daemin
         #
         # chkconfig:   - 85 15
         # description:  Nginx is an HTTP(S) server, HTTP(S) reverse \
         #               proxy and IMAP/POP3 proxy server
         # processname: nginx
         # config:      /usr/local/webserver/nginx/conf/nginx.conf
         # pidfile:     /usr/local/webserver/nginx/logs/nginx.pid
         
         # Source function library.
         . /etc/rc.d/init.d/functions
         
         # Source networking configuration.
         . /etc/sysconfig/network
         
         # Check that networking is up.
         [ "$NETWORKING" = "no" ] && exit 0
         
         nginx="/usr/local/webserver/nginx/sbin/nginx"
         prog=$(basename $nginx)
         
         NGINX_CONF_FILE="/usr/local/webserver/nginx/conf/nginx.conf"
         
         lockfile=/var/lock/subsys/nginx
         
         start() {
             [ -x $nginx ] || exit 5
             [ -f $NGINX_CONF_FILE ] || exit 6
             echo -n $"Starting $prog: "
             daemon $nginx -c $NGINX_CONF_FILE
             retval=$?
             echo
             [ $retval -eq 0 ] && touch $lockfile
             return $retval
         }
         
         stop() {
             echo -n $"Stopping $prog: "
             killproc $prog -QUIT
             retval=$?
             echo
             [ $retval -eq 0 ] && rm -f $lockfile
             return $retval
         }
         
         restart() {
             configtest || return $?
             stop
             start
         }
         
         reload() {
             configtest || return $?
             echo -n $"Reloading $prog: "
             killproc $nginx -HUP
             RETVAL=$?
             echo
         }
         
         force_reload() {
             restart
         }
         
         configtest() {
           $nginx -t -c $NGINX_CONF_FILE
         }
         
         rh_status() {
             status $prog
         }
         
         rh_status_q() {
             rh_status >/dev/null 2>&1
         }
         
         case "$1" in
             start)
                 rh_status_q && exit 0
                 $1
                 ;;
             stop)
                 rh_status_q || exit 0
                 $1
                 ;;
             restart|configtest)
                 $1
                 ;;
             reload)
                 rh_status_q || exit 7
                 $1
                 ;;
             force-reload)
                 force_reload
                 ;;
             status)
                 rh_status
                 ;;
             condrestart|try-restart)
                 rh_status_q || exit 0
                     ;;
             *)
                 echo $"Usage: $0 {start|stop|status|restart|condrestart|try-restart|reload|force-reload|configtest}"
                 exit 2
         esac
       
