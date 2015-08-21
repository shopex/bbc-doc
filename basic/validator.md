#基本用法

##基本验证例子

```
$validator = validator::make(
    array('name' => 'Dayle'),
    array('name' => 'required|min:5'),
    array('name' => '自定义错误')
);
```
上文中通过 make 这个方法来的第一个参数来设定所需要被验证的数据名称，第二个参数设定该数据可被接受的规则。

## 使用数组来定义规则
多个验证规则可以使用"|"符号分隔，或是单一数组作为单独的元素分隔。
多个自定义错误使用"|"符号分隔，或是单一数组作为单独的元素分隔。
```
$validator = validator::make(
    array('name' => 'Dayle'),
    array('name' => array('required', 'min:5')),
    array('name' => '自定义错误')
);
```
##验证多个字段
```
$validator = validator::make(
    array(
        'name' => 'Dayle',
        'password' => 'lamepassword',
        'email' => 'email@example.com'
    ),
    array(
        'name' => 'required',
        'password' => 'required|min:8',
        'email' => 'required|email'
    )
    array(
        'name' => '自定义错误',
        'password' => '密码不能为空|密码最短长度为8位',
        'email' => '邮箱必填|邮箱格式不正确'
    )
);
```

当一个 Validator 实例被建立，fails（或 passes） 这两个方法就可以在验证时使用，如下：
```
if ($validator->fails())
{
    // The given data did not pass validation
}
```
假如验证失败，您可以从验证器中接收错误信息。（1）
```
$messages = $validator->messagesInfo(); 

(返回详错误信息，格式为数组如：array('email'=>array(0=>'邮箱格式不对')))

```

假如验证失败，您可以从验证器中接收错误信息。（2）
```
$messages = $validator->messages();
```

#使用错误信息

当您调用一个 validator 实例的 messages 方法后，您会得到一个命名为 messageBag的变量，该变量里有许多方便的方法能让您取得相关的错误信息。

##查看一个字段的第一个错误信息
```
echo $messages->first('email');
```
##查看一个字段的所有错误信息
```
foreach ($messages->get('email') as $message)
{
    //
}
```
##查看所有字段的所有错误信息
```
foreach ($messages->all() as $message)
{
    //
}
```
##判断一个字段是否有错误信息
```
if ($messages->has('email'))
{
    //
}
```

## 可用的验证规则

下面是一个所有可用的验证规则的列表以及它们的功能：

- [Accepted](#rule-accepted)
- [Active URL](#rule-active-url)
- [After (Date)](#rule-after)
- [Alpha](#rule-alpha)
- [Alpha Dash](#rule-alpha-dash)
- [Alpha Numeric](#rule-alpha-num)
- [Before (Date)](#rule-before)
- [Between](#rule-between)
- [Confirmed](#rule-confirmed)
- [Date](#rule-date)
- [Date Format](#rule-date-format)
- [Different](#rule-different)
- [Digits](#rule-digits)
- [Digits Between](#rule-digitsbetween)
- [E-Mail](#rule-email)
- [Exists (Database)](#rule-exists)
- [Image (File)](#rule-image)
- [In](#rule-in)
- [Integer](#rule-integer)
- [IP Address](#rule-ip)
- [Max](#rule-max)
- [MIME Types](#rule-mimes)
- [Min](#rule-min)
- [Not In](#rule-not-in)
- [Numeric](#rule-numeric)
- [Regular Expression](#rule-regex)
- [Required](#rule-required)
- [Required If](#rule-required-if)
- [Required With](#rule-required-with)
- [Required Without](#rule-required-without)
- [Required Without All](#rule-required-without-all)
- [Same](#rule-same)
- [Size](#rule-size)
- [URL](#rule-url)


<a name="rule-accepted"></a>
#### accepted

验证此规则的值必须是 _yes_、 _on_ 或者是 _1_。这在验证是否同意"服务条款"的时候非常有用。

<a name="rule-active-url"></a>
#### active_url

验证此规则的值必须是一个合法的 URL，根据 PHP 函数 `checkdnsrr`。

<a name="rule-after"></a>
#### after:_date_

验证此规则的值必须在给定日期之后，该日期将被传递到 PHP 的 `strtotime` 函数。

<a name="rule-alpha"></a>
#### alpha

验证此规则的值必须全部由字母字符构成。

<a name="rule-alpha-dash"></a>
#### alpha_dash

验证此规则的值必须全部由字母、数字、中划线或下划线字符构成。

<a name="rule-alpha-num"></a>
#### alpha_num

验证此规则的值必须全部由字母和数字构成。

<a name="rule-before"></a>
#### before:_date_

验证此规则的值必须在给定日期之前，该日期将被传递到 PHP 的 `strtotime` 函数。

<a name="rule-between"></a>
#### between:_min_,_max_

验证此规则的值必须在给定的 _min_ 和 _max_ 之间。字符串、数字以及文件都将使用大小规则进行比较。

<a name="rule-confirmed"></a>
#### confirmed

验证此规则的值必须和 `foo_confirmation` 的值相同。比如，需要验证此规则的字段是 `password`，那么在输入中必须有一个与之相同的 `password_confirmation` 字段。

<a name="rule-date"></a>
#### date

验证此规则的值必须是一个合法的日期，根据 PHP 函数 `strtotime`。

<a name="rule-date-format"></a>
#### date_format:_format_

验证此规则的值必须符合给定的 _format_ 的格式，根据 PHP 函数 `date_parse_from_format`。

<a name="rule-different"></a>
#### different:_field_

验证此规则的值必须与指定的 _field_ 字段的值不同。

<a name="rule-digits"></a>
#### digits:_value_

验证此规则的值必须是一个 _数字_ 并且必须满足 _value_ 设定的精确长度。

<a name="rule-digitsbetween"></a>
#### digitsbetween:_min_,_max_

验证此规则的值，它的长度必须介于 _min_ 和 _max_ 之间。

<a name="rule-email"></a>
#### email

验证此规则的值必须是一个合法的电子邮件地址。

<a name="rule-exists"></a>
#### exists:_table_,_column_

验证此规则的值必须在指定的数据库的表中存在。

**Exists 规则的基础使用**

	'state' => 'exists:states'

**指定列名**

	'state' => 'exists:states,abbreviation'

你也可以指定更多的条件，将以 "where" 的形式添加到查询。

	'email' => 'exists:staff,email,account_id,1'

传递 `NULL` 到 "where" 子句中，将会直接在数据库中查找 `NULL` 值：

	'email' => 'exists:staff,email,deleted_at,NULL'

<a name="rule-image"></a>
#### image

验证此规则的值必须是一个图片 (jpeg, png, bmp 或者 gif)。

<a name="rule-in"></a>
#### in:_foo_,_bar_,...

验证此规则的值必须在给定的列表中存在。

<a name="rule-integer"></a>
#### integer

验证此规则的值必须是一个整数。

<a name="rule-ip"></a>
#### ip

验证此规则的值必须是一个合法的 IP 地址。

<a name="rule-max"></a>
#### max:_value_

验证此规则的值必须小于最大值 _value_。字符串、数字以及文件都将使用大小规则进行比较。

<a name="rule-mimes"></a>
#### mimes:_foo_,_bar_,...

验证此规则的文件的 MIME 类型必须在给定的列表中。

**MIME 规则的基础使用**

	'photo' => 'mimes:jpeg,bmp,png'

<a name="rule-min"></a>
#### min:_value_

验证此规则的值必须大于最小值 _value_。字符串、数字以及文件都将使用大小规则进行比较。

<a name="rule-not-in"></a>
#### not_in:_foo_,_bar_,...

验证此规则的值必须在给定的列表中不存在。

<a name="rule-numeric"></a>
#### numeric

验证此规则的值必须是一个数字。

<a name="rule-regex"></a>
#### regex:_pattern_

验证此规则的值必须符合给定的正则表达式。

**注意：** 当使用 `regex` 模式的时候，可能需要在一个数组中指定规则，而不是使用 "|" 分隔符，特别是正则表达式中包含一个 "|" 字符的时候。

<a name="rule-required"></a>
#### required

验证此规则的值必须在输入数据中存在。

<a name="rule-required-if"></a>
#### required_if:_field_,_value_

如果指定的 _field_ 字段等于指定的 _value_ ，那么验证此规则的值必须存在。

<a name="rule-required-with"></a>
#### required_with:_foo_,_bar_,...

_仅当_ 其它指定的字段存在的时候，验证此规则的值必须存在。

<a name="rule-required-without"></a>
#### required_without:_foo_,_bar_,...

_仅当_ 其它指定的字段有一个不存在的时候，验证此规则的值必须存在。

<a name="rule-required-without-all"></a>
#### required_without_all:_foo_,_bar_,...

_仅当_ 其它指定的字段都不存在的时候，验证此规则的值必须存在。

<a name="rule-same"></a>
#### same:_field_

验证此规则的值必须与给定的 _field_ 字段的值相同。

<a name="rule-size"></a>
#### size:_value_

验证此规则的值的大小必须与给定的 _value_ 相同。对于字符串，_value_ 代表字符的个数；对于数字，_value_ 代表它的整数值，对于文件，_value_ 代表文件以KB为单位的大小。



<a name="rule-url"></a>
#### url

验证此规则的值必须是一个合法的 URL。

<a name="conditionally-adding-rules"></a>
## 有条件的添加规则

有时你可能希望给定的字段仅当另一个字段的值大于100的时候必须存在。或者你可能需要两个字段均含有一个给定的值，仅当另一个字段存在的时候。添加这些验证规则并没有那么麻烦。首先，创建一个使用你永远不会改变的 _static rules_ 的 `Validator` 实例：

	$v = validator::make($data, array(
		'email' => 'required|email',
		'games' => 'required|numeric',
	));

假设我们的WEB应用程序是服务于游戏收藏爱好者们。如果一个游戏收藏爱好者注册了我们的应用程序，并且他们拥有100多款游戏，我们想让他们说明为什么他们会拥有如此多的游戏。例如，或许他们要开一个游戏转售店，或者也许他们只是喜欢收集。为了有条件的添加这个需求，我们可以使用 `Validator` 实例的 `sometimes` 函数。

	$v->sometimes('reason', 'required|max:500', function($input)
	{
		return $input->games >= 100;
	});

`sometimes` 函数的第一个参数是我们有条件的验证的字段名。第二个参数是我们要添加的规则。如果 `Closure` 作为第三个参数且返回了 `true`，规则将被添加。这种方法可以很容易构建复杂的条件验证。你甚至可以一次性为多个字段添加条件验证：

	$v->sometimes(array('reason', 'cost'), 'required', function($input)
	{
		return $input->games >= 100;
	});


