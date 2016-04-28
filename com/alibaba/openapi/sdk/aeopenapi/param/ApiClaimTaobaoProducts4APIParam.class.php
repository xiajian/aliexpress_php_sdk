<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiClaimTaobaoProducts4APIParam {

        
        /**
    * @return 淘宝或者天猫产品的detail url
    */
        public function getUrl() {
        $tempResult = $this->sdkStdResult["url"];
        return $tempResult;
    }
    
    /**
     * 设置淘宝或者天猫产品的detail url     
     * @param String $url     
     * 参数示例：<pre>http://detail.tmall.com/item.htm?spm=a2106.m861.1000384.1.vxsG6t&id=13187863348&source=dou&scm=1029.newlist-0.tagbeta.50000582&ppath=&sku=&ug=</pre>     
     * 此参数必填     */
    public function setUrl( $url) {
        $this->sdkStdResult["url"] = $url;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>