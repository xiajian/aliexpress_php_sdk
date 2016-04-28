<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class TpOpenAddressDTO extends SDKDomain {

       	
    private $address;
    
        /**
    * @return 地址1
    */
        public function getAddress() {
        return $this->address;
    }
    
    /**
     * 设置地址1     
     * @param String $address     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAddress( $address) {
        $this->address = $address;
    }
    
        	
    private $address2;
    
        /**
    * @return 地址2
    */
        public function getAddress2() {
        return $this->address2;
    }
    
    /**
     * 设置地址2     
     * @param String $address2     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAddress2( $address2) {
        $this->address2 = $address2;
    }
    
        	
    private $city;
    
        /**
    * @return 城市
    */
        public function getCity() {
        return $this->city;
    }
    
    /**
     * 设置城市     
     * @param String $city     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCity( $city) {
        $this->city = $city;
    }
    
        	
    private $contactPerson;
    
        /**
    * @return 收件人
    */
        public function getContactPerson() {
        return $this->contactPerson;
    }
    
    /**
     * 设置收件人     
     * @param String $contactPerson     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setContactPerson( $contactPerson) {
        $this->contactPerson = $contactPerson;
    }
    
        	
    private $country;
    
        /**
    * @return 国家
    */
        public function getCountry() {
        return $this->country;
    }
    
    /**
     * 设置国家     
     * @param String $country     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCountry( $country) {
        $this->country = $country;
    }
    
        	
    private $detailAddress;
    
        /**
    * @return 街道详细地址
    */
        public function getDetailAddress() {
        return $this->detailAddress;
    }
    
    /**
     * 设置街道详细地址     
     * @param String $detailAddress     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDetailAddress( $detailAddress) {
        $this->detailAddress = $detailAddress;
    }
    
        	
    private $faxArea;
    
        /**
    * @return 传真区号
    */
        public function getFaxArea() {
        return $this->faxArea;
    }
    
    /**
     * 设置传真区号     
     * @param String $faxArea     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFaxArea( $faxArea) {
        $this->faxArea = $faxArea;
    }
    
        	
    private $faxCountry;
    
        /**
    * @return 传真国家码
    */
        public function getFaxCountry() {
        return $this->faxCountry;
    }
    
    /**
     * 设置传真国家码     
     * @param String $faxCountry     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFaxCountry( $faxCountry) {
        $this->faxCountry = $faxCountry;
    }
    
        	
    private $faxNumber;
    
        /**
    * @return 传真号
    */
        public function getFaxNumber() {
        return $this->faxNumber;
    }
    
    /**
     * 设置传真号     
     * @param String $faxNumber     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFaxNumber( $faxNumber) {
        $this->faxNumber = $faxNumber;
    }
    
        	
    private $mobileNo;
    
        /**
    * @return 手机
    */
        public function getMobileNo() {
        return $this->mobileNo;
    }
    
    /**
     * 设置手机     
     * @param String $mobileNo     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMobileNo( $mobileNo) {
        $this->mobileNo = $mobileNo;
    }
    
        	
    private $phoneArea;
    
        /**
    * @return 区号
    */
        public function getPhoneArea() {
        return $this->phoneArea;
    }
    
    /**
     * 设置区号     
     * @param String $phoneArea     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPhoneArea( $phoneArea) {
        $this->phoneArea = $phoneArea;
    }
    
        	
    private $phoneCountry;
    
        /**
    * @return 国家码
    */
        public function getPhoneCountry() {
        return $this->phoneCountry;
    }
    
    /**
     * 设置国家码     
     * @param String $phoneCountry     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPhoneCountry( $phoneCountry) {
        $this->phoneCountry = $phoneCountry;
    }
    
        	
    private $phoneNumber;
    
        /**
    * @return 电话
    */
        public function getPhoneNumber() {
        return $this->phoneNumber;
    }
    
    /**
     * 设置电话     
     * @param String $phoneNumber     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPhoneNumber( $phoneNumber) {
        $this->phoneNumber = $phoneNumber;
    }
    
        	
    private $province;
    
        /**
    * @return 省份
    */
        public function getProvince() {
        return $this->province;
    }
    
    /**
     * 设置省份     
     * @param String $province     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setProvince( $province) {
        $this->province = $province;
    }
    
        	
    private $zip;
    
        /**
    * @return 邮编
    */
        public function getZip() {
        return $this->zip;
    }
    
    /**
     * 设置邮编     
     * @param String $zip     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setZip( $zip) {
        $this->zip = $zip;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "address", $this->stdResult )) {
    				$this->address = $this->stdResult->{"address"};
    			}
    			    		    				    			    			if (array_key_exists ( "address2", $this->stdResult )) {
    				$this->address2 = $this->stdResult->{"address2"};
    			}
    			    		    				    			    			if (array_key_exists ( "city", $this->stdResult )) {
    				$this->city = $this->stdResult->{"city"};
    			}
    			    		    				    			    			if (array_key_exists ( "contactPerson", $this->stdResult )) {
    				$this->contactPerson = $this->stdResult->{"contactPerson"};
    			}
    			    		    				    			    			if (array_key_exists ( "country", $this->stdResult )) {
    				$this->country = $this->stdResult->{"country"};
    			}
    			    		    				    			    			if (array_key_exists ( "detailAddress", $this->stdResult )) {
    				$this->detailAddress = $this->stdResult->{"detailAddress"};
    			}
    			    		    				    			    			if (array_key_exists ( "faxArea", $this->stdResult )) {
    				$this->faxArea = $this->stdResult->{"faxArea"};
    			}
    			    		    				    			    			if (array_key_exists ( "faxCountry", $this->stdResult )) {
    				$this->faxCountry = $this->stdResult->{"faxCountry"};
    			}
    			    		    				    			    			if (array_key_exists ( "faxNumber", $this->stdResult )) {
    				$this->faxNumber = $this->stdResult->{"faxNumber"};
    			}
    			    		    				    			    			if (array_key_exists ( "mobileNo", $this->stdResult )) {
    				$this->mobileNo = $this->stdResult->{"mobileNo"};
    			}
    			    		    				    			    			if (array_key_exists ( "phoneArea", $this->stdResult )) {
    				$this->phoneArea = $this->stdResult->{"phoneArea"};
    			}
    			    		    				    			    			if (array_key_exists ( "phoneCountry", $this->stdResult )) {
    				$this->phoneCountry = $this->stdResult->{"phoneCountry"};
    			}
    			    		    				    			    			if (array_key_exists ( "phoneNumber", $this->stdResult )) {
    				$this->phoneNumber = $this->stdResult->{"phoneNumber"};
    			}
    			    		    				    			    			if (array_key_exists ( "province", $this->stdResult )) {
    				$this->province = $this->stdResult->{"province"};
    			}
    			    		    				    			    			if (array_key_exists ( "zip", $this->stdResult )) {
    				$this->zip = $this->stdResult->{"zip"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "address", $this->arrayResult )) {
    			$this->address = $arrayResult['address'];
    			}
    		    	    			    		    			if (array_key_exists ( "address2", $this->arrayResult )) {
    			$this->address2 = $arrayResult['address2'];
    			}
    		    	    			    		    			if (array_key_exists ( "city", $this->arrayResult )) {
    			$this->city = $arrayResult['city'];
    			}
    		    	    			    		    			if (array_key_exists ( "contactPerson", $this->arrayResult )) {
    			$this->contactPerson = $arrayResult['contactPerson'];
    			}
    		    	    			    		    			if (array_key_exists ( "country", $this->arrayResult )) {
    			$this->country = $arrayResult['country'];
    			}
    		    	    			    		    			if (array_key_exists ( "detailAddress", $this->arrayResult )) {
    			$this->detailAddress = $arrayResult['detailAddress'];
    			}
    		    	    			    		    			if (array_key_exists ( "faxArea", $this->arrayResult )) {
    			$this->faxArea = $arrayResult['faxArea'];
    			}
    		    	    			    		    			if (array_key_exists ( "faxCountry", $this->arrayResult )) {
    			$this->faxCountry = $arrayResult['faxCountry'];
    			}
    		    	    			    		    			if (array_key_exists ( "faxNumber", $this->arrayResult )) {
    			$this->faxNumber = $arrayResult['faxNumber'];
    			}
    		    	    			    		    			if (array_key_exists ( "mobileNo", $this->arrayResult )) {
    			$this->mobileNo = $arrayResult['mobileNo'];
    			}
    		    	    			    		    			if (array_key_exists ( "phoneArea", $this->arrayResult )) {
    			$this->phoneArea = $arrayResult['phoneArea'];
    			}
    		    	    			    		    			if (array_key_exists ( "phoneCountry", $this->arrayResult )) {
    			$this->phoneCountry = $arrayResult['phoneCountry'];
    			}
    		    	    			    		    			if (array_key_exists ( "phoneNumber", $this->arrayResult )) {
    			$this->phoneNumber = $arrayResult['phoneNumber'];
    			}
    		    	    			    		    			if (array_key_exists ( "province", $this->arrayResult )) {
    			$this->province = $arrayResult['province'];
    			}
    		    	    			    		    			if (array_key_exists ( "zip", $this->arrayResult )) {
    			$this->zip = $arrayResult['zip'];
    			}
    		    	    		}
 
   
}
?>