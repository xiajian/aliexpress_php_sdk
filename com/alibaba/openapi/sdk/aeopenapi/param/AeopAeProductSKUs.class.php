<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/AeopSKUProperty.class.php');

class AeopAeProductSKUs extends SDKDomain {

       	
    private $aeopSKUProperty;
    
        /**
    * @return Sku属性对象list，允许1-3个sku属性对象，按sku属性顺序排放。sku属性从类目属性接口getAttributesResultByCateId获取。该项值输入sku属性，不能输入普通类目属性。注意，sku属性是有顺序的，必须按照顺序存放。
    */
        public function getAeopSKUProperty() {
        return $this->aeopSKUProperty;
    }
    
    /**
     * 设置Sku属性对象list，允许1-3个sku属性对象，按sku属性顺序排放。sku属性从类目属性接口getAttributesResultByCateId获取。该项值输入sku属性，不能输入普通类目属性。注意，sku属性是有顺序的，必须按照顺序存放。     
     * @param array include @see AeopSKUProperty[] $aeopSKUProperty     
     * 参数示例：<pre>"aeopSKUProperty":[{"skuPropertyId":14,"propertyValueId":771, "propertyValueDefinitionName": "black", "skuImage": "http://g01.a.alicdn.com/kf/HTB13GKLJXXXXXbYaXXXq6xXFXXXi.jpg" },{"skuPropertyId":25,"propertyValueId":775,  "propertyValueDefinitionName": "red"}]</pre>     
     * 此参数必填     */
    public function setAeopSKUProperty(AeopSKUProperty $aeopSKUProperty) {
        $this->aeopSKUProperty = $aeopSKUProperty;
    }
    
        	
    private $skuPrice;
    
        /**
    * @return Sku价格。取值范围:0.01-100000;单位:美元。 如:200.07，表示:200美元7分。需要在正确的价格区间内。
    */
        public function getSkuPrice() {
        return $this->skuPrice;
    }
    
    /**
     * 设置Sku价格。取值范围:0.01-100000;单位:美元。 如:200.07，表示:200美元7分。需要在正确的价格区间内。     
     * @param String $skuPrice     
     * 参数示例：<pre>"200.07"</pre>     
     * 此参数必填     */
    public function setSkuPrice( $skuPrice) {
        $this->skuPrice = $skuPrice;
    }
    
        	
    private $skuCode;
    
        /**
    * @return Sku商家编码。 格式:半角英数字,长度20,不包含空格大于号和小于号。如果用户只填写零售价（productprice）和商品编码，需要完整生成一条SKU记录提交，否则商品编码无法保存。系统会认为只提交了零售价，而没有SKU，导致商品编辑未保存。
    */
        public function getSkuCode() {
        return $this->skuCode;
    }
    
    /**
     * 设置Sku商家编码。 格式:半角英数字,长度20,不包含空格大于号和小于号。如果用户只填写零售价（productprice）和商品编码，需要完整生成一条SKU记录提交，否则商品编码无法保存。系统会认为只提交了零售价，而没有SKU，导致商品编辑未保存。     
     * @param String $skuCode     
     * 参数示例：<pre>"cfas00973"</pre>     
     * 此参数必填     */
    public function setSkuCode( $skuCode) {
        $this->skuCode = $skuCode;
    }
    
        	
    private $skuStock;
    
        /**
    * @return Sku库存,数据格式有货true，无货false；至少有一条sku记录是有货的。
    */
        public function getSkuStock() {
        return $this->skuStock;
    }
    
    /**
     * 设置Sku库存,数据格式有货true，无货false；至少有一条sku记录是有货的。     
     * @param Boolean $skuStock     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setSkuStock( $skuStock) {
        $this->skuStock = $skuStock;
    }
    
        	
    private $ipmSkuStock;
    
        /**
    * @return SKU实际可售库存属性ipmSkuStock，该属性值的合理取值范围为0~999999，如该商品有SKU时，请确保至少有一个SKU是有货状态，也就是ipmSkuStock取值是1~999999，在整个商品纬度库存值的取值范围是1~999999。 如果同时设置了skuStock属性，那么系统以ipmSkuStock属性为优先；如果没有设置ipmSkuStock属性，那么系统会根据skuStock属性进行设置库存，true表示999，false表示0。
    */
        public function getIpmSkuStock() {
        return $this->ipmSkuStock;
    }
    
    /**
     * 设置SKU实际可售库存属性ipmSkuStock，该属性值的合理取值范围为0~999999，如该商品有SKU时，请确保至少有一个SKU是有货状态，也就是ipmSkuStock取值是1~999999，在整个商品纬度库存值的取值范围是1~999999。 如果同时设置了skuStock属性，那么系统以ipmSkuStock属性为优先；如果没有设置ipmSkuStock属性，那么系统会根据skuStock属性进行设置库存，true表示999，false表示0。     
     * @param Long $ipmSkuStock     
     * 参数示例：<pre>1234</pre>     
     * 此参数必填     */
    public function setIpmSkuStock( $ipmSkuStock) {
        $this->ipmSkuStock = $ipmSkuStock;
    }
    
        	
    private $id;
    
        /**
    * @return SKU ID。 可以唯一表示一个商品范围内的SKU。注意: 这是一个只读参数，在发布和编辑商品信息时，在设置aeopAeProductSKUs参数时不需要提供这个参数。isv可以通过api.findAeProductById(查询单个商品信息)接口来获取到这个属性。这个属性被api.editMutilpleSkuStocks(编辑一个或多个SKU的可售库存)、api.editSingleSkuStock(编辑单个SKU的可售库存)、api.editSingleSkuPrice(编辑单个SKU的价格)三个接口使用到。
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置SKU ID。 可以唯一表示一个商品范围内的SKU。注意: 这是一个只读参数，在发布和编辑商品信息时，在设置aeopAeProductSKUs参数时不需要提供这个参数。isv可以通过api.findAeProductById(查询单个商品信息)接口来获取到这个属性。这个属性被api.editMutilpleSkuStocks(编辑一个或多个SKU的可售库存)、api.editSingleSkuStock(编辑单个SKU的可售库存)、api.editSingleSkuPrice(编辑单个SKU的价格)三个接口使用到。     
     * @param String $id     
     * 参数示例：<pre>"200000182:193;200007763:201336100"</pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
        	
    private $currencyCode;
    
        /**
    * @return 货币单位。如果不提供该值信息，则默认为"USD"；非俄罗斯卖家这个属性值可以不提供。对于俄罗斯海外卖家，该单位值必须提供，如: "RUB"。
    */
        public function getCurrencyCode() {
        return $this->currencyCode;
    }
    
    /**
     * 设置货币单位。如果不提供该值信息，则默认为"USD"；非俄罗斯卖家这个属性值可以不提供。对于俄罗斯海外卖家，该单位值必须提供，如: "RUB"。     
     * @param String $currencyCode     
     * 参数示例：<pre>"USD"或者"RUB"</pre>     
     * 此参数必填     */
    public function setCurrencyCode( $currencyCode) {
        $this->currencyCode = $currencyCode;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "aeopSKUProperty", $this->stdResult )) {
    			$aeopSKUPropertyResult=$this->stdResult->{"aeopSKUProperty"};
    				$object = json_decode ( json_encode ( $aeopSKUPropertyResult ), true );
					$this->aeopSKUProperty = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AeopSKUPropertyResult=new AeopSKUProperty();
						$AeopSKUPropertyResult->setArrayResult($arrayobject );
						$this->aeopSKUProperty [$i] = $AeopSKUPropertyResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "skuPrice", $this->stdResult )) {
    				$this->skuPrice = $this->stdResult->{"skuPrice"};
    			}
    			    		    				    			    			if (array_key_exists ( "skuCode", $this->stdResult )) {
    				$this->skuCode = $this->stdResult->{"skuCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "skuStock", $this->stdResult )) {
    				$this->skuStock = $this->stdResult->{"skuStock"};
    			}
    			    		    				    			    			if (array_key_exists ( "ipmSkuStock", $this->stdResult )) {
    				$this->ipmSkuStock = $this->stdResult->{"ipmSkuStock"};
    			}
    			    		    				    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    				    			    			if (array_key_exists ( "currencyCode", $this->stdResult )) {
    				$this->currencyCode = $this->stdResult->{"currencyCode"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "aeopSKUProperty", $this->arrayResult )) {
    		$aeopSKUPropertyResult=$arrayResult['aeopSKUProperty'];
    			$this->aeopSKUProperty = AeopSKUProperty();
    			$this->aeopSKUProperty->$this->setStdResult ( $aeopSKUPropertyResult);
    		}
    		    	    			    		    			if (array_key_exists ( "skuPrice", $this->arrayResult )) {
    			$this->skuPrice = $arrayResult['skuPrice'];
    			}
    		    	    			    		    			if (array_key_exists ( "skuCode", $this->arrayResult )) {
    			$this->skuCode = $arrayResult['skuCode'];
    			}
    		    	    			    		    			if (array_key_exists ( "skuStock", $this->arrayResult )) {
    			$this->skuStock = $arrayResult['skuStock'];
    			}
    		    	    			    		    			if (array_key_exists ( "ipmSkuStock", $this->arrayResult )) {
    			$this->ipmSkuStock = $arrayResult['ipmSkuStock'];
    			}
    		    	    			    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['id'];
    			}
    		    	    			    		    			if (array_key_exists ( "currencyCode", $this->arrayResult )) {
    			$this->currencyCode = $arrayResult['currencyCode'];
    			}
    		    	    		}
 
   
}
?>