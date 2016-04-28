<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/Money.class.php');

class AeopLogisticsWarehouseOrderResult extends SDKDomain {

       	
    private $orderId;
    
        /**
    * @return 交易订单ID
    */
        public function getOrderId() {
        return $this->orderId;
    }
    
    /**
     * 设置交易订单ID     
     * @param Long $orderId     
     * 参数示例：<pre>17939268153</pre>     
     * 此参数必填     */
    public function setOrderId( $orderId) {
        $this->orderId = $orderId;
    }
    
        	
    private $onlineLogisticsId;
    
        /**
    * @return 物流订单ID
    */
        public function getOnlineLogisticsId() {
        return $this->onlineLogisticsId;
    }
    
    /**
     * 设置物流订单ID     
     * @param Long $onlineLogisticsId     
     * 参数示例：<pre>1100001</pre>     
     * 此参数必填     */
    public function setOnlineLogisticsId( $onlineLogisticsId) {
        $this->onlineLogisticsId = $onlineLogisticsId;
    }
    
        	
    private $internationalLogisticsType;
    
        /**
    * @return 国际物流订单类型（CPAM_WLB_FPXSZ小包-物流宝仓库-深圳市递四方速递FPXSZ；CPAM_WLB_ZTOBJ小包-物流宝仓库-中通海外北京仓ZTOBJ；CPAM_WLB_CPHSH小包-物流宝仓库-上海市邮政CPHSH；
    */
        public function getInternationalLogisticsType() {
        return $this->internationalLogisticsType;
    }
    
    /**
     * 设置国际物流订单类型（CPAM_WLB_FPXSZ小包-物流宝仓库-深圳市递四方速递FPXSZ；CPAM_WLB_ZTOBJ小包-物流宝仓库-中通海外北京仓ZTOBJ；CPAM_WLB_CPHSH小包-物流宝仓库-上海市邮政CPHSH；     
     * @param String $internationalLogisticsType     
     * 参数示例：<pre>CAINIAO_STANDARD_YANWENBJ</pre>     
     * 此参数必填     */
    public function setInternationalLogisticsType( $internationalLogisticsType) {
        $this->internationalLogisticsType = $internationalLogisticsType;
    }
    
        	
    private $internationallogisticsId;
    
        /**
    * @return 物流运单号
    */
        public function getInternationallogisticsId() {
        return $this->internationallogisticsId;
    }
    
    /**
     * 设置物流运单号     
     * @param String $internationallogisticsId     
     * 参数示例：<pre>RE700150389CN</pre>     
     * 此参数必填     */
    public function setInternationallogisticsId( $internationallogisticsId) {
        $this->internationallogisticsId = $internationallogisticsId;
    }
    
        	
    private $logisticsStatus;
    
        /**
    * @return 物流订单状态:init等待分配物流单号；waitWarehouseReceiveGoods等待仓库操作；pickup_success揽收成功；pickup_fail揽收失败；warehouseRejectGoods入库失败；waitWarehouseSendGoods等待出库；out_stock_success等待发货；out_stock_fail出库失败；send_goods_fail发货失败；warehouseSendGoodsSuccess已发货；
    */
        public function getLogisticsStatus() {
        return $this->logisticsStatus;
    }
    
    /**
     * 设置物流订单状态:init等待分配物流单号；waitWarehouseReceiveGoods等待仓库操作；pickup_success揽收成功；pickup_fail揽收失败；warehouseRejectGoods入库失败；waitWarehouseSendGoods等待出库；out_stock_success等待发货；out_stock_fail出库失败；send_goods_fail发货失败；warehouseSendGoodsSuccess已发货；     
     * @param String $logisticsStatus     
     * 参数示例：<pre>wait_warehouse_receive_goods</pre>     
     * 此参数必填     */
    public function setLogisticsStatus( $logisticsStatus) {
        $this->logisticsStatus = $logisticsStatus;
    }
    
        	
    private $channelCode;
    
        /**
    * @return 渠道编码
    */
        public function getChannelCode() {
        return $this->channelCode;
    }
    
    /**
     * 设置渠道编码     
     * @param String $channelCode     
     * 参数示例：<pre>105</pre>     
     * 此参数必填     */
    public function setChannelCode( $channelCode) {
        $this->channelCode = $channelCode;
    }
    
        	
    private $lpNumber;
    
        /**
    * @return LP编号
    */
        public function getLpNumber() {
        return $this->lpNumber;
    }
    
    /**
     * 设置LP编号     
     * @param String $lpNumber     
     * 参数示例：<pre>LP00012621594229</pre>     
     * 此参数必填     */
    public function setLpNumber( $lpNumber) {
        $this->lpNumber = $lpNumber;
    }
    
        	
    private $logisticsFee;
    
        /**
    * @return 运费
    */
        public function getLogisticsFee() {
        return $this->logisticsFee;
    }
    
    /**
     * 设置运费     
     * @param Money $logisticsFee     
     * 参数示例：<pre>{{&quot;amount&quot;:6.77,&quot;cent&quot;:677,&quot;currencyCode&quot;:&quot;CNY&quot;}</pre>     
     * 此参数必填     */
    public function setLogisticsFee(Money $logisticsFee) {
        $this->logisticsFee = $logisticsFee;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "orderId", $this->stdResult )) {
    				$this->orderId = $this->stdResult->{"orderId"};
    			}
    			    		    				    			    			if (array_key_exists ( "onlineLogisticsId", $this->stdResult )) {
    				$this->onlineLogisticsId = $this->stdResult->{"onlineLogisticsId"};
    			}
    			    		    				    			    			if (array_key_exists ( "internationalLogisticsType", $this->stdResult )) {
    				$this->internationalLogisticsType = $this->stdResult->{"internationalLogisticsType"};
    			}
    			    		    				    			    			if (array_key_exists ( "internationallogisticsId", $this->stdResult )) {
    				$this->internationallogisticsId = $this->stdResult->{"internationallogisticsId"};
    			}
    			    		    				    			    			if (array_key_exists ( "logisticsStatus", $this->stdResult )) {
    				$this->logisticsStatus = $this->stdResult->{"logisticsStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "channelCode", $this->stdResult )) {
    				$this->channelCode = $this->stdResult->{"channelCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "lpNumber", $this->stdResult )) {
    				$this->lpNumber = $this->stdResult->{"lpNumber"};
    			}
    			    		    				    			    			if (array_key_exists ( "logisticsFee", $this->stdResult )) {
    				$logisticsFeeResult=$this->stdResult->{"logisticsFee"};
    				$this->logisticsFee = new Money();
    				$this->logisticsFee->setStdResult ( $logisticsFeeResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "orderId", $this->arrayResult )) {
    			$this->orderId = $arrayResult['orderId'];
    			}
    		    	    			    		    			if (array_key_exists ( "onlineLogisticsId", $this->arrayResult )) {
    			$this->onlineLogisticsId = $arrayResult['onlineLogisticsId'];
    			}
    		    	    			    		    			if (array_key_exists ( "internationalLogisticsType", $this->arrayResult )) {
    			$this->internationalLogisticsType = $arrayResult['internationalLogisticsType'];
    			}
    		    	    			    		    			if (array_key_exists ( "internationallogisticsId", $this->arrayResult )) {
    			$this->internationallogisticsId = $arrayResult['internationallogisticsId'];
    			}
    		    	    			    		    			if (array_key_exists ( "logisticsStatus", $this->arrayResult )) {
    			$this->logisticsStatus = $arrayResult['logisticsStatus'];
    			}
    		    	    			    		    			if (array_key_exists ( "channelCode", $this->arrayResult )) {
    			$this->channelCode = $arrayResult['channelCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "lpNumber", $this->arrayResult )) {
    			$this->lpNumber = $arrayResult['lpNumber'];
    			}
    		    	    			    		    		if (array_key_exists ( "logisticsFee", $this->arrayResult )) {
    		$logisticsFeeResult=$arrayResult['logisticsFee'];
    			    			$this->logisticsFee = new Money();
    			    			$this->logisticsFee->$this->setStdResult ( $logisticsFeeResult);
    		}
    		    	    		}
 
   
}
?>