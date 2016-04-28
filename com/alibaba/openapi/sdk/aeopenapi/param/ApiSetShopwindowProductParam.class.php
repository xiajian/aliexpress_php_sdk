<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiSetShopwindowProductParam {

        
        /**
    * @return 待设置橱窗的商品id，可输入多个，之前用半角分号分割。
    */
        public function getProductIdList() {
        $tempResult = $this->sdkStdResult["productIdList"];
        return $tempResult;
    }
    
    /**
     * 设置待设置橱窗的商品id，可输入多个，之前用半角分号分割。     
     * @param String $productIdList     
     * 参数示例：<pre>1351344486;1351344487</pre>     
     * 此参数必填     */
    public function setProductIdList( $productIdList) {
        $this->sdkStdResult["productIdList"] = $productIdList;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>