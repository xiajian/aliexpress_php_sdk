<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiFindAeProductDetailModuleListByQureyParam {

        
        /**
    * @return 要查询模块的状态，包含：tbd(审核不通过),auditing（审核中）,approved（审核通过）
    */
        public function getModuleStatus() {
        $tempResult = $this->sdkStdResult["moduleStatus"];
        return $tempResult;
    }
    
    /**
     * 设置要查询模块的状态，包含：tbd(审核不通过),auditing（审核中）,approved（审核通过）     
     * @param String $moduleStatus     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setModuleStatus( $moduleStatus) {
        $this->sdkStdResult["moduleStatus"] = $moduleStatus;
    }
    
        
        /**
    * @return 要查询模块的类型，包含：custom（自定义模块）,relation（关联模块）
    */
        public function getType() {
        $tempResult = $this->sdkStdResult["type"];
        return $tempResult;
    }
    
    /**
     * 设置要查询模块的类型，包含：custom（自定义模块）,relation（关联模块）     
     * @param String $type     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setType( $type) {
        $this->sdkStdResult["type"] = $type;
    }
    
        
        /**
    * @return 要查询当前页码，每页返回50条记录，从1开始
    */
        public function getPageIndex() {
        $tempResult = $this->sdkStdResult["pageIndex"];
        return $tempResult;
    }
    
    /**
     * 设置要查询当前页码，每页返回50条记录，从1开始     
     * @param Integer $pageIndex     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPageIndex( $pageIndex) {
        $this->sdkStdResult["pageIndex"] = $pageIndex;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>