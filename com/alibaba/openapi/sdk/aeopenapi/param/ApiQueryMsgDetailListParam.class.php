<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiQueryMsgDetailListParam {

        
        /**
    * @return 当前页
    */
        public function getCurrentPage() {
        $tempResult = $this->sdkStdResult["currentPage"];
        return $tempResult;
    }
    
    /**
     * 设置当前页     
     * @param Integer $currentPage     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setCurrentPage( $currentPage) {
        $this->sdkStdResult["currentPage"] = $currentPage;
    }
    
        
        /**
    * @return 每页条数,pageSize取值范围(0~100) 最多返回前5000条数据
    */
        public function getPageSize() {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置每页条数,pageSize取值范围(0~100) 最多返回前5000条数据     
     * @param Integer $pageSize     
     * 参数示例：<pre>20</pre>     
     * 此参数必填     */
    public function setPageSize( $pageSize) {
        $this->sdkStdResult["pageSize"] = $pageSize;
    }
    
        
        /**
    * @return 通道ID，即关系ID
    */
        public function getChannelId() {
        $tempResult = $this->sdkStdResult["channelId"];
        return $tempResult;
    }
    
    /**
     * 设置通道ID，即关系ID     
     * @param String $channelId     
     * 参数示例：<pre>22323233</pre>     
     * 此参数必填     */
    public function setChannelId( $channelId) {
        $this->sdkStdResult["channelId"] = $channelId;
    }
    
        
        /**
    * @return 类型(message_center/order_msg)
    */
        public function getMsgSources() {
        $tempResult = $this->sdkStdResult["msgSources"];
        return $tempResult;
    }
    
    /**
     * 设置类型(message_center/order_msg)     
     * @param String $msgSources     
     * 参数示例：<pre>message_center</pre>     
     * 此参数必填     */
    public function setMsgSources( $msgSources) {
        $this->sdkStdResult["msgSources"] = $msgSources;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>