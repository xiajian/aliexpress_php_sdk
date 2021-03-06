<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/EcResult.class.php');

class ApiUpdateMsgRankResult {

        	
    private $result;
    
        /**
    * @return 打标签返回值
    */
        public function getResult() {
        return $this->result;
    }
    
    /**
     * 设置打标签返回值     
     * @param EcResult $result     
          
     * 此参数必填     */
    public function setResult(EcResult $result) {
        $this->result = $result;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "result", $this->stdResult )) {
    				$resultResult=$this->stdResult->{"result"};
    				$this->result = new EcResult();
    				$this->result->setStdResult ( $resultResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "result", $this->arrayResult )) {
    		$resultResult=$arrayResult['result'];
    			    			$this->result = new EcResult();
    			    			$this->result->$this->setStdResult ( $resultResult);
    		}
    		    	    		}

}
?>