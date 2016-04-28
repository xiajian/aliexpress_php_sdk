<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class RequestLoanResult extends SDKDomain {

       	
    private $memo;
    
        /**
    * @return 返回的备注信息，当为上传附件时 ，memo就是附件的路径
    */
        public function getMemo() {
        return $this->memo;
    }
    
    /**
     * 设置返回的备注信息，当为上传附件时 ，memo就是附件的路径     
     * @param String $memo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMemo( $memo) {
        $this->memo = $memo;
    }
    
        	
    private $resultCode;
    
        /**
    * @return 错误码，200表示成功
    */
        public function getResultCode() {
        return $this->resultCode;
    }
    
    /**
     * 设置错误码，200表示成功     
     * @param Integer $resultCode     
     * 参数示例：<pre>200</pre>     
     * 此参数必填     */
    public function setResultCode( $resultCode) {
        $this->resultCode = $resultCode;
    }
    
        	
    private $success;
    
        /**
    * @return 请求放款是否成功
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置请求放款是否成功     
     * @param Boolean $success     
     * 参数示例：<pre>false</pre>     
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "memo", $this->stdResult )) {
    				$this->memo = $this->stdResult->{"memo"};
    			}
    			    		    				    			    			if (array_key_exists ( "resultCode", $this->stdResult )) {
    				$this->resultCode = $this->stdResult->{"resultCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "memo", $this->arrayResult )) {
    			$this->memo = $arrayResult['memo'];
    			}
    		    	    			    		    			if (array_key_exists ( "resultCode", $this->arrayResult )) {
    			$this->resultCode = $arrayResult['resultCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['success'];
    			}
    		    	    		}
 
   
}
?>