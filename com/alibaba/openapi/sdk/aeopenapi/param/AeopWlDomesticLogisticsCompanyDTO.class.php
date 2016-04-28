<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AeopWlDomesticLogisticsCompanyDTO extends SDKDomain {

       	
    private $companyId;
    
        /**
    * @return 物流公司ID
    */
        public function getCompanyId() {
        return $this->companyId;
    }
    
    /**
     * 设置物流公司ID     
     * @param Long $companyId     
     * 参数示例：<pre>101</pre>     
     * 此参数必填     */
    public function setCompanyId( $companyId) {
        $this->companyId = $companyId;
    }
    
        	
    private $name;
    
        /**
    * @return 物流公司名称
    */
        public function getName() {
        return $this->name;
    }
    
    /**
     * 设置物流公司名称     
     * @param String $name     
     * 参数示例：<pre>圆通速递</pre>     
     * 此参数必填     */
    public function setName( $name) {
        $this->name = $name;
    }
    
        	
    private $companyCode;
    
        /**
    * @return 物流公司编码
    */
        public function getCompanyCode() {
        return $this->companyCode;
    }
    
    /**
     * 设置物流公司编码     
     * @param String $companyCode     
     * 参数示例：<pre>YTO</pre>     
     * 此参数必填     */
    public function setCompanyCode( $companyCode) {
        $this->companyCode = $companyCode;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "companyId", $this->stdResult )) {
    				$this->companyId = $this->stdResult->{"companyId"};
    			}
    			    		    				    			    			if (array_key_exists ( "name", $this->stdResult )) {
    				$this->name = $this->stdResult->{"name"};
    			}
    			    		    				    			    			if (array_key_exists ( "companyCode", $this->stdResult )) {
    				$this->companyCode = $this->stdResult->{"companyCode"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "companyId", $this->arrayResult )) {
    			$this->companyId = $arrayResult['companyId'];
    			}
    		    	    			    		    			if (array_key_exists ( "name", $this->arrayResult )) {
    			$this->name = $arrayResult['name'];
    			}
    		    	    			    		    			if (array_key_exists ( "companyCode", $this->arrayResult )) {
    			$this->companyCode = $arrayResult['companyCode'];
    			}
    		    	    		}
 
   
}
?>