<?php
    $configPrismUrl = 'http://192.168.51.70/';
    $configAdminKey = '6loq33ns';
    $configAdminSecret = '5xh25gevid6ufzfykvwv';
    $configUserName = 'aabb2222@qq.com';
    $configUserPassword = 'xinxin123';
    $configUserAppName = 'ecsto';
    //从中心获取
    $configToken = "706ec6234293dd99badfb4ac484ec5a3261114e7a2cfed6dcfe9e136e08aae1a";
    //这个文件可以由系统自己生成
    $configJSONFileUrl = 'http://192.168.51.221/b.json';

    require_once('Client.php');
    require_once('admin/App.php');
    require_once('admin/Api.php');
    require_once('admin/User.php');
    require_once('admin/Oauth.php');
    require_once('user/Api.php');
    require_once('user/App.php');
    require_once('user/Key.php');

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

    //app设置相关
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

