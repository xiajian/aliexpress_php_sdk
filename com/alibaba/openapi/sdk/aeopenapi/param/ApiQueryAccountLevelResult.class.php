<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/AccountResultDTO.class.php');

class ApiQueryAccountLevelResult {

        	
    private $result;
    
        /**
    * @return 会员等级情况
    */
        public function getResult() {
        return $this->result;
    }
    
    /**
     * 设置会员等级情况     
     * @param AccountResultDTO $result     
          
     * 此参数必填     */
    public function setResult(AccountResultDTO $result) {
        $this->result = $result;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "result", $this->stdResult )) {
    				$resultResult=$this->stdResult->{"result"};
    				$this->result = new AccountResultDTO();
    				$this->result->setStdResult ( $resultResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "result", $this->arrayResult )) {
    		$resultResult=$arrayResult['result'];
    			    			$this->result = new AccountResultDTO();
    			    			$this->result->$this->setStdResult ( $resultResult);
    		}
    		    	    		}

}
?>