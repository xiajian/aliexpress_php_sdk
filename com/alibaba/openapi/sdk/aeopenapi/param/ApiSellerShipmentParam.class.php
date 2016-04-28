<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiSellerShipmentParam {

        
        /**
    * @return 用户选择的实际发货物流服务（物流服务key：该接口根据api.listLogisticsService列出平台所支持的物流服务 进行获取目前所支持的物流。平台支持物流服务详细一览表详见论坛链接http://bbs.seller.aliexpress.com/bbs/read.php?tid=266120&page=1&toread=1#tpc）
    */
        public function getServiceName() {
        $tempResult = $this->sdkStdResult["serviceName"];
        return $tempResult;
    }
    
    /**
     * 设置用户选择的实际发货物流服务（物流服务key：该接口根据api.listLogisticsService列出平台所支持的物流服务 进行获取目前所支持的物流。平台支持物流服务详细一览表详见论坛链接http://bbs.seller.aliexpress.com/bbs/read.php?tid=266120&page=1&toread=1#tpc）     
     * @param String $serviceName     
     * 参数示例：<pre>ACOMMERCE;ARAMEX;AUSPOST;CHP;CORREOS;CPAM;CPAM_HRB;CPAP;CTR_LAND_PICKUP;DEUTSCHE_POST;DHL;DHL_DE;DHL_ES;DHL_FR;DHL_IT;DHL_UK;E_EMS;ECONOMIC139;EMS;EMS_SH_ZX_US;EMS_ZX_ZX_US;ENVIALIA;FEDEX;FEDEX_IE;HKPAM;HKPAP;ITELLA;ITELLA_PY;JNE;LAPOSTE;Other;OTHER_AU;OTHER_DE;OTHER_ES;OTHER_FR;OTHER_IT;OTHER_RU;OTHER_UK;OTHER_US;POSTEITALIANE;ROYAL_MAIL;RUSSIAN_POST;SEP;SF;SGP;SINOTRANS_PY;SPSR;SPSR_CN;SPSR_RU;TNT;TOLL;UPS;UPS_US;UPSE;USPS;YANWEN_AM;YANWEN_JYT;ZTORU;</pre>     
     * 此参数必填     */
    public function setServiceName( $serviceName) {
        $this->sdkStdResult["serviceName"] = $serviceName;
    }
    
        
        /**
    * @return 物流追踪号
    */
        public function getLogisticsNo() {
        $tempResult = $this->sdkStdResult["logisticsNo"];
        return $tempResult;
    }
    
    /**
     * 设置物流追踪号     
     * @param String $logisticsNo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setLogisticsNo( $logisticsNo) {
        $this->sdkStdResult["logisticsNo"] = $logisticsNo;
    }
    
        
        /**
    * @return 备注(只能输入英文，且长度限制在512个字符。）
    */
        public function getDescription() {
        $tempResult = $this->sdkStdResult["description"];
        return $tempResult;
    }
    
    /**
     * 设置备注(只能输入英文，且长度限制在512个字符。）     
     * @param String $description     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDescription( $description) {
        $this->sdkStdResult["description"] = $description;
    }
    
        
        /**
    * @return 状态包括：全部发货(all)、部分发货(part)
    */
        public function getSendType() {
        $tempResult = $this->sdkStdResult["sendType"];
        return $tempResult;
    }
    
    /**
     * 设置状态包括：全部发货(all)、部分发货(part)     
     * @param String $sendType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSendType( $sendType) {
        $this->sdkStdResult["sendType"] = $sendType;
    }
    
        
        /**
    * @return 用户需要发货的订单id
    */
        public function getOutRef() {
        $tempResult = $this->sdkStdResult["outRef"];
        return $tempResult;
    }
    
    /**
     * 设置用户需要发货的订单id     
     * @param String $outRef     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOutRef( $outRef) {
        $this->sdkStdResult["outRef"] = $outRef;
    }
    
        
        /**
    * @return 当serviceName=other的情况时，需要填写对应的追踪网址
    */
        public function getTrackingWebsite() {
        $tempResult = $this->sdkStdResult["trackingWebsite"];
        return $tempResult;
    }
    
    /**
     * 设置当serviceName=other的情况时，需要填写对应的追踪网址     
     * @param String $trackingWebsite     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTrackingWebsite( $trackingWebsite) {
        $this->sdkStdResult["trackingWebsite"] = $trackingWebsite;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>