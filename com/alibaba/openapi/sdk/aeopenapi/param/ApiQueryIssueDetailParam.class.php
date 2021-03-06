<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiQueryIssueDetailParam {

        
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
     * 参数示例：<pre>60740200006352</pre>     
     * 此参数必填     */
    public function setIssueId( $issueId) {
        $this->sdkStdResult["issueId"] = $issueId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>