<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class OrderBaseInfo extends SDKDomain {

       	
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
    
        	
    private $gmtCreate;
    
        /**
    * @return 创建时间
    */
        public function getGmtCreate() {
        return $this->gmtCreate;
    }
    
    /**
     * 设置创建时间     
     * @param String $gmtCreate     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtCreate( $gmtCreate) {
        $this->gmtCreate = $gmtCreate;
    }
    
        	
    private $gmtModified;
    
        /**
    * @return 修改时间
    */
        public function getGmtModified() {
        return $this->gmtModified;
    }
    
    /**
     * 设置修改时间     
     * @param String $gmtModified     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtModified( $gmtModified) {
        $this->gmtModified = $gmtModified;
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
    
        	
    private $loanStatus;
    
        /**
    * @return 订单放款状态：wait_loan 未放款，loan_ok已放款。
    */
        public function getLoanStatus() {
        return $this->loanStatus;
    }
    
    /**
     * 设置订单放款状态：wait_loan 未放款，loan_ok已放款。     
     * @param String $loanStatus     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setLoanStatus( $loanStatus) {
        $this->loanStatus = $loanStatus;
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
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderStatus( $orderStatus) {
        $this->orderStatus = $orderStatus;
    }
    
        	
    private $sellerOperatorLoginId;
    
        /**
    * @return 卖家ID
    */
        public function getSellerOperatorLoginId() {
        return $this->sellerOperatorLoginId;
    }
    
    /**
     * 设置卖家ID     
     * @param String $sellerOperatorLoginId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSellerOperatorLoginId( $sellerOperatorLoginId) {
        $this->sellerOperatorLoginId = $sellerOperatorLoginId;
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
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "frozenStatus", $this->stdResult )) {
    				$this->frozenStatus = $this->stdResult->{"frozenStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "fundStatus", $this->stdResult )) {
    				$this->fundStatus = $this->stdResult->{"fundStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtCreate", $this->stdResult )) {
    				$this->gmtCreate = $this->stdResult->{"gmtCreate"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtModified", $this->stdResult )) {
    				$this->gmtModified = $this->stdResult->{"gmtModified"};
    			}
    			    		    				    			    			if (array_key_exists ( "issueStatus", $this->stdResult )) {
    				$this->issueStatus = $this->stdResult->{"issueStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "loanStatus", $this->stdResult )) {
    				$this->loanStatus = $this->stdResult->{"loanStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "logisticsStatus", $this->stdResult )) {
    				$this->logisticsStatus = $this->stdResult->{"logisticsStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "orderStatus", $this->stdResult )) {
    				$this->orderStatus = $this->stdResult->{"orderStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "sellerOperatorLoginId", $this->stdResult )) {
    				$this->sellerOperatorLoginId = $this->stdResult->{"sellerOperatorLoginId"};
    			}
    			    		    				    			    			if (array_key_exists ( "sellerSignerFullname", $this->stdResult )) {
    				$this->sellerSignerFullname = $this->stdResult->{"sellerSignerFullname"};
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
    		    	    			    		    			if (array_key_exists ( "gmtCreate", $this->arrayResult )) {
    			$this->gmtCreate = $arrayResult['gmtCreate'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtModified", $this->arrayResult )) {
    			$this->gmtModified = $arrayResult['gmtModified'];
    			}
    		    	    			    		    			if (array_key_exists ( "issueStatus", $this->arrayResult )) {
    			$this->issueStatus = $arrayResult['issueStatus'];
    			}
    		    	    			    		    			if (array_key_exists ( "loanStatus", $this->arrayResult )) {
    			$this->loanStatus = $arrayResult['loanStatus'];
    			}
    		    	    			    		    			if (array_key_exists ( "logisticsStatus", $this->arrayResult )) {
    			$this->logisticsStatus = $arrayResult['logisticsStatus'];
    			}
    		    	    			    		    			if (array_key_exists ( "orderStatus", $this->arrayResult )) {
    			$this->orderStatus = $arrayResult['orderStatus'];
    			}
    		    	    			    		    			if (array_key_exists ( "sellerOperatorLoginId", $this->arrayResult )) {
    			$this->sellerOperatorLoginId = $arrayResult['sellerOperatorLoginId'];
    			}
    		    	    			    		    			if (array_key_exists ( "sellerSignerFullname", $this->arrayResult )) {
    			$this->sellerSignerFullname = $arrayResult['sellerSignerFullname'];
    			}
    		    	    		}
 
   
}
?>