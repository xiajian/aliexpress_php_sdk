<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/Money.class.php');

class ApiCalculateFreightParam {

        
        /**
    * @return 长
    */
        public function getLength() {
        $tempResult = $this->sdkStdResult["length"];
        return $tempResult;
    }
    
    /**
     * 设置长     
     * @param Integer $length     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setLength( $length) {
        $this->sdkStdResult["length"] = $length;
    }
    
        
        /**
    * @return 宽
    */
        public function getWidth() {
        $tempResult = $this->sdkStdResult["width"];
        return $tempResult;
    }
    
    /**
     * 设置宽     
     * @param Integer $width     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setWidth( $width) {
        $this->sdkStdResult["width"] = $width;
    }
    
        
        /**
    * @return 高
    */
        public function getHeight() {
        $tempResult = $this->sdkStdResult["height"];
        return $tempResult;
    }
    
    /**
     * 设置高     
     * @param Integer $height     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setHeight( $height) {
        $this->sdkStdResult["height"] = $height;
    }
    
        
        /**
    * @return 毛重
    */
        public function getWeight() {
        $tempResult = $this->sdkStdResult["weight"];
        return $tempResult;
    }
    
    /**
     * 设置毛重     
     * @param Double $weight     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setWeight( $weight) {
        $this->sdkStdResult["weight"] = $weight;
    }
    
        
        /**
    * @return 数量
    */
        public function getCount() {
        $tempResult = $this->sdkStdResult["count"];
        return $tempResult;
    }
    
    /**
     * 设置数量     
     * @param Integer $count     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCount( $count) {
        $this->sdkStdResult["count"] = $count;
    }
    
        
        /**
    * @return country
    */
        public function getCountry() {
        $tempResult = $this->sdkStdResult["country"];
        return $tempResult;
    }
    
    /**
     * 设置country     
     * @param String $country     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCountry( $country) {
        $this->sdkStdResult["country"] = $country;
    }
    
        
        /**
    * @return 是否为自定义打包计重,Y/N
    */
        public function getCustomPackWeight() {
        $tempResult = $this->sdkStdResult["customPackWeight"];
        return $tempResult;
    }
    
    /**
     * 设置是否为自定义打包计重,Y/N     
     * @param Boolean $customPackWeight     
     * 参数示例：<pre>Y</pre>     
     * 此参数必填     */
    public function setCustomPackWeight( $customPackWeight) {
        $this->sdkStdResult["customPackWeight"] = $customPackWeight;
    }
    
        
        /**
    * @return 打包计重几件以内按单个产品计重,当isCustomPackWeight=Y时必选
    */
        public function getPackBaseUnit() {
        $tempResult = $this->sdkStdResult["packBaseUnit"];
        return $tempResult;
    }
    
    /**
     * 设置打包计重几件以内按单个产品计重,当isCustomPackWeight=Y时必选     
     * @param Integer $packBaseUnit     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPackBaseUnit( $packBaseUnit) {
        $this->sdkStdResult["packBaseUnit"] = $packBaseUnit;
    }
    
        
        /**
    * @return 打包计重超过部分每增加件数,当isCustomPackWeight=Y时必选
    */
        public function getPackAddUnit() {
        $tempResult = $this->sdkStdResult["packAddUnit"];
        return $tempResult;
    }
    
    /**
     * 设置打包计重超过部分每增加件数,当isCustomPackWeight=Y时必选     
     * @param Integer $packAddUnit     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPackAddUnit( $packAddUnit) {
        $this->sdkStdResult["packAddUnit"] = $packAddUnit;
    }
    
        
        /**
    * @return 打包计重超过部分续重,当isCustomPackWeight=Y时必选
    */
        public function getPackAddWeight() {
        $tempResult = $this->sdkStdResult["packAddWeight"];
        return $tempResult;
    }
    
    /**
     * 设置打包计重超过部分续重,当isCustomPackWeight=Y时必选     
     * @param Double $packAddWeight     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPackAddWeight( $packAddWeight) {
        $this->sdkStdResult["packAddWeight"] = $packAddWeight;
    }
    
        
        /**
    * @return 运费模板ID 必选
    */
        public function getFreightTemplateId() {
        $tempResult = $this->sdkStdResult["freightTemplateId"];
        return $tempResult;
    }
    
    /**
     * 设置运费模板ID 必选     
     * @param Integer $freightTemplateId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFreightTemplateId( $freightTemplateId) {
        $this->sdkStdResult["freightTemplateId"] = $freightTemplateId;
    }
    
        
        /**
    * @return 产品价格
    */
        public function getProductPrice() {
        $tempResult = $this->sdkStdResult["productPrice"];
        return $tempResult;
    }
    
    /**
     * 设置产品价格     
     * @param Money $productPrice     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProductPrice(Money $productPrice) {
        $this->sdkStdResult["productPrice"] = $productPrice;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>