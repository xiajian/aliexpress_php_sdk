<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class SimpleOrderProductVO extends SDKDomain {

       	
    private $childId;
    
        /**
    * @return 子订单号
    */
        public function getChildId() {
        return $this->childId;
    }
    
    /**
     * 设置子订单号     
     * @param Long $childId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setChildId( $childId) {
        $this->childId = $childId;
    }
    
        	
    private $goodsPrepareTime;
    
        /**
    * @return 备货时间
    */
        public function getGoodsPrepareTime() {
        return $this->goodsPrepareTime;
    }
    
    /**
     * 设置备货时间     
     * @param Integer $goodsPrepareTime     
     * 参数示例：<pre>30</pre>     
     * 此参数必填     */
    public function setGoodsPrepareTime( $goodsPrepareTime) {
        $this->goodsPrepareTime = $goodsPrepareTime;
    }
    
        	
    private $moneyBack3x;
    
        /**
    * @return 是否支持假一赔三
    */
        public function getMoneyBack3x() {
        return $this->moneyBack3x;
    }
    
    /**
     * 设置是否支持假一赔三     
     * @param Boolean $moneyBack3x     
     * 参数示例：<pre>false</pre>     
     * 此参数必填     */
    public function setMoneyBack3x( $moneyBack3x) {
        $this->moneyBack3x = $moneyBack3x;
    }
    
        	
    private $productCount;
    
        /**
    * @return 商品数量
    */
        public function getProductCount() {
        return $this->productCount;
    }
    
    /**
     * 设置商品数量     
     * @param Integer $productCount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductCount( $productCount) {
        $this->productCount = $productCount;
    }
    
        	
    private $productId;
    
        /**
    * @return 商品ID
    */
        public function getProductId() {
        return $this->productId;
    }
    
    /**
     * 设置商品ID     
     * @param Long $productId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductId( $productId) {
        $this->productId = $productId;
    }
    
        	
    private $productImgUrl;
    
        /**
    * @return 商品主图Url
    */
        public function getProductImgUrl() {
        return $this->productImgUrl;
    }
    
    /**
     * 设置商品主图Url     
     * @param String $productImgUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductImgUrl( $productImgUrl) {
        $this->productImgUrl = $productImgUrl;
    }
    
        	
    private $productName;
    
        /**
    * @return 商品名称
    */
        public function getProductName() {
        return $this->productName;
    }
    
    /**
     * 设置商品名称     
     * @param String $productName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductName( $productName) {
        $this->productName = $productName;
    }
    
        	
    private $productSnapUrl;
    
        /**
    * @return 快照Url
    */
        public function getProductSnapUrl() {
        return $this->productSnapUrl;
    }
    
    /**
     * 设置快照Url     
     * @param String $productSnapUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductSnapUrl( $productSnapUrl) {
        $this->productSnapUrl = $productSnapUrl;
    }
    
        	
    private $productUnit;
    
        /**
    * @return 商品单位
    */
        public function getProductUnit() {
        return $this->productUnit;
    }
    
    /**
     * 设置商品单位     
     * @param String $productUnit     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductUnit( $productUnit) {
        $this->productUnit = $productUnit;
    }
    
        	
    private $productUnitPrice;
    
        /**
    * @return 商品单价
    */
        public function getProductUnitPrice() {
        return $this->productUnitPrice;
    }
    
    /**
     * 设置商品单价     
     * @param String $productUnitPrice     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductUnitPrice( $productUnitPrice) {
        $this->productUnitPrice = $productUnitPrice;
    }
    
        	
    private $productUnitPriceCur;
    
        /**
    * @return 商品货币名称
    */
        public function getProductUnitPriceCur() {
        return $this->productUnitPriceCur;
    }
    
    /**
     * 设置商品货币名称     
     * @param String $productUnitPriceCur     
     * 参数示例：<pre>USD</pre>     
     * 此参数必填     */
    public function setProductUnitPriceCur( $productUnitPriceCur) {
        $this->productUnitPriceCur = $productUnitPriceCur;
    }
    
        	
    private $skuCode;
    
        /**
    * @return 商品编码
    */
        public function getSkuCode() {
        return $this->skuCode;
    }
    
    /**
     * 设置商品编码     
     * @param String $skuCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSkuCode( $skuCode) {
        $this->skuCode = $skuCode;
    }
    
        	
    private $sonOrderStatus;
    
        /**
    * @return 子订单状态
    */
        public function getSonOrderStatus() {
        return $this->sonOrderStatus;
    }
    
    /**
     * 设置子订单状态     
     * @param String $sonOrderStatus     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSonOrderStatus( $sonOrderStatus) {
        $this->sonOrderStatus = $sonOrderStatus;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "childId", $this->stdResult )) {
    				$this->childId = $this->stdResult->{"childId"};
    			}
    			    		    				    			    			if (array_key_exists ( "goodsPrepareTime", $this->stdResult )) {
    				$this->goodsPrepareTime = $this->stdResult->{"goodsPrepareTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "moneyBack3x", $this->stdResult )) {
    				$this->moneyBack3x = $this->stdResult->{"moneyBack3x"};
    			}
    			    		    				    			    			if (array_key_exists ( "productCount", $this->stdResult )) {
    				$this->productCount = $this->stdResult->{"productCount"};
    			}
    			    		    				    			    			if (array_key_exists ( "productId", $this->stdResult )) {
    				$this->productId = $this->stdResult->{"productId"};
    			}
    			    		    				    			    			if (array_key_exists ( "productImgUrl", $this->stdResult )) {
    				$this->productImgUrl = $this->stdResult->{"productImgUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "productName", $this->stdResult )) {
    				$this->productName = $this->stdResult->{"productName"};
    			}
    			    		    				    			    			if (array_key_exists ( "productSnapUrl", $this->stdResult )) {
    				$this->productSnapUrl = $this->stdResult->{"productSnapUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "productUnit", $this->stdResult )) {
    				$this->productUnit = $this->stdResult->{"productUnit"};
    			}
    			    		    				    			    			if (array_key_exists ( "productUnitPrice", $this->stdResult )) {
    				$this->productUnitPrice = $this->stdResult->{"productUnitPrice"};
    			}
    			    		    				    			    			if (array_key_exists ( "productUnitPriceCur", $this->stdResult )) {
    				$this->productUnitPriceCur = $this->stdResult->{"productUnitPriceCur"};
    			}
    			    		    				    			    			if (array_key_exists ( "skuCode", $this->stdResult )) {
    				$this->skuCode = $this->stdResult->{"skuCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "sonOrderStatus", $this->stdResult )) {
    				$this->sonOrderStatus = $this->stdResult->{"sonOrderStatus"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "childId", $this->arrayResult )) {
    			$this->childId = $arrayResult['childId'];
    			}
    		    	    			    		    			if (array_key_exists ( "goodsPrepareTime", $this->arrayResult )) {
    			$this->goodsPrepareTime = $arrayResult['goodsPrepareTime'];
    			}
    		    	    			    		    			if (array_key_exists ( "moneyBack3x", $this->arrayResult )) {
    			$this->moneyBack3x = $arrayResult['moneyBack3x'];
    			}
    		    	    			    		    			if (array_key_exists ( "productCount", $this->arrayResult )) {
    			$this->productCount = $arrayResult['productCount'];
    			}
    		    	    			    		    			if (array_key_exists ( "productId", $this->arrayResult )) {
    			$this->productId = $arrayResult['productId'];
    			}
    		    	    			    		    			if (array_key_exists ( "productImgUrl", $this->arrayResult )) {
    			$this->productImgUrl = $arrayResult['productImgUrl'];
    			}
    		    	    			    		    			if (array_key_exists ( "productName", $this->arrayResult )) {
    			$this->productName = $arrayResult['productName'];
    			}
    		    	    			    		    			if (array_key_exists ( "productSnapUrl", $this->arrayResult )) {
    			$this->productSnapUrl = $arrayResult['productSnapUrl'];
    			}
    		    	    			    		    			if (array_key_exists ( "productUnit", $this->arrayResult )) {
    			$this->productUnit = $arrayResult['productUnit'];
    			}
    		    	    			    		    			if (array_key_exists ( "productUnitPrice", $this->arrayResult )) {
    			$this->productUnitPrice = $arrayResult['productUnitPrice'];
    			}
    		    	    			    		    			if (array_key_exists ( "productUnitPriceCur", $this->arrayResult )) {
    			$this->productUnitPriceCur = $arrayResult['productUnitPriceCur'];
    			}
    		    	    			    		    			if (array_key_exists ( "skuCode", $this->arrayResult )) {
    			$this->skuCode = $arrayResult['skuCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "sonOrderStatus", $this->arrayResult )) {
    			$this->sonOrderStatus = $arrayResult['sonOrderStatus'];
    			}
    		    	    		}
 
   
}
?>