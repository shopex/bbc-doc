# 数据库使用基础

- [介绍](#introduction)
  
- 配置(#configuration)
- [读/写连接](#read-write-connections]
- [运行查询语句](#running-queries)
- [事务](#database-transactions)
- [同时是用多个数据库系统](#accessing-connections]
- [查询日志](#query-logging)



## 介绍
ecos3在数据库抽象层的选型上, 是颇费精力的, 从易用性的角度laravel提供的orm和查询构造器足够好用. 但在某些场景下, 扩展性还不够强大.

- 易用性
- 扩展性
- 性能

在易用性和扩展性上找平衡点

<a name="configuration"></a>
## 配置


Laravel让连接和使用数据库变得异常简单.数据库配置文件是 `config/production/database.php`.你可以在配置文件中定义所有你的数据库连接,以及指定默认连接.这个文件中已经提供了所有支持的数据库系统连接例子.

目前Laravel支持四种数据库系统: MySQL, Postgres, SQLite, 和 SQL Server.




database 
