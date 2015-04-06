<?php
require_once('src/prism.php');
$client = new Prism('http://localhost:8080', 'yowunuce', 'oiponjo4abowvhxsdr5h');
$params = array(
    'url' => 'http://127.0.0.1/pdkprwzd.json'
);
echo $client->post('/api/platform/service/import',$params);


