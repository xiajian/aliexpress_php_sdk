<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/AeopWlDomesticLogisticsCompanyDTO.class.php');

class ApiQureyWlbDomesticLogisticsCompanyResult {

        	
    private $result;
    
        /**
    * @return 国内物流方式信息劣币怕
    */
        public function getResult() {
        return $this->result;
    }
    
    /**
     * 设置国内物流方式信息劣币怕     
     * @param array include @see AeopWlDomesticLogisticsCompanyDTO[] $result     
          
     * 此参数必填     */
    public function setResult(AeopWlDomesticLogisticsCompanyDTO $result) {
        $this->result = $result;
    }
    
        	
    private $success;
    
        /**
    * @return 调用是否成功
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置调用是否成功     
     * @param Boolean $success     
          
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
    }
    
        	
    private $errorDesc;
    
        /**
    * @return 调用报错信息
    */
        public function getErrorDesc() {
        return $this->errorDesc;
    }
    
    /**
     * 设置调用报错信息     
     * @param String $errorDesc     
          
     * 此参数必填     */
    public function setErrorDesc( $errorDesc) {
        $this->errorDesc = $errorDesc;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "result", $this->stdResult )) {
    			$resultResult=$this->stdResult->{"result"};
    				$object = json_decode ( json_encode ( $resultResult ), true );
					$this->result = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AeopWlDomesticLogisticsCompanyDTOResult=new AeopWlDomesticLogisticsCompanyDTO();
						$AeopWlDomesticLogisticsCompanyDTOResult->setArrayResult($arrayobject );
						$this->result [$i] = $AeopWlDomesticLogisticsCompanyDTOResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    				    			    			if (array_key_exists ( "errorDesc", $this->stdResult )) {
    				$this->errorDesc = $this->stdResult->{"errorDesc"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "result", $this->arrayResult )) {
    		$resultResult=$arrayResult['result'];
    			$this->result = AeopWlDomesticLogisticsCompanyDTO();
    			$this->result->$this->setStdResult ( $resultResult);
    		}
    		    	    			    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['success'];
    			}
    		    	    			    		    			if (array_key_exists ( "errorDesc", $this->arrayResult )) {
    			$this->errorDesc = $arrayResult['errorDesc'];
    			}
    		    	    		}

}
?>