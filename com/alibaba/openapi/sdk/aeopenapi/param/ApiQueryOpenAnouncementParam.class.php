<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiQueryOpenAnouncementParam {

        
        /**
    * @return 公告id，一次只能查询一个。
    */
        public function getAnouncement() {
        $tempResult = $this->sdkStdResult["anouncement"];
        return $tempResult;
    }
    
    /**
     * 设置公告id，一次只能查询一个。     
     * @param String $anouncement     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAnouncement( $anouncement) {
        $this->sdkStdResult["anouncement"] = $anouncement;
    }
    
        
        /**
    * @return 公告创建时间起始值，格式: mm/dd/yyyy hh:mm:ss,如10/08/2013 00:00:00。
    */
        public function getPublicDatetimeStart() {
        $tempResult = $this->sdkStdResult["publicDatetimeStart"];
        return $tempResult;
    }
    
    /**
     * 设置公告创建时间起始值，格式: mm/dd/yyyy hh:mm:ss,如10/08/2013 00:00:00。     
     * @param String $publicDatetimeStart     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPublicDatetimeStart( $publicDatetimeStart) {
        $this->sdkStdResult["publicDatetimeStart"] = $publicDatetimeStart;
    }
    
        
        /**
    * @return 公告创建截止值，格式: mm/dd/yyyy hh:mm:ss,如10/09/2013 00:00:00。
    */
        public function getPublicDatetimeEnd() {
        $tempResult = $this->sdkStdResult["publicDatetimeEnd"];
        return $tempResult;
    }
    
    /**
     * 设置公告创建截止值，格式: mm/dd/yyyy hh:mm:ss,如10/09/2013 00:00:00。     
     * @param String $publicDatetimeEnd     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPublicDatetimeEnd( $publicDatetimeEnd) {
        $this->sdkStdResult["publicDatetimeEnd"] = $publicDatetimeEnd;
    }
    
        
        /**
    * @return 当前页码。
    */
        public function getPage() {
        $tempResult = $this->sdkStdResult["page"];
        return $tempResult;
    }
    
    /**
     * 设置当前页码。     
     * @param Integer $page     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPage( $page) {
        $this->sdkStdResult["page"] = $page;
    }
    
        
        /**
    * @return 每页个数，最大50。
    */
        public function getPageSize() {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置每页个数，最大50。     
     * @param Integer $pageSize     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPageSize( $pageSize) {
        $this->sdkStdResult["pageSize"] = $pageSize;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>