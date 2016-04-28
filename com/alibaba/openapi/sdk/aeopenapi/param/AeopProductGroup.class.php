<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/AeopChildProductGroup.class.php');

class AeopProductGroup extends SDKDomain {

       	
    private $groupId;
    
        /**
    * @return 产品分组
    */
        public function getGroupId() {
        return $this->groupId;
    }
    
    /**
     * 设置产品分组     
     * @param Long $groupId     
     * 参数示例：<pre>262007001</pre>     
     * 此参数必填     */
    public function setGroupId( $groupId) {
        $this->groupId = $groupId;
    }
    
        	
    private $groupName;
    
        /**
    * @return 分组名称
    */
        public function getGroupName() {
        return $this->groupName;
    }
    
    /**
     * 设置分组名称     
     * @param String $groupName     
     * 参数示例：<pre>test112fasdfds</pre>     
     * 此参数必填     */
    public function setGroupName( $groupName) {
        $this->groupName = $groupName;
    }
    
        	
    private $childGroup;
    
        /**
    * @return 子分组列表
    */
        public function getChildGroup() {
        return $this->childGroup;
    }
    
    /**
     * 设置子分组列表     
     * @param array include @see AeopChildProductGroup[] $childGroup     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setChildGroup(AeopChildProductGroup $childGroup) {
        $this->childGroup = $childGroup;
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
    			    		    				    			    			if (array_key_exists ( "childGroup", $this->stdResult )) {
    			$childGroupResult=$this->stdResult->{"childGroup"};
    				$object = json_decode ( json_encode ( $childGroupResult ), true );
					$this->childGroup = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AeopChildProductGroupResult=new AeopChildProductGroup();
						$AeopChildProductGroupResult->setArrayResult($arrayobject );
						$this->childGroup [$i] = $AeopChildProductGroupResult;
					}
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
    		    	    			    		    		if (array_key_exists ( "childGroup", $this->arrayResult )) {
    		$childGroupResult=$arrayResult['childGroup'];
    			$this->childGroup = AeopChildProductGroup();
    			$this->childGroup->$this->setStdResult ( $childGroupResult);
    		}
    		    	    		}
 
   
}
?>