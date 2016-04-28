<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AeopAEProductDisplaySampleDTO extends SDKDomain {

       	
    private $subject;
    
        /**
    * @return 商品标题
    */
        public function getSubject() {
        return $this->subject;
    }
    
    /**
     * 设置商品标题     
     * @param String $subject     
     * 参数示例：<pre>knew odd</pre>     
     * 此参数必填     */
    public function setSubject( $subject) {
        $this->subject = $subject;
    }
    
        	
    private $groupId;
    
        /**
    * @return 商品分组id
    */
        public function getGroupId() {
        return $this->groupId;
    }
    
    /**
     * 设置商品分组id     
     * @param Integer $groupId     
     * 参数示例：<pre>123</pre>     
     * 此参数必填     */
    public function setGroupId( $groupId) {
        $this->groupId = $groupId;
    }
    
        	
    private $wsOfflineDate;
    
        /**
    * @return 下架时间
    */
        public function getWsOfflineDate() {
        return $this->wsOfflineDate;
    }
    
    /**
     * 设置下架时间     
     * @param Date $wsOfflineDate     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setWsOfflineDate( $wsOfflineDate) {
        $this->wsOfflineDate = $wsOfflineDate;
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
    
        	
    private $imageURLs;
    
        /**
    * @return 图片URL.静态单图主图个数为1,动态多图主图个数为2-6. 多个图片url用&lsquo;;&rsquo;分隔符连接。
    */
        public function getImageURLs() {
        return $this->imageURLs;
    }
    
    /**
     * 设置图片URL.静态单图主图个数为1,动态多图主图个数为2-6. 多个图片url用&lsquo;;&rsquo;分隔符连接。     
     * @param String $imageURLs     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setImageURLs( $imageURLs) {
        $this->imageURLs = $imageURLs;
    }
    
        	
    private $src;
    
        /**
    * @return 产品来源。'tdx'为淘宝代销产品，isv为通过API发布的商品。其他字符或空为普通产品。
    */
        public function getSrc() {
        return $this->src;
    }
    
    /**
     * 设置产品来源。'tdx'为淘宝代销产品，isv为通过API发布的商品。其他字符或空为普通产品。     
     * @param String $src     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSrc( $src) {
        $this->src = $src;
    }
    
        	
    private $gmtCreate;
    
        /**
    * @return 产品发布时间。
    */
        public function getGmtCreate() {
        return $this->gmtCreate;
    }
    
    /**
     * 设置产品发布时间。     
     * @param Date $gmtCreate     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtCreate( $gmtCreate) {
        $this->gmtCreate = $gmtCreate;
    }
    
        	
    private $gmtModified;
    
        /**
    * @return 商品最后更新时间（系统更新时间也会记录）。
    */
        public function getGmtModified() {
        return $this->gmtModified;
    }
    
    /**
     * 设置商品最后更新时间（系统更新时间也会记录）。     
     * @param Date $gmtModified     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtModified( $gmtModified) {
        $this->gmtModified = $gmtModified;
    }
    
        	
    private $productMinPrice;
    
        /**
    * @return 最小价格。
    */
        public function getProductMinPrice() {
        return $this->productMinPrice;
    }
    
    /**
     * 设置最小价格。     
     * @param String $productMinPrice     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductMinPrice( $productMinPrice) {
        $this->productMinPrice = $productMinPrice;
    }
    
        	
    private $productMaxPrice;
    
        /**
    * @return 最大价格。
    */
        public function getProductMaxPrice() {
        return $this->productMaxPrice;
    }
    
    /**
     * 设置最大价格。     
     * @param String $productMaxPrice     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductMaxPrice( $productMaxPrice) {
        $this->productMaxPrice = $productMaxPrice;
    }
    
        	
    private $ownerMemberId;
    
        /**
    * @return 商品所属人loginId
    */
        public function getOwnerMemberId() {
        return $this->ownerMemberId;
    }
    
    /**
     * 设置商品所属人loginId     
     * @param String $ownerMemberId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOwnerMemberId( $ownerMemberId) {
        $this->ownerMemberId = $ownerMemberId;
    }
    
        	
    private $ownerMemberSeq;
    
        /**
    * @return 商品所属人Seq
    */
        public function getOwnerMemberSeq() {
        return $this->ownerMemberSeq;
    }
    
    /**
     * 设置商品所属人Seq     
     * @param Integer $ownerMemberSeq     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOwnerMemberSeq( $ownerMemberSeq) {
        $this->ownerMemberSeq = $ownerMemberSeq;
    }
    
        	
    private $wsDisplay;
    
        /**
    * @return 商品下架原因：expire_offline：过期下架，user_offline：用户下架,violate_offline：违规下架,punish_offline：交易违规下架，degrade_offline：降级下架
    */
        public function getWsDisplay() {
        return $this->wsDisplay;
    }
    
    /**
     * 设置商品下架原因：expire_offline：过期下架，user_offline：用户下架,violate_offline：违规下架,punish_offline：交易违规下架，degrade_offline：降级下架     
     * @param Integer $wsDisplay     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setWsDisplay( $wsDisplay) {
        $this->wsDisplay = $wsDisplay;
    }
    
        	
    private $currencyCode;
    
        /**
    * @return 货币单位
    */
        public function getCurrencyCode() {
        return $this->currencyCode;
    }
    
    /**
     * 设置货币单位     
     * @param String $currencyCode     
     * 参数示例：<pre>USD;RUB</pre>     
     * 此参数必填     */
    public function setCurrencyCode( $currencyCode) {
        $this->currencyCode = $currencyCode;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "subject", $this->stdResult )) {
    				$this->subject = $this->stdResult->{"subject"};
    			}
    			    		    				    			    			if (array_key_exists ( "groupId", $this->stdResult )) {
    				$this->groupId = $this->stdResult->{"groupId"};
    			}
    			    		    				    			    			if (array_key_exists ( "wsOfflineDate", $this->stdResult )) {
    				$this->wsOfflineDate = $this->stdResult->{"wsOfflineDate"};
    			}
    			    		    				    			    			if (array_key_exists ( "productId", $this->stdResult )) {
    				$this->productId = $this->stdResult->{"productId"};
    			}
    			    		    				    			    			if (array_key_exists ( "imageURLs", $this->stdResult )) {
    				$this->imageURLs = $this->stdResult->{"imageURLs"};
    			}
    			    		    				    			    			if (array_key_exists ( "src", $this->stdResult )) {
    				$this->src = $this->stdResult->{"src"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtCreate", $this->stdResult )) {
    				$this->gmtCreate = $this->stdResult->{"gmtCreate"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtModified", $this->stdResult )) {
    				$this->gmtModified = $this->stdResult->{"gmtModified"};
    			}
    			    		    				    			    			if (array_key_exists ( "productMinPrice", $this->stdResult )) {
    				$this->productMinPrice = $this->stdResult->{"productMinPrice"};
    			}
    			    		    				    			    			if (array_key_exists ( "productMaxPrice", $this->stdResult )) {
    				$this->productMaxPrice = $this->stdResult->{"productMaxPrice"};
    			}
    			    		    				    			    			if (array_key_exists ( "ownerMemberId", $this->stdResult )) {
    				$this->ownerMemberId = $this->stdResult->{"ownerMemberId"};
    			}
    			    		    				    			    			if (array_key_exists ( "ownerMemberSeq", $this->stdResult )) {
    				$this->ownerMemberSeq = $this->stdResult->{"ownerMemberSeq"};
    			}
    			    		    				    			    			if (array_key_exists ( "wsDisplay", $this->stdResult )) {
    				$this->wsDisplay = $this->stdResult->{"wsDisplay"};
    			}
    			    		    				    			    			if (array_key_exists ( "currencyCode", $this->stdResult )) {
    				$this->currencyCode = $this->stdResult->{"currencyCode"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "subject", $this->arrayResult )) {
    			$this->subject = $arrayResult['subject'];
    			}
    		    	    			    		    			if (array_key_exists ( "groupId", $this->arrayResult )) {
    			$this->groupId = $arrayResult['groupId'];
    			}
    		    	    			    		    			if (array_key_exists ( "wsOfflineDate", $this->arrayResult )) {
    			$this->wsOfflineDate = $arrayResult['wsOfflineDate'];
    			}
    		    	    			    		    			if (array_key_exists ( "productId", $this->arrayResult )) {
    			$this->productId = $arrayResult['productId'];
    			}
    		    	    			    		    			if (array_key_exists ( "imageURLs", $this->arrayResult )) {
    			$this->imageURLs = $arrayResult['imageURLs'];
    			}
    		    	    			    		    			if (array_key_exists ( "src", $this->arrayResult )) {
    			$this->src = $arrayResult['src'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtCreate", $this->arrayResult )) {
    			$this->gmtCreate = $arrayResult['gmtCreate'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtModified", $this->arrayResult )) {
    			$this->gmtModified = $arrayResult['gmtModified'];
    			}
    		    	    			    		    			if (array_key_exists ( "productMinPrice", $this->arrayResult )) {
    			$this->productMinPrice = $arrayResult['productMinPrice'];
    			}
    		    	    			    		    			if (array_key_exists ( "productMaxPrice", $this->arrayResult )) {
    			$this->productMaxPrice = $arrayResult['productMaxPrice'];
    			}
    		    	    			    		    			if (array_key_exists ( "ownerMemberId", $this->arrayResult )) {
    			$this->ownerMemberId = $arrayResult['ownerMemberId'];
    			}
    		    	    			    		    			if (array_key_exists ( "ownerMemberSeq", $this->arrayResult )) {
    			$this->ownerMemberSeq = $arrayResult['ownerMemberSeq'];
    			}
    		    	    			    		    			if (array_key_exists ( "wsDisplay", $this->arrayResult )) {
    			$this->wsDisplay = $arrayResult['wsDisplay'];
    			}
    		    	    			    		    			if (array_key_exists ( "currencyCode", $this->arrayResult )) {
    			$this->currencyCode = $arrayResult['currencyCode'];
    			}
    		    	    		}
 
   
}
?>