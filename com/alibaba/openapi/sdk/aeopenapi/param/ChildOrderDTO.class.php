<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ChildOrderDTO extends SDKDomain {

       	
    private $frozenStatus;
    
        /**
    * @return 冻结状态(&quot;NO_FROZEN&quot;无冻结；&quot;IN_FROZEN&quot;冻结中；)
    */
        public function getFrozenStatus() {
        return $this->frozenStatus;
    }
    
    /**
     * 设置冻结状态(&quot;NO_FROZEN&quot;无冻结；&quot;IN_FROZEN&quot;冻结中；)     
     * @param String $frozenStatus     
     * 参数示例：<pre>NO_FROZEN</pre>     
     * 此参数必填     */
    public function setFrozenStatus( $frozenStatus) {
        $this->frozenStatus = $frozenStatus;
    }
    
        	
    private $fundStatus;
    
        /**
    * @return 资金状态(NOT_PAY,未付款； PAY_SUCCESS,付款成功； WAIT_SELLER_CHECK，卖家验款)
    */
        public function getFundStatus() {
        return $this->fundStatus;
    }
    
    /**
     * 设置资金状态(NOT_PAY,未付款； PAY_SUCCESS,付款成功； WAIT_SELLER_CHECK，卖家验款)     
     * @param String $fundStatus     
     * 参数示例：<pre>NOT_PAY</pre>     
     * 此参数必填     */
    public function setFundStatus( $fundStatus) {
        $this->fundStatus = $fundStatus;
    }
    
        	
    private $id;
    
        /**
    * @return 子订单ID
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置子订单ID     
     * @param Long $id     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
        	
    private $initOrderAmt;
    
        /**
    * @return 子订单初始金额
    */
        public function getInitOrderAmt() {
        return $this->initOrderAmt;
    }
    
    /**
     * 设置子订单初始金额     
     * @param String $initOrderAmt     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setInitOrderAmt( $initOrderAmt) {
        $this->initOrderAmt = $initOrderAmt;
    }
    
        	
    private $initOrderAmtCur;
    
        /**
    * @return 货币单位
    */
        public function getInitOrderAmtCur() {
        return $this->initOrderAmtCur;
    }
    
    /**
     * 设置货币单位     
     * @param String $initOrderAmtCur     
     * 参数示例：<pre>USD</pre>     
     * 此参数必填     */
    public function setInitOrderAmtCur( $initOrderAmtCur) {
        $this->initOrderAmtCur = $initOrderAmtCur;
    }
    
        	
    private $issueStatus;
    
        /**
    * @return 纠纷状态(&quot;NO_ISSUE&quot;无纠纷；&quot;IN_ISSUE&quot;纠纷中；&ldquo;END_ISSUE&rdquo;纠纷结束。) frozenStatus:冻结状态(&quot;NO_FROZEN&quot;无冻结；&quot;IN_FROZEN&quot;冻结中；)
    */
        public function getIssueStatus() {
        return $this->issueStatus;
    }
    
    /**
     * 设置纠纷状态(&quot;NO_ISSUE&quot;无纠纷；&quot;IN_ISSUE&quot;纠纷中；&ldquo;END_ISSUE&rdquo;纠纷结束。) frozenStatus:冻结状态(&quot;NO_FROZEN&quot;无冻结；&quot;IN_FROZEN&quot;冻结中；)     
     * @param String $issueStatus     
     * 参数示例：<pre>NO_ISSUE</pre>     
     * 此参数必填     */
    public function setIssueStatus( $issueStatus) {
        $this->issueStatus = $issueStatus;
    }
    
        	
    private $lotNum;
    
        /**
    * @return lot数量
    */
        public function getLotNum() {
        return $this->lotNum;
    }
    
    /**
     * 设置lot数量     
     * @param Integer $lotNum     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setLotNum( $lotNum) {
        $this->lotNum = $lotNum;
    }
    
        	
    private $orderStatus;
    
        /**
    * @return 子订单状态
    */
        public function getOrderStatus() {
        return $this->orderStatus;
    }
    
    /**
     * 设置子订单状态     
     * @param String $orderStatus     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderStatus( $orderStatus) {
        $this->orderStatus = $orderStatus;
    }
    
        	
    private $productAttributes;
    
        /**
    * @return 商品属性
    */
        public function getProductAttributes() {
        return $this->productAttributes;
    }
    
    /**
     * 设置商品属性     
     * @param String $productAttributes     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductAttributes( $productAttributes) {
        $this->productAttributes = $productAttributes;
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
    
        	
    private $productPrice;
    
        /**
    * @return 商品价格
    */
        public function getProductPrice() {
        return $this->productPrice;
    }
    
    /**
     * 设置商品价格     
     * @param String $productPrice     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductPrice( $productPrice) {
        $this->productPrice = $productPrice;
    }
    
        	
    private $productPriceCur;
    
        /**
    * @return 货币单位
    */
        public function getProductPriceCur() {
        return $this->productPriceCur;
    }
    
    /**
     * 设置货币单位     
     * @param String $productPriceCur     
     * 参数示例：<pre>USD</pre>     
     * 此参数必填     */
    public function setProductPriceCur( $productPriceCur) {
        $this->productPriceCur = $productPriceCur;
    }
    
        	
    private $productStandard;
    
        /**
    * @return 产品规格
    */
        public function getProductStandard() {
        return $this->productStandard;
    }
    
    /**
     * 设置产品规格     
     * @param String $productStandard     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductStandard( $productStandard) {
        $this->productStandard = $productStandard;
    }
    
        	
    private $productUnit;
    
        /**
    * @return 产品单位
    */
        public function getProductUnit() {
        return $this->productUnit;
    }
    
    /**
     * 设置产品单位     
     * @param String $productUnit     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductUnit( $productUnit) {
        $this->productUnit = $productUnit;
    }
    
        	
    private $skuCode;
    
        /**
    * @return SKU编码
    */
        public function getSkuCode() {
        return $this->skuCode;
    }
    
    /**
     * 设置SKU编码     
     * @param String $skuCode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSkuCode( $skuCode) {
        $this->skuCode = $skuCode;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "frozenStatus", $this->stdResult )) {
    				$this->frozenStatus = $this->stdResult->{"frozenStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "fundStatus", $this->stdResult )) {
    				$this->fundStatus = $this->stdResult->{"fundStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    				    			    			if (array_key_exists ( "initOrderAmt", $this->stdResult )) {
    				$this->initOrderAmt = $this->stdResult->{"initOrderAmt"};
    			}
    			    		    				    			    			if (array_key_exists ( "initOrderAmtCur", $this->stdResult )) {
    				$this->initOrderAmtCur = $this->stdResult->{"initOrderAmtCur"};
    			}
    			    		    				    			    			if (array_key_exists ( "issueStatus", $this->stdResult )) {
    				$this->issueStatus = $this->stdResult->{"issueStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "lotNum", $this->stdResult )) {
    				$this->lotNum = $this->stdResult->{"lotNum"};
    			}
    			    		    				    			    			if (array_key_exists ( "orderStatus", $this->stdResult )) {
    				$this->orderStatus = $this->stdResult->{"orderStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "productAttributes", $this->stdResult )) {
    				$this->productAttributes = $this->stdResult->{"productAttributes"};
    			}
    			    		    				    			    			if (array_key_exists ( "productCount", $this->stdResult )) {
    				$this->productCount = $this->stdResult->{"productCount"};
    			}
    			    		    				    			    			if (array_key_exists ( "productId", $this->stdResult )) {
    				$this->productId = $this->stdResult->{"productId"};
    			}
    			    		    				    			    			if (array_key_exists ( "productName", $this->stdResult )) {
    				$this->productName = $this->stdResult->{"productName"};
    			}
    			    		    				    			    			if (array_key_exists ( "productPrice", $this->stdResult )) {
    				$this->productPrice = $this->stdResult->{"productPrice"};
    			}
    			    		    				    			    			if (array_key_exists ( "productPriceCur", $this->stdResult )) {
    				$this->productPriceCur = $this->stdResult->{"productPriceCur"};
    			}
    			    		    				    			    			if (array_key_exists ( "productStandard", $this->stdResult )) {
    				$this->productStandard = $this->stdResult->{"productStandard"};
    			}
    			    		    				    			    			if (array_key_exists ( "productUnit", $this->stdResult )) {
    				$this->productUnit = $this->stdResult->{"productUnit"};
    			}
    			    		    				    			    			if (array_key_exists ( "skuCode", $this->stdResult )) {
    				$this->skuCode = $this->stdResult->{"skuCode"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "frozenStatus", $this->arrayResult )) {
    			$this->frozenStatus = $arrayResult['frozenStatus'];
    			}
    		    	    			    		    			if (array_key_exists ( "fundStatus", $this->arrayResult )) {
    			$this->fundStatus = $arrayResult['fundStatus'];
    			}
    		    	    			    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['id'];
    			}
    		    	    			    		    			if (array_key_exists ( "initOrderAmt", $this->arrayResult )) {
    			$this->initOrderAmt = $arrayResult['initOrderAmt'];
    			}
    		    	    			    		    			if (array_key_exists ( "initOrderAmtCur", $this->arrayResult )) {
    			$this->initOrderAmtCur = $arrayResult['initOrderAmtCur'];
    			}
    		    	    			    		    			if (array_key_exists ( "issueStatus", $this->arrayResult )) {
    			$this->issueStatus = $arrayResult['issueStatus'];
    			}
    		    	    			    		    			if (array_key_exists ( "lotNum", $this->arrayResult )) {
    			$this->lotNum = $arrayResult['lotNum'];
    			}
    		    	    			    		    			if (array_key_exists ( "orderStatus", $this->arrayResult )) {
    			$this->orderStatus = $arrayResult['orderStatus'];
    			}
    		    	    			    		    			if (array_key_exists ( "productAttributes", $this->arrayResult )) {
    			$this->productAttributes = $arrayResult['productAttributes'];
    			}
    		    	    			    		    			if (array_key_exists ( "productCount", $this->arrayResult )) {
    			$this->productCount = $arrayResult['productCount'];
    			}
    		    	    			    		    			if (array_key_exists ( "productId", $this->arrayResult )) {
    			$this->productId = $arrayResult['productId'];
    			}
    		    	    			    		    			if (array_key_exists ( "productName", $this->arrayResult )) {
    			$this->productName = $arrayResult['productName'];
    			}
    		    	    			    		    			if (array_key_exists ( "productPrice", $this->arrayResult )) {
    			$this->productPrice = $arrayResult['productPrice'];
    			}
    		    	    			    		    			if (array_key_exists ( "productPriceCur", $this->arrayResult )) {
    			$this->productPriceCur = $arrayResult['productPriceCur'];
    			}
    		    	    			    		    			if (array_key_exists ( "productStandard", $this->arrayResult )) {
    			$this->productStandard = $arrayResult['productStandard'];
    			}
    		    	    			    		    			if (array_key_exists ( "productUnit", $this->arrayResult )) {
    			$this->productUnit = $arrayResult['productUnit'];
    			}
    		    	    			    		    			if (array_key_exists ( "skuCode", $this->arrayResult )) {
    			$this->skuCode = $arrayResult['skuCode'];
    			}
    		    	    		}
 
   
}
?>