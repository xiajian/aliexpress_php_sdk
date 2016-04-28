<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AeopLogisticsServiceResult extends SDKDomain {

       	
    private $logisticsCompany;
    
        /**
    * @return 物流公司
    */
        public function getLogisticsCompany() {
        return $this->logisticsCompany;
    }
    
    /**
     * 设置物流公司     
     * @param String $logisticsCompany     
     * 参数示例：<pre>CPAM</pre>     
     * 此参数必填     */
    public function setLogisticsCompany( $logisticsCompany) {
        $this->logisticsCompany = $logisticsCompany;
    }
    
        	
    private $displayName;
    
        /**
    * @return 展示名称
    */
        public function getDisplayName() {
        return $this->displayName;
    }
    
    /**
     * 设置展示名称     
     * @param String $displayName     
     * 参数示例：<pre>China Post Registered Air Mail</pre>     
     * 此参数必填     */
    public function setDisplayName( $displayName) {
        $this->displayName = $displayName;
    }
    
        	
    private $serviceName;
    
        /**
    * @return 物流服务key
    */
        public function getServiceName() {
        return $this->serviceName;
    }
    
    /**
     * 设置物流服务key     
     * @param String $serviceName     
     * 参数示例：<pre>CPAM</pre>     
     * 此参数必填     */
    public function setServiceName( $serviceName) {
        $this->serviceName = $serviceName;
    }
    
        	
    private $minProcessDay;
    
        /**
    * @return 最小处理时间
    */
        public function getMinProcessDay() {
        return $this->minProcessDay;
    }
    
    /**
     * 设置最小处理时间     
     * @param Integer $minProcessDay     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setMinProcessDay( $minProcessDay) {
        $this->minProcessDay = $minProcessDay;
    }
    
        	
    private $maxProcessDay;
    
        /**
    * @return 最大处理时间
    */
        public function getMaxProcessDay() {
        return $this->maxProcessDay;
    }
    
    /**
     * 设置最大处理时间     
     * @param Integer $maxProcessDay     
     * 参数示例：<pre>5</pre>     
     * 此参数必填     */
    public function setMaxProcessDay( $maxProcessDay) {
        $this->maxProcessDay = $maxProcessDay;
    }
    
        	
    private $trackingNoRegex;
    
        /**
    * @return 物流追踪号码校验规则，采用正则表达式
    */
        public function getTrackingNoRegex() {
        return $this->trackingNoRegex;
    }
    
    /**
     * 设置物流追踪号码校验规则，采用正则表达式     
     * @param String $trackingNoRegex     
     * 参数示例：<pre>^[a-zA-z]{2}[A-Za-z0-9]{9}[a-zA-z]{2}$</pre>     
     * 此参数必填     */
    public function setTrackingNoRegex( $trackingNoRegex) {
        $this->trackingNoRegex = $trackingNoRegex;
    }
    
        	
    private $recommendOrder;
    
        /**
    * @return 推荐显示排序
    */
        public function getRecommendOrder() {
        return $this->recommendOrder;
    }
    
    /**
     * 设置推荐显示排序     
     * @param Integer $recommendOrder     
     * 参数示例：<pre>110</pre>     
     * 此参数必填     */
    public function setRecommendOrder( $recommendOrder) {
        $this->recommendOrder = $recommendOrder;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "logisticsCompany", $this->stdResult )) {
    				$this->logisticsCompany = $this->stdResult->{"logisticsCompany"};
    			}
    			    		    				    			    			if (array_key_exists ( "displayName", $this->stdResult )) {
    				$this->displayName = $this->stdResult->{"displayName"};
    			}
    			    		    				    			    			if (array_key_exists ( "serviceName", $this->stdResult )) {
    				$this->serviceName = $this->stdResult->{"serviceName"};
    			}
    			    		    				    			    			if (array_key_exists ( "minProcessDay", $this->stdResult )) {
    				$this->minProcessDay = $this->stdResult->{"minProcessDay"};
    			}
    			    		    				    			    			if (array_key_exists ( "maxProcessDay", $this->stdResult )) {
    				$this->maxProcessDay = $this->stdResult->{"maxProcessDay"};
    			}
    			    		    				    			    			if (array_key_exists ( "trackingNoRegex", $this->stdResult )) {
    				$this->trackingNoRegex = $this->stdResult->{"trackingNoRegex"};
    			}
    			    		    				    			    			if (array_key_exists ( "recommendOrder", $this->stdResult )) {
    				$this->recommendOrder = $this->stdResult->{"recommendOrder"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "logisticsCompany", $this->arrayResult )) {
    			$this->logisticsCompany = $arrayResult['logisticsCompany'];
    			}
    		    	    			    		    			if (array_key_exists ( "displayName", $this->arrayResult )) {
    			$this->displayName = $arrayResult['displayName'];
    			}
    		    	    			    		    			if (array_key_exists ( "serviceName", $this->arrayResult )) {
    			$this->serviceName = $arrayResult['serviceName'];
    			}
    		    	    			    		    			if (array_key_exists ( "minProcessDay", $this->arrayResult )) {
    			$this->minProcessDay = $arrayResult['minProcessDay'];
    			}
    		    	    			    		    			if (array_key_exists ( "maxProcessDay", $this->arrayResult )) {
    			$this->maxProcessDay = $arrayResult['maxProcessDay'];
    			}
    		    	    			    		    			if (array_key_exists ( "trackingNoRegex", $this->arrayResult )) {
    			$this->trackingNoRegex = $arrayResult['trackingNoRegex'];
    			}
    		    	    			    		    			if (array_key_exists ( "recommendOrder", $this->arrayResult )) {
    			$this->recommendOrder = $arrayResult['recommendOrder'];
    			}
    		    	    		}
 
   
}
?>