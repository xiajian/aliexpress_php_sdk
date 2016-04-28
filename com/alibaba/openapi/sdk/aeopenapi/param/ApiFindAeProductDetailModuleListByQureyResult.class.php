<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/AeopDetailModule.class.php');

class ApiFindAeProductDetailModuleListByQureyResult {

        	
    private $aeopDetailModuleList;
    
        /**
    * @return 模块信息列表
    */
        public function getAeopDetailModuleList() {
        return $this->aeopDetailModuleList;
    }
    
    /**
     * 设置模块信息列表     
     * @param array include @see AeopDetailModule[] $aeopDetailModuleList     
          
     * 此参数必填     */
    public function setAeopDetailModuleList(AeopDetailModule $aeopDetailModuleList) {
        $this->aeopDetailModuleList = $aeopDetailModuleList;
    }
    
        	
    private $currentPage;
    
        /**
    * @return 当前页号
    */
        public function getCurrentPage() {
        return $this->currentPage;
    }
    
    /**
     * 设置当前页号     
     * @param Integer $currentPage     
          
     * 此参数必填     */
    public function setCurrentPage( $currentPage) {
        $this->currentPage = $currentPage;
    }
    
        	
    private $totalPage;
    
        /**
    * @return 总页数
    */
        public function getTotalPage() {
        return $this->totalPage;
    }
    
    /**
     * 设置总页数     
     * @param Integer $totalPage     
          
     * 此参数必填     */
    public function setTotalPage( $totalPage) {
        $this->totalPage = $totalPage;
    }
    
        	
    private $success;
    
        /**
    * @return 接口调用结果。true/false分别表示成功和失败。
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置接口调用结果。true/false分别表示成功和失败。     
     * @param Boolean $success     
          
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "aeopDetailModuleList", $this->stdResult )) {
    			$aeopDetailModuleListResult=$this->stdResult->{"aeopDetailModuleList"};
    				$object = json_decode ( json_encode ( $aeopDetailModuleListResult ), true );
					$this->aeopDetailModuleList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AeopDetailModuleResult=new AeopDetailModule();
						$AeopDetailModuleResult->setArrayResult($arrayobject );
						$this->aeopDetailModuleList [$i] = $AeopDetailModuleResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "currentPage", $this->stdResult )) {
    				$this->currentPage = $this->stdResult->{"currentPage"};
    			}
    			    		    				    			    			if (array_key_exists ( "totalPage", $this->stdResult )) {
    				$this->totalPage = $this->stdResult->{"totalPage"};
    			}
    			    		    				    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "aeopDetailModuleList", $this->arrayResult )) {
    		$aeopDetailModuleListResult=$arrayResult['aeopDetailModuleList'];
    			$this->aeopDetailModuleList = AeopDetailModule();
    			$this->aeopDetailModuleList->$this->setStdResult ( $aeopDetailModuleListResult);
    		}
    		    	    			    		    			if (array_key_exists ( "currentPage", $this->arrayResult )) {
    			$this->currentPage = $arrayResult['currentPage'];
    			}
    		    	    			    		    			if (array_key_exists ( "totalPage", $this->arrayResult )) {
    			$this->totalPage = $arrayResult['totalPage'];
    			}
    		    	    			    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['success'];
    			}
    		    	    		}

}
?>