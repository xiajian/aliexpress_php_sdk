<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AeopTrackingDetailResult extends SDKDomain {

       	
    private $eventDate;
    
        /**
    * @return 时间
    */
        public function getEventDate() {
        return $this->eventDate;
    }
    
    /**
     * 设置时间     
     * @param Date $eventDate     
     * 参数示例：<pre>2015-09-15 12:12:00</pre>     
     * 此参数必填     */
    public function setEventDate( $eventDate) {
        $this->eventDate = $eventDate;
    }
    
        	
    private $eventDesc;
    
        /**
    * @return 描述
    */
        public function getEventDesc() {
        return $this->eventDesc;
    }
    
    /**
     * 设置描述     
     * @param String $eventDesc     
     * 参数示例：<pre>BILLING INFORMATION RECEIVED</pre>     
     * 此参数必填     */
    public function setEventDesc( $eventDesc) {
        $this->eventDesc = $eventDesc;
    }
    
        	
    private $address;
    
        /**
    * @return 地址
    */
        public function getAddress() {
        return $this->address;
    }
    
    /**
     * 设置地址     
     * @param String $address     
     * 参数示例：<pre>RE</pre>     
     * 此参数必填     */
    public function setAddress( $address) {
        $this->address = $address;
    }
    
        	
    private $signedName;
    
        /**
    * @return 签收人名
    */
        public function getSignedName() {
        return $this->signedName;
    }
    
    /**
     * 设置签收人名     
     * @param String $signedName     
     * 参数示例：<pre>Mr LI</pre>     
     * 此参数必填     */
    public function setSignedName( $signedName) {
        $this->signedName = $signedName;
    }
    
        	
    private $status;
    
        /**
    * @return 状态
    */
        public function getStatus() {
        return $this->status;
    }
    
    /**
     * 设置状态     
     * @param String $status     
     * 参数示例：<pre>TR</pre>     
     * 此参数必填     */
    public function setStatus( $status) {
        $this->status = $status;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "eventDate", $this->stdResult )) {
    				$this->eventDate = $this->stdResult->{"eventDate"};
    			}
    			    		    				    			    			if (array_key_exists ( "eventDesc", $this->stdResult )) {
    				$this->eventDesc = $this->stdResult->{"eventDesc"};
    			}
    			    		    				    			    			if (array_key_exists ( "address", $this->stdResult )) {
    				$this->address = $this->stdResult->{"address"};
    			}
    			    		    				    			    			if (array_key_exists ( "signedName", $this->stdResult )) {
    				$this->signedName = $this->stdResult->{"signedName"};
    			}
    			    		    				    			    			if (array_key_exists ( "status", $this->stdResult )) {
    				$this->status = $this->stdResult->{"status"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "eventDate", $this->arrayResult )) {
    			$this->eventDate = $arrayResult['eventDate'];
    			}
    		    	    			    		    			if (array_key_exists ( "eventDesc", $this->arrayResult )) {
    			$this->eventDesc = $arrayResult['eventDesc'];
    			}
    		    	    			    		    			if (array_key_exists ( "address", $this->arrayResult )) {
    			$this->address = $arrayResult['address'];
    			}
    		    	    			    		    			if (array_key_exists ( "signedName", $this->arrayResult )) {
    			$this->signedName = $arrayResult['signedName'];
    			}
    		    	    			    		    			if (array_key_exists ( "status", $this->arrayResult )) {
    			$this->status = $arrayResult['status'];
    			}
    		    	    		}
 
   
}
?>