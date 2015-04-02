# prism消息队列(Notify)
- [publish](#notify-publish)
- [consume](#notify-consume)

<a name="notify-publish"></a>
## publish 队列加入
```
$client = new Prism($url = 'http://prism_host/api', $key = 'pufy2a7d', $secret = 'skqovukpk2nmdrljphgj');
//第一个参数，'q1'为队列的routing_key，需要在prism端绑定相应的routing_key和访问prism的身份key
//第二个参数为数据，仅支持字符串
$r = $client->publish('q1', 'this is some message:' . $count);
```

<a name="notify-consume"></a>
## consume 队列消费
注意：队列执行完成后，调用ack方法，否则不会从队列中清除该任务。
```
$client = new PrismClient($url = 'http://prism_host/api', $key = 'pufy2a7d', $secret = 'skqovukpk2nmdrljphgj');
//访问队列，获取数据
$r = $client->consume();
$r = json_decode($r);

//这里对获取到的数据进行处理
//body为上面publish传入的字符串数据
echo "$r->body\n";
//处理完成后执行ack，表示处理成功，队列中的数据会删除
$client->ack($r->tag);
```


