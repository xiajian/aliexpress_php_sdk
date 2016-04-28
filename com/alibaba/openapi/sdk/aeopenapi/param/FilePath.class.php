<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class FilePath extends SDKDomain {

       	
    private $sPath;
    
        /**
    * @return 
    */
        public function getSPath() {
        return $this->sPath;
    }
    
    /**
     * 设置     
     * @param String $sPath     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSPath( $sPath) {
        $this->sPath = $sPath;
    }
    
        	
    private $mPath;
    
        /**
    * @return 
    */
        public function getMPath() {
        return $this->mPath;
    }
    
    /**
     * 设置     
     * @param String $mPath     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMPath( $mPath) {
        $this->mPath = $mPath;
    }
    
        	
    private $lPath;
    
        /**
    * @return 
    */
        public function getLPath() {
        return $this->lPath;
    }
    
    /**
     * 设置     
     * @param String $lPath     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setLPath( $lPath) {
        $this->lPath = $lPath;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "sPath", $this->stdResult )) {
    				$this->sPath = $this->stdResult->{"sPath"};
    			}
    			    		    				    			    			if (array_key_exists ( "mPath", $this->stdResult )) {
    				$this->mPath = $this->stdResult->{"mPath"};
    			}
    			    		    				    			    			if (array_key_exists ( "lPath", $this->stdResult )) {
    				$this->lPath = $this->stdResult->{"lPath"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "sPath", $this->arrayResult )) {
    			$this->sPath = $arrayResult['sPath'];
    			}
    		    	    			    		    			if (array_key_exists ( "mPath", $this->arrayResult )) {
    			$this->mPath = $arrayResult['mPath'];
    			}
    		    	    			    		    			if (array_key_exists ( "lPath", $this->arrayResult )) {
    			$this->lPath = $arrayResult['lPath'];
    			}
    		    	    		}
 
   
}
?>