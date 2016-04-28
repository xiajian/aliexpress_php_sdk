<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiDelUnUsePhotoParam {

        
        /**
    * @return 图片ID(通过“图片银行列表分页查询”接口进行获取，出参中“ iid:图片”为图片ID。
    */
        public function getImageRepositoryId() {
        $tempResult = $this->sdkStdResult["imageRepositoryId"];
        return $tempResult;
    }
    
    /**
     * 设置图片ID(通过“图片银行列表分页查询”接口进行获取，出参中“ iid:图片”为图片ID。     
     * @param Long $imageRepositoryId     
     * 参数示例：<pre>100403959</pre>     
     * 此参数必填     */
    public function setImageRepositoryId( $imageRepositoryId) {
        $this->sdkStdResult["imageRepositoryId"] = $imageRepositoryId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>