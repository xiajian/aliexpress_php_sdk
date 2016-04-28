<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/AeopAnouncementDTO.class.php');

class AeopAnouncementResult extends SDKDomain {

       	
    private $totalItem;
    
        /**
    * @return 总数量
    */
        public function getTotalItem() {
        return $this->totalItem;
    }
    
    /**
     * 设置总数量     
     * @param Integer $totalItem     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTotalItem( $totalItem) {
        $this->totalItem = $totalItem;
    }
    
        	
    private $success;
    
        /**
    * @return 是否成功
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置是否成功     
     * @param Boolean $success     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
    }
    
        	
    private $errorCode;
    
        /**
    * @return 错误编码
    */
        public function getErrorCode() {
        return $this->errorCode;
    }
    
    /**
     * 设置错误编码     
     * @param String $errorCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setErrorCode( $errorCode) {
        $this->errorCode = $errorCode;
    }
    
        	
    private $anouncementList;
    
        /**
    * @return 列表
    */
        public function getAnouncementList() {
        return $this->anouncementList;
    }
    
    /**
     * 设置列表     
     * @param AeopAnouncementDTO $anouncementList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAnouncementList(AeopAnouncementDTO $anouncementList) {
        $this->anouncementList = $anouncementList;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "totalItem", $this->stdResult )) {
    				$this->totalItem = $this->stdResult->{"totalItem"};
    			}
    			    		    				    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    				    			    			if (array_key_exists ( "errorCode", $this->stdResult )) {
    				$this->errorCode = $this->stdResult->{"errorCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "anouncementList", $this->stdResult )) {
    				$anouncementListResult=$this->stdResult->{"anouncementList"};
    				$this->anouncementList = new AeopAnouncementDTO();
    				$this->anouncementList->setStdResult ( $anouncementListResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "totalItem", $this->arrayResult )) {
    			$this->totalItem = $arrayResult['totalItem'];
    			}
    		    	    			    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['success'];
    			}
    		    	    			    		    			if (array_key_exists ( "errorCode", $this->arrayResult )) {
    			$this->errorCode = $arrayResult['errorCode'];
    			}
    		    	    			    		    		if (array_key_exists ( "anouncementList", $this->arrayResult )) {
    		$anouncementListResult=$arrayResult['anouncementList'];
    			    			$this->anouncementList = new AeopAnouncementDTO();
    			    			$this->anouncementList->$this->setStdResult ( $anouncementListResult);
    		}
    		    	    		}
 
   
}
?>