<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AeopAnouncementDTO extends SDKDomain {

       	
    private $anouncementId;
    
        /**
    * @return 公告id
    */
        public function getAnouncementId() {
        return $this->anouncementId;
    }
    
    /**
     * 设置公告id     
     * @param String $anouncementId     
     * 参数示例：<pre>12222222</pre>     
     * 此参数必填     */
    public function setAnouncementId( $anouncementId) {
        $this->anouncementId = $anouncementId;
    }
    
        	
    private $businessType;
    
        /**
    * @return 业务类型
    */
        public function getBusinessType() {
        return $this->businessType;
    }
    
    /**
     * 设置业务类型     
     * @param String $businessType     
     * 参数示例：<pre>放款</pre>     
     * 此参数必填     */
    public function setBusinessType( $businessType) {
        $this->businessType = $businessType;
    }
    
        	
    private $createDatetime;
    
        /**
    * @return 公告时间
    */
        public function getCreateDatetime() {
        return $this->createDatetime;
    }
    
    /**
     * 设置公告时间     
     * @param String $createDatetime     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCreateDatetime( $createDatetime) {
        $this->createDatetime = $createDatetime;
    }
    
        	
    private $content;
    
        /**
    * @return 公告内容
    */
        public function getContent() {
        return $this->content;
    }
    
    /**
     * 设置公告内容     
     * @param String $content     
     * 参数示例：<pre>1202速卖通平台将开展大促。。。。。</pre>     
     * 此参数必填     */
    public function setContent( $content) {
        $this->content = $content;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "anouncementId", $this->stdResult )) {
    				$this->anouncementId = $this->stdResult->{"anouncementId"};
    			}
    			    		    				    			    			if (array_key_exists ( "businessType", $this->stdResult )) {
    				$this->businessType = $this->stdResult->{"businessType"};
    			}
    			    		    				    			    			if (array_key_exists ( "createDatetime", $this->stdResult )) {
    				$this->createDatetime = $this->stdResult->{"createDatetime"};
    			}
    			    		    				    			    			if (array_key_exists ( "content", $this->stdResult )) {
    				$this->content = $this->stdResult->{"content"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "anouncementId", $this->arrayResult )) {
    			$this->anouncementId = $arrayResult['anouncementId'];
    			}
    		    	    			    		    			if (array_key_exists ( "businessType", $this->arrayResult )) {
    			$this->businessType = $arrayResult['businessType'];
    			}
    		    	    			    		    			if (array_key_exists ( "createDatetime", $this->arrayResult )) {
    			$this->createDatetime = $arrayResult['createDatetime'];
    			}
    		    	    			    		    			if (array_key_exists ( "content", $this->arrayResult )) {
    			$this->content = $arrayResult['content'];
    			}
    		    	    		}
 
   
}
?>