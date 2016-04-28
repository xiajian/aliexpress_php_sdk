<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/ChildOrderDTO.class.php');

class OrderTradeInfo extends SDKDomain {

       	
    private $id;
    
        /**
    * @return 订单ID
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置订单ID     
     * @param Long $id     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
        	
    private $initOderAmount;
    
        /**
    * @return 订单初始金额
    */
        public function getInitOderAmount() {
        return $this->initOderAmount;
    }
    
    /**
     * 设置订单初始金额     
     * @param String $initOderAmount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setInitOderAmount( $initOderAmount) {
        $this->initOderAmount = $initOderAmount;
    }
    
        	
    private $initOderAmountCur;
    
        /**
    * @return 订单金额货币单位
    */
        public function getInitOderAmountCur() {
        return $this->initOderAmountCur;
    }
    
    /**
     * 设置订单金额货币单位     
     * @param String $initOderAmountCur     
     * 参数示例：<pre>USD</pre>     
     * 此参数必填     */
    public function setInitOderAmountCur( $initOderAmountCur) {
        $this->initOderAmountCur = $initOderAmountCur;
    }
    
        	
    private $isPhone;
    
        /**
    * @return 是否手机订单
    */
        public function getIsPhone() {
        return $this->isPhone;
    }
    
    /**
     * 设置是否手机订单     
     * @param Boolean $isPhone     
     * 参数示例：<pre>false</pre>     
     * 此参数必填     */
    public function setIsPhone( $isPhone) {
        $this->isPhone = $isPhone;
    }
    
        	
    private $logisticsAmount;
    
        /**
    * @return 物流金额
    */
        public function getLogisticsAmount() {
        return $this->logisticsAmount;
    }
    
    /**
     * 设置物流金额     
     * @param String $logisticsAmount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setLogisticsAmount( $logisticsAmount) {
        $this->logisticsAmount = $logisticsAmount;
    }
    
        	
    private $logisticsAmountCur;
    
        /**
    * @return 物流金额货币单位
    */
        public function getLogisticsAmountCur() {
        return $this->logisticsAmountCur;
    }
    
    /**
     * 设置物流金额货币单位     
     * @param String $logisticsAmountCur     
     * 参数示例：<pre>USD</pre>     
     * 此参数必填     */
    public function setLogisticsAmountCur( $logisticsAmountCur) {
        $this->logisticsAmountCur = $logisticsAmountCur;
    }
    
        	
    private $orderAmount;
    
        /**
    * @return 订单金额
    */
        public function getOrderAmount() {
        return $this->orderAmount;
    }
    
    /**
     * 设置订单金额     
     * @param String $orderAmount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderAmount( $orderAmount) {
        $this->orderAmount = $orderAmount;
    }
    
        	
    private $orderAmountCur;
    
        /**
    * @return 货币单位
    */
        public function getOrderAmountCur() {
        return $this->orderAmountCur;
    }
    
    /**
     * 设置货币单位     
     * @param String $orderAmountCur     
     * 参数示例：<pre>USD</pre>     
     * 此参数必填     */
    public function setOrderAmountCur( $orderAmountCur) {
        $this->orderAmountCur = $orderAmountCur;
    }
    
        	
    private $childOrderList;
    
        /**
    * @return 
    */
        public function getChildOrderList() {
        return $this->childOrderList;
    }
    
    /**
     * 设置     
     * @param array include @see ChildOrderDTO[] $childOrderList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setChildOrderList(ChildOrderDTO $childOrderList) {
        $this->childOrderList = $childOrderList;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    				    			    			if (array_key_exists ( "initOderAmount", $this->stdResult )) {
    				$this->initOderAmount = $this->stdResult->{"initOderAmount"};
    			}
    			    		    				    			    			if (array_key_exists ( "initOderAmountCur", $this->stdResult )) {
    				$this->initOderAmountCur = $this->stdResult->{"initOderAmountCur"};
    			}
    			    		    				    			    			if (array_key_exists ( "isPhone", $this->stdResult )) {
    				$this->isPhone = $this->stdResult->{"isPhone"};
    			}
    			    		    				    			    			if (array_key_exists ( "logisticsAmount", $this->stdResult )) {
    				$this->logisticsAmount = $this->stdResult->{"logisticsAmount"};
    			}
    			    		    				    			    			if (array_key_exists ( "logisticsAmountCur", $this->stdResult )) {
    				$this->logisticsAmountCur = $this->stdResult->{"logisticsAmountCur"};
    			}
    			    		    				    			    			if (array_key_exists ( "orderAmount", $this->stdResult )) {
    				$this->orderAmount = $this->stdResult->{"orderAmount"};
    			}
    			    		    				    			    			if (array_key_exists ( "orderAmountCur", $this->stdResult )) {
    				$this->orderAmountCur = $this->stdResult->{"orderAmountCur"};
    			}
    			    		    				    			    			if (array_key_exists ( "childOrderList", $this->stdResult )) {
    			$childOrderListResult=$this->stdResult->{"childOrderList"};
    				$object = json_decode ( json_encode ( $childOrderListResult ), true );
					$this->childOrderList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$ChildOrderDTOResult=new ChildOrderDTO();
						$ChildOrderDTOResult->setArrayResult($arrayobject );
						$this->childOrderList [$i] = $ChildOrderDTOResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['id'];
    			}
    		    	    			    		    			if (array_key_exists ( "initOderAmount", $this->arrayResult )) {
    			$this->initOderAmount = $arrayResult['initOderAmount'];
    			}
    		    	    			    		    			if (array_key_exists ( "initOderAmountCur", $this->arrayResult )) {
    			$this->initOderAmountCur = $arrayResult['initOderAmountCur'];
    			}
    		    	    			    		    			if (array_key_exists ( "isPhone", $this->arrayResult )) {
    			$this->isPhone = $arrayResult['isPhone'];
    			}
    		    	    			    		    			if (array_key_exists ( "logisticsAmount", $this->arrayResult )) {
    			$this->logisticsAmount = $arrayResult['logisticsAmount'];
    			}
    		    	    			    		    			if (array_key_exists ( "logisticsAmountCur", $this->arrayResult )) {
    			$this->logisticsAmountCur = $arrayResult['logisticsAmountCur'];
    			}
    		    	    			    		    			if (array_key_exists ( "orderAmount", $this->arrayResult )) {
    			$this->orderAmount = $arrayResult['orderAmount'];
    			}
    		    	    			    		    			if (array_key_exists ( "orderAmountCur", $this->arrayResult )) {
    			$this->orderAmountCur = $arrayResult['orderAmountCur'];
    			}
    		    	    			    		    		if (array_key_exists ( "childOrderList", $this->arrayResult )) {
    		$childOrderListResult=$arrayResult['childOrderList'];
    			$this->childOrderList = ChildOrderDTO();
    			$this->childOrderList->$this->setStdResult ( $childOrderListResult);
    		}
    		    	    		}
 
   
}
?>