#B2B2C JavaScript 接口调用说明

##概览

B2B2C 产品​所有 JavaScript（以下简称JS） 组件和接口都依赖于 Jquery 1.x 版，绝大部分的JS文件已经在每个页面的head里引入，所以只需要直接调用即可。下面列出其中的JS目录结构。

    app/
    ├── site/
    │   └── statics/
    │      └── scripts/
    │           ├── lib/                    -包含所有的框架级文件
    │           │   ├── lab.js              -异步加载模块框架
    │           │   ├── jquery.js           -jquery框架
    │           │   └── jquery.cookie.js    -jquery的cookie读写插件
    │           ├── tools.js                -所有的工具函数
    │           ├── dialog.js               -弹层/对话框组件
    │           ├── switchable.js           -可切换组件（Tabs，幻灯，跑马灯）
    │           └── uploader.js             -文件（图片）上传组件
    └── topc/
        └── statics/
           └── scripts/
                ├── main.js                 -前台环境用到的全局函数
                ├── area_select.js          -地区三级联动组件
                ├── datepicker.js           -日期选择组件
                ├── formplus.js             -包含表单填写/密码检测/表单元素兼容性相关
                ├── localstorage.js         -本地存储兼容性组件
                ├── tips.js                 -工具提示组件
                └── validate.js             -表单验证组件和异步提交拦截

##工具

相当多的针对JS的工具在这里同样适用，常用的有：jslint(jshint)，chrome 开发者工具，Dash(Mac平台)，JSON editor。



##工具类函数 _tools.js_

系统级工具类函数，全局使用。包括以下几个函数/插件：

###获取 head 元素

`document.head` 表示 `<head>` 元素，此处统一浏览器兼容性，在需要异步插入 style 文件或 scrpit 文件到文档头部时调用。

###判断是否为 dom 元素

**函数：**
isElement(dom)

**作用：**
判断参数是否为一个 dom 元素。

**参数：**
dom：任意类型的参数

**返回值：**
(Boolean)是 dom 对象返回 true，否则返回 false。

###模板字符替换

**函数：**
substitute(string, object)

**作用：**
以json直接量替换字符串中的 {xx} 部分，可看做一个简单的html模板

**参数：**
string：要被替换的字符串
object：对应的json直接量

**返回值：**
(String)被替换后的字符串

###解析JS代码

**函数：**
evalScripts(string, content, execScript)

**作用：**
解析文本中js代码，并可以立即执行

**参数：**
string：要解析的字符串
content：解析后的字符串插入到此dom元素
execScript：是否立即执行JS代码

**返回值：**
(String)解析后的字符串(html代码)

###页面最大 z-index

**函数：**
maxZindex(scope, increase)

**作用：**
获取页面所有元素中最大的z-index是多少

**参数：**
scope：查找范围的dom元素
increase：增量

**返回值：**
(Number)最终计算的结果

###倒计时时钟

**函数：**
countdown(element, options)

**作用：**
通用倒计时，包括倒计时所在容器，倒数秒数，显示方式，回调。

**参数：**
element: 要显示的位置的dom元素
options: 配置参数，包含以下参数：
    start：倒计时的秒数
    secondOnly：显示方式（是否只显示秒）
    callback：倒计时完成后的回调

**返回值：**
无

###获取元素（包含自身）的html字符串

**函数：**
$.fn.outerHtml()

**作用：**
类似IE的outerHTML，在此统一为 `outerHtml`，绑定到jQuery对象上。

**参数：**
无

**返回值：**
(String)包含自身的html字符串

###获取元素的内补或外补​

**函数：**
$.fn.patch(type)

**作用：**
获取元素内边距、外边距或边框宽度

**参数：**
type：获取哪一部分样式，可以为padding,margin或border

**返回值：**
(JSON)根据type计算出的最终结果

###双dom9点定位

**函数：**
$.fn.position(options)

**作用：**
根据9个方位由一个dom定位到另一个dom上的位置

**参数：**
options：配置项的JSON直接量，包括：
    relative：要定位到的元素，默认为body
    x：定位的x轴的位置，默认为中心
    y：定位到y轴的位置，默认为中心

**返回值：**
(DOM)自身

###数组some方法

**函数：**
Array.some(fn, thisArg)

**作用：**
为不支持数组some方法的浏览器增加some方法，使得回调中执行的结果只要有一个为真值，就返回true，否则为false。它只对数组中的非空元素执行指定的函数，没有赋值或者已经删除的元素将被忽略。
some 不会改变原有数组。

**参数：**
fn：要对每个数组元素执行的回调函数，此函数可以有三个参数：当前元素，当前元素的索引和当前的数组对象。
thisArg：在执行回调函数时定义的this对象。如果没有定义或者为null，那么将会使用全局对象。

**返回值：**
(Boolean)根据执行结果返回true或false

**示例：**

检查是否所有的数组元素都大于等于10：

    function isBigEnough(element, index, array) {
        return (element >= 10);
    }
    var passed = [2, 5, 8, 1, 4].some(isBigEnough);
    // passed is false
    passed = [12, 5, 8, 1, 4].some(isBigEnough);
    // passed is true

    [2, 5, 8, 1, 4].some(isBigEnough)： false
    [12, 5, 8, 1, 4].some(isBigEnough)： true

**延伸方法：**
$.fn.some：给jQuery对象增加类似数组的some方法

###数组every方法

**函数：**
Array.every(fn, thisArg)

**作用：**
为不支持数组every方法的浏览器增加every方法，使得回调中执行的结果必须全部为真值，才返回true，否则为false。它只对数组中的非空元素执行指定的函数，没有赋值或者已经删除的元素将被忽略。
every 不会改变原有数组。

**参数：**
fn：要对每个数组元素执行的回调函数，此函数可以有三个参数：当前元素，当前元素的索引和当前的数组对象。
thisArg：在执行回调函数时定义的this对象。如果没有定义或者为null，那么将会使用全局对象。

**返回值：**
(Boolean)根据执行结果返回true或false

**示例：**

测试数组大小：

    function isBigEnough(element, index, array) {
        return (element >= 10);
    }
    var passed = [12, 5, 8, 130, 44].every(isBigEnough);
    // passed is false
    passed = [12, 54, 18, 130, 44].every(isBigEnough);
    // passed is true

    [12, 5, 8, 130, 44].every(isBigEnough): false
    [12, 54, 18, 130, 44].every(isBigEnough): true

**延伸方法：**
$.fn.some：给jQuery对象增加类似数组的some方法

###创建面向对象函数

**函数：**
new Class(o, props)

**作用：**
创建类似面向对象编程的函数

**参数：**
o：JSON对象，包含所有Class的方法，如果含有 `init` 方法就直接执行。
props：JSON对象，为此对象添加其它公有方法。

**返回值：**

###打印调试

**函数：**
log(...)

**作用：**
替代 `console.log`，打印所列出的变量。并且带历史记录history。如果不支持 `console` 就用 `alert` 替代

**参数：**
可以有多个，要打印的变量值或任意类型的值

**返回值：**
无


