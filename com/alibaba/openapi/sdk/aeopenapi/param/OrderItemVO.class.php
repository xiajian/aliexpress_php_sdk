<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/TradeMoney.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/TradeMoney.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/TradeMoney.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/OrderProductVO.class.php');

class OrderItemVO extends SDKDomain {

       	
    private $bizType;
    
        /**
    * @return 订单类型
    */
        public function getBizType() {
        return $this->bizType;
    }
    
    /**
     * 设置订单类型     
     * @param String $bizType     
     * 参数示例：<pre>AE_COMMON</pre>     
     * 此参数必填     */
    public function setBizType( $bizType) {
        $this->bizType = $bizType;
    }
    
        	
    private $buyerLoginId;
    
        /**
    * @return 买家登录ID
    */
        public function getBuyerLoginId() {
        return $this->buyerLoginId;
    }
    
    /**
     * 设置买家登录ID     
     * @param String $buyerLoginId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerLoginId( $buyerLoginId) {
        $this->buyerLoginId = $buyerLoginId;
    }
    
        	
    private $buyerSignerFullname;
    
        /**
    * @return 买家全名
    */
        public function getBuyerSignerFullname() {
        return $this->buyerSignerFullname;
    }
    
    /**
     * 设置买家全名     
     * @param String $buyerSignerFullname     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerSignerFullname( $buyerSignerFullname) {
        $this->buyerSignerFullname = $buyerSignerFullname;
    }
    
        	
    private $escrowFeeRate;
    
        /**
    * @return 手续费率
    */
        public function getEscrowFeeRate() {
        return $this->escrowFeeRate;
    }
    
    /**
     * 设置手续费率     
     * @param Integer $escrowFeeRate     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setEscrowFeeRate( $escrowFeeRate) {
        $this->escrowFeeRate = $escrowFeeRate;
    }
    
        	
    private $frozenStatus;
    
        /**
    * @return 冻结状态
    */
        public function getFrozenStatus() {
        return $this->frozenStatus;
    }
    
    /**
     * 设置冻结状态     
     * @param String $frozenStatus     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFrozenStatus( $frozenStatus) {
        $this->frozenStatus = $frozenStatus;
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
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFundStatus( $fundStatus) {
        $this->fundStatus = $fundStatus;
    }
    
        	
    private $gmtCreate;
    
        /**
    * @return 订单创建时间
    */
        public function getGmtCreate() {
        return $this->gmtCreate;
    }
    
    /**
     * 设置订单创建时间     
     * @param Date $gmtCreate     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtCreate( $gmtCreate) {
        $this->gmtCreate = $gmtCreate;
    }
    
        	
    private $gmtPayTime;
    
        /**
    * @return 支付时间（和订单详情中gmtPaysuccess字段意义相同。)
    */
        public function getGmtPayTime() {
        return $this->gmtPayTime;
    }
    
    /**
     * 设置支付时间（和订单详情中gmtPaysuccess字段意义相同。)     
     * @param Date $gmtPayTime     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtPayTime( $gmtPayTime) {
        $this->gmtPayTime = $gmtPayTime;
    }
    
        	
    private $gmtSendGoodsTime;
    
        /**
    * @return 发货时间
    */
        public function getGmtSendGoodsTime() {
        return $this->gmtSendGoodsTime;
    }
    
    /**
     * 设置发货时间     
     * @param Date $gmtSendGoodsTime     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtSendGoodsTime( $gmtSendGoodsTime) {
        $this->gmtSendGoodsTime = $gmtSendGoodsTime;
    }
    
        	
    private $hasRequestLoan;
    
        /**
    * @return 是否已请求放款
    */
        public function getHasRequestLoan() {
        return $this->hasRequestLoan;
    }
    
    /**
     * 设置是否已请求放款     
     * @param Boolean $hasRequestLoan     
     * 参数示例：<pre>false</pre>     
     * 此参数必填     */
    public function setHasRequestLoan( $hasRequestLoan) {
        $this->hasRequestLoan = $hasRequestLoan;
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
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIssueStatus( $issueStatus) {
        $this->issueStatus = $issueStatus;
    }
    
        	
    private $leftSendGoodDay;
    
        /**
    * @return 剩余发货时间（天）
    */
        public function getLeftSendGoodDay() {
        return $this->leftSendGoodDay;
    }
    
    /**
     * 设置剩余发货时间（天）     
     * @param String $leftSendGoodDay     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setLeftSendGoodDay( $leftSendGoodDay) {
        $this->leftSendGoodDay = $leftSendGoodDay;
    }
    
        	
    private $leftSendGoodHour;
    
        /**
    * @return 剩余发货时间（小时）
    */
        public function getLeftSendGoodHour() {
        return $this->leftSendGoodHour;
    }
    
    /**
     * 设置剩余发货时间（小时）     
     * @param String $leftSendGoodHour     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setLeftSendGoodHour( $leftSendGoodHour) {
        $this->leftSendGoodHour = $leftSendGoodHour;
    }
    
        	
    private $leftSendGoodMin;
    
        /**
    * @return 剩余发货时间（分钟）
    */
        public function getLeftSendGoodMin() {
        return $this->leftSendGoodMin;
    }
    
    /**
     * 设置剩余发货时间（分钟）     
     * @param String $leftSendGoodMin     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setLeftSendGoodMin( $leftSendGoodMin) {
        $this->leftSendGoodMin = $leftSendGoodMin;
    }
    
        	
    private $logisticsStatus;
    
        /**
    * @return 物流状态
    */
        public function getLogisticsStatus() {
        return $this->logisticsStatus;
    }
    
    /**
     * 设置物流状态     
     * @param String $logisticsStatus     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setLogisticsStatus( $logisticsStatus) {
        $this->logisticsStatus = $logisticsStatus;
    }
    
        	
    private $orderDetailUrl;
    
        /**
    * @return 订单详情链接
    */
        public function getOrderDetailUrl() {
        return $this->orderDetailUrl;
    }
    
    /**
     * 设置订单详情链接     
     * @param String $orderDetailUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderDetailUrl( $orderDetailUrl) {
        $this->orderDetailUrl = $orderDetailUrl;
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
    
        	
    private $orderStatus;
    
        /**
    * @return 订单状态
    */
        public function getOrderStatus() {
        return $this->orderStatus;
    }
    
    /**
     * 设置订单状态     
     * @param String $orderStatus     
     * 参数示例：<pre>PLACE_ORDER_SUCCESS</pre>     
     * 此参数必填     */
    public function setOrderStatus( $orderStatus) {
        $this->orderStatus = $orderStatus;
    }
    
        	
    private $paymentType;
    
        /**
    * @return 支付类型
    */
        public function getPaymentType() {
        return $this->paymentType;
    }
    
    /**
     * 设置支付类型     
     * @param String $paymentType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPaymentType( $paymentType) {
        $this->paymentType = $paymentType;
    }
    
        	
    private $sellerLoginId;
    
        /**
    * @return 卖家登录ID
    */
        public function getSellerLoginId() {
        return $this->sellerLoginId;
    }
    
    /**
     * 设置卖家登录ID     
     * @param String $sellerLoginId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSellerLoginId( $sellerLoginId) {
        $this->sellerLoginId = $sellerLoginId;
    }
    
        	
    private $sellerSignerFullname;
    
        /**
    * @return 卖家全名
    */
        public function getSellerSignerFullname() {
        return $this->sellerSignerFullname;
    }
    
    /**
     * 设置卖家全名     
     * @param String $sellerSignerFullname     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSellerSignerFullname( $sellerSignerFullname) {
        $this->sellerSignerFullname = $sellerSignerFullname;
    }
    
        	
    private $timeoutLeftTime;
    
        /**
    * @return 超时剩余时间
    */
        public function getTimeoutLeftTime() {
        return $this->timeoutLeftTime;
    }
    
    /**
     * 设置超时剩余时间     
     * @param Long $timeoutLeftTime     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTimeoutLeftTime( $timeoutLeftTime) {
        $this->timeoutLeftTime = $timeoutLeftTime;
    }
    
        	
    private $escrowFee;
    
        /**
    * @return 手续费
    */
        public function getEscrowFee() {
        return $this->escrowFee;
    }
    
    /**
     * 设置手续费     
     * @param TradeMoney $escrowFee     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setEscrowFee(TradeMoney $escrowFee) {
        $this->escrowFee = $escrowFee;
    }
    
        	
    private $loanAmount;
    
        /**
    * @return 放款金额
    */
        public function getLoanAmount() {
        return $this->loanAmount;
    }
    
    /**
     * 设置放款金额     
     * @param TradeMoney $loanAmount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setLoanAmount(TradeMoney $loanAmount) {
        $this->loanAmount = $loanAmount;
    }
    
        	
    private $payAmount;
    
        /**
    * @return 付款金额
    */
        public function getPayAmount() {
        return $this->payAmount;
    }
    
    /**
     * 设置付款金额     
     * @param TradeMoney $payAmount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPayAmount(TradeMoney $payAmount) {
        $this->payAmount = $payAmount;
    }
    
        	
    private $productList;
    
        /**
    * @return 商品列表
    */
        public function getProductList() {
        return $this->productList;
    }
    
    /**
     * 设置商品列表     
     * @param array include @see OrderProductVO[] $productList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductList(OrderProductVO $productList) {
        $this->productList = $productList;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "bizType", $this->stdResult )) {
    				$this->bizType = $this->stdResult->{"bizType"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerLoginId", $this->stdResult )) {
    				$this->buyerLoginId = $this->stdResult->{"buyerLoginId"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerSignerFullname", $this->stdResult )) {
    				$this->buyerSignerFullname = $this->stdResult->{"buyerSignerFullname"};
    			}
    			    		    				    			    			if (array_key_exists ( "escrowFeeRate", $this->stdResult )) {
    				$this->escrowFeeRate = $this->stdResult->{"escrowFeeRate"};
    			}
    			    		    				    			    			if (array_key_exists ( "frozenStatus", $this->stdResult )) {
    				$this->frozenStatus = $this->stdResult->{"frozenStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "fundStatus", $this->stdResult )) {
    				$this->fundStatus = $this->stdResult->{"fundStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtCreate", $this->stdResult )) {
    				$this->gmtCreate = $this->stdResult->{"gmtCreate"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtPayTime", $this->stdResult )) {
    				$this->gmtPayTime = $this->stdResult->{"gmtPayTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtSendGoodsTime", $this->stdResult )) {
    				$this->gmtSendGoodsTime = $this->stdResult->{"gmtSendGoodsTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "hasRequestLoan", $this->stdResult )) {
    				$this->hasRequestLoan = $this->stdResult->{"hasRequestLoan"};
    			}
    			    		    				    			    			if (array_key_exists ( "issueStatus", $this->stdResult )) {
    				$this->issueStatus = $this->stdResult->{"issueStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "leftSendGoodDay", $this->stdResult )) {
    				$this->leftSendGoodDay = $this->stdResult->{"leftSendGoodDay"};
    			}
    			    		    				    			    			if (array_key_exists ( "leftSendGoodHour", $this->stdResult )) {
    				$this->leftSendGoodHour = $this->stdResult->{"leftSendGoodHour"};
    			}
    			    		    				    			    			if (array_key_exists ( "leftSendGoodMin", $this->stdResult )) {
    				$this->leftSendGoodMin = $this->stdResult->{"leftSendGoodMin"};
    			}
    			    		    				    			    			if (array_key_exists ( "logisticsStatus", $this->stdResult )) {
    				$this->logisticsStatus = $this->stdResult->{"logisticsStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "orderDetailUrl", $this->stdResult )) {
    				$this->orderDetailUrl = $this->stdResult->{"orderDetailUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "orderId", $this->stdResult )) {
    				$this->orderId = $this->stdResult->{"orderId"};
    			}
    			    		    				    			    			if (array_key_exists ( "orderStatus", $this->stdResult )) {
    				$this->orderStatus = $this->stdResult->{"orderStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "paymentType", $this->stdResult )) {
    				$this->paymentType = $this->stdResult->{"paymentType"};
    			}
    			    		    				    			    			if (array_key_exists ( "sellerLoginId", $this->stdResult )) {
    				$this->sellerLoginId = $this->stdResult->{"sellerLoginId"};
    			}
    			    		    				    			    			if (array_key_exists ( "sellerSignerFullname", $this->stdResult )) {
    				$this->sellerSignerFullname = $this->stdResult->{"sellerSignerFullname"};
    			}
    			    		    				    			    			if (array_key_exists ( "timeoutLeftTime", $this->stdResult )) {
    				$this->timeoutLeftTime = $this->stdResult->{"timeoutLeftTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "escrowFee", $this->stdResult )) {
    				$escrowFeeResult=$this->stdResult->{"escrowFee"};
    				$this->escrowFee = new TradeMoney();
    				$this->escrowFee->setStdResult ( $escrowFeeResult);
    			}
    			    		    				    			    			if (array_key_exists ( "loanAmount", $this->stdResult )) {
    				$loanAmountResult=$this->stdResult->{"loanAmount"};
    				$this->loanAmount = new TradeMoney();
    				$this->loanAmount->setStdResult ( $loanAmountResult);
    			}
    			    		    				    			    			if (array_key_exists ( "payAmount", $this->stdResult )) {
    				$payAmountResult=$this->stdResult->{"payAmount"};
    				$this->payAmount = new TradeMoney();
    				$this->payAmount->setStdResult ( $payAmountResult);
    			}
    			    		    				    			    			if (array_key_exists ( "productList", $this->stdResult )) {
    			$productListResult=$this->stdResult->{"productList"};
    				$object = json_decode ( json_encode ( $productListResult ), true );
					$this->productList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$OrderProductVOResult=new OrderProductVO();
						$OrderProductVOResult->setArrayResult($arrayobject );
						$this->productList [$i] = $OrderProductVOResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "bizType", $this->arrayResult )) {
    			$this->bizType = $arrayResult['bizType'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerLoginId", $this->arrayResult )) {
    			$this->buyerLoginId = $arrayResult['buyerLoginId'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerSignerFullname", $this->arrayResult )) {
    			$this->buyerSignerFullname = $arrayResult['buyerSignerFullname'];
    			}
    		    	    			    		    			if (array_key_exists ( "escrowFeeRate", $this->arrayResult )) {
    			$this->escrowFeeRate = $arrayResult['escrowFeeRate'];
    			}
    		    	    			    		    			if (array_key_exists ( "frozenStatus", $this->arrayResult )) {
    			$this->frozenStatus = $arrayResult['frozenStatus'];
    			}
    		    	    			    		    			if (array_key_exists ( "fundStatus", $this->arrayResult )) {
    			$this->fundStatus = $arrayResult['fundStatus'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtCreate", $this->arrayResult )) {
    			$this->gmtCreate = $arrayResult['gmtCreate'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtPayTime", $this->arrayResult )) {
    			$this->gmtPayTime = $arrayResult['gmtPayTime'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtSendGoodsTime", $this->arrayResult )) {
    			$this->gmtSendGoodsTime = $arrayResult['gmtSendGoodsTime'];
    			}
    		    	    			    		    			if (array_key_exists ( "hasRequestLoan", $this->arrayResult )) {
    			$this->hasRequestLoan = $arrayResult['hasRequestLoan'];
    			}
    		    	    			    		    			if (array_key_exists ( "issueStatus", $this->arrayResult )) {
    			$this->issueStatus = $arrayResult['issueStatus'];
    			}
    		    	    			    		    			if (array_key_exists ( "leftSendGoodDay", $this->arrayResult )) {
    			$this->leftSendGoodDay = $arrayResult['leftSendGoodDay'];
    			}
    		    	    			    		    			if (array_key_exists ( "leftSendGoodHour", $this->arrayResult )) {
    			$this->leftSendGoodHour = $arrayResult['leftSendGoodHour'];
    			}
    		    	    			    		    			if (array_key_exists ( "leftSendGoodMin", $this->arrayResult )) {
    			$this->leftSendGoodMin = $arrayResult['leftSendGoodMin'];
    			}
    		    	    			    		    			if (array_key_exists ( "logisticsStatus", $this->arrayResult )) {
    			$this->logisticsStatus = $arrayResult['logisticsStatus'];
    			}
    		    	    			    		    			if (array_key_exists ( "orderDetailUrl", $this->arrayResult )) {
    			$this->orderDetailUrl = $arrayResult['orderDetailUrl'];
    			}
    		    	    			    		    			if (array_key_exists ( "orderId", $this->arrayResult )) {
    			$this->orderId = $arrayResult['orderId'];
    			}
    		    	    			    		    			if (array_key_exists ( "orderStatus", $this->arrayResult )) {
    			$this->orderStatus = $arrayResult['orderStatus'];
    			}
    		    	    			    		    			if (array_key_exists ( "paymentType", $this->arrayResult )) {
    			$this->paymentType = $arrayResult['paymentType'];
    			}
    		    	    			    		    			if (array_key_exists ( "sellerLoginId", $this->arrayResult )) {
    			$this->sellerLoginId = $arrayResult['sellerLoginId'];
    			}
    		    	    			    		    			if (array_key_exists ( "sellerSignerFullname", $this->arrayResult )) {
    			$this->sellerSignerFullname = $arrayResult['sellerSignerFullname'];
    			}
    		    	    			    		    			if (array_key_exists ( "timeoutLeftTime", $this->arrayResult )) {
    			$this->timeoutLeftTime = $arrayResult['timeoutLeftTime'];
    			}
    		    	    			    		    		if (array_key_exists ( "escrowFee", $this->arrayResult )) {
    		$escrowFeeResult=$arrayResult['escrowFee'];
    			    			$this->escrowFee = new TradeMoney();
    			    			$this->escrowFee->$this->setStdResult ( $escrowFeeResult);
    		}
    		    	    			    		    		if (array_key_exists ( "loanAmount", $this->arrayResult )) {
    		$loanAmountResult=$arrayResult['loanAmount'];
    			    			$this->loanAmount = new TradeMoney();
    			    			$this->loanAmount->$this->setStdResult ( $loanAmountResult);
    		}
    		    	    			    		    		if (array_key_exists ( "payAmount", $this->arrayResult )) {
    		$payAmountResult=$arrayResult['payAmount'];
    			    			$this->payAmount = new TradeMoney();
    			    			$this->payAmount->$this->setStdResult ( $payAmountResult);
    		}
    		    	    			    		    		if (array_key_exists ( "productList", $this->arrayResult )) {
    		$productListResult=$arrayResult['productList'];
    			$this->productList = OrderProductVO();
    			$this->productList->$this->setStdResult ( $productListResult);
    		}
    		    	    		}
 
   
}
?>