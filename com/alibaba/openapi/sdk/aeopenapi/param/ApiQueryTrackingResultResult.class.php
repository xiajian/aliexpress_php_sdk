<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/AeopTrackingDetailResult.class.php');

class ApiQueryTrackingResultResult {

        	
    private $details;
    
        /**
    * @return 追踪详细信息列表
    */
        public function getDetails() {
        return $this->details;
    }
    
    /**
     * 设置追踪详细信息列表     
     * @param array include @see AeopTrackingDetailResult[] $details     
          
     * 此参数必填     */
    public function setDetails(AeopTrackingDetailResult $details) {
        $this->details = $details;
    }
    
        	
    private $success;
    
        /**
    * @return 调用是否成功
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置调用是否成功     
     * @param Boolean $success     
          
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
    }
    
        	
    private $officialWebsite;
    
        /**
    * @return 追踪网址
    */
        public function getOfficialWebsite() {
        return $this->officialWebsite;
    }
    
    /**
     * 设置追踪网址     
     * @param String $officialWebsite     
          
     * 此参数必填     */
    public function setOfficialWebsite( $officialWebsite) {
        $this->officialWebsite = $officialWebsite;
    }
    
        	
    private $errorDesc;
    
        /**
    * @return 调用出错信息
    */
        public function getErrorDesc() {
        return $this->errorDesc;
    }
    
    /**
     * 设置调用出错信息     
     * @param String $errorDesc     
          
     * 此参数必填     */
    public function setErrorDesc( $errorDesc) {
        $this->errorDesc = $errorDesc;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "details", $this->stdResult )) {
    			$detailsResult=$this->stdResult->{"details"};
    				$object = json_decode ( json_encode ( $detailsResult ), true );
					$this->details = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AeopTrackingDetailResultResult=new AeopTrackingDetailResult();
						$AeopTrackingDetailResultResult->setArrayResult($arrayobject );
						$this->details [$i] = $AeopTrackingDetailResultResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    				    			    			if (array_key_exists ( "officialWebsite", $this->stdResult )) {
    				$this->officialWebsite = $this->stdResult->{"officialWebsite"};
    			}
    			    		    				    			    			if (array_key_exists ( "errorDesc", $this->stdResult )) {
    				$this->errorDesc = $this->stdResult->{"errorDesc"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "details", $this->arrayResult )) {
    		$detailsResult=$arrayResult['details'];
    			$this->details = AeopTrackingDetailResult();
    			$this->details->$this->setStdResult ( $detailsResult);
    		}
    		    	    			    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['success'];
    			}
    		    	    			    		    			if (array_key_exists ( "officialWebsite", $this->arrayResult )) {
    			$this->officialWebsite = $arrayResult['officialWebsite'];
    			}
    		    	    			    		    			if (array_key_exists ( "errorDesc", $this->arrayResult )) {
    			$this->errorDesc = $arrayResult['errorDesc'];
    			}
    		    	    		}

}
?>