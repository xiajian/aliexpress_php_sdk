<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class WarrantyDetailApiDTO extends SDKDomain {

       	
    private $orderId;
    
        /**
    * @return 主订单号
    */
        public function getOrderId() {
        return $this->orderId;
    }
    
    /**
     * 设置主订单号     
     * @param Long $orderId     
     * 参数示例：<pre>60023440513182</pre>     
     * 此参数必填     */
    public function setOrderId( $orderId) {
        $this->orderId = $orderId;
    }
    
        	
    private $orderDate;
    
        /**
    * @return 下单日期，格式yyyy-MM-dd HH:mm:ss
    */
        public function getOrderDate() {
        return $this->orderDate;
    }
    
    /**
     * 设置下单日期，格式yyyy-MM-dd HH:mm:ss     
     * @param String $orderDate     
     * 参数示例：<pre>2015-10-23 11:33:22</pre>     
     * 此参数必填     */
    public function setOrderDate( $orderDate) {
        $this->orderDate = $orderDate;
    }
    
        	
    private $productName;
    
        /**
    * @return 产品名称，英文
    */
        public function getProductName() {
        return $this->productName;
    }
    
    /**
     * 设置产品名称，英文     
     * @param String $productName     
     * 参数示例：<pre>testetst</pre>     
     * 此参数必填     */
    public function setProductName( $productName) {
        $this->productName = $productName;
    }
    
        	
    private $skuInfo;
    
        /**
    * @return 商品sku，json序列化
    */
        public function getSkuInfo() {
        return $this->skuInfo;
    }
    
    /**
     * 设置商品sku，json序列化     
     * @param String $skuInfo     
     * 参数示例：<pre>{&ldquo;color&rdquo;:&rdquo;red&rdquo;,&rdquo;size&rdquo;:&rdquo;s&rdquo;}</pre>     
     * 此参数必填     */
    public function setSkuInfo( $skuInfo) {
        $this->skuInfo = $skuInfo;
    }
    
        	
    private $productSnapshotUrl;
    
        /**
    * @return 商品快照url
    */
        public function getProductSnapshotUrl() {
        return $this->productSnapshotUrl;
    }
    
    /**
     * 设置商品快照url     
     * @param String $productSnapshotUrl     
     * 参数示例：<pre>http://www.aliexpress.com:1080/snapshot/3000438019.html?orderId=60023440513182</pre>     
     * 此参数必填     */
    public function setProductSnapshotUrl( $productSnapshotUrl) {
        $this->productSnapshotUrl = $productSnapshotUrl;
    }
    
        	
    private $productProperties;
    
        /**
    * @return 产品属性，json序列化
    */
        public function getProductProperties() {
        return $this->productProperties;
    }
    
    /**
     * 设置产品属性，json序列化     
     * @param String $productProperties     
     * 参数示例：<pre>{&quot;a&quot;:&quot;aa&quot;,&quot;b&quot;:&quot;bb&quot;}</pre>     
     * 此参数必填     */
    public function setProductProperties( $productProperties) {
        $this->productProperties = $productProperties;
    }
    
        	
    private $storeUrl;
    
        /**
    * @return 店铺url
    */
        public function getStoreUrl() {
        return $this->storeUrl;
    }
    
    /**
     * 设置店铺url     
     * @param String $storeUrl     
     * 参数示例：<pre>http://www.aliexpress.com:1080/store/1335004</pre>     
     * 此参数必填     */
    public function setStoreUrl( $storeUrl) {
        $this->storeUrl = $storeUrl;
    }
    
        	
    private $country;
    
        /**
    * @return 买家国家
    */
        public function getCountry() {
        return $this->country;
    }
    
    /**
     * 设置买家国家     
     * @param String $country     
     * 参数示例：<pre>RU</pre>     
     * 此参数必填     */
    public function setCountry( $country) {
        $this->country = $country;
    }
    
        	
    private $province;
    
        /**
    * @return 买家省
    */
        public function getProvince() {
        return $this->province;
    }
    
    /**
     * 设置买家省     
     * @param String $province     
     * 参数示例：<pre>Idaho</pre>     
     * 此参数必填     */
    public function setProvince( $province) {
        $this->province = $province;
    }
    
        	
    private $city;
    
        /**
    * @return 买家城市
    */
        public function getCity() {
        return $this->city;
    }
    
    /**
     * 设置买家城市     
     * @param String $city     
     * 参数示例：<pre>setest</pre>     
     * 此参数必填     */
    public function setCity( $city) {
        $this->city = $city;
    }
    
        	
    private $streetAddress;
    
        /**
    * @return 买家街道
    */
        public function getStreetAddress() {
        return $this->streetAddress;
    }
    
    /**
     * 设置买家街道     
     * @param String $streetAddress     
     * 参数示例：<pre>streetAddress</pre>     
     * 此参数必填     */
    public function setStreetAddress( $streetAddress) {
        $this->streetAddress = $streetAddress;
    }
    
        	
    private $postCode;
    
        /**
    * @return 买家邮编
    */
        public function getPostCode() {
        return $this->postCode;
    }
    
    /**
     * 设置买家邮编     
     * @param String $postCode     
     * 参数示例：<pre>1000453</pre>     
     * 此参数必填     */
    public function setPostCode( $postCode) {
        $this->postCode = $postCode;
    }
    
        	
    private $sendGoodsTime;
    
        /**
    * @return 产品发货时间，yyyy-MM-dd HH:mm:ss
    */
        public function getSendGoodsTime() {
        return $this->sendGoodsTime;
    }
    
    /**
     * 设置产品发货时间，yyyy-MM-dd HH:mm:ss     
     * @param String $sendGoodsTime     
     * 参数示例：<pre>2015-10-25 11:33:22</pre>     
     * 此参数必填     */
    public function setSendGoodsTime( $sendGoodsTime) {
        $this->sendGoodsTime = $sendGoodsTime;
    }
    
        	
    private $getGoodsTime;
    
        /**
    * @return 产品收货时间，yyyy-MM-dd HH:mm:ss
    */
        public function getGetGoodsTime() {
        return $this->getGoodsTime;
    }
    
    /**
     * 设置产品收货时间，yyyy-MM-dd HH:mm:ss     
     * @param String $getGoodsTime     
     * 参数示例：<pre>2015-11-20 11:33:22</pre>     
     * 此参数必填     */
    public function setGetGoodsTime( $getGoodsTime) {
        $this->getGoodsTime = $getGoodsTime;
    }
    
        	
    private $productCount;
    
        /**
    * @return 产品数量
    */
        public function getProductCount() {
        return $this->productCount;
    }
    
    /**
     * 设置产品数量     
     * @param Integer $productCount     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setProductCount( $productCount) {
        $this->productCount = $productCount;
    }
    
        	
    private $status;
    
        /**
    * @return 交易状态。订单状态：
1.PLACE_ORDER_SUCCESS（下单成功）2.WAIT_SELLER_SEND_GOODS（待卖家发货）3.SELLER_PART_SEND_GOODS（待卖家部分发货）4.WAIT_BUYER_ACCEPT_GOODS（等待买家收货）5.FUND_PROCESSING（资金处理中）6.FINISH（交易成功）
    */
        public function getStatus() {
        return $this->status;
    }
    
    /**
     * 设置交易状态。订单状态：
1.PLACE_ORDER_SUCCESS（下单成功）2.WAIT_SELLER_SEND_GOODS（待卖家发货）3.SELLER_PART_SEND_GOODS（待卖家部分发货）4.WAIT_BUYER_ACCEPT_GOODS（等待买家收货）5.FUND_PROCESSING（资金处理中）6.FINISH（交易成功）     
     * @param String $status     
     * 参数示例：<pre>FINISH</pre>     
     * 此参数必填     */
    public function setStatus( $status) {
        $this->status = $status;
    }
    
        	
    private $productAmount;
    
        /**
    * @return 产品金额，分
    */
        public function getProductAmount() {
        return $this->productAmount;
    }
    
    /**
     * 设置产品金额，分     
     * @param Long $productAmount     
     * 参数示例：<pre>1234</pre>     
     * 此参数必填     */
    public function setProductAmount( $productAmount) {
        $this->productAmount = $productAmount;
    }
    
        	
    private $serviceAmount;
    
        /**
    * @return 保修金额，分
    */
        public function getServiceAmount() {
        return $this->serviceAmount;
    }
    
    /**
     * 设置保修金额，分     
     * @param Long $serviceAmount     
     * 参数示例：<pre>23</pre>     
     * 此参数必填     */
    public function setServiceAmount( $serviceAmount) {
        $this->serviceAmount = $serviceAmount;
    }
    
        	
    private $payCurrency;
    
        /**
    * @return 支付币种
    */
        public function getPayCurrency() {
        return $this->payCurrency;
    }
    
    /**
     * 设置支付币种     
     * @param String $payCurrency     
     * 参数示例：<pre>USD</pre>     
     * 此参数必填     */
    public function setPayCurrency( $payCurrency) {
        $this->payCurrency = $payCurrency;
    }
    
        	
    private $orderCurrency;
    
        /**
    * @return 订单币种
    */
        public function getOrderCurrency() {
        return $this->orderCurrency;
    }
    
    /**
     * 设置订单币种     
     * @param String $orderCurrency     
     * 参数示例：<pre>USD</pre>     
     * 此参数必填     */
    public function setOrderCurrency( $orderCurrency) {
        $this->orderCurrency = $orderCurrency;
    }
    
        	
    private $exchange;
    
        /**
    * @return 汇率
    */
        public function getExchange() {
        return $this->exchange;
    }
    
    /**
     * 设置汇率     
     * @param Double $exchange     
     * 参数示例：<pre>1.0000</pre>     
     * 此参数必填     */
    public function setExchange( $exchange) {
        $this->exchange = $exchange;
    }
    
        	
    private $warrantyType;
    
        /**
    * @return 保修类型.
1.warranty_common（普通保修）2.warranty_refund（只退不修）
    */
        public function getWarrantyType() {
        return $this->warrantyType;
    }
    
    /**
     * 设置保修类型.
1.warranty_common（普通保修）2.warranty_refund（只退不修）     
     * @param String $warrantyType     
     * 参数示例：<pre>warranty_common</pre>     
     * 此参数必填     */
    public function setWarrantyType( $warrantyType) {
        $this->warrantyType = $warrantyType;
    }
    
        	
    private $serviceStartTime;
    
        /**
    * @return 服务开始时间
    */
        public function getServiceStartTime() {
        return $this->serviceStartTime;
    }
    
    /**
     * 设置服务开始时间     
     * @param String $serviceStartTime     
     * 参数示例：<pre>2015-11-25 11:33:22</pre>     
     * 此参数必填     */
    public function setServiceStartTime( $serviceStartTime) {
        $this->serviceStartTime = $serviceStartTime;
    }
    
        	
    private $serviceEndTime;
    
        /**
    * @return 服务结束时间
    */
        public function getServiceEndTime() {
        return $this->serviceEndTime;
    }
    
    /**
     * 设置服务结束时间     
     * @param String $serviceEndTime     
     * 参数示例：<pre>2016-11-24 11:33:22</pre>     
     * 此参数必填     */
    public function setServiceEndTime( $serviceEndTime) {
        $this->serviceEndTime = $serviceEndTime;
    }
    
        	
    private $warrantyStatus;
    
        /**
    * @return 保修状态
1.create（创建）2.cancel（取消）3.finish（完成）
    */
        public function getWarrantyStatus() {
        return $this->warrantyStatus;
    }
    
    /**
     * 设置保修状态
1.create（创建）2.cancel（取消）3.finish（完成）     
     * @param String $warrantyStatus     
     * 参数示例：<pre>create</pre>     
     * 此参数必填     */
    public function setWarrantyStatus( $warrantyStatus) {
        $this->warrantyStatus = $warrantyStatus;
    }
    
        	
    private $name;
    
        /**
    * @return 买家姓名
    */
        public function getName() {
        return $this->name;
    }
    
    /**
     * 设置买家姓名     
     * @param String $name     
     * 参数示例：<pre>ctest</pre>     
     * 此参数必填     */
    public function setName( $name) {
        $this->name = $name;
    }
    
        	
    private $telephone;
    
        /**
    * @return 买家电话
    */
        public function getTelephone() {
        return $this->telephone;
    }
    
    /**
     * 设置买家电话     
     * @param String $telephone     
     * 参数示例：<pre>1248945</pre>     
     * 此参数必填     */
    public function setTelephone( $telephone) {
        $this->telephone = $telephone;
    }
    
        	
    private $description;
    
        /**
    * @return 买家保修描述
    */
        public function getDescription() {
        return $this->description;
    }
    
    /**
     * 设置买家保修描述     
     * @param String $description     
     * 参数示例：<pre>my phone not work!</pre>     
     * 此参数必填     */
    public function setDescription( $description) {
        $this->description = $description;
    }
    
        	
    private $attachments;
    
        /**
    * @return 买家保修提交附件，逗号分隔
    */
        public function getAttachments() {
        return $this->attachments;
    }
    
    /**
     * 设置买家保修提交附件，逗号分隔     
     * @param String $attachments     
     * 参数示例：<pre>aaa.jpg,b.jpg</pre>     
     * 此参数必填     */
    public function setAttachments( $attachments) {
        $this->attachments = $attachments;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "orderId", $this->stdResult )) {
    				$this->orderId = $this->stdResult->{"orderId"};
    			}
    			    		    				    			    			if (array_key_exists ( "orderDate", $this->stdResult )) {
    				$this->orderDate = $this->stdResult->{"orderDate"};
    			}
    			    		    				    			    			if (array_key_exists ( "productName", $this->stdResult )) {
    				$this->productName = $this->stdResult->{"productName"};
    			}
    			    		    				    			    			if (array_key_exists ( "skuInfo", $this->stdResult )) {
    				$this->skuInfo = $this->stdResult->{"skuInfo"};
    			}
    			    		    				    			    			if (array_key_exists ( "productSnapshotUrl", $this->stdResult )) {
    				$this->productSnapshotUrl = $this->stdResult->{"productSnapshotUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "productProperties", $this->stdResult )) {
    				$this->productProperties = $this->stdResult->{"productProperties"};
    			}
    			    		    				    			    			if (array_key_exists ( "storeUrl", $this->stdResult )) {
    				$this->storeUrl = $this->stdResult->{"storeUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "country", $this->stdResult )) {
    				$this->country = $this->stdResult->{"country"};
    			}
    			    		    				    			    			if (array_key_exists ( "province", $this->stdResult )) {
    				$this->province = $this->stdResult->{"province"};
    			}
    			    		    				    			    			if (array_key_exists ( "city", $this->stdResult )) {
    				$this->city = $this->stdResult->{"city"};
    			}
    			    		    				    			    			if (array_key_exists ( "streetAddress", $this->stdResult )) {
    				$this->streetAddress = $this->stdResult->{"streetAddress"};
    			}
    			    		    				    			    			if (array_key_exists ( "postCode", $this->stdResult )) {
    				$this->postCode = $this->stdResult->{"postCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "sendGoodsTime", $this->stdResult )) {
    				$this->sendGoodsTime = $this->stdResult->{"sendGoodsTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "getGoodsTime", $this->stdResult )) {
    				$this->getGoodsTime = $this->stdResult->{"getGoodsTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "productCount", $this->stdResult )) {
    				$this->productCount = $this->stdResult->{"productCount"};
    			}
    			    		    				    			    			if (array_key_exists ( "status", $this->stdResult )) {
    				$this->status = $this->stdResult->{"status"};
    			}
    			    		    				    			    			if (array_key_exists ( "productAmount", $this->stdResult )) {
    				$this->productAmount = $this->stdResult->{"productAmount"};
    			}
    			    		    				    			    			if (array_key_exists ( "serviceAmount", $this->stdResult )) {
    				$this->serviceAmount = $this->stdResult->{"serviceAmount"};
    			}
    			    		    				    			    			if (array_key_exists ( "payCurrency", $this->stdResult )) {
    				$this->payCurrency = $this->stdResult->{"payCurrency"};
    			}
    			    		    				    			    			if (array_key_exists ( "orderCurrency", $this->stdResult )) {
    				$this->orderCurrency = $this->stdResult->{"orderCurrency"};
    			}
    			    		    				    			    			if (array_key_exists ( "exchange", $this->stdResult )) {
    				$this->exchange = $this->stdResult->{"exchange"};
    			}
    			    		    				    			    			if (array_key_exists ( "warrantyType", $this->stdResult )) {
    				$this->warrantyType = $this->stdResult->{"warrantyType"};
    			}
    			    		    				    			    			if (array_key_exists ( "serviceStartTime", $this->stdResult )) {
    				$this->serviceStartTime = $this->stdResult->{"serviceStartTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "serviceEndTime", $this->stdResult )) {
    				$this->serviceEndTime = $this->stdResult->{"serviceEndTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "warrantyStatus", $this->stdResult )) {
    				$this->warrantyStatus = $this->stdResult->{"warrantyStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "name", $this->stdResult )) {
    				$this->name = $this->stdResult->{"name"};
    			}
    			    		    				    			    			if (array_key_exists ( "telephone", $this->stdResult )) {
    				$this->telephone = $this->stdResult->{"telephone"};
    			}
    			    		    				    			    			if (array_key_exists ( "description", $this->stdResult )) {
    				$this->description = $this->stdResult->{"description"};
    			}
    			    		    				    			    			if (array_key_exists ( "attachments", $this->stdResult )) {
    				$this->attachments = $this->stdResult->{"attachments"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "orderId", $this->arrayResult )) {
    			$this->orderId = $arrayResult['orderId'];
    			}
    		    	    			    		    			if (array_key_exists ( "orderDate", $this->arrayResult )) {
    			$this->orderDate = $arrayResult['orderDate'];
    			}
    		    	    			    		    			if (array_key_exists ( "productName", $this->arrayResult )) {
    			$this->productName = $arrayResult['productName'];
    			}
    		    	    			    		    			if (array_key_exists ( "skuInfo", $this->arrayResult )) {
    			$this->skuInfo = $arrayResult['skuInfo'];
    			}
    		    	    			    		    			if (array_key_exists ( "productSnapshotUrl", $this->arrayResult )) {
    			$this->productSnapshotUrl = $arrayResult['productSnapshotUrl'];
    			}
    		    	    			    		    			if (array_key_exists ( "productProperties", $this->arrayResult )) {
    			$this->productProperties = $arrayResult['productProperties'];
    			}
    		    	    			    		    			if (array_key_exists ( "storeUrl", $this->arrayResult )) {
    			$this->storeUrl = $arrayResult['storeUrl'];
    			}
    		    	    			    		    			if (array_key_exists ( "country", $this->arrayResult )) {
    			$this->country = $arrayResult['country'];
    			}
    		    	    			    		    			if (array_key_exists ( "province", $this->arrayResult )) {
    			$this->province = $arrayResult['province'];
    			}
    		    	    			    		    			if (array_key_exists ( "city", $this->arrayResult )) {
    			$this->city = $arrayResult['city'];
    			}
    		    	    			    		    			if (array_key_exists ( "streetAddress", $this->arrayResult )) {
    			$this->streetAddress = $arrayResult['streetAddress'];
    			}
    		    	    			    		    			if (array_key_exists ( "postCode", $this->arrayResult )) {
    			$this->postCode = $arrayResult['postCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "sendGoodsTime", $this->arrayResult )) {
    			$this->sendGoodsTime = $arrayResult['sendGoodsTime'];
    			}
    		    	    			    		    			if (array_key_exists ( "getGoodsTime", $this->arrayResult )) {
    			$this->getGoodsTime = $arrayResult['getGoodsTime'];
    			}
    		    	    			    		    			if (array_key_exists ( "productCount", $this->arrayResult )) {
    			$this->productCount = $arrayResult['productCount'];
    			}
    		    	    			    		    			if (array_key_exists ( "status", $this->arrayResult )) {
    			$this->status = $arrayResult['status'];
    			}
    		    	    			    		    			if (array_key_exists ( "productAmount", $this->arrayResult )) {
    			$this->productAmount = $arrayResult['productAmount'];
    			}
    		    	    			    		    			if (array_key_exists ( "serviceAmount", $this->arrayResult )) {
    			$this->serviceAmount = $arrayResult['serviceAmount'];
    			}
    		    	    			    		    			if (array_key_exists ( "payCurrency", $this->arrayResult )) {
    			$this->payCurrency = $arrayResult['payCurrency'];
    			}
    		    	    			    		    			if (array_key_exists ( "orderCurrency", $this->arrayResult )) {
    			$this->orderCurrency = $arrayResult['orderCurrency'];
    			}
    		    	    			    		    			if (array_key_exists ( "exchange", $this->arrayResult )) {
    			$this->exchange = $arrayResult['exchange'];
    			}
    		    	    			    		    			if (array_key_exists ( "warrantyType", $this->arrayResult )) {
    			$this->warrantyType = $arrayResult['warrantyType'];
    			}
    		    	    			    		    			if (array_key_exists ( "serviceStartTime", $this->arrayResult )) {
    			$this->serviceStartTime = $arrayResult['serviceStartTime'];
    			}
    		    	    			    		    			if (array_key_exists ( "serviceEndTime", $this->arrayResult )) {
    			$this->serviceEndTime = $arrayResult['serviceEndTime'];
    			}
    		    	    			    		    			if (array_key_exists ( "warrantyStatus", $this->arrayResult )) {
    			$this->warrantyStatus = $arrayResult['warrantyStatus'];
    			}
    		    	    			    		    			if (array_key_exists ( "name", $this->arrayResult )) {
    			$this->name = $arrayResult['name'];
    			}
    		    	    			    		    			if (array_key_exists ( "telephone", $this->arrayResult )) {
    			$this->telephone = $arrayResult['telephone'];
    			}
    		    	    			    		    			if (array_key_exists ( "description", $this->arrayResult )) {
    			$this->description = $arrayResult['description'];
    			}
    		    	    			    		    			if (array_key_exists ( "attachments", $this->arrayResult )) {
    			$this->attachments = $arrayResult['attachments'];
    			}
    		    	    		}
 
   
}
?>