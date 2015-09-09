# prism自动初始化代码示例

## 序
 - 封装过几个类，用来封装访问方法。详细可以看prismclient/test/admin目录和/prismclient/test/user目录下的文件，类中有详细的参数。
 - 总体思路是根据prism初始化文档[prism API初始化](/deploy/prism/api-init.md)的思路，只不过通过数据接口访问实现
 - Oauth的设置参数也需要进行自行配置，示例代码中没有写，但是可以参照文档最后的内容去配置

## 需要传入的配置参数
需要定义好如下参数
```
    //prism的地址
    $configPrismUrl = 'http://prismhost/';
    //prism的admin用户的key和secret
    $configAdminKey = '6loq33ns';
    $configAdminSecret = '5xh25gevid6ufzfykvwv';
    //将要创建的用户和密码
    $configUserName = 'aabb2222@qq.com';
    $configUserPassword = 'xinxin123';
    //将要创建的应用的名称
    $configUserAppName = 'ecsto';
    //从中心获取，这个数据与json文件的配置项中要匹配
    $configToken = "706ec6234293dd99badfb4ac484ec5a3261114e7a2cfed6dcfe9e136e08aae1a";
    //这个文件可以由系统自己生成
    //这里是导入api的json文件
    $configJSONFileUrl = 'http://192.168.51.221/b.json';
```
# 创建用户
```
    //创建用户
    echo "创建用户开始\n";
    $adminUserCreateParams = array(
        'email' => $configUserName,
        'password' => $configUserPassword,
    );
    $adminUser = new adminUser($configPrismUrl, $configAdminKey, $configAdminSecret);
    $return = $adminUser->create($adminUserCreateParams);
    unset($adminUser);
    echo $return;echo "\n";
    echo "创建用户结束\n";
```
# 给用户赋予开发者权限，相当于后台审核通过
```
    //给用户开发者权限
    echo "给用户开发者权限开始\n";
    $adminUserActiveParams = array(
        'email' => $configUserName,
    );
    $adminUser = new adminUser($configPrismUrl, $configAdminKey, $configAdminSecret);
    $return = $adminUser->active($adminUserActiveParams);
    unset($adminUser);
    echo $return;echo "\n";
    echo "给用户开发者权限结束\n";
```

```
    //给用户api提供者权限
    echo "给用户api提供者权限开始\n";
    $adminUserApiProviderParams = array(
        'email' => $configUserName,
    );
    $adminUser = new adminUser($configPrismUrl, $configAdminKey, $configAdminSecret);
    $return = $adminUser->apiprovider($adminUserApiProviderParams);
    unset($adminUser);
    echo $return;echo "\n";
    echo "给用户api提供者权限结束\n";
```

# 通过接口获取用户的管理key和secret，为了以后用户管理使用
```
    //获取用户的管理key和secret
    echo "获取用户的管理key和secret开始\n";
    $adminUserInfoParams = array(
        'email' => $configUserName,
    );
    $adminUser = new adminUser($configPrismUrl, $configAdminKey, $configAdminSecret);
    $return = $adminUser->info($adminUserInfoParams);
    unset($adminUser);
    echo $return;echo "\n";
    $return = json_decode($return,1);

    $configUserKey = $return['result']['Key'];
    $configUserSecret = $return['result']['Secret'];
    echo "获取用户的管理key和secret结束\n";
```

# 导入api的json文件
```
    //导入api数据
    //$configApiId = "olgq7x4i";
    echo "导入api数据开始\n";
    $userApiImportParams = array(
        'url' => $configJSONFileUrl,
    );
    $userApi = new userApi($configPrismUrl, $configUserKey, $configUserSecret);
    $return = $userApi->import($userApiImportParams);
    unset($userApi);
    echo $return;echo "\n";
    $return = json_decode($return,1);
    $configApiId = $return['result']['apis'][0]['Id'];
    echo "导入api数据结束\n";
```

# api设置
这里会根据api的设置，去配置一些东西，是自定义内容，不同区域的不同，这里应该写成兼容模式，而不是写死，因为这里只是一个简单测试用例，所以这样写了。
```
    //api设置相关
    echo "app设置相关开始\n";
    $userApiSetConfParams = array(
        'Id' => $configApiId,
        'key'=> 'token',
        'value'=>$configToken,
    );
    $userApi = new userApi($configPrismUrl, $configUserKey, $configUserSecret);
    $return = $userApi->set_conf($userApiSetConfParams);
    echo $return;echo "\n";
    $return = json_decode($return,1);
    echo "app设置相关结束\n";
```

# 后台控制api上线
```
    //api上线
    echo "api上线开始\n";
    $adminApiOnlineParams = array(
        'Id' => $configApiId,
    );
    $adminApi = new adminApi($configPrismUrl, $configAdminKey, $configAdminSecret);
    $return = $adminApi->online($adminApiOnlineParams);
    unset($adminApi);
    echo $return;echo "\n";
    echo "api上线结束\n";
```
# 创建应用
只有通过应用，才能用key和secret访问api
```
    //用户创建应用
    //$configUserAppId = 'zprd3fs';
    echo "用户创建应用开始\n";
    $userAppCreateParams = array(
        'name' => $configUserAppName,
    );
    $userApp = new userApp($configPrismUrl, $configUserKey, $configUserSecret);
    $return = $userApp->create($userAppCreateParams);
    unset($userApp);
    echo $return;echo "\n";
    $return = json_decode($return, 1);
    $configUserAppId = $return['result']['Id'];
    echo $configUserAppId;
    echo "用户创建应用结束\n";
```

# 后台绑定app与api
```
    //给app绑定api
    echo "给app绑定api开始\n";
    $adminAppBindParams = array(
        'app_id' => $configUserAppId,
        'api_id' => $configApiId,
        'path' => '*',
        'limit_count' => 1000,
        'limit_seconds' => 60
    );
    $adminApp = new adminApp($configPrismUrl, $configAdminKey, $configAdminSecret);
    $return = $adminApp->setBindApi($adminAppBindParams);
    unset($userApp);
    echo $return;echo "\n";
    echo "给app绑定api结束\n";
```
# 创建key
通过返回的key和secret，就可以访问api了。
```
    //给app创建key
    echo "给app创建key开始\n";
    $userKeyCreateParams = array(
        'app_id' => $configUserAppId,
    );
    $userKey = new userKey($configPrismUrl, $configUserKey, $configUserSecret);
    echo $configUserKey."\n";
    echo $configUserSecret."\n";
    $return = $userKey->create($userKeyCreateParams);
    unset($userKey);
    echo $return;echo "\n";
    $return = json_decode($return,1);
    $configClientKey = $return['result']['key'];
    $configClientSecret = $return['result']['secret'];
    echo "给app创建key结束\n";
```

# 设置Oauth的后台配置
这里的数据也应该需要配置
```
    //Oauth设置
    echo "Oauth设置开始\n";
    $adminOauthSetConfParams = array(
        "CfgIdColumn"     => "",
        "CheckAccountSQL" => "select * from user;",
        "Database"        => "prism_oauth",
        "FailedSQL"       => "",
        "Host"            => "localhost:3306",
        "Password"        => "",
        "SuccessSQL"      => "",
        "User"            => "root",
    );
    $adminOauth = new adminOauth($configPrismUrl,$configAdminKey,$configAdminSecret);
    $return = $adminOauth->getConf($adminOauthSetConfParams);
    echo $return;
    echo "Oauth设置结束\n";
```

