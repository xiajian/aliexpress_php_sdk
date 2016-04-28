<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/AeopLogisticsWarehouseOrderResult.class.php');

class ApiGetOnlineLogisticsInfoResult {

        	
    private $result;
    
        /**
    * @return 物流订单详细信息列表
    */
        public function getResult() {
        return $this->result;
    }
    
    /**
     * 设置物流订单详细信息列表     
     * @param array include @see AeopLogisticsWarehouseOrderResult[] $result     
          
     * 此参数必填     */
    public function setResult(AeopLogisticsWarehouseOrderResult $result) {
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
    
        	
    private $currentPage;
    
        /**
    * @return 当前页数
    */
        public function getCurrentPage() {
        return $this->currentPage;
    }
    
    /**
     * 设置当前页数     
     * @param Integer $currentPage     
          
     * 此参数必填     */
    public function setCurrentPage( $currentPage) {
        $this->currentPage = $currentPage;
    }
    
        	
    private $totalPage;
    
        /**
    * @return 总页数
    */
        public function getTotalPage() {
        return $this->totalPage;
    }
    
    /**
     * 设置总页数     
     * @param Integer $totalPage     
          
     * 此参数必填     */
    public function setTotalPage( $totalPage) {
        $this->totalPage = $totalPage;
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
						$AeopLogisticsWarehouseOrderResultResult=new AeopLogisticsWarehouseOrderResult();
						$AeopLogisticsWarehouseOrderResultResult->setArrayResult($arrayobject );
						$this->result [$i] = $AeopLogisticsWarehouseOrderResultResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    				    			    			if (array_key_exists ( "currentPage", $this->stdResult )) {
    				$this->currentPage = $this->stdResult->{"currentPage"};
    			}
    			    		    				    			    			if (array_key_exists ( "totalPage", $this->stdResult )) {
    				$this->totalPage = $this->stdResult->{"totalPage"};
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
    			$this->result = AeopLogisticsWarehouseOrderResult();
    			$this->result->$this->setStdResult ( $resultResult);
    		}
    		    	    			    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['success'];
    			}
    		    	    			    		    			if (array_key_exists ( "currentPage", $this->arrayResult )) {
    			$this->currentPage = $arrayResult['currentPage'];
    			}
    		    	    			    		    			if (array_key_exists ( "totalPage", $this->arrayResult )) {
    			$this->totalPage = $arrayResult['totalPage'];
    			}
    		    	    			    		    			if (array_key_exists ( "errorDesc", $this->arrayResult )) {
    			$this->errorDesc = $arrayResult['errorDesc'];
    			}
    		    	    		}

}
?>