# 数据表定义

- [简介](#introduction)
- [DBAL类型](#dabl-types)
- [内置预定义类型](#buildin-types)
- [表结构定义](#table-define)
- [finder定义](#finder-define)

<a name="introduction"></a>
## [简介]
通过dbschema配置文件, 定义数据库

  - 描述表结构, 生成对应的实体表
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

下表是dbal类型与mysqll类型的对应表, 其中`notnull`和`required`属性是所有dbal类型天生具备的.
 
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
        <td>√</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
    </tr>
    <tr>
        <td>array_simple</td>
        <td>text</td>
        <td>×</td>
        <td>×</td>        
        <td>×</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
    </tr>
    <tr>
        <td>json_array</td>
        <td>text</td>
        <td>×</td>
        <td>×</td>        
        <td>×</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
    </tr>
    <tr>
        <td>bigint</td>
        <td>bigint</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
        <td>√</td>
        <td>√</td>
        <td>×</td>
    </tr>
    <tr>
        <td>boolean</td>
        <td>tinyint(1)</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
    </tr>
    <tr>
        <td>datetime</td>
        <td>datetime</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
    </tr>
    <tr>
        <td>datetimez</td>
        <td>datetime</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
    </tr>
    <tr>
        <td>date</td>
        <td>date</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
    </tr>
    <tr>
        <td>time</td>
        <td>time</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
    </tr>
    <tr>
        <td>decimal</td>
        <td>numeric(10,0)</td>
        <td>×</td>
        <td>√</td>
        <td>√</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
    </tr>    
    <tr>
        <td>integer</td>
        <td>int</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
        <td>√</td>
        <td>√</td>
        <td>×</td>        
    </tr>
    <tr>
        <td>object</td>
        <td>text</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
    </tr>
    <tr>
        <td>smallint</td>
        <td>smallint</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
        <td>√</td>
        <td>√</td>
        <td>×</td>        
    </tr>
    <tr>
        <td>string</td>
        <td>varchar(255)</td>
        <td>√</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
        <td>√</td>
    </tr>
    <tr>
        <td>text</td>
        <td>longtext</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
    </tr>
    <tr>
        <td>binary</td>
        <td>varbinary(255)</td>
        <td>√</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
        <td>√</td>
    </tr>
    <tr>
        <td>blob</td>
        <td>longblob</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
    </tr>
    <tr>
        <td>float</td>
        <td>double precision</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
    </tr>
    <tr>
        <td>guid</td>
        <td>char(36)</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
    </tr>
    <tr>
        <td>text</td>
        <td>longtext</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
    </tr>    
</table>

[doctrine dbal tpes文档](http://docs.doctrine-project.org/projects/doctrine-dbal/en/latest/reference/types.html)有详细说明

<a name="buildin-types"></a>
## 内置预定义类型

<table width="100%">
    <tr>
        <th>buildin type</th>
        <th>DBAL type</td>
        <th>options</th>
    </tr>
    <tr>
        <td>bool</td>
        <td>boolean</td>
        <td></td>
    </tr>
    <tr>
        <td>money</td>
        <td>decimal</td>
        <td>['precision' => 20, 'scale' = 3]</td>
    </tr>
    <tr>
        <td>email</td>
        <td>string</td>
        <td></td>
    </tr>
    <tr>
        <td>time</td>
        <td>integer</td>
        <td>['unsigned' => 'true']</td>
    </tr>
    <tr>
        <td>region</td>
        <td>string</td>
        <td></td>
    </tr>
    <tr>
        <td>password</td>
        <td>string</td>
        <td>['length' => 32]</td>
    </tr>
    <tr>
        <td>number</td>
        <td>integer</td>
        <td>['unsigned'  => true]</td>
    </tr>
    <tr>
        <td>float</td>
        <td>float</td>
        <td></td>
    </tr>
    <tr>
        <td>gender</td>
        <td>string</td>
        <td>['length' => 6]</td>
    </tr>
    <tr>
        <td>ipaddr</td>
        <td>string</td>
        <td>['length' => 20]</td>
    </tr>
    <tr>
        <td>serialize</td>
        <td>text</td>
        <td></td>
    </tr>
    <tr>
        <td>last_modify</td>
        <td>integer</td>
        <td>['unsigned' => true]</td>
    </tr>
</table>


<a name="table-define"></a>
## 表结构定义
#### 字段定义

每个字段需要指定`type`(类型), 类型支持四种方式**DBAL类型**/**内置预定义类型**/**表关联类型**/**enum类型**

**DBAL类型**/**内置预定义类型**可参照上文的两张对应表.

- **DBAL类型**需要根据具体类型, 定义对应的选项. 例如, `decimal`类型对应着precision和scale选项. 如果不填,默认分别为10和0.

以下是**DBAL类型**:decimal的例子 
```php
return array(
    'weight => array(
        'type' => 'decimal',
        'precision' => 20,
        'scale => 2,
        'required => true,
        'default' => 0,
    ),
);    
```

以下是**DBAL类型**:integer的例子 
```php
return array(
    'id => array(
        'type' => 'integer',
    ),
);    
```

以下是**DBAL类型**:bigint的例子 
```php
return array(
    'id => array(
        'type' => 'bigint',
        'autoincrement => true,
    ),
```

以下是**DBAL类型**:bigint的例子 
```php
return array(
    'id => array(
        'type' => 'bigint',
        'autoincrement => true,
    ),
);
```


- **内置预定义类型**, 是直接对应着**DBAL**类型. 但与**DBAL类型**的设置不同, 不需要填写额外的选项, 因为**内置预定义类型**已经预设了选项. 例如: `money`类型对应着**DBAL类型**的`decimal`, `precision`为20, `scale`为3, 如果对应着mysql的类型为`numeric(10,0)`

以下是**内置预定义类型**:money
```php
return array(
    'price' => array(
        'type' => 'money'
    ),
);    
```


- **表关联类型**, 按照关联表对应字段的类型建立本字段. 例如, `商品表(sysitem_item)`存在`类目ID(cat_id)`, 那么在设置这个字段类型时最好的方式是指定跟`syscategory`表的`cat_id`一样就行了

以下是**表关联类型**的例子, `sysitem_item`的`cat_id`关联`syscategory_cat的`cat_id`
```php
return array(
    'cat_id => array(
        'type' => 'table:cat@syscategory'
    ),
);    
```

> **注意:** `表关联类型`, 只是作为生成字段时的参照, 没有其他用途

- **enum类型**, type里直接写数组就可以了, 其中`key`为`enum`里的值, `value`为`comment`

以下是**enum类型**的例子

```php
return array(
    'status' => array(
        'type' => array(
            'WAIT_BUYER_PAY' => '等待买家付款',
            'WAIT_SELLER_SEND_GOODS' => '等待卖家发货,即:买家已付款',
            'WAIT_BUYER_CONFIRM_GOODS' => '等待买家确认收货,即:卖家已发货',
            'TRADE_BUYER_SIGNED' => '买家已签收,货到付款专用',
            'TRADE_FINISHED' => '交易成功',
            'TRADE_CLOSED_AFTER_PAY' => '付款以后,用户退款成功，交易自动关闭',
            'TRADE_CLOSED_BEFORE_PAY' => '付款以前,卖家或买家主动关闭交易',
        ),
        'default' => 'WAIT_BUYER_PAY',
        'required' => true,
        'comment' => app::get('systrade')->_('子订单状态'),
    ),
);    
```
#### 索引定义
- 主键定义

当只有一个主键的时候
```php
return  array(
    'columns' => array(
        'cart_id' => array(
            'type' => 'number',
            //'pkey' => true,
            'autoincrement' => true,
            'required' => true,
        ),
    ),
    'prmary' => 'cart_id'

```
当有多主键的时候
```php
return array (
    'columns' =>
    array (
        'id' =>
        array (
            'type' => 'number',
            'required' => true,
        ),
        'index_name' =>
        array (
            'type' => 'string',
            'length' => 50,
            'required' => true,
        ),
        //...
    ),
    'primary' => ['id', 'index_name'],
    'index' => array(
        'ind_last_modify' => ['columns' => ['last_modify']],
    ),
    'version' => '$Rev: 40918 $',
);
```
> **注意:** 建议使用一个自增主键. 如果当有多主键的时候, 可以设置一个自增主键, 同时将多键作为`unique key`. 如果使用多主键在使用finder时会出现诡异问题.

- 索引定义

<a name="finder-define"></a>
return array (
    'columns' => array (
        //...
        'last_modify' =>
        array (
            'type' => 'last_modify',
        ),
        //...
    ),

    'index' => array(   //索引名称
        'ind_last_modify' => [
            'columns' => ['last_modify'], // 需要建立索引的字段名
            'prefix' => 'unique' // 目前只支持unqiue, 或者不填写
         ],
    ),

## finder定义
