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

相当多的针对JS的工具在这里同样适用，常用的有：jslint(jshint)，chrome 开发者工具，Dash(Mac平台文档工具)，JSON editor。



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
- string：要被替换的字符串
- object：对应的json直接量

**返回值：**
(String)被替换后的字符串

###解析JS代码

**函数：**
evalScripts(string, content, execScript)

**作用：**
解析文本中js代码，并可以立即执行

**参数：**
- string：要解析的字符串
- content：解析后的字符串插入到此dom元素
- execScript：是否立即执行JS代码

**返回值：**
(String)解析后的字符串(html代码)

###页面最大 z-index

**函数：**
maxZindex(scope, increase)

**作用：**
获取页面所有元素中最大的z-index是多少

**参数：**
- scope：查找范围的dom元素
- increase：增量

**返回值：**
(Number)最终计算的结果

###获取配置项

**函数：**
dataOptions(element, prefix)

**作用：**
从元素的 `data-attrs` 属性中组织出配置项，以JSON方式输出。

**参数：**
- element: 要获取的目标dom元素
- prefix: 必需，前缀，在 `data-` 后面、要获取的配置项名前面。

**返回值：**
(JSON)最终配置项

###倒计时时钟

**函数：**
countdown(element, options)

**作用：**
通用倒计时，包括倒计时所在容器，倒数秒数，显示方式，回调。

**参数：**
- element: 要显示的位置的dom元素
- options: 配置参数，包含以下参数：
    - start：倒计时的秒数
    - secondOnly：显示方式（是否只显示秒）
    - callback：倒计时完成后的回调

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

###dom 9点定位

**函数：**
$.fn.position(options)

**作用：**
根据9个方位由一个dom定位到另一个dom上的位置

**参数：**
- options：配置项的JSON直接量，包括：
    - relative：要定位到的元素，默认为body
    - x：定位dom的x轴的位置，默认为中心
    - y：定位dom的y轴的位置，默认为中心

**返回值：**
(DOM)自身

###数组some方法

**函数：**
Array.some(fn, thisArg)

**作用：**
为不支持数组some方法的浏览器增加some方法，使得回调中执行的结果只要有一个为真值，就返回true，否则为false。它只对数组中的非空元素执行指定的函数，没有赋值或者已经删除的元素将被忽略。
some 不会改变原有数组。

**参数：**
- fn：要对每个数组元素执行的回调函数，此函数可以有三个参数：当前元素，当前元素的索引和当前的数组对象。
- thisArg：在执行回调函数时定义的this对象。如果没有定义或者为null，那么将会使用全局对象。

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
- fn：要对每个数组元素执行的回调函数，此函数可以有三个参数：当前元素，当前元素的索引和当前的数组对象。
- thisArg：在执行回调函数时定义的this对象。如果没有定义或者为null，那么将会使用全局对象。

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
- o：JSON对象，包含所有Class的方法，如果含有 `init` 方法就直接执行。
- props：JSON对象，为此对象添加其它公有方法。

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

##弹框组件 _dialog.js_

此弹框组件包含几个应用：弹层对话框/遮罩层/消息提示框。下面先来看下弹层对话框的应用。

###对话框 Dialog

####基本结构

以下对话框包含了对话框容器、头部和正文部分。

    <div class="dialog" data-module="dialog" tabindex="1">
      <div class="dialog-body">
        <div class="dialog-header">
          <h2>提示</h2>
          <span><button type="button" class="dialog-btn-close" title="关闭"><i>×</i></button></span>
        </div>
        <div class="dialog-content">
          <p>当我们提供两个，的所有属性都添加个参数提供数被省略。在这种情况下这样，我们可以加新的功能。这对于插件开新函数时是很有用的。请记住，目标对象将被修改，并且将通回。然而，如果我们想保留原对象，我们可以通过传递一个空对象作</p>
        </div>
      </div>
    </div>

####具体行为

一般情况下，通过点击行为弹出对话框，需要 JavaScript 脚本添加事件，如果需要遮罩层遮住下面的内容，需要增加 modal 参数：

    <button class="btn" id="btn_dialog"><span><span>对话框1</span></span></button>
    <div id="dialog" style="display:none">
      <p>当我们提供两个，的所有属性都添加个参数提供数被省略。在这种情况下这样，我们可以加新的功能。这对于插件开新函数时是很有用的。请记住，目标对象将被修改，并且将通回。然而，如果我们想保留原对象，我们可以通过传递一个空对象作</p>
    </div>

    $('#btn_dialog').click(function (e) {
        $('#dialog').dialog({
            width: 500,
            modal: true
        });
    });

或者如果是调用一个外部地址或内容为异步加载进来的，还可以使用：

    $.dialog(url, {
        modal: true,
        async: 'ajax'
    });

还可以通过 data 属性调用对话框组件，不需写 JavaScript 代码，只需要通过在一个起控制器作用的元素（例如：按钮/链接）上添加 `data-toggle="dialog"` 属性，同时加入 `data-target="#foo"` 属性，或者链接的 `href="#foo"` 属性，用于指向被控制的对话框。

      <button type="button" class="btn btn-lg" data-toggle="dialog" data-target="#one_dialog"><span><span>打开对话框</span></span></button>

      <div id="one_dialog">
        <p>我只是一段文字。</p>
      </div>

####参数

可以将选项通过 data 属性或 JavaScript 代码传递。对于 data 属性，需要将参数名称放到 `data-dialog-` 之后，例如 `data-dialog-modal="true"`。

名称 | 类型 | 默认值 | 描述
----|----|----|----
target|String or dom|null|弹出框内容元素，接受url或jquery对象
width|Number|0/auto|对话框外框宽度，默认自适应
height|Number|0/auto|对话框外框高度，默认自适应
type|String|null|弹框类型:nohead,notitle,noclose,或模板字串
title|String|'提示'|弹出框标题
load|Function|null|弹出框载入时触发事件
show|Function|null|弹出框显示时触发事件
close|Function|null|弹出框关闭时触发事件
autoHide|Number/Boolean|false|是否在几秒后自动消失
modal|Boolean/JSON|false|弹框是否出现遮罩，及遮罩的显示参数，参数含义请查看 Mask 一节。
position|JSON|(a JSON)|弹出框的定位，默认定位到屏幕中央，更多参数含义请直接查看 `$.fn.position` 函数
useIframeShim|Boolean|false|是否使用iframe遮盖，以便解决某些情况下 flash 层级问题。
async|Boolean/String|false|异步加载内容的方式
frameTpl|String|(html)|用iframe方式调用的模板
ajaxTpl|String|(html)|用ajax方式调用时的loading模板
asyncOptions|JSON|(a JSON)|异步请求时的参数，具体参数含义请参照 `jQuery.ajax`，同样支持 ajax 的事件
component|JSON|(a JSON)|弹出框的构成组件的class名，包括框容器，内容，头部，正文，关闭按钮

####方法

######setHeight(el)
根据 el 或 this.container(框容器) 的高重新设置 this.content(内容区) 的高，一般在重新获取内容并且高度发生变化后使用。

#####position(options)
根据 options 参数重新定位弹出框

####衍生实例

#####$.dialog.alert(msg, options)
弹出一个类似系统 alert 效果的对话框，分别传入消息文本和弹出框参数

#####$.dialog.confirm(msg, fn, options)
弹出一个类似系统 confirm 效果的对话框，分别传入消息文本，回调和弹出框参数。

#####$.dialog.image(url, options)
弹出一个图片预览对话框，分别传入图片地址和弹出框参数

#####$.dialog.ajax(url, options)
Dialog 的 async 参数为 'ajax' 的快捷方式，分别传入异步调用的地址和弹出框参数。

#####$.dialog.iframe(url, options)
Dialog 的 async 参数为 'iframe' 的快捷方式，分别传入调用 iframe 的src和弹出框参数。

###遮罩 Mask

在页面上置放一个层，使页面上相应区域不可操作。一般用于对话框，也可以单独使用，如某块区域 loading 时可以在等待时用遮罩使整块区域不可做其他操作。

####实例

用于全屏遮盖的实例，只需要

    var mask = new Mask();

####参数

名称 | 类型 | 默认值 | 描述
----|----|----|----
class|String|'mask'|用于遮罩的默认样式名
target|dom|document.body|遮罩的区域（范围）
width|Number|0|遮罩区的宽度
height|Number|0|遮罩区的高度
zIndex|Number|null|遮罩的层级
position|Boolean|false|是否需要对遮罩定位（默认以中心点定位）
resize|Boolean|false|是否需要根据窗口缩放自动适应大小

####方法

#####setSize()
设定遮罩层的大小。

#####position()
对遮罩层重新定位

####toggle()
根据遮罩层当前状态显示/隐藏遮罩层







