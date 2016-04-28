<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiFindProductInfoListQueryV2Result {

        	
    private $isSuccess;
    
        /**
    * @return 是否成功
    */
        public function getIsSuccess() {
        return $this->isSuccess;
    }
    
    /**
     * 设置是否成功     
     * @param Boolean $isSuccess     
          
     * 此参数必填     */
    public function setIsSuccess( $isSuccess) {
        $this->isSuccess = $isSuccess;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "isSuccess", $this->stdResult )) {
    				$this->isSuccess = $this->stdResult->{"isSuccess"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "isSuccess", $this->arrayResult )) {
    			$this->isSuccess = $arrayResult['isSuccess'];
    			}
    		    	    		}

}
?>