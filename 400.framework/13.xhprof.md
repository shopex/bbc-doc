# xhprof优化

- [简介](#introduction)
- [安装](#install)
- [使用](#use)

<a name="introduction"></a>

## 简介

xhprof是 FaceBook 开发的一个函数级别的 PHP 分层分析器，它是一个轻量型的php调试工具，运行很快

xdebug也是比较好的调试方式. 适合于本地的开发场景, 可根据需要自己配置

<a name="use"></a>

## 安装

### linux
在Linux下建议安装xhprof+Graphviz, 安装Graphviz才会提供炫酷的调用图.

暂不提供安装文档, google一下吧(非越狱者请百度)

[xhprof官网](http://xhprof.io)

### windows
好像有windows版, 没实际用过. 需要者可尝试

## 使用

1. 安装好xhprof后, 在luckymall中安装serveradm app, 接下来在运营商管理后台菜单上会出现xhprof.
2. [修改配置文件](/basic/configuration.md)`compatible.php`, 将`xhprof_debug`设置为`true`.
3. 将`app/serveradm/vender`目录copy到`public/app/serveradm/vender`下
4. 一切准备好后, 在需要调试的页面的URL加上`?xhprfo=1`然后刷新, xhprof列表中查看分析报告了
   3.1 前台 `http://www.bbc.me/index.php?xhprof=1`
   3.2 中台 `http://www.bbc.me/index.php/shop?xhprof=1`
   3.3 后台 `http://www.bbc.me/index.php/shopadmin#ctl=dashboard&act=indexwww.bbc.me/shop/index.php#?xhprof=1`

> **注意** 执行步骤3, 而不将代码直接放置在对应目录下, 是出于安全方面的考虑. 因此在调试完成后请将目录移出, 或在nginx设置为不可访问.





