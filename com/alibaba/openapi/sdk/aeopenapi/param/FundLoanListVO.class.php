<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/OrderLoanItemVO.class.php');

class FundLoanListVO extends SDKDomain {

       	
    private $totalItem;
    
        /**
    * @return 总条数
    */
        public function getTotalItem() {
        return $this->totalItem;
    }
    
    /**
     * 设置总条数     
     * @param Integer $totalItem     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTotalItem( $totalItem) {
        $this->totalItem = $totalItem;
    }
    
        	
    private $orderList;
    
        /**
    * @return 订单放款列表
    */
        public function getOrderList() {
        return $this->orderList;
    }
    
    /**
     * 设置订单放款列表     
     * @param array include @see OrderLoanItemVO[] $orderList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderList(OrderLoanItemVO $orderList) {
        $this->orderList = $orderList;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "totalItem", $this->stdResult )) {
    				$this->totalItem = $this->stdResult->{"totalItem"};
    			}
    			    		    				    			    			if (array_key_exists ( "orderList", $this->stdResult )) {
    			$orderListResult=$this->stdResult->{"orderList"};
    				$object = json_decode ( json_encode ( $orderListResult ), true );
					$this->orderList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$OrderLoanItemVOResult=new OrderLoanItemVO();
						$OrderLoanItemVOResult->setArrayResult($arrayobject );
						$this->orderList [$i] = $OrderLoanItemVOResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "totalItem", $this->arrayResult )) {
    			$this->totalItem = $arrayResult['totalItem'];
    			}
    		    	    			    		    		if (array_key_exists ( "orderList", $this->arrayResult )) {
    		$orderListResult=$arrayResult['orderList'];
    			$this->orderList = OrderLoanItemVO();
    			$this->orderList->$this->setStdResult ( $orderListResult);
    		}
    		    	    		}
 
   
}
?>