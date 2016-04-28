<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AeopAeProductPropertys extends SDKDomain {

       	
    private $attrNameId;
    
        /**
    * @return 属性名ID。从类目属性接口getAttributesResultByCateId获取普通类目属性，不可填入sku属性。 自定义属性名时,该项不填.
    */
        public function getAttrNameId() {
        return $this->attrNameId;
    }
    
    /**
     * 设置属性名ID。从类目属性接口getAttributesResultByCateId获取普通类目属性，不可填入sku属性。 自定义属性名时,该项不填.     
     * @param Integer $attrNameId     
     * 参数示例：<pre>200000043</pre>     
     * 此参数必填     */
    public function setAttrNameId( $attrNameId) {
        $this->attrNameId = $attrNameId;
    }
    
        	
    private $attrName;
    
        /**
    * @return 自定义属性名属性名。 自定义属性名时,该项必填.
    */
        public function getAttrName() {
        return $this->attrName;
    }
    
    /**
     * 设置自定义属性名属性名。 自定义属性名时,该项必填.     
     * @param String $attrName     
     * 参数示例：<pre>size</pre>     
     * 此参数必填     */
    public function setAttrName( $attrName) {
        $this->attrName = $attrName;
    }
    
        	
    private $attrValueId;
    
        /**
    * @return 属性值ID。从类目属性接口getAttributesResultByCateId获取普通类目属性，不可填入sku属性。自定义属性值时,该项不填。
    */
        public function getAttrValueId() {
        return $this->attrValueId;
    }
    
    /**
     * 设置属性值ID。从类目属性接口getAttributesResultByCateId获取普通类目属性，不可填入sku属性。自定义属性值时,该项不填。     
     * @param Integer $attrValueId     
     * 参数示例：<pre>581</pre>     
     * 此参数必填     */
    public function setAttrValueId( $attrValueId) {
        $this->attrValueId = $attrValueId;
    }
    
        	
    private $attrValue;
    
        /**
    * @return 自定义属性值。自定义属性名时,该项必填。 当自定义属性值内容为区间情况时，建议格式2 - 5 kg。(注意，数字'-'单位三者间是要加空格的！)
    */
        public function getAttrValue() {
        return $this->attrValue;
    }
    
    /**
     * 设置自定义属性值。自定义属性名时,该项必填。 当自定义属性值内容为区间情况时，建议格式2 - 5 kg。(注意，数字'-'单位三者间是要加空格的！)     
     * @param String $attrValue     
     * 参数示例：<pre>2 - 5 kg</pre>     
     * 此参数必填     */
    public function setAttrValue( $attrValue) {
        $this->attrValue = $attrValue;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "attrNameId", $this->stdResult )) {
    				$this->attrNameId = $this->stdResult->{"attrNameId"};
    			}
    			    		    				    			    			if (array_key_exists ( "attrName", $this->stdResult )) {
    				$this->attrName = $this->stdResult->{"attrName"};
    			}
    			    		    				    			    			if (array_key_exists ( "attrValueId", $this->stdResult )) {
    				$this->attrValueId = $this->stdResult->{"attrValueId"};
    			}
    			    		    				    			    			if (array_key_exists ( "attrValue", $this->stdResult )) {
    				$this->attrValue = $this->stdResult->{"attrValue"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "attrNameId", $this->arrayResult )) {
    			$this->attrNameId = $arrayResult['attrNameId'];
    			}
    		    	    			    		    			if (array_key_exists ( "attrName", $this->arrayResult )) {
    			$this->attrName = $arrayResult['attrName'];
    			}
    		    	    			    		    			if (array_key_exists ( "attrValueId", $this->arrayResult )) {
    			$this->attrValueId = $arrayResult['attrValueId'];
    			}
    		    	    			    		    			if (array_key_exists ( "attrValue", $this->arrayResult )) {
    			$this->attrValue = $arrayResult['attrValue'];
    			}
    		    	    		}
 
   
}
?>