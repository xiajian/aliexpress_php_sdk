<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiGetPhotoBankInfoResult {

        	
    private $capicity;
    
        /**
    * @return 图片银行总容量，单位字节。
    */
        public function getCapicity() {
        return $this->capicity;
    }
    
    /**
     * 设置图片银行总容量，单位字节。     
     * @param Long $capicity     
          
     * 此参数必填     */
    public function setCapicity( $capicity) {
        $this->capicity = $capicity;
    }
    
        	
    private $useage;
    
        /**
    * @return 图片银行已使用量，单位字节。
    */
        public function getUseage() {
        return $this->useage;
    }
    
    /**
     * 设置图片银行已使用量，单位字节。     
     * @param Long $useage     
          
     * 此参数必填     */
    public function setUseage( $useage) {
        $this->useage = $useage;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "capicity", $this->stdResult )) {
    				$this->capicity = $this->stdResult->{"capicity"};
    			}
    			    		    				    			    			if (array_key_exists ( "useage", $this->stdResult )) {
    				$this->useage = $this->stdResult->{"useage"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "capicity", $this->arrayResult )) {
    			$this->capicity = $arrayResult['capicity'];
    			}
    		    	    			    		    			if (array_key_exists ( "useage", $this->arrayResult )) {
    			$this->useage = $arrayResult['useage'];
    			}
    		    	    		}

}
?>