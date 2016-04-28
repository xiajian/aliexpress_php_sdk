<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/AeopTaoDaiXiaoProductResultDTO.class.php');

class ApiListTbProductByIdsResult {

        	
    private $response;
    
        /**
    * @return 
    */
        public function getResponse() {
        return $this->response;
    }
    
    /**
     * 设置     
     * @param array include @see AeopTaoDaiXiaoProductResultDTO[] $response     
          
     * 此参数必填     */
    public function setResponse(AeopTaoDaiXiaoProductResultDTO $response) {
        $this->response = $response;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "response", $this->stdResult )) {
    			$responseResult=$this->stdResult->{"response"};
    				$object = json_decode ( json_encode ( $responseResult ), true );
					$this->response = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AeopTaoDaiXiaoProductResultDTOResult=new AeopTaoDaiXiaoProductResultDTO();
						$AeopTaoDaiXiaoProductResultDTOResult->setArrayResult($arrayobject );
						$this->response [$i] = $AeopTaoDaiXiaoProductResultDTOResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "response", $this->arrayResult )) {
    		$responseResult=$arrayResult['response'];
    			$this->response = AeopTaoDaiXiaoProductResultDTO();
    			$this->response->$this->setStdResult ( $responseResult);
    		}
    		    	    		}

}
?>