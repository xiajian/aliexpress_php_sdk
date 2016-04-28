<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiFindAeProductStatusByIdResult {

        	
    private $productId;
    
        /**
    * @return 商品ID
    */
        public function getProductId() {
        return $this->productId;
    }
    
    /**
     * 设置商品ID     
     * @param Long $productId     
          
     * 此参数必填     */
    public function setProductId( $productId) {
        $this->productId = $productId;
    }
    
        	
    private $status;
    
        /**
    * @return 商品状态。审核通过:approved;审核中:auditing;审核不通过:refuse
    */
        public function getStatus() {
        return $this->status;
    }
    
    /**
     * 设置商品状态。审核通过:approved;审核中:auditing;审核不通过:refuse     
     * @param String $status     
          
     * 此参数必填     */
    public function setStatus( $status) {
        $this->status = $status;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "productId", $this->stdResult )) {
    				$this->productId = $this->stdResult->{"productId"};
    			}
    			    		    				    			    			if (array_key_exists ( "status", $this->stdResult )) {
    				$this->status = $this->stdResult->{"status"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "productId", $this->arrayResult )) {
    			$this->productId = $arrayResult['productId'];
    			}
    		    	    			    		    			if (array_key_exists ( "status", $this->arrayResult )) {
    			$this->status = $arrayResult['status'];
    			}
    		    	    		}

}
?>