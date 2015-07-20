数据库表,数据库表定义文件及模型命名规则


通常情况下数据库的一个表会对应一个dbschema定义文件(数据库表定义文件)和一个model.

数据库表名采用下划线命名法, 并且只允许小写字母.

- 表名: {$db_prefix}{$app_name}_{$filename}
- 数据库表名前缀: {$db_prefix}    系统默认为**sdb_**, 定义在config/config.php里, DB_PREFIX
- 文件名: $filename.php
- 存放目录名: app/{$app_name}/dbschema
- 完整文件名: app/{$app_name}/dbschema/{$filename}.php
- 对应的model类名: {$app_name}_mdl_{$filename}
- 所属app: {$app_name}


例1:
'''
表名: sdb_b2c_orders
数据库表名前缀: sdb_
文件名: orders.php
存放目录名: app/b2c/dbschema
完整文件名: app/b2c/dbschema/orders.php
对应的model类名: b2c_mdl_orders
所属app: b2c
'''

例2:
'''
表名: sdb_b2c_sales_rule_goods
数据库表名前缀: sdb_
文件名: sales_rule_goods.php
存放目录名: app/b2c/dbschema
完整文件名: app/b2c/dbschema/sales_rule_goods.php
对应的model类名: b2c_mdl_sales_rule_goods
所属app: b2c
'''
