<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiSetGroupsResult {

        	
    private $success;
    
        /**
    * @return 操作结果。true/false分别表示成功和失败。
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置操作结果。true/false分别表示成功和失败。     
     * @param String $success     
          
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
    }
    
        	
    private $timeStamp;
    
        /**
    * @return 20150714015815415-0700
    */
        public function getTimeStamp() {
        return $this->timeStamp;
    }
    
    /**
     * 设置20150714015815415-0700     
     * @param Date $timeStamp     
          
     * 此参数必填     */
    public function setTimeStamp( $timeStamp) {
        $this->timeStamp = $timeStamp;
    }
    
        	
    private $target;
    
        /**
    * @return 绑定成功的产品分组列表。
    */
        public function getTarget() {
        return $this->target;
    }
    
    /**
     * 设置绑定成功的产品分组列表。     
     * @param array include @see Long[] $target     
          
     * 此参数必填     */
    public function setTarget( $target) {
        $this->target = $target;
    }
    
        	
    private $errorMessage;
    
        /**
    * @return 出错时的错误信息。
    */
        public function getErrorMessage() {
        return $this->errorMessage;
    }
    
    /**
     * 设置出错时的错误信息。     
     * @param String $errorMessage     
          
     * 此参数必填     */
    public function setErrorMessage( $errorMessage) {
        $this->errorMessage = $errorMessage;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    				    			    			if (array_key_exists ( "timeStamp", $this->stdResult )) {
    				$this->timeStamp = $this->stdResult->{"timeStamp"};
    			}
    			    		    				    			    			if (array_key_exists ( "target", $this->stdResult )) {
    				$this->target = $this->stdResult->{"target"};
    			}
    			    		    				    			    			if (array_key_exists ( "errorMessage", $this->stdResult )) {
    				$this->errorMessage = $this->stdResult->{"errorMessage"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['success'];
    			}
    		    	    			    		    			if (array_key_exists ( "timeStamp", $this->arrayResult )) {
    			$this->timeStamp = $arrayResult['timeStamp'];
    			}
    		    	    			    		    			if (array_key_exists ( "target", $this->arrayResult )) {
    			$this->target = $arrayResult['target'];
    			}
    		    	    			    		    			if (array_key_exists ( "errorMessage", $this->arrayResult )) {
    			$this->errorMessage = $arrayResult['errorMessage'];
    			}
    		    	    		}

}
?>