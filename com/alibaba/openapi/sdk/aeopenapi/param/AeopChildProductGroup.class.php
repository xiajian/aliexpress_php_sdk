<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AeopChildProductGroup extends SDKDomain {

       	
    private $groupId;
    
        /**
    * @return 
    */
        public function getGroupId() {
        return $this->groupId;
    }
    
    /**
     * 设置     
     * @param Long $groupId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGroupId( $groupId) {
        $this->groupId = $groupId;
    }
    
        	
    private $groupName;
    
        /**
    * @return 
    */
        public function getGroupName() {
        return $this->groupName;
    }
    
    /**
     * 设置     
     * @param String $groupName     
     * 参数示例：<pre></pre>     
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