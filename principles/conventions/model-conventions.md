数据库表,数据库表定义文件及模型命名规则


通常情况下数据库的一个表会对应一个dbschema定义文件(数据库表定义文件)和一个model.

数据库表名采用下划线命名法, 并且只允许小写字母.

- 表名: {$app_name}_{$filename}
- 数据库表名前缀: 目前无前缀
- 文件名: $filename.php
- 存放目录名: app/{$app_name}/dbschema
- 完整文件名: app/{$app_name}/dbschema/{$filename}.php
- 对应的model类名: {$app_name}_mdl_{$filename}
- 所属app: {$app_name}


例1:
'''
表名: syscontent_article
数据库表名前缀: (无)
文件名: syscontent_article.php
存放目录名: app/syscontent/dbschema
完整文件名: app/syscontent/dbschema/syscontent_article.php
对应的model类名: syscontent_mdl_article
所属app: syscontent
'''

例2:
'''
表名: syscontent_article_nodes
数据库表名前缀: (无)
文件名: article_nodes.php
存放目录名: app/syscontent/dbschema
完整文件名: app/syscontent/dbschema/article_nodes.php
对应的model类名: syscontent_mdl_article_nodes
所属app: syscontent
'''
