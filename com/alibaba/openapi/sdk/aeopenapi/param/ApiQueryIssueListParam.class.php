<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiQueryIssueListParam {

        
        /**
    * @return 订单ID
    */
        public function getOrderNo() {
        $tempResult = $this->sdkStdResult["orderNo"];
        return $tempResult;
    }
    
    /**
     * 设置订单ID     
     * @param Long $orderNo     
     * 参数示例：<pre>1234567890</pre>     
     * 此参数必填     */
    public function setOrderNo( $orderNo) {
        $this->sdkStdResult["orderNo"] = $orderNo;
    }
    
        
        /**
    * @return 买家名称
    */
        public function getBuyerName() {
        $tempResult = $this->sdkStdResult["buyerName"];
        return $tempResult;
    }
    
    /**
     * 设置买家名称     
     * @param String $buyerName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerName( $buyerName) {
        $this->sdkStdResult["buyerName"] = $buyerName;
    }
    
        
        /**
    * @return 纠纷状态：WAIT_SELLER_CONFIRM_REFUND 买家提起纠纷,SELLER_REFUSE_REFUND 卖家拒绝纠,ACCEPTISSUE 卖家接受纠纷,WAIT_BUYER_SEND_GOODS 等待买家发货,WAIT_SELLER_RECEIVE_GOODS 买家发货，等待卖家收货,ARBITRATING 仲裁中,SELLER_RESPONSE_ISSUE_TIMEOUT 卖家响应纠纷超时
    */
        public function getIssueStatus() {
        $tempResult = $this->sdkStdResult["issueStatus"];
        return $tempResult;
    }
    
    /**
     * 设置纠纷状态：WAIT_SELLER_CONFIRM_REFUND 买家提起纠纷,SELLER_REFUSE_REFUND 卖家拒绝纠,ACCEPTISSUE 卖家接受纠纷,WAIT_BUYER_SEND_GOODS 等待买家发货,WAIT_SELLER_RECEIVE_GOODS 买家发货，等待卖家收货,ARBITRATING 仲裁中,SELLER_RESPONSE_ISSUE_TIMEOUT 卖家响应纠纷超时     
     * @param String $issueStatus     
     * 参数示例：<pre>WAIT_SELLER_CONFIRM_REFUND</pre>     
     * 此参数必填     */
    public function setIssueStatus( $issueStatus) {
        $this->sdkStdResult["issueStatus"] = $issueStatus;
    }
    
        
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
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>