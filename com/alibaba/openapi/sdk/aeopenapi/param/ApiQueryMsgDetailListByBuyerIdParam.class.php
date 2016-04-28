<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiQueryMsgDetailListByBuyerIdParam {

        
        /**
    * @return 当前页数
    */
        public function getCurrentPage() {
        $tempResult = $this->sdkStdResult["currentPage"];
        return $tempResult;
    }
    
    /**
     * 设置当前页数     
     * @param Integer $currentPage     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setCurrentPage( $currentPage) {
        $this->sdkStdResult["currentPage"] = $currentPage;
    }
    
        
        /**
    * @return 每页条数
    */
        public function getPageSize() {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置每页条数     
     * @param Integer $pageSize     
     * 参数示例：<pre>10(pageSize取值范围(0~100) 最多返回前5000条数据)</pre>     
     * 此参数必填     */
    public function setPageSize( $pageSize) {
        $this->sdkStdResult["pageSize"] = $pageSize;
    }
    
        
        /**
    * @return 买家loginId
    */
        public function getBuyerId() {
        $tempResult = $this->sdkStdResult["buyerId"];
        return $tempResult;
    }
    
    /**
     * 设置买家loginId     
     * @param String $buyerId     
     * 参数示例：<pre>us23344</pre>     
     * 此参数必填     */
    public function setBuyerId( $buyerId) {
        $this->sdkStdResult["buyerId"] = $buyerId;
    }
    
        
        /**
    * @return 卖家loginId(与买家建立关系的账号，即信息所属账号)
    */
        public function getSellerId() {
        $tempResult = $this->sdkStdResult["sellerId"];
        return $tempResult;
    }
    
    /**
     * 设置卖家loginId(与买家建立关系的账号，即信息所属账号)     
     * @param String $sellerId     
     * 参数示例：<pre>cn4444</pre>     
     * 此参数必填     */
    public function setSellerId( $sellerId) {
        $this->sdkStdResult["sellerId"] = $sellerId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>