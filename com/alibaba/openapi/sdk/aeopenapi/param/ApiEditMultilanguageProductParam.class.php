<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiEditMultilanguageProductParam {

        
        /**
    * @return 待编辑的商品ID。
    */
        public function getProductId() {
        $tempResult = $this->sdkStdResult["productId"];
        return $tempResult;
    }
    
    /**
     * 设置待编辑的商品ID。     
     * @param Long $productId     
     * 参数示例：<pre>32234411234</pre>     
     * 此参数必填     */
    public function setProductId( $productId) {
        $this->sdkStdResult["productId"] = $productId;
    }
    
        
        /**
    * @return 语种，合法的参数有: ru_RU(俄语);pt_BR(葡语);fr_FR(法语);es_ES(西班牙语);in_ID(印尼语);it_IT(意大利语);de_DE(德语);nl_NL(荷兰语);tr_TR(土耳其语);iw_IL(以色列语);ja_JP(日语);ar_MA(阿拉伯语);th_TH(泰语);vi_VN(越南语);ko_KR(韩语);
    */
        public function getLocale() {
        $tempResult = $this->sdkStdResult["locale"];
        return $tempResult;
    }
    
    /**
     * 设置语种，合法的参数有: ru_RU(俄语);pt_BR(葡语);fr_FR(法语);es_ES(西班牙语);in_ID(印尼语);it_IT(意大利语);de_DE(德语);nl_NL(荷兰语);tr_TR(土耳其语);iw_IL(以色列语);ja_JP(日语);ar_MA(阿拉伯语);th_TH(泰语);vi_VN(越南语);ko_KR(韩语);     
     * @param String $locale     
     * 参数示例：<pre>ru_RU</pre>     
     * 此参数必填     */
    public function setLocale( $locale) {
        $this->sdkStdResult["locale"] = $locale;
    }
    
        
        /**
    * @return 商品对应语种的标题, 长度控制在1～218个字符之间。
    */
        public function getSubject() {
        $tempResult = $this->sdkStdResult["subject"];
        return $tempResult;
    }
    
    /**
     * 设置商品对应语种的标题, 长度控制在1～218个字符之间。     
     * @param String $subject     
     * 参数示例：<pre>foo</pre>     
     * 此参数必填     */
    public function setSubject( $subject) {
        $this->sdkStdResult["subject"] = $subject;
    }
    
        
        /**
    * @return 商品对应语种的详描
    */
        public function getDetail() {
        $tempResult = $this->sdkStdResult["detail"];
        return $tempResult;
    }
    
    /**
     * 设置商品对应语种的详描     
     * @param String $detail     
     * 参数示例：<pre>bar</pre>     
     * 此参数必填     */
    public function setDetail( $detail) {
        $this->sdkStdResult["detail"] = $detail;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>