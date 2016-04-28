<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class IssueMoney extends SDKDomain {

       	
    private $amount;
    
        /**
    * @return 金额，单位元
    */
        public function getAmount() {
        return $this->amount;
    }
    
    /**
     * 设置金额，单位元     
     * @param Double $amount     
     * 参数示例：<pre>12.31</pre>     
     * 此参数必填     */
    public function setAmount( $amount) {
        $this->amount = $amount;
    }
    
        	
    private $cent;
    
        /**
    * @return 金额，单位分
    */
        public function getCent() {
        return $this->cent;
    }
    
    /**
     * 设置金额，单位分     
     * @param Long $cent     
     * 参数示例：<pre>1231</pre>     
     * 此参数必填     */
    public function setCent( $cent) {
        $this->cent = $cent;
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
    
        	
    private $centFactor;
    
        /**
    * @return 元/分换算比例
    */
        public function getCentFactor() {
        return $this->centFactor;
    }
    
    /**
     * 设置元/分换算比例     
     * @param Integer $centFactor     
     * 参数示例：<pre>100</pre>     
     * 此参数必填     */
    public function setCentFactor( $centFactor) {
        $this->centFactor = $centFactor;
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
    			    		    				    			    			if (array_key_exists ( "centFactor", $this->stdResult )) {
    				$this->centFactor = $this->stdResult->{"centFactor"};
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
    		    	    			    		    			if (array_key_exists ( "centFactor", $this->arrayResult )) {
    			$this->centFactor = $arrayResult['centFactor'];
    			}
    		    	    		}
 
   
}
?>