<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiUploadImageParam {

        
        /**
    * @return 上传文件原名(针对图片文件显示名称”字节数（256字节以内） 限制。
)
    */
        public function getFileName() {
        $tempResult = $this->sdkStdResult["fileName"];
        return $tempResult;
    }
    
    /**
     * 设置上传文件原名(针对图片文件显示名称”字节数（256字节以内） 限制。
)     
     * @param String $fileName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFileName( $fileName) {
        $this->sdkStdResult["fileName"] = $fileName;
    }
    
        
        /**
    * @return 图片保存的图片组，groupId为空，则图片保存在Other组中。
    */
        public function getGroupId() {
        $tempResult = $this->sdkStdResult["groupId"];
        return $tempResult;
    }
    
    /**
     * 设置图片保存的图片组，groupId为空，则图片保存在Other组中。     
     * @param String $groupId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGroupId( $groupId) {
        $this->sdkStdResult["groupId"] = $groupId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>