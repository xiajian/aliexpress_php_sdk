<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiFindProductInfoListQueryParam {

        
        /**
    * @return 商品业务状态，目前提供4种，输入参数分别是：上架:onSelling ；下架:offline ；审核中:auditing ；审核不通过:editingRequired。
    */
        public function getProductStatusType() {
        $tempResult = $this->sdkStdResult["productStatusType"];
        return $tempResult;
    }
    
    /**
     * 设置商品业务状态，目前提供4种，输入参数分别是：上架:onSelling ；下架:offline ；审核中:auditing ；审核不通过:editingRequired。     
     * @param String $productStatusType     
     * 参数示例：<pre>onSelling</pre>     
     * 此参数必填     */
    public function setProductStatusType( $productStatusType) {
        $this->sdkStdResult["productStatusType"] = $productStatusType;
    }
    
        
        /**
    * @return 商品标题模糊搜索字段。只支持半角英数字，长度不超过128。
    */
        public function getSubject() {
        $tempResult = $this->sdkStdResult["subject"];
        return $tempResult;
    }
    
    /**
     * 设置商品标题模糊搜索字段。只支持半角英数字，长度不超过128。     
     * @param String $subject     
     * 参数示例：<pre>knew odd</pre>     
     * 此参数必填     */
    public function setSubject( $subject) {
        $this->sdkStdResult["subject"] = $subject;
    }
    
        
        /**
    * @return 商品分组搜索字段。输入商品分组id(groupId).
    */
        public function getGroupId() {
        $tempResult = $this->sdkStdResult["groupId"];
        return $tempResult;
    }
    
    /**
     * 设置商品分组搜索字段。输入商品分组id(groupId).     
     * @param Integer $groupId     
     * 参数示例：<pre>124</pre>     
     * 此参数必填     */
    public function setGroupId( $groupId) {
        $this->sdkStdResult["groupId"] = $groupId;
    }
    
        
        /**
    * @return 商品下架原因：expire_offline：过期下架，user_offline：用户下架,violate_offline：违规下架,punish_offline：交易违规下架，degrade_offline：降级下架
    */
        public function getWsDisplay() {
        $tempResult = $this->sdkStdResult["wsDisplay"];
        return $tempResult;
    }
    
    /**
     * 设置商品下架原因：expire_offline：过期下架，user_offline：用户下架,violate_offline：违规下架,punish_offline：交易违规下架，degrade_offline：降级下架     
     * @param String $wsDisplay     
     * 参数示例：<pre>expire_offline</pre>     
     * 此参数必填     */
    public function setWsDisplay( $wsDisplay) {
        $this->sdkStdResult["wsDisplay"] = $wsDisplay;
    }
    
        
        /**
    * @return 到期时间搜索字段。例如：如果该值为3，则查询3天内下架的商品。
    */
        public function getOffLineTime() {
        $tempResult = $this->sdkStdResult["offLineTime"];
        return $tempResult;
    }
    
    /**
     * 设置到期时间搜索字段。例如：如果该值为3，则查询3天内下架的商品。     
     * @param Integer $offLineTime     
     * 参数示例：<pre>7</pre>     
     * 此参数必填     */
    public function setOffLineTime( $offLineTime) {
        $this->sdkStdResult["offLineTime"] = $offLineTime;
    }
    
        
        /**
    * @return 商品id搜索字段。
    */
        public function getProductId() {
        $tempResult = $this->sdkStdResult["productId"];
        return $tempResult;
    }
    
    /**
     * 设置商品id搜索字段。     
     * @param Long $productId     
     * 参数示例：<pre>123</pre>     
     * 此参数必填     */
    public function setProductId( $productId) {
        $this->sdkStdResult["productId"] = $productId;
    }
    
        
        /**
    * @return 待排除的产品ID列表。
    */
        public function getExceptedProductIds() {
        $tempResult = $this->sdkStdResult["exceptedProductIds"];
        return $tempResult;
    }
    
    /**
     * 设置待排除的产品ID列表。     
     * @param array include @see Long[] $exceptedProductIds     
     * 参数示例：<pre>[123,456]</pre>     
     * 此参数必填     */
    public function setExceptedProductIds( $exceptedProductIds) {
        $this->sdkStdResult["exceptedProductIds"] = $exceptedProductIds;
    }
    
        
        /**
    * @return 每页查询商品数量。输入值小于100，默认20。
    */
        public function getPageSize() {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置每页查询商品数量。输入值小于100，默认20。     
     * @param Integer $pageSize     
     * 参数示例：<pre>30</pre>     
     * 此参数必填     */
    public function setPageSize( $pageSize) {
        $this->sdkStdResult["pageSize"] = $pageSize;
    }
    
        
        /**
    * @return 需要商品的当前页数。默认第一页。
    */
        public function getCurrentPage() {
        $tempResult = $this->sdkStdResult["currentPage"];
        return $tempResult;
    }
    
    /**
     * 设置需要商品的当前页数。默认第一页。     
     * @param Integer $currentPage     
     * 参数示例：<pre>2</pre>     
     * 此参数必填     */
    public function setCurrentPage( $currentPage) {
        $this->sdkStdResult["currentPage"] = $currentPage;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>