<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/AeopOnlineLogisticsServiceResult.class.php');

class ApiGetOnlineLogisticsServiceListByOrderIdResult {

        	
    private $result;
    
        /**
    * @return 支持的线上发货物流方式
    */
        public function getResult() {
        return $this->result;
    }
    
    /**
     * 设置支持的线上发货物流方式     
     * @param array include @see AeopOnlineLogisticsServiceResult[] $result     
          
     * 此参数必填     */
    public function setResult(AeopOnlineLogisticsServiceResult $result) {
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
    * @return 调用出错信息
    */
        public function getErrorDesc() {
        return $this->errorDesc;
    }
    
    /**
     * 设置调用出错信息     
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
						$AeopOnlineLogisticsServiceResultResult=new AeopOnlineLogisticsServiceResult();
						$AeopOnlineLogisticsServiceResultResult->setArrayResult($arrayobject );
						$this->result [$i] = $AeopOnlineLogisticsServiceResultResult;
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
    			$this->result = AeopOnlineLogisticsServiceResult();
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