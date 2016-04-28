<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiSetShopwindowProductResult {

        	
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
    
        	
    private $remainingWindowCount;
    
        /**
    * @return 剩余的可用橱窗数。
    */
        public function getRemainingWindowCount() {
        return $this->remainingWindowCount;
    }
    
    /**
     * 设置剩余的可用橱窗数。     
     * @param Integer $remainingWindowCount     
          
     * 此参数必填     */
    public function setRemainingWindowCount( $remainingWindowCount) {
        $this->remainingWindowCount = $remainingWindowCount;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    				    			    			if (array_key_exists ( "remainingWindowCount", $this->stdResult )) {
    				$this->remainingWindowCount = $this->stdResult->{"remainingWindowCount"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['success'];
    			}
    		    	    			    		    			if (array_key_exists ( "remainingWindowCount", $this->arrayResult )) {
    			$this->remainingWindowCount = $arrayResult['remainingWindowCount'];
    			}
    		    	    		}

}
?>