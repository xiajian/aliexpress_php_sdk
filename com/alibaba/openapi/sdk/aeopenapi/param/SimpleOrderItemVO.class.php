<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/SimpleOrderProductVO.class.php');

class SimpleOrderItemVO extends SDKDomain {

       	
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
    
        	
    private $gmtCreate;
    
        /**
    * @return 交易创建时间
    */
        public function getGmtCreate() {
        return $this->gmtCreate;
    }
    
    /**
     * 设置交易创建时间     
     * @param String $gmtCreate     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtCreate( $gmtCreate) {
        $this->gmtCreate = $gmtCreate;
    }
    
        	
    private $gmtModified;
    
        /**
    * @return 订单修改时间
    */
        public function getGmtModified() {
        return $this->gmtModified;
    }
    
    /**
     * 设置订单修改时间     
     * @param String $gmtModified     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtModified( $gmtModified) {
        $this->gmtModified = $gmtModified;
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
    
        	
    private $productList;
    
        /**
    * @return 
    */
        public function getProductList() {
        return $this->productList;
    }
    
    /**
     * 设置     
     * @param array include @see SimpleOrderProductVO[] $productList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductList(SimpleOrderProductVO $productList) {
        $this->productList = $productList;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "bizType", $this->stdResult )) {
    				$this->bizType = $this->stdResult->{"bizType"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtCreate", $this->stdResult )) {
    				$this->gmtCreate = $this->stdResult->{"gmtCreate"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtModified", $this->stdResult )) {
    				$this->gmtModified = $this->stdResult->{"gmtModified"};
    			}
    			    		    				    			    			if (array_key_exists ( "memo", $this->stdResult )) {
    				$this->memo = $this->stdResult->{"memo"};
    			}
    			    		    				    			    			if (array_key_exists ( "orderId", $this->stdResult )) {
    				$this->orderId = $this->stdResult->{"orderId"};
    			}
    			    		    				    			    			if (array_key_exists ( "orderStatus", $this->stdResult )) {
    				$this->orderStatus = $this->stdResult->{"orderStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "timeoutLeftTime", $this->stdResult )) {
    				$this->timeoutLeftTime = $this->stdResult->{"timeoutLeftTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "productList", $this->stdResult )) {
    			$productListResult=$this->stdResult->{"productList"};
    				$object = json_decode ( json_encode ( $productListResult ), true );
					$this->productList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$SimpleOrderProductVOResult=new SimpleOrderProductVO();
						$SimpleOrderProductVOResult->setArrayResult($arrayobject );
						$this->productList [$i] = $SimpleOrderProductVOResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "bizType", $this->arrayResult )) {
    			$this->bizType = $arrayResult['bizType'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtCreate", $this->arrayResult )) {
    			$this->gmtCreate = $arrayResult['gmtCreate'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtModified", $this->arrayResult )) {
    			$this->gmtModified = $arrayResult['gmtModified'];
    			}
    		    	    			    		    			if (array_key_exists ( "memo", $this->arrayResult )) {
    			$this->memo = $arrayResult['memo'];
    			}
    		    	    			    		    			if (array_key_exists ( "orderId", $this->arrayResult )) {
    			$this->orderId = $arrayResult['orderId'];
    			}
    		    	    			    		    			if (array_key_exists ( "orderStatus", $this->arrayResult )) {
    			$this->orderStatus = $arrayResult['orderStatus'];
    			}
    		    	    			    		    			if (array_key_exists ( "timeoutLeftTime", $this->arrayResult )) {
    			$this->timeoutLeftTime = $arrayResult['timeoutLeftTime'];
    			}
    		    	    			    		    		if (array_key_exists ( "productList", $this->arrayResult )) {
    		$productListResult=$arrayResult['productList'];
    			$this->productList = SimpleOrderProductVO();
    			$this->productList->$this->setStdResult ( $productListResult);
    		}
    		    	    		}
 
   
}
?>