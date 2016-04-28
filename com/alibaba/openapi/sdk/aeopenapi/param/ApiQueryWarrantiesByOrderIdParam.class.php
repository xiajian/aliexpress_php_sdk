<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiQueryWarrantiesByOrderIdParam {

        
        /**
    * @return 订单号
    */
        public function getOrderId() {
        $tempResult = $this->sdkStdResult["orderId"];
        return $tempResult;
    }
    
    /**
     * 设置订单号     
     * @param Long $orderId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderId( $orderId) {
        $this->sdkStdResult["orderId"] = $orderId;
    }
    
        
        /**
    * @return 供应商id
    */
        public function getSupplierId() {
        $tempResult = $this->sdkStdResult["supplierId"];
        return $tempResult;
    }
    
    /**
     * 设置供应商id     
     * @param String $supplierId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSupplierId( $supplierId) {
        $this->sdkStdResult["supplierId"] = $supplierId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>