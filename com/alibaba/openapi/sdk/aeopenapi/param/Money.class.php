<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class Money extends SDKDomain {

       	
    private $amount;
    
        /**
    * @return 
    */
        public function getAmount() {
        return $this->amount;
    }
    
    /**
     * 设置     
     * @param Double $amount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAmount( $amount) {
        $this->amount = $amount;
    }
    
        	
    private $cent;
    
        /**
    * @return 
    */
        public function getCent() {
        return $this->cent;
    }
    
    /**
     * 设置     
     * @param Long $cent     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCent( $cent) {
        $this->cent = $cent;
    }
    
        	
    private $currencyCode;
    
        /**
    * @return 
    */
        public function getCurrencyCode() {
        return $this->currencyCode;
    }
    
    /**
     * 设置     
     * @param String $currencyCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCurrencyCode( $currencyCode) {
        $this->currencyCode = $currencyCode;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "amount", $this->stdResult )) {
    				$this->amount = $this->stdResult->{"amount"};
    			}
    			    		    				    			    			if (array_key_exists ( "cent", $this->stdResult )) {
    				$this->cent = $this->stdResult->{"cent"};
    			}
    			    		    				    			    			if (array_key_exists ( "currencyCode", $this->stdResult )) {
    				$this->currencyCode = $this->stdResult->{"currencyCode"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "amount", $this->arrayResult )) {
    			$this->amount = $arrayResult['amount'];
    			}
    		    	    			    		    			if (array_key_exists ( "cent", $this->arrayResult )) {
    			$this->cent = $arrayResult['cent'];
    			}
    		    	    			    		    			if (array_key_exists ( "currencyCode", $this->arrayResult )) {
    			$this->currencyCode = $arrayResult['currencyCode'];
    			}
    		    	    		}
 
   
}
?>