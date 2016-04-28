<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiQueryProductViewedInfoEverydayByIdResult {

        	
    private $success;
    
        /**
    * @return 浏览量总数。{
    "addCartCount":       加入购物车,
    "exposedCount":       曝光量,
    "favoritedCount": ,
    "gmvPerBuyer": 客单价,
    "gmvPerBuyer30d":最近30天客单价,
    "gmvPerOrder": 订单均额,
    "gmvPerOrder30d": 最近30天订单均额,
    "outputOrder": 成交订单数,
    "refundAmt": 退款金额,
    "success": 本次调用是否成功,
    "viewedCount": 30天浏览量 
}
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置浏览量总数。{
    "addCartCount":       加入购物车,
    "exposedCount":       曝光量,
    "favoritedCount": ,
    "gmvPerBuyer": 客单价,
    "gmvPerBuyer30d":最近30天客单价,
    "gmvPerOrder": 订单均额,
    "gmvPerOrder30d": 最近30天订单均额,
    "outputOrder": 成交订单数,
    "refundAmt": 退款金额,
    "success": 本次调用是否成功,
    "viewedCount": 30天浏览量 
}     
     * @param String $success     
          
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['success'];
    			}
    		    	    		}

}
?>