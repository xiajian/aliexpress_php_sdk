<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class Currency extends SDKDomain {

       	
    private $defaultFractionDigits;
    
        /**
    * @return 默认分数
    */
        public function getDefaultFractionDigits() {
        return $this->defaultFractionDigits;
    }
    
    /**
     * 设置默认分数     
     * @param Integer $defaultFractionDigits     
     * 参数示例：<pre>2</pre>     
     * 此参数必填     */
    public function setDefaultFractionDigits( $defaultFractionDigits) {
        $this->defaultFractionDigits = $defaultFractionDigits;
    }
    
        	
    private $currencyCode;
    
        /**
    * @return 币种
    */
        public function getCurrencyCode() {
        return $this->currencyCode;
    }
    
    /**
     * 设置币种     
     * @param String $currencyCode     
     * 参数示例：<pre>USD</pre>     
     * 此参数必填     */
    public function setCurrencyCode( $currencyCode) {
        $this->currencyCode = $currencyCode;
    }
    
        	
    private $symbol;
    
        /**
    * @return 币种符号
    */
        public function getSymbol() {
        return $this->symbol;
    }
    
    /**
     * 设置币种符号     
     * @param String $symbol     
     * 参数示例：<pre>$</pre>     
     * 此参数必填     */
    public function setSymbol( $symbol) {
        $this->symbol = $symbol;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "defaultFractionDigits", $this->stdResult )) {
    				$this->defaultFractionDigits = $this->stdResult->{"defaultFractionDigits"};
    			}
    			    		    				    			    			if (array_key_exists ( "currencyCode", $this->stdResult )) {
    				$this->currencyCode = $this->stdResult->{"currencyCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "symbol", $this->stdResult )) {
    				$this->symbol = $this->stdResult->{"symbol"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "defaultFractionDigits", $this->arrayResult )) {
    			$this->defaultFractionDigits = $arrayResult['defaultFractionDigits'];
    			}
    		    	    			    		    			if (array_key_exists ( "currencyCode", $this->arrayResult )) {
    			$this->currencyCode = $arrayResult['currencyCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "symbol", $this->arrayResult )) {
    			$this->symbol = $arrayResult['symbol'];
    			}
    		    	    		}
 
   
}
?>