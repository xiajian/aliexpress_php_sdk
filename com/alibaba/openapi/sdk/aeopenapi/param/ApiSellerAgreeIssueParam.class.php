<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiSellerAgreeIssueParam {

        
        /**
    * @return 纠纷ID
    */
        public function getIssueId() {
        $tempResult = $this->sdkStdResult["issueId"];
        return $tempResult;
    }
    
    /**
     * 设置纠纷ID     
     * @param Long $issueId     
     * 参数示例：<pre>60573020065804</pre>     
     * 此参数必填     */
    public function setIssueId( $issueId) {
        $this->sdkStdResult["issueId"] = $issueId;
    }
    
        
        /**
    * @return 是否退货，需要先查询纠纷详情接口，得到买家资金方案中的isReceivedGoods
    */
        public function getIsReturnGoods() {
        $tempResult = $this->sdkStdResult["isReturnGoods"];
        return $tempResult;
    }
    
    /**
     * 设置是否退货，需要先查询纠纷详情接口，得到买家资金方案中的isReceivedGoods     
     * @param Boolean $isReturnGoods     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setIsReturnGoods( $isReturnGoods) {
        $this->sdkStdResult["isReturnGoods"] = $isReturnGoods;
    }
    
        
        /**
    * @return 退款金额（单位：分），需要先查询纠纷详情接口，得到买家资金方案中的issueMoney中的cent
    */
        public function getRefundAmount() {
        $tempResult = $this->sdkStdResult["refundAmount"];
        return $tempResult;
    }
    
    /**
     * 设置退款金额（单位：分），需要先查询纠纷详情接口，得到买家资金方案中的issueMoney中的cent     
     * @param Long $refundAmount     
     * 参数示例：<pre>3000</pre>     
     * 此参数必填     */
    public function setRefundAmount( $refundAmount) {
        $this->sdkStdResult["refundAmount"] = $refundAmount;
    }
    
        
        /**
    * @return 币种，需要先查询纠纷详情接口，得到买家资金方案中的issueMoney中的币种
    */
        public function getRefundCurrency() {
        $tempResult = $this->sdkStdResult["refundCurrency"];
        return $tempResult;
    }
    
    /**
     * 设置币种，需要先查询纠纷详情接口，得到买家资金方案中的issueMoney中的币种     
     * @param String $refundCurrency     
     * 参数示例：<pre>USD、RUB</pre>     
     * 此参数必填     */
    public function setRefundCurrency( $refundCurrency) {
        $this->sdkStdResult["refundCurrency"] = $refundCurrency;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>