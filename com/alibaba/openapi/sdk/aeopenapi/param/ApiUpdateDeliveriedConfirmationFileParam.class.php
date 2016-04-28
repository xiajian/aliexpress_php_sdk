<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiUpdateDeliveriedConfirmationFileParam {

        
        /**
    * @return 
    */
        public function getInput() {
        $tempResult = $this->sdkStdResult["input"];
        return $tempResult;
    }
    
    /**
     * 设置     
     * @param array include @see Byte[] $input     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setInput( $input) {
        $this->sdkStdResult["input"] = $input;
    }
    
        
        /**
    * @return 图片原名，上传证明文件，支持jpg和png格式，大小不超过2MB。
    */
        public function getFilename() {
        $tempResult = $this->sdkStdResult["filename"];
        return $tempResult;
    }
    
    /**
     * 设置图片原名，上传证明文件，支持jpg和png格式，大小不超过2MB。     
     * @param String $filename     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFilename( $filename) {
        $this->sdkStdResult["filename"] = $filename;
    }
    
        
        /**
    * @return 订单ID
    */
        public function getOrderId() {
        $tempResult = $this->sdkStdResult["orderId"];
        return $tempResult;
    }
    
    /**
     * 设置订单ID     
     * @param Long $orderId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderId( $orderId) {
        $this->sdkStdResult["orderId"] = $orderId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>