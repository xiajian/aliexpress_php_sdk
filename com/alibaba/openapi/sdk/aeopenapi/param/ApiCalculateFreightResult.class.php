<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/AeopFreightCalculateResultDTO.class.php');

class ApiCalculateFreightResult {

        	
    private $aeopFreightCalculateResultDTOList;
    
        /**
    * @return 运费计算结果列表
    */
        public function getAeopFreightCalculateResultDTOList() {
        return $this->aeopFreightCalculateResultDTOList;
    }
    
    /**
     * 设置运费计算结果列表     
     * @param array include @see AeopFreightCalculateResultDTO[] $aeopFreightCalculateResultDTOList     
          
     * 此参数必填     */
    public function setAeopFreightCalculateResultDTOList(AeopFreightCalculateResultDTO $aeopFreightCalculateResultDTOList) {
        $this->aeopFreightCalculateResultDTOList = $aeopFreightCalculateResultDTOList;
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
					    			    			if (array_key_exists ( "aeopFreightCalculateResultDTOList", $this->stdResult )) {
    			$aeopFreightCalculateResultDTOListResult=$this->stdResult->{"aeopFreightCalculateResultDTOList"};
    				$object = json_decode ( json_encode ( $aeopFreightCalculateResultDTOListResult ), true );
					$this->aeopFreightCalculateResultDTOList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AeopFreightCalculateResultDTOResult=new AeopFreightCalculateResultDTO();
						$AeopFreightCalculateResultDTOResult->setArrayResult($arrayobject );
						$this->aeopFreightCalculateResultDTOList [$i] = $AeopFreightCalculateResultDTOResult;
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
				    		    		if (array_key_exists ( "aeopFreightCalculateResultDTOList", $this->arrayResult )) {
    		$aeopFreightCalculateResultDTOListResult=$arrayResult['aeopFreightCalculateResultDTOList'];
    			$this->aeopFreightCalculateResultDTOList = AeopFreightCalculateResultDTO();
    			$this->aeopFreightCalculateResultDTOList->$this->setStdResult ( $aeopFreightCalculateResultDTOListResult);
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