<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiSetGroupsParam {

        
        /**
    * @return 产品ID
    */
        public function getProductId() {
        $tempResult = $this->sdkStdResult["productId"];
        return $tempResult;
    }
    
    /**
     * 设置产品ID     
     * @param Long $productId     
     * 参数示例：<pre>32218803874</pre>     
     * 此参数必填     */
    public function setProductId( $productId) {
        $this->sdkStdResult["productId"] = $productId;
    }
    
        
        /**
    * @return 商品分组ID。如果需要将一个商品设置成多个分组，需要将分组id用逗号分隔，如：'123,456,789' 至多3个。
    */
        public function getGroupIds() {
        $tempResult = $this->sdkStdResult["groupIds"];
        return $tempResult;
    }
    
    /**
     * 设置商品分组ID。如果需要将一个商品设置成多个分组，需要将分组id用逗号分隔，如：'123,456,789' 至多3个。     
     * @param String $groupIds     
     * 参数示例：<pre>254562048</pre>     
     * 此参数必填     */
    public function setGroupIds( $groupIds) {
        $this->sdkStdResult["groupIds"] = $groupIds;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>