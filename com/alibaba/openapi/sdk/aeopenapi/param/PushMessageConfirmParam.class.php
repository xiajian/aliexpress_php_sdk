<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class PushMessageConfirmParam {

        
        /**
    * @return 待确认的消息id列表
    */
        public function getMsgIdList() {
        $tempResult = $this->sdkStdResult["msgIdList"];
        return $tempResult;
    }
    
    /**
     * 设置待确认的消息id列表     
     * @param array include @see Integer[] $msgIdList     
     * 参数示例：<pre>[123,456]</pre>     
     * 此参数必填     */
    public function setMsgIdList( $msgIdList) {
        $this->sdkStdResult["msgIdList"] = $msgIdList;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>