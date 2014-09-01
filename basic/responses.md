Response

- [基本Response](#basic-responses)
- [重定向](#redirects)
- [特殊Response](#special-responses)

<a name="basic-responses"></a>
## 基本Response

**从路由中返回字符串**

	route::get('/', function()
	{
		return 'Hello World';
	});

**创建自定义Response**

`Response`类继承自`Symfony\Component\HttpFoundation\Response`类，提供了多种方法用于构建HTTP Response。

	$response = response::make($contents, $statusCode);

	$response->header('Content-Type', $value);

	return $response;

<a name="redirects"></a>
## 重定向

**返回一个重定向**

	return redirect::to('user/login');

**返回一个重定向至命名路由**

	return redirect::route('login');

**返回一个重定向至带有参数的命名路由**

	return redirect::route('profile', array(1));

**返回一个重定向至带有命名参数的命名路由**

	return redirect::route('profile', array('user' => 1));

**返回一个重定向至控制器Action**

	return redirect::action('HomeController@index');

**返回一个重定向至控制器Action并带有参数**

	return redirect::action('UserController@profile', array(1));

**返回一个重定向至控制器Action并带有命名参数**

	return redirect::action('UserController@profile', array('user' => 1));

**返回上一个访问页面**

    return redirect::back();
    
<a name="special-responses"></a>
## 特殊Response

**创建一个JSON Response**

	return response::json(array('name' => 'Steve', 'state' => 'CA'));

**创建一个JSONP Response**

	return response::json(array('name' => 'Steve', 'state' => 'CA'))->setCallback(Input::get('callback'));

**创建一个文件下载Response**

	return response::download($pathToFile);

	return response::download($pathToFile, $status, $headers);

> **注意：** Symfony HttpFoundation 用于处理文件下载，要求下载的文件的文件名只包含 ASCII 字符。    
