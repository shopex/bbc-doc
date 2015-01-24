# B2B2C 前台样式及SCSS文件用例说明

##前言

前台样式框架首先为所有开发B2B2C的开发者而设计，让B2B2C的前端开发更快速、简单，所有开发者都能快速上手，并致力于推广到所有应用场景。

**预处理脚本**
你可以采用预编译的 SCSS 文件快速开发，也可以从源码定制自己需要的样式。

**特性齐全**
你能在这里找到关于 HTML 结构、HTML 和 CSS 组件、SCSS结构方面的所有详细文档。

**参考文档**
为使此样式框架更标准更通过，在样式命名和用例上参考了著名的 bootstrap V3 框架，亦能让大家更快速的上手。但请注意，由于 bootstrap V3 不兼容 IE9 以下版本，并且 B2B2C 有其自身的使用场景，所以在样式表现上可能会有调整，请知悉。

##使用

此框架直接包含在B2B2C的项目的 head 里，使用时直接调用相关类和方法即可。

    <{css src="stylesheets/layout.css" app="topc"}>
    <{css src="stylesheets/theme.css" app="topc"}>

##包含的内容

###资源文件

编译后的文件的目录结构及释义如下：

    statics/
    ├── stylesheets/                -包含所有的开发环境中的样式文件
    │   ├── layout.css              -包含所有的系统级样式及组件的样式
    │   ├── theme.css               -包含所有修饰性的样式，如颜色，边框，背景，字体大小等
    │   ├── iconfonts.css           -包含所有字体图标的样式
    │   └── datepicker.css          -包含一个时间选择组件的样式
    └── fonts/                      -包含所有的字体图标
        ├── iconfonts.eot
        ├── iconfonts.svg
        ├── iconfonts.ttf
        └── iconfonts.woff

这是最基本的 B2B2C 样式文件组织形式。并且在生产环境中会加入压缩版　*.min.css。 fonts 文件夹里的部分字体图标来自网络中现有的免费的图标字体，另一部分是由我们的设计师设计后加入的。

###SCSS 源码

    sass/
    ├── base/                               -所有系统基本样式
    │   ├── iconfonts/                      -字体图标样式
    |   |   ├── _iconfonts-font.scss
    |   |   ├── _iconfonts-icons.scss
    |   |   ├── _iconfonts-variables.scss
    |   |   ├── _iconfonts.scss
    │   ├── _alert.scss                     -警告提示框
    │   ├── _base.scss                      -所有系统基本样式的汇总
    │   ├── _button.scss                    -系统图标样式
    │   ├── _config.scss                    -系统配置文件
    │   ├── _datepicker.scss                -时间选择器组件
    │   ├── _form.scss                      -系统表单样式
    │   ├── _global.scss                    -全局定义
    │   ├── _grid.scss                      -栅格化定义
    │   ├── _icons.scss                     -字体图标样式
    │   ├── _message.scss                   -系统提示信息
    │   ├── _pager.scss                     -翻页组件
    │   ├── _popup.scss                     -弹层组件
    │   ├── _system.scss                    -非可视化编辑区域
    │   ├── _tables.scss                    -系统表格样式
    │   ├── _tags.scss                      -文字标签样式
    │   ├── _tips.scss                      -系统工具提示样式
    │   └── _typography.scss                -字形排版
    ├── layout/                             -所有系统布局样式
    │   ├── _alumbs.scss                    -商品相册布局
    │   ├── _brand.scss                     -品牌页布局
    │   ├── _cart.scss                      -购物车页布局
    │   ├── _gallery.scss                   -商品列表布局
    │   ├── _member.scss                    -会员中心布局
    │   ├── _mod.scss                       -模块化样式布局
    │   ├── _order.scss                     -下单页布局
    │   ├── _passport.scss                  -通行证/注册登录布局
    │   ├── _password.scss                  -密码强度检测组件
    │   ├── _product.scss                   -商品详情页组件
    │   └── _stars.scss                     -对商品评分组件
    ├── theme/                              -所有主题修饰性样式
    │   ├── _brands.scss                    -品牌页修饰
    │   ├── _cart.scss                      -购物车页修饰
    │   ├── _common.scss                    -主题整体修饰性样式
    │   ├── _config.scss                    -主题样式配置
    │   ├── _gallery.scss                   -商品列表修饰
    │   ├── _graphic.scss                   -图形化图片修饰
    │   ├── _history.scss                   -浏览历史记录修饰
    │   ├── _order.scss                     -下单页修饰
    │   └── _passport.scss                  -通行证/注册登录修饰
    ├── layout.scss                         -所有系统基本布局及组件样式
    └── theme.scss                          -所有主题相关修饰性样式

##编译 CSS 文件

B2B2C使用 SASS 做为 CSS 预处理器，在生成最终文件之前，需要用到的环境如下：

###安装 Ruby

我们在安装 Ruby 之前，需要到 (http://rubyinstaller.org/downloads/) 根据自己的系统下载安装包(2.x以上)，如果是 Linux 或 Mac OS 系统，请到 https://www.ruby-lang.org/zh_cn/downloads/ 查看更多安装方式。

安装完成后请到命令行下运行

    ruby -v

如果出现 Ruby 的版本信息就说明安装成功。

###安装 SASS

继续在命令行中运行：

    gem install sass

等待安装完成。或者安装 GUI 工具，具体信息请查看 (http://sass-lang.com/install)。

###安装 Compass

继续在命令行中运行：

    gem install compass

等待安装完成，或者安装GUI工具，具体信息请查看 (http://compass-style.org/install/)。

##基本模板

使用以下给出的这份超级简单的 HTML 模版，并且按照自己的需求进行增加或修改内容。

    <!DOCTYPE html>
    <html lang="zh-cn">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="renderer" content="webkit">
      <title>B2B2C Template</title>

      <link rel="stylesheet" href="statics/stylesheets/layout.css">
      <link rel="stylesheet" href="statics/stylesheets/theme.css">

      <script src="statics/scripts/lib/jquery.js"></script>
      <script src="statics/scripts/tools.js"></script>
    </head>
    <body>
      <h1>你好，世界！</h1>

    </body>
    </html>

##全局 CSS 样式

###排版与链接

- 为了增强跨浏览器表现的一致性，设置了 `css reset`;
- 设置 `html` 的背景为 `background: #FFFFFF`;
- `body` 有默认的 `font-family`，`font-size`，`line-height`;
- `a` 有默认的 `color` 并且不显示下划线;

###布局容器

`.wrap` 类用于固定宽度的容器。

    <div class="wrap">
      ...
    </div>

`.wrap-fluid` 类用于 100% 宽度，占据全部视口的容器。

    <div class="wrap-fluid">
      ...
    </div>

##栅格系统

栅格系统是一套标准化的设计框架，用于通过一系列的行与列的组合来创建页面布局，能让页面中的元素相对规范化。综合各方面设计考虑，我们的栅格分为最多16列。B2B2C 前台的栅格系统如下：

- 暂定两种宽度的容器 `.wrap` 和 `.wrap-lg`。
- “行（row）”必须包含在 .wrap （固定宽度）或 .wrap-fluid （100% 宽度）中，以便为其赋予合适的排列（aligment）和内补（padding）。
- 通过“行（row）”在水平方向创建一组“列（column）”。
- 你的内容应当放置于“列（column）”内，并且，只有“列（column）”可以作为“行（row）”的直接子元素。
- 类似 `.row` 和 `.col-4` 这种预定义的类，可以用来快速创建栅格布局。
- 通过为“列（column）”设置 `padding` 属性，从而创建列与列之间的间隔（gutter）。通过为 `.row` 元素设置负值 `margin` 从而抵消掉为 `.wrap` 元素设置的 `padding`，也就间接为“行（row）”所包含的“列（column）”抵消掉了 `padding`。
- 如果一“行（row）”中包含了的“列（column）”大于 16，多余的“列（column）”所在的元素将被作为一个整体另起一行排列。
- **注意：**如果一个元素中使用了多个类，预定义类 `.col-*` 必须放在首位，以免一部分样式应用不上。

###栅格参数

通过下表可以详细查看 B2B2C 的栅格系统是如何在多种屏幕设备上工作的。

　| 中等屏幕 桌面显示器 | 大屏幕 大桌面显示器
:------|:------------|:---------------
.wrap 最大宽度 | 950px | 1190px
类前缀 | .col- | .col-lg
列数 | 16
列宽 | 50 | 75
间距 | 10px

###实例：从堆叠到水平排列

使用单一的一组 `.col-*` 栅格类，就可以创建一个基本的栅格系统，所有列（column）必须放在 `.row` 内。

    <div class="row">
      <div class="col-1">.col-1</div>
      <div class="col-1">.col-1</div>
      <div class="col-1">.col-1</div>
      <div class="col-1">.col-1</div>
      <div class="col-1">.col-1</div>
      <div class="col-1">.col-1</div>
      <div class="col-1">.col-1</div>
      <div class="col-1">.col-1</div>
      <div class="col-1">.col-1</div>
      <div class="col-1">.col-1</div>
      <div class="col-1">.col-1</div>
      <div class="col-1">.col-1</div>
      <div class="col-1">.col-1</div>
      <div class="col-1">.col-1</div>
      <div class="col-1">.col-1</div>
      <div class="col-1">.col-1</div>
    </div>
    <div class="row">
      <div class="col-4">.col-4</div>
      <div class="col-4">.col-4</div>
      <div class="col-4">.col-4</div>
      <div class="col-4">.col-4</div>
    </div>
    <div class="row">
      <div class="col-4">.col-4</div>
      <div class="col-8">.col-8</div>
      <div class="col-4">.col-4</div>
    </div>
    <div class="row">
      <div class="col-8">.col-8</div>
      <div class="col-8">.col-8</div>
    </div>

###列偏移

使用 `.offset-*` 类可以将列向右侧偏移。这些类实际是通过使用 * 选择器为当前元素增加了左侧的边距（margin）。例如，`.offset-4` 类将 `.col-4` 元素向右侧偏移了4个列（column）的宽度。

    <div class="row">
      <div class="col-5">.col-5</div>
      <div class="col-5 offset-6">.col-5 .offset-6</div>
    </div>
    <div class="row">
      <div class="col-4 offset-4">.col-4 .offset-4</div>
      <div class="col-4 offset-4">.col-4 .offset-4</div>
    </div>
    <div class="row">
      <div class="col-8 offset-4">.col-8 .offset-4</div>
    </div>

###嵌套列

为了使用内置的栅格系统将内容再次嵌套，可以通过添加一个新的 .row 元素和一系列 .col-* 元素到已经存在的 .col-* 元素内。被嵌套的行（row）所包含的列（column）的个数不能超过 16。

    <div class="row">
      <div class="col-12">
        .col-12
        <div class="row">
          <div class="col-8">
            .col-8
          </div>
          <div class="col-4">
            .col-4
          </div>
        </div>
      </div>
    </div>

###SASS 变量

通过变量来定义列数、槽（gutter）宽，我们使用这些变量生成预定义的栅格类。

    //breakpoints
    $wrap:      950px !default;
    $wrap-lg:   1190px !default;
    $wrap-md:   710px !default;
    $wrap-sm:   640px !default;
    $wrap-xs:   320px !default;

    //grid
    $grid-columns:    16 !default;
    $grid-gutter:     10px !default;
    $grid-gutter-lg:  10px !default;

###SASS 扩展

你可以用 scss 扩展这些预定义样式，以便生成更多复杂的布局，下面是一个例子：

    .wrapper {
        @include grid-container($wrap);
        @include clear(fix);
    }
    .sidebar {
        @include float(left);
        @include grid-column-width(null, 4, $grid-span, $grid-gutter);
    }
    .content-main {
        @include grid-column($grid-gutter);
        @include grid-column-width(null, 12, $grid-span, $grid-gutter);
    }

    <div class="wrapper">
      <div class="sidebar">sidebar</div>
      <div class="content-main">content main</div>
    </div>

##排版

###标题

HTML 中的所有标题标签，`<h1>` 到 `<h6>` 均可使用。另外，还提供了 `.h1` 到 `.h6` 类，为的是给内联（inli sne）属性的文本赋予标题的样式。

    <h1>h1. Bootstrap heading</h1>
    <h2>h2. Bootstrap heading</h2>
    <h3>h3. Bootstrap heading</h3>
    <h4>h4. Bootstrap heading</h4>
    <h5>h5. Bootstrap heading</h5>
    <h6>h6. Bootstrap heading</h6>

###页面主体

B2B2C 全局字体大小为 12px，行高设置为 1.5。这些属性直接赋予 `<body>` 元素和所有段落元素。另外，`<p>` 元素还被设置了 1/2 行高 (9px) 的底部外边距。

    <p>对段落的定义：1/2行高 (默认为9px) 的底部外边距 (margin) 属性。</p>

###中心内容

通过添加 .lead 类可以让段落突出显示。

    <p class="lead">段落的突出显示，比普通文字显示要大一些，间距也更大，这样会比较显眼。</p>

###内联文本元素

####被标记的文本

一般使用 `<mark>` 标签来标记文本，显示高亮效果，但是考虑到 IE 的兼容性，可以使用 `.mark` 类做区分。

    对于需要<span class="mark">高亮</span>的文本使用 mark 标签或 .mark 类。

####被删除的文本

对于被删除的文本使用 `<del>` 标签。

    <del>使用 del 标签来标记此段文本是被删除的。</del>

####无用文本

对于没用的文本使用 `<s>` 标签。

    <s>这段文字用 s 标签表示为没用的文本。</s>

####插入文本

额外插入的文本使用 `<ins>` 标签。

    <ins>用 ins 标签表示这段为额外插入文档内的文本。</ins>

####带下划线的文本

为文本添加下划线，使用 `<u>` 标签，一般表示专有名词或拼写错误的单词。

    带下划线的文本表示此为<u>专用名词</u>，在 HTML5 中这是合法的。

#####小号文本
对于不需要强调的 inline 或 block 类型的文本，使用 `<small>` 标签包裹，其内的文本将被设置为父容器字体大小的 85%。

你还可以为行内元素赋予 `.small` 类以代替任何 `<small>` 元素。

    <small>小号文本可以包在 heading 标签中用来表示副标题。</small>

#####着重

通过 `<strong>` 标签增加 font-weight 值强调一段文本。

    一般用 strong 标签来表示<strong>强调一段文本</strong>。

#####斜体

用 `<em>` 标签强调一段文本。

    <em>此段文本也表示强调，但是语气没有 strong 那么重。</em>

>在 HTML5 中可以放心使用 `<b>` 和 `<i>` 标签。 `<b>` 用于高亮单词或短语，不带有任何着重的意味；而 `<i>` 标签主要用于发言、技术词汇等。

###对齐

通过文本对齐类，可以简单方便的将文字重新对齐。

    <p class="text-left">左对齐文本。</p>
    <p class="text-center">居中对齐文本。</p>
    <p class="text-right">右对齐文本。</p>
    <p class="text-justify">两端对齐</p>
    <p class="text-nowrap">不折行文本</p>

###引用

在你的文档中引用其他来源的内容。

####默认样式的引用

将任何 HTML 元素包裹在 `<blockquote>` 中即可表现为引用样式。对于直接引用，我们建议用 `<p>` 标签。

    <blockquote>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
    </blockquote>

###列表

####无序列表

排列顺序无关紧要的一列元素。

    <ul>
      <li>...</li>
    </ul>

####有序列表

顺序至关重要的一组元素。

    <ol>
      <li>...</li>
    </ol>

####内联列表

通过添加样式 `.list-inline`，将所有元素放置于同一行。

    <ul class="list-inline">
      <li>...</li>
    </ul>

####描述

带有描述的短语列表。

    <dl>
      <dt>...</dt>
      <dd>...</dd>
    </dl>

####水平排列的描述

`.dl-horizontal` 可以让 `<dl>` 内的短语及其描述排在一行。通过 `text-overflow` 属性，水平排列的描述列表将会截断左侧太长的短语。

    <dl class="dl-horizontal">
      <dt>...</dt>
      <dd>...</dd>
    </dl>

###代码

####内联代码

通过 `<code>` 标签包裹内联样式的代码片段。

    例如： <code>&lt;code&gt;</code> 应该包裹内联样式的代码片段。

####用户输入

通过 `<kbd>` 标签标记用户通过键盘输入的内容。

    如果要切换目录，请键入 <kbd>cd</kbd> 紧接着一个空格后面再加目录名。<br>
    如果要更改设置，请键入 <kbd><kbd>ctrl</kbd> + <kbd>,</kbd></kbd>。

####代码块
多行代码可以使用 `<pre>` 标签。为了正确的展示代码，注意将尖括号做转义处理。

    <pre>&lt;p&gt;这里放多行代码块。&lt;/p&gt;</pre>

####变量

通过 `<var>` 标签标记变量。

    <var>y</var> = <var>m</var><var>x</var> + <var>b</var>

####程序输出

通过 `<samp>` 标签来标记程序输出的内容。

    <samp>此段文本为程序输出的内容。</samp>

##表格

###基本实例

为任意 `<table>` 标签添加 `.table` 类可以为其赋予基本的样式 — 少量的内补（padding）和水平方向的分隔线。之所以没有设计为默认样式，是考虑到表格元素使用的广泛性，有可能会为某些应用场景造成困扰。

    <table class="table">
      <thead>
        ...
      </thead>
      <tbody>
        ...
      </tbody>
    </table>

###条纹状表格

通过 `.table-striped` 类可以给 `<tbody>` 之内的每一行增加斑马条纹样式。

> #####跨浏览器兼容性
> 条纹状表格是依赖 :nth-child CSS 选择器实现的，而这一功能不被 IE 8 支持。

    <table class="table table-striped">
      ...
    </table>

###带边框的表格

添加 `.table-bordered` 类为表格和其中的每个单元格增加边框。

    <table class="table table-bordered">
      ...
    </table>

###鼠标悬停

通过添加 `.table-hover` 类可以让 `<tbody>` 中的每一行对鼠标悬停状态作出响应。

    <table class="table table-hover">
      ...
    </table>

###状态类

通过这些状态类可以为行或单元格设置颜色。

| Class | 描述
|.selected | 当前被选中的行
|.active | 鼠标悬停在行上时所设置的颜色
|.success | 标识成功或积极的动作
|.info | 标识普通的提示信息或动作
|.warning | 标识警告或需要用户注意
|.danger | 标识危险或潜在的带来负面影响的动作

    <tr class="active">...</tr>
    <tr class="success">...</tr>
    <tr class="warning">...</tr>
    <tr class="danger">...</tr>
    <tr class="info">...</tr>

##表单

###基本实例

- 单独的表单控件会被自动赋予一些全局样式。
- 一个相关完整的表单项组以 `.form-row` 为类名，以获得整洁的排列。
- 最后一项表单项组可以加 `.form-row-last` 类（可选），以去除底部的外边距。
- 标题以 `label` 包裹，并设置 `.form-label` 类以使标题右对齐，为增大表单的焦点区域为 `label` 增加 `for` 属性，并以 `for_` 开头对应表单元素的 `id` 属性。
- 紧接着 `.form-act` 元素，用以包裹表单元素。
- 所有设置了 `.input-block` 类的 `<input>`、`<textarea>` 和 `<select>` 元素都将被默认设置宽度属性为 `width: 100%;`。

根据以上原则，代码如下：

    <form action="" method="post" role="form">
      <div class="form-row">
        <label for="for_input_email" class="form-label">电子邮件</label>
        <span class="form-act">
          <input type="email" class="input-xln" id="for_input_email" placeholder="请输入电子邮件">
        </span>
      </div>
      <div class="form-row">
        <label for="for_input_password" class="form-label">密码</label>
        <span class="form-act">
          <input type="password" class="input-xln" id="for_input_password" placeholder="请输入密码">
        </span>
      </div>
      <div class="form-row">
        <label for="for_input_file" class="form-label">上传文件</label>
        <span class="form-act">
          <input type="file" id="for_input_file" class="input-xln">
          <span class="help-block">这里写帮助信息。</span>
        </span>
      </div>
      <div class="form-row">
        <label class="form-act">
          <input type="checkbox"> 复选框
        </label>
      </div>
      <div class="form-row">
        <span class="form-act"><button type="submit" class="btn"><span><span>提交</span></span></button></span>
      </div>
    </form>

###纵向表单

纵向表单是指标题和表单控件之间分行显示，此模式只需要在 `form` 标签加类名 `.form-vertical` 即可，其它结构与基本实例保持一致。

> #####一定要添加 label 标签
> 不光是为了 seo 或者语义化的考虑，也是为了能让屏幕阅读器能够正确识别。对于不需要显示标题的表单项，你可以通过为 label 设置 `.hide` 类将其隐藏。

    <form action="" method="post" role="form" class="form-vertical">
      <div class="form-row">
        <label for="for_input_email" class="form-label hide">电子邮件</label>
        <span class="form-act">
          <input type="email" class="input-xln" id="for_input_email" placeholder="请输入电子邮件">
        </span>
      </div>
      <div class="form-row">
        <label for="for_input_password" class="form-label hide">密码</label>
        <span class="form-act">
          <input type="password" class="input-xln" id="for_input_password" placeholder="请输入密码">
        </span>
      </div>
      <div class="form-row">
        <label for="for_input_file" class="form-label hide">上传文件</label>
        <span class="form-act">
          <input type="file" id="for_input_file" class="input-xln">
          <span class="help-block">这里写帮助信息。</span>
        </span>
      </div>
      <div class="form-row">
        <span class="form-act checkbox">
          <label><input type="checkbox"> 复选框</label>
        </span>
      </div>
      <div class="form-row">
        <span class="form-act">
          <button type="submit" class="btn"><span><span>提交</span></span></button>
        </span>
      </div>
    </form>

###栅格化表单

把基本表单与栅格布局结合在一起，创建出符合栅格化标准的表单，需要对类名做一些改变：

    <form action="" method="post" role="form">
      <div class="form-row row">
        <label for="for_input_email" class="col-2">电子邮件</label>
        <span class="col-5">
          <input type="email" class="input-block" id="for_input_email" placeholder="请输入电子邮件">
        </span>
      </div>
      <div class="form-row row">
        <label for="for_input_password" class="col-2">密码</label>
        <span class="col-5">
          <input type="password" class="input-block" id="for_input_password" placeholder="请输入密码">
        </span>
      </div>
      <div class="form-row row">
        <label for="for_input_file" class="col-2">上传文件</label>
        <span class="col-5">
          <input type="file" id="for_input_file" class="input-block">
          <span class="help-block">这里写帮助信息。</span>
        </span>
      </div>
      <div class="form-row row">
        <div class="offset-2 checkbox">
          <label><input type="checkbox"> 复选框</label>
        </div>
      </div>
      <div class="form-row row">
        <div class="offset-2">
          <button type="submit" class="btn"><span><span>提交</span></span></button>
        </div>
      </div>
    </form>

当然也可以只对输入框起效果，只需要改成：

    <form action="" method="post" role="form">
      <div class="form-row">
        <label for="for_input_email" class="form-label">电子邮件</label>
        <span class="form-act row input-row">
          <input type="email" class="col-5" id="for_input_email" placeholder="请输入电子邮件">
        </span>
      </div>
      <div class="form-row">
        <label for="for_input_password" class="form-label">密码</label>
        <span class="form-act row input-row">
          <input type="password" class="col-5" id="for_input_password" placeholder="请输入密码">
        </span>
      </div>
      <div class="form-row">
        <label for="for_input_file" class="form-label">上传文件</label>
        <span class="form-act row input-row">
          <input type="file" id="for_input_file" class="col-5">
        </span>
      </div>
      <div class="form-row">
        <div class="form-act">
          <button type="submit" class="btn"><span><span>提交</span></span></button>
        </div>
      </div>
    </form>

###被支持的控件

表单布局实例中展示了其所支持的标准表单控件。

####输入框

包括大部分表单控件、文本域控件，还支持所有 HTML5 类型的输入控件。

> #####必须添加类型声明
> 只有正确设置了 type 属性的输入控件才能被赋予正确的样式。

    <input type="text" class="input-xln" placeholder="请输入文字">

####文本域

支持多行文本的表单控件。可根据需要改变 `rows` 属性。

    <textarea class="input-xln" rows="3"></textarea>

####多选和单选框

设置了 `disabled` 属性的单选或多选框都能被赋予合适的样式。对于一组多选或单选框可以用 `.radio`、`.radio-inline`、`.checkbox`、`.checkbox-inline` 类包裹。

    <div class="checkbox">
      <label>
        <input type="checkbox" value="option1">
        选项1，请确认
      </label>
    </div>
    <div class="checkbox">
      <label>
        <input type="checkbox" value="option2" disabled>
        选择2，禁止选取
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="optionsRadios" value="option1" checked>
        选项1，默认选择
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="optionsRadios" value="option2">
        选项2，请确认
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="optionsRadios" value="option3" disabled>
        选项3，禁止选取
      </label>
    </div>

    <label class="checkbox-inline">
      <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
    </label>
    <br>
    <label class="radio-inline">
      <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 1
    </label>
    <label class="radio-inline">
      <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 2
    </label>
    <label class="radio-inline">
      <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 3
    </label>

####下拉列表（select）

使用默认选项或添加 `multiple` 属性可以同时显示多个选项。

    <select class="input-xln">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>

    <select multiple class="input-xln">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>

####输入框焦点

我们将某些表单控件的默认 `outline` 样式移除，然后在 `:focus` 状态下改变 `border-color`。

####被禁用的输入框

为输入框设置 `disabled` 属性可以防止用户输入，并能对外观做一些修改，使其更直观。

####只读输入框

为输入框设置 `readonly` 属性可以禁止用户输入，并且输入框的样式也是禁用状态。

####校验状态

B2B2C 对表单控件的校验状态，如 error 和 success 状态，都定义了样式。使用时，添加 `.has-error` 或 `.has-success` 类到这些控件的父元素即可。任何包含在此元素之内的标题，输入框和信息提示都将接受这些校验状态的样式。

    <div class="form-row has-success">
      <label class="form-label" for="for_inputsuccess">输入正确</label>
      <div class="form-act">
        <input type="text" class="input-xln" id="for_inputsuccess">
        <span class="icon-checkmark caution">通过</span>
      </div>
    </div>
    <div class="form-row has-error">
      <label class="form-label" for="for_inputerror">输入错误</label>
      <div class="form-act">
        <input type="text" class="input-xln caution-input" id="for_inputerror">
        <span class="icon-alert caution">此项必填</span>
      </div>
    </div>

    <div class="has-success">
      <div class="checkbox-inline">
        <label>
          <input class="x-check" type="checkbox" id="for_checkboxsuccess" value="option1">
          复选框验证通过
        </label>
      </div>
      <span class="icon-checkmark caution">通过</span>
    </div>
    <div class="has-error">
      <div class="checkbox-inline">
        <label>
          <input class="x-check" type="checkbox" id="for_checkboxerror" value="option1">
          复选框验证失败
        </label>
      </div>
      <span class="icon-alert caution">此项必填</span>
    </div>

####输入框图标

在需要为输入框内添加图标时，常规做法是为其父元素添加 `.has-figure` 类并给相应的图标添加 `.form-act-figure` 类。

    <div class="form-row">
      <label class="form-label" for="for_input_user">输入邮箱</label>
      <span class="form-act has-figure col-5">
        <input type="text" class="input-block" id="for_input_user">
        <i class="icon-user form-act-figure"></i>
      </span>
    </div>
    <div class="form-row">
      <label class="form-label" for="for_input_pass">输入密码</label>
      <span class="form-act has-figure col-5">
        <input type="text" class="input-block" id="for_input_lock">
        <i class="icon-lock form-act-figure"></i>
      </span>
    </div>

你还可以针对校验状态为输入框添加额外的图标。只需为其父元素添加 `.has-figure` 类并给相应的图标添加 `.form-act-figure` 类即可。

    <div class="form-row has-error has-figure">
      <label class="form-label" for="for_inputerror">输入错误</label>
      <span class="form-act has-figure col-5">
        <input type="text" class="input-block caution-input" id="for_inputerror">
        <span class="icon-alert form-act-figure"></span>
      </span>
    </div>
    <div class="form-row has-success has-figure">
      <label class="form-label" for="for_inputsuccess">输入正确</label>
      <span class="form-act has-figure col-5">
        <input type="text" class="input-block" id="for_inputsuccess">
        <span class="icon-checkmark-a form-act-figure"></span>
      </span>
    </div>

####控件尺寸

通过 `.input-ln` 类似的类可以为控件设置高度，通过 `.col-lg-*` 类似的类可以为控件设置宽度。

#####高度尺寸

创建大一些或小一些的表单控件以匹配按钮尺寸。

    <input class="input-lg" type="text" placeholder=".input-lg">
    <input type="text" placeholder="默认高度input">
    <input class="input-sm" type="text" placeholder=".input-sm">

    <select class="input-lg">...</select>
    <select>...</select>
    <select class="input-sm">...</select>

#####调整列（column）尺寸

用栅格系统中的列（column）包裹输入框或其任何父元素，都可很容易的为其设置宽度。

    <div class="row input-row">
      <input type="text" class="col-3" placeholder=".col-3">
      <input type="text" class="col-4" placeholder=".col-4">
      <input type="text" class="col-5" placeholder=".col-5">
    </div>

    <div class="wrap-lg row input-row">
      <input type="text" class="col-lg-3" placeholder=".col-lg-3">
      <div class="offset-8">
        <input type="text" class="input-block" placeholder=".offset-8">
      </div>
    </div>

#####调整输入框的长度

为输入框加入 `.input-ln` 类似的类以调节输入框的长度。

    <input type="text" class="input-xxst">
    <input type="text" class="input-xst">
    <input type="text" class="input-st">
    <input type="text" class="input-me">
    <input type="text" class="input-ln">
    <input type="text" class="input-xln">
    <input type="text" class="input-xxln">

###辅助文本

针对表单控件的“块（block）”级辅助文本。

    <span class="help-block">表单项的帮助提示信息</span>

###输入框组

针对一些特殊应用或组件，我们定义了输入框组合，以 `.input-comb` 包裹，加入 `.input-comb-addon` 额外元素然后放入内容。


另外，还可以加入按钮，比如搜索框。

##按钮

###预定义样式

使用下面列出的类可以快速创建一个带有预定义样式的按钮。

> #####跨浏览器展现
> 虽然 `a` 链接也可以伪装成按钮的样子，但是从功能、语义化及跨浏览器展现角度考虑，强烈建议尽可能使用 `<button>` 元素来获得在各个浏览器上获得相匹配的绘制效果。

    <!-- 默认按钮 -->
    <button type="button" class="btn"><span><span>确定</span></span></button>
    <a href="" class="btn"><span><span>查看</span></span></a>
    <!-- 标准扁平式按钮 -->
    <button type="button" class="btn btn-flat"><span><span>确定</span></span></button>
    <a href="" class="btn btn-flat"><span><span>查看</span></span></a>
    <!-- 加入少许立体效果的按钮 -->
    <button type="button" class="btn btn-simple"><span><span>确定</span></span></button>
    <a href="" class="btn btn-simple"><span><span>查看</span></span></a>
    <!-- 占主要性的交互按钮 -->
    <button type="button" class="btn btn-primary"><span><span>提交</span></span></button>
    <a href="" class="btn btn-primary"><span><span>提交</span></span></a>
    <!-- 表示成功或积极行为 -->
    <button type="button" class="btn btn-success"><span><span>成功</span></span></button>
    <a href="" class="btn btn-success"><span><span>成功</span></span></a>
    <!-- 表示一般信息 -->
    <button type="button" class="btn btn-info"><span><span>信息</span></span></button>
    <a href="" class="btn btn-info"><span><span>信息</span></span></a>
    <!-- 表示应谨慎采取这一行为 -->
    <button type="button" class="btn btn-warning"><span><span>警告</span></span></button>
    <a href="" class="btn btn-warning"><span><span>警告</span></span></a>
    <!-- 表示危险或潜在的危险性动作 -->
    <button type="button" class="btn btn-danger"><span><span>危险</span></span></button>
    <a href="" class="btn btn-danger"><span><span>危险</span></span></a>
    <!-- 表示信息或警告消息 -->
    <button type="button" class="btn btn-caution"><span><span>到货通知</span></span></button>
    <a href="" class="btn btn-caution"><span><span>到货通知</span></span></a>
    <!-- 看起来像个链接，同时又保持按钮的行为 -->
    <button type="button" class="btn btn-link"><span><span>继续</span></span></button>
    <!-- 表示重要性比较高或表情比较强烈 -->
    <button type="button" class="btn btn-import"><span><span>去付款</span></span></button>
    <a href="" class="btn btn-import"><span><span>去付款</span></span></a>
    <!-- 主要的交互按钮，重要性次之 -->
    <button type="button" class="btn btn-major"><span><span>加入购物车</span></span></button>
    <a href="" class="btn btn-major"><span><span>加入购物车</span></span></a>
    <!-- 表示信息或警告消息 -->
    <button type="button" class="btn btn-caution"><span><span>到货通知</span></span></button>
    <a href="" class="btn btn-caution"><span><span>到货通知</span></span></a>

###尺寸

需要让按钮具有不同尺寸吗？使用 .btn-sm、.btn-lg 或 .btn-xl 可以获得不同尺寸的按钮。

    <button type="button" class="btn btn-simple btn-sm"><span><span>清空购物车</span></span></button>
    <a href="" class="btn btn-simple btn-sm"><span><span>继续购物</span></span></a>

    <button type="button" class="btn btn-simple btn-lg"><span><span>清空购物车</span></span></button>
    <a href="" class="btn btn-simple btn-lg"><span><span>继续购物</span></span></a>

    <button type="button" class="btn btn-simple btn-xl"><span><span>清空购物车</span></span></button>
    <a href="" class="btn btn-simple btn-xl"><span><span>继续购物</span></span></a>

通过给按钮添加 .btn-block 类可以将其拉伸至父元素100%的宽度，而且按钮也变为了块级（block）元素。

##圆角按钮

如果觉得按钮的直角效果看起来不是那么舒服，可以添加 `.btn-rounded` 类来为按钮增加圆角效果。

> 注：IE8 及以下浏览器不支持 CSS3 的圆角效果。

    <button type="button" class="btn btn-simple btn-rounded"><span><span>清空购物车</span></span></button>
    <a href="" class="btn btn-simple btn-rounded"><span><span>继续购物</span></span></a>

###禁用状态

通过为按钮的背景设置 opacity 属性就可以呈现出无法点击的效果。

> #####跨浏览器兼容性
> 如果为 `<button>` 元素添加 disabled 属性，Internet Explorer 9 及更低版本的浏览器将会把按钮中的文本绘制为灰色，并带有恶心的阴影，目前我们还没有解决办法。
> #####链接的原始功能不受影响
> Chrome 等高级别浏览器可以通过设置 pointer-events: none 来禁止 `<a>` 元素作为链接的原始功能，但是，Opera 18 及更低版本的浏览器并没有完全支持这一属性，同样，IE 11 也不支持。因此，为了安全起见，建议通过 JavaScript 代码来禁止链接的原始功能。

    <button type="button" class="btn btn-simple" disabled><span><span>清空购物车</span></span></button>
    <a href="" class="btn btn-simple disabled"><span><span>继续购物</span></span></a>
    <button type="button" class="btn btn-primary" disabled><span><span>清空购物车</span></span></button>
    <a href="" class="btn btn-primary disabled"><span><span>继续购物</span></span></a>

##辅助类

###文本颜色

通过各种不同颜色的文本来表达不同的语义，你可以添加 `.text-*` 类来达到此效果。

    <p class="text-muted">...</p>
    <p class="text-success">...</p>
    <p class="text-info">...</p>
    <p class="text-warning">...</p>
    <p class="text-danger">...</p>

###背景颜色

类似于文本颜色类，你也可以通过添加不同的 `.bg-*` 类来表达不同的语义。

    <p class="bg-yellow">...</p>
    <p class="bg-alert">...</p>
    <p class="bg-success">...</p>
    <p class="bg-info">...</p>
    <p class="bg-warning">...</p>
    <p class="bg-danger">...</p>
    <p class="bg-error">...</p>
    <p class="bg-selected">...</p>

###关闭按钮

通过使用一个象征关闭的图标，可以让模态框和警告框消失。

    <button type="button" class="close"><span aria-hidden="true">&times;</span><span class="hide">关闭</span></button>

###三角符号

通过使用三角符号可以指示某个元素具有下拉菜单的功能。注意，向上弹出式菜单中的三角符号是反方向的。

    <span class="caret"></span>

###快速浮动

快速地向左或向右浮动，加入 `!important` 是为了避免一些特殊性问题。你也可以利用 SASS 扩展此类。

    <div class="pull-left">...</div>
    <div class="pull-right">...</div>

    // 用于sass
    .element {
        @extend .pull-left;
    }
    .another-element {
        @extend .pull-right;
    }

###清除浮动

在父元素加入 `.clearfix` 类来清除浮动样式，或在后方元素中加入 `.clear` 清除浮动。 也可以在 SASS 中引用带参数的 clear 达到此效果。

    <div class="clearfix">
      <div class="pull-left">...</div>
      <div class="pull-right">...</div>
    </div>
    <div class="clear"></div>

    .element {
        @include clear(fix);
    }

###显示/隐藏内容

对于元素的显示和隐藏分别使用 `.show` 和 `.hide` 类切换。同快速浮动，加入 !important 是为了避免一些特殊性问题。请注意它们只适合块级元素的切换。
对于元素是否可见，还可以使用 `.visible` 和 `.hidden` 来实现，区别是它们会继续占用原来的位置和大小。

    <div class="show">...</div>
    <div class="hide">...</div>
    <div class="visible">...</div>
    <div class="hidden">...</div>

###图像占位文本

利用 `.text-hide` 类隐藏文本内容，以便用图像替换。

    <h1 class="text-hide">自定义标题</h1>

##字体图标

###所有可用的图标

目前为止总共收录了140多个字体图标，可以很方便地被用在各种需要 icon 的场景。

<style>
@font-face{
  font-family:"iconfonts";
  src:url(fonts/iconfonts.eot?v=1.5.2);
  src:url(fonts/iconfonts.eot?v=1.5.2#iefix) format("embedded-opentype"),
      url(fonts/iconfonts.ttf?v=1.5.2) format("truetype");
      font-weight:400;
      font-style:normal;
}
.icon,[class^=icon-]:before{
  display:inline-block;
  font-family:"iconfonts";
  speak:none;
  font-style:normal;
  font-weight:400;
  font-variant:normal;
  text-transform:none;
  text-rendering:auto;
  line-height:1;
  -webkit-font-smoothing:antialiased;
  -moz-osx-font-smoothing:grayscale;
  font-size: 32px;
}
.icon-add:before{content:"⠁"}
.icon-alarm:before{content:"⠂"}
.icon-alert:before{content:"⠃"}
.icon-archive:before{content:"⠄"}
.icon-arrow-back:before{content:"⠅"}
.icon-arrow-down:before{content:"⠆"}
.icon-arrow-down-a:before{content:"⠇"}
.icon-arrow-down-b:before{content:"⠈"}
.icon-arrow-end-a:before{content:"⠉"}
.icon-arrow-forward:before{content:"⠐"}
.icon-arrow-left:before{content:"⠑"}
.icon-arrow-left-a:before{content:"⠒"}
.icon-arrow-left-b:before{content:"⠓"}
.icon-arrow-right:before{content:"⠔"}
.icon-arrow-right-a:before{content:"⠕"}
.icon-arrow-right-b:before{content:"⠖"}
.icon-arrow-start-a:before{content:"⠗"}
.icon-arrow-up:before{content:"⠘"}
.icon-arrow-up-a:before{content:"⠙"}
.icon-arrow-up-b:before{content:"⠠"}
.icon-bag:before{content:"⠡"}
.icon-bell:before{content:"⠢"}
.icon-bell-a:before{content:"⠣"}
.icon-bolt:before{content:"⠤"}
.icon-bookmark:before{content:"⠥"}
.icon-calculator:before{content:"⠦"}
.icon-calendar:before{content:"⠧"}
.icon-card:before{content:"⠨"}
.icon-cart:before{content:"⠩"}
.icon-cart-a:before{content:"⠰"}
.icon-chatbox:before{content:"⠱"}
.icon-chatboxes:before{content:"⠲"}
.icon-chatboxes-a:before{content:"⠳"}
.icon-chatbubble:before{content:"⠴"}
.icon-chatbubble-a:before{content:"⠵"}
.icon-chatbubble-b:before{content:"⠶"}
.icon-chatbubbles:before{content:"⠷"}
.icon-checkmark:before{content:"⠸"}
.icon-checkmark-a:before{content:"⠹"}
.icon-checkmark-b:before{content:"⡀"}
.icon-checkmark-c:before{content:"⡁"}
.icon-checkmark-d:before{content:"⡂"}
.icon-checkmark-e:before{content:"⡃"}
.icon-chevron-down:before{content:"⡄"}
.icon-chevron-left:before{content:"⡅"}
.icon-chevron-right:before{content:"⡆"}
.icon-chevron-up:before{content:"⡇"}
.icon-circle:before{content:"⡈"}
.icon-circle-filled:before{content:"⡉"}
.icon-clock:before{content:"⡐"}
.icon-close:before{content:"⡑"}
.icon-close-a:before{content:"⡒"}
.icon-close-b:before{content:"⡓"}
.icon-close-c:before{content:"⡔"}
.icon-close-d:before{content:"⡕"}
.icon-cloud:before{content:"⡖"}
.icon-cloud-a:before{content:"⡗"}
.icon-compose:before{content:"⡘"}
.icon-compose-a:before{content:"⡙"}
.icon-connection:before{content:"⡠"}
.icon-contact:before{content:"⡡"}
.icon-contact-a:before{content:"⡢"}
.icon-doc:before{content:"⡣"}
.icon-doc-text:before{content:"⡤"}
.icon-drag:before{content:"⡥"}
.icon-drawer:before{content:"⡦"}
.icon-dropdown:before{content:"⡧"}
.icon-earth:before{content:"⡨"}
.icon-email:before{content:"⡩"}
.icon-email-a:before{content:"⡰"}
.icon-eye:before{content:"⡱"}
.icon-flag:before{content:"⡲"}
.icon-flag-a:before{content:"⡳"}
.icon-folder:before{content:"⡴"}
.icon-folder-a:before{content:"⡵"}
.icon-forward:before{content:"⡶"}
.icon-gear:before{content:"⡷"}
.icon-gear-a:before{content:"⡸"}
.icon-grid:before{content:"⡹"}
.icon-heart:before{content:"⢀"}
.icon-heart-a:before{content:"⢁"}
.icon-help:before{content:"⢂"}
.icon-help-a:before{content:"⢃"}
.icon-home:before{content:"⢄"}
.icon-home-a:before{content:"⢅"}
.icon-image:before{content:"⢆"}
.icon-images:before{content:"⢇"}
.icon-information:before{content:"⢈"}
.icon-information-a:before{content:"⢉"}
.icon-lightbulb:before{content:"⢐"}
.icon-lightbulb-a:before{content:"⢑"}
.icon-link:before{content:"⢒"}
.icon-load-a:before{content:"⢓"}
.icon-load-b:before{content:"⢔"}
.icon-load-c:before{content:"⢕"}
.icon-locate:before{content:"⢖"}
.icon-location:before{content:"⢗"}
.icon-lock:before{content:"⢘"}
.icon-locked:before{content:"⢙"}
.icon-login:before{content:"⤀"}
.icon-logout:before{content:"⤁"}
.icon-loop:before{content:"⤂"}
.icon-loop-strong:before{content:"⤃"}
.icon-mic:before{content:"⤄"}
.icon-mic-a:before{content:"⤅"}
.icon-minus:before{content:"⤆"}
.icon-minus-a:before{content:"⤇"}
.icon-minus-b:before{content:"⤈"}
.icon-more:before{content:"⤉"}
.icon-navicon:before{content:"⤐"}
.icon-navigate-a:before{content:"⤑"}
.icon-paperclip:before{content:"⤒"}
.icon-person:before{content:"⤓"}
.icon-person-add:before{content:"⤔"}
.icon-persons:before{content:"⤕"}
.icon-pin:before{content:"⤖"}
.icon-plus:before{content:"⤗"}
.icon-plus-a:before{content:"⤘"}
.icon-plus-b:before{content:"⤙"}
.icon-power:before{content:"⤠"}
.icon-pricetag:before{content:"⤡"}
.icon-pricetag-a:before{content:"⤢"}
.icon-pricetags:before{content:"⤣"}
.icon-pricetags-a:before{content:"⤤"}
.icon-printer:before{content:"⤥"}
.icon-pulse:before{content:"⤦"}
.icon-record:before{content:"⤧"}
.icon-refresh:before{content:"⤨"}
.icon-remove:before{content:"⤩"}
.icon-reply:before{content:"⤰"}
.icon-reply-all:before{content:"⤱"}
.icon-sad:before{content:"⤲"}
.icon-search:before{content:"⤳"}
.icon-search-a:before{content:"⤴"}
.icon-share:before{content:"⤵"}
.icon-star:before{content:"⤶"}
.icon-star-a:before{content:"⤷"}
.icon-star-half:before{content:"⤸"}
.icon-stop:before{content:"⤹"}
.icon-storage:before{content:"⥀"}
.icon-telephone:before{content:"⥁"}
.icon-telephone-a:before{content:"⥂"}
.icon-tip:before{content:"⥃"}
.icon-trash:before{content:"⥄"}
.icon-trash-a:before{content:"⥅"}
.icon-unlocked:before{content:"⥆"}
.icon-user:before{content:"⥇"}
.icon-volume-high:before{content:"⥈"}
.icon-volume-low:before{content:"⥉"}
.icon-wifi:before{content:"⥐"}
#icons {overflow: hidden;list-style: none;}
#icons li {float: left;width: 12.5%;min-width: 100px;}
#icons li .in {border-right: 1px solid #fff; border-bottom: 1px solid #fff; text-align: center; background-color: #f0f0f0;padding: 10px 0;}
#icons li i {display: block;margin-bottom: 10px;}
</style>
<ul id="icons">
  <li><div class="in"><i class="icon-add"></i><span>icon-add</span></div></li>
  <li><div class="in"><i class="icon-alarm"></i><span>icon-alarm</span></div></li>
  <li><div class="in"><i class="icon-alert"></i><span>icon-alert</span></div></li>
  <li><div class="in"><i class="icon-archive"></i><span>icon-archive</span></div></li>
  <li><div class="in"><i class="icon-arrow-back"></i><span>icon-arrow-back</span></div></li>
  <li><div class="in"><i class="icon-arrow-down"></i><span>icon-arrow-down</span></div></li>
  <li><div class="in"><i class="icon-arrow-down-a"></i><span>icon-arrow-down-a</span></div></li>
  <li><div class="in"><i class="icon-arrow-down-b"></i><span>icon-arrow-down-b</span></div></li>
  <li><div class="in"><i class="icon-arrow-end-a"></i><span>icon-arrow-end-a</span></div></li>
  <li><div class="in"><i class="icon-arrow-forward"></i><span>icon-arrow-forward</span></div></li>
  <li><div class="in"><i class="icon-arrow-left"></i><span>icon-arrow-left</span></div></li>
  <li><div class="in"><i class="icon-arrow-left-a"></i><span>icon-arrow-left-a</span></div></li>
  <li><div class="in"><i class="icon-arrow-left-b"></i><span>icon-arrow-left-b</span></div></li>
  <li><div class="in"><i class="icon-arrow-right"></i><span>icon-arrow-right</span></div></li>
  <li><div class="in"><i class="icon-arrow-right-a"></i><span>icon-arrow-right-a</span></div></li>
  <li><div class="in"><i class="icon-arrow-right-b"></i><span>icon-arrow-right-b</span></div></li>
  <li><div class="in"><i class="icon-arrow-start-a"></i><span>icon-arrow-start-a</span></div></li>
  <li><div class="in"><i class="icon-arrow-up"></i><span>icon-arrow-up</span></div></li>
  <li><div class="in"><i class="icon-arrow-up-a"></i><span>icon-arrow-up-a</span></div></li>
  <li><div class="in"><i class="icon-arrow-up-b"></i><span>icon-arrow-up-b</span></div></li>
  <li><div class="in"><i class="icon-bag"></i><span>icon-bag</span></div></li>
  <li><div class="in"><i class="icon-bell"></i><span>icon-bell</span></div></li>
  <li><div class="in"><i class="icon-bell-a"></i><span>icon-bell-a</span></div></li>
  <li><div class="in"><i class="icon-bolt"></i><span>icon-bolt</span></div></li>
  <li><div class="in"><i class="icon-bookmark"></i><span>icon-bookmark</span></div></li>
  <li><div class="in"><i class="icon-calculator"></i><span>icon-calculator</span></div></li>
  <li><div class="in"><i class="icon-calendar"></i><span>icon-calendar</span></div></li>
  <li><div class="in"><i class="icon-card"></i><span>icon-card</span></div></li>
  <li><div class="in"><i class="icon-cart"></i><span>icon-cart</span></div></li>
  <li><div class="in"><i class="icon-cart-a"></i><span>icon-cart-a</span></div></li>
  <li><div class="in"><i class="icon-chatbox"></i><span>icon-chatbox</span></div></li>
  <li><div class="in"><i class="icon-chatboxes"></i><span>icon-chatboxes</span></div></li>
  <li><div class="in"><i class="icon-chatboxes-a"></i><span>icon-chatboxes-a</span></div></li>
  <li><div class="in"><i class="icon-chatbubble"></i><span>icon-chatbubble</span></div></li>
  <li><div class="in"><i class="icon-chatbubble-a"></i><span>icon-chatbubble-a</span></div></li>
  <li><div class="in"><i class="icon-chatbubble-b"></i><span>icon-chatbubble-b</span></div></li>
  <li><div class="in"><i class="icon-chatbubbles"></i><span>icon-chatbubbles</span></div></li>
  <li><div class="in"><i class="icon-checkmark"></i><span>icon-checkmark</span></div></li>
  <li><div class="in"><i class="icon-checkmark-a"></i><span>icon-checkmark-a</span></div></li>
  <li><div class="in"><i class="icon-checkmark-b"></i><span>icon-checkmark-b</span></div></li>
  <li><div class="in"><i class="icon-checkmark-c"></i><span>icon-checkmark-c</span></div></li>
  <li><div class="in"><i class="icon-checkmark-d"></i><span>icon-checkmark-d</span></div></li>
  <li><div class="in"><i class="icon-checkmark-e"></i><span>icon-checkmark-e</span></div></li>
  <li><div class="in"><i class="icon-chevron-down"></i><span>icon-chevron-down</span></div></li>
  <li><div class="in"><i class="icon-chevron-left"></i><span>icon-chevron-left</span></div></li>
  <li><div class="in"><i class="icon-chevron-right"></i><span>icon-chevron-right</span></div></li>
  <li><div class="in"><i class="icon-chevron-up"></i><span>icon-chevron-up</span></div></li>
  <li><div class="in"><i class="icon-circle"></i><span>icon-circle</span></div></li>
  <li><div class="in"><i class="icon-circle-filled"></i><span>icon-circle-filled</span></div></li>
  <li><div class="in"><i class="icon-clock"></i><span>icon-clock</span></div></li>
  <li><div class="in"><i class="icon-close"></i><span>icon-close</span></div></li>
  <li><div class="in"><i class="icon-close-a"></i><span>icon-close-a</span></div></li>
  <li><div class="in"><i class="icon-close-b"></i><span>icon-close-b</span></div></li>
  <li><div class="in"><i class="icon-close-c"></i><span>icon-close-c</span></div></li>
  <li><div class="in"><i class="icon-close-d"></i><span>icon-close-d</span></div></li>
  <li><div class="in"><i class="icon-cloud"></i><span>icon-cloud</span></div></li>
  <li><div class="in"><i class="icon-cloud-a"></i><span>icon-cloud-a</span></div></li>
  <li><div class="in"><i class="icon-compose"></i><span>icon-compose</span></div></li>
  <li><div class="in"><i class="icon-compose-a"></i><span>icon-compose-a</span></div></li>
  <li><div class="in"><i class="icon-connection"></i><span>icon-connection</span></div></li>
  <li><div class="in"><i class="icon-contact"></i><span>icon-contact</span></div></li>
  <li><div class="in"><i class="icon-contact-a"></i><span>icon-contact-a</span></div></li>
  <li><div class="in"><i class="icon-doc"></i><span>icon-doc</span></div></li>
  <li><div class="in"><i class="icon-doc-text"></i><span>icon-doc-text</span></div></li>
  <li><div class="in"><i class="icon-drag"></i><span>icon-drag</span></div></li>
  <li><div class="in"><i class="icon-drawer"></i><span>icon-drawer</span></div></li>
  <li><div class="in"><i class="icon-dropdown"></i><span>icon-dropdown</span></div></li>
  <li><div class="in"><i class="icon-earth"></i><span>icon-earth</span></div></li>
  <li><div class="in"><i class="icon-email"></i><span>icon-email</span></div></li>
  <li><div class="in"><i class="icon-email-a"></i><span>icon-email-a</span></div></li>
  <li><div class="in"><i class="icon-eye"></i><span>icon-eye</span></div></li>
  <li><div class="in"><i class="icon-flag"></i><span>icon-flag</span></div></li>
  <li><div class="in"><i class="icon-flag-a"></i><span>icon-flag-a</span></div></li>
  <li><div class="in"><i class="icon-folder"></i><span>icon-folder</span></div></li>
  <li><div class="in"><i class="icon-folder-a"></i><span>icon-folder-a</span></div></li>
  <li><div class="in"><i class="icon-forward"></i><span>icon-forward</span></div></li>
  <li><div class="in"><i class="icon-gear"></i><span>icon-gear</span></div></li>
  <li><div class="in"><i class="icon-gear-a"></i><span>icon-gear-a</span></div></li>
  <li><div class="in"><i class="icon-grid"></i><span>icon-grid</span></div></li>
  <li><div class="in"><i class="icon-heart"></i><span>icon-heart</span></div></li>
  <li><div class="in"><i class="icon-heart-a"></i><span>icon-heart-a</span></div></li>
  <li><div class="in"><i class="icon-help"></i><span>icon-help</span></div></li>
  <li><div class="in"><i class="icon-help-a"></i><span>icon-help-a</span></div></li>
  <li><div class="in"><i class="icon-home"></i><span>icon-home</span></div></li>
  <li><div class="in"><i class="icon-home-a"></i><span>icon-home-a</span></div></li>
  <li><div class="in"><i class="icon-image"></i><span>icon-image</span></div></li>
  <li><div class="in"><i class="icon-images"></i><span>icon-images</span></div></li>
  <li><div class="in"><i class="icon-information"></i><span>icon-information</span></div></li>
  <li><div class="in"><i class="icon-information-a"></i><span>icon-information-a</span></div></li>
  <li><div class="in"><i class="icon-lightbulb"></i><span>icon-lightbulb</span></div></li>
  <li><div class="in"><i class="icon-lightbulb-a"></i><span>icon-lightbulb-a</span></div></li>
  <li><div class="in"><i class="icon-link"></i><span>icon-link</span></div></li>
  <li><div class="in"><i class="icon-load-a"></i><span>icon-load-a</span></div></li>
  <li><div class="in"><i class="icon-load-b"></i><span>icon-load-b</span></div></li>
  <li><div class="in"><i class="icon-load-c"></i><span>icon-load-c</span></div></li>
  <li><div class="in"><i class="icon-locate"></i><span>icon-locate</span></div></li>
  <li><div class="in"><i class="icon-location"></i><span>icon-location</span></div></li>
  <li><div class="in"><i class="icon-lock"></i><span>icon-lock</span></div></li>
  <li><div class="in"><i class="icon-locked"></i><span>icon-locked</span></div></li>
  <li><div class="in"><i class="icon-login"></i><span>icon-login</span></div></li>
  <li><div class="in"><i class="icon-logout"></i><span>icon-logout</span></div></li>
  <li><div class="in"><i class="icon-loop"></i><span>icon-loop</span></div></li>
  <li><div class="in"><i class="icon-loop-strong"></i><span>icon-loop-strong</span></div></li>
  <li><div class="in"><i class="icon-mic"></i><span>icon-mic</span></div></li>
  <li><div class="in"><i class="icon-mic-a"></i><span>icon-mic-a</span></div></li>
  <li><div class="in"><i class="icon-minus"></i><span>icon-minus</span></div></li>
  <li><div class="in"><i class="icon-minus-a"></i><span>icon-minus-a</span></div></li>
  <li><div class="in"><i class="icon-minus-b"></i><span>icon-minus-b</span></div></li>
  <li><div class="in"><i class="icon-more"></i><span>icon-more</span></div></li>
  <li><div class="in"><i class="icon-navicon"></i><span>icon-navicon</span></div></li>
  <li><div class="in"><i class="icon-navigate-a"></i><span>icon-navigate-a</span></div></li>
  <li><div class="in"><i class="icon-paperclip"></i><span>icon-paperclip</span></div></li>
  <li><div class="in"><i class="icon-person"></i><span>icon-person</span></div></li>
  <li><div class="in"><i class="icon-person-add"></i><span>icon-person-add</span></div></li>
  <li><div class="in"><i class="icon-persons"></i><span>icon-persons</span></div></li>
  <li><div class="in"><i class="icon-pin"></i><span>icon-pin</span></div></li>
  <li><div class="in"><i class="icon-plus"></i><span>icon-plus</span></div></li>
  <li><div class="in"><i class="icon-plus-a"></i><span>icon-plus-a</span></div></li>
  <li><div class="in"><i class="icon-plus-b"></i><span>icon-plus-b</span></div></li>
  <li><div class="in"><i class="icon-power"></i><span>icon-power</span></div></li>
  <li><div class="in"><i class="icon-pricetag"></i><span>icon-pricetag</span></div></li>
  <li><div class="in"><i class="icon-pricetag-a"></i><span>icon-pricetag-a</span></div></li>
  <li><div class="in"><i class="icon-pricetags"></i><span>icon-pricetags</span></div></li>
  <li><div class="in"><i class="icon-pricetags-a"></i><span>icon-pricetags-a</span></div></li>
  <li><div class="in"><i class="icon-printer"></i><span>icon-printer</span></div></li>
  <li><div class="in"><i class="icon-pulse"></i><span>icon-pulse</span></div></li>
  <li><div class="in"><i class="icon-record"></i><span>icon-record</span></div></li>
  <li><div class="in"><i class="icon-refresh"></i><span>icon-refresh</span></div></li>
  <li><div class="in"><i class="icon-remove"></i><span>icon-remove</span></div></li>
  <li><div class="in"><i class="icon-reply"></i><span>icon-reply</span></div></li>
  <li><div class="in"><i class="icon-reply-all"></i><span>icon-reply-all</span></div></li>
  <li><div class="in"><i class="icon-sad"></i><span>icon-sad</span></div></li>
  <li><div class="in"><i class="icon-search"></i><span>icon-search</span></div></li>
  <li><div class="in"><i class="icon-search-a"></i><span>icon-search-a</span></div></li>
  <li><div class="in"><i class="icon-share"></i><span>icon-share</span></div></li>
  <li><div class="in"><i class="icon-star"></i><span>icon-star</span></div></li>
  <li><div class="in"><i class="icon-star-a"></i><span>icon-star-a</span></div></li>
  <li><div class="in"><i class="icon-star-half"></i><span>icon-star-half</span></div></li>
  <li><div class="in"><i class="icon-stop"></i><span>icon-stop</span></div></li>
  <li><div class="in"><i class="icon-storage"></i><span>icon-storage</span></div></li>
  <li><div class="in"><i class="icon-telephone"></i><span>icon-telephone</span></div></li>
  <li><div class="in"><i class="icon-telephone-a"></i><span>icon-telephone-a</span></div></li>
  <li><div class="in"><i class="icon-tip"></i><span>icon-tip</span></div></li>
  <li><div class="in"><i class="icon-trash"></i><span>icon-trash</span></div></li>
  <li><div class="in"><i class="icon-trash-a"></i><span>icon-trash-a</span></div></li>
  <li><div class="in"><i class="icon-unlocked"></i><span>icon-unlocked</span></div></li>
  <li><div class="in"><i class="icon-user"></i><span>icon-user</span></div></li>
  <li><div class="in"><i class="icon-volume-high"></i><span>icon-volume-high</span></div></li>
  <li><div class="in"><i class="icon-volume-low"></i><span>icon-volume-low</span></div></li>
  <li><div class="in"><i class="icon-wifi"></i><span>icon-wifi</span></div></li>
</ul>

###实例

可以把它们应用到按钮、导航或输入框等地方。

    <button type="button" class="btn btn-flat">
      <span><span><i class="icon-star"></i></span></span>
    </button>
    <button type="button" class="btn btn-simple btn-lg">
      <span><span><i class="icon-star"></i> Stars</span></span>
    </button>

也可以在输入验证等信息提示框中使用，表明这是一个错误信息。

    <div class="danger">
      <i class="icon-alert"></i>
      输入不正确，请重新填写。
    </div>

##路径导航

在一个带有层次的导航结构中标明当前页面的位置。各路径间的分隔符通过 CSS 的 `:before` 生成，无需再次添加。

    <ol class="breadcrumb">
      <li><a href="#">首页</a></li>
      <li><a href="#">商品列表</a></li>
      <li class="active">商品品牌</li>
    </ol>

##分页

为 B2B2C 提供带有展示页码的分页组件，或者可以使用简单的翻页组件。

###默认分页

标准分页代码如下：

    <div class="pager">
      <span class="flip prev disabled">&lsaquo;</span>
      <a href="#" class="flip">1</a>
      <a href="#" class="flip">2</a>
      <a href="#" class="flip active">3</a>
      <span class="ellipsis">...</span>
      <a href="#" class="flip">4</a>
      <a href="#" class="flip">5</a>
      <a href="#" class="flip next">&rsaquo;</a>
    </div>

###更小的分页

加入 `.page-sm` 就会得到更小尺寸的分页。

    <div class="pager pager-sm">
      <span class="flip prev disabled">&lsaquo;</span>
      <a href="#" class="flip">1</a>
      <a href="#" class="flip">2</a>
      <a href="#" class="flip active">3</a>
      <span class="ellipsis">...</span>
      <a href="#" class="flip">4</a>
      <a href="#" class="flip">5</a>
      <a href="#" class="flip next">&rsaquo;</a>
    </div>

##标签

请看实例

    <span class="label">新</span>
    <span class="label label-disabled">新</span>
    <span class="label label-primary">新</span>
    <span class="label label-success">新</span>
    <span class="label label-info">新</span>
    <span class="label label-warning">新</span>
    <span class="label label-danger">新</span>

##指示

给链接、导航等元素嵌套 `.point` 元素，可以很醒目的展示新的或未读的信息条目。

      <span class="point">5</span>
      <span class="point">10</span>
      <span class="point">245</span>
      <span class="point point-disabled">0</span>
      <span class="point point-sm">5</span>
      <span class="point point-sm">10</span>
      <span class="point point-sm">245</span>

##警告框

警告框组件通过提供一些灵活的预定义消息，为常见的用户动作提供反馈消息。

###实例

将任意文本包裹在以下类中就能组成一个警告框，每个类分别代表不同的警告信息。

      <div class="alert">alert提示提醒注意！</div>
      <div class="info">info提示提醒注意！</div>
      <div class="warning">warning提示提醒注意！</div>
      <div class="danger">danger提示提醒注意！</div>
      <div class="success">success提示提醒注意！</div>
      <div class="error">error提示提醒注意！</div>

也可以与字体图标组合，表达更丰富的意义。

      <div class="alert"><span class="icon-alert"></span> alert提示提醒注意！</div>
      <div class="info"><span class="icon-info"></span> info提示提醒注意！</div>
      <div class="warning"><span class="icon-tip"></span> warning提示提醒注意！</div>
      <div class="danger"><span class="icon-close-b"></span> danger提示提醒注意！</div>
      <div class="success"><span class="icon-checkmark-c"></span> success提示提醒注意！</div>


