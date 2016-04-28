<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiGetOnlineLogisticsInfoParam {

        
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
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderId( $orderId) {
        $this->sdkStdResult["orderId"] = $orderId;
    }
    
        
        /**
    * @return 国际运单号
    */
        public function getInternationalLogisticsId() {
        $tempResult = $this->sdkStdResult["internationalLogisticsId"];
        return $tempResult;
    }
    
    /**
     * 设置国际运单号     
     * @param String $internationalLogisticsId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setInternationalLogisticsId( $internationalLogisticsId) {
        $this->sdkStdResult["internationalLogisticsId"] = $internationalLogisticsId;
    }
    
        
        /**
    * @return 国内快递运单号
    */
        public function getChinaLogisticsId() {
        $tempResult = $this->sdkStdResult["chinaLogisticsId"];
        return $tempResult;
    }
    
    /**
     * 设置国内快递运单号     
     * @param String $chinaLogisticsId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setChinaLogisticsId( $chinaLogisticsId) {
        $this->sdkStdResult["chinaLogisticsId"] = $chinaLogisticsId;
    }
    
        
        /**
    * @return 物流订单状态
    */
        public function getLogisticsStatus() {
        $tempResult = $this->sdkStdResult["logisticsStatus"];
        return $tempResult;
    }
    
    /**
     * 设置物流订单状态     
     * @param String $logisticsStatus     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setLogisticsStatus( $logisticsStatus) {
        $this->sdkStdResult["logisticsStatus"] = $logisticsStatus;
    }
    
        
        /**
    * @return 开始时间
    */
        public function getGmtCreateStartStr() {
        $tempResult = $this->sdkStdResult["gmtCreateStartStr"];
        return $tempResult;
    }
    
    /**
     * 设置开始时间     
     * @param String $gmtCreateStartStr     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtCreateStartStr( $gmtCreateStartStr) {
        $this->sdkStdResult["gmtCreateStartStr"] = $gmtCreateStartStr;
    }
    
        
        /**
    * @return 结束时间
    */
        public function getGmtCreateEndStr() {
        $tempResult = $this->sdkStdResult["gmtCreateEndStr"];
        return $tempResult;
    }
    
    /**
     * 设置结束时间     
     * @param String $gmtCreateEndStr     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtCreateEndStr( $gmtCreateEndStr) {
        $this->sdkStdResult["gmtCreateEndStr"] = $gmtCreateEndStr;
    }
    
        
        /**
    * @return 当前页面
    */
        public function getCurrentPage() {
        $tempResult = $this->sdkStdResult["currentPage"];
        return $tempResult;
    }
    
    /**
     * 设置当前页面     
     * @param Integer $currentPage     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCurrentPage( $currentPage) {
        $this->sdkStdResult["currentPage"] = $currentPage;
    }
    
        
        /**
    * @return 页面大小
    */
        public function getPageSize() {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置页面大小     
     * @param Integer $pageSize     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPageSize( $pageSize) {
        $this->sdkStdResult["pageSize"] = $pageSize;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>