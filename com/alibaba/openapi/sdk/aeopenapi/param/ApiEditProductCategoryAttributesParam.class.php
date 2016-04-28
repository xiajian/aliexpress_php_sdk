<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/AeopAeProductPropertys.class.php');

class ApiEditProductCategoryAttributesParam {

        
        /**
    * @return 产品的ID
    */
        public function getProductId() {
        $tempResult = $this->sdkStdResult["productId"];
        return $tempResult;
    }
    
    /**
     * 设置产品的ID     
     * @param Long $productId     
     * 参数示例：<pre>1706468951</pre>     
     * 此参数必填     */
    public function setProductId( $productId) {
        $this->sdkStdResult["productId"] = $productId;
    }
    
        
        /**
    * @return 该产品要修改的类目属性列表
    */
        public function getProductCategoryAttributes() {
        $tempResult = $this->sdkStdResult["productCategoryAttributes"];
        return $tempResult;
    }
    
    /**
     * 设置该产品要修改的类目属性列表     
     * @param array include @see AeopAeProductPropertys[] $productCategoryAttributes     
     * 参数示例：<pre>[{"attrNameId":284, "attrValueId":491}, {"attrNameId":200000137,"attrValueId":7926}, {"attrName":"Color", "attrValue":"Red"}, {"attrName":"Additional", "attrValue":"Value"}]</pre>     
     * 此参数必填     */
    public function setProductCategoryAttributes(AeopAeProductPropertys $productCategoryAttributes) {
        $this->sdkStdResult["productCategoryAttributes"] = $productCategoryAttributes;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>