<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiUpdateMsgProcessedParam {

        
        /**
    * @return 通道ID(即关系ID)
    */
        public function getChannelId() {
        $tempResult = $this->sdkStdResult["channelId"];
        return $tempResult;
    }
    
    /**
     * 设置通道ID(即关系ID)     
     * @param String $channelId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setChannelId( $channelId) {
        $this->sdkStdResult["channelId"] = $channelId;
    }
    
        
        /**
    * @return 处理状态(0未处理,1已处理)
    */
        public function getDealStat() {
        $tempResult = $this->sdkStdResult["dealStat"];
        return $tempResult;
    }
    
    /**
     * 设置处理状态(0未处理,1已处理)     
     * @param String $dealStat     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDealStat( $dealStat) {
        $this->sdkStdResult["dealStat"] = $dealStat;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>