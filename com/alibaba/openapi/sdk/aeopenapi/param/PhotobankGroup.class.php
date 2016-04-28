<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class PhotobankGroup extends SDKDomain {

       	
    private $groupId;
    
        /**
    * @return 图片分组ID
    */
        public function getGroupId() {
        return $this->groupId;
    }
    
    /**
     * 设置图片分组ID     
     * @param String $groupId     
     * 参数示例：<pre>2000123</pre>     
     * 此参数必填     */
    public function setGroupId( $groupId) {
        $this->groupId = $groupId;
    }
    
        	
    private $groupName;
    
        /**
    * @return 图片分组名称
    */
        public function getGroupName() {
        return $this->groupName;
    }
    
    /**
     * 设置图片分组名称     
     * @param String $groupName     
     * 参数示例：<pre>Test Group Name</pre>     
     * 此参数必填     */
    public function setGroupName( $groupName) {
        $this->groupName = $groupName;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "groupId", $this->stdResult )) {
    				$this->groupId = $this->stdResult->{"groupId"};
    			}
    			    		    				    			    			if (array_key_exists ( "groupName", $this->stdResult )) {
    				$this->groupName = $this->stdResult->{"groupName"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "groupId", $this->arrayResult )) {
    			$this->groupId = $arrayResult['groupId'];
    			}
    		    	    			    		    			if (array_key_exists ( "groupName", $this->arrayResult )) {
    			$this->groupName = $arrayResult['groupName'];
    			}
    		    	    		}
 
   
}
?>