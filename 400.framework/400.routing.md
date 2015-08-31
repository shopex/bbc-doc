# 路由

- [基本路由](#basic-routing)
- [路由参数](#route-parameters)
- [命名路由](#named-routes)
- [路由组](#route-groups)
- [子域名路由](#sub-domain-routing)
- [路由前缀](#route-prefixing)
- [视图url生成](#view-url)

<a name="basic-routing"></a>
## 基本路由

应用中的大多数路都会定义在 `bootstrap/routes.php` 文件中。最简单的Laravel路由由URI和闭包回调函数组成。

**基本 GET 路由**

	route::get('/', function()
	{
		return 'Hello World';
	});

**基本 POST 路由**

	route::post('foo/bar', function()
	{
		return 'Hello World';
	});

**注册一个可以响应任何HTTP动作的路由**

	route::any('foo', function()
	{
		return 'Hello World';
	});

**仅支持HTTPS的路由**

	route::get('foo', array('https', function()
	{
		return 'Must be over HTTPS';
	}));

实际开发中经常需要根据路由生成 URL，`URL::to`方法就可以满足此需求：

	$url = url::to('foo');

<a name="route-parameters"></a>
## 路由参数

	route::get('user/{id}', function($id)
	{
		return 'User '.$id;
	});

**可选路由参数**

	route::get('user/{name?}', function($name = null)
	{
		return $name;
	});

**带有默认值的可选路由参数**

	route::get('user/{name?}', function($name = 'John')
	{
		return $name;
	});

**用正则表达式限定的路由参数**

	route::get('user/{name}', function($name)
	{
		//
	})
	->where('name', '[A-Za-z]+');

	route::get('user/{id}', function($id)
	{
		//
	})
	->where('id', '[0-9]+');

**传递参数限定的数组**

当然，必要的时候你还可以传递一个包含参数限定的数组作为参数：

	route::get('user/{id}/{name}', function($id, $name)
	{
		//
	})
	->where(array('id' => '[0-9]+', 'name' => '[a-z]+'))

**定义全局模式**

如果希望在全局范围用指定正则表达式限定路由参数，可以使用 `pattern` 方法：

	route::pattern('id', '[0-9]+');

	route::get('user/{id}', function($id)
	{
		// Only called if {id} is numeric.
	});

<a name="named-routes"></a>
## 命名路由

重定向和生成URL时，使用命名路由会更方便。你可以为路由指定一个名字，如下所示：

	route::get('user/profile', array('as' => 'profile', function()
	{
		//
	}));

还可以为 controller action指定路由名称：

	route::get('user/profile', array('as' => 'profile', 'uses' => 'UserController@showProfile'));
  
现在，你可以使用路由名称来创建URL和重定向：

	$url = url::route('profile');

	$redirect = redirect::route('profile');
	
可以使用`currentRouteName`方法来获取当前运行的路由名称:

	$name = route::currentRouteName();

同样可以使用路由器的controller action来创建URL和重定向:

	$url = url::action('UserController@showProfile');

	$redirect = redirect::action('UserController@showProfile');
	
可以使用`route::current()->getActionName()`方法来获取当前运行的路由名称:

    route::current()->getActionName();    


<a name="route-groups"></a>
## 路由组

有时你可能需要为一组路由应用过滤器。使用路由组就可以避免单独为每个路由指定过滤器了：

	route::group(array('before' => 'auth'), function()
	{
		route::get('/', function()
		{
			// Has Auth Filter
		});

		route::get('user/profile', function()
		{
			// Has Auth Filter
		});
	});

<a name="sub-domain-routing"></a>
## 子域名路由

Laravel中的路由功能还支持通配符子域名，你可以在域名中指定通配符参数:

**注册子域名路由**

	route::group(array('domain' => '{account}.myapp.com'), function()
	{

		route::get('user/{id}', function($account, $id)
		{
			//
		});

	});
<a name="route-prefixing"></a>
## 路由前缀

可以通过`prefix`属性为组路由设置前缀：

**为路由组设置前缀**

	route::group(array('prefix' => 'admin'), function()
	{

		route::get('user', function()
		{
			//
		});

	});

<a name="view-url"></a>    
## 视图中URL生成

我们将用个例子进行说明:

	route::get('user/profile', array('as' => 'profile', 'uses' => 'UserController@showProfile'));
    
**根据action创建URL**
    <{url action=UserController@showProfile}>
    
**根据路由创建URL**
    <{url to=user/profile}>


 **根据路由名称来创建URL**
    <{url route=profile}>    
