<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/TradeMoney.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/TradeMoney.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/TradeMoney.class.php');

class OrderProductVO extends SDKDomain {

       	
    private $buyerSignerFirstName;
    
        /**
    * @return 买家firstName
    */
        public function getBuyerSignerFirstName() {
        return $this->buyerSignerFirstName;
    }
    
    /**
     * 设置买家firstName     
     * @param String $buyerSignerFirstName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerSignerFirstName( $buyerSignerFirstName) {
        $this->buyerSignerFirstName = $buyerSignerFirstName;
    }
    
        	
    private $buyerSignerLastName;
    
        /**
    * @return 买家lastName
    */
        public function getBuyerSignerLastName() {
        return $this->buyerSignerLastName;
    }
    
    /**
     * 设置买家lastName     
     * @param String $buyerSignerLastName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerSignerLastName( $buyerSignerLastName) {
        $this->buyerSignerLastName = $buyerSignerLastName;
    }
    
        	
    private $canSubmitIssue;
    
        /**
    * @return 子订单是否能提交纠纷
    */
        public function getCanSubmitIssue() {
        return $this->canSubmitIssue;
    }
    
    /**
     * 设置子订单是否能提交纠纷     
     * @param Boolean $canSubmitIssue     
     * 参数示例：<pre>false</pre>     
     * 此参数必填     */
    public function setCanSubmitIssue( $canSubmitIssue) {
        $this->canSubmitIssue = $canSubmitIssue;
    }
    
        	
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
    
        	
    private $deliveryTime;
    
        /**
    * @return 妥投时间
    */
        public function getDeliveryTime() {
        return $this->deliveryTime;
    }
    
    /**
     * 设置妥投时间     
     * @param String $deliveryTime     
     * 参数示例：<pre>5-10</pre>     
     * 此参数必填     */
    public function setDeliveryTime( $deliveryTime) {
        $this->deliveryTime = $deliveryTime;
    }
    
        	
    private $freightCommitDay;
    
        /**
    * @return 限时达
    */
        public function getFreightCommitDay() {
        return $this->freightCommitDay;
    }
    
    /**
     * 设置限时达     
     * @param String $freightCommitDay     
     * 参数示例：<pre>27</pre>     
     * 此参数必填     */
    public function setFreightCommitDay( $freightCommitDay) {
        $this->freightCommitDay = $freightCommitDay;
    }
    
        	
    private $fundStatus;
    
        /**
    * @return 资金状态
    */
        public function getFundStatus() {
        return $this->fundStatus;
    }
    
    /**
     * 设置资金状态     
     * @param String $fundStatus     
     * 参数示例：<pre>NOT_PAY</pre>     
     * 此参数必填     */
    public function setFundStatus( $fundStatus) {
        $this->fundStatus = $fundStatus;
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
    
        	
    private $issueMode;
    
        /**
    * @return 纠纷类型
    */
        public function getIssueMode() {
        return $this->issueMode;
    }
    
    /**
     * 设置纠纷类型     
     * @param String $issueMode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIssueMode( $issueMode) {
        $this->issueMode = $issueMode;
    }
    
        	
    private $issueStatus;
    
        /**
    * @return 纠纷状态
    */
        public function getIssueStatus() {
        return $this->issueStatus;
    }
    
    /**
     * 设置纠纷状态     
     * @param String $issueStatus     
     * 参数示例：<pre>NO_ISSUE</pre>     
     * 此参数必填     */
    public function setIssueStatus( $issueStatus) {
        $this->issueStatus = $issueStatus;
    }
    
        	
    private $logisticsServiceName;
    
        /**
    * @return 物流服务
    */
        public function getLogisticsServiceName() {
        return $this->logisticsServiceName;
    }
    
    /**
     * 设置物流服务     
     * @param String $logisticsServiceName     
     * 参数示例：<pre>EMS</pre>     
     * 此参数必填     */
    public function setLogisticsServiceName( $logisticsServiceName) {
        $this->logisticsServiceName = $logisticsServiceName;
    }
    
        	
    private $logisticsType;
    
        /**
    * @return 物流类型
    */
        public function getLogisticsType() {
        return $this->logisticsType;
    }
    
    /**
     * 设置物流类型     
     * @param String $logisticsType     
     * 参数示例：<pre>EMS</pre>     
     * 此参数必填     */
    public function setLogisticsType( $logisticsType) {
        $this->logisticsType = $logisticsType;
    }
    
        	
    private $memo;
    
        /**
    * @return 订单备注
    */
        public function getMemo() {
        return $this->memo;
    }
    
    /**
     * 设置订单备注     
     * @param String $memo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMemo( $memo) {
        $this->memo = $memo;
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
    
        	
    private $orderId;
    
        /**
    * @return 订单ID
    */
        public function getOrderId() {
        return $this->orderId;
    }
    
    /**
     * 设置订单ID     
     * @param Long $orderId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderId( $orderId) {
        $this->orderId = $orderId;
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
    
        	
    private $productStandard;
    
        /**
    * @return 商品规格
    */
        public function getProductStandard() {
        return $this->productStandard;
    }
    
    /**
     * 设置商品规格     
     * @param String $productStandard     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductStandard( $productStandard) {
        $this->productStandard = $productStandard;
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
    
        	
    private $sellerSignerFirstName;
    
        /**
    * @return 卖家firstName
    */
        public function getSellerSignerFirstName() {
        return $this->sellerSignerFirstName;
    }
    
    /**
     * 设置卖家firstName     
     * @param String $sellerSignerFirstName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSellerSignerFirstName( $sellerSignerFirstName) {
        $this->sellerSignerFirstName = $sellerSignerFirstName;
    }
    
        	
    private $sellerSignerLastName;
    
        /**
    * @return 卖家lastName
    */
        public function getSellerSignerLastName() {
        return $this->sellerSignerLastName;
    }
    
    /**
     * 设置卖家lastName     
     * @param String $sellerSignerLastName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSellerSignerLastName( $sellerSignerLastName) {
        $this->sellerSignerLastName = $sellerSignerLastName;
    }
    
        	
    private $sendGoodsTime;
    
        /**
    * @return 发货时间
    */
        public function getSendGoodsTime() {
        return $this->sendGoodsTime;
    }
    
    /**
     * 设置发货时间     
     * @param Date $sendGoodsTime     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSendGoodsTime( $sendGoodsTime) {
        $this->sendGoodsTime = $sendGoodsTime;
    }
    
        	
    private $showStatus;
    
        /**
    * @return 订单显示状态
    */
        public function getShowStatus() {
        return $this->showStatus;
    }
    
    /**
     * 设置订单显示状态     
     * @param String $showStatus     
     * 参数示例：<pre>PLACE_ORDER_SUCCESS</pre>     
     * 此参数必填     */
    public function setShowStatus( $showStatus) {
        $this->showStatus = $showStatus;
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
    
        	
    private $logisticsAmount;
    
        /**
    * @return 
    */
        public function getLogisticsAmount() {
        return $this->logisticsAmount;
    }
    
    /**
     * 设置     
     * @param TradeMoney $logisticsAmount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setLogisticsAmount(TradeMoney $logisticsAmount) {
        $this->logisticsAmount = $logisticsAmount;
    }
    
        	
    private $productUnitPrice;
    
        /**
    * @return 
    */
        public function getProductUnitPrice() {
        return $this->productUnitPrice;
    }
    
    /**
     * 设置     
     * @param TradeMoney $productUnitPrice     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductUnitPrice(TradeMoney $productUnitPrice) {
        $this->productUnitPrice = $productUnitPrice;
    }
    
        	
    private $totalProductAmount;
    
        /**
    * @return 
    */
        public function getTotalProductAmount() {
        return $this->totalProductAmount;
    }
    
    /**
     * 设置     
     * @param TradeMoney $totalProductAmount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTotalProductAmount(TradeMoney $totalProductAmount) {
        $this->totalProductAmount = $totalProductAmount;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "buyerSignerFirstName", $this->stdResult )) {
    				$this->buyerSignerFirstName = $this->stdResult->{"buyerSignerFirstName"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerSignerLastName", $this->stdResult )) {
    				$this->buyerSignerLastName = $this->stdResult->{"buyerSignerLastName"};
    			}
    			    		    				    			    			if (array_key_exists ( "canSubmitIssue", $this->stdResult )) {
    				$this->canSubmitIssue = $this->stdResult->{"canSubmitIssue"};
    			}
    			    		    				    			    			if (array_key_exists ( "childId", $this->stdResult )) {
    				$this->childId = $this->stdResult->{"childId"};
    			}
    			    		    				    			    			if (array_key_exists ( "deliveryTime", $this->stdResult )) {
    				$this->deliveryTime = $this->stdResult->{"deliveryTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "freightCommitDay", $this->stdResult )) {
    				$this->freightCommitDay = $this->stdResult->{"freightCommitDay"};
    			}
    			    		    				    			    			if (array_key_exists ( "fundStatus", $this->stdResult )) {
    				$this->fundStatus = $this->stdResult->{"fundStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "goodsPrepareTime", $this->stdResult )) {
    				$this->goodsPrepareTime = $this->stdResult->{"goodsPrepareTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "issueMode", $this->stdResult )) {
    				$this->issueMode = $this->stdResult->{"issueMode"};
    			}
    			    		    				    			    			if (array_key_exists ( "issueStatus", $this->stdResult )) {
    				$this->issueStatus = $this->stdResult->{"issueStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "logisticsServiceName", $this->stdResult )) {
    				$this->logisticsServiceName = $this->stdResult->{"logisticsServiceName"};
    			}
    			    		    				    			    			if (array_key_exists ( "logisticsType", $this->stdResult )) {
    				$this->logisticsType = $this->stdResult->{"logisticsType"};
    			}
    			    		    				    			    			if (array_key_exists ( "memo", $this->stdResult )) {
    				$this->memo = $this->stdResult->{"memo"};
    			}
    			    		    				    			    			if (array_key_exists ( "moneyBack3x", $this->stdResult )) {
    				$this->moneyBack3x = $this->stdResult->{"moneyBack3x"};
    			}
    			    		    				    			    			if (array_key_exists ( "orderId", $this->stdResult )) {
    				$this->orderId = $this->stdResult->{"orderId"};
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
    			    		    				    			    			if (array_key_exists ( "productStandard", $this->stdResult )) {
    				$this->productStandard = $this->stdResult->{"productStandard"};
    			}
    			    		    				    			    			if (array_key_exists ( "productUnit", $this->stdResult )) {
    				$this->productUnit = $this->stdResult->{"productUnit"};
    			}
    			    		    				    			    			if (array_key_exists ( "sellerSignerFirstName", $this->stdResult )) {
    				$this->sellerSignerFirstName = $this->stdResult->{"sellerSignerFirstName"};
    			}
    			    		    				    			    			if (array_key_exists ( "sellerSignerLastName", $this->stdResult )) {
    				$this->sellerSignerLastName = $this->stdResult->{"sellerSignerLastName"};
    			}
    			    		    				    			    			if (array_key_exists ( "sendGoodsTime", $this->stdResult )) {
    				$this->sendGoodsTime = $this->stdResult->{"sendGoodsTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "showStatus", $this->stdResult )) {
    				$this->showStatus = $this->stdResult->{"showStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "skuCode", $this->stdResult )) {
    				$this->skuCode = $this->stdResult->{"skuCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "sonOrderStatus", $this->stdResult )) {
    				$this->sonOrderStatus = $this->stdResult->{"sonOrderStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "logisticsAmount", $this->stdResult )) {
    				$logisticsAmountResult=$this->stdResult->{"logisticsAmount"};
    				$this->logisticsAmount = new TradeMoney();
    				$this->logisticsAmount->setStdResult ( $logisticsAmountResult);
    			}
    			    		    				    			    			if (array_key_exists ( "productUnitPrice", $this->stdResult )) {
    				$productUnitPriceResult=$this->stdResult->{"productUnitPrice"};
    				$this->productUnitPrice = new TradeMoney();
    				$this->productUnitPrice->setStdResult ( $productUnitPriceResult);
    			}
    			    		    				    			    			if (array_key_exists ( "totalProductAmount", $this->stdResult )) {
    				$totalProductAmountResult=$this->stdResult->{"totalProductAmount"};
    				$this->totalProductAmount = new TradeMoney();
    				$this->totalProductAmount->setStdResult ( $totalProductAmountResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "buyerSignerFirstName", $this->arrayResult )) {
    			$this->buyerSignerFirstName = $arrayResult['buyerSignerFirstName'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerSignerLastName", $this->arrayResult )) {
    			$this->buyerSignerLastName = $arrayResult['buyerSignerLastName'];
    			}
    		    	    			    		    			if (array_key_exists ( "canSubmitIssue", $this->arrayResult )) {
    			$this->canSubmitIssue = $arrayResult['canSubmitIssue'];
    			}
    		    	    			    		    			if (array_key_exists ( "childId", $this->arrayResult )) {
    			$this->childId = $arrayResult['childId'];
    			}
    		    	    			    		    			if (array_key_exists ( "deliveryTime", $this->arrayResult )) {
    			$this->deliveryTime = $arrayResult['deliveryTime'];
    			}
    		    	    			    		    			if (array_key_exists ( "freightCommitDay", $this->arrayResult )) {
    			$this->freightCommitDay = $arrayResult['freightCommitDay'];
    			}
    		    	    			    		    			if (array_key_exists ( "fundStatus", $this->arrayResult )) {
    			$this->fundStatus = $arrayResult['fundStatus'];
    			}
    		    	    			    		    			if (array_key_exists ( "goodsPrepareTime", $this->arrayResult )) {
    			$this->goodsPrepareTime = $arrayResult['goodsPrepareTime'];
    			}
    		    	    			    		    			if (array_key_exists ( "issueMode", $this->arrayResult )) {
    			$this->issueMode = $arrayResult['issueMode'];
    			}
    		    	    			    		    			if (array_key_exists ( "issueStatus", $this->arrayResult )) {
    			$this->issueStatus = $arrayResult['issueStatus'];
    			}
    		    	    			    		    			if (array_key_exists ( "logisticsServiceName", $this->arrayResult )) {
    			$this->logisticsServiceName = $arrayResult['logisticsServiceName'];
    			}
    		    	    			    		    			if (array_key_exists ( "logisticsType", $this->arrayResult )) {
    			$this->logisticsType = $arrayResult['logisticsType'];
    			}
    		    	    			    		    			if (array_key_exists ( "memo", $this->arrayResult )) {
    			$this->memo = $arrayResult['memo'];
    			}
    		    	    			    		    			if (array_key_exists ( "moneyBack3x", $this->arrayResult )) {
    			$this->moneyBack3x = $arrayResult['moneyBack3x'];
    			}
    		    	    			    		    			if (array_key_exists ( "orderId", $this->arrayResult )) {
    			$this->orderId = $arrayResult['orderId'];
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
    		    	    			    		    			if (array_key_exists ( "productStandard", $this->arrayResult )) {
    			$this->productStandard = $arrayResult['productStandard'];
    			}
    		    	    			    		    			if (array_key_exists ( "productUnit", $this->arrayResult )) {
    			$this->productUnit = $arrayResult['productUnit'];
    			}
    		    	    			    		    			if (array_key_exists ( "sellerSignerFirstName", $this->arrayResult )) {
    			$this->sellerSignerFirstName = $arrayResult['sellerSignerFirstName'];
    			}
    		    	    			    		    			if (array_key_exists ( "sellerSignerLastName", $this->arrayResult )) {
    			$this->sellerSignerLastName = $arrayResult['sellerSignerLastName'];
    			}
    		    	    			    		    			if (array_key_exists ( "sendGoodsTime", $this->arrayResult )) {
    			$this->sendGoodsTime = $arrayResult['sendGoodsTime'];
    			}
    		    	    			    		    			if (array_key_exists ( "showStatus", $this->arrayResult )) {
    			$this->showStatus = $arrayResult['showStatus'];
    			}
    		    	    			    		    			if (array_key_exists ( "skuCode", $this->arrayResult )) {
    			$this->skuCode = $arrayResult['skuCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "sonOrderStatus", $this->arrayResult )) {
    			$this->sonOrderStatus = $arrayResult['sonOrderStatus'];
    			}
    		    	    			    		    		if (array_key_exists ( "logisticsAmount", $this->arrayResult )) {
    		$logisticsAmountResult=$arrayResult['logisticsAmount'];
    			    			$this->logisticsAmount = new TradeMoney();
    			    			$this->logisticsAmount->$this->setStdResult ( $logisticsAmountResult);
    		}
    		    	    			    		    		if (array_key_exists ( "productUnitPrice", $this->arrayResult )) {
    		$productUnitPriceResult=$arrayResult['productUnitPrice'];
    			    			$this->productUnitPrice = new TradeMoney();
    			    			$this->productUnitPrice->$this->setStdResult ( $productUnitPriceResult);
    		}
    		    	    			    		    		if (array_key_exists ( "totalProductAmount", $this->arrayResult )) {
    		$totalProductAmountResult=$arrayResult['totalProductAmount'];
    			    			$this->totalProductAmount = new TradeMoney();
    			    			$this->totalProductAmount->$this->setStdResult ( $totalProductAmountResult);
    		}
    		    	    		}
 
   
}
?>