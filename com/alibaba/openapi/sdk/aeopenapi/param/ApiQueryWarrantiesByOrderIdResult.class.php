<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/WarrantyDetailApiDTO.class.php');

class ApiQueryWarrantiesByOrderIdResult {

        	
    private $dataList;
    
        /**
    * @return 保修数据
    */
        public function getDataList() {
        return $this->dataList;
    }
    
    /**
     * 设置保修数据     
     * @param array include @see WarrantyDetailApiDTO[] $dataList     
          
     * 此参数必填     */
    public function setDataList(WarrantyDetailApiDTO $dataList) {
        $this->dataList = $dataList;
    }
    
        	
    private $success;
    
        /**
    * @return 操作结果
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置操作结果     
     * @param Boolean $success     
          
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
    }
    
        	
    private $code;
    
        /**
    * @return 错误码，当success=false时存在
    */
        public function getCode() {
        return $this->code;
    }
    
    /**
     * 设置错误码，当success=false时存在     
     * @param String $code     
          
     * 此参数必填     */
    public function setCode( $code) {
        $this->code = $code;
    }
    
        	
    private $msg;
    
        /**
    * @return 错误描述，当success=false时存在
    */
        public function getMsg() {
        return $this->msg;
    }
    
    /**
     * 设置错误描述，当success=false时存在     
     * @param String $msg     
          
     * 此参数必填     */
    public function setMsg( $msg) {
        $this->msg = $msg;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "dataList", $this->stdResult )) {
    			$dataListResult=$this->stdResult->{"dataList"};
    				$object = json_decode ( json_encode ( $dataListResult ), true );
					$this->dataList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$WarrantyDetailApiDTOResult=new WarrantyDetailApiDTO();
						$WarrantyDetailApiDTOResult->setArrayResult($arrayobject );
						$this->dataList [$i] = $WarrantyDetailApiDTOResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    				    			    			if (array_key_exists ( "code", $this->stdResult )) {
    				$this->code = $this->stdResult->{"code"};
    			}
    			    		    				    			    			if (array_key_exists ( "msg", $this->stdResult )) {
    				$this->msg = $this->stdResult->{"msg"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "dataList", $this->arrayResult )) {
    		$dataListResult=$arrayResult['dataList'];
    			$this->dataList = WarrantyDetailApiDTO();
    			$this->dataList->$this->setStdResult ( $dataListResult);
    		}
    		    	    			    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['success'];
    			}
    		    	    			    		    			if (array_key_exists ( "code", $this->arrayResult )) {
    			$this->code = $arrayResult['code'];
    			}
    		    	    			    		    			if (array_key_exists ( "msg", $this->arrayResult )) {
    			$this->msg = $arrayResult['msg'];
    			}
    		    	    		}

}
?>