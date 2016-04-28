<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiQueryAccountLevelParam {

        
        /**
    * @return 买家账号ID
    */
        public function getLoginId() {
        $tempResult = $this->sdkStdResult["loginId"];
        return $tempResult;
    }
    
    /**
     * 设置买家账号ID     
     * @param String $loginId     
     * 参数示例：<pre>jordenmail</pre>     
     * 此参数必填     */
    public function setLoginId( $loginId) {
        $this->sdkStdResult["loginId"] = $loginId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>