<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiSetSizeChartParam {

        
        /**
    * @return 商品Id
    */
        public function getProductId() {
        $tempResult = $this->sdkStdResult["productId"];
        return $tempResult;
    }
    
    /**
     * 设置商品Id     
     * @param Long $productId     
     * 参数示例：<pre>4363434343</pre>     
     * 此参数必填     */
    public function setProductId( $productId) {
        $this->sdkStdResult["productId"] = $productId;
    }
    
        
        /**
    * @return 尺码表模版Id, 必须与当前商品所在类目想对应。
    */
        public function getSizechartId() {
        $tempResult = $this->sdkStdResult["sizechartId"];
        return $tempResult;
    }
    
    /**
     * 设置尺码表模版Id, 必须与当前商品所在类目想对应。     
     * @param Long $sizechartId     
     * 参数示例：<pre>544113</pre>     
     * 此参数必填     */
    public function setSizechartId( $sizechartId) {
        $this->sdkStdResult["sizechartId"] = $sizechartId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>