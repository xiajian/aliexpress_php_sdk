<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class PhtobankPaginationQuery extends SDKDomain {

       	
    private $groupId;
    
        /**
    * @return 图片银行产品分组ID
    */
        public function getGroupId() {
        return $this->groupId;
    }
    
    /**
     * 设置图片银行产品分组ID     
     * @param String $groupId     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setGroupId( $groupId) {
        $this->groupId = $groupId;
    }
    
        	
    private $currentPage;
    
        /**
    * @return 当前页的值
    */
        public function getCurrentPage() {
        return $this->currentPage;
    }
    
    /**
     * 设置当前页的值     
     * @param Integer $currentPage     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setCurrentPage( $currentPage) {
        $this->currentPage = $currentPage;
    }
    
        	
    private $pageSize;
    
        /**
    * @return 每页的记录数
    */
        public function getPageSize() {
        return $this->pageSize;
    }
    
    /**
     * 设置每页的记录数     
     * @param Integer $pageSize     
     * 参数示例：<pre>19</pre>     
     * 此参数必填     */
    public function setPageSize( $pageSize) {
        $this->pageSize = $pageSize;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "groupId", $this->stdResult )) {
    				$this->groupId = $this->stdResult->{"groupId"};
    			}
    			    		    				    			    			if (array_key_exists ( "currentPage", $this->stdResult )) {
    				$this->currentPage = $this->stdResult->{"currentPage"};
    			}
    			    		    				    			    			if (array_key_exists ( "pageSize", $this->stdResult )) {
    				$this->pageSize = $this->stdResult->{"pageSize"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "groupId", $this->arrayResult )) {
    			$this->groupId = $arrayResult['groupId'];
    			}
    		    	    			    		    			if (array_key_exists ( "currentPage", $this->arrayResult )) {
    			$this->currentPage = $arrayResult['currentPage'];
    			}
    		    	    			    		    			if (array_key_exists ( "pageSize", $this->arrayResult )) {
    			$this->pageSize = $arrayResult['pageSize'];
    			}
    		    	    		}
 
   
}
?>