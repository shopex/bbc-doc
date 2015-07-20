# prism方式连通


## 调用请求
通过请求prism的api接口即可
请求方式请参照prism-sdk使用方式

## soa请求

统一的api请求方法，所有的内部请求api都经过这里执行
```
/***
 *
 * 请求API的统一入口
 * @param string method 方法名,api的key
 * @param array parameters 请求api的参数，每个api请参考api的业务需求
 * @param array identity 用户信息
 *
 * @return array 返回api的信息
 *
 */
public function rpcCall($method, $parameters = array(),$identity)

//调用方法
$res = app::get('topc')->rpcCall($method, $params, $identity);
```

$res即为返回参数，格式为array。


## 系统参数
系统预留6个参数，这6个参数，在每个api请求中必须带有
<table style="width:100%;text-align:center">
<tbody>
<tr style="background:#eee">
<th>参数名</th>
<th>是否必填</th>
<th>数据类型</th>
<th>示例数据</th>
<th>默认值</th>
<th>描述</th>
</tr>
</tbody>
<tbody>
<tr>
<td>method</td>
<td>true</td>
<td>string</td>
<td>trade.get</td>
<td></td>
<td>api的唯一标识符</td>
</tr>
<tr style="background:#f1f7fb">
<td>sign</td>
<td>true</td>
<td>string</td>
<td>a9d5e10ae5e9455448329fb6215f6dc9</td>
<td></td>
<td>签名，详细请查看签名方法</td>
</tr>
<tr>
<td>sign_type</td>
<td>true</td>
<td>string</td>
<td>MD5</td>
<td></td>
<td>签名方式，目前只支持MD5</td>
</tr>
<tr style="background:#f1f7fb">
<td>timestamp</td>
<td>true</td>
<td>int</td>
<td>1430130595</td>
<td></td>
<td>签名方式，目前只支持MD5</td>
</tr>
<tr>
<td>format</td>
<td>true</td>
<td>string</td>
<td>json</td>
<td></td>
<td>返回数据方式，目前支持json和xml方式，当本参数失效或者签名失败，返回json格式</td>
</tr>
<tr style="background:#f1f7fb">
<td>v</td>
<td>true</td>
<td>string</td>
<td>1.0</td>
<td></td>
<td>签名方式，目前只支持MD5</td>
</tr>
</tbody>
</table>


