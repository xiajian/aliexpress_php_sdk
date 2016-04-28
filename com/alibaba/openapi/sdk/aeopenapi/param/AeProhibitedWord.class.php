<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AeProhibitedWord extends SDKDomain {

       	
    private $primaryWord;
    
        /**
    * @return 违禁词名称
    */
        public function getPrimaryWord() {
        return $this->primaryWord;
    }
    
    /**
     * 设置违禁词名称     
     * @param String $primaryWord     
     * 参数示例：<pre>nike</pre>     
     * 此参数必填     */
    public function setPrimaryWord( $primaryWord) {
        $this->primaryWord = $primaryWord;
    }
    
        	
    private $types;
    
        /**
    * @return 违禁原因
    */
        public function getTypes() {
        return $this->types;
    }
    
    /**
     * 设置违禁原因     
     * @param array include @see String[] $types     
     * 参数示例：<pre>[&quot;FORBIDEN_TYPE&quot;, &quot;RESTRICT_TYPE&quot;]</pre>     
     * 此参数必填     */
    public function setTypes( $types) {
        $this->types = $types;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "primaryWord", $this->stdResult )) {
    				$this->primaryWord = $this->stdResult->{"primaryWord"};
    			}
    			    		    				    			    			if (array_key_exists ( "types", $this->stdResult )) {
    				$this->types = $this->stdResult->{"types"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "primaryWord", $this->arrayResult )) {
    			$this->primaryWord = $arrayResult['primaryWord'];
    			}
    		    	    			    		    			if (array_key_exists ( "types", $this->arrayResult )) {
    			$this->types = $arrayResult['types'];
    			}
    		    	    		}
 
   
}
?>