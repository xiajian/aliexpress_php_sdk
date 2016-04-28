<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/AeopAnouncementResult.class.php');

class ApiQueryOpenAnouncementResult {

        	
    private $success;
    
        /**
    * @return 返回结果。
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置返回结果。     
     * @param AeopAnouncementResult $success     
          
     * 此参数必填     */
    public function setSuccess(AeopAnouncementResult $success) {
        $this->success = $success;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$successResult=$this->stdResult->{"success"};
    				$this->success = new AeopAnouncementResult();
    				$this->success->setStdResult ( $successResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "success", $this->arrayResult )) {
    		$successResult=$arrayResult['success'];
    			    			$this->success = new AeopAnouncementResult();
    			    			$this->success->$this->setStdResult ( $successResult);
    		}
    		    	    		}

}
?>