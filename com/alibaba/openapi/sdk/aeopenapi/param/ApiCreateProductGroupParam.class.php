<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiCreateProductGroupParam {

        
        /**
    * @return 分组的名称, 请控制在1～50个英文字符之内。
    */
        public function getName() {
        $tempResult = $this->sdkStdResult["name"];
        return $tempResult;
    }
    
    /**
     * 设置分组的名称, 请控制在1～50个英文字符之内。     
     * @param String $name     
     * 参数示例：<pre>foo</pre>     
     * 此参数必填     */
    public function setName( $name) {
        $this->sdkStdResult["name"] = $name;
    }
    
        
        /**
    * @return 父分组的ID。如果为0则表示创建根分组，否则创建指定分组下的二级分组。
    */
        public function getParentId() {
        $tempResult = $this->sdkStdResult["parentId"];
        return $tempResult;
    }
    
    /**
     * 设置父分组的ID。如果为0则表示创建根分组，否则创建指定分组下的二级分组。     
     * @param Long $parentId     
     * 参数示例：<pre>0或者100</pre>     
     * 此参数必填     */
    public function setParentId( $parentId) {
        $this->sdkStdResult["parentId"] = $parentId;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>