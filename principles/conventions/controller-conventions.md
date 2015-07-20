控制器类及文件命名规则



控制器的类名采用下划线命名法, 并且只允许小写字母

- 控制器类名: {$app_name}_ctl_{$dir_1}/{$dir_n}_{$filename}
- 控制器存放目录: app/{$app_name}/controller/{$dir_1}/{$dir_2} 
- 控制器文件名: {$filename}.php
- 完整的控制器文件名: app/{$app_name}/controller/{$dir_1}/{$dir_2}/{$filename}.php
- 控制器所在app: {$app_name}

看起来很晕吧, 来几个例子解脱一下

例1:
'''
控制器类名: b2c_ctl_site_brand
控制器存放目录: app/b2c/controller/site
控制器文件名: brand.php
完整的控制器文件名: app/b2c/controller/site/brand.php
控制器所在app: b2c
'''

例2:
'''
控制器类名: b2c_ctl_admin_goods_cat
控制器存放目录: app/b2c/controller/admin/goods
控制器文件名: brand.php
完整的控制器文件名: app/b2c/controller/admin/goods/cat.php
控制器所在app: b2c
'''

例3:
'''
控制器类名: desktop_ctl_adminpanel
控制器存放目录: app/desktop/controller
控制器文件名: adminpanel.php
完整的控制器文件名: app/desktop/controller/adminpanel.php
控制器所在app: desktop
'''
