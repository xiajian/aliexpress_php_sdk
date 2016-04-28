<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class GroupIdHolder extends SDKDomain {

       	
    private $groupId;
    
        /**
    * @return 产品分组ID
    */
        public function getGroupId() {
        return $this->groupId;
    }
    
    /**
     * 设置产品分组ID     
     * @param Long $groupId     
     * 参数示例：<pre>1234</pre>     
     * 此参数必填     */
    public function setGroupId( $groupId) {
        $this->groupId = $groupId;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "groupId", $this->stdResult )) {
    				$this->groupId = $this->stdResult->{"groupId"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "groupId", $this->arrayResult )) {
    			$this->groupId = $arrayResult['groupId'];
    			}
    		    	    		}
 
   
}
?>