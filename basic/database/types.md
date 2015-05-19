# 数据表定义

- [简介](#introduction)
- [dbal类型](#dabl-types)
- [内置预定义类型](#buildin-types)
- [表结构定义](#table-define)
- [finder定义](#finder-define)

<a name="introduction"></a>
## [简介]
  通过dbschema配置文件, 定义数据库

  - 描述表结构
  - 定义**desktop finder**的属性

dbschema文件存放在各自app下的`dbschema`目录, 例如: `app/{$appId}/dbschema/{$name}.php`, 表名: `{$appId}_($name}`

以下是`base_kvstore`表的定义(由以上规则可知dbschema文件所在位置: `app/base/dbschema/kvsore.php`):

```php
return array (
    'columns' => 
    array (
        'id' => array(
            'type' => 'number',
            'pkey' => true,
            'extra' => 'auto_increment',
            'comment' => app::get('base')->_('序号'),
        ),
        'prefix' => array(
            'type' => 'string',
            'required' => true,
            'comment' => app::get('base')->_('kvstore类型'),
        ),
        'key' => array(
            'type' => 'string',
            'required' => true,
            'comment' => app::get('base')->_('kvstore存储的键值'),
        ),
        'value' => array(
            'type'=>'serialize',
            'comment' => app::get('base')->_('kvstore存储值'),
        ),
        'dateline' => array(
            'type'=>'time',
            'comment' => app::get('base')->_('存储修改时间'),
        ),
        'ttl' => array(
            'type'=>'time',
            'default' => 0,
            'comment' => app::get('base')->_('过期时间,0代表不过期'),
        ),
    ),
    'index' => 
    array (
        'ind_prefix' => 
        array (
            'columns' => ['prefix'],
        ),
        'ind_key' => 
        array (
            'columns' => ['key'],
        ),
    ),
    'engine' => 'innodb',
    'comment' => app::get('base')->_('kvstore存储表'),
);
```

<a name="dbal-types"></a>
## DBAL类型

#### DBAL类型属性

下表是dbal类型与mysqll类型的对应表, 其中notnull和required属性是所有dbal类型天生具备的.

<table width="100%">
    <tr>
        <th>doctrine类型</th>
        <th>默认mysql类型</td>
        <th>length</th>
        <th>precision</th>
        <th>scale</th>
        <th>autoincrement</th>
        <th>unsigned</th>
        <th>fixed</th>
    </tr>
    <tr>
        <td>array</td>
        <td>text</td>
        <td>true</td>
        <td></td>
        <td></td>        
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>array_simple</td>
        <td>text</td>
        <td></td>
        <td></td>        
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>json_array</td>
        <td>text</td>
        <td></td>
        <td></td>        
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>bigint</td>
        <td>bigint</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>boolean</td>
        <td>tinyint(1)</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>datetime</td>
        <td>datetime</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>datetimez</td>
        <td>datetime</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>date</td>
        <td>date</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>time</td>
        <td>time</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>decimal</td>
        <td>numeric(10,0)</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>    
    <tr>
        <td>integer</td>
        <td>int</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>object</td>
        <td>text</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>smallint</td>
        <td>smallint</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>string</td>
        <td>varchar(255)</td>
        <td>true</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>true</td>
    </tr>
    <tr>
        <td>text</td>
        <td>longtext</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>binary</td>
        <td>varbinary(255)</td>
        <td>true</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>true</td>
    </tr>
    <tr>
        <td>blob</td>
        <td>longblob</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>float</td>
        <td>double precision</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>guid</td>
        <td>char(36)</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>text</td>
        <td>longtext</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>    
</table>

<a name="buildin-types"></a>
## 内置预定义类型

<a name="table-define"></a>
## 表结构定义
#### 字段定义

```php
return array(
    'bigint' => array(
        'type' => 
    )
    
```
#### 所以定义

<a name="finder-define"></a>
## finder定义



