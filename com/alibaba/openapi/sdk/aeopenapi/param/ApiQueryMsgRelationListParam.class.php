<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiQueryMsgRelationListParam {

        
        /**
    * @return 当前页
    */
        public function getCurrentPage() {
        $tempResult = $this->sdkStdResult["currentPage"];
        return $tempResult;
    }
    
    /**
     * 设置当前页     
     * @param Integer $currentPage     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setCurrentPage( $currentPage) {
        $this->sdkStdResult["currentPage"] = $currentPage;
    }
    
        
        /**
    * @return 每页条数,pageSize取值范围(0~100) 最多返回前5000条数据
    */
        public function getPageSize() {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置每页条数,pageSize取值范围(0~100) 最多返回前5000条数据     
     * @param Integer $pageSize     
     * 参数示例：<pre>20</pre>     
     * 此参数必填     */
    public function setPageSize( $pageSize) {
        $this->sdkStdResult["pageSize"] = $pageSize;
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
    
        
        /**
    * @return 筛选条件(取值:dealStat/readStat/rank0/rank1/rank2/rank3/rank4/rank5)dealStat时将按未处理筛选，值为readStat时将按未读筛选，值为rank1时将按红色标签进行筛选
    */
        public function getFilter() {
        $tempResult = $this->sdkStdResult["filter"];
        return $tempResult;
    }
    
    /**
     * 设置筛选条件(取值:dealStat/readStat/rank0/rank1/rank2/rank3/rank4/rank5)dealStat时将按未处理筛选，值为readStat时将按未读筛选，值为rank1时将按红色标签进行筛选     
     * @param String $filter     
     * 参数示例：<pre>dealStat</pre>     
     * 此参数必填     */
    public function setFilter( $filter) {
        $this->sdkStdResult["filter"] = $filter;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>