<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/SimpleOrderItemVO.class.php');

class SimpleOrderListVO extends SDKDomain {

       	
    private $totalItem;
    
        /**
    * @return 总数量(SC订单不包含在结果中）
    */
        public function getTotalItem() {
        return $this->totalItem;
    }
    
    /**
     * 设置总数量(SC订单不包含在结果中）     
     * @param Integer $totalItem     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTotalItem( $totalItem) {
        $this->totalItem = $totalItem;
    }
    
        	
    private $orderList;
    
        /**
    * @return 订单数组
    */
        public function getOrderList() {
        return $this->orderList;
    }
    
    /**
     * 设置订单数组     
     * @param array include @see SimpleOrderItemVO[] $orderList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderList(SimpleOrderItemVO $orderList) {
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
						$SimpleOrderItemVOResult=new SimpleOrderItemVO();
						$SimpleOrderItemVOResult->setArrayResult($arrayobject );
						$this->orderList [$i] = $SimpleOrderItemVOResult;
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
    			$this->orderList = SimpleOrderItemVO();
    			$this->orderList->$this->setStdResult ( $orderListResult);
    		}
    		    	    		}
 
   
}
?>