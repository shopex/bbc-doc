# LuckyMall编码规范

- [表结构规范](#table-agreement)
- [app命名规则及开发规范](#app-name-agreement)
- [异常处理规范](#exception-agreement)
- [dump方法的使用](#dump-agreement)
- [POST、GET请求](#request-agreement)
- [model和lib代码](#model-lib-agreement)

<a name="table-agreement"></a>
## 表结构规范
**建表时如果表内需要定义一下字段, 需要遵照此命名规范:**
- 最后修改时间 modified_time
- 创建时间    created_time
- 排序       order_sort
- 假删除     disabled

 
<a name="app-name-agreement"></a>
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
        <td>基础业务服务API</td>
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
    <tr>
        <td>API</td>
        <td></td>
        <td></td>
        <td></td>
        <td×</td>
    </tr>
</table>


### 业务系统APP

> **定义** `业务系统APP`为前端业务应用. 简单说, 每一个`业务系统APP`都是可以独立部署的站点. 通过`业务系统APP`获取数据. 本身不存放任何数据

**调用规范**
<table width="100%">
    <tr>
        <td></td>
        <td>本app(是否有)</td>
        <td>系统级服务APP</td>
        <td>业务系统APP</td>
        <td>基础业务服务APP</td>
        <td>基础业务服务API</td>
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
     <tr>
        <td>api</td>
        <td>√</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
    </tr>
</table>

## 基础业务服务APP

> **名词定义:基础业务服务APP** 提供服务供给`业务系统APP`调用. 每一个`基础业务服务APP`其实都可以包装成一组服务API组件.

**调用规范**
<table width="100%">
    <tr>
        <td></td>
        <td>本app(是否有)</td>
        <td>系统级服务APP</td>
        <td>业务系统APP</td>
        <td>基础业务服务APP</td>
        <td>基础业务服务API</td>
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
    <tr>
        <td>API</td>
        <td>√</td>
        <td>×</td>
        <td>×</td>
        <td>×</td>
    </tr>
</table>

<a name="exception-agreement"></a>
## 异常处理规范
**php SPL提供的异常处理类**
> - Exception
> 	- LogicException
> 	  - BadFunctionCallException 
> 	  - BadMethodCallException
>       - DomainException
>       - InvalidArgumentException
>       - LengthException
>     - RuntimeException
>       - OutOfBoundsException
>       - OutOfRangeException
>       - OverflowException
>       - RangeException
>       - UnderflowException
>       - UnexpectedValueException

### 抛出错误规范
- 底层错误抛出RuntimeException或继承RuntimeException的exception
- 业务或逻辑代码代码需需要抛出LogicException或继承RuntimeException的exception
- 禁止使用trigger_error抛出错误, 进行处理
- 尽可能进准抛出SPL提供的具体错误处理类

> **注意** 系统中错误(error_reporting定义之错误)抛出会被base_exception_handler接管, 并抛出ErrorException 

<a name="dump-agreement"></a>
## dump方法的使用
开发中尽量避免使用dump获取数据(性能考虑)


(待)save
    
## 数据库操作
避免直接写sql语句，尽量利用系统的dbeav(避免出错和安全考虑)

<a name="request-agreement"></a>
## POST、GET请求
禁止不检查过滤POST或者GET就直接插入数据库

过滤掉非ecstore功能的非法尝试字段，不允许将传过来的值直接save方法保存

<a name="model-lib-agreement"></a>
## model和lib代码
业务逻辑代码避免放在model，做轻model层

代码功能应当单一，避免过多业务逻辑判断，导致代码不能通用和后续升级代码困难

<a name="lib-data-agreement"></a>
## lib/data下类的方法命名和规范
- 获取单条记录详细信息方法命名 get***Info($filter);
- 获取多条记录信息方法命名 get***List($filter);
- @param $filter array 包含fields:要获取的字段名，start:从什么位置开始，limit:每次取几条记录,order_by:根据什么排序,其他为其他fliter过滤字段 
- 所以此类方法获取信息，要根据传入的$filter组织数据，例如默认fields字段,默认排序字段，过滤非系统字段筛选
