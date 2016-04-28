<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiUploadIssueImageParam {

        
        /**
    * @return 图片扩展名
    */
        public function getExtension() {
        $tempResult = $this->sdkStdResult["extension"];
        return $tempResult;
    }
    
    /**
     * 设置图片扩展名     
     * @param String $extension     
     * 参数示例：<pre>32141243325234313.jpg</pre>     
     * 此参数必填     */
    public function setExtension( $extension) {
        $this->sdkStdResult["extension"] = $extension;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>