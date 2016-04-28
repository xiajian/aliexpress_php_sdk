<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiSellerSubmitArbiParam {

        
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
    * @return 纠纷原因(有两个值，一个是noMatchDesc（货不对版），另外一个是notReceived（未收到货）
    */
        public function getReason() {
        $tempResult = $this->sdkStdResult["reason"];
        return $tempResult;
    }
    
    /**
     * 设置纠纷原因(有两个值，一个是noMatchDesc（货不对版），另外一个是notReceived（未收到货）     
     * @param String $reason     
     * 参数示例：<pre>noMatchDesc</pre>     
     * 此参数必填     */
    public function setReason( $reason) {
        $this->sdkStdResult["reason"] = $reason;
    }
    
        
        /**
    * @return 卖家提交仲裁描述
    */
        public function getContent() {
        $tempResult = $this->sdkStdResult["content"];
        return $tempResult;
    }
    
    /**
     * 设置卖家提交仲裁描述     
     * @param String $content     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setContent( $content) {
        $this->sdkStdResult["content"] = $content;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>