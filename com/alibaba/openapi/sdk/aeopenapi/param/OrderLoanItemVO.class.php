<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/SonOrderLoanVO.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/TradeMoney.class.php');

class OrderLoanItemVO extends SDKDomain {

       	
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
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderStatus( $orderStatus) {
        $this->orderStatus = $orderStatus;
    }
    
        	
    private $sonOrderList;
    
        /**
    * @return 子订单元素列表
    */
        public function getSonOrderList() {
        return $this->sonOrderList;
    }
    
    /**
     * 设置子订单元素列表     
     * @param array include @see SonOrderLoanVO[] $sonOrderList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSonOrderList(SonOrderLoanVO $sonOrderList) {
        $this->sonOrderList = $sonOrderList;
    }
    
        	
    private $amountTotal;
    
        /**
    * @return 总金额
    */
        public function getAmountTotal() {
        return $this->amountTotal;
    }
    
    /**
     * 设置总金额     
     * @param TradeMoney $amountTotal     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAmountTotal(TradeMoney $amountTotal) {
        $this->amountTotal = $amountTotal;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "orderId", $this->stdResult )) {
    				$this->orderId = $this->stdResult->{"orderId"};
    			}
    			    		    				    			    			if (array_key_exists ( "orderStatus", $this->stdResult )) {
    				$this->orderStatus = $this->stdResult->{"orderStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "sonOrderList", $this->stdResult )) {
    			$sonOrderListResult=$this->stdResult->{"sonOrderList"};
    				$object = json_decode ( json_encode ( $sonOrderListResult ), true );
					$this->sonOrderList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$SonOrderLoanVOResult=new SonOrderLoanVO();
						$SonOrderLoanVOResult->setArrayResult($arrayobject );
						$this->sonOrderList [$i] = $SonOrderLoanVOResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "amountTotal", $this->stdResult )) {
    				$amountTotalResult=$this->stdResult->{"amountTotal"};
    				$this->amountTotal = new TradeMoney();
    				$this->amountTotal->setStdResult ( $amountTotalResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "orderId", $this->arrayResult )) {
    			$this->orderId = $arrayResult['orderId'];
    			}
    		    	    			    		    			if (array_key_exists ( "orderStatus", $this->arrayResult )) {
    			$this->orderStatus = $arrayResult['orderStatus'];
    			}
    		    	    			    		    		if (array_key_exists ( "sonOrderList", $this->arrayResult )) {
    		$sonOrderListResult=$arrayResult['sonOrderList'];
    			$this->sonOrderList = SonOrderLoanVO();
    			$this->sonOrderList->$this->setStdResult ( $sonOrderListResult);
    		}
    		    	    			    		    		if (array_key_exists ( "amountTotal", $this->arrayResult )) {
    		$amountTotalResult=$arrayResult['amountTotal'];
    			    			$this->amountTotal = new TradeMoney();
    			    			$this->amountTotal->$this->setStdResult ( $amountTotalResult);
    		}
    		    	    		}
 
   
}
?>