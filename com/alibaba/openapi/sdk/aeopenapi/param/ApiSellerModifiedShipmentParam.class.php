<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiSellerModifiedShipmentParam {

        
        /**
    * @return 用户需要修改的的老的发货物流服务（物流服务key：该接口根据api.listLogisticsService列出平台所支持的物流服务 进行获取目前所支持的物流。）
    */
        public function getOldServiceName() {
        $tempResult = $this->sdkStdResult["oldServiceName"];
        return $tempResult;
    }
    
    /**
     * 设置用户需要修改的的老的发货物流服务（物流服务key：该接口根据api.listLogisticsService列出平台所支持的物流服务 进行获取目前所支持的物流。）     
     * @param String $oldServiceName     
     * 参数示例：<pre>EMS_SH_ZX_US；EMS；SEP；FEDEX；UPSE；FEDEX_IE；RUSTON；HKPAP；CPAM；SF；HKPAM；CHP；ZTORU；ARAMEX；CPAP；TNT；ECONOMIC139；DHL；UPS；SGP；</pre>     
     * 此参数必填     */
    public function setOldServiceName( $oldServiceName) {
        $this->sdkStdResult["oldServiceName"] = $oldServiceName;
    }
    
        
        /**
    * @return 用户需要修改的老的物流追踪号
    */
        public function getOldLogisticsNo() {
        $tempResult = $this->sdkStdResult["oldLogisticsNo"];
        return $tempResult;
    }
    
    /**
     * 设置用户需要修改的老的物流追踪号     
     * @param String $oldLogisticsNo     
     * 参数示例：<pre>CP123456789CN</pre>     
     * 此参数必填     */
    public function setOldLogisticsNo( $oldLogisticsNo) {
        $this->sdkStdResult["oldLogisticsNo"] = $oldLogisticsNo;
    }
    
        
        /**
    * @return 用户需要修改的的新的发货物流服务（物流服务key：该接口根据api.listLogisticsService列出平台所支持的物流服务 进行获取目前所支持的物流。）
    */
        public function getNewServiceName() {
        $tempResult = $this->sdkStdResult["newServiceName"];
        return $tempResult;
    }
    
    /**
     * 设置用户需要修改的的新的发货物流服务（物流服务key：该接口根据api.listLogisticsService列出平台所支持的物流服务 进行获取目前所支持的物流。）     
     * @param String $newServiceName     
     * 参数示例：<pre>EMS_SH_ZX_US；EMS；SEP；FEDEX；UPSE；FEDEX_IE；RUSTON；HKPAP；CPAM；SF；HKPAM；CHP；ZTORU；ARAMEX；CPAP；TNT；ECONOMIC139；DHL；UPS；SGP；</pre>     
     * 此参数必填     */
    public function setNewServiceName( $newServiceName) {
        $this->sdkStdResult["newServiceName"] = $newServiceName;
    }
    
        
        /**
    * @return 用户需要修改的老的物流追踪号
    */
        public function getNewLogisticsNo() {
        $tempResult = $this->sdkStdResult["newLogisticsNo"];
        return $tempResult;
    }
    
    /**
     * 设置用户需要修改的老的物流追踪号     
     * @param String $newLogisticsNo     
     * 参数示例：<pre>CP123456123CN</pre>     
     * 此参数必填     */
    public function setNewLogisticsNo( $newLogisticsNo) {
        $this->sdkStdResult["newLogisticsNo"] = $newLogisticsNo;
    }
    
        
        /**
    * @return 备注(只能输入英文)
    */
        public function getDescription() {
        $tempResult = $this->sdkStdResult["description"];
        return $tempResult;
    }
    
    /**
     * 设置备注(只能输入英文)     
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
     * 参数示例：<pre>all</pre>     
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
     * 参数示例：<pre>60769040695804</pre>     
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
     * 参数示例：<pre>www.intl183.com</pre>     
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