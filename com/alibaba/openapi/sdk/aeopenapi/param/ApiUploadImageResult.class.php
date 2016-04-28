<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiUploadImageResult {

        	
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
    
        	
    private $fileName;
    
        /**
    * @return 图片的名称。
    */
        public function getFileName() {
        return $this->fileName;
    }
    
    /**
     * 设置图片的名称。     
     * @param String $fileName     
          
     * 此参数必填     */
    public function setFileName( $fileName) {
        $this->fileName = $fileName;
    }
    
        	
    private $photobankTotalSize;
    
        /**
    * @return 图片银行总的空间大小。单位：MB
    */
        public function getPhotobankTotalSize() {
        return $this->photobankTotalSize;
    }
    
    /**
     * 设置图片银行总的空间大小。单位：MB     
     * @param String $photobankTotalSize     
          
     * 此参数必填     */
    public function setPhotobankTotalSize( $photobankTotalSize) {
        $this->photobankTotalSize = $photobankTotalSize;
    }
    
        	
    private $photobankUsedSize;
    
        /**
    * @return 已经使用了的图片银行空间。单位：MB
    */
        public function getPhotobankUsedSize() {
        return $this->photobankUsedSize;
    }
    
    /**
     * 设置已经使用了的图片银行空间。单位：MB     
     * @param String $photobankUsedSize     
          
     * 此参数必填     */
    public function setPhotobankUsedSize( $photobankUsedSize) {
        $this->photobankUsedSize = $photobankUsedSize;
    }
    
        	
    private $photobankUrl;
    
        /**
    * @return 这张图片的URL。
    */
        public function getPhotobankUrl() {
        return $this->photobankUrl;
    }
    
    /**
     * 设置这张图片的URL。     
     * @param String $photobankUrl     
          
     * 此参数必填     */
    public function setPhotobankUrl( $photobankUrl) {
        $this->photobankUrl = $photobankUrl;
    }
    
        	
    private $status;
    
        /**
    * @return 图片上传的结果。
    */
        public function getStatus() {
        return $this->status;
    }
    
    /**
     * 设置图片上传的结果。     
     * @param String $status     
          
     * 此参数必填     */
    public function setStatus( $status) {
        $this->status = $status;
    }
    
        	
    private $success;
    
        /**
    * @return 接口调用的结果。
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置接口调用的结果。     
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
    			    		    				    			    			if (array_key_exists ( "fileName", $this->stdResult )) {
    				$this->fileName = $this->stdResult->{"fileName"};
    			}
    			    		    				    			    			if (array_key_exists ( "photobankTotalSize", $this->stdResult )) {
    				$this->photobankTotalSize = $this->stdResult->{"photobankTotalSize"};
    			}
    			    		    				    			    			if (array_key_exists ( "photobankUsedSize", $this->stdResult )) {
    				$this->photobankUsedSize = $this->stdResult->{"photobankUsedSize"};
    			}
    			    		    				    			    			if (array_key_exists ( "photobankUrl", $this->stdResult )) {
    				$this->photobankUrl = $this->stdResult->{"photobankUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "status", $this->stdResult )) {
    				$this->status = $this->stdResult->{"status"};
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
    		    	    			    		    			if (array_key_exists ( "fileName", $this->arrayResult )) {
    			$this->fileName = $arrayResult['fileName'];
    			}
    		    	    			    		    			if (array_key_exists ( "photobankTotalSize", $this->arrayResult )) {
    			$this->photobankTotalSize = $arrayResult['photobankTotalSize'];
    			}
    		    	    			    		    			if (array_key_exists ( "photobankUsedSize", $this->arrayResult )) {
    			$this->photobankUsedSize = $arrayResult['photobankUsedSize'];
    			}
    		    	    			    		    			if (array_key_exists ( "photobankUrl", $this->arrayResult )) {
    			$this->photobankUrl = $arrayResult['photobankUrl'];
    			}
    		    	    			    		    			if (array_key_exists ( "status", $this->arrayResult )) {
    			$this->status = $arrayResult['status'];
    			}
    		    	    			    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['success'];
    			}
    		    	    		}

}
?>