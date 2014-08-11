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

