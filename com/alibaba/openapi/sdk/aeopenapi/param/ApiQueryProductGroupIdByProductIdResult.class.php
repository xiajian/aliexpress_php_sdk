<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/GroupIdHolder.class.php');

class ApiQueryProductGroupIdByProductIdResult {

        	
    private $target;
    
        /**
    * @return 这个产品所关联的产品分组ID列表。
    */
        public function getTarget() {
        return $this->target;
    }
    
    /**
     * 设置这个产品所关联的产品分组ID列表。     
     * @param array include @see GroupIdHolder[] $target     
          
     * 此参数必填     */
    public function setTarget(GroupIdHolder $target) {
        $this->target = $target;
    }
    
        	
    private $success;
    
        /**
    * @return 接口调用结果。true/false分别表示成功和失败。
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置接口调用结果。true/false分别表示成功和失败。     
     * @param Boolean $success     
          
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
    }
    
        	
    private $timeStamp;
    
        /**
    * @return 调用接口的时间。
    */
        public function getTimeStamp() {
        return $this->timeStamp;
    }
    
    /**
     * 设置调用接口的时间。     
     * @param Date $timeStamp     
          
     * 此参数必填     */
    public function setTimeStamp( $timeStamp) {
        $this->timeStamp = $timeStamp;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "target", $this->stdResult )) {
    			$targetResult=$this->stdResult->{"target"};
    				$object = json_decode ( json_encode ( $targetResult ), true );
					$this->target = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$GroupIdHolderResult=new GroupIdHolder();
						$GroupIdHolderResult->setArrayResult($arrayobject );
						$this->target [$i] = $GroupIdHolderResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    				    			    			if (array_key_exists ( "timeStamp", $this->stdResult )) {
    				$this->timeStamp = $this->stdResult->{"timeStamp"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "target", $this->arrayResult )) {
    		$targetResult=$arrayResult['target'];
    			$this->target = GroupIdHolder();
    			$this->target->$this->setStdResult ( $targetResult);
    		}
    		    	    			    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['success'];
    			}
    		    	    			    		    			if (array_key_exists ( "timeStamp", $this->arrayResult )) {
    			$this->timeStamp = $arrayResult['timeStamp'];
    			}
    		    	    		}

}
?>