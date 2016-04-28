<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class OperationResult extends SDKDomain {

       	
    private $errorCode;
    
        /**
    * @return 错误码：100 无此订单,601 帐号无权限,200 业务数据错误，无对应的业务数据,201 业务数据错误无法执行此操作
    */
        public function getErrorCode() {
        return $this->errorCode;
    }
    
    /**
     * 设置错误码：100 无此订单,601 帐号无权限,200 业务数据错误，无对应的业务数据,201 业务数据错误无法执行此操作     
     * @param Integer $errorCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setErrorCode( $errorCode) {
        $this->errorCode = $errorCode;
    }
    
        	
    private $memo;
    
        /**
    * @return 详细说明
    */
        public function getMemo() {
        return $this->memo;
    }
    
    /**
     * 设置详细说明     
     * @param String $memo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMemo( $memo) {
        $this->memo = $memo;
    }
    
        	
    private $success;
    
        /**
    * @return 是否成功true/false
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置是否成功true/false     
     * @param Boolean $success     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "errorCode", $this->stdResult )) {
    				$this->errorCode = $this->stdResult->{"errorCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "memo", $this->stdResult )) {
    				$this->memo = $this->stdResult->{"memo"};
    			}
    			    		    				    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "errorCode", $this->arrayResult )) {
    			$this->errorCode = $arrayResult['errorCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "memo", $this->arrayResult )) {
    			$this->memo = $arrayResult['memo'];
    			}
    		    	    			    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['success'];
    			}
    		    	    		}
 
   
}
?>