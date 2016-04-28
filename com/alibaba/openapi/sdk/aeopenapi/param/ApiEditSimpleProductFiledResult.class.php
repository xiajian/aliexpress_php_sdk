<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiEditSimpleProductFiledResult {

        	
    private $productId;
    
        /**
    * @return 产品ID
    */
        public function getProductId() {
        return $this->productId;
    }
    
    /**
     * 设置产品ID     
     * @param String $productId     
          
     * 此参数必填     */
    public function setProductId( $productId) {
        $this->productId = $productId;
    }
    
        	
    private $modifyCount;
    
        /**
    * @return 修改的产品数
    */
        public function getModifyCount() {
        return $this->modifyCount;
    }
    
    /**
     * 设置修改的产品数     
     * @param Integer $modifyCount     
          
     * 此参数必填     */
    public function setModifyCount( $modifyCount) {
        $this->modifyCount = $modifyCount;
    }
    
        	
    private $success;
    
        /**
    * @return 接口的调用结果。true/false分别表示成功和失败。
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置接口的调用结果。true/false分别表示成功和失败。     
     * @param Boolean $success     
          
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "productId", $this->stdResult )) {
    				$this->productId = $this->stdResult->{"productId"};
    			}
    			    		    				    			    			if (array_key_exists ( "modifyCount", $this->stdResult )) {
    				$this->modifyCount = $this->stdResult->{"modifyCount"};
    			}
    			    		    				    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "productId", $this->arrayResult )) {
    			$this->productId = $arrayResult['productId'];
    			}
    		    	    			    		    			if (array_key_exists ( "modifyCount", $this->arrayResult )) {
    			$this->modifyCount = $arrayResult['modifyCount'];
    			}
    		    	    			    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['success'];
    			}
    		    	    		}

}
?>