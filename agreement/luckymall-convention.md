# LuckyMall编码规范

## 表结构规范
**建表时如果表内需要定义一下字段, 需要遵照此命名规范:**
- 最后修改时间 modified_time
- 创建时间    created_time
- 排序       order_sort
- 假删除     disabled

 

## app命名规则及开发规范
### 系统级服务APP

> **定义** `系统级服务APP`, 系统框架及基础服务. 供给其他各类型APP进行调用(library). 例如: routing/队列服务/RPC等

**调用规范**
<table width="100%">
    <tr>
        <td></td>
        <td>本app(是否有)</td>
        <td>系统级服务APP</td>
        <td>业务系统APP</td>
        <td>基础业务服务APP</td>
    </tr>
    <tr>
        <td>lib</td>
        <td>√</td>
        <td>√</td>
        <td>×</td>
        <td>×</td>
    </tr>
    <tr>
        <td>model</td>
        <td>√</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
    </tr>
    <tr>
        <td>controller&view</td>
        <td>√(后端)</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
    </tr>
</table>


### 业务系统APP

> **定义** `业务系统APP`为前端业务应用, 通过`业务系统APP`获取数据. 本身不存放任何数据

**调用规范**
<table width="100%">
    <tr>
        <td></td>
        <td>本app(是否有)</td>
        <td>系统级服务APP</td>
        <td>业务系统APP</td>
        <td>基础业务服务APP</td>
    </tr>
    <tr>
        <td>lib</td>
        <td>√</td>
        <td>√</td>
        <td>×</td>
        <td>√</td>
    </tr>
    <tr>
        <td>model</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
    </tr>
    <tr>
        <td>controller&view</td>
        <td>√(前端)</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
    </tr>
</table>

## 基础业务服务APP

> **名词定义:基础业务服务APP**

**调用规范**
<table width="100%">
    <tr>
        <td></td>
        <td>本app(是否有)</td>
        <td>系统级服务APP</td>
        <td>业务系统APP</td>
        <td>基础业务服务APP</td>
    </tr>
    <tr>
        <td>lib</td>
        <td>√</td>
        <td>√</td>
        <td>×</td>
        <td>√(尽可能少)</td>
    </tr>
    <tr>
        <td>model</td>
        <td>√</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
    </tr>
    <tr>
        <td>controller&view</td>
        <td>√(后端)</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
    </tr>
</table>


## dump方法的使用
开发中尽量避免使用dump获取数据(性能考虑)


(待)save
    
## 数据库操作
避免直接写sql语句，尽量利用系统的dbeav(避免出错和安全考虑)

## POST、GET请求
禁止不检查过滤POST或者GET就直接插入数据库

过滤掉非ecstore功能的非法尝试字段，不允许将传过来的值直接save方法保存

## model和lib代码
业务逻辑代码避免放在model，做轻model层

代码功能应当单一，避免过多业务逻辑判断，导致代码不能通用和后续升级代码困难

<a name="comment-agreement"></a>
