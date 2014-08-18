# 请求

- [用户请求的详细信息](#request-information)



<a name="request-information"></a>
## 用户请求的详细信息

`Request` 类提供了许多 方法 用于获取关于请求的详细信息

> **注意**
> request 类所返回的uri/url不排斥index.php
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
	
    $value = request::getHeader('Content-Type');

**获取 $_SERVER 数组里指定的值**

	$value = request::getServer('PATH_INFO');

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

