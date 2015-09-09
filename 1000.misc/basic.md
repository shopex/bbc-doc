# 基本介绍

## 配置

在LuckyMall的配置文件的`shop.php`文件中配置商家管理管理中心的菜单
在商家管理中心的所有控制器都需要在此定义，可以自定义配置是否需要显示在前台

    'trade' => array(
        'lable' => '交易管理', //导航栏显示标题名称
        'display' => true, //是否显示
        'menu' => array(
          array(
            'lable'=>'订单管理', //左边栏显示标题
            'diaplay'=>true, //是否显示
            'app'=>'topshop',
            'ctl'=>'order',
            'act'=>'index'
            ),
          array('lable'=>'退款管理','diaplay'=>true,'app'=>'topshop','ctl'=>'refund','act'=>'index'),
          ),
    ),


## 商家管理中心router介绍
router和ECStore后台一致

## 商家管理中心controller介绍

    /**
     * @brief 商家中心页面加载，默认包含商家中心头、尾、导航、和左边栏
     *
     * @param string $view  html路径
     * @param bool   $small 是否需要包含导航和左边栏,false只包含头和尾
     * @param stirng $app   html路径所在app
     *
     * @return html
     */
    public function page($view, $small=false, $app='topshop')
    {
    }

## object组件使用说明

    object 参数列表
        return_url                            //选填 此参数和callback配合使用返回值处理链接（控制器 ）
        callback                              //选填 此参数和return_url配合使用返回值处理  js函数
        breakpoint                            //选填 当数据少于此值时 显示下拉框
        limitmax                              //选填 选择数据的最大数量
        view                                  //选填 扩展内容的页面
        extendvalue                           //当有扩展页面并且有输入值时，必填 当编辑时，扩展里面需要赋值时通过此参数传值
        data['init']                          //选填 js函数
        textcol                               //选填 当select为checkbox时必填  选择那些字段显示
        name                                  //必填 名称
        value                                 //选填 当编辑是必填 选中的值
        emptytext                             //选填  为空时显示的内容
      * type="object"                         //必填
      * object="表名"                         //必填 格式为 mdl名或者mdl@appname
      * select="radio or checkbox"            //选填  默认为radio
        multiple="true"                       //当select为checkbox时，必填
        filter=array() or string              //表的查询条件 选填
        app="appname"                         //选填  不填时  object的写法有变，如：goods@b2c

    <{input type="Object" name="testobject" object="specification" multiple="true" select="checkbox" value=$value}>

## 邮件短信发送调用说明
    发送邮件短信分为直接发送和队列发送

    直接发送调用方式
        messenger::sendEmail($sendTo,$tmpl,$content); //直接发送邮件
        messenger::sendSms($to,$tmpl,$content); //直接发送短信

    队列发送调用方式
        messenger::send($sendTo,$tmpl,$content)  //通过队列发送邮件短信

    传送的参数说明
        $sendTo: 邮件或短信的收信方，邮件短信一起发送时，此参数是数组，如：
           array(
            'sms' => ""; 电话号码用逗号隔开的字符集或数组
            'email' => "";邮箱地址用逗号隔开的字符集或数组
           );
        $tmpl: 需要发送的短信邮件的模板名称，如：account-signup(手机注册短信验证)
        $content:类型-array、发送的内容、对象等等，如：
        $content = array('name','goods_name','user_name','password',...),  //邮件或短信中需要包含的信息(变量的值)

        邮件短信发送已经写了初始的测试用例，具体用法可参照使用

        扩展发送项 以及 模板方法
        在config/messenger.php文件中，在messenger的数组中增加需要的项，如：
            msg=array(
            'label' => '站内信',
              'display' => true,
              'iconclass' => 'sysiconBtn msg',
              'name_show' => '发站内信',
             'version' => '$ver$',
              'updateUrl' => '',
              'isHtml' => true,
              'hasTitle' => true,
              'maxtime' => 300,
              'maxbodylength' => 300,
              'allowMultiTarget' => false,
              'targetSplit' => ',',
              'dataname' => 'msg',
              'debug' => false,
              'class' => 'system_messenger_msg',  //发送的具体函数类
            ),
        在config/messenger.php文件中，在actions的数组中增加需要的模板，如：
            create-order=array(
             'label' => '创建订单',
              'email' => 'true',
              'sms' => 'true',
              'sendType' => 'notice',
              'varmap' => '订单号<{$order_id}> 收货地址<{$receiver_address}>',
              'view' =>'',  //模板html文件地址
            ),


## pagers组件使用说明
    pagers 参数
        data=array(
            'link'=>url::action('topc_ctl_list@index',$filter),    //翻页链接
            'current'=>$current,      //起始页码  number
            'total'=>$total,          //总页码   number
            'token'=>$filter['pages'],  //随机数  赋值为time()
        );必填
        type='mini'; 选填

    html页面调用方式
    <{pagers data=$pages}>

    注意：具体使用请仔细查看 topc_ctl_list@index

## 会员中心左侧标签嵌套右侧页面方法
    $this->action_view  //此参数的作用是html页面文件名
    最终输出页面情调用 $this->output();
    新增左侧菜单标签方法：
        config/usermenu.php

        array(
          'label' => '新的标签名称',
          'items' => array(
              array('label' => '新的子标签名称','action'=>'topc_ctl_member@tradeList'),
        ),


 17     ),

