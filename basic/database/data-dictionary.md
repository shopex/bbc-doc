# <{$titleName}>

- [数据库tables列表](#tables)
- [base_app_content](#table-base_app_content-define)

<a name="tables"></a>
## [数据库tables列表]

| Table Name | Comment | 
| ------------- |-------------|
| base_app_content | app资源信息表 |

<a name="table-base_app_content_content-define"></a>
## base_app_content

- 表结构

| ColumnName | Comment | DBschema type | Type | Not null | Default | Autoincrement |
| ------------- |-------------|-------------|-------------|-------------|-------------|-------------|
| content_id | 序号 | number |  decimal(20,0) | N | N | 

- 主键 

| columnName | 
| ------------- |
| content_id |

- 索引

| Key name | Column names | Unique | Comment |
| ------------- |-------------|-------------|-------------|
| PRIMARY | conent_id | Y | |
| ind_content_type | content_type | N | |

