<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiUpdateMsgRankParam {

        
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
     * 参数示例：<pre>1123445</pre>     
     * 此参数必填     */
    public function setChannelId( $channelId) {
        $this->sdkStdResult["channelId"] = $channelId;
    }
    
        
        /**
    * @return 标签(rank0,rank1,rank2,rank3,rank4,rank5)rank0~rank5为六种不同颜色标记依次为白，红，橙，绿，蓝，紫
    */
        public function getRank() {
        $tempResult = $this->sdkStdResult["rank"];
        return $tempResult;
    }
    
    /**
     * 设置标签(rank0,rank1,rank2,rank3,rank4,rank5)rank0~rank5为六种不同颜色标记依次为白，红，橙，绿，蓝，紫     
     * @param String $rank     
     * 参数示例：<pre>rank1</pre>     
     * 此参数必填     */
    public function setRank( $rank) {
        $this->sdkStdResult["rank"] = $rank;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>