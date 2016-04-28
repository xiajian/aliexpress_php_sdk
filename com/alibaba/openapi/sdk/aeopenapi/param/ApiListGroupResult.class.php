<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/PhotobankGroup.class.php');

class ApiListGroupResult {

        	
    private $photoBankImageGroupList;
    
        /**
    * @return 图片银行分组列表，如果没有任何的分组信息。这个属性为:[]。
    */
        public function getPhotoBankImageGroupList() {
        return $this->photoBankImageGroupList;
    }
    
    /**
     * 设置图片银行分组列表，如果没有任何的分组信息。这个属性为:[]。     
     * @param array include @see PhotobankGroup[] $photoBankImageGroupList     
          
     * 此参数必填     */
    public function setPhotoBankImageGroupList(PhotobankGroup $photoBankImageGroupList) {
        $this->photoBankImageGroupList = $photoBankImageGroupList;
    }
    
        	
    private $success;
    
        /**
    * @return 本次调用是否成功。
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置本次调用是否成功。     
     * @param Boolean $success     
          
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "photoBankImageGroupList", $this->stdResult )) {
    			$photoBankImageGroupListResult=$this->stdResult->{"photoBankImageGroupList"};
    				$object = json_decode ( json_encode ( $photoBankImageGroupListResult ), true );
					$this->photoBankImageGroupList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$PhotobankGroupResult=new PhotobankGroup();
						$PhotobankGroupResult->setArrayResult($arrayobject );
						$this->photoBankImageGroupList [$i] = $PhotobankGroupResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "photoBankImageGroupList", $this->arrayResult )) {
    		$photoBankImageGroupListResult=$arrayResult['photoBankImageGroupList'];
    			$this->photoBankImageGroupList = PhotobankGroup();
    			$this->photoBankImageGroupList->$this->setStdResult ( $photoBankImageGroupListResult);
    		}
    		    	    			    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['success'];
    			}
    		    	    		}

}
?>