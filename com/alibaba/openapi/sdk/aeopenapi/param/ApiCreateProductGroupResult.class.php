<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiCreateProductGroupResult {

        	
    private $timeStamp;
    
        /**
    * @return 创建产品分组的时间
    */
        public function getTimeStamp() {
        return $this->timeStamp;
    }
    
    /**
     * 设置创建产品分组的时间     
     * @param Date $timeStamp     
          
     * 此参数必填     */
    public function setTimeStamp( $timeStamp) {
        $this->timeStamp = $timeStamp;
    }
    
        	
    private $target;
    
        /**
    * @return 新创建的产品组ID
    */
        public function getTarget() {
        return $this->target;
    }
    
    /**
     * 设置新创建的产品组ID     
     * @param Long $target     
          
     * 此参数必填     */
    public function setTarget( $target) {
        $this->target = $target;
    }
    
        	
    private $errorMessage;
    
        /**
    * @return 创建失败时的错误信息
    */
        public function getErrorMessage() {
        return $this->errorMessage;
    }
    
    /**
     * 设置创建失败时的错误信息     
     * @param String $errorMessage     
          
     * 此参数必填     */
    public function setErrorMessage( $errorMessage) {
        $this->errorMessage = $errorMessage;
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
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "timeStamp", $this->stdResult )) {
    				$this->timeStamp = $this->stdResult->{"timeStamp"};
    			}
    			    		    				    			    			if (array_key_exists ( "target", $this->stdResult )) {
    				$this->target = $this->stdResult->{"target"};
    			}
    			    		    				    			    			if (array_key_exists ( "errorMessage", $this->stdResult )) {
    				$this->errorMessage = $this->stdResult->{"errorMessage"};
    			}
    			    		    				    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "timeStamp", $this->arrayResult )) {
    			$this->timeStamp = $arrayResult['timeStamp'];
    			}
    		    	    			    		    			if (array_key_exists ( "target", $this->arrayResult )) {
    			$this->target = $arrayResult['target'];
    			}
    		    	    			    		    			if (array_key_exists ( "errorMessage", $this->arrayResult )) {
    			$this->errorMessage = $arrayResult['errorMessage'];
    			}
    		    	    			    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['success'];
    			}
    		    	    		}

}
?>