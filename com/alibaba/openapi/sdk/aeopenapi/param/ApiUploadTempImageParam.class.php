<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiUploadTempImageParam {

        
        /**
    * @return 图片原名
    */
        public function getSrcFileName() {
        $tempResult = $this->sdkStdResult["srcFileName"];
        return $tempResult;
    }
    
    /**
     * 设置图片原名     
     * @param String $srcFileName     
     * 参数示例：<pre>1.jpg</pre>     
     * 此参数必填     */
    public function setSrcFileName( $srcFileName) {
        $this->sdkStdResult["srcFileName"] = $srcFileName;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>