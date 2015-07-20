API类及文件命名规则

API的类名采用下划线命名法

- API类名: {$app_name}_api_{$dir_1}/{$dir_n}_{$filename}
- API存放目录: app/{$app_name}/api/{$dir_1}/{$dir_2} 
- API文件名: {$filename}.php
- 完整的API文件名: app/{$app_name}/api/{$dir_1}/{$dir_2}/{$filename}.php
- API所在app: {$app_name}

看起来很晕吧, 来几个例子解脱一下

例1:

API类名: sysitem_api_item_get

API存放目录: app/sysitem/api/item

API文件名: get.php

完整的API文件名: app/sysitem/api/get.php

API所在app: sysitem
