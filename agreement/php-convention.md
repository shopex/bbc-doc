# PHP编码规范
如果您是ecstore开发人员，请详细阅读以下规范，并严格遵守。这样在保证您代码可读性的同时还可以大大减少我们的工作量。

- [命名](#named-agreement)
- [PHP约定](#php-agreement)
- [注释](#comment-agreement)
- [代码布局](#code-topology-agreement)

<a name="named-agreement"></a>
## 命名
### 文件命名
> **Note:** 包含任何 PHP 代码的任何文件应扩展名应当为 ".php" 脚本除外。
ecos的文件命名的准则是，class名称与文件名关联。关联的方法是以包所在的目录为根目录，到类所在的文件，将目录分隔符改为下划线即为此类的名称。
ecos的app目录下存放的是我们的主要代码，类命名时app则不需要加上

- 文件名要小写
- 控制器文件放在app下的controller文件夹下,类的命名时用'''ctl'''代替'''controller'''，如 ''app/b2c/controller/site/order.php'' 对应类名称 b2c_ctl_site_order
- 模型层文件放在app下的model文件夹下,类的命名时用'''mdl'''代替'''model'''，如 ''app/b2c/model/orders.php'' 对应类名称 b2c_mdl_orders
- 类库层文件放在app下的lib文件夹下,类的命名时用不用写'''lib'''，如 ''app/b2c/lib/order/delivery.php'' 对应类名称 b2c_order_delivery
- 数据库定义文件 放在app下的dbschema文件夹下,命名时内部数组索引的值与文件名同名，如 ''app/b2c/dbschema/cart.php'' 对应文件内数组名称为 $db['cart']=array (

### 类命名
使用下划线法则，首字母小写。

    class b2c_ctl_site_order {
    }

### 类的成员变量声明
变量的声明必须在类的顶部，在方法的上方声明。
不允许使用 var 声明，要用 private、 protected 或 public。 直接访问 public 变量是允许的但不鼓励。
### 类的构造函数命名
不推荐使用与类名相同的名称写构造函数
**推荐示范**

    class desktop_email_smtp {
          public function __construct($app)
          {
          }
    }

**不推荐示范**

    class desktop_email_smtp {
          public function desktop_email_smtp($app)
          {
          }
    }

### 函数(方法,接口)命名
**使用骆驼法则，首字母小写**

    public function getList($cols='*', $filter=array(), $offset=0, $limit=-1, $orderby=null)
    {
    }

private 和 protected 的规则与变量一样（改）
### 变量命名
**使用骆驼法则，首字母小写**

    $callbackFunctions['brand_name'];

**如为私有变量，请在变量名前方加上双下划线**

    private $__adapter;

**如为受保护变量，请在变量名前方加上下划线**

    protected $_render = null;

### 常量命名
所有字母大写。

    define('DEBUG_JS',false)
    
<a name="php-agreement"></a>
## PHP约定
### 文件编码
请调整您的编辑器文件编码为UTF-8，并关闭UTF-8 BOM的功能。

请不要使用windows自带的记事本编辑项目文件。
### 缩进
详细的代码缩进会在后面提到，这里需要注意的是，ecstore中的代码缩进使用的是4个空格(space)，而不是制表符(tab)，请务必调整。
### UNIX编码规范
**php文件必须留出最后一个空行**

    <?php
    //this is a test file
    echo 'hello';
    //<---这行留空
    
而且，如果此文件为纯php文件(没有嵌套HTML)，请不要用?>符号结尾，保持最后一行留空即可。
### UNIX风格换行
我们在这里使用UNIX风格的换行符，即只有换行(LF或"\n")没有回车(CR或"\r")，请在你的编辑器内调整
### php标签
不允许使用php短标签，必须使用标准标签
**正确示范**

    <?php
    //...
    ?>

**错误示范**

    <?
    //...
    ?>
    
### 行的最大长度
一行 80 字符以内是比较合适，应当努力在可能的情况下保持每行代码少于 80 个字符，在有些情况下，长点也可以, 但最多为 120 个字符。
### 行尾空格
请保持您的行尾已经去除空格
### 大括号放置
函数的起始大括号放在下行开头，其他的起始大括号请放在行的结尾

结束大括号一般独自占据一行

	class TypechoDb {
	   public function __construct($adapter = __TYPECHO_DB_ADAPTER__)
	   {
	       if (!defined($const = '__TYPECHO_DB_HOST__') || 
	       !defined($const = '__TYPECHO_DB_PORT__') || 
	       !defined($const = '__TYPECHO_DB_NAME__') || 
	       !defined($const = '__TYPECHO_DB_USER__') || 
	       !defined($const = '__TYPECHO_DB_PASS__') ||
	       !defined($const = '__TYPECHO_DB_CHAR__')) {
	       } else {
	       }
	   }
	}   
	
### 空格使用
**除了参数之间要使用空格外，所有操作符之间都要使用空格，包括字符连接符(.)**

    $host . ':' . $port

**函数名和括参数的圆括号中间没有空格**

    function save(&$sdf, $mustUpdate = null)
    {
    }

function和函数名之间只能有一个空格。

使用 if 和 elseif 的控制语句在条件语句的圆括号前后都必须有一个空格。

	if ($a != 2)
	{
	    $a = 2;
	} 
	elseif ($a == 3) 
	{
	    $a = 4;
	} 
	else
	{
	    $a = 7;
	}

### 逗号放置
**函数中用逗号来分隔参数，所有的参数与前面的逗号之间要空格(第一个参数除外)**

    public function getList($cols='*', $filter=array(), $offset=0, $limit=-1, $orderby=null)

### 字符串文字
**当字符串是文字(不包含变量)，应当用单引号（ apostrophe ）来括起来**

    $a = 'Example String';
    
### 包含单引号（'）的字符串文字
**当文字字符串包含单引号（apostrophe ）就用双引号括起来，特别在 SQL 语句中有用**

    $sql = "SELECT `id`, `name` from `people` WHERE `name`='Fred' OR `name`='Susan'";

> **Note:** 在转义单引号时，上述语法是首选的，因为很容易阅读。

### 变量替换
**变量替换有下面这些形式**

    $greeting = "Hello $name, welcome back!";

    $greeting = "Hello {$name}, welcome back!";
    
**为保持一致，这个形式不允许**

    $greeting = "Hello ${name}, welcome back!";

### 字符串连接
**字符串必需用 "." 操作符连接，在它的前后加上空格以提高可读性**

    $company = 'EC' . ' ' . 'Store';
    
### 函数和方法的传址引用
传址在调用时是严格禁止的。
**示例**

    class Foo {
        public function bar(&$baz)
        {
        }
    }

**正确示范**

    $this->bar($baz);
**错误示范**

    $this->bar(&$baz);

### if/else/elseif语句
如果是单条if语句，后面大括号请不要省略,以增强可读性(改)

**推荐示范**

    if ($a != 2)  $a = 2;

**如果是有else则把大括号放下来**

	if ($a != 2) 
	{
	    $a = 2;
	    if ($b) 
	    {
	        $c = 3;
	    } 
	}
	else
	{
	    $a = 1;
	}


### switch 语句
在 "switch" 结构里的控制语句在条件语句的圆括号前后必须都有一个单个的空格。

"switch" 里的代码必须有四个空格缩进，在"case"里的代码再缩进四个空格:

	switch ($numPeople) {
	    case 1:
	        break;
	
	    case 2:
	        break;
	
	    default:
	        break;
	}
    
switch 语句应当有 default。

<a name="ecstore-agreement"></a>
## 注释
注释原则上参考[phpdoc规范](http://www.phpdoc.org/docs/latest/index.html)
### 头部注释
头部注释主要用来阐述此文件的版权，协议，作者，版本。对于ecos核心开发组，请按照下列形式书写(你可以把它设置为代码模板)。

	<?php
	/**
	 * Ecos Platform
	 *
	 * @author     bryant
	 * @copyright  Copyright (c) 2005-2014 ShopEx Technologies Inc. (http://www.shopex.cn)
	 * @license    http://ecos.shopex.cn/ ShopEx License
	 */

 其中author为作者的名称，请自己命名。

### 引用文件和定义常量注释
文件的引用和常量的定义一般都放置在文件的开头部分:

	/** 数据库用户名 **/
	define('DB_USER', 'root');
	
	/** 是否开启xhprof **/
    require_once(ROOT_DIR."/app/serveradm/xhprof.php")
    
多行注释，使用如下形式:

	/**
	 * 是否开启javascript或者css的无压缩模式
	 * true表示开启
	 * false表示关闭
	 *
	 */
	define('DEBUG_JS',true);
	define('DEBUG_CSS',false);
   
### 类(接口)注释
一个类(接口)在声明的时候必须声明其作用，如果是类库文件，则必须声明其包所属。此注释参考phpdoc规范。

	/**
	 * setting-系统配置类 
	 *
	 * @copyright  Copyright (c) 2005-2014 ShopEx Technologies Inc. (http://www.shopex.cn)
	 * @license  http://ecos.shopex.cn/ ShopEx License
	 * @package base
	 * @author bryant@shopex.cn
	 * @license
	 */

     class base_setting {
     }

### 函数(方法,接口)注释
函数(方法,接口)的声明注释参考phpdoc规范。


> **Note:** 如果是无返回函数，必须指明@return void，请尽量在函数参数表中使用已知类型。
如果函数中抛出异常则必须指明@throws <异常类型>。

	/**
	 * 自增
	 * @var string $key
	 * @var int $offset
	 * @access public
	 * @return int
	 */
	public function increment($key, $offset=1) 
	{
	
	    /**
	     * 优惠方案应用
	     * @param array $object 引用的一个商品信息
	     * @param array $aConfig 优惠的设置
	     * @param array $cart_object 购物车信息(预过滤的时候这个为null)
	     * @return void 引用处理了,没有返回值
	     */
	    public function apply(&$object,$aConfig,&$cart_object = null)
	    {
	    }
	}
    
### 程序行间注释
行间注释采用双斜线注释法

	//实例化适配器对象
	$this->_adapter = new $adapter();

<a name="code-topology-agreement"></a>
## 代码布局
### 类布局
类的内部方法排序为:
- _construct
- private
- protected
- public
- __destruct

属性的排序为:
- const
- private
- protected
- public

### 空行使用
使用空行可以分割代码的不同区块，做建议，具体请各位自己把握。

请不要使用每行一个空行编码风格。
