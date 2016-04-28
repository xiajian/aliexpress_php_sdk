<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiUpdateMsgReadParam {

        
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
     * 参数示例：<pre>2344555</pre>     
     * 此参数必填     */
    public function setChannelId( $channelId) {
        $this->sdkStdResult["channelId"] = $channelId;
    }
    
        
        /**
    * @return 查询类型
    */
        public function getMsgSources() {
        $tempResult = $this->sdkStdResult["msgSources"];
        return $tempResult;
    }
    
    /**
     * 设置查询类型     
     * @param String $msgSources     
     * 参数示例：<pre>message_center/order_msg</pre>     
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