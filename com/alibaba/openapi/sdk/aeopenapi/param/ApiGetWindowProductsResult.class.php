<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/AeopAeProductWindow.class.php');

class ApiGetWindowProductsResult {

        	
    private $windowProducts;
    
        /**
    * @return 已使用的橱窗信息。
    */
        public function getWindowProducts() {
        return $this->windowProducts;
    }
    
    /**
     * 设置已使用的橱窗信息。     
     * @param array include @see AeopAeProductWindow[] $windowProducts     
          
     * 此参数必填     */
    public function setWindowProducts(AeopAeProductWindow $windowProducts) {
        $this->windowProducts = $windowProducts;
    }
    
        	
    private $usedCount;
    
        /**
    * @return 已使用的橱窗个数，与windowProducts中记录的条数一致。
    */
        public function getUsedCount() {
        return $this->usedCount;
    }
    
    /**
     * 设置已使用的橱窗个数，与windowProducts中记录的条数一致。     
     * @param Integer $usedCount     
          
     * 此参数必填     */
    public function setUsedCount( $usedCount) {
        $this->usedCount = $usedCount;
    }
    
        	
    private $windowCount;
    
        /**
    * @return 当前用户的橱窗总数＝已使用的橱窗数＋未使用的橱窗数。
    */
        public function getWindowCount() {
        return $this->windowCount;
    }
    
    /**
     * 设置当前用户的橱窗总数＝已使用的橱窗数＋未使用的橱窗数。     
     * @param Integer $windowCount     
          
     * 此参数必填     */
    public function setWindowCount( $windowCount) {
        $this->windowCount = $windowCount;
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
    
        	
    private $productList;
    
        /**
    * @return 已推荐为橱窗商品的ID列表。与windowProducts中的产品ID一致。
    */
        public function getProductList() {
        return $this->productList;
    }
    
    /**
     * 设置已推荐为橱窗商品的ID列表。与windowProducts中的产品ID一致。     
     * @param array include @see Long[] $productList     
          
     * 此参数必填     */
    public function setProductList( $productList) {
        $this->productList = $productList;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "windowProducts", $this->stdResult )) {
    			$windowProductsResult=$this->stdResult->{"windowProducts"};
    				$object = json_decode ( json_encode ( $windowProductsResult ), true );
					$this->windowProducts = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AeopAeProductWindowResult=new AeopAeProductWindow();
						$AeopAeProductWindowResult->setArrayResult($arrayobject );
						$this->windowProducts [$i] = $AeopAeProductWindowResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "usedCount", $this->stdResult )) {
    				$this->usedCount = $this->stdResult->{"usedCount"};
    			}
    			    		    				    			    			if (array_key_exists ( "windowCount", $this->stdResult )) {
    				$this->windowCount = $this->stdResult->{"windowCount"};
    			}
    			    		    				    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    				    			    			if (array_key_exists ( "productList", $this->stdResult )) {
    				$this->productList = $this->stdResult->{"productList"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "windowProducts", $this->arrayResult )) {
    		$windowProductsResult=$arrayResult['windowProducts'];
    			$this->windowProducts = AeopAeProductWindow();
    			$this->windowProducts->$this->setStdResult ( $windowProductsResult);
    		}
    		    	    			    		    			if (array_key_exists ( "usedCount", $this->arrayResult )) {
    			$this->usedCount = $arrayResult['usedCount'];
    			}
    		    	    			    		    			if (array_key_exists ( "windowCount", $this->arrayResult )) {
    			$this->windowCount = $arrayResult['windowCount'];
    			}
    		    	    			    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['success'];
    			}
    		    	    			    		    			if (array_key_exists ( "productList", $this->arrayResult )) {
    			$this->productList = $arrayResult['productList'];
    			}
    		    	    		}

}
?>