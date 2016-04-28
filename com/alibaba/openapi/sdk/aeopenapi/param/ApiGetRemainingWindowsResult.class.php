<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiGetRemainingWindowsResult {

        	
    private $validDays;
    
        /**
    * @return 每个橱窗的有效期(单位: 天)。
    */
        public function getValidDays() {
        return $this->validDays;
    }
    
    /**
     * 设置每个橱窗的有效期(单位: 天)。     
     * @param Integer $validDays     
          
     * 此参数必填     */
    public function setValidDays( $validDays) {
        $this->validDays = $validDays;
    }
    
        	
    private $remainingWindowCount;
    
        /**
    * @return 剩余的可用橱窗数
    */
        public function getRemainingWindowCount() {
        return $this->remainingWindowCount;
    }
    
    /**
     * 设置剩余的可用橱窗数     
     * @param Integer $remainingWindowCount     
          
     * 此参数必填     */
    public function setRemainingWindowCount( $remainingWindowCount) {
        $this->remainingWindowCount = $remainingWindowCount;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "validDays", $this->stdResult )) {
    				$this->validDays = $this->stdResult->{"validDays"};
    			}
    			    		    				    			    			if (array_key_exists ( "remainingWindowCount", $this->stdResult )) {
    				$this->remainingWindowCount = $this->stdResult->{"remainingWindowCount"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "validDays", $this->arrayResult )) {
    			$this->validDays = $arrayResult['validDays'];
    			}
    		    	    			    		    			if (array_key_exists ( "remainingWindowCount", $this->arrayResult )) {
    			$this->remainingWindowCount = $arrayResult['remainingWindowCount'];
    			}
    		    	    		}

}
?>