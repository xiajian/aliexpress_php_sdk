<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiFindLoanListQueryParam {

        
        /**
    * @return 当前页码.。
    */
        public function getPage() {
        $tempResult = $this->sdkStdResult["page"];
        return $tempResult;
    }
    
    /**
     * 设置当前页码.。     
     * @param Integer $page     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPage( $page) {
        $this->sdkStdResult["page"] = $page;
    }
    
        
        /**
    * @return 每页个数，最大50。
    */
        public function getPageSize() {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置每页个数，最大50。     
     * @param Integer $pageSize     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPageSize( $pageSize) {
        $this->sdkStdResult["pageSize"] = $pageSize;
    }
    
        
        /**
    * @return 放款时间起始值，格式: mm/dd/yyyy hh:mm:ss,如10/08/2013 00:00:00
    */
        public function getCreateDateStart() {
        $tempResult = $this->sdkStdResult["createDateStart"];
        return $tempResult;
    }
    
    /**
     * 设置放款时间起始值，格式: mm/dd/yyyy hh:mm:ss,如10/08/2013 00:00:00     
     * @param String $createDateStart     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCreateDateStart( $createDateStart) {
        $this->sdkStdResult["createDateStart"] = $createDateStart;
    }
    
        
        /**
    * @return 放款时间截止值，格式: mm/dd/yyyy hh:mm:ss,如10/09/2013 00:00:00
    */
        public function getCreateDateEnd() {
        $tempResult = $this->sdkStdResult["createDateEnd"];
        return $tempResult;
    }
    
    /**
     * 设置放款时间截止值，格式: mm/dd/yyyy hh:mm:ss,如10/09/2013 00:00:00     
     * @param String $createDateEnd     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCreateDateEnd( $createDateEnd) {
        $this->sdkStdResult["createDateEnd"] = $createDateEnd;
    }
    
        
        /**
    * @return 订单放款状态：wait_loan 未放款，loan_ok已放款。
    */
        public function getLoanStatus() {
        $tempResult = $this->sdkStdResult["loanStatus"];
        return $tempResult;
    }
    
    /**
     * 设置订单放款状态：wait_loan 未放款，loan_ok已放款。     
     * @param String $loanStatus     
     * 参数示例：<pre>wait_loan</pre>     
     * 此参数必填     */
    public function setLoanStatus( $loanStatus) {
        $this->sdkStdResult["loanStatus"] = $loanStatus;
    }
    
        
        /**
    * @return 主订单id，一次只能查询一个
    */
        public function getOrderId() {
        $tempResult = $this->sdkStdResult["orderId"];
        return $tempResult;
    }
    
    /**
     * 设置主订单id，一次只能查询一个     
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