# 前端编码规范

##黄金定律

**永远遵循同一套编码规范。**不管有多少人共同参与同一项目，一定要确保每一行代码都遵循同一套规范，像是同一个人编写的。

##HTML

###语法

- 用**两个空格**来代替制表符（tab） -- 这是唯一能保证在所有环境下获得一致展现的方法。
- 嵌套元素应当缩进一次（即两个空格）。
- 为每个 HTML 页面的第一行添加 HTML5 的文档类型声明（DOCTYPE），这样能够确保在每个浏览器中拥有一致的展现。
- 根据 HTML5 规范：
    - 强烈建议为 html 根元素指定 lang 属性，从而为文档设置正确的语言。这将有助于语音合成工具确定其所应该采用的发音，有助于翻译工具确定其翻译时所应遵守的规则等等。
    - 在引入 CSS 和 JavaScript 文件时一般不需要指定 type 属性，因为text/css 和 text/javascript 分别是它们的默认值。
- 通过明确声明字符编码，能够确保浏览器快速并容易的判断页面内容的渲染方式。这样做的好处是，可以避免在 HTML 中使用字符实体标记（character entity），从而全部与文档编码一致（一般采用 UTF-8 编码）。
- IE 支持通过特定的 <meta> 标签来确定绘制当前页面所应该采用的 IE 版本。除非有强烈的特殊需求，否则最好是设置为 Edge，从而通知 IE 采用其所支持的最新的模式。
- 对于书写标签，属性，属性值的等定义，大致遵循 XHTML1.0 的规范定义，比如标签属性全部小写，属性值必须用双引号。
- 对于表示状态的属性，如 disabled，书写时遵循现有 HTML5的规范，只需写属性名，不需要写属性值。
- 不要在自闭合（self-closing）元素的尾部添加斜线 -- HTML5 规范中明确说明这是可选的。
- 不要省略可选的结束标签（closing tag）（例如 `</li>` 或 `</body>`）。
- 不要在标签里写内嵌的 style 属性，样式要尽可能抽出来共用。

根据以上规则，一份符合要求的 HTML 文档模板如下：

    <!DOCTYPE html>
    <html lang="zh-CN">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=Edge">
      <title>Page title</title>
      <!-- External CSS -->
      <link rel="stylesheet" href="code-guide.css">
      <!-- In-document CSS -->
      <style> /* ... */ </style>
      <!-- JavaScript -->
      <script src="code-guide.js"></script>
    </head>
    <body>
      <img src="images/company-logo.png" alt="Company">
      <h1 class="hello-world">Hello, world!</h1>
    </body>
    </html>

###布尔（boolean）型属性

布尔型属性可以在声明时不赋值。XHTML 规范要求为其赋值，但是 HTML5 规范不需要。

    <input type="text" disabled>

    <input type="checkbox" value="1" checked>

    <select>
      <option value="1" selected>1</option>
    </select>

###JavaScript 生成的标签

通过 JavaScript 生成的标签让内容变得不易查找、编辑，并且降低性能。能避免时尽量避免。

###语义化

标签应用在其适用的场合。每个标签都有特定的意义，不应把 `<div>` 当成万能标签使用。

###id 与 class 命名规则

- id 和 class 的命名总规则为：内容优先，表现为辅。首先根据内容来命名，如果根据内容找不到合适的命名，可以再结合表现来定。比如：
        .main-nav
        #product_basic
        .persent-tab
        .col-main
- id 在一个页面只允许出现一次，一般代表一个独立的功能模块。
- 因为 id 的权重比较高，应开放给二次开发和模板设计人员去处理，在系统中不允许以 id 作为样式选择器。
- id 和 class 名称中只能出现 26 个英文字母、数字、下划线"_"连字符"-"，任何其它字符都是不被允许使用的。
- 请用英文单词命名，理论上禁止使用拼音命名，除非是某些特定产品词汇。
- id 禁止以数字或 `_` 开头，应以英文字母开头，如出现多个英文单词，请以下划线 `_` 连接或用驼峰命名法，如 `product_list`, `items_sideWrapper`。
- class 禁止以数字或 `-` 开头，应以英文字母开头，并且全部小写，如出现多个英文单词，请以连字符 `-` 连接，如 `product-items`，`btn-default`，前面部分类似于命名空间。
- 避免过度任意的简写。`.btn` 代表 button，但是 `.s` 不能表达任何意思。
- 名称应当尽可能短，并且意义明确，不要使用表现形式的名称，如 `.red`, `.mt`, `.padding-top`, `.fl`。
- 基于最近的父 id/class 或基本 id/class 作为新 id/class 的前缀。

        /* Bad example */
        .t { ... }
        .header { ... }
        .red { ... }

        /* Good example */
        .panel { ... }
        .panel-header { ... }
        .panel-important { ... }

- 以下 id 或 class 只做为特定的接口或动作使用，避免将这些 class 包含到 CSS 中做为选择器使用。
    - 使用 `.action-[行为动作]` 或 `.act-[行为动作]` 代表此dom与事件绑定，通过鼠标事件或键盘事件完成某种行为或动作。
    - 使用 `.op-[class]` 开头的class会在脚本中被使用到，捕获此dom并进行下一步操作。
    - 使用 `for_` 等 id 来标识特定行为。
- 以下 class 有特殊意义，在特定场合下使用，并可以配合相关样式实现想要的效果。
    - 使用 `.node-[class]` 开头的class表示节点名，大多用于挂件中，表示通用的样式。
    - 使用 `.item-[class]` 开头的class用于购物流程，表示商品相关的属性。
    - 使用 `.form-[class]` 开头的class用于表单布局，配合样式可以展现各种不同的表单效果。
    - 使用 `.mod`, `.mod-title`, `.mod-content` 表示一个通用模块的不同部分，`.clearfix` 固定表示清除浮动，`.pager` 表示页码的样式等等。

###注释

- 对页面中的每一个相对独立的 html 模块使用注释包裹。
- 注释应当有意义，可以自描述，易于他人理解，一般需表示模块的功能，不必重复模块的 id 或 class。
- 注释里不应出现连续的中线(-)，可换用其他字符代替，比如 `=`。

        <!-- Bad example -->
        <!--------- container -------->
        <div class="container">
          ...
        </div>
        <!-------- container end -------->

        <!-- Good example -->
        <!-- 正文内容 -->
        <div class="container">
          ...
        </div>
        <!-- 正文内容 end -->

- 修改别人代码的地方最好加上注释，写明修改理由、修改人和修改时间。

##CSS/SCSS

###语法

- 用**四个空格**来代替制表符（tab） -- 这是唯一能保证在所有环境下获得一致展现的方法。
- 为选择器分组时，将单独的选择器单独放在一行。
- 为了代码的易读性，在每个声明块的左花括号后添加一个空格。
- 每条声明语句的 `:` 后应该插入一个空格。
- 为了获得更准确的错误报告，每条声明都应该独占一行。
- 所有声明语句都应当以分号 (;) 结尾。包括最后一条声明语句后面的分号，因为如果省略这个分号，你的代码可能更易出错。
- 对于以逗号分隔的属性值，每个逗号后面都应该插入一个空格（例如，`box-shadow`）。
- 不要在 `rgb()`、`rgba()`、`hsl()`、`hsla()` 或 `rect()` 值的内部的逗号后面插入空格。这样利于从多个属性值（既加逗号也加空格）中区分多个颜色值（只加逗号，不加空格）。
- 对于属性值或颜色参数，省略小于 1 的小数前面的 0 （例如，`.5` 代替 `0.5`；`-.5px` 代替`-0.5px`）。
- 尽量使用简写形式的十六进制值，例如，用 `#FFF` 代替 `#FFFFFF`。
- 避免为 0 值指定单位，例如，用 `margin: 0;` 代替 `margin: 0px;`。

        /* Bad CSS */
        .selector,.selector-secondary,.selector[type=text] {padding:15px; margin:0px 0px 15px; background-color:rgba(0, 0, 0, 0.5); box-shadow:0px 1px 2px #CCC,inset 0px 1px 0px #FFFFFF }

        /* Good CSS */
        .selector,
        .selector-secondary,
        .selector[type=text] {
            padding: 15px;
            margin-bottom: 15px;
            background-color: rgba(0,0,0,.5);
            box-shadow: 0 1px 2px #CCC, inset 0 1px 0 #FFF;
        }

###声明顺序

相关的属性声明应当归为一组，并按照下面的顺序排列：

1. Positioning
2. Box model
3. Visual
4. Typographic

由于定位（positioning）可以从正常的文档流中移除元素，并且还能覆盖盒模型（box model）相关的样式，因此排在首位。盒模型排在第二位，因为它决定了组件的尺寸和位置。
其他属性只是影响组件的内部（inside）或者是不影响前两组属性，因此排在后面。

    .declaration-order {
        /* Positioning */
        position: absolute;
        top: 0;
        left: 0;
        z-index: 100;
        /* Box-model */
        display: block;
        float: right;
        width: 100px;
        height: 100px;
        /* Visual */
        background-color: #f5f5f5;
        border: 1px solid #e5e5e5;
        border-radius: 3px;
        /* Misc */
        opacity: 1;
        /* Typography */
        font: normal 13px "Helvetica Neue", sans-serif;
        line-height: 1.5; color: #333;
        text-align: center;
    }

###不要使用 @import

与 `<link>` 标签相比，@import 指令要慢很多，不光增加了额外的请求次数，还会导致不可预料的问题。替代办法有以下几种：

- 使用多个 `<link>` 元素
- 通过 Sass 将多个 CSS 文件编译为一个文件
- 将多个 CSS 文件合并成一个 CSS 文件

###媒体查询（Media query）的位置

将媒体查询放在一起可以减少文件体积，但是不利于与相对应规则对比与修改，为解决此问题，可以用 Sass 将媒体查询放在一个单一样式文件中，或直接放在相关规则里。

    $break-small: 320px;
    $break-large: 1200px;
    .profile-pic {
        float: left;
        width: 250px;
        @media screen and (max-width: $break-small) {
            width: 100px;
            float: none;
        }
        @media screen and (min-width: $break-large) {
            float: right;
        }
    }

###带前缀的属性

当使用特定厂商的带有前缀的属性时，请注意书写顺序，依次为 `-webkit-`、`-moz-` `-ms-` `-o-`，应把无前缀的官方属性放到最后。

    .selector {
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.15);
        -moz-box-shadow: 0 1px 2px rgba(0,0,0,.15);
        -o-box-shadow: 0 1px 2px rgba(0,0,0,.15);
        box-shadow: 0 1px 2px rgba(0,0,0,.15);
    }

或用相对应的 Sass 方法书写：

    .selector {
        @include box-shadow(0 1px 2px rgba(0,0,0,.15));
    }

###单行规则声明

对于只包含一条声明的样式，为了易读性和便于快速编辑，建议将语句放在同一行。对于带有多条声明的样式，还是应当将声明分为多行。

这样做的关键因素是为了错误检测 -- 例如，CSS 校验器指出在 183 行有语法错误。如果是单行单条声明，你就不会忽略这个错误；如果是单行多条声明的话，你就要仔细分析避免漏掉错误了。

    /* 单行规则声明 */
    .span1 { width: 60px; }
    .span2 { width: 140px; }
    .span3 { width: 220px; }

    /* 多行规则声明 */
    .sprite {
        display: inline-block;
        width: 16px;
        height: 15px;
        background-image: url(../img/sprite.png);
    }
    .icon           { background-position: 0 0; }
    .icon-home      { background-position: 0 -20px; }
    .icon-account   { background-position: 0 -40px; }

###简写形式的属性声明

在需要显示地设置所有值的情况下，应当尽量限制使用简写形式的属性声明。常见的滥用简写属性声明的情况如下：

- padding
- margin
- font
- background
- border
- border-radius

大部分情况下，我们不需要为简写形式的属性声明指定所有值。例如，HTML 的 heading 元素只需要设置上、下边距（margin）的值，因此，在必要的时候，只需覆盖这两个值就可以。过度使用简写形式的属性声明会导致代码混乱，并且会对属性值带来不必要的覆盖从而引起意外的副作用。

    /* Bad example */
    .element {
        margin: 0 0 10px;
        background: red;
        background: url("image.jpg");
    }

    /* Good example */
    .element {
        margin-bottom: 10px;
        background-color: red;
        background-image: url("image.jpg");
    }

###注释

- 代码是由人编写并维护的。请确保你的代码能够自描述、注释良好并且易于他人理解。不要简单地重申组件或 class 名称。
- 对于较长的注释，务必书写完整的句子；对于一般性注解，可以书写简洁的短语。
- 注释中不应该出现连续的星号(*)，可换用其他符号代替，比如 `=`。

        /* Bad example */
        /********** modal header *********/
        .modal-header {
            ...
        }

        /* Good example */
        /* Wrapping element for .modal-title and .modal-close */
        .modal-header {
            ...
        }

###选择器

- 对于通用元素使用 class ，这样利于渲染性能的优化。
- 对于经常出现的组件，避免使用属性选择器（例如，[class^="..."]）。浏览器的性能会受到这些因素的影响。
- 选择器层次要尽可能少，建议不要超过 3 。
- 只有在必要的时候才将 class 限制在最近的父元素内（也就是后代选择器）（例如，不使用带前缀的 class 时 -- 前缀类似于命名空间）。

###代码组织

- 以组件为单位组织代码段。
- 制定一致的注释规范。
- 使用一致的空行将代码分隔成块，这样利于扫描较大的文档。
- 如果使用了多个 CSS/Sass 文件，将其按照组件而非页面的形式分拆，因为页面会被重组，而组件只会被移动。

##JavaScript

###语法

- 用**四个空格**来代替制表符（tab） -- 这是唯一能保证在所有环境下获得一致展现的方法。
- 代码中涉及到字符串用到引号的情况下，优先使用单引号。
- 禁止在字符串换行时使用斜杠（\\），应用加号（+）连接或转为数组元素。
- 避免使用特殊值 `undefined`。判断一个变量是否定义应该使用 `typeof` 操作符。
- 在判断和比较中使用 === 和 !== 代替 == 和 != 来避免弱类型转换错误。
- 三元操作符应当仅仅用在条件赋值语句中，而不要作为 `if` 语句的替代品。
- 每行代码结尾必须加 `;` 以避免产生歧义。
- 没有特殊原因避免使用 with/eval。
- 对于 if/else 等后面的语句，如果只有一行代码且直接返回结果，可以不加大括号，其他任何情况都需要加大括号。
- 对于数组赋值操作快于 push 操作，所以尽量使用赋值操作。
- 代表 jQuery 对象的变量前面可以加个 `$`，这样一眼就能看出来是个jQuery对象。
- 在开发相应功能的时候尽量抽象化、组件化、通用化：考虑这个东西其他地方会不会用到，能不能做成一个组件？而不是类似的代码到处复制、修改或者每个人都去写一遍。

###空格/留白

- 二元运算符/三元操作符前后必须使用一个空格来保持表达式的整洁。包括赋值运算符和逻辑运算符。
- 逗号运算符前面不加空格，后面留一个空格。

        //Bad example
        var found=(values[i]===item);

        //Good example
        var found = (i === item);

        found && (count > 10) ? foo : bar;

- 当使用括号时，紧接左括号之后和紧接右括号之前不应该有空格;
- 在判断语句和循环语句的左括号前和右括号后加入空格。

        //Bad example
        var found = ( values[i] === item );

        if(found && ( count > 10) ){
            doSomething ();
        }

        // Good example
        var found = (i === item);

        if (found && (count >10)) {
            doSomething();
        }

        var i = 0, j = count.length;
        for (; i < j; i++) {
            doSomething();
        }

- for 循环中的分号之后紧跟一个空格；
- for 循环中初始化多个变量时，在逗号后紧跟一个空格；
- 分隔数组项的逗号之后，紧跟一个空格；
- 对象属性后的逗号以及名值对之间的冒号之后，紧跟一个空格；
- 在函数、if-else 语句、循环、对象直接量的左花括号之前补充空格；
- 在右花括号和 else/while 之间补充空格

###对象直接量

- 起始左花括号应当和表达式保持同一行。
- 每个属性的键值对应当保持一个缩进，第一个属性应当在左起花括号后另起一行。
- 每个属性的键值对除非特殊情况，应当使用不含引号的属性名，其后紧跟一个冒号，而后是值。
- 倘若属性值是函数类型，函数体应当在属性名之下另起一行，参照标准的函数体写法。
- 一组相关的属性前后可以插入空行以提升代码的可读性。
- 最后一个键值对不加逗号。
- 结束的右花括号应当独占一行。

        // Bad example
        var object = {key:value,name:'Andy'};
        var object = {
                        key1: value1,
                        key2: value2,
        };

        // Good example
        var object = {
            key: value1,
            key2: value2,
            key3: function() {
                doSomething();
            },
            key4: value4
        };

###注释

适当的注释有利于别人理解你的代码，一般以下情况应当使用注释。

- 代码晦涩难懂;
- 可能被误认为错误的代码;
- 必要但并不明显的针对特定浏览器的代码;
- 定义了对象，方法或者属性;

注释包括以下两种：

1. 单行注释

    - 独占一行，用来解释下一行代码。
    - 在代码的尾部的注释，用来解释他之前的代码。
    - 多行，用来注释掉一个代码块。
    - 对于代码尾行注释的情况，应该确保代码结尾同注释之间至少保留一个空格。

2. 多行注释

    多行注释适合在代码需要更多文字去解释的时候使用，每个多行注释都至少有如下三行：

    - 首行仅仅包括 /* 开始，该行不应当有其他文字。
    - 接下来的行以 * 外加一个空格开头并保持与上一行对齐，这些行可以有文字描述。
    - 最后一行以 */ 开头并同先前行保持对齐，也不应当有其他文字。

    多行注释的首行应当保持同他描述的相同层次的缩进。后续的每行应当有同样层次的缩进并附加一个空格。每一个多行代码之前应当预留一个空行。

        // Bad example
        /*
        如果符合xxxx条件，说明通过了所有安全检测。
        并且执行以下代码，达到xxxx功能。
         */
        if (condition) {
            doSomething();
        }

        // Good example
        /*
         * 如果符合xxxx条件，说明通过了所有安全检测。
         * 并且执行以下代码，达到xxxx功能。
         */
        if (condition) {
            doSomething();
        }

注释有时候也可以用来给一段代码添加额外的信息，比如：

- TODO：说明代码还未完成。
- HACK：表明代码实现走了一个捷径。应当包含为何使用hack的原因。这也可能表明该问题可能会有更好的解决办法
- BUG：说明代码是有问题的并应当尽快修复
- FIXED：说明代码修复了一个问题

###变量声明

所有的变量声明在使用前必须用 var 事先定义，变量定义应当放在函数开头，使用一个 var 表达式，每行一个变量。除了首行，所有行都应该都多一层缩进。初始化的变量应当在未初始化变量之前。

    //Bad example
    var count = 10,name = "gothic",
    found = false,empty;

    //Good example
    var count = 10,
        name = 'gothic',
        found = false,
        empty;

使用 Array 和 Object 语法直接声明并将其初始化，而不使用 Array 和 Object 构造器。

    //Bad example
    var a1 = new Array(x1, x2, x3);

    //Good example
    var a1 = [x1, x2, x3];

###函数声明

- 函数应当在使用前定义。一个不是作为方法的函数应该使用函数定义的格式。
- 函数名和开始圆括号之间不应该有空格，结束的圆括号和右边的花括号之间应该留一个空格。
- 右侧的花括号应当同function关键字保持同行，开始和结束之间不应该有空格。
- 参数名之间应当在逗号之后保留一个空格。函数体应当保持一级缩进。

        //Bad example
        function doSomething (arg1,arg2){
            return arg1 + arg2;
        }

        function doSomething(arg1, arg2) {return arg1 + arg2;}

        var doSomething = new Function("arg1","arg2","return arg1 + arg2");

        //Good example
        function doSomething(arg1,arg2) {
            return arg1 + arg2;
        }

- 函数内部定义的函数应当在var语句后立即定义。
- 匿名函数可能作为方法赋值给对象，或者作为其它函数的参数。function 关键字同开始括号之间不应有空格。
- 立即被调用的函数应当在函数调用的外层用圆括号包裹。

###变量和函数命名

- 命名应仅限于数字字母和 $ 及 _，不得以数字开头。
- 变量命名应当采用驼峰命名格式，首写字母小写，每个单词首字母大写。变量名的第一个单词应当是一个名词以避免同函数混淆。
- 函数命名也应当采用驼峰命名格式，函数命名的第一个单词应当是动词来避免同变量混淆。函数名中最好不要出现下划线。
- 构造函数——通过new运算符创建新对象的函数——应当首字符大写。构造函数名称应当以非动词开头，因为new代表着创建一个对象实例的操作。
- 常量的命名应当是所有字母大写，不同单词之间用单个下划线隔开。
- 对象的属性同变量的命名规则相同。对象的方法同函数的命名规则相同。如果属性或者方法特定是私有的，可在之前加一个下划线。

###赋值

给变量赋值时，如果右侧是含有比较语句的表达式，为了更好阅读代码，可用圆括号包裹。

    var flag = (i < count);

###语句

1. 简单语句

    每一行包含一条语句，以分号（;）结束

2. 返回语句

    当返回一个值的时候不应当使用圆括号包裹，除非在某些情况下这么做可以让返回值更容易理解。

3. 复合语句

    - 复合语句是大括号括起来的语句列表。
    - 括起来的语句应当较复合语句多缩进一个层级
    - 开始的大括号应当在复合语句所在的行尾，结束的大括号应当独占一行且同复合语句的开始保持同样的缩进。
    - 当语句是控制结构的一部分时，诸如 if 或者 for 语句，所有的语句都需要大括号括起来，也包括单个语句。
    - 像 if 一样的语句开始的关键字，其后应该紧跟一个空格，起始大括号应当在空格之后。

            if (condition) {
                statements
            } else if (condition) {
                statements
            } else {
                statements
            }

            for (test1; condition; update) {
                statements
            }
            for (variable in object) {
                statements
            }

    - Switch 下的每个 case 都应该保持一个缩进;

            switch (value) {
                case 1:
                    doOne();
                    break;
                case 2:
                    doTwo();
                    break;
                case 3:
                    return true;
                default:
                    throw new Error(this shouldn't happen);
            }

###编辑器配置

将你的编辑器按照下面的配置进行设置，以避免常见的代码不一致和差异：

- 用四个空格代替制表符（soft-tab 即用空格代表 tab 符）。
- 保存文件时，删除尾部的空白符。
- 设置文件编码为 UTF-8。
- 在文件结尾添加一个空白行。

参照文档并将这些配置信息添加到项目的 `.editorconfig` 文件中。例如：[Bootstrap 中的 .editorconfig 实例](https://github.com/twbs/bootstrap/blob/master/.editorconfig)。更多信息请参考 [about EditorConfig](http://editorconfig.org/)。
