# prism初始化
- [oauth通用方法](#oauth-common)
- [Oauth登陆页面跳转](#oauth-login)
- [code码换取token](#oauth-code-token)
- [验证session](#oauth-check-session)
- [退出登陆](#oauth-logout)

<a name="oauth-common"></a>
## oauth通用方法
该方法可以当做Oauth登陆页面跳转方法和code换取token方法使用，同时实现这两个方法的功能.
```
$client = new Prism($url = 'http://127.0.0.1:8080/api', $key = 'pufy2a7d', $secret = 'skqovukpk2nmdrljphgj');
//该方法可以直接跳转到登陆页面，也可以作为接受code转化token用
//$token为一个对象，里面包括用户的详细信息和token
$token = $client->oauth($redirect_url);
```

<a name="oauth-login"></a>
## Oauth登陆页面跳转
```
$client = new Prism($url = 'http://127.0.0.1:8080/api', $key = 'pufy2a7d', $secret = 'skqovukpk2nmdrljphgj');
//跳转到登陆页，$redirect_url为登陆后跳转的页面。
$client->goToAuthPage($redirect_url);
//登陆完成后，追自动跳转到$redirect_url?code=fewafewafewafewa地址
```

<a name="oauth-code-token"></a>
## code码换取token
```
$client = new Prism($url = 'http://127.0.0.1:8080/api', $key = 'pufy2a7d', $secret = 'skqovukpk2nmdrljphgj');
$code = $_GET['code'];
//返回token对象
$token = $client->getToken($code);
```
返回信息：
```
{
  "access_token": "72jte6shi2q7da22bo2al2jn",
    "data": {
      "@id": "0001001",
      "login": "admin",
      "email": "admin@example.com",
      "firstname": "barack",
      "lastname": "obama"
    },
    "expires_in": 1409217380,
    "refresh_expires": 1411805780,
    "refresh_token": "fxfbe64zvw52pkintbitnwkxoqjusfz2",
    "session_id": "kv6sdomumjxnme5so2ckbw"
}
```

<a name="oauth-check-session"></a>
## 验证session
```
$client = new Prism($url = 'http://127.0.0.1:8080/api', $key = 'pufy2a7d', $secret = 'skqovukpk2nmdrljphgj');
$result = $client->checkSession($token);
```


<a name="oauth-loguot"></a>
## 退出登陆
```
$client = new Prism($url = 'http://127.0.0.1:8080/api', $key = 'pufy2a7d', $secret = 'skqovukpk2nmdrljphgj');
$client->logout($redirect_url);
```

