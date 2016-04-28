<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiEditSingleSkuPriceParam {

        
        /**
    * @return 需修改编辑的商品ID
    */
        public function getProductId() {
        $tempResult = $this->sdkStdResult["productId"];
        return $tempResult;
    }
    
    /**
     * 设置需修改编辑的商品ID     
     * @param Long $productId     
     * 参数示例：<pre>123456789</pre>     
     * 此参数必填     */
    public function setProductId( $productId) {
        $this->sdkStdResult["productId"] = $productId;
    }
    
        
        /**
    * @return 需修改编辑的商品单个SKUID。SKU ID可以通过api.findAeProductById接口中的aeopAeproductSKUs获取单个产品信息中"id"进行获取。 没有SKU属性的商品SKUID回传“<none>”
    */
        public function getSkuId() {
        $tempResult = $this->sdkStdResult["skuId"];
        return $tempResult;
    }
    
    /**
     * 设置需修改编辑的商品单个SKUID。SKU ID可以通过api.findAeProductById接口中的aeopAeproductSKUs获取单个产品信息中"id"进行获取。 没有SKU属性的商品SKUID回传“<none>”     
     * @param String $skuId     
     * 参数示例：<pre>14:771;5:100014066</pre>     
     * 此参数必填     */
    public function setSkuId( $skuId) {
        $this->sdkStdResult["skuId"] = $skuId;
    }
    
        
        /**
    * @return 修改编辑后的商品价格
    */
        public function getSkuPrice() {
        $tempResult = $this->sdkStdResult["skuPrice"];
        return $tempResult;
    }
    
    /**
     * 设置修改编辑后的商品价格     
     * @param String $skuPrice     
     * 参数示例：<pre>999</pre>     
     * 此参数必填     */
    public function setSkuPrice( $skuPrice) {
        $this->sdkStdResult["skuPrice"] = $skuPrice;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>