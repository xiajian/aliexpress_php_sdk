<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/AeopAEProductDisplaySampleDTO.class.php');

class ApiFindProductInfoListQueryResult {

        	
    private $aeopAEProductDisplayDTOList;
    
        /**
    * @return 商品基本信息列表
    */
        public function getAeopAEProductDisplayDTOList() {
        return $this->aeopAEProductDisplayDTOList;
    }
    
    /**
     * 设置商品基本信息列表     
     * @param array include @see AeopAEProductDisplaySampleDTO[] $aeopAEProductDisplayDTOList     
          
     * 此参数必填     */
    public function setAeopAEProductDisplayDTOList(AeopAEProductDisplaySampleDTO $aeopAEProductDisplayDTOList) {
        $this->aeopAEProductDisplayDTOList = $aeopAEProductDisplayDTOList;
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
    
        	
    private $currentPage;
    
        /**
    * @return 当前页
    */
        public function getCurrentPage() {
        return $this->currentPage;
    }
    
    /**
     * 设置当前页     
     * @param Integer $currentPage     
          
     * 此参数必填     */
    public function setCurrentPage( $currentPage) {
        $this->currentPage = $currentPage;
    }
    
        	
    private $productCount;
    
        /**
    * @return 总商品数
    */
        public function getProductCount() {
        return $this->productCount;
    }
    
    /**
     * 设置总商品数     
     * @param Integer $productCount     
          
     * 此参数必填     */
    public function setProductCount( $productCount) {
        $this->productCount = $productCount;
    }
    
        	
    private $success;
    
        /**
    * @return 接口调用结果
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置接口调用结果     
     * @param Boolean $success     
          
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "aeopAEProductDisplayDTOList", $this->stdResult )) {
    			$aeopAEProductDisplayDTOListResult=$this->stdResult->{"aeopAEProductDisplayDTOList"};
    				$object = json_decode ( json_encode ( $aeopAEProductDisplayDTOListResult ), true );
					$this->aeopAEProductDisplayDTOList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AeopAEProductDisplaySampleDTOResult=new AeopAEProductDisplaySampleDTO();
						$AeopAEProductDisplaySampleDTOResult->setArrayResult($arrayobject );
						$this->aeopAEProductDisplayDTOList [$i] = $AeopAEProductDisplaySampleDTOResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "totalPage", $this->stdResult )) {
    				$this->totalPage = $this->stdResult->{"totalPage"};
    			}
    			    		    				    			    			if (array_key_exists ( "currentPage", $this->stdResult )) {
    				$this->currentPage = $this->stdResult->{"currentPage"};
    			}
    			    		    				    			    			if (array_key_exists ( "productCount", $this->stdResult )) {
    				$this->productCount = $this->stdResult->{"productCount"};
    			}
    			    		    				    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "aeopAEProductDisplayDTOList", $this->arrayResult )) {
    		$aeopAEProductDisplayDTOListResult=$arrayResult['aeopAEProductDisplayDTOList'];
    			$this->aeopAEProductDisplayDTOList = AeopAEProductDisplaySampleDTO();
    			$this->aeopAEProductDisplayDTOList->$this->setStdResult ( $aeopAEProductDisplayDTOListResult);
    		}
    		    	    			    		    			if (array_key_exists ( "totalPage", $this->arrayResult )) {
    			$this->totalPage = $arrayResult['totalPage'];
    			}
    		    	    			    		    			if (array_key_exists ( "currentPage", $this->arrayResult )) {
    			$this->currentPage = $arrayResult['currentPage'];
    			}
    		    	    			    		    			if (array_key_exists ( "productCount", $this->arrayResult )) {
    			$this->productCount = $arrayResult['productCount'];
    			}
    		    	    			    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['success'];
    			}
    		    	    		}

}
?>