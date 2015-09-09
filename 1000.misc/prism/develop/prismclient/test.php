<?php
//测试client sdk
//require_once('client.php');
//$client = new prism_client('http://localhost:8080', 'tnmo7css', 'nn36c6mklyhk6paeclh4');
//echo $client->get('/api/get_goods?method=get_goods');

//测试新版prism sdk
//  require_once('src/prism.php');
//  $client = new Prism('http://localhost:8080', 'tnmo7css', 'nn36c6mklyhk6paeclh4');
//  echo $client->post('/api/get_goods?method=get_goods');

//测试sdk的Oauth
//require_once('src/prism.php');
//$key = 'tnmo7css';
//$client = new Prism('http://localhost:8080', 'tnmo7css', 'nn36c6mklyhk6paeclh4');
////$token = 'vuvcpxsyb33lq64ragowtq2t';
////$token = $client->refreshToken($token);
//$token = $client->oauth('http://localhost/prismclient/test.php');
//echo '<pre>';
//print_r($token);
//$token = $client->logout('http://localhost/prismclient/test.php');
//$token = $client->checkSession($token);
//var_dump($token);



//测试新版Oauth
//require_once('src/prism.php');
//$key = 'tnmo7css';
//if(!$_GET['code'])
//{
//    $redirect = 'http://localhost:8080/oauth/authorize?client_id='.$key.'&redirect_uri='.'http://localhost/prismclient/test.php';
//    header('Location:'.$redirect);
//}else{
//    $client = new Prism('http://localhost:8080', 'tnmo7css', 'nn36c6mklyhk6paeclh4');
//    $result = $client->post('/oauth/token',array('code'=>$_GET['code'], 'grant_type'=>'authorization_code'));
//    echo '<pre>';
//    print_r($result);
//}

//测试新版Oauth_session_check
///api/platform/oauth/session_check
//require_once('src/prism.php');
//$key = 'tnmo7css';
//if(!$_GET['code'])
//{
//    $redirect = 'http://localhost:8080/oauth/authorize?client_id='.$key.'&redirect_uri='.'http://localhost/prismclient/test.php';
//    header('Location:'.$redirect);
//}else{
//    $client = new Prism('http://localhost:8080', 'tnmo7css', 'nn36c6mklyhk6paeclh4');
//    $result = $client->post('/oauth/token',array('code'=>$_GET['code'], 'grant_type'=>'authorization_code'));
//    $result = json_decode($result,true);
//    $result = $client->post('/api/platform/oauth/session_check',array('session_id'=>$result['session_id'].'ss'));
//    echo '<pre>';
//    print_r($result);
//}

////新版测试notify-publish
//require_once('src/prism.php');
//$client = new Prism('http://localhost:8080/api', 'tnmo7css', 'nn36c6mklyhk6paeclh4');
//$client->connectNotify();
//echo $client->publish('create_order', json_encode(array('order_id'=>'11')));

////新版测试notify
//require_once('src/prism.php');
//$client = new Prism('http://localhost:8080/api', 'tnmo7css', 'nn36c6mklyhk6paeclh4');
//$client = new Prism($url = 'http://192.168.51.50:8080/api', $key = 'pufy2a7d', $secret = 'skqovukpk2nmdrljphgj');
//$client->connectNotify();
//$data = $client->consume();
//print_r($data);
//$client->ack(1);
//echo $client->publish('q1', json_encode(array('order_id'=>'11')));



////测试notify
//try{
//    require_once('client.php');
//    require_once('notify.php');
//    $client = new prism_client('http://localhost:8080', 'tnmo7css', 'nn36c6mklyhk6paeclh4');
//    //$notify = $client->notify();
//    $notify = new prism_notify($client);
//    $i=0;
//    for($i=1;$i<100;$i++)
//    {
//        $info = json_encode(
//            array(
//                'class' => 'b2c_order_create',
//                'data'  => array(
//                    'order_id' => '111'.$i,
//                )
//            )
//        );
//        $notify->pub('order.pub',$info);
//        echo 'send '.$i."\n";
//    }
//}
//catch(Exception $e)
//{
//    $msg = $e->getMessage();
//    print_r($msg);
//}
