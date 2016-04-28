<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/IssueAPIDetailDTO.class.php');

class ApiQueryIssueDetailResult {

        	
    private $data;
    
        /**
    * @return 
    */
        public function getData() {
        return $this->data;
    }
    
    /**
     * 设置     
     * @param IssueAPIDetailDTO $data     
          
     * 此参数必填     */
    public function setData(IssueAPIDetailDTO $data) {
        $this->data = $data;
    }
    
        	
    private $success;
    
        /**
    * @return 是否成功
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置是否成功     
     * @param Boolean $success     
          
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
    }
    
        	
    private $code;
    
        /**
    * @return 错误码，当success=false时有值
    */
        public function getCode() {
        return $this->code;
    }
    
    /**
     * 设置错误码，当success=false时有值     
     * @param String $code     
          
     * 此参数必填     */
    public function setCode( $code) {
        $this->code = $code;
    }
    
        	
    private $msg;
    
        /**
    * @return 错误原因，当success=false时有值
    */
        public function getMsg() {
        return $this->msg;
    }
    
    /**
     * 设置错误原因，当success=false时有值     
     * @param String $msg     
          
     * 此参数必填     */
    public function setMsg( $msg) {
        $this->msg = $msg;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "data", $this->stdResult )) {
    				$dataResult=$this->stdResult->{"data"};
    				$this->data = new IssueAPIDetailDTO();
    				$this->data->setStdResult ( $dataResult);
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
				    		    		if (array_key_exists ( "data", $this->arrayResult )) {
    		$dataResult=$arrayResult['data'];
    			    			$this->data = new IssueAPIDetailDTO();
    			    			$this->data->$this->setStdResult ( $dataResult);
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