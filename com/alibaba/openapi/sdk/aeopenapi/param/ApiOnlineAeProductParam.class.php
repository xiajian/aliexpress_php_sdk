<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiOnlineAeProductParam {

        
        /**
    * @return 需要上架的产品id列表。可输入多个，之前用半角分号分割。
    */
        public function getProductIds() {
        $tempResult = $this->sdkStdResult["productIds"];
        return $tempResult;
    }
    
    /**
     * 设置需要上架的产品id列表。可输入多个，之前用半角分号分割。     
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