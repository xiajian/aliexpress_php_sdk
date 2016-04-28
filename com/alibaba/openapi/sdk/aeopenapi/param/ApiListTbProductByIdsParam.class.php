<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiListTbProductByIdsParam {

        
        /**
    * @return ae 产品id列表，用逗号分隔，最大不能超过100个id
    */
        public function getProductIds() {
        $tempResult = $this->sdkStdResult["productIds"];
        return $tempResult;
    }
    
    /**
     * 设置ae 产品id列表，用逗号分隔，最大不能超过100个id     
     * @param String $productIds     
     * 参数示例：<pre></pre>     
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