# 常见安装FAQ

- 目前linux下支持浏览器页面安装

- windows下请通过命令行方式进行安装

-windows下安装的时候报错

1. phpstudy下

使用 apache+php 或 iis+php 组合，其他组合可能报错

<img src="images/01.JPG">


2. 如果php的temp目录权限有问题，则可能在安装时报文件锁错误

php的temp目录可以通过函数 sys_get_temp_dir()获取，如下图

<img src="images/02.JPG">

![](images/02.JPG)