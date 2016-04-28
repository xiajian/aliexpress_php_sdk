<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AeopOnlineLogisticsServiceResult extends SDKDomain {

       	
    private $logisticsServiceId;
    
        /**
    * @return 物流方案ID
    */
        public function getLogisticsServiceId() {
        return $this->logisticsServiceId;
    }
    
    /**
     * 设置物流方案ID     
     * @param String $logisticsServiceId     
     * 参数示例：<pre>CPAM_WLB_CPHSH</pre>     
     * 此参数必填     */
    public function setLogisticsServiceId( $logisticsServiceId) {
        $this->logisticsServiceId = $logisticsServiceId;
    }
    
        	
    private $logisticsServiceName;
    
        /**
    * @return 物流方案名称
    */
        public function getLogisticsServiceName() {
        return $this->logisticsServiceName;
    }
    
    /**
     * 设置物流方案名称     
     * @param String $logisticsServiceName     
     * 参数示例：<pre>速邮宝(中邮小包)</pre>     
     * 此参数必填     */
    public function setLogisticsServiceName( $logisticsServiceName) {
        $this->logisticsServiceName = $logisticsServiceName;
    }
    
        	
    private $logisticsTimeliness;
    
        /**
    * @return 运输时效
    */
        public function getLogisticsTimeliness() {
        return $this->logisticsTimeliness;
    }
    
    /**
     * 设置运输时效     
     * @param String $logisticsTimeliness     
     * 参数示例：<pre>15-50天</pre>     
     * 此参数必填     */
    public function setLogisticsTimeliness( $logisticsTimeliness) {
        $this->logisticsTimeliness = $logisticsTimeliness;
    }
    
        	
    private $deliveryAddress;
    
        /**
    * @return 交货地址
    */
        public function getDeliveryAddress() {
        return $this->deliveryAddress;
    }
    
    /**
     * 设置交货地址     
     * @param String $deliveryAddress     
     * 参数示例：<pre>上海市徐汇区百色路1218号生产大楼一层(速卖通)</pre>     
     * 此参数必填     */
    public function setDeliveryAddress( $deliveryAddress) {
        $this->deliveryAddress = $deliveryAddress;
    }
    
        	
    private $trialResult;
    
        /**
    * @return 试算结果
    */
        public function getTrialResult() {
        return $this->trialResult;
    }
    
    /**
     * 设置试算结果     
     * @param String $trialResult     
     * 参数示例：<pre>CN&yen;87.00</pre>     
     * 此参数必填     */
    public function setTrialResult( $trialResult) {
        $this->trialResult = $trialResult;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "logisticsServiceId", $this->stdResult )) {
    				$this->logisticsServiceId = $this->stdResult->{"logisticsServiceId"};
    			}
    			    		    				    			    			if (array_key_exists ( "logisticsServiceName", $this->stdResult )) {
    				$this->logisticsServiceName = $this->stdResult->{"logisticsServiceName"};
    			}
    			    		    				    			    			if (array_key_exists ( "logisticsTimeliness", $this->stdResult )) {
    				$this->logisticsTimeliness = $this->stdResult->{"logisticsTimeliness"};
    			}
    			    		    				    			    			if (array_key_exists ( "deliveryAddress", $this->stdResult )) {
    				$this->deliveryAddress = $this->stdResult->{"deliveryAddress"};
    			}
    			    		    				    			    			if (array_key_exists ( "trialResult", $this->stdResult )) {
    				$this->trialResult = $this->stdResult->{"trialResult"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "logisticsServiceId", $this->arrayResult )) {
    			$this->logisticsServiceId = $arrayResult['logisticsServiceId'];
    			}
    		    	    			    		    			if (array_key_exists ( "logisticsServiceName", $this->arrayResult )) {
    			$this->logisticsServiceName = $arrayResult['logisticsServiceName'];
    			}
    		    	    			    		    			if (array_key_exists ( "logisticsTimeliness", $this->arrayResult )) {
    			$this->logisticsTimeliness = $arrayResult['logisticsTimeliness'];
    			}
    		    	    			    		    			if (array_key_exists ( "deliveryAddress", $this->arrayResult )) {
    			$this->deliveryAddress = $arrayResult['deliveryAddress'];
    			}
    		    	    			    		    			if (array_key_exists ( "trialResult", $this->arrayResult )) {
    			$this->trialResult = $arrayResult['trialResult'];
    			}
    		    	    		}
 
   
}
?>