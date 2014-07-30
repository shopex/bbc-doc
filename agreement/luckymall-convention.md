# LuckyMall编码规范
## ECStore开发约定
### dump方法的使用
开发中尽量避免使用dump获取数据(性能考虑)

(待)save
    
### 数据库操作
避免直接写sql语句，尽量利用系统的dbeav(避免出错和安全考虑)

### POST、GET请求
禁止不检查过滤POST或者GET就直接插入数据库

过滤掉非ecstore功能的非法尝试字段，不允许将传过来的值直接save方法保存

### model和lib代码
业务逻辑代码避免放在model，做轻model层

代码功能应当单一，避免过多业务逻辑判断，导致代码不能通用和后续升级代码困难

<a name="comment-agreement"></a>
