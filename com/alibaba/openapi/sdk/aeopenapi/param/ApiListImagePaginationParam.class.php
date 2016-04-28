<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiListImagePaginationParam {

        
        /**
    * @return 图片存放位置.可选值:ALL_GROUP(所有分组), TEMP(被禁用的图片), SUB_GROUP(某一分组), UNGROUP(非分组). 
如果locationType参数值为ALL_GROUP,TEMP,UNGROUP时，将忽略groupId参数。
如果locationType的参数值为SUB_GROUP,须指定groupId参数。
    */
        public function getLocationType() {
        $tempResult = $this->sdkStdResult["locationType"];
        return $tempResult;
    }
    
    /**
     * 设置图片存放位置.可选值:ALL_GROUP(所有分组), TEMP(被禁用的图片), SUB_GROUP(某一分组), UNGROUP(非分组). 
如果locationType参数值为ALL_GROUP,TEMP,UNGROUP时，将忽略groupId参数。
如果locationType的参数值为SUB_GROUP,须指定groupId参数。     
     * @param String $locationType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setLocationType( $locationType) {
        $this->sdkStdResult["locationType"] = $locationType;
    }
    
        
        /**
    * @return 图片组id
    */
        public function getGroupId() {
        $tempResult = $this->sdkStdResult["groupId"];
        return $tempResult;
    }
    
    /**
     * 设置图片组id     
     * @param String $groupId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGroupId( $groupId) {
        $this->sdkStdResult["groupId"] = $groupId;
    }
    
        
        /**
    * @return 当前页码
    */
        public function getCurrentPage() {
        $tempResult = $this->sdkStdResult["currentPage"];
        return $tempResult;
    }
    
    /**
     * 设置当前页码     
     * @param Integer $currentPage     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCurrentPage( $currentPage) {
        $this->sdkStdResult["currentPage"] = $currentPage;
    }
    
        
        /**
    * @return 默认18个，最大值 50
    */
        public function getPageSize() {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置默认18个，最大值 50     
     * @param Integer $pageSize     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPageSize( $pageSize) {
        $this->sdkStdResult["pageSize"] = $pageSize;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>