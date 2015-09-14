# bbc mysql数据库主从简单配置

1.主从服务器分别作以下操作：
    1.1、版本一致
    1.2、初始化表，并在后台启动mysql
    1.3、修改root的密码

2.修改主服务器master:

    #vi /etc/my.cnf
    [mysqld]
    log-bin=mysql-bin   //[必须]启用二进制日志
    server-id=1      //[必须]服务器唯一ID，默认是1，一般取IP最后一段

3.修改从服务器slave:

    #vi /etc/my.cnf
    [mysqld]
    log-bin=mysql-bin   //[不是必须]启用二进制日志
    server-id=2      //[必须]服务器唯一ID，默认是1，一般取IP最后一段

4.重启两台服务器的mysql

    /etc/init.d/mysql restart

5.在主服务器上建立帐户并授权slave:

    grant replication slave  on *.*  to '帐号' @ '从服务器IP' identified by '密码';  
    //一般不用root帐号，"%"表示所有客户端都可能连，只要帐号，密码正确，此处可用具体客户端IP代替，如192.168.145.1，加强安全。

6.登录主服务器的mysql，查询master的状态

    mysql>show master status;
   +------------------+----------+--------------+------------------+
   | File             | Position | Binlog_Do_DB | Binlog_Ignore_DB |
   +------------------+----------+--------------+------------------+
   | mysql-bin.000004 |      308 |              |                  |
   +------------------+----------+--------------+------------------+
   1 row in set (0.00 sec)
   注：执行完此步骤后不要再操作主服务器MYSQL，防止主服务器状态值变化

7.配置从服务器Slave：

    mysql>change master to master_host='192.168.145.1',master_user='主服务器用户名',master_password='主服务器密码',
         master_log_file='mysql-bin.000004',master_log_pos=308;   //注意不要断开，308数字前后无单引号。

    Mysql>start slave;    //启动从服务器复制功能

8.检查从服务器复制功能状态：

    mysql> show slave status\G

    *************************** 1. row ***************************

              Slave_IO_State: Waiting for master to send event
              Master_Host: 192.168.2.1  //主服务器地址
              Master_User: 主服务器用户名   //授权帐户名，尽量避免使用root
              Master_Port: 3306    //数据库端口，部分版本没有此行
              Connect_Retry: 60
              Master_Log_File: mysql-bin.000004
              Read_Master_Log_Pos: 600     //#同步读取二进制日志的位置，大于等于Exec_Master_Log_Pos
              Relay_Log_File: ddte-relay-bin.000003
              Relay_Log_Pos: 251
              Relay_Master_Log_File: mysql-bin.000004
              Slave_IO_Running: Yes    //此状态必须YES
              Slave_SQL_Running: Yes     //此状态必须YES
                    ......

    注：Slave_IO及Slave_SQL进程必须正常运行，即YES状态，否则都是错误的状态(如：其中一个NO均属错误)。

    以上操作过程，主从服务器配置完成。

9.主从服务器测试：

    主服务器Mysql，建立数据库，并在这个库中建表插入一条数据：
    mysql> create database test_db;
    Query OK, 1 row affected (0.00 sec)

    mysql> use test_db;
    Database changed

    mysql>  create table test_tb(id int(3),name char(10));
    Query OK, 0 rows affected (0.00 sec)
 
    mysql> insert into test_tb values(001,'test');
    Query OK, 1 row affected (0.00 sec)

    mysql> show databases;
    +--------------------+
    | Database           |
    +--------------------+
    | information_schema |
    | test_db                |
    | mysql                |
    | test                 |
    +--------------------+
    4 rows in set (0.00 sec)


    从服务器Mysql查询：

   mysql> show databases;

   +--------------------+
   | Database               |
   +--------------------+
   | information_schema |
   | test_db                 | //看到了吧
   | mysql                 |
   | test          |

   +--------------------+
   4 rows in set (0.00 sec)

   mysql> use test_db
   Database changed
   mysql> select * from test_tb;           //查看主服务器上新增的具体数据
   +------+------+
   | id   | name |
   +------+------+
   |    1 | test |
   +------+------+
   1 row in set (0.00 sec)
  

