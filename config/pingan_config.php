<?php
/**
 * Created by PhpStorm.
 * User: wangsl
 * Date: 2018/4/17
 * Time: 15:19
 */

return [
	//状态参照
	'status'=>'{"1":{"code":"0","result":"\u6b63\u5e38","messagge":"\u65e0"},"2":{"code":"1","result":"\u5f02\u5e38","messagge":"\u7cfb\u7edf\u5f02\u5e38"},"3":{"code":"2","result":"\u5f02\u5e38","messagge":"\u8bf7\u6c42\u62a5\u6587\u89e3\u6790\u5f02\u5e38"},"4":{"code":"3","result":"\u5f02\u5e38","messagge":"\u54cd\u5e94\u62a5\u6587\u7ec4\u7ec7\u5f02\u5e38"},"5":{"code":"21","result":"\u5f02\u5e38","messagge":"\u6e20\u9053\u5f02\u5e38"},"6":{"code":"22","result":"\u5f02\u5e38","messagge":"\u4ea7\u54c1\u5f02\u5e38"},"7":{"code":"23","result":"\u5f02\u5e38","messagge":"\u6ca1\u6709\u9500\u552e\u6743\u9650"},"8":{"code":"24","result":"\u5f02\u5e38","messagge":"\u53c2\u6570\u5f02\u5e38"},"9":{"code":"25","result":"\u5f02\u5e38","messagge":"\u6ca1\u6709\u7eed\u4fdd\u6743\u9650"},"10":{"code":"31","result":"\u5f02\u5e38","messagge":"\u4fdd\u8d39\u8ba1\u7b97\u5931\u8d25"},"11":{"code":"32","result":"\u5f02\u5e38","messagge":"\u6838\u4fdd\u5931\u8d25"},"12":{"code":"33","result":"\u5f02\u5e38","messagge":"\u627f\u4fdd\u5931\u8d25"},"13":{"code":"3301","result":"\u5f02\u5e38","messagge":"\u5355\u6b63\u5728\u627f\u4fdd\uff0c\u8bf7\u7a0d\u540e\u518d\u8bd5"},"14":{"code":"3302","result":"\u5f02\u5e38","messagge":"\u7cfb\u7edf\u7ef4\u62a4\u4e2d\uff0c\u8bf7\u7a0d\u540e\u91cd\u8bd5"},"15":{"code":"34","result":"\u5f02\u5e38","messagge":"\u4fdd\u5355\u67e5\u8be2\u5931\u8d25"},"16":{"code":"35","result":"\u5f02\u5e38","messagge":"\u4fdd\u5355\u64a4\u4ef6\u5931\u8d25"},"17":{"code":"36","result":"\u5f02\u5e38","messagge":"\u7535\u5b50\u4fdd\u5355\u4e0b\u8f7d\u5931\u8d25"},"18":{"code":"37","result":"\u5f02\u5e38","messagge":"\u53d1\u7968\u6b63\u5728\u751f\u6210\u4e2d\uff0c\u8bf7\u7a0d\u540e\u518d\u8bd5"},"19":{"code":"38","result":"\u5f02\u5e38","messagge":"\u67e5\u8be2\u8d8a\u6743"},"20":{"code":"39","result":"\u5f02\u5e38","messagge":"\u4fdd\u5355\u5df2\u7eed\u4fdd"},"21":{"code":"40","result":"\u5f02\u5e38","messagge":"\u4fdd\u5355\u5df2\u652f\u4ed8"},"22":{"code":"41","result":"\u5f02\u5e38","messagge":"\u4fdd\u8d39\u5f02\u5e38"},"23":{"code":"42","result":"\u5f02\u5e38","messagge":"\u8ba2\u5355\u672a\u652f\u4ed8"},"24":{"code":"43","result":"\u5f02\u5e38","messagge":"\u5065\u5eb7\u544a\u77e5\u4e22\u5931"},"25":{"code":"45","result":"\u5f02\u5e38","messagge":"\u7eed\u4fdd\u6e20\u9053\u67e5\u8be2\u5931\u8d25"},"26":{"code":"46","result":"\u5f02\u5e38","messagge":"\u7eed\u4fdd\u4fdd\u5355\u53f7\u67e5\u8be2\u5931\u8d25"},"27":{"code":"47","result":"\u5f02\u5e38","messagge":"\u65e0\u6cd5\u63d0\u5347\u4fdd\u989d"},"28":{"code":"34","result":"\u5f02\u5e38","messagge":"\u4fdd\u5355\u67e5\u8be2\u5931\u8d25"},"29":{"code":"\u5176\u5b83","result":"\u5f02\u5e38","messagge":"\u5f02\u5e38\u8bf4\u660e"}} ',
	//投保人关系
	'relation_policy'=>'{"1":{"code":"1","message":"\u4e3b\u88ab\u4fdd\u9669\u4eba"},"2":{"code":"2","message":"\u914d\u5076"},"3":{"code":"3","message":"\u5b50\u5973"},"4":{"code":"4","message":"\u7236\u6bcd"},"5":{"code":"6","message":"\u5176\u4ed6"}}',
	//被保人关系
	'relation_holder'=>'{"1":{"code":"1","message":"\u672c\u4eba"},"2":{"code":"2","message":"\u914d\u5076"},"3":{"code":"9","message":"\u5176\u4ed6"},"4":{"code":"I","message":"\u7236\u6bcd"},"5":{"code":"J","message":"\u5b50\u5973"}}',
	//证件类型
	'id_type'=>'{"1":{"code":"1","message":"\u8eab\u4efd\u8bc1"},"2":{"code":"2","message":"\u62a4\u7167"},"3":{"code":"3","message":"\u519b\u4eba\u8bc1"},"4":{"code":"4","message":"\u5c11\u513f\u8bc1"},"5":{"code":"6","message":"\u6e2f\u6fb3\u53f0\u56de\u4e61\u8bc1"},"6":{"code":"7","message":"\u9a7e\u9a76\u8bc1"},"7":{"code":"A","message":"\u51fa\u751f\u8bc1"},"8":{"code":"L","message":"\u6237\u53e3\u672c"}}',
	//缴别
	'prem_type'=>'{"1":{"code":"1","message":"\u8db8\u7f34"},"2":{"code":"2","message":"\u6708\u7f34"},"3":{"code":"3","message":"\u5b63\u7f34"},"4":{"code":"4","message":"\u534a\u5e74\u7f34"},"5":{"code":"5","message":"\u5e74\u7f34"},"6":{"code":"6","message":"\u8db8\u7f34\u7d2f\u52a0"}}',
	//性别
	'sex'=>'{"1":{"code":"M","message":"\u7537"},"2":{"code":"F","message":"\u5973"},"3":{"code":"9","message":"\u672a\u77e5"}}',
	//保单类型
	'warranty_type'=>'{"1":{"code":"P","message":"\u4e2a\u5355"},"2":{"code":"G","message":"\u56e2\u5355"}}',
	//首次缴费方式
	'first_pay_way'=>'{"1":{"code":"1","message":"\u81ea\u7f34\/\u81ea\u9886"},"2":{"code":"2","message":"\u4eba\u5de5\u6536\/\u4ed8"},"3":{"code":"3","message":"\u94f6\u884c\u6536\/\u4ed8"},"4":{"code":"4","message":"\u4eba\u5de5\u8865\u6536\u4ed8"},"5":{"code":"5","message":"\u94f6\u884c\u8f6c\u5e10"},"6":{"code":"9","message":"\u5176\u4ed6"}}',
	//常住地
	'address_now'=>'{"1":{"code":"H050000","message":"\u6df1\u5733\u5e02\u533a\u672c\u90e8"},"2":{"code":"H030000","message":"\u5929\u6d25\u5e02\u533a\u672c\u90e8"},"3":{"code":"H060000","message":"\u6c88\u9633\u5e02\u533a\u672c\u90e8"},"4":{"code":"H010000","message":"\u5317\u4eac\u5e02\u533a\u672c\u90e8"},"5":{"code":"H020000","message":"\u4e0a\u6d77\u5e02\u533a\u672c\u90e8"},"6":{"code":"H040000","message":"\u5e7f\u5dde\u5e02\u533a\u672c\u90e8"},"7":{"code":"H100000","message":"\u5357\u4eac\u5e02\u533a\u672c\u90e8"},"8":{"code":"H120000","message":"\u676d\u5dde\u5e02\u533a\u672c\u90e8"},"9":{"code":"H260000","message":"\u6210\u90fd\u5e02\u533a\u672c\u90e8"}}',
	//支付渠道
	'pay_channel'=>'{"1":{"code":"\u5fae\u4fe1","message":"WX"},"2":{"code":"\u652f\u4ed8\u5b9d","message":"ZFB"},"3":{"code":"\u58f9\u94b1\u5305","message":"YQB"},"4":{"code":"\u5e73\u5b89\u4ed8","message":"YQB"},"5":{"code":"\u65fa\u8d22","message":"WC"}}',
	//银行代码
	'bank_code'=>'{"1":{"code":"99060102","message":"\u5fae\u4fe1"},"2":{"code":"99029000","message":"\u5feb\u94b1"},"3":{"code":"99033102","message":"\u652f\u4ed8\u5b9d"},"4":{"code":"99058501","message":"\u5e73\u5b89\u4ed8(\u5065\u5eb7\u9669\u6536\u8d39-PC\u7aef)"},"5":{"code":"99058503","message":"\u5e73\u5b89\u4ed8(\u5065\u5eb7\u9669\u9000\u8d39-PC\u7aef)"},"6":{"code":"99027602","message":"\u5e73\u5b89\u4ed8(\u5065\u5eb7\u9669\u6536\u8d39-APP\u7aef)"}}',
	//职业类型
	'job_type'=>'{"1":{"code":"A","message":"\u519c\u3001\u6797\u3001\u7267\u3001\u6e14\u4e1a"},"2":{"code":"B","message":"\u91c7\u77ff\u4e1a"},"3":{"code":"C","message":"\u5236\u9020\u4e1a"},"4":{"code":"D","message":"\u7535\u529b\u3001\u71c3\u6c14\u53ca\u6c34\u7684\u751f\u4ea7\u4f9b\u5e94\u4e1a"},"5":{"code":"E","message":"\u5efa\u7b51\u4e1a"},"6":{"code":"F","message":"\u4ea4\u901a\u8fd0\u8f93\u3001\u4ed3\u50a8\u548c\u90ae\u653f\u4e1a"},"7":{"code":"G","message":"\u4fe1\u606f\u4f20\u8f93\u3001\u8ba1\u7b97\u673a\u670d\u52a1\u548c\u8f6f\u4ef6\u4e1a"},"8":{"code":"H","message":"\u6279\u53d1\u548c\u96f6\u552e\u4e1a"},"9":{"code":"I","message":"\u4f4f\u5bbf\u548c\u9910\u996e\u4e1a"},"10":{"code":"J","message":"\u91d1\u878d\u4e1a"},"11":{"code":"K","message":"\u623f\u5730\u4ea7\u4e1a"},"12":{"code":"L","message":"\u79df\u8d41\u548c\u5546\u52a1\u670d\u52a1\u4e1a"},"13":{"code":"M","message":"\u79d1\u5b66\u7814\u7a76\u3001\u6280\u672f\u670d\u52a1\u548c\u5730\u8d28\u52d8\u67e5\u4e1a"},"14":{"code":"N","message":"\u6c34\u5229\u3001\u73af\u5883\u548c\u516c\u5171\u8bbe\u65bd\u7ba1\u7406\u4e1a"},"15":{"code":"O","message":"\u5c45\u6c11\u670d\u52a1\u548c\u5176\u4ed6\u670d\u52a1\u4e1a"},"16":{"code":"P","message":"\u6559\u80b2"},"17":{"code":"Q","message":"\u536b\u751f\u3001\u793e\u4f1a\u4fdd\u969c\u548c\u793e\u4f1a\u798f\u5229\u4e1a"},"18":{"code":"R","message":"\u6587\u5316\u3001\u4f53\u80b2\u548c\u5a31\u4e50\u4e1a"},"19":{"code":"S","message":"\u516c\u5171\u7ba1\u7406\u548c\u793e\u4f1a\u7ec4\u7ec7"},"20":{"code":"T","message":"\u56fd\u9645\u7ec4\u7ec7"},"21":{"code":"U","message":"\u5176\u4ed6"}}',
	//社保所在地
	'social_security_location'=>'{"1":{"code":"H050000","message":"\u6df1\u5733\u5e02\u533a\u672c\u90e8"},"2":{"code":"H030000","message":"\u5929\u6d25\u5e02\u533a\u672c\u90e8"},"3":{"code":"H060000","message":"\u6c88\u9633\u5e02\u533a\u672c\u90e8"},"4":{"code":"H010000","message":"\u5317\u4eac\u5e02\u533a\u672c\u90e8"},"5":{"code":"H020000","message":"\u4e0a\u6d77\u5e02\u533a\u672c\u90e8"},"6":{"code":"H040000","message":"\u5e7f\u5dde\u5e02\u533a\u672c\u90e8"},"7":{"code":"H100000","message":"\u5357\u4eac\u5e02\u533a\u672c\u90e8"},"8":{"code":"H120000","message":"\u676d\u5dde\u5e02\u533a\u672c\u90e8"},"9":{"code":"H260000","message":"\u6210\u90fd\u5e02\u533a\u672c\u90e8"}}',
	//省份代码
	'provices_code'=>'{"1":{"code":"340000","message":"\u5b89\u5fbd\u7701"},"2":{"code":"110000","message":"\u5317\u4eac\u5e02"},"3":{"code":"500000","message":"\u91cd\u5e86\u5e02"},"4":{"code":"350000","message":"\u798f\u5efa\u7701"},"5":{"code":"620000","message":"\u7518\u8083\u7701"},"6":{"code":"440000","message":"\u5e7f\u4e1c\u7701"},"7":{"code":"450000","message":"\u5e7f\u897f\u58ee\u65cf\u81ea\u6cbb\u533a"},"8":{"code":"520000","message":"\u8d35\u5dde\u7701"},"9":{"code":"460000","message":"\u6d77\u5357\u7701"},"10":{"code":"130000","message":"\u6cb3\u5317\u7701"},"11":{"code":"410000","message":"\u6cb3\u5357\u7701"},"12":{"code":"230000","message":"\u9ed1\u9f99\u6c5f\u7701"},"13":{"code":"420000","message":"\u6e56\u5317\u7701"},"14":{"code":"430000","message":"\u6e56\u5357\u7701"},"15":{"code":"320000","message":"\u6c5f\u82cf\u7701"},"16":{"code":"360000","message":"\u6c5f\u897f\u7701"},"17":{"code":"220000","message":"\u5409\u6797\u7701"},"18":{"code":"210000","message":"\u8fbd\u5b81\u7701"},"19":{"code":"150000","message":"\u5185\u8499\u53e4\u81ea\u6cbb\u533a"},"20":{"code":"640000","message":"\u5b81\u590f\u56de\u65cf\u81ea\u6cbb\u533a"},"21":{"code":"630000","message":"\u9752\u6d77\u7701"},"22":{"code":"370000","message":"\u5c71\u4e1c\u7701"},"23":{"code":"140000","message":"\u5c71\u897f\u7701"},"24":{"code":"610000","message":"\u9655\u897f\u7701"},"25":{"code":"310000","message":"\u4e0a\u6d77\u5e02"},"26":{"code":"510000","message":"\u56db\u5ddd\u7701"},"27":{"code":"120000","message":"\u5929\u6d25\u5e02"},"28":{"code":"540000","message":"\u897f\u85cf\u81ea\u6cbb\u533a"},"29":{"code":"650000","message":"\u65b0\u7586\u7ef4\u543e\u5c14\u81ea\u6cbb\u533a"},"30":{"code":"530000","message":"\u4e91\u5357\u7701"},"31":{"code":"330000","message":"\u6d59\u6c5f\u7701"},"32":{"code":"710000","message":"\u53f0\u6e7e\u7701"},"33":{"code":"810000","message":"\u9999\u6e2f\u7279\u522b\u884c\u653f\u533a"},"34":{"code":"820000","message":"\u6fb3\u95e8\u7279\u522b\u884c\u653f\u533a"},"35":{"code":"999999","message":"\u6d77\u5916"}}',
	//保单状态
	'warranty_status'=>'{"1":{"code":"I","message":"\u7f34\u8d39\u6709\u6548"},"2":{"code":"M","message":"\u5230\u671f\u7ec8\u6b62"},"3":{"code":"N","message":"\u5951\u64a4"},"4":{"code":"P","message":"\u7f34\u6e05"},"5":{"code":"S","message":"\u9000\u4fdd"},"6":{"code":"W","message":"\u64a4\u4ef6"},"7":{"code":"X","message":"\u8d23\u4efb\u7ec8\u6b62"}}',
];