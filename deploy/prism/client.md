# prism client

## 初始化

```
//$url 为prism的目标地址
//$key 访问prism的key
//$secret 访问prism的secret ，用于签名
$client = new PrismClient($url = 'http://127.0.0.1:8080/api', $key = 'pufy2a7d', $secret = 'skqovukpk2nmdrljphgj');
//$client 即为prism客户端实例
```

## 数据请求
```
//提供了4种请求方式。分别适应不同的http请求方式。
//请求的时候，$path为api接口相应的path参数。该参数里不能带传入参数，即使是get方式请求，兼容path带参数的方式，但是不推荐使用
//$params，为请求参数
//$headers，为用户自定义头信息，会被转发到server端
$return = $client->get($path, $params, $heasers);
$return = $client->post($path, $params, $heasers);
$return = $client->put($path, $params, $heasers);
$return = $client->delete($path, $params, $heasers);
//$return为返回信息。
```
