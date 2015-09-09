# api标准数据结构

$apis[$1][$2][$3][$4][$5]

## $1
  $1表示api的分组，取api的method_id，以'.'切分，取第一个数组

## $2
  $2表示api的method_id，即在apis.php配置文件中数组的key。

## $3
  $3表示api的项目分类，暂定为以下内容：
    - version  表示api的版本（为多个字符串的数组，表示支持的版本号）
    - params 表示拍的参数
    - return 表示返回的数据
    - description 表示api的作用

## $4
  $4表示$3中各项的明细，不一定存在
    - version
      * $4不存在，格式是这样的：$api[$1][$2]['version']=['v1','v2'];
    - params
      * $4为参数名
    - return
      * xml xml类型的返回值示例
      * json json类型的返回值示例
    - description
      * $4不存在 格式是这样的：$api[$1][$2]['description']='根据订单号获取订单详情'

## $5
  $5 当且仅当$3为params时出现，表示param的数据结构
    - name string 字段名
    - required bool 是否必填
    - type string 数据类型，现在是string、bool、int等，以后会变为类似"required|email|unique:users"的表单验证内容
    - example string 示例数据
    - default string 默认值
    - description string 该参数的说明

