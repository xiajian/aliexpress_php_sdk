<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiQueryProductViewedInfoEverydayByIdParam {

        
        /**
    * @return 商品id。
    */
        public function getProductId() {
        $tempResult = $this->sdkStdResult["productId"];
        return $tempResult;
    }
    
    /**
     * 设置商品id。     
     * @param String $productId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductId( $productId) {
        $this->sdkStdResult["productId"] = $productId;
    }
    
        
        /**
    * @return 查询时间段的开始时间。例如：yyyy-mm-dd
    */
        public function getStartDate() {
        $tempResult = $this->sdkStdResult["startDate"];
        return $tempResult;
    }
    
    /**
     * 设置查询时间段的开始时间。例如：yyyy-mm-dd     
     * @param String $startDate     
     * 参数示例：<pre>2014-01-22</pre>     
     * 此参数必填     */
    public function setStartDate( $startDate) {
        $this->sdkStdResult["startDate"] = $startDate;
    }
    
        
        /**
    * @return 查询时间段的截止时间。例如：yyyy-mm-dd
    */
        public function getEndDate() {
        $tempResult = $this->sdkStdResult["endDate"];
        return $tempResult;
    }
    
    /**
     * 设置查询时间段的截止时间。例如：yyyy-mm-dd     
     * @param String $endDate     
     * 参数示例：<pre>2014-01-22</pre>     
     * 此参数必填     */
    public function setEndDate( $endDate) {
        $this->sdkStdResult["endDate"] = $endDate;
    }
    
        
        /**
    * @return 当前页码。
    */
        public function getCurrentPage() {
        $tempResult = $this->sdkStdResult["currentPage"];
        return $tempResult;
    }
    
    /**
     * 设置当前页码。     
     * @param Integer $currentPage     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCurrentPage( $currentPage) {
        $this->sdkStdResult["currentPage"] = $currentPage;
    }
    
        
        /**
    * @return 每页结果数量，默认20个，最大值 50
    */
        public function getPageSize() {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置每页结果数量，默认20个，最大值 50     
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