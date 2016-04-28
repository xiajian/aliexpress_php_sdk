<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class PhotobankImageRecord extends SDKDomain {

       	
    private $iid;
    
        /**
    * @return 这张图片在图片银行中的ID。
    */
        public function getIid() {
        return $this->iid;
    }
    
    /**
     * 设置这张图片在图片银行中的ID。     
     * @param Long $iid     
     * 参数示例：<pre>3207108922</pre>     
     * 此参数必填     */
    public function setIid( $iid) {
        $this->iid = $iid;
    }
    
        	
    private $width;
    
        /**
    * @return 这张图片的宽度。单位：像素。
    */
        public function getWidth() {
        return $this->width;
    }
    
    /**
     * 设置这张图片的宽度。单位：像素。     
     * @param Integer $width     
     * 参数示例：<pre>588</pre>     
     * 此参数必填     */
    public function setWidth( $width) {
        $this->width = $width;
    }
    
        	
    private $height;
    
        /**
    * @return 这张图片的高度。单位：像素。
    */
        public function getHeight() {
        return $this->height;
    }
    
    /**
     * 设置这张图片的高度。单位：像素。     
     * @param Integer $height     
     * 参数示例：<pre>421</pre>     
     * 此参数必填     */
    public function setHeight( $height) {
        $this->height = $height;
    }
    
        	
    private $fileSize;
    
        /**
    * @return 这张图片的大小。单位：字节(B)。
    */
        public function getFileSize() {
        return $this->fileSize;
    }
    
    /**
     * 设置这张图片的大小。单位：字节(B)。     
     * @param Integer $fileSize     
     * 参数示例：<pre>35151</pre>     
     * 此参数必填     */
    public function setFileSize( $fileSize) {
        $this->fileSize = $fileSize;
    }
    
        	
    private $referenceCount;
    
        /**
    * @return 这张图片被引用的次数。
    */
        public function getReferenceCount() {
        return $this->referenceCount;
    }
    
    /**
     * 设置这张图片被引用的次数。     
     * @param Integer $referenceCount     
     * 参数示例：<pre>0</pre>     
     * 此参数必填     */
    public function setReferenceCount( $referenceCount) {
        $this->referenceCount = $referenceCount;
    }
    
        	
    private $displayName;
    
        /**
    * @return 这张图片在图片银行中名称。可以根据这个值在图片银行中搜索到对应的图片。
    */
        public function getDisplayName() {
        return $this->displayName;
    }
    
    /**
     * 设置这张图片在图片银行中名称。可以根据这个值在图片银行中搜索到对应的图片。     
     * @param String $displayName     
     * 参数示例：<pre>10 E14 6W Warm White 30 SMD LED Spotlight Light Lamp Bulb</pre>     
     * 此参数必填     */
    public function setDisplayName( $displayName) {
        $this->displayName = $displayName;
    }
    
        	
    private $url;
    
        /**
    * @return 这张图片的URL。可以将这个URL添加到产品的主图或者详描中。
    */
        public function getUrl() {
        return $this->url;
    }
    
    /**
     * 设置这张图片的URL。可以将这个URL添加到产品的主图或者详描中。     
     * @param String $url     
     * 参数示例：<pre>http://g03.a.alicdn.com/kf/HTB1PP5AGVXXXXaIXXXXq6xXFXXXN/200042360/HTB1PP5AGVXXXXaIXXXXq6xXFXXXN.jpg</pre>     
     * 此参数必填     */
    public function setUrl( $url) {
        $this->url = $url;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "iid", $this->stdResult )) {
    				$this->iid = $this->stdResult->{"iid"};
    			}
    			    		    				    			    			if (array_key_exists ( "width", $this->stdResult )) {
    				$this->width = $this->stdResult->{"width"};
    			}
    			    		    				    			    			if (array_key_exists ( "height", $this->stdResult )) {
    				$this->height = $this->stdResult->{"height"};
    			}
    			    		    				    			    			if (array_key_exists ( "fileSize", $this->stdResult )) {
    				$this->fileSize = $this->stdResult->{"fileSize"};
    			}
    			    		    				    			    			if (array_key_exists ( "referenceCount", $this->stdResult )) {
    				$this->referenceCount = $this->stdResult->{"referenceCount"};
    			}
    			    		    				    			    			if (array_key_exists ( "displayName", $this->stdResult )) {
    				$this->displayName = $this->stdResult->{"displayName"};
    			}
    			    		    				    			    			if (array_key_exists ( "url", $this->stdResult )) {
    				$this->url = $this->stdResult->{"url"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "iid", $this->arrayResult )) {
    			$this->iid = $arrayResult['iid'];
    			}
    		    	    			    		    			if (array_key_exists ( "width", $this->arrayResult )) {
    			$this->width = $arrayResult['width'];
    			}
    		    	    			    		    			if (array_key_exists ( "height", $this->arrayResult )) {
    			$this->height = $arrayResult['height'];
    			}
    		    	    			    		    			if (array_key_exists ( "fileSize", $this->arrayResult )) {
    			$this->fileSize = $arrayResult['fileSize'];
    			}
    		    	    			    		    			if (array_key_exists ( "referenceCount", $this->arrayResult )) {
    			$this->referenceCount = $arrayResult['referenceCount'];
    			}
    		    	    			    		    			if (array_key_exists ( "displayName", $this->arrayResult )) {
    			$this->displayName = $arrayResult['displayName'];
    			}
    		    	    			    		    			if (array_key_exists ( "url", $this->arrayResult )) {
    			$this->url = $arrayResult['url'];
    			}
    		    	    		}
 
   
}
?>