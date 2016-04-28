<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiAddMsgParam {

        
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
     * 参数示例：<pre>334455556</pre>     
     * 此参数必填     */
    public function setChannelId( $channelId) {
        $this->sdkStdResult["channelId"] = $channelId;
    }
    
        
        /**
    * @return 买家账号
    */
        public function getBuyerId() {
        $tempResult = $this->sdkStdResult["buyerId"];
        return $tempResult;
    }
    
    /**
     * 设置买家账号     
     * @param String $buyerId     
     * 参数示例：<pre>uk33445</pre>     
     * 此参数必填     */
    public function setBuyerId( $buyerId) {
        $this->sdkStdResult["buyerId"] = $buyerId;
    }
    
        
        /**
    * @return 内容
    */
        public function getContent() {
        $tempResult = $this->sdkStdResult["content"];
        return $tempResult;
    }
    
    /**
     * 设置内容     
     * @param String $content     
     * 参数示例：<pre>hello</pre>     
     * 此参数必填     */
    public function setContent( $content) {
        $this->sdkStdResult["content"] = $content;
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