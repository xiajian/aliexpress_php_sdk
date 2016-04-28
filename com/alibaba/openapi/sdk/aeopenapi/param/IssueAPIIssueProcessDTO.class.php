<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/IssueMoney.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/IssueMoney.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/IssueRefundSuggestionDTO.class.php');

class IssueAPIIssueProcessDTO extends SDKDomain {

       	
    private $id;
    
        /**
    * @return 过程id
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置过程id     
     * @param Long $id     
     * 参数示例：<pre>680*************804</pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
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
     * @param Date $gmtCreate     
     * 参数示例：<pre>20150714020749000-0700</pre>     
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
     * @param Date $gmtModified     
     * 参数示例：<pre>20150714020749000-0700</pre>     
     * 此参数必填     */
    public function setGmtModified( $gmtModified) {
        $this->gmtModified = $gmtModified;
    }
    
        	
    private $issueId;
    
        /**
    * @return 纠纷id
    */
        public function getIssueId() {
        return $this->issueId;
    }
    
    /**
     * 设置纠纷id     
     * @param Long $issueId     
     * 参数示例：<pre>680*************804</pre>     
     * 此参数必填     */
    public function setIssueId( $issueId) {
        $this->issueId = $issueId;
    }
    
        	
    private $reason;
    
        /**
    * @return 纠纷原因
    */
        public function getReason() {
        return $this->reason;
    }
    
    /**
     * 设置纠纷原因     
     * @param String $reason     
     * 参数示例：<pre>Color_not_as_described@3rdIssueReason</pre>     
     * 此参数必填     */
    public function setReason( $reason) {
        $this->reason = $reason;
    }
    
        	
    private $content;
    
        /**
    * @return 纠纷描述
    */
        public function getContent() {
        return $this->content;
    }
    
    /**
     * 设置纠纷描述     
     * @param String $content     
     * 参数示例：<pre>The produit don't turn one.</pre>     
     * 此参数必填     */
    public function setContent( $content) {
        $this->content = $content;
    }
    
        	
    private $refundAmount;
    
        /**
    * @return 退款金额本币
    */
        public function getRefundAmount() {
        return $this->refundAmount;
    }
    
    /**
     * 设置退款金额本币     
     * @param IssueMoney $refundAmount     
     * 参数示例：<pre>{&quot;amount&quot;:0.1,&quot;cent&quot;:10,&quot;currencyCode&quot;:&quot;RUB&quot;,&quot;centFactor&quot;:100,&quot;currency&quot;:{&quot;defaultFractionDigits&quot;:2,&quot;currencyCode&quot;:&quot;RUB&quot;,&quot;symbol&quot;:&quot;RUB&quot;}</pre>     
     * 此参数必填     */
    public function setRefundAmount(IssueMoney $refundAmount) {
        $this->refundAmount = $refundAmount;
    }
    
        	
    private $refundConfirmAmount;
    
        /**
    * @return 退款金额美元
    */
        public function getRefundConfirmAmount() {
        return $this->refundConfirmAmount;
    }
    
    /**
     * 设置退款金额美元     
     * @param IssueMoney $refundConfirmAmount     
     * 参数示例：<pre>{&quot;amount&quot;:0.01,&quot;cent&quot;:1,&quot;currencyCode&quot;:&quot;USD&quot;,&quot;centFactor&quot;:100,&quot;currency&quot;:{&quot;defaultFractionDigits&quot;:2,&quot;currencyCode&quot;:&quot;USD&quot;,&quot;symbol&quot;:&quot;$&quot;}</pre>     
     * 此参数必填     */
    public function setRefundConfirmAmount(IssueMoney $refundConfirmAmount) {
        $this->refundConfirmAmount = $refundConfirmAmount;
    }
    
        	
    private $actionType;
    
        /**
    * @return 操作
    */
        public function getActionType() {
        return $this->actionType;
    }
    
    /**
     * 设置操作     
     * @param String $actionType     
     * 参数示例：<pre>seller_accept</pre>     
     * 此参数必填     */
    public function setActionType( $actionType) {
        $this->actionType = $actionType;
    }
    
        	
    private $submitMemberType;
    
        /**
    * @return 操作人类型
seller 卖家
buyer 买家
system 系统
    */
        public function getSubmitMemberType() {
        return $this->submitMemberType;
    }
    
    /**
     * 设置操作人类型
seller 卖家
buyer 买家
system 系统     
     * @param String $submitMemberType     
     * 参数示例：<pre>seller</pre>     
     * 此参数必填     */
    public function setSubmitMemberType( $submitMemberType) {
        $this->submitMemberType = $submitMemberType;
    }
    
        	
    private $attachments;
    
        /**
    * @return 附件列表
    */
        public function getAttachments() {
        return $this->attachments;
    }
    
    /**
     * 设置附件列表     
     * @param array include @see String[] $attachments     
     * 参数示例：<pre>[&quot;http://g02.a.alicdn.com/kf/UT8B.pjXtxbXXcUQpbXm.png&quot;]}]</pre>     
     * 此参数必填     */
    public function setAttachments( $attachments) {
        $this->attachments = $attachments;
    }
    
        	
    private $isReceivedGoods;
    
        /**
    * @return 是否收到货
Y
N
    */
        public function getIsReceivedGoods() {
        return $this->isReceivedGoods;
    }
    
    /**
     * 设置是否收到货
Y
N     
     * @param String $isReceivedGoods     
     * 参数示例：<pre>Y</pre>     
     * 此参数必填     */
    public function setIsReceivedGoods( $isReceivedGoods) {
        $this->isReceivedGoods = $isReceivedGoods;
    }
    
        	
    private $videos;
    
        /**
    * @return 视频列表
    */
        public function getVideos() {
        return $this->videos;
    }
    
    /**
     * 设置视频列表     
     * @param array include @see String[] $videos     
     * 参数示例：<pre>[&quot;http://cloud.video.taobao.com/play/u/133146836577/p/1/e/1/t/1/d/hd/fv/27046845.swf&quot;]}]</pre>     
     * 此参数必填     */
    public function setVideos( $videos) {
        $this->videos = $videos;
    }
    
        	
    private $issueRefundSuggestionList;
    
        /**
    * @return 纠纷协商方案
    */
        public function getIssueRefundSuggestionList() {
        return $this->issueRefundSuggestionList;
    }
    
    /**
     * 设置纠纷协商方案     
     * @param array include @see IssueRefundSuggestionDTO[] $issueRefundSuggestionList     
     * 参数示例：<pre>{&quot;isDefault&quot;:true,&quot;issueMoney&quot;:{&quot;amount&quot;:74.47,&quot;cent&quot;:7447,&quot;centFactor&quot;:100,&quot;currency&quot;:{&quot;currencyCode&quot;:&quot;RUB&quot;,&quot;symbol&quot;:&quot;RUB&quot;},&quot;currencyCode&quot;:&quot;RUB&quot;},&quot;issueMoneyPost&quot;:{&quot;amount&quot;:1.42,&quot;cent&quot;:142,&quot;centFactor&quot;:100,&quot;currency&quot;:{&quot;currencyCode&quot;:&quot;USD&quot;,&quot;symbol&quot;:&quot;$&quot;},&quot;currencyCode&quot;:&quot;USD&quot;},&quot;issueRefundType&quot;:&quot;full_amount_refund&quot;,&quot;issueReturnGoods&quot;:false}</pre>     
     * 此参数必填     */
    public function setIssueRefundSuggestionList(IssueRefundSuggestionDTO $issueRefundSuggestionList) {
        $this->issueRefundSuggestionList = $issueRefundSuggestionList;
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
    			    		    				    			    			if (array_key_exists ( "issueId", $this->stdResult )) {
    				$this->issueId = $this->stdResult->{"issueId"};
    			}
    			    		    				    			    			if (array_key_exists ( "reason", $this->stdResult )) {
    				$this->reason = $this->stdResult->{"reason"};
    			}
    			    		    				    			    			if (array_key_exists ( "content", $this->stdResult )) {
    				$this->content = $this->stdResult->{"content"};
    			}
    			    		    				    			    			if (array_key_exists ( "refundAmount", $this->stdResult )) {
    				$refundAmountResult=$this->stdResult->{"refundAmount"};
    				$this->refundAmount = new IssueMoney();
    				$this->refundAmount->setStdResult ( $refundAmountResult);
    			}
    			    		    				    			    			if (array_key_exists ( "refundConfirmAmount", $this->stdResult )) {
    				$refundConfirmAmountResult=$this->stdResult->{"refundConfirmAmount"};
    				$this->refundConfirmAmount = new IssueMoney();
    				$this->refundConfirmAmount->setStdResult ( $refundConfirmAmountResult);
    			}
    			    		    				    			    			if (array_key_exists ( "actionType", $this->stdResult )) {
    				$this->actionType = $this->stdResult->{"actionType"};
    			}
    			    		    				    			    			if (array_key_exists ( "submitMemberType", $this->stdResult )) {
    				$this->submitMemberType = $this->stdResult->{"submitMemberType"};
    			}
    			    		    				    			    			if (array_key_exists ( "attachments", $this->stdResult )) {
    				$this->attachments = $this->stdResult->{"attachments"};
    			}
    			    		    				    			    			if (array_key_exists ( "isReceivedGoods", $this->stdResult )) {
    				$this->isReceivedGoods = $this->stdResult->{"isReceivedGoods"};
    			}
    			    		    				    			    			if (array_key_exists ( "videos", $this->stdResult )) {
    				$this->videos = $this->stdResult->{"videos"};
    			}
    			    		    				    			    			if (array_key_exists ( "issueRefundSuggestionList", $this->stdResult )) {
    			$issueRefundSuggestionListResult=$this->stdResult->{"issueRefundSuggestionList"};
    				$object = json_decode ( json_encode ( $issueRefundSuggestionListResult ), true );
					$this->issueRefundSuggestionList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$IssueRefundSuggestionDTOResult=new IssueRefundSuggestionDTO();
						$IssueRefundSuggestionDTOResult->setArrayResult($arrayobject );
						$this->issueRefundSuggestionList [$i] = $IssueRefundSuggestionDTOResult;
					}
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
    		    	    			    		    			if (array_key_exists ( "issueId", $this->arrayResult )) {
    			$this->issueId = $arrayResult['issueId'];
    			}
    		    	    			    		    			if (array_key_exists ( "reason", $this->arrayResult )) {
    			$this->reason = $arrayResult['reason'];
    			}
    		    	    			    		    			if (array_key_exists ( "content", $this->arrayResult )) {
    			$this->content = $arrayResult['content'];
    			}
    		    	    			    		    		if (array_key_exists ( "refundAmount", $this->arrayResult )) {
    		$refundAmountResult=$arrayResult['refundAmount'];
    			    			$this->refundAmount = new IssueMoney();
    			    			$this->refundAmount->$this->setStdResult ( $refundAmountResult);
    		}
    		    	    			    		    		if (array_key_exists ( "refundConfirmAmount", $this->arrayResult )) {
    		$refundConfirmAmountResult=$arrayResult['refundConfirmAmount'];
    			    			$this->refundConfirmAmount = new IssueMoney();
    			    			$this->refundConfirmAmount->$this->setStdResult ( $refundConfirmAmountResult);
    		}
    		    	    			    		    			if (array_key_exists ( "actionType", $this->arrayResult )) {
    			$this->actionType = $arrayResult['actionType'];
    			}
    		    	    			    		    			if (array_key_exists ( "submitMemberType", $this->arrayResult )) {
    			$this->submitMemberType = $arrayResult['submitMemberType'];
    			}
    		    	    			    		    			if (array_key_exists ( "attachments", $this->arrayResult )) {
    			$this->attachments = $arrayResult['attachments'];
    			}
    		    	    			    		    			if (array_key_exists ( "isReceivedGoods", $this->arrayResult )) {
    			$this->isReceivedGoods = $arrayResult['isReceivedGoods'];
    			}
    		    	    			    		    			if (array_key_exists ( "videos", $this->arrayResult )) {
    			$this->videos = $arrayResult['videos'];
    			}
    		    	    			    		    		if (array_key_exists ( "issueRefundSuggestionList", $this->arrayResult )) {
    		$issueRefundSuggestionListResult=$arrayResult['issueRefundSuggestionList'];
    			$this->issueRefundSuggestionList = IssueRefundSuggestionDTO();
    			$this->issueRefundSuggestionList->$this->setStdResult ( $issueRefundSuggestionListResult);
    		}
    		    	    		}
 
   
}
?>