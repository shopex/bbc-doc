# ONEX B2B2C 商城API文档

## 交易相关API

### 获取单笔交易信息(trade.get)

* 系统参数

| *字段* | *标题* | *数据类型* | *验证条件* | *示例值* | *默认值* | *详细说明* |
| ------------- | ------------- | ------------- | ------------- | ------------- | ------------- | ------------- |
| method | API的方法名 | string | required | trade.get | null | 标识请求的是哪个API |
| timestamp | 请求时间 | unix时间戳 | required , numeric , > time()-300 | 1440596821 | null | 标识API请求的发起时间，如果超时300秒则拒绝请求 |
| format | 返回数据格式 | string | required | json | json | 返回数据是json格式的，目前只支持json |
| v | 版本号 | string | required | v1 | null | 标识该接口的版本 |
| sign_type | 签名方式 | string | required | MD5 | null | 标识签名算法 |
| sign | 签名 | string | required | AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA | null | 数据签名，32位长度16进制数字 |


* 业务参数

| *字段* | *标题* | *数据类型* | *验证条件* | *示例值* | *默认值* | *详细说明* |
| ------------- | ------------- | ------------- | ------------- | ------------- | ------------- | ------------- |
| tid |  | int | required |  |  | 订单编号 |
| oid |  | int |  |  |  | 子订单编号，返回指定子订单编号的orders数据结构 |
| fields |  | field_list | required | *,orders.* |  | 获取单个订单需要返回的字段 |


*返回内容示例

```

{ "error": null, "result": { "adjust_fee": "0.000", "anony": 0, "area_id": null, "buyer_area": "310100/310104", "buyer_message": null, "buyer_rate": 0, "cancel_reason": null, "consign_time": null, "consume_point_fee": 0, "created_time": 1.437969586e+09, "disabled": 0, "discount_fee": "0.000", "dlytmpl_id": 4, "end_time": null, "invoice_main": "", "invoice_name": "individual", "invoice_type": "normal", "ip": "192.168.51.222", "is_clearing": 0, "is_part_consign": 0, "itemnum": 1, "modified_time": 1.437969586e+09, "need_invoice": 0, "obtain_point_fee": 2699, "orders": [ { "adjust_fee": "0.000", "aftersales_status": null, "anony": 0, "bind_oid": null, "bn": "apple06", "buyer_rate": "1", "cat_service_rate": "0.050", "complaints_status": "NOT_COMPLAINTS", "consign_time": null, "discount_fee": "0.000", "divide_order_fee": "0.000", "end_time": null, "invoice_no": null, "is_oversold": 0, "item_id": 32, "logistics_company": null, "modified_time": 1.437969586e+09, "num": 1, "oid": 1.507271159060001e+15, "order_from": "pc", "outer_iid": null, "outer_sku_id": null, "part_mjz_discount": "0.000", "pay_time": null, "payment": "2699.000", "pic_path": "http://images.bbc.shopex123.com/images/b4/d1/e4/5cc4933975c136479d26c05650b9372113f85cc2.png", "price": "2699.000", "refund_fee": "0.000", "refund_id": null, "seller_rate": 0, "sendnum": 0, "shipping_type": null, "shop_id": 1, "sku_id": 31, "sku_properties_name": null, "spec_nature_info": null, "status": "WAIT_BUYER_PAY", "sub_stock": 0, "tid": 1.507271159050001e+15, "timeout_action_time": null, "title": "Apple iPad Air MD788CH 9.7英寸平板电脑 （16G WLAN 机型）银色", "total_fee": "2699.000", "user_id": 1 } ], "pay_time": null, "pay_type": "online", "payed_fee": "0.000", "payment": "2700.000", "post_fee": "1.000", "real_point_fee": null, "receiver_address": "桂林路396", "receiver_city": "徐汇区", "receiver_district": null, "receiver_mobile": "13612344321", "receiver_name": "卢女士", "receiver_phone": null, "receiver_state": "上海市", "receiver_zip": "200233", "seller_rate": 0, "send_time": null, "shipping_type": null, "shop_flag": null, "shop_id": 1, "shop_memo": null, "status": "WAIT_BUYER_PAY", "step_paid_fee": null, "step_trade_status": null, "tid": 1.507271159050001e+15, "timeout_action_time": null, "title": "订单明细介绍", "total_fee": "2699.000", "trade_from": "pc", "trade_memo": "", "user_id": 1 } }

```

