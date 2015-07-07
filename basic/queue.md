# bbc队列消耗配置和使用

- [swoole安装] (# install)
- [bbc swoole 执行 queue 的使用] (# install)
- [设置] (# 设置)

## swoole安装
[参照swoole官方文档](http://wiki.swoole.com/wiki/page/6.html)

## 基本原则
* 推送消息$params要做到尽量减小体积，在使用某些mq时，不容易发生硬盘数据交换
* adapter中，逻辑要做到“谁干活谁推送”，即数据推送(生产者)和消费者为同一app
* 一个队列中，只能放同一个app的worker，当数据量较大时，应该一个队列中只放一个类型的worker，且这个worker应该与queu属于同一个app

## 设置
配置文件位于：

    config/queue.php

## 配置参数

### default

这里配置队列将采用哪种方式，选项如下：

    //mysql方式的模拟队列
    'default'=>'system_queue_adapter_mysql',
    //由prism接管队列，目前兼容rabbitmq和kafka
    'default'=>'system_queue_prism_queue_prism',

### default_publish_queue

> 这个配置将会被废弃
>
> 新的推送方式不会再兼容这个配置，如果没有配置worker属于哪个队列，将不会推送到默认队列中

这里配置的是默认推送的队列（当且仅当在使用旧的推送方式时，worker不支持时，会推送到这个队列中）

    'default_publish_queue' => 'normal',


### bindings

> 这个配置将会被废弃
>
> 新的消息推送方式，将不会使用这个配置

这个配置是使用publish()方法推送消息时，判断worker和队列的绑定、分发关系的，publish方法会根据这个绑定关系，自动推送到相应队列中.

    'bindings' => array(
        'worker_class'                 => array('queue1', 'queue2'),
        'importexport_tasks_runexport' => array('slow'),
        'importexport_tasks_runimport' => array('slow'),
        ),


### worker

这个配置是注册worker的，所有需要使用的worker需要在这里注册

'title'简要说明队列；
'queue'这个worker对应的队列，理想状态是与队列一对一的，但是为了兼容当数据量小时，启用多个队列无意义，所以兼容多对一的模式;
'class'这个worker对应的类名；

    'worker' => array(
        'importexport.runexport' => array(
            'title' => '执行数据导出任务',
            'queue' => 'importexport.normal',
            'class' => 'importexport_tasks_runexport'
            ),
        ),

### queue

这个配置是注册队列的，所有队列需要在这里注册，

    'queue' => array(
        'importexport.normal' => array(
            'title' => '导入导出app的普通队列',
            'thread' => 3,//启动多少进程处理该队列的工作
            ),
        ),

### action

这里定义了一个事件与多个worker的绑定关系，如果想使用事件推送，需要在这里做设置

    'action' => array(
        'winning' => array('sendSMS', 'sendEmail');
        ),

## 推送

以后采用新的推送方式：

    queue::push($worker, $params);

    //example
    queue::push('sendSMS', array('tel'=>'18888888888', 'content'=>'幸运用户您好，你中奖了！'));

批量推送的方法：

    queue::bulk($workers, $params);

    //example
    queue::bulk(array('sendSMS', 'sendEmail'), array('tel'=>'18888888888', 'email'=>'888888@qq.com', 'content'=>'幸运用户您好，你中奖了！'));


目前支持事件方式推送

    queue::action($action, $params);

    //example
    queue::action('winning', array('tel'=>'18888888888', 'email'=>'888888@qq.com', 'content'=>'幸运用户您好，你中奖了！'));

## 使用

在服务器上执行一下命令

    cd b2b2c && ./script/queueserver/queue.sh
