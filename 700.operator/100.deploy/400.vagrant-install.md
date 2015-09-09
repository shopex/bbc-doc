# bbc-vagrant方式开发环境部署
- [下载地址](#down-load)
- [基本原理](#descript)
- [安装文档](#setup-doc)
- [注意事项](#notice)
- [vagrant 操作命令](#vagrant-command)
- [vagrant box相关参数](#box-params)

<a name='download'></a>
## 下载地址
VirtualBox https://www.virtualbox.org/wiki/Downloads

Vagrant https://www.vagrantup.com/downloads.html

BOX包 http://122.144.135.218/commerce_b2b2c-lnmp-with-prism-0.0.2.box

<a name='descript'></a>
## 原理
VirtualBox 是一款开源虚拟机软件。

Vagrant是一个基于Ruby的工具，用于创建和部署虚拟化开发环境。它使用Oracle的开源VirtualBox虚拟化系统，使用Chef创建自动化虚拟环境。

BBC Vagrant 是基于VirtualBox创建的虚拟机，并通过Vagrant进行打包而得到的VM环境。在虚拟机中部署好开发环境并建立虚拟机和实体机的文件共享，在开发时，可以通过实体机进行文件修改，并经过虚拟机中的环境执行，从而实现不同操作系统的工作环境的轻松部署。

<a name='setup-doc'></a>
## 安装文档
- 下载并安装VirtualBox（ https://www.virtualbox.org/wiki/Downloads ）。

- VirtualBox 4.3.12下载地址(windows请用此链接)：http://dlc-cdn.sun.com/virtualbox/4.3.12/index.html

- 下载并安装Vagrant（ http://www.vagrantup.com/downloads.html ）。

- 下载box文件。

- 执行vagrant box add bbc/centos65 $name.box。

      vagrant box add bbc/centos65 /data/vm/commerce_b2b2c-lnmp-with-prism-0.0.2.box

- 进入工作目录（workspace）(cd workspacedir)(比如:cd ~/code/)。

      cd ~/code/

- 执行vagrant init bbc/centos65。

      vagrant init bbc/centos65

- 执行vagrant up。

      vagrant up

- 在工作目录(workspace)解压bbc开发包，用浏览器打开127.0.0.1:8000即可。

<a name='notice'></a>
## 注意事项
- 所有操作需要在workspace目录下执行

- 浏览页面是127.0.0.1:8000。对应workspace/ecstore/

- mysql网页配置端口是3306，如果需要从母机连接，需要访问33060端口。

- 如果需要连接ssh，为：vagrant ssh 即可。

- windows下，因为virtualbox本身一个bug，所以不能使用4.3.18版本，4.3.12版本可以用。

- win8可能需要改bios（开启intel的虚拟技术intel Virtualization Technology）

- box中的系统是64位的，建议在64位操作系统中使用

<a name='vagrant-command'></a>
## Vagrant 操作命令
- 导入box

    vagrant box add [BOX NAME] [BOX URL]

- 显示box列表

    vagrant box list

- 移除box列表

    vagrant box remove [BOX NAME]

- 初始化Vagrant（给当前目录创建vagrant环境）

    vagrant init [BOX NAME]

- 启动Vagrant

    vagrant up

- 关闭Vagrant

    vagrant halt

- 暂停Vagrant

    vagrant suspend

- 删除当前目录的Vagrant环境

    vagrant destroy

- 实际环境中如果需要进行其它操作，可以使用-h参数来获取帮助例如：

    vagrant -h

<a name='box-params'></a>
## BOX相关参数
- ecstore-lnmp-0.0.2.box 应用参数
<table>
<tbody><tr>
<th>项目</th>

<th>内容</th>
</tr>

<tr>
<td>centos</td>

<td>6.5</td>
</tr>

<tr>
<td>libmcrypt</td>

<td>2.5.7</td>
</tr>

<tr>
<td>libxml</td>

<td>2.9.0</td>
</tr>

<tr>
<td>freetype</td>

<td>62.3.5</td>
</tr>

<tr>
<td>gd</td>

<td>2.0.35</td>
</tr>

<tr>
<td>mysql</td>

<td>5.6.16</td>
</tr>

<tr>
<td>nginx</td>

<td>1.5.10</td>
</tr>

<tr>
<td>php</td>

<td>5.3.28</td>
</tr>

<tr>
<td>zend guard loader</td>

<td>php-5.3-linux-glibc23-x86_64</td>
</tr>

<tr>
<td>mysql用户名密码</td>

<td>用户名：root，密码无</td>
</tr>

<tr>
<td>linux用户名密码</td>

<td>root用户和vagrant用户，密码均为vagrant</td>
</tr>

<tr>
<td>安装目录</td>

<td>/usr/local/webserver（php/mysql/nginx/freetype/gd）</td>
</tr>

<tr>
<td>启动脚本</td>

<td>/etc/init.d/(php-fpm|nginx|mysql)</td>
</tr>

<tr>
<td>php配置文件</td>

<td>/usr/local/webserver/php/php.ini</td>
</tr>

<tr>
<td>php-fpm配置文件</td>

<td>/usr/local/webserver/php/etc/php-fpm.conf</td>
</tr>

<tr>
<td>nginx配置文件</td>

<td>/usr/local/webserver/nginx/conf/nginx.conf</td>
</tr>

<tr>
<td>mysql配置文件</td>

<td>/etc/my.cnf</td>
</tr>

<tr>
<td>共享目录</td>

<td>/vagrant/</td>
</tr>

<tr>
<td>www目录</td>

<td>/vagrant/ecstore/</td>
</tr>
</tbody></table>

- ecstore-lnmp-0.0.2.box 端口映射
<table>
<tbody><tr>
<th>应用</th>

<th>端口号</th>

<th>映射端口号</th>
</tr>

<tr>
<td>ssh</td>

<td>22</td>

<td>2222</td>
</tr>

<tr>
<td>nginx</td>

<td>80</td>

<td>8000</td>
</tr>

<tr>
<td>prism</td>

<td>8080</td>

<td>8001</td>
</tr>

<tr>
<td>mongodb</td>

<td>27017</td>

<td>-</td>
</tr>

<tr>
<td>rabbitmq-server(web)(预占用)</td>

<td>15672</td>

<td>8002</td>
</tr>

<tr>
<td>mysql</td>

<td>3306</td>

<td>33060</td>
</tr>

<tr>
<td>php-fpm</td>

<td>9000</td>

<td>-</td>
</tr>
</tbody></table>

