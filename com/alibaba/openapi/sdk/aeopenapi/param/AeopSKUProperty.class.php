<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AeopSKUProperty extends SDKDomain {

       	
    private $skuPropertyId;
    
        /**
    * @return sku属性名id。从类目属性接口getAttributesResultByCateId获取sku属性。
    */
        public function getSkuPropertyId() {
        return $this->skuPropertyId;
    }
    
    /**
     * 设置sku属性名id。从类目属性接口getAttributesResultByCateId获取sku属性。     
     * @param Integer $skuPropertyId     
     * 参数示例：<pre>200000264</pre>     
     * 此参数必填     */
    public function setSkuPropertyId( $skuPropertyId) {
        $this->skuPropertyId = $skuPropertyId;
    }
    
        	
    private $propertyValueId;
    
        /**
    * @return sku属性值id。从类目属性接getAttributesResultByCateId获取。
    */
        public function getPropertyValueId() {
        return $this->propertyValueId;
    }
    
    /**
     * 设置sku属性值id。从类目属性接getAttributesResultByCateId获取。     
     * @param Integer $propertyValueId     
     * 参数示例：<pre>200002211</pre>     
     * 此参数必填     */
    public function setPropertyValueId( $propertyValueId) {
        $this->propertyValueId = $propertyValueId;
    }
    
        	
    private $propertyValueDefinitionName;
    
        /**
    * @return 自定义属性值名称，0-20个字符，0-9和英文半角字符。
    */
        public function getPropertyValueDefinitionName() {
        return $this->propertyValueDefinitionName;
    }
    
    /**
     * 设置自定义属性值名称，0-20个字符，0-9和英文半角字符。     
     * @param String $propertyValueDefinitionName     
     * 参数示例：<pre>pink</pre>     
     * 此参数必填     */
    public function setPropertyValueDefinitionName( $propertyValueDefinitionName) {
        $this->propertyValueDefinitionName = $propertyValueDefinitionName;
    }
    
        	
    private $skuImage;
    
        /**
    * @return sku属性图片utl，从上传图片接口uploadTempImage获取。不能引入图片银行图片url。编辑的情况，如图片不变，直接填入主图展示路径。
    */
        public function getSkuImage() {
        return $this->skuImage;
    }
    
    /**
     * 设置sku属性图片utl，从上传图片接口uploadTempImage获取。不能引入图片银行图片url。编辑的情况，如图片不变，直接填入主图展示路径。     
     * @param String $skuImage     
     * 参数示例：<pre>http://upload.alibaba.com/wsproduct_repository/upload/
132/203/133/456/1322031334562_inc-icbu-qa-142-36_120.jpg</pre>     
     * 此参数必填     */
    public function setSkuImage( $skuImage) {
        $this->skuImage = $skuImage;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "skuPropertyId", $this->stdResult )) {
    				$this->skuPropertyId = $this->stdResult->{"skuPropertyId"};
    			}
    			    		    				    			    			if (array_key_exists ( "propertyValueId", $this->stdResult )) {
    				$this->propertyValueId = $this->stdResult->{"propertyValueId"};
    			}
    			    		    				    			    			if (array_key_exists ( "propertyValueDefinitionName", $this->stdResult )) {
    				$this->propertyValueDefinitionName = $this->stdResult->{"propertyValueDefinitionName"};
    			}
    			    		    				    			    			if (array_key_exists ( "skuImage", $this->stdResult )) {
    				$this->skuImage = $this->stdResult->{"skuImage"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "skuPropertyId", $this->arrayResult )) {
    			$this->skuPropertyId = $arrayResult['skuPropertyId'];
    			}
    		    	    			    		    			if (array_key_exists ( "propertyValueId", $this->arrayResult )) {
    			$this->propertyValueId = $arrayResult['propertyValueId'];
    			}
    		    	    			    		    			if (array_key_exists ( "propertyValueDefinitionName", $this->arrayResult )) {
    			$this->propertyValueDefinitionName = $arrayResult['propertyValueDefinitionName'];
    			}
    		    	    			    		    			if (array_key_exists ( "skuImage", $this->arrayResult )) {
    			$this->skuImage = $arrayResult['skuImage'];
    			}
    		    	    		}
 
   
}
?>