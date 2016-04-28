<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiUploadTempImageResult {

        	
    private $width;
    
        /**
    * @return 图片的宽度。单位：像素
    */
        public function getWidth() {
        return $this->width;
    }
    
    /**
     * 设置图片的宽度。单位：像素     
     * @param Integer $width     
          
     * 此参数必填     */
    public function setWidth( $width) {
        $this->width = $width;
    }
    
        	
    private $height;
    
        /**
    * @return 图片的高度。单位：像素
    */
        public function getHeight() {
        return $this->height;
    }
    
    /**
     * 设置图片的高度。单位：像素     
     * @param Integer $height     
          
     * 此参数必填     */
    public function setHeight( $height) {
        $this->height = $height;
    }
    
        	
    private $srcFileName;
    
        /**
    * @return 图片的文件名。
    */
        public function getSrcFileName() {
        return $this->srcFileName;
    }
    
    /**
     * 设置图片的文件名。     
     * @param String $srcFileName     
          
     * 此参数必填     */
    public function setSrcFileName( $srcFileName) {
        $this->srcFileName = $srcFileName;
    }
    
        	
    private $url;
    
        /**
    * @return 图片的URL。
    */
        public function getUrl() {
        return $this->url;
    }
    
    /**
     * 设置图片的URL。     
     * @param String $url     
          
     * 此参数必填     */
    public function setUrl( $url) {
        $this->url = $url;
    }
    
        	
    private $success;
    
        /**
    * @return 本次操作的结果。
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置本次操作的结果。     
     * @param Boolean $success     
          
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "width", $this->stdResult )) {
    				$this->width = $this->stdResult->{"width"};
    			}
    			    		    				    			    			if (array_key_exists ( "height", $this->stdResult )) {
    				$this->height = $this->stdResult->{"height"};
    			}
    			    		    				    			    			if (array_key_exists ( "srcFileName", $this->stdResult )) {
    				$this->srcFileName = $this->stdResult->{"srcFileName"};
    			}
    			    		    				    			    			if (array_key_exists ( "url", $this->stdResult )) {
    				$this->url = $this->stdResult->{"url"};
    			}
    			    		    				    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "width", $this->arrayResult )) {
    			$this->width = $arrayResult['width'];
    			}
    		    	    			    		    			if (array_key_exists ( "height", $this->arrayResult )) {
    			$this->height = $arrayResult['height'];
    			}
    		    	    			    		    			if (array_key_exists ( "srcFileName", $this->arrayResult )) {
    			$this->srcFileName = $arrayResult['srcFileName'];
    			}
    		    	    			    		    			if (array_key_exists ( "url", $this->arrayResult )) {
    			$this->url = $arrayResult['url'];
    			}
    		    	    			    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['success'];
    			}
    		    	    		}

}
?>