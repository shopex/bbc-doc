控制器类及文件命名规则



控制器的类名采用下划线命名法, 并且只允许小写字母

- 控制器类名: `{$app_name}_ctl_{$dir_1}/{$dir_n}_{$filename}`
- 控制器存放目录: `app/{$app_name}/controller/{$dir_1}/{$dir_2} `
- 控制器文件名: `{$filename}.php`
- 完整的控制器文件名: `app/{$app_name}/controller/{$dir_1}/{$dir_2}/{$filename}.php`
- 控制器所在app: `{$app_name}`

看起来很晕吧, 来几个例子解脱一下

例1:

控制器类名: `topc_ctl_member_trade`

控制器存放目录: `app/topc/controller/member`

控制器文件名: `brand.php`

完整的控制器文件名: `app/topc/controller/brand.php`

控制器所在app: `topc`


例2:

控制器类名: `syscontent_ctl_admin_article`

控制器存放目录: `app/syscontent/controller/admin`

控制器文件名: `article.php`

完整的控制器文件名: `app/syscontent/controller/admin/article.php`

控制器所在app: `syscontent`


例3:

控制器类名: `desktop_ctl_adminpanel`

控制器存放目录: `app/desktop/controller`

控制器文件名: `adminpanel.php`

完整的控制器文件名: `app/desktop/controller/adminpanel.php`

控制器所在app: `desktop`

