<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/Money.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/Money.class.php');

class AeopFreightCalculateResultDTO extends SDKDomain {

       	
    private $errorCode;
    
        /**
    * @return 错误代码
    */
        public function getErrorCode() {
        return $this->errorCode;
    }
    
    /**
     * 设置错误代码     
     * @param Integer $errorCode     
     * 参数示例：<pre>1表示没有错误；-1表示参数不完整；-2表示计算限制，无法计算结果；-3表示货币错误或转换错误；-4表示无有效的运费头数据；-5表示无有效的运费数据
-6表示卖家设置的全局不支持的国家；-7表示不支持的国家；-8表示商品小于起购量；-9表示大小包由于纠纷限制；-10表示产品在搜索中不存在；-11表示商品重量大于卖家设置的重量区间结束值；
-12表示商品或国家满足不支持的规则；-100表示其他错误</pre>     
     * 此参数必填     */
    public function setErrorCode( $errorCode) {
        $this->errorCode = $errorCode;
    }
    
        	
    private $serviceName;
    
        /**
    * @return 物流方式名称
    */
        public function getServiceName() {
        return $this->serviceName;
    }
    
    /**
     * 设置物流方式名称     
     * @param String $serviceName     
     * 参数示例：<pre>CPAM</pre>     
     * 此参数必填     */
    public function setServiceName( $serviceName) {
        $this->serviceName = $serviceName;
    }
    
        	
    private $freight;
    
        /**
    * @return 实际运费值
    */
        public function getFreight() {
        return $this->freight;
    }
    
    /**
     * 设置实际运费值     
     * @param Money $freight     
     * 参数示例：<pre>{&quot;cent&quot;:677,&quot;amount&quot;:6.77,&quot;currencyCode&quot;:&quot;USD&quot;}</pre>     
     * 此参数必填     */
    public function setFreight(Money $freight) {
        $this->freight = $freight;
    }
    
        	
    private $standardFreight;
    
        /**
    * @return 标准运费值
    */
        public function getStandardFreight() {
        return $this->standardFreight;
    }
    
    /**
     * 设置标准运费值     
     * @param Money $standardFreight     
     * 参数示例：<pre>{&quot;cent&quot;:677,&quot;amount&quot;:6.77,&quot;currencyCode&quot;:&quot;USD&quot;}</pre>     
     * 此参数必填     */
    public function setStandardFreight(Money $standardFreight) {
        $this->standardFreight = $standardFreight;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "errorCode", $this->stdResult )) {
    				$this->errorCode = $this->stdResult->{"errorCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "serviceName", $this->stdResult )) {
    				$this->serviceName = $this->stdResult->{"serviceName"};
    			}
    			    		    				    			    			if (array_key_exists ( "freight", $this->stdResult )) {
    				$freightResult=$this->stdResult->{"freight"};
    				$this->freight = new Money();
    				$this->freight->setStdResult ( $freightResult);
    			}
    			    		    				    			    			if (array_key_exists ( "standardFreight", $this->stdResult )) {
    				$standardFreightResult=$this->stdResult->{"standardFreight"};
    				$this->standardFreight = new Money();
    				$this->standardFreight->setStdResult ( $standardFreightResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "errorCode", $this->arrayResult )) {
    			$this->errorCode = $arrayResult['errorCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "serviceName", $this->arrayResult )) {
    			$this->serviceName = $arrayResult['serviceName'];
    			}
    		    	    			    		    		if (array_key_exists ( "freight", $this->arrayResult )) {
    		$freightResult=$arrayResult['freight'];
    			    			$this->freight = new Money();
    			    			$this->freight->$this->setStdResult ( $freightResult);
    		}
    		    	    			    		    		if (array_key_exists ( "standardFreight", $this->arrayResult )) {
    		$standardFreightResult=$arrayResult['standardFreight'];
    			    			$this->standardFreight = new Money();
    			    			$this->standardFreight->$this->setStdResult ( $standardFreightResult);
    		}
    		    	    		}
 
   
}
?>