<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiEditSingleSkuPriceResult {

        	
    private $modifyCount;
    
        /**
    * @return 修改的产品数。如果接口调用成功，则这个值为1，调用失败则为0。
    */
        public function getModifyCount() {
        return $this->modifyCount;
    }
    
    /**
     * 设置修改的产品数。如果接口调用成功，则这个值为1，调用失败则为0。     
     * @param Integer $modifyCount     
          
     * 此参数必填     */
    public function setModifyCount( $modifyCount) {
        $this->modifyCount = $modifyCount;
    }
    
        	
    private $productId;
    
        /**
    * @return 产品ID
    */
        public function getProductId() {
        return $this->productId;
    }
    
    /**
     * 设置产品ID     
     * @param Long $productId     
          
     * 此参数必填     */
    public function setProductId( $productId) {
        $this->productId = $productId;
    }
    
        	
    private $success;
    
        /**
    * @return 接口调用结果.
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置接口调用结果.     
     * @param Boolean $success     
          
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "modifyCount", $this->stdResult )) {
    				$this->modifyCount = $this->stdResult->{"modifyCount"};
    			}
    			    		    				    			    			if (array_key_exists ( "productId", $this->stdResult )) {
    				$this->productId = $this->stdResult->{"productId"};
    			}
    			    		    				    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "modifyCount", $this->arrayResult )) {
    			$this->modifyCount = $arrayResult['modifyCount'];
    			}
    		    	    			    		    			if (array_key_exists ( "productId", $this->arrayResult )) {
    			$this->productId = $arrayResult['productId'];
    			}
    		    	    			    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['success'];
    			}
    		    	    		}

}
?>