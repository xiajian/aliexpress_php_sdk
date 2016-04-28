<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AeopDetailModule extends SDKDomain {

       	
    private $id;
    
        /**
    * @return 模块ID
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置模块ID     
     * @param Long $id     
     * 参数示例：<pre>123</pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
        	
    private $name;
    
        /**
    * @return 模块名称
    */
        public function getName() {
        return $this->name;
    }
    
    /**
     * 设置模块名称     
     * @param String $name     
     * 参数示例：<pre>hello</pre>     
     * 此参数必填     */
    public function setName( $name) {
        $this->name = $name;
    }
    
        	
    private $status;
    
        /**
    * @return 模块的状态
    */
        public function getStatus() {
        return $this->status;
    }
    
    /**
     * 设置模块的状态     
     * @param String $status     
     * 参数示例：<pre>status</pre>     
     * 此参数必填     */
    public function setStatus( $status) {
        $this->status = $status;
    }
    
        	
    private $type;
    
        /**
    * @return 模块的类型
    */
        public function getType() {
        return $this->type;
    }
    
    /**
     * 设置模块的类型     
     * @param String $type     
     * 参数示例：<pre>custom</pre>     
     * 此参数必填     */
    public function setType( $type) {
        $this->type = $type;
    }
    
        	
    private $displayContent;
    
        /**
    * @return 模块的内容
    */
        public function getDisplayContent() {
        return $this->displayContent;
    }
    
    /**
     * 设置模块的内容     
     * @param String $displayContent     
     * 参数示例：<pre>hello content</pre>     
     * 此参数必填     */
    public function setDisplayContent( $displayContent) {
        $this->displayContent = $displayContent;
    }
    
        	
    private $moduleContents;
    
        /**
    * @return 模块的内容
    */
        public function getModuleContents() {
        return $this->moduleContents;
    }
    
    /**
     * 设置模块的内容     
     * @param String $moduleContents     
     * 参数示例：<pre>hello content</pre>     
     * 此参数必填     */
    public function setModuleContents( $moduleContents) {
        $this->moduleContents = $moduleContents;
    }
    
        	
    private $aliMemberId;
    
        /**
    * @return 卖家主账户的ID
    */
        public function getAliMemberId() {
        return $this->aliMemberId;
    }
    
    /**
     * 设置卖家主账户的ID     
     * @param Long $aliMemberId     
     * 参数示例：<pre>1006680305</pre>     
     * 此参数必填     */
    public function setAliMemberId( $aliMemberId) {
        $this->aliMemberId = $aliMemberId;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    				    			    			if (array_key_exists ( "name", $this->stdResult )) {
    				$this->name = $this->stdResult->{"name"};
    			}
    			    		    				    			    			if (array_key_exists ( "status", $this->stdResult )) {
    				$this->status = $this->stdResult->{"status"};
    			}
    			    		    				    			    			if (array_key_exists ( "type", $this->stdResult )) {
    				$this->type = $this->stdResult->{"type"};
    			}
    			    		    				    			    			if (array_key_exists ( "displayContent", $this->stdResult )) {
    				$this->displayContent = $this->stdResult->{"displayContent"};
    			}
    			    		    				    			    			if (array_key_exists ( "moduleContents", $this->stdResult )) {
    				$this->moduleContents = $this->stdResult->{"moduleContents"};
    			}
    			    		    				    			    			if (array_key_exists ( "aliMemberId", $this->stdResult )) {
    				$this->aliMemberId = $this->stdResult->{"aliMemberId"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['id'];
    			}
    		    	    			    		    			if (array_key_exists ( "name", $this->arrayResult )) {
    			$this->name = $arrayResult['name'];
    			}
    		    	    			    		    			if (array_key_exists ( "status", $this->arrayResult )) {
    			$this->status = $arrayResult['status'];
    			}
    		    	    			    		    			if (array_key_exists ( "type", $this->arrayResult )) {
    			$this->type = $arrayResult['type'];
    			}
    		    	    			    		    			if (array_key_exists ( "displayContent", $this->arrayResult )) {
    			$this->displayContent = $arrayResult['displayContent'];
    			}
    		    	    			    		    			if (array_key_exists ( "moduleContents", $this->arrayResult )) {
    			$this->moduleContents = $arrayResult['moduleContents'];
    			}
    		    	    			    		    			if (array_key_exists ( "aliMemberId", $this->arrayResult )) {
    			$this->aliMemberId = $arrayResult['aliMemberId'];
    			}
    		    	    		}
 
   
}
?>