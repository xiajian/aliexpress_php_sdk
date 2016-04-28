<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class Summary extends SDKDomain {

       	
    private $productName;
    
        /**
    * @return 
    */
        public function getProductName() {
        return $this->productName;
    }
    
    /**
     * 设置     
     * @param String $productName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductName( $productName) {
        $this->productName = $productName;
    }
    
        	
    private $productImageUrl;
    
        /**
    * @return 
    */
        public function getProductImageUrl() {
        return $this->productImageUrl;
    }
    
    /**
     * 设置     
     * @param String $productImageUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductImageUrl( $productImageUrl) {
        $this->productImageUrl = $productImageUrl;
    }
    
        	
    private $productDetailUrl;
    
        /**
    * @return 
    */
        public function getProductDetailUrl() {
        return $this->productDetailUrl;
    }
    
    /**
     * 设置     
     * @param String $productDetailUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductDetailUrl( $productDetailUrl) {
        $this->productDetailUrl = $productDetailUrl;
    }
    
        	
    private $orderUrl;
    
        /**
    * @return 
    */
        public function getOrderUrl() {
        return $this->orderUrl;
    }
    
    /**
     * 设置     
     * @param String $orderUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderUrl( $orderUrl) {
        $this->orderUrl = $orderUrl;
    }
    
        	
    private $senderName;
    
        /**
    * @return 
    */
        public function getSenderName() {
        return $this->senderName;
    }
    
    /**
     * 设置     
     * @param String $senderName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSenderName( $senderName) {
        $this->senderName = $senderName;
    }
    
        	
    private $receiverName;
    
        /**
    * @return 
    */
        public function getReceiverName() {
        return $this->receiverName;
    }
    
    /**
     * 设置     
     * @param String $receiverName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setReceiverName( $receiverName) {
        $this->receiverName = $receiverName;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "productName", $this->stdResult )) {
    				$this->productName = $this->stdResult->{"productName"};
    			}
    			    		    				    			    			if (array_key_exists ( "productImageUrl", $this->stdResult )) {
    				$this->productImageUrl = $this->stdResult->{"productImageUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "productDetailUrl", $this->stdResult )) {
    				$this->productDetailUrl = $this->stdResult->{"productDetailUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "orderUrl", $this->stdResult )) {
    				$this->orderUrl = $this->stdResult->{"orderUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "senderName", $this->stdResult )) {
    				$this->senderName = $this->stdResult->{"senderName"};
    			}
    			    		    				    			    			if (array_key_exists ( "receiverName", $this->stdResult )) {
    				$this->receiverName = $this->stdResult->{"receiverName"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "productName", $this->arrayResult )) {
    			$this->productName = $arrayResult['productName'];
    			}
    		    	    			    		    			if (array_key_exists ( "productImageUrl", $this->arrayResult )) {
    			$this->productImageUrl = $arrayResult['productImageUrl'];
    			}
    		    	    			    		    			if (array_key_exists ( "productDetailUrl", $this->arrayResult )) {
    			$this->productDetailUrl = $arrayResult['productDetailUrl'];
    			}
    		    	    			    		    			if (array_key_exists ( "orderUrl", $this->arrayResult )) {
    			$this->orderUrl = $arrayResult['orderUrl'];
    			}
    		    	    			    		    			if (array_key_exists ( "senderName", $this->arrayResult )) {
    			$this->senderName = $arrayResult['senderName'];
    			}
    		    	    			    		    			if (array_key_exists ( "receiverName", $this->arrayResult )) {
    			$this->receiverName = $arrayResult['receiverName'];
    			}
    		    	    		}
 
   
}
?>