# LuckyMall编码规范

## 表结构规范
**建表时如果表内需要定义一下字段, 需要遵照此命名规范:**
- 最后修改时间 modified_time
- 创建时间    created_time
- 排序       order_sort
- 假删除     disabled

 

## app命名规则及开发规范
### 系统级服务APP
<table width="100%">
    <tr>
        <td></td>
        <td>本app</td>
        <td>系统级服务APP</td>
        <td>业务系统APP</td>
        <td>系统级服务APP</td>
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


> **定义** 系统级服务`包括框架及底层服务
- 允许存在model和lib
- 只允许存在管理类的controller和view
- 允许调用其他`系统级服务APP`的lib
- 不允许调用除`系统级服务APP`以外类型的APP的所有类及方法
- 开放lib对外服务

例如:routing/队列服务/RPC等


### 业务系统APP
> **定义** `业务系统APP`为前端业务应用, 通过`业务系统APP`获取数据. 本身不存放任何数据
- 允许存在前端controller view 和 library
- 不允许存在model
- 不允许调用其他`业务系统APP`的lib和

- 允许调用所有library

- 允许调用其他`系统级服务APP`的lib
- 只允许存在管理类的controller和view
- 不允许调用除`系统级服务APP`以外类型的APP的所有类及方法
- 开放lib对外服务


> **名词定义:业务系统APP** `业务系统APP`所指前端业务app. 包含前端的控制器和视图 . 可以调用`系统级服务APP`的lib. 禁止包含lib和model 同时禁止调用`系统级服务APP` 和 `基础业务服务APP` 的model

> **名词定义:基础业务服务APP**  1.只提供针对`业务系统APP`提供library. 2.可以调用本APP的model 3.允许调用其他`基础业务服务APP`的library(尽可能的少), 4.但不允许调用其他`基础业务服务APP`的model 

- 系统级服务APP
  避免使用前缀`top`和`sys`
- 业务系统APP
  使用`top`作为前缀
- 基础业务服务APP
  使用`sys`作为前缀

建立新的APP, 需要和L进行确认  

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
