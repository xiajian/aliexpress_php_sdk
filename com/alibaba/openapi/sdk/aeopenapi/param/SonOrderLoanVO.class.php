<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/TradeMoney.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/TradeMoney.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/TradeMoney.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/TradeMoney.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/TradeMoney.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/TradeMoney.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/TradeMoney.class.php');

class SonOrderLoanVO extends SDKDomain {

       	
    private $childOrderId;
    
        /**
    * @return 子订单ID
    */
        public function getChildOrderId() {
        return $this->childOrderId;
    }
    
    /**
     * 设置子订单ID     
     * @param Long $childOrderId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setChildOrderId( $childOrderId) {
        $this->childOrderId = $childOrderId;
    }
    
        	
    private $loanStatus;
    
        /**
    * @return 放款状态
    */
        public function getLoanStatus() {
        return $this->loanStatus;
    }
    
    /**
     * 设置放款状态     
     * @param String $loanStatus     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setLoanStatus( $loanStatus) {
        $this->loanStatus = $loanStatus;
    }
    
        	
    private $releasedDatetime;
    
        /**
    * @return 放款时间
    */
        public function getReleasedDatetime() {
        return $this->releasedDatetime;
    }
    
    /**
     * 设置放款时间     
     * @param Date $releasedDatetime     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setReleasedDatetime( $releasedDatetime) {
        $this->releasedDatetime = $releasedDatetime;
    }
    
        	
    private $waitLoanReson;
    
        /**
    * @return 待放款原因
    */
        public function getWaitLoanReson() {
        return $this->waitLoanReson;
    }
    
    /**
     * 设置待放款原因     
     * @param String $waitLoanReson     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setWaitLoanReson( $waitLoanReson) {
        $this->waitLoanReson = $waitLoanReson;
    }
    
        	
    private $affiliateCommission;
    
        /**
    * @return 联盟佣金
    */
        public function getAffiliateCommission() {
        return $this->affiliateCommission;
    }
    
    /**
     * 设置联盟佣金     
     * @param TradeMoney $affiliateCommission     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAffiliateCommission(TradeMoney $affiliateCommission) {
        $this->affiliateCommission = $affiliateCommission;
    }
    
        	
    private $amount;
    
        /**
    * @return 放款金额(已废弃)
    */
        public function getAmount() {
        return $this->amount;
    }
    
    /**
     * 设置放款金额(已废弃)     
     * @param TradeMoney $amount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAmount(TradeMoney $amount) {
        $this->amount = $amount;
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
    
        	
    private $realLoanAmount;
    
        /**
    * @return 实际放款出账金额
    */
        public function getRealLoanAmount() {
        return $this->realLoanAmount;
    }
    
    /**
     * 设置实际放款出账金额     
     * @param TradeMoney $realLoanAmount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRealLoanAmount(TradeMoney $realLoanAmount) {
        $this->realLoanAmount = $realLoanAmount;
    }
    
        	
    private $realRefundAmount;
    
        /**
    * @return 实际退款出账金额
    */
        public function getRealRefundAmount() {
        return $this->realRefundAmount;
    }
    
    /**
     * 设置实际退款出账金额     
     * @param TradeMoney $realRefundAmount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRealRefundAmount(TradeMoney $realRefundAmount) {
        $this->realRefundAmount = $realRefundAmount;
    }
    
        	
    private $refundAmount;
    
        /**
    * @return 退款金额
    */
        public function getRefundAmount() {
        return $this->refundAmount;
    }
    
    /**
     * 设置退款金额     
     * @param TradeMoney $refundAmount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRefundAmount(TradeMoney $refundAmount) {
        $this->refundAmount = $refundAmount;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "childOrderId", $this->stdResult )) {
    				$this->childOrderId = $this->stdResult->{"childOrderId"};
    			}
    			    		    				    			    			if (array_key_exists ( "loanStatus", $this->stdResult )) {
    				$this->loanStatus = $this->stdResult->{"loanStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "releasedDatetime", $this->stdResult )) {
    				$this->releasedDatetime = $this->stdResult->{"releasedDatetime"};
    			}
    			    		    				    			    			if (array_key_exists ( "waitLoanReson", $this->stdResult )) {
    				$this->waitLoanReson = $this->stdResult->{"waitLoanReson"};
    			}
    			    		    				    			    			if (array_key_exists ( "affiliateCommission", $this->stdResult )) {
    				$affiliateCommissionResult=$this->stdResult->{"affiliateCommission"};
    				$this->affiliateCommission = new TradeMoney();
    				$this->affiliateCommission->setStdResult ( $affiliateCommissionResult);
    			}
    			    		    				    			    			if (array_key_exists ( "amount", $this->stdResult )) {
    				$amountResult=$this->stdResult->{"amount"};
    				$this->amount = new TradeMoney();
    				$this->amount->setStdResult ( $amountResult);
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
    			    		    				    			    			if (array_key_exists ( "realLoanAmount", $this->stdResult )) {
    				$realLoanAmountResult=$this->stdResult->{"realLoanAmount"};
    				$this->realLoanAmount = new TradeMoney();
    				$this->realLoanAmount->setStdResult ( $realLoanAmountResult);
    			}
    			    		    				    			    			if (array_key_exists ( "realRefundAmount", $this->stdResult )) {
    				$realRefundAmountResult=$this->stdResult->{"realRefundAmount"};
    				$this->realRefundAmount = new TradeMoney();
    				$this->realRefundAmount->setStdResult ( $realRefundAmountResult);
    			}
    			    		    				    			    			if (array_key_exists ( "refundAmount", $this->stdResult )) {
    				$refundAmountResult=$this->stdResult->{"refundAmount"};
    				$this->refundAmount = new TradeMoney();
    				$this->refundAmount->setStdResult ( $refundAmountResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "childOrderId", $this->arrayResult )) {
    			$this->childOrderId = $arrayResult['childOrderId'];
    			}
    		    	    			    		    			if (array_key_exists ( "loanStatus", $this->arrayResult )) {
    			$this->loanStatus = $arrayResult['loanStatus'];
    			}
    		    	    			    		    			if (array_key_exists ( "releasedDatetime", $this->arrayResult )) {
    			$this->releasedDatetime = $arrayResult['releasedDatetime'];
    			}
    		    	    			    		    			if (array_key_exists ( "waitLoanReson", $this->arrayResult )) {
    			$this->waitLoanReson = $arrayResult['waitLoanReson'];
    			}
    		    	    			    		    		if (array_key_exists ( "affiliateCommission", $this->arrayResult )) {
    		$affiliateCommissionResult=$arrayResult['affiliateCommission'];
    			    			$this->affiliateCommission = new TradeMoney();
    			    			$this->affiliateCommission->$this->setStdResult ( $affiliateCommissionResult);
    		}
    		    	    			    		    		if (array_key_exists ( "amount", $this->arrayResult )) {
    		$amountResult=$arrayResult['amount'];
    			    			$this->amount = new TradeMoney();
    			    			$this->amount->$this->setStdResult ( $amountResult);
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
    		    	    			    		    		if (array_key_exists ( "realLoanAmount", $this->arrayResult )) {
    		$realLoanAmountResult=$arrayResult['realLoanAmount'];
    			    			$this->realLoanAmount = new TradeMoney();
    			    			$this->realLoanAmount->$this->setStdResult ( $realLoanAmountResult);
    		}
    		    	    			    		    		if (array_key_exists ( "realRefundAmount", $this->arrayResult )) {
    		$realRefundAmountResult=$arrayResult['realRefundAmount'];
    			    			$this->realRefundAmount = new TradeMoney();
    			    			$this->realRefundAmount->$this->setStdResult ( $realRefundAmountResult);
    		}
    		    	    			    		    		if (array_key_exists ( "refundAmount", $this->arrayResult )) {
    		$refundAmountResult=$arrayResult['refundAmount'];
    			    			$this->refundAmount = new TradeMoney();
    			    			$this->refundAmount->$this->setStdResult ( $refundAmountResult);
    		}
    		    	    		}
 
   
}
?>