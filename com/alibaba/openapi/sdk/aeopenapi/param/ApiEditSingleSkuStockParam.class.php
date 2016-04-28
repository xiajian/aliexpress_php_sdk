<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiEditSingleSkuStockParam {

        
        /**
    * @return 需修改编辑的商品ID
    */
        public function getProductId() {
        $tempResult = $this->sdkStdResult["productId"];
        return $tempResult;
    }
    
    /**
     * 设置需修改编辑的商品ID     
     * @param Long $productId     
     * 参数示例：<pre>32297192242</pre>     
     * 此参数必填     */
    public function setProductId( $productId) {
        $this->sdkStdResult["productId"] = $productId;
    }
    
        
        /**
    * @return 需修改编辑的商品单个SKUID。SKU ID可以通过api.findAeProductById接口中的aeopAeproductSKUs获取单个产品信息中"id"进行获取。
    */
        public function getSkuId() {
        $tempResult = $this->sdkStdResult["skuId"];
        return $tempResult;
    }
    
    /**
     * 设置需修改编辑的商品单个SKUID。SKU ID可以通过api.findAeProductById接口中的aeopAeproductSKUs获取单个产品信息中"id"进行获取。     
     * @param String $skuId     
     * 参数示例：<pre>14:200003699;5:100014065</pre>     
     * 此参数必填     */
    public function setSkuId( $skuId) {
        $this->sdkStdResult["skuId"] = $skuId;
    }
    
        
        /**
    * @return SKU的库存值
    */
        public function getIpmSkuStock() {
        $tempResult = $this->sdkStdResult["ipmSkuStock"];
        return $tempResult;
    }
    
    /**
     * 设置SKU的库存值     
     * @param Long $ipmSkuStock     
     * 参数示例：<pre>299</pre>     
     * 此参数必填     */
    public function setIpmSkuStock( $ipmSkuStock) {
        $this->sdkStdResult["ipmSkuStock"] = $ipmSkuStock;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>