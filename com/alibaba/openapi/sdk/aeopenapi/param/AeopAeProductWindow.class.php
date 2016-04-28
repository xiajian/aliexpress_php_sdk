<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AeopAeProductWindow extends SDKDomain {

       	
    private $productId;
    
        /**
    * @return 被推荐的产品ID
    */
        public function getProductId() {
        return $this->productId;
    }
    
    /**
     * 设置被推荐的产品ID     
     * @param Long $productId     
     * 参数示例：<pre>1234</pre>     
     * 此参数必填     */
    public function setProductId( $productId) {
        $this->productId = $productId;
    }
    
        	
    private $enabledDate;
    
        /**
    * @return 橱窗的开始生效时间。
    */
        public function getEnabledDate() {
        return $this->enabledDate;
    }
    
    /**
     * 设置橱窗的开始生效时间。     
     * @param Date $enabledDate     
     * 参数示例：<pre>20150423224923499-0700</pre>     
     * 此参数必填     */
    public function setEnabledDate( $enabledDate) {
        $this->enabledDate = $enabledDate;
    }
    
        	
    private $expiredDate;
    
        /**
    * @return 橱窗的失效时间。
    */
        public function getExpiredDate() {
        return $this->expiredDate;
    }
    
    /**
     * 设置橱窗的失效时间。     
     * @param Date $expiredDate     
     * 参数示例：<pre>20150423224923499-0700</pre>     
     * 此参数必填     */
    public function setExpiredDate( $expiredDate) {
        $this->expiredDate = $expiredDate;
    }
    
        	
    private $remainingDays;
    
        /**
    * @return 当前橱窗的剩余有效天数。
    */
        public function getRemainingDays() {
        return $this->remainingDays;
    }
    
    /**
     * 设置当前橱窗的剩余有效天数。     
     * @param Long $remainingDays     
     * 参数示例：<pre>3</pre>     
     * 此参数必填     */
    public function setRemainingDays( $remainingDays) {
        $this->remainingDays = $remainingDays;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "productId", $this->stdResult )) {
    				$this->productId = $this->stdResult->{"productId"};
    			}
    			    		    				    			    			if (array_key_exists ( "enabledDate", $this->stdResult )) {
    				$this->enabledDate = $this->stdResult->{"enabledDate"};
    			}
    			    		    				    			    			if (array_key_exists ( "expiredDate", $this->stdResult )) {
    				$this->expiredDate = $this->stdResult->{"expiredDate"};
    			}
    			    		    				    			    			if (array_key_exists ( "remainingDays", $this->stdResult )) {
    				$this->remainingDays = $this->stdResult->{"remainingDays"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "productId", $this->arrayResult )) {
    			$this->productId = $arrayResult['productId'];
    			}
    		    	    			    		    			if (array_key_exists ( "enabledDate", $this->arrayResult )) {
    			$this->enabledDate = $arrayResult['enabledDate'];
    			}
    		    	    			    		    			if (array_key_exists ( "expiredDate", $this->arrayResult )) {
    			$this->expiredDate = $arrayResult['expiredDate'];
    			}
    		    	    			    		    			if (array_key_exists ( "remainingDays", $this->arrayResult )) {
    			$this->remainingDays = $arrayResult['remainingDays'];
    			}
    		    	    		}
 
   
}
?>