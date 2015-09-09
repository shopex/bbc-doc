# prism server

## Api写法
需要实现自己的类，方法为如下格式：
```
class classname
{
  public function funname($request, $response)
  {
      // 获取请求中的Params
      $request->getParams();
      // 获取请求中的Request ID
      $request->getRequestID();
      // 获取用户登录的信息
      $request->getOauth();
      // 获取应用的信息
      $request->getAppInfo();
      //获取请求者IP
      $request->getCallerIP();
      // 获取自定义头信息
      $request->getHeaders();
      // 获取请求的类型GET/POST/PUT/DELETE
      $request->getMethod();
      // 获取请求的地址 (path)
      $request->getPath();

      // 添加自定义头 比如'Content-Type： text/json;charset=utf8'
      $response->setHeader($key, $value);
      // 设置返回内容, $result可以是字符串数组对象等
      $response->setResult($result);
      // 设置错误内容,会自动添加错误码 $message：错误类型, $data: 错误信息
      $response->setError($message, $data);
      // 获取$headers 包括自定义的Header
      $response->getHeaders();
      // 获取$request_id
      $response->getRequestID();
      // 获取JSON格式的响应内容(JSONRPC2.0)
      $response->getJSON();
      // 发送响应 会执行exit()
      $response->send();
  }
}
```

## Server用法(不带router)
```
$server = new PrismServer(); // 创建服务端实例
/**
* $handler:         类名@方法名
* $require_oauth:   是否需要oauth验证(默认为false)
*/
$server->dispatch('AppleStore@getList', false);
```
## Server用法（带router）
```
$server = new PrismServer(); // 创建服务端实例
$server->get('/ping', 'AppleStore@pong');
//第一个参数表示routing_key，第二个参数是类名@方法名，第三个为是否需要oauth验证
$server->get('/get_list', 'AppleStore@getList', false);
```

## Server加载过滤器
```
$server = new PrismServer(); // 创建服务端实例
//public function validate($request,$response)
$server->uses('EcosValidator@validate'); // 使用Ecos的验签middleware来验证
$server->dispatch('AppleStore@getList', false);
```
