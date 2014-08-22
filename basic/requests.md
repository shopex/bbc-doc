# 请求

- [基本输入](#basic-input)
- [用户请求的详细信息](#request-information)

<a name="basic-input"></a>

## 基本输入

使用一种简单的方式来访问用户提交的信息。 你可以用统一的方式来访问用户提交的信息，而不用为用户提交信息的方式操心。

**获取一个用户提交的值**

  $name = input::get('name');

**为用户提交信息指定一个的默认返回值(如果用户未提交)**

	$name = input::get('name', 'Sally');

**判断指定的提交信息是否存在**

	if (input::has('name'))
	{
		//
	}

**获取所有用户提交的信息**

	$input = input::all();

**获取指定的信息，或者获取排除指定几个提交项之外的所有提交信息**

	$input = input::only('username', 'password');

	$input = input::except('credit_card');

如果提交的表单含有 "数组" 形式的输入，可以使用点符号访问数组：

	$input = input::get('products.0.name');

> **注意：** 有一些javascript库，比如 Backbone 会以json格式提交信息。 通过 `input::get` 来获取信息，使用上无差别。


<a name="request-information"></a>
## 用户请求的详细信息

`Request` 类提供了许多 方法 用于获取关于请求的详细信息

> **注意**
> request 类所返回的uri/url不排除index.php
> 因此如果想要去掉index.php 的场景需要
>
>     $url = kernel::removeIndex(request::url());

**获取站点完整路径**

    kernel::base_url(1);

> **示例**
> http://localhost/mysite/index.php/about?a=1&b=2     returns 'http://localhost/mysite';
    

**获取站点相对路径**

    kernel::base_url();

> **示例**
> http://localhost/mysite/index.php/about?a=1&b=2     returns '/mysite';


**获取请求URI**

    $uri = Request::path();
    
> **示例**
> http://localhost/mysite                        returns '/';
> http://localhost/mysite/about                  returns '/about'
> http://localhost/mysite/enco%20ded             returns '/enco%20ded'
> http://localhost/mysite/about?var=1            returns '/about'
> http://localhost/mysite/index.php/about?var=1  returns '/about'



**判断请求路径是否符合指定模式**

	if (request::is('admin/*'))
	{
		//
	}

**获取请求URL**
	
	$url = request::url();

> **示例**
> http://localhost/mysite/index.php/about?a=1&b=2     returns 'http://localhost/mysite/index.php/about';


**获取请求头里的Content-Type信息**
	
    $value = Request::header('Content-Type');

**获取 $_SERVER 数组里指定的值**

	$value = request::server('PATH_INFO');

**判断是否是使用ajax请求**

	if (request::ajax())
	{
		//
	}    

**判断请求是否使用https连接**

    if (request::secure())
    {
    	//
    }

**检测请求的响应格式**

`Request::format` 方法基于 HTTP 请求头的 Accept 信息返回客户端希望获取的响应格式:

	if (Request::format() == 'json')
	{
		//
	}
