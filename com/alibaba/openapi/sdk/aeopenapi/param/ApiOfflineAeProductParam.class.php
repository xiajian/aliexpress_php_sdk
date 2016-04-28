<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiOfflineAeProductParam {

        
        /**
    * @return 需要下架的产品id。多个产品ID用英文分号隔开。
    */
        public function getProductIds() {
        $tempResult = $this->sdkStdResult["productIds"];
        return $tempResult;
    }
    
    /**
     * 设置需要下架的产品id。多个产品ID用英文分号隔开。     
     * @param String $productIds     
     * 参数示例：<pre>109827;109828</pre>     
     * 此参数必填     */
    public function setProductIds( $productIds) {
        $this->sdkStdResult["productIds"] = $productIds;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>