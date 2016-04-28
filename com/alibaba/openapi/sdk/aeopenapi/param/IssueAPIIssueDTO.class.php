<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/IssueAPIIssueProcessDTO.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/IssueMoney.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/IssueMoney.class.php');

class IssueAPIIssueDTO extends SDKDomain {

       	
    private $id;
    
        /**
    * @return 纠纷ID
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置纠纷ID     
     * @param Long $id     
     * 参数示例：<pre>680*************804</pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
        	
    private $gmtCreate;
    
        /**
    * @return 纠纷创建时间
    */
        public function getGmtCreate() {
        return $this->gmtCreate;
    }
    
    /**
     * 设置纠纷创建时间     
     * @param Date $gmtCreate     
     * 参数示例：<pre>20150714020749000-0700</pre>     
     * 此参数必填     */
    public function setGmtCreate( $gmtCreate) {
        $this->gmtCreate = $gmtCreate;
    }
    
        	
    private $gmtModified;
    
        /**
    * @return 纠纷修改时间
    */
        public function getGmtModified() {
        return $this->gmtModified;
    }
    
    /**
     * 设置纠纷修改时间     
     * @param Date $gmtModified     
     * 参数示例：<pre>20150714021033000-0700</pre>     
     * 此参数必填     */
    public function setGmtModified( $gmtModified) {
        $this->gmtModified = $gmtModified;
    }
    
        	
    private $orderId;
    
        /**
    * @return 子订单ID
    */
        public function getOrderId() {
        return $this->orderId;
    }
    
    /**
     * 设置子订单ID     
     * @param Long $orderId     
     * 参数示例：<pre>680*************804</pre>     
     * 此参数必填     */
    public function setOrderId( $orderId) {
        $this->orderId = $orderId;
    }
    
        	
    private $parentOrderId;
    
        /**
    * @return 父订单ID
    */
        public function getParentOrderId() {
        return $this->parentOrderId;
    }
    
    /**
     * 设置父订单ID     
     * @param Long $parentOrderId     
     * 参数示例：<pre>0</pre>     
     * 此参数必填     */
    public function setParentOrderId( $parentOrderId) {
        $this->parentOrderId = $parentOrderId;
    }
    
        	
    private $issueStatus;
    
        /**
    * @return 纠纷状态
WAIT_SELLER_CONFIRM_REFUND 买家提起纠纷
SELLER_REFUSE_REFUND 卖家拒绝纠纷
ACCEPTISSUE 卖家接受纠纷
WAIT_BUYER_SEND_GOODS 等待买家发货
WAIT_SELLER_RECEIVE_GOODS 买家发货，等待卖家收货
ARBITRATING 仲裁中
SELLER_RESPONSE_ISSUE_TIMEOUT 卖家响应纠纷超时
    */
        public function getIssueStatus() {
        return $this->issueStatus;
    }
    
    /**
     * 设置纠纷状态
WAIT_SELLER_CONFIRM_REFUND 买家提起纠纷
SELLER_REFUSE_REFUND 卖家拒绝纠纷
ACCEPTISSUE 卖家接受纠纷
WAIT_BUYER_SEND_GOODS 等待买家发货
WAIT_SELLER_RECEIVE_GOODS 买家发货，等待卖家收货
ARBITRATING 仲裁中
SELLER_RESPONSE_ISSUE_TIMEOUT 卖家响应纠纷超时     
     * @param String $issueStatus     
     * 参数示例：<pre>WAIT_SELLER_CONFIRM_REFUND</pre>     
     * 此参数必填     */
    public function setIssueStatus( $issueStatus) {
        $this->issueStatus = $issueStatus;
    }
    
        	
    private $issueProcessDTOs;
    
        /**
    * @return 纠纷处理过程，只有detail接口展示
    */
        public function getIssueProcessDTOs() {
        return $this->issueProcessDTOs;
    }
    
    /**
     * 设置纠纷处理过程，只有detail接口展示     
     * @param array include @see IssueAPIIssueProcessDTO[] $issueProcessDTOs     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIssueProcessDTOs(IssueAPIIssueProcessDTO $issueProcessDTOs) {
        $this->issueProcessDTOs = $issueProcessDTOs;
    }
    
        	
    private $limitRefundAmount;
    
        /**
    * @return 退款金额美金
    */
        public function getLimitRefundAmount() {
        return $this->limitRefundAmount;
    }
    
    /**
     * 设置退款金额美金     
     * @param IssueMoney $limitRefundAmount     
     * 参数示例：<pre>{&quot;amount&quot;:0.01,&quot;cent&quot;:1,&quot;currencyCode&quot;:&quot;USD&quot;,&quot;centFactor&quot;:100,&quot;currency&quot;:{&quot;defaultFractionDigits&quot;:2,&quot;currencyCode&quot;:&quot;USD&quot;,&quot;symbol&quot;:&quot;$&quot;}</pre>     
     * 此参数必填     */
    public function setLimitRefundAmount(IssueMoney $limitRefundAmount) {
        $this->limitRefundAmount = $limitRefundAmount;
    }
    
        	
    private $limitRefundLocalAmount;
    
        /**
    * @return 退款金额本币
    */
        public function getLimitRefundLocalAmount() {
        return $this->limitRefundLocalAmount;
    }
    
    /**
     * 设置退款金额本币     
     * @param IssueMoney $limitRefundLocalAmount     
     * 参数示例：<pre>{&quot;amount&quot;:0.1,&quot;cent&quot;:10,&quot;currencyCode&quot;:&quot;RUB&quot;,&quot;centFactor&quot;:100,&quot;currency&quot;:{&quot;defaultFractionDigits&quot;:2,&quot;currencyCode&quot;:&quot;RUB&quot;,&quot;symbol&quot;:&quot;RUB&quot;}</pre>     
     * 此参数必填     */
    public function setLimitRefundLocalAmount(IssueMoney $limitRefundLocalAmount) {
        $this->limitRefundLocalAmount = $limitRefundLocalAmount;
    }
    
        	
    private $reasonChinese;
    
        /**
    * @return 纠纷原因中文描述
    */
        public function getReasonChinese() {
        return $this->reasonChinese;
    }
    
    /**
     * 设置纠纷原因中文描述     
     * @param String $reasonChinese     
     * 参数示例：<pre>产品数量不符</pre>     
     * 此参数必填     */
    public function setReasonChinese( $reasonChinese) {
        $this->reasonChinese = $reasonChinese;
    }
    
        	
    private $reasonEnglish;
    
        /**
    * @return 纠纷原因英文描述
    */
        public function getReasonEnglish() {
        return $this->reasonEnglish;
    }
    
    /**
     * 设置纠纷原因英文描述     
     * @param String $reasonEnglish     
     * 参数示例：<pre>Quantity shortage</pre>     
     * 此参数必填     */
    public function setReasonEnglish( $reasonEnglish) {
        $this->reasonEnglish = $reasonEnglish;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtCreate", $this->stdResult )) {
    				$this->gmtCreate = $this->stdResult->{"gmtCreate"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtModified", $this->stdResult )) {
    				$this->gmtModified = $this->stdResult->{"gmtModified"};
    			}
    			    		    				    			    			if (array_key_exists ( "orderId", $this->stdResult )) {
    				$this->orderId = $this->stdResult->{"orderId"};
    			}
    			    		    				    			    			if (array_key_exists ( "parentOrderId", $this->stdResult )) {
    				$this->parentOrderId = $this->stdResult->{"parentOrderId"};
    			}
    			    		    				    			    			if (array_key_exists ( "issueStatus", $this->stdResult )) {
    				$this->issueStatus = $this->stdResult->{"issueStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "issueProcessDTOs", $this->stdResult )) {
    			$issueProcessDTOsResult=$this->stdResult->{"issueProcessDTOs"};
    				$object = json_decode ( json_encode ( $issueProcessDTOsResult ), true );
					$this->issueProcessDTOs = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$IssueAPIIssueProcessDTOResult=new IssueAPIIssueProcessDTO();
						$IssueAPIIssueProcessDTOResult->setArrayResult($arrayobject );
						$this->issueProcessDTOs [$i] = $IssueAPIIssueProcessDTOResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "limitRefundAmount", $this->stdResult )) {
    				$limitRefundAmountResult=$this->stdResult->{"limitRefundAmount"};
    				$this->limitRefundAmount = new IssueMoney();
    				$this->limitRefundAmount->setStdResult ( $limitRefundAmountResult);
    			}
    			    		    				    			    			if (array_key_exists ( "limitRefundLocalAmount", $this->stdResult )) {
    				$limitRefundLocalAmountResult=$this->stdResult->{"limitRefundLocalAmount"};
    				$this->limitRefundLocalAmount = new IssueMoney();
    				$this->limitRefundLocalAmount->setStdResult ( $limitRefundLocalAmountResult);
    			}
    			    		    				    			    			if (array_key_exists ( "reasonChinese", $this->stdResult )) {
    				$this->reasonChinese = $this->stdResult->{"reasonChinese"};
    			}
    			    		    				    			    			if (array_key_exists ( "reasonEnglish", $this->stdResult )) {
    				$this->reasonEnglish = $this->stdResult->{"reasonEnglish"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['id'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtCreate", $this->arrayResult )) {
    			$this->gmtCreate = $arrayResult['gmtCreate'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtModified", $this->arrayResult )) {
    			$this->gmtModified = $arrayResult['gmtModified'];
    			}
    		    	    			    		    			if (array_key_exists ( "orderId", $this->arrayResult )) {
    			$this->orderId = $arrayResult['orderId'];
    			}
    		    	    			    		    			if (array_key_exists ( "parentOrderId", $this->arrayResult )) {
    			$this->parentOrderId = $arrayResult['parentOrderId'];
    			}
    		    	    			    		    			if (array_key_exists ( "issueStatus", $this->arrayResult )) {
    			$this->issueStatus = $arrayResult['issueStatus'];
    			}
    		    	    			    		    		if (array_key_exists ( "issueProcessDTOs", $this->arrayResult )) {
    		$issueProcessDTOsResult=$arrayResult['issueProcessDTOs'];
    			$this->issueProcessDTOs = IssueAPIIssueProcessDTO();
    			$this->issueProcessDTOs->$this->setStdResult ( $issueProcessDTOsResult);
    		}
    		    	    			    		    		if (array_key_exists ( "limitRefundAmount", $this->arrayResult )) {
    		$limitRefundAmountResult=$arrayResult['limitRefundAmount'];
    			    			$this->limitRefundAmount = new IssueMoney();
    			    			$this->limitRefundAmount->$this->setStdResult ( $limitRefundAmountResult);
    		}
    		    	    			    		    		if (array_key_exists ( "limitRefundLocalAmount", $this->arrayResult )) {
    		$limitRefundLocalAmountResult=$arrayResult['limitRefundLocalAmount'];
    			    			$this->limitRefundLocalAmount = new IssueMoney();
    			    			$this->limitRefundLocalAmount->$this->setStdResult ( $limitRefundLocalAmountResult);
    		}
    		    	    			    		    			if (array_key_exists ( "reasonChinese", $this->arrayResult )) {
    			$this->reasonChinese = $arrayResult['reasonChinese'];
    			}
    		    	    			    		    			if (array_key_exists ( "reasonEnglish", $this->arrayResult )) {
    			$this->reasonEnglish = $arrayResult['reasonEnglish'];
    			}
    		    	    		}
 
   
}
?>