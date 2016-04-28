<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiFindAeProductProhibitedWordsParam {

        
        /**
    * @return 商品类目ID
    */
        public function getCategoryId() {
        $tempResult = $this->sdkStdResult["categoryId"];
        return $tempResult;
    }
    
    /**
     * 设置商品类目ID     
     * @param Integer $categoryId     
     * 参数示例：<pre>322</pre>     
     * 此参数必填     */
    public function setCategoryId( $categoryId) {
        $this->sdkStdResult["categoryId"] = $categoryId;
    }
    
        
        /**
    * @return 商品的标题
    */
        public function getTitle() {
        $tempResult = $this->sdkStdResult["title"];
        return $tempResult;
    }
    
    /**
     * 设置商品的标题     
     * @param String $title     
     * 参数示例：<pre>nike</pre>     
     * 此参数必填     */
    public function setTitle( $title) {
        $this->sdkStdResult["title"] = $title;
    }
    
        
        /**
    * @return 商品的关键字列表
    */
        public function getKeywords() {
        $tempResult = $this->sdkStdResult["keywords"];
        return $tempResult;
    }
    
    /**
     * 设置商品的关键字列表     
     * @param array include @see String[] $keywords     
     * 参数示例：<pre>["nike", "shoes", "adidas"]</pre>     
     * 此参数必填     */
    public function setKeywords( $keywords) {
        $this->sdkStdResult["keywords"] = $keywords;
    }
    
        
        /**
    * @return 商品的类目属性，只能填写字符形式的类目属性
    */
        public function getProductProperties() {
        $tempResult = $this->sdkStdResult["productProperties"];
        return $tempResult;
    }
    
    /**
     * 设置商品的类目属性，只能填写字符形式的类目属性     
     * @param array include @see String[] $productProperties     
     * 参数示例：<pre>["red", "nike", "shoes"]</pre>     
     * 此参数必填     */
    public function setProductProperties( $productProperties) {
        $this->sdkStdResult["productProperties"] = $productProperties;
    }
    
        
        /**
    * @return 商品的详细描述
    */
        public function getDetail() {
        $tempResult = $this->sdkStdResult["detail"];
        return $tempResult;
    }
    
    /**
     * 设置商品的详细描述     
     * @param String $detail     
     * 参数示例：<pre>This is a test for the product.</pre>     
     * 此参数必填     */
    public function setDetail( $detail) {
        $this->sdkStdResult["detail"] = $detail;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>