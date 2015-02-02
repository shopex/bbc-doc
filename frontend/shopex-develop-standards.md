#商派页面开发规范
v0.24(修订)

#####商派 UED部
于2014.12

##前    言

为方便公司内部统一维护和管理，改善产品的总体质量和更新效率，提高产品的规范性和安全性，提高各部门的协作效率，树立企业品牌形象，实现用户价值，特制定本规范。商派相关部门请按本规范规定的内容制作网站，保证各产品上线质量。

- 本规范根据当前web标准的普通规则结合商派各个产品而制定。
- 本规范规定了商派所有产品通用的页面制作规范以及各不同类别产品的特殊页面制作规范。
- 本规范由商派 UED团队提出。
- 本规范由商派 UED团队负责起草、维护、更新。
- 本规范由商派 UED团队统一管理。
- 本规范为其它文档的基础，为开发技术说明文档提供了前提和依据。
- 本规范解释权属商派 UED团队。
- 本规范为现行版本，有意见可以随时讨论，有想法可以随时补充。
- 商派 UED 团队必须严格遵守和执行本规范。
- 本规范通用标准范围

    本规范包括：页面类型标准、文件及文件夹排放、命名标准，UI/UE制作标准，HTML页面制作标准，CSS代码制作标准，Javascript（以下简称JS）编码标准，服务器端标准。

- 本规范理论上适用于各条产品线。


##原   则

**Any violation to this guide is allowed if it enhances readability.**

**所有的代码都要变成可供他人容易阅读的。**

----引自Dojo Javascript 语法规范

软件的长期价值直接源于其编码质量。在它的整个生命周期里,一个程序可能会被许多人阅读或修改。如果一个程序可以清晰的展现出它的结构和特征,那就能减少在以后对其进行修改时出错的可能性。编码规范可以帮助程序员们增加程序的健壮性。所有的代码都是暴露给公众的。所以我们更应该保证其质量和可阅读性。保持整洁很重要。

##编 码 规 范

###一、分工协作

1.  公共组件有专人负责维护，各产品线及app分专人负责，前台模板及UI组件亦分专人负责，每人既有分工亦有合作。如果多人合作，维护的人员注意添加注释信息。
2.  视觉设计师（VD）设计完效果图后，理论上应先和交互设计师（ID）沟通，确定设计可行，然后再提交给各栏目前端工程师（FE），并对照效果图进行必要的需求说明，前端工程师（FE）完成需求。
3.  如有公共组件或公用代码块要提取，公共组件维护者需要将代码转到相应公用文件，做好注释，然后再对各产品前端工程师（FE）说明用法。
4.  前端工程师（FE）在制作页面时，需要先去 statics 中查询是否已经存在设计图中的组件或公用样式，如果有，直接调用;如果没有，则在 {app}.css 或 {app}.js 中添加相应的代码。( {app} 指各 app 下 statics 中的公共文件)。
5.  前端工程师（FE）在制作过程中，发现有高度重用的模块，却未被加入到公共组件中，需向相应维护人进行说明，由公共组件维护人决定是否添加该组件。如果确定添加，则向各开发工程师说明新组件的用途。各前端工程师（FE）应检查之前是否使用了类似组件，统一更新成新组件的用法，并删除之前自定义的 css 和 js 。
6.  公共组件需配有注释和说明文档，方便阅读。
7.  始终把可维护性(代码可读性)放在首位。

###二、页面类型标准（文件类）

####2.1 网页的元素以及文件限定如下：

- 普通页面 .html
- 程序页面 .php/.xml
- 脚本文件 .js
- 样式表文件 .css
- 动画互动元素 .swf/.gif
- 图片元素 .jpg /.gif /.png


####2.2 元素大小标准

1.  首页尽量保持体积小巧，纯页面大小不超过200k。
2.  图片元素应在尽量保证原画质损失少的情况下，压缩图片体积。

####2.3 切图标准

1.  设计稿切图工具选择：制作前应根据设计师源文件，选择适合切图的工具，PSD 文件选择 Photoshop，PNG 文件选择 Fireworks。
2.  设计稿页面导出文件设置：页面切图应导出 .png 、 .gif 或 .jpg 。png 图片一般用 png-8 位格式图片。若 png-8 影响图片质量或其中有半透明的效果，请为 ie6 单独定义背景：
`_background:none;_filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=crop, src='img/bg.png');` 或引用其它 js 效果库改善 png-24 位图片的显示效果。
3.  一致性原则：按钮图片切图后，应保证按钮图片背景的透明性以及和整体页面的融合性，确保与设计稿一致。
4.  一些非重复性的背景图和 icon 可根据实际情况合并成 css sprites 。
5.  可循环重复使用的背景图片不应切割成大图。
6.  严禁大量“一刀切”大图片（要符合文件大小标准）。
7.  在保证图片精度的情况下最大化的压缩图片。

###三、文件目录及命名标准（文件类）

####3.1 文件及目录命名标准

所有的文件命名要求只能包含：小写字母、数字、下划线。有特殊要求的除外。

###四、UI/UE 界面制作标准（设计类）（另有单独文档说明）

###五、HTML 结构制作标准（代码类）

####5.1 页面编码规范

1.  页面统一 utf-8 编码，如果中文不能正常显示，请用 editplus 打开，另存，编码选 utf-8。
2.  DTD 统一加 `<!DOCTYPE html>`。
3.  页面中引入样式或 js 时，不需要加类型声明，如下：

        <link rel="stylesheet" href="..." />
        <style>...</style>
        <script src="..."></script>
        <script></script>

4.  所有编码书写时均应遵循最新的 html 标准，包括标签、属性、属性名全部小写，属性值用 "" (双引号)引起来，所有长度/粗细数值不允许带单位。标签要闭合，每个标签务必加对应的结束标签（单标签可以不遵循此标准）。提醒：IE下的页面变形很多都与标签未闭合有关系。
5.  标签要按顺序合理嵌套。如：

        <p><b></p></b>

    须修改为：

        <p><b></b></p>

6.  `<div>` 里可以包含 `<p>` ，但是 `<p>` 里不允许包含 `<div>` 等块级元素；
    `<ul>` 和 `<ol>` 不允许嵌套 `<li>` 以外的标签，像 `div` 之类的标签只能放在 `li` 里面；
    `table` 只允许嵌套 `thead`, `tfoot`, `tbody` 以及 `tr` 标签，`tr` 只允许嵌套 `td`，`th` 标签，`td` 标签里可以有任意标签存在，如以下几种情况都是错误的：

        <table>
          <input type="hidden">
          <tr><td>
          </tr>
        </table>

        <ul>
          <li>
          <div></div>
        </ul>

7.  `<li>` 标签必须被 `<ul>` 或 `<ol>` 包裹,`<dt>` 和 `<dd>` 必须被 `<dl>` 包裹。
8.  `<input>` 和 `<button>` 必须指明默认的 type，`<form>` 必须有默认的 method，可避免在不同浏览器下产生的差异。
9.  按钮用 `<button>` 而不用 `<input>`。
10. 前台页面不用 table 做布局，table 的目的是用来显示表格状的数据。
11. 合理使用换行、缩进、空格，使代码整洁。
    1.   一般内联元素 `<a>`, `<abbr>`, `<b>`, `<cite>`, `<code>`, `<del>`, `<dfn>`, `<em>`, `<i>`, `<img>`, `<input>`, `<ins>`, `<kbd>`, `<label>`, `<mark>`, `<q>`,　`<samp>`, `<span>`, `<strong>`, `<sub>`, `<sup>` 前后无需换行; 在块元素或一些内联块元素 `<address>`, `<area>`, `<article>`, `<aside>`, `<audio>`, `<bdo>`, `<blockquote>`, `<body>`, `<button>`, `<canvas>`, `<caption>`, `<col>`, `<colgroup>`, `<command>`, `<datalist>`, `<dd>`, `<details>`, `<div>`, `<dl>`, `<dt>`, `<embed>`, `<filedset>`, `<figcaption>`, `<figure>`, `<footer>`, `<form>`, `<frame>`, `<frameset>`, `<h1>-<h6>`, `<head>`, `<header>`, `<hgroup>`, `<hr>`, `<html>`, `<iframe>`, `<legend>`, `<li>`, `<link>`, `<meta>`, `<meter>`, `<nav>`, `<object>`, `<ol>`, `<optgroup>`, `<options>`, `<output>`, `<p>`, `<param>`, `<pre>`, `<progress>`, `<ruby>`, `<script>`, `<section>`, `<select>`, `<source>`, `<style>`, `<summary>`, `<table>`, `<tbody>`, `<tfoot>`, `<thead>`, `<ul>`, `<video>`, `<tr>`, `<th>`, `<td>`, `<textarea>`, `<time>` 前后换行，中间可以不换行; 在 `<br>`, `<wbr>` 前面不换行，后面换行。
    2.  html 代码采用**2个空格**缩进，以保持在各个编辑器中显示一致。不要用 tab 缩进。
    3.  连续的多空格请使用 `&nbsp;`，去除代码行尾空格。
12. html功能块之间写明注释，注释亦精不亦多。如：

        <!-- sample START -->
        <div id="sample">
            ...
        </div>
        <!-- /sample END -->

13. 视情况为链接添加 title，图片要添加 alt 及 title。
14. 把 css 调用写在 head 头部，不需预先执行的 js 尽量写在页面尾部。
15. 不在html中混合js及event事件。
16. 模仿a链接点击样式可用class="pointer"或class="lnk"， javascript:void(0);伪协议有可能造成ie6动态图出错。
17. 明确指定图片的width和height。不仅对seo有用，对因各种原因无法显示图片的情况下，也能保持布局样式不变。
18. 通过给元素设置自定义属性来存放与 JS 交互的数据，属性名格式为 data-xx (例如：data-lazyload-url) 。

####5.2 id/class/name命名规范

1.  id 和 class 的命名总规则为：内容优先，表现为辅。首先根据内容来命名，比如 main-nav。如果根据内容找不到合适的命名，可以再结合表现来定，比如 skin-blue， present-tab，col-main。
2.  id 和 class 名称可采用连结符连接与驼峰式写法相结合，id必须使用下划线进行连接，如product_title。class必须使用连字符进行连接，如product-lists。这样容易区分，同时对脚本调试有帮助。
3.  id 和 class 名称中只能出现 26 个英文字母、数字、下划线"_"连字符"-"，任何其它字符都是不被允许使用的。
4.  id 和 class 尽量用英文单词命名。对于某些产品特色词汇，也可以使用拼音，其它任何情况下都禁止使用拼音。
5.  在不影响语义的情况下，id 和 class 名称中可以适当采用英文单词缩写，比如 col, nav, hd, bd, ft 等，但切忌自造缩写。
6.  id 和 class 名称中的第一个词必须是单词全拼或语义非常清晰的单词缩写，比如 present, col-ttl。
7.  在使用到mootools框架的产品和页面中，给表单元素的name值命名的时候请注意避免与mootools中的Element引入的方法重名，否则ie下会造成不可预知的问题。如store/effect etc.

###六、CSS/SCSS 样式制作标准（代码类）

CSS按照层级不同，分为公用级>产品级>页面级三部分，三者之间为继承关系，公用级定义了重置样式、布局结构、和一些常用的组件等，一般是在各个页面统一加载的; 产品级为不同产品线自有的样式，定义了不同产品线各自的风格，一般在各个app统一加载; 页面级为各产品中重用度不高的内容，单独作为样式文件加载。

####6.1 书写规范

1.  页面统一utf-8编码。可用 @charset "utf-8"; 指定页面编码。
2.  用 `<link>` 而不用 `@import` 导入外部样式文件，因为 `@import` 在 ie6 下初始瞬间会无法加载，导致页面变形，并且不能并行加载，不利于优化。
3.  页面中的 `<link> `和 `<style>` 不能超过31个。
4.  不要用个性化字体，导致用户不能正常浏览。注意字体要使用英文名称，不要使用中文，如 `SimSun, Microsoft YaHei`。
5.  CSS书写符合浏览器兼容标准，确保页面在浏览器中的兼容性。
6.  全部小写，保持CSS写法结构一致。
7.  CSS命名规则，请参照5.2的命名规范。
8.  命名不要自造缩写，请使用约定俗成的单词缩写，也可参照6.3 命名参考。
9.  将作用于不同模块的CSS规则集中放在一起，同时用注释说明。通用规则放在具体模块规则的前面。
10. 遵从个人习惯每个属性可写在一行，也可以分开多行书写；多行书写时应有4个空格缩进，并在同一文件中应注意保持书写风格一致；不论何种风格每个 selector 应单独占一行，如遇到有多个 selector 定义为同一样式，每个 selector 占一行；每个属性值后必须以 ;(分号) 结尾：

        .selector1,
        .selector2,
        .selector3 { property:value; property:value; }
        #selector4 { property: value; }

11. 注释的格式：

        /* header */

    注释中间不要加--。
12. 尽量保持结构与样式分离，便于管理。
13. 不要使用 !important 打乱CSS继承关系。
14. 尽可能调用系统中现有的样式。
15. 所有装饰性的图片（如背景图，小图标），要定义在CSS中。产品图、banner、及其它非装饰性图片应用<img>标签。
16. 每个页面的ID必须是唯一的，且用在结构的定义中。
17. CSS中禁止使用expression表达式。
18. CSS中尽量不要使用复杂滤镜。
19. 尽量不要设置容器的高度，保持容器高度可自适应，height: 100% 或 height: 1% 可能会遇到兼容性问题。

####6.2 CSS属性

#####6.2.1 常用属性

- 显示属性 display position float clear cursor
- 盒模型  width height margin padding border background
- 排版 vertical-align white-space text-decoration text-align line-height
- 文字 font color

#####6.2.2 属性一览

下表顺序为从上到下，从左到右：

    display || visibility
    list-style: list-style-type || list-style-position || list-style-image
    position
    top || right || bottom || left
    z-index
    clear
    float

    background: background-color || background-image || background-repeat || background-attachment || background-position
    width
    max-width || min-width
    height
    max-height || min-height
    overflow || clip
    margin: margin-top || margin-right || margin-bottom || margin-left
    padding: padding-top || padding-right || padding-bottom || padding-left
    outline: outline-color || outline-style || outline-width
    border: border-width || border-color || border-style || border-radius

    color
    font : font-style || font-variant || font-weight || font-size || line-height || font-family
    text-overflow
    text-align
    text-indent
    white-space
    vertical-align
    cursor

####6.3 CSS命名参考

#####6.3.1 常用的class命名规则：

    头：header
    内容：content/container
    尾：footer
    导航：nav
    侧栏：sidebar
    栏目：column
    页面外围控制整体布局宽度：wrapper/wrap
    左右中：left right middle center
    登录条：login
    标志：logo
    广告：banner
    页面主体：main/body
    热点：hot
    新闻：news
    下载：download
    子导航：subnav
    菜单：menu/dropmenu
    子菜单：submenu
    标题：title/ttl/caption/small-caption
    摘要：summary
    搜索：search
    友情链接：friendlink
    页脚：footer
    版权：copyright
    滚动：scroll
    标签页：tab
    文章列表：list
    栏目标题：title
    指南：guild
    服务：service
    注册：regsiter
    投票：vote
    加入我们：joinus
    状态：status/status-bar
    按钮：btn-
    图标：ico-/icon-
    滚动：scroll
    标签页：tab
    文章列表：list
    弹出层：pop/popup
    对话框：dialog/dlg
    状态提醒：success/error/alert/notice/caution
    提示信息：msg/message/message-box
    当前的：current/curr/active/act/selected/on
    小技巧：tips
    注释：note/notice
    指南：guide
    服务：service

#####6.3.2 直观命名

当在设计Web页面以及需要对一个div进行标识的时候，最自然的想法就是使用可以描述元素所在页面位置的词汇来对其命名。这种方法使得类以及id的名称如下面所示：

    自上而下小组：top[-]panel
    横向：horizontal[-]nav
    左面：left[-]side
    中心-栏目：center[-]column
    右面：right[-]col

这些是CSS以及XHTML类和id的有效命名方式。这些词汇简单并且能够使人顾名思义，因此满足了标识页面元素以及相应的CSS样式的需要。

####6.4 CSS缩写参考

1.  对于两个不同的类，但是其中有部分相同甚至是全部相同的属性及属性值时，应对其加以合并缩写，特别是当有多个不同的类而有相同的属性及属性值时，合并缩写可以减少代码量并易于控制。
2.  同一属性系列根据它的属性值也可以进行简写。如：

        list-style, outline, font, background, padding, margin, border

3.  在 CSS中关于内外侧边框的距离是按照上、右、下、左的顺序来排列的，当这四个属性值不同时也可直接缩写。如：

        margin，padding，border

4.  对于两两相同的RGB颜色值代码可缩写为#rgb，但是在ie滤镜中必须用全写。

####6.5 CSS hack书写规范

**注意：在非必要的情况下，最好不要写hack来进行调整，避免因为 hack 而导致页面出现问题或因为浏览器升级导致hack失效。**

IE6、IE7、IE8、Firefox、Chrome之间的兼容写法：

**写法一：**

IE能识别\9,\0;标准浏览器 (如 FF)不能识别；
IE6能识别 _，其它浏览器不能识别；
IE6能识别 *，但不能识别 !important；
IE7能识别 *，也能识别 !important；
FF不能识别 *，但能识别 !important；
根据上述表达，同一类 /ID下的 CSS hack可写为：

    .searchInput {
        background-color:#333;/*通用 */
        background-color:#ccc\0;/* IE8、IE9可识别 */
        *background-color:#999;/*IE7 及 IE6可识别 */
        _background-color:#666;/*仅 IE6可识别 */
    }

一般三者的书写顺序为： 现代浏览器、 IE7、 IE6.

**写法二：（推荐）**

*+html 与  *html 是 IE特有的标签 , Firefox 暂不支持。

    .searchInput {background-color:#333;}
    *+html .searchInput {background-color:#555;}/*仅 IE7*/
    *html .searchInput {background-color:#666;}/*仅 IE6*/

此方法符合标准规范，推荐使用。
此外针对IE的条件注释也可以使用。如下：

    <!--[if lt IE 9]>Less Than IE9<![endif]-->
    <!--[if lte IE 9]>Less Than or Equal IE9<![endif]-->
    <!--[if IE]>IE only<![endif]-->
    <!--[if IE 6]>IE6 only<![endif]-->
    <!--[if IE 7]>IE7 only<![endif]-->
    <!--[if gt IE 6]> Greater Than IE6<![endif]-->
    <!--[if gte IE 6]> Greater Than or Equal IE6<![endif]-->

其它css hack方式请参考：

- css hackd大全 http://www.qianduanzu.com/2012040927.html
- 特定浏览器的CSS技巧 http://www.csser.com/board/4f3f516e38a5ebc9780004e3

####6.6 CSS bug排查方法

#####6.6.1 检查 CSS是否正确

检查一下有无拼写错误、是否忘记结尾的 } 等。可以利用 CleanCSS 来检查 CSS 的拼写错误。 CleanCSS 本是为 CSS减肥的工具，但也能检查出拼写错误。

#####6.6.2 利用 border属性确定出错元素的布局特性

使用 float 属性布局一不小心就会出错。这时为元素添加 border 属性确定元素边界或添加 background 属性，错误原因即水落石出。

#####6.6.3 利用各种虚拟平台测试各IE版本中的效果。

#####6.6.4 利用第三方测试工具或浏览器自带的调试工具调试。

IE6、IE7可以安装IE developetoolbar V2/IE webdeveloper。Microsoft有script Editor，IE8+已经自带开发者工具，并且高版本的浏览器中可以模拟IE9-IE7的效果。FF上有著名的Firebug，以及chrome和safari自带的调试者工具。

###七、Javascript 脚本制作标准（代码类）

重要提示：如果遇到需要把JS书写到页面的情况，请尽量写到一个script块。并且统一采用Mootools框架书写风格，不要随便拷贝一段效果粘进来，在ECStore系列产品中禁止引用Mootools以外的JS框架。

####7.1 代码格式规范

1.  html中外部脚本引入尽量放在尾部。
2.  编码统一采用utf-8。
3.  一个html文件中尽量只出现一个 `<script>` 代码块，所有代码块用

        (function(){
            //代码
        })();

    包裹，可减少全局污染。

4.  JS代码如果只针对特定HTML可以写在页面里，使用率高的代码块可以考虑写入公共JS文件调用。
5.  程序块采用缩进风格编写，缩进采用4个空格，避免使用tab缩进以免各编辑器显示不一致。
6.  在该换行的地方请考虑换行。如下面的情况：
    - 在每一句代码结束后的";"之后换行;
    - 当一条语句代码很长(超过120个字符)，请考虑折行。在运算符号(最好是逗号)后换行;
    - 在"{"之后和"}"前后换行;
    - 在HASH/JSON类型的变量中每一个','之后换行;
    - 在注释前后换行;
7.  一元操作符(如 delete, typeof, void)或在某些关键词(如 return, throw, case, new) 之后, 不要使用括号。
8.  优先使用 单引号（''） 包裹字符串。
9.  多行字符串使用 + 拼接形式, 也可以转换成数组拼接，不要使用 \ 拼接，如果需要换行，+ 请加在行尾。
10. 避免在数组或对象直接量末尾多出额外的逗号（,），如:

        var arr = [1,2,3,];
        var list = {
            a:3,
            b:5,
        };

    最后的逗号多余，应删除，分别改为：

        var arr = [1, 2, 3];
        var list = {
            a: 3,
            b: 5
        };

    这些错误一定要仔细，避免ie中报“缺少字符串,标识符或数字”的BUG。

11. 作 for-in循环时应避免来自原型链上的污染。可用hasOwnProperty方法检查是否为自身成员。
12. 不要吝啬你的注释。当代码块更新时，注释也要对应更新。
13. 合理使用空格。空格应在以下情况下使用：
    - 跟在“(”（左括号）前面的关键字应被一个空格隔开。如

            while (true) {

    - 函数参数与“(”（左括号）之间不应该有空格。这能帮助区分关键字和函数调用。
    - 所有的二元操作符，除了“.”（点） 和“(”（左括号）和 “[”（左方括号）外应用空格将其与操作数隔开。
    - 三元操作符(? :)两边要留有空格。
    - 一元操作符与其操作数之间不应有空格，除非操作符是个单词，比如 typeof。
    - 每个在控制部分，比如 for 语句中的 “;”（分号）后须跟一个空格。
    - 每个 “,”（逗号）后应跟一个空格。
    - 行尾不要有空格。

####7.2 Javascript命名规则

**原则：尽量避免潜在冲突；避免过于精简, 应见名知意。**

1.  变量名应由26个大小写字母(A..Z,a..z)，10个数字(0..9)，和_(下划线)组成。避免使用国际化字符(如中文)。注意：JS是区分大小写的。
2.  变量名以字母、下划线 _ 或美元符号 $ 开头，允许名称中包含字母、数字、下划线 _。
3.  变量名尽量采用有意义的英文单词或约定的缩写命名，不要用拼音。
4.  采用首字母小写，其它单词首字母大写的驼峰式命名，如userName,arrayIndex。
5.  变量、参数、成员变量、函数等名称均以小写字母开头，构造器的名称以大写字母开头。
6.  全局变量或变量名为特定属性名时应该全部大写 (Javascript没有宏或者常量,所以不会因此造成误会) 。
7.  下划线`_`开头的变量一般习惯于标识私有/局部成员。避免用下划线`_`或美元符号`$`来命名标识符。
8.  函数命名必须能够体现函数的功能。
9.  必须与new共同使用的构造函数名应以大写字母开头。当new被省略时Javascript不会有任何编译错误或运行错误抛出。忘记加new时会有不好的事情发生(比如被当成一般的函数)，所以大写构造函数名是我们来尽量避免这种情况发生的唯一办法。
10. 各种页面对象在变量命名时可以考虑使用以下对应前缀：

        text 输入框: txt
        button 按钮：btn
        select 下拉选择框：sel
        option 项: opt
        form 表单：frm
        hidden 表单项：hdn
        窗口对象：win
        文档对象：doc

####7.3 特殊命名规范

1.  术语 “get/set” 不要和一个字段相连，除非它被定义为私有变量。
2.  前面加 “is” 的变量名应该为布尔值，同理可以为 “has”, “can” 或者 “should”。
3.  术语 “compute” 作为变量名应为已经计算完成的变量。
4.  术语 “find” 作为变量名应为已经查找完成的变量。
5.  术语 “initialize” 或者 “init” 作为变量名应为已经实例化（初始化）完成的类或者其他类型的变量。
6.  UI（用户界面）控制变量应在名称后加控制类型，例如：`leftComboBox`, `TopScrollPanel`
7.  复数必须有其公共的名称约定。
8.  带有 `num` 或者 `count` 开头的变量名约定为数字（对象）。
9.  重复变量建议使用 `i`, `j`, `k` （依次类推）等名称的变量。
10. 补充用语必须使用补充词，例如：

        get/set, add/remove, create/destroy, start/stop, insert/delete, begin/end, etc.

11. 避免产生歧义的布尔变量名称，例如：`isNotError`, `isNotFound` 为非法
12. 错误类建议在变量名称后加上 `Exception` 或者 `Error`。
13. 方法如果返回一个类，则应该在名称上说明返回什么；如果是一个过程，则应该说明做了什么。

####7.4 变量

1.  所有的变量必须在使用前进行声明。将 var 语句放在函数的首部。最好把每个变量的声明语句单独放到一行，并加上注释说明。
2.  变量不能产生歧义。
3.  少用全局变量。不要让局部变量覆盖全局变量。
4.  浮点变量必须指明实部，即使它们为零（使用 `0.` 开头）。

####7.5 函数和语句

1.  如遇到换行时应注意与上一行保持一致的缩进。
2.  语句末尾请使用 ; 结束，即使后面没有其它语句。注意一个函数赋值或对象赋值语句也是赋值语句，应该以 ; 结尾。
3.  不允许把多个短语句写在一行中，即一行只写一条语句。
4.  相对独立的程序块之间、变量说明之后加空行。
5.  if、for、do、while、case、switch等语句自占一行，且if、for、do、while 等语句的执行体要加括号 {} ，除非执行体为一个中断操作。
6.  函数或过程的开始、结构的定义及循环、判断等语句中的代码都要采用缩进风格， case 语句下的情况处理语句也要遵从语句缩进要求。
7.  一条有返回值的 return 语句不要使用“( )”（如： return (x);）来括住返回值。如果返回表达式，则表达式应与 return 关键字在同一行，以避免误加分号错误。
8.  函数可先调用再声明，内部函数应在var声明内部变量的语句之后声明，可以清晰地表明内部变量和内部函数的作用域。
9.  禁止重复脚本：包括JS文件和功能相近的函数。

####7.6 代码调试工具

代码调试工具类似于css调试工具，参照6.6.4

####7.7 代码优化注意事项

1.  尽量避免全局变量的使用。全局变量在引用时不得不一级一级查看作用域直到搜索到全局作用域，尤其在嵌套的调用很多的时候。并且全局变量将始终存在在脚本生命周期中，调用结束后无法被回收。
2.  eval 函数效率低，由于事先无法知晓传给 eval 的字符串中的内容，eval在其上下文中解释要处理的代码，也就是说编译器无法优化上下文，因此只能由浏览器在运行时解释代码，这对性能影响很大，所以应避免使用它。
3.  不要使用 Function 构造器。Function 构造函数比 eval 略好，因为使用此代码不会影响周围代码，但其速度仍然很慢。可通过创建匿名函数来代替。
4.  不要给 setTimeout 或者 setInterval 传递字符串参数。setTimeout() 和 setInterval() 方法近似于 eval，当然其低效率也和 eval 一样。 可用 function(){xxx} 代替。另外需要注意的是 timeout 或时间延迟可能并不准确。大多数浏览器无法提供1ms以下的延迟，可能会设置最小可能延迟，通常在16 和 100 ms之间。
5.  禁止使用 with。尽管看起来挺方便，但 with 效率很低。with 结构又创建了一个作用域，以便使用变量时脚本引擎搜索。这本身只轻微的影响性能。但严重的是编译时不知道此作用域内容，因此编译器无法像对其他作用域（如函数产生的作用域）那样对之优化。可代替的方法是使用变量引用对象，然后使用变量访问对象属性。
6.  减少使用 continue 和 break。
7.  仅在函数内使用 this。
8.  不要在影响性能的关键函数中使用 try-catch-finally。由于此函数比较特殊，且是在运行时动态创建动态销毁，有些浏览器对其的处理并不高效。把 catch 语句放在关键循环中将极大影响性能。如果可能，应在脚本中不频繁被调用的地方进行异常处理，或通过检查某种动作是否被支持来避免使用。
9.  注意隐式对象转换。如果代码中常调用 literal 值的方法，你应考虑首先创建对象。因为每次调用 literal 值的方法时，都会隐式的用相同的值创建新的对象。同样的情况适用于字符串拼接。最好不要把两个string合并后赋于变量，而应该依次与变量合并。这在大部分浏览器中都更快，而且消耗更少的内存。如：

        var x = '<html>' + '<head>' + '<title>document</title>' + '</head>' + '<body>'…;

    慢于

        var x = '';
        x = '<html>';
        x += '<head>';
        x += '<title>document</title>';
        x += '</head>';
        x += '<body>';
        x += '…'

10. 在关键函数中避免 for-in。for-in 常被误用，特别是简单的 for 循环更合适时。for-in 循环需要脚本引擎创建所有可枚举的属性列表，然后检查是否存在重复。因此for 循环无疑会更高效。
11. 基本运算符比函数调用更快。典型的应用包括push方法，及Math对象的方法。其效率低于直接赋值和运算。
12. DOM。通常主要有三种情况引起 DOM 运行速度变慢。第一就是执行大量 DOM 操作的脚本，如从获取的数据中建造新的 DOM 树。第二种情况是脚本引起太多的 reflow 或重绘。第三种情况是使用较慢的 DOM 节点定位方法。
13. 不要使用JS中难以理解或容易造成歧义的语句代码。

####7.8 另外的建议

1. {} 和[]

    使用 {} 代替 new Object()。使用 [] 代替 new Array() 。
    当成员名是一组有序的数字时使用数组来保存数据。当成员名是无规律的字符串或其他时使用对象来保存数据。

2. ，（逗号）操作符

    避免使用逗号操作符，除非在特定的 for 语句的控制部分（这不包括那些被用在对象定义，数组定义，var 语句，和参数列表中的逗号分隔符）。

3. 作用域

    在 JS 中块没有作用域。只有函数有作用域。不要使用块，除非在复合语句中。

4. 赋值表达式

    避免在 if 和 while 语句的条件部分进行赋值。

        if (a = b) {

    会与

        if (a == b) {

    产生混淆，避免这种不容易判断对错的结构。

5. === 和 !== 操作符。

    使用 === 和 !== 操作符会相对好点。== 和 != 操作符会进行类型强制转换。特别是不要将 == 用于与错值比较（false，null，undefined，“”，0，NaN）。

6. 令人迷惑的加号和减号。

    小心在 + 后紧跟 + 或 ++。这种形式很容易仍人迷惑。应插入括号以便于理解。

        total = subtotal + +myInput.value;

    最好能写成

        total = subtotal + (+myInput.value);

    这样 + + 不会被误认为是 ++。

###八、服务器端设置

1.  使用CDN。
2.  添加周期头，指定过期时间。
3.  启用Gzip压缩。
4.  配置实体标签Etag。
5.  排除404页面：无意义的404页面会影响用户体验并且会消耗服务器资源。
6.  尽可能精减Cookie，并设置合理的过期时间。
7.  缩小favicon.ico的大小并长时间缓存，最好控制在1K以下。
