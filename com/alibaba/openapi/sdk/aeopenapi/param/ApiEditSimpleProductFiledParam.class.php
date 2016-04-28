<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiEditSimpleProductFiledParam {

        
        /**
    * @return 指定编辑产品的id
    */
        public function getProductId() {
        $tempResult = $this->sdkStdResult["productId"];
        return $tempResult;
    }
    
    /**
     * 设置指定编辑产品的id     
     * @param Long $productId     
     * 参数示例：<pre>id=1234</pre>     
     * 此参数必填     */
    public function setProductId( $productId) {
        $this->sdkStdResult["productId"] = $productId;
    }
    
        
        /**
    * @return 编辑的字段名称，为以下字段内容里的其中一项,
可以编辑的字段包括:
subject: 商品的标题;
Detail: 商品的详细描述信息；
deliveryTime: 备货期；
groupId: 产品组；
freightTemplateId: 运费模版；
packageLength: 商品包装长度；
packageWidth: 商品包装宽度；
packageHeight：商品包装高度；
grossWeight: 商品毛重；
wsValidNum商品的有效天数（注意：该字段的提交修改，数据生效时间：商品（到期或手动）下架再上架生效。”）;
reduceStrategy: 库存扣减策略(总共有2种：下单减库存(place_order_withhold)和支付减库存(payment_success_deduct)。)
    */
        public function getFiedName() {
        $tempResult = $this->sdkStdResult["fiedName"];
        return $tempResult;
    }
    
    /**
     * 设置编辑的字段名称，为以下字段内容里的其中一项,
可以编辑的字段包括:
subject: 商品的标题;
Detail: 商品的详细描述信息；
deliveryTime: 备货期；
groupId: 产品组；
freightTemplateId: 运费模版；
packageLength: 商品包装长度；
packageWidth: 商品包装宽度；
packageHeight：商品包装高度；
grossWeight: 商品毛重；
wsValidNum商品的有效天数（注意：该字段的提交修改，数据生效时间：商品（到期或手动）下架再上架生效。”）;
reduceStrategy: 库存扣减策略(总共有2种：下单减库存(place_order_withhold)和支付减库存(payment_success_deduct)。)     
     * @param String $fiedName     
     * 参数示例：<pre>deliveryTime</pre>     
     * 此参数必填     */
    public function setFiedName( $fiedName) {
        $this->sdkStdResult["fiedName"] = $fiedName;
    }
    
        
        /**
    * @return 指定编辑产品字段值,上述字段编辑后发提交值。
    */
        public function getFiedvalue() {
        $tempResult = $this->sdkStdResult["fiedvalue"];
        return $tempResult;
    }
    
    /**
     * 设置指定编辑产品字段值,上述字段编辑后发提交值。     
     * @param String $fiedvalue     
     * 参数示例：<pre>30</pre>     
     * 此参数必填     */
    public function setFiedvalue( $fiedvalue) {
        $this->sdkStdResult["fiedvalue"] = $fiedvalue;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>