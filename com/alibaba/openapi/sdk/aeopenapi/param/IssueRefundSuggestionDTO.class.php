<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/IssueMoney.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/IssueMoney.class.php');

class IssueRefundSuggestionDTO extends SDKDomain {

       	
    private $issueMoney;
    
        /**
    * @return 退款金额本币
    */
        public function getIssueMoney() {
        return $this->issueMoney;
    }
    
    /**
     * 设置退款金额本币     
     * @param IssueMoney $issueMoney     
     * 参数示例：<pre>1120 RUB</pre>     
     * 此参数必填     */
    public function setIssueMoney(IssueMoney $issueMoney) {
        $this->issueMoney = $issueMoney;
    }
    
        	
    private $issueMoneyPost;
    
        /**
    * @return 退款金额美金
    */
        public function getIssueMoneyPost() {
        return $this->issueMoneyPost;
    }
    
    /**
     * 设置退款金额美金     
     * @param IssueMoney $issueMoneyPost     
     * 参数示例：<pre>56 USD</pre>     
     * 此参数必填     */
    public function setIssueMoneyPost(IssueMoney $issueMoneyPost) {
        $this->issueMoneyPost = $issueMoneyPost;
    }
    
        	
    private $issueRefundType;
    
        /**
    * @return 退款类型:
1.full_amount_refund  全额退款
2.part_amount_refund 部分退款
3.no_amount_refund 不退款
    */
        public function getIssueRefundType() {
        return $this->issueRefundType;
    }
    
    /**
     * 设置退款类型:
1.full_amount_refund  全额退款
2.part_amount_refund 部分退款
3.no_amount_refund 不退款     
     * @param String $issueRefundType     
     * 参数示例：<pre>full_amount_refund</pre>     
     * 此参数必填     */
    public function setIssueRefundType( $issueRefundType) {
        $this->issueRefundType = $issueRefundType;
    }
    
        	
    private $issueReturnGoods;
    
        /**
    * @return 是否退货
    */
        public function getIssueReturnGoods() {
        return $this->issueReturnGoods;
    }
    
    /**
     * 设置是否退货     
     * @param Boolean $issueReturnGoods     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setIssueReturnGoods( $issueReturnGoods) {
        $this->issueReturnGoods = $issueReturnGoods;
    }
    
        	
    private $isDefault;
    
        /**
    * @return 是否默认方案
    */
        public function getIsDefault() {
        return $this->isDefault;
    }
    
    /**
     * 设置是否默认方案     
     * @param Boolean $isDefault     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setIsDefault( $isDefault) {
        $this->isDefault = $isDefault;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "issueMoney", $this->stdResult )) {
    				$issueMoneyResult=$this->stdResult->{"issueMoney"};
    				$this->issueMoney = new IssueMoney();
    				$this->issueMoney->setStdResult ( $issueMoneyResult);
    			}
    			    		    				    			    			if (array_key_exists ( "issueMoneyPost", $this->stdResult )) {
    				$issueMoneyPostResult=$this->stdResult->{"issueMoneyPost"};
    				$this->issueMoneyPost = new IssueMoney();
    				$this->issueMoneyPost->setStdResult ( $issueMoneyPostResult);
    			}
    			    		    				    			    			if (array_key_exists ( "issueRefundType", $this->stdResult )) {
    				$this->issueRefundType = $this->stdResult->{"issueRefundType"};
    			}
    			    		    				    			    			if (array_key_exists ( "issueReturnGoods", $this->stdResult )) {
    				$this->issueReturnGoods = $this->stdResult->{"issueReturnGoods"};
    			}
    			    		    				    			    			if (array_key_exists ( "isDefault", $this->stdResult )) {
    				$this->isDefault = $this->stdResult->{"isDefault"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "issueMoney", $this->arrayResult )) {
    		$issueMoneyResult=$arrayResult['issueMoney'];
    			    			$this->issueMoney = new IssueMoney();
    			    			$this->issueMoney->$this->setStdResult ( $issueMoneyResult);
    		}
    		    	    			    		    		if (array_key_exists ( "issueMoneyPost", $this->arrayResult )) {
    		$issueMoneyPostResult=$arrayResult['issueMoneyPost'];
    			    			$this->issueMoneyPost = new IssueMoney();
    			    			$this->issueMoneyPost->$this->setStdResult ( $issueMoneyPostResult);
    		}
    		    	    			    		    			if (array_key_exists ( "issueRefundType", $this->arrayResult )) {
    			$this->issueRefundType = $arrayResult['issueRefundType'];
    			}
    		    	    			    		    			if (array_key_exists ( "issueReturnGoods", $this->arrayResult )) {
    			$this->issueReturnGoods = $arrayResult['issueReturnGoods'];
    			}
    		    	    			    		    			if (array_key_exists ( "isDefault", $this->arrayResult )) {
    			$this->isDefault = $arrayResult['isDefault'];
    			}
    		    	    		}
 
   
}
?>