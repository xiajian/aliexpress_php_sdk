<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/Currency.class.php');

class TradeMoney extends SDKDomain {

       	
    private $amount;
    
        /**
    * @return 金额
    */
        public function getAmount() {
        return $this->amount;
    }
    
    /**
     * 设置金额     
     * @param String $amount     
     * 参数示例：<pre>100</pre>     
     * 此参数必填     */
    public function setAmount( $amount) {
        $this->amount = $amount;
    }
    
        	
    private $cent;
    
        /**
    * @return 分
    */
        public function getCent() {
        return $this->cent;
    }
    
    /**
     * 设置分     
     * @param Long $cent     
     * 参数示例：<pre>10000</pre>     
     * 此参数必填     */
    public function setCent( $cent) {
        $this->cent = $cent;
    }
    
        	
    private $currencyCode;
    
        /**
    * @return 币种USD/RUB
    */
        public function getCurrencyCode() {
        return $this->currencyCode;
    }
    
    /**
     * 设置币种USD/RUB     
     * @param String $currencyCode     
     * 参数示例：<pre>USD</pre>     
     * 此参数必填     */
    public function setCurrencyCode( $currencyCode) {
        $this->currencyCode = $currencyCode;
    }
    
        	
    private $currency;
    
        /**
    * @return 
    */
        public function getCurrency() {
        return $this->currency;
    }
    
    /**
     * 设置     
     * @param Currency $currency     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCurrency(Currency $currency) {
        $this->currency = $currency;
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
    			    		    				    			    			if (array_key_exists ( "currency", $this->stdResult )) {
    				$currencyResult=$this->stdResult->{"currency"};
    				$this->currency = new Currency();
    				$this->currency->setStdResult ( $currencyResult);
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
    		    	    			    		    		if (array_key_exists ( "currency", $this->arrayResult )) {
    		$currencyResult=$arrayResult['currency'];
    			    			$this->currency = new Currency();
    			    			$this->currency->$this->setStdResult ( $currencyResult);
    		}
    		    	    		}
 
   
}
?>