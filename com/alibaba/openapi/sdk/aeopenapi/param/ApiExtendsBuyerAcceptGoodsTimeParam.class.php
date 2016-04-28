<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiExtendsBuyerAcceptGoodsTimeParam {

        
        /**
    * @return 需要延长的订单ID。
    */
        public function getOrderId() {
        $tempResult = $this->sdkStdResult["orderId"];
        return $tempResult;
    }
    
    /**
     * 设置需要延长的订单ID。     
     * @param Long $orderId     
     * 参数示例：<pre>1234567890</pre>     
     * 此参数必填     */
    public function setOrderId( $orderId) {
        $this->sdkStdResult["orderId"] = $orderId;
    }
    
        
        /**
    * @return 请求延长的具体天数。
    */
        public function getDay() {
        $tempResult = $this->sdkStdResult["day"];
        return $tempResult;
    }
    
    /**
     * 设置请求延长的具体天数。     
     * @param Integer $day     
     * 参数示例：<pre>30</pre>     
     * 此参数必填     */
    public function setDay( $day) {
        $this->sdkStdResult["day"] = $day;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>