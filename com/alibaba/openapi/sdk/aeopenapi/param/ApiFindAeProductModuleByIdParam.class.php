<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiFindAeProductModuleByIdParam {

        
        /**
    * @return moduleId 对应商品详情中的kse标签中的id属性;如: id="1004"
    */
        public function getModuleId() {
        $tempResult = $this->sdkStdResult["moduleId"];
        return $tempResult;
    }
    
    /**
     * 设置moduleId 对应商品详情中的kse标签中的id属性;如: id="1004"     
     * @param Long $moduleId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setModuleId( $moduleId) {
        $this->sdkStdResult["moduleId"] = $moduleId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>