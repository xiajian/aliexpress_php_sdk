<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiQueryPromiseTemplateByIdParam {

        
        /**
    * @return 输入服务模板编号。注：输入为-1时，获取所有服务模板列表。
    */
        public function getTemplateId() {
        $tempResult = $this->sdkStdResult["templateId"];
        return $tempResult;
    }
    
    /**
     * 设置输入服务模板编号。注：输入为-1时，获取所有服务模板列表。     
     * @param Long $templateId     
     * 参数示例：<pre>-1</pre>     
     * 此参数必填     */
    public function setTemplateId( $templateId) {
        $this->sdkStdResult["templateId"] = $templateId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>