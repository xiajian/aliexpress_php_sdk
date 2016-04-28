<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiSellerRefuseIssueParam {

        
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
    * @return 退款类型（full_amount_refund(全额退款)/part_amount_refund(部分退款)/no_amount_refund(不退款)
    */
        public function getRefundType() {
        $tempResult = $this->sdkStdResult["refundType"];
        return $tempResult;
    }
    
    /**
     * 设置退款类型（full_amount_refund(全额退款)/part_amount_refund(部分退款)/no_amount_refund(不退款)     
     * @param String $refundType     
     * 参数示例：<pre>full_amount_refund</pre>     
     * 此参数必填     */
    public function setRefundType( $refundType) {
        $this->sdkStdResult["refundType"] = $refundType;
    }
    
        
        /**
    * @return 是否退货（Y/N）
    */
        public function getIsReturnGoods() {
        $tempResult = $this->sdkStdResult["isReturnGoods"];
        return $tempResult;
    }
    
    /**
     * 设置是否退货（Y/N）     
     * @param String $isReturnGoods     
     * 参数示例：<pre>Y</pre>     
     * 此参数必填     */
    public function setIsReturnGoods( $isReturnGoods) {
        $this->sdkStdResult["isReturnGoods"] = $isReturnGoods;
    }
    
        
        /**
    * @return 退款金额（单位：元，保修两位小数，币种：USD）
    */
        public function getRefundAmount() {
        $tempResult = $this->sdkStdResult["refundAmount"];
        return $tempResult;
    }
    
    /**
     * 设置退款金额（单位：元，保修两位小数，币种：USD）     
     * @param String $refundAmount     
     * 参数示例：<pre>0.58</pre>     
     * 此参数必填     */
    public function setRefundAmount( $refundAmount) {
        $this->sdkStdResult["refundAmount"] = $refundAmount;
    }
    
        
        /**
    * @return 拒绝买家纠纷方案的原因描述
    */
        public function getContent() {
        $tempResult = $this->sdkStdResult["content"];
        return $tempResult;
    }
    
    /**
     * 设置拒绝买家纠纷方案的原因描述     
     * @param String $content     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setContent( $content) {
        $this->sdkStdResult["content"] = $content;
    }
    
        
        /**
    * @return 图片附件
    */
        public function getAttachments() {
        $tempResult = $this->sdkStdResult["attachments"];
        return $tempResult;
    }
    
    /**
     * 设置图片附件     
     * @param String $attachments     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAttachments( $attachments) {
        $this->sdkStdResult["attachments"] = $attachments;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>