<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiGetOnlineLogisticsServiceListByOrderIdParam {

        
        /**
    * @return 交易订单ID
    */
        public function getOrderId() {
        $tempResult = $this->sdkStdResult["orderId"];
        return $tempResult;
    }
    
    /**
     * 设置交易订单ID     
     * @param Long $orderId     
     * 参数示例：<pre>30003660495804</pre>     
     * 此参数必填     */
    public function setOrderId( $orderId) {
        $this->sdkStdResult["orderId"] = $orderId;
    }
    
        
        /**
    * @return 包裹重量
    */
        public function getGoodsWeight() {
        $tempResult = $this->sdkStdResult["goodsWeight"];
        return $tempResult;
    }
    
    /**
     * 设置包裹重量     
     * @param Double $goodsWeight     
     * 参数示例：<pre>1.50</pre>     
     * 此参数必填     */
    public function setGoodsWeight( $goodsWeight) {
        $this->sdkStdResult["goodsWeight"] = $goodsWeight;
    }
    
        
        /**
    * @return 包裹长
    */
        public function getGoodsLength() {
        $tempResult = $this->sdkStdResult["goodsLength"];
        return $tempResult;
    }
    
    /**
     * 设置包裹长     
     * @param Integer $goodsLength     
     * 参数示例：<pre>11</pre>     
     * 此参数必填     */
    public function setGoodsLength( $goodsLength) {
        $this->sdkStdResult["goodsLength"] = $goodsLength;
    }
    
        
        /**
    * @return 包裹宽
    */
        public function getGoodsWidth() {
        $tempResult = $this->sdkStdResult["goodsWidth"];
        return $tempResult;
    }
    
    /**
     * 设置包裹宽     
     * @param Integer $goodsWidth     
     * 参数示例：<pre>20</pre>     
     * 此参数必填     */
    public function setGoodsWidth( $goodsWidth) {
        $this->sdkStdResult["goodsWidth"] = $goodsWidth;
    }
    
        
        /**
    * @return 包裹高
    */
        public function getGoodsHeight() {
        $tempResult = $this->sdkStdResult["goodsHeight"];
        return $tempResult;
    }
    
    /**
     * 设置包裹高     
     * @param Integer $goodsHeight     
     * 参数示例：<pre>25</pre>     
     * 此参数必填     */
    public function setGoodsHeight( $goodsHeight) {
        $this->sdkStdResult["goodsHeight"] = $goodsHeight;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>