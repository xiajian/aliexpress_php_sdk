<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/AeopProductGroup.class.php');

class ApiGetProductGroupListResult {

        	
    private $target;
    
        /**
    * @return 产品分组信息
    */
        public function getTarget() {
        return $this->target;
    }
    
    /**
     * 设置产品分组信息     
     * @param array include @see AeopProductGroup[] $target     
          
     * 此参数必填     */
    public function setTarget(AeopProductGroup $target) {
        $this->target = $target;
    }
    
        	
    private $timeStamp;
    
        /**
    * @return 调用接口的时间戳
    */
        public function getTimeStamp() {
        return $this->timeStamp;
    }
    
    /**
     * 设置调用接口的时间戳     
     * @param String $timeStamp     
          
     * 此参数必填     */
    public function setTimeStamp( $timeStamp) {
        $this->timeStamp = $timeStamp;
    }
    
        	
    private $success;
    
        /**
    * @return 接口的调用结果。true/false分别表示成功和失败。
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置接口的调用结果。true/false分别表示成功和失败。     
     * @param Boolean $success     
          
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
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
						$AeopProductGroupResult=new AeopProductGroup();
						$AeopProductGroupResult->setArrayResult($arrayobject );
						$this->target [$i] = $AeopProductGroupResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "timeStamp", $this->stdResult )) {
    				$this->timeStamp = $this->stdResult->{"timeStamp"};
    			}
    			    		    				    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "target", $this->arrayResult )) {
    		$targetResult=$arrayResult['target'];
    			$this->target = AeopProductGroup();
    			$this->target->$this->setStdResult ( $targetResult);
    		}
    		    	    			    		    			if (array_key_exists ( "timeStamp", $this->arrayResult )) {
    			$this->timeStamp = $arrayResult['timeStamp'];
    			}
    		    	    			    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['success'];
    			}
    		    	    		}

}
?>