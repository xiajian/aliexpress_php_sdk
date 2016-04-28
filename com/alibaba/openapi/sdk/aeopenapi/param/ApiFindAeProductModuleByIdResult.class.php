<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ApiFindAeProductModuleByIdResult {

        	
    private $id;
    
        /**
    * @return 模块的id
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置模块的id     
     * @param Long $id     
          
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
        	
    private $gmtCreate;
    
        /**
    * @return 模块的创建时间
    */
        public function getGmtCreate() {
        return $this->gmtCreate;
    }
    
    /**
     * 设置模块的创建时间     
     * @param Date $gmtCreate     
          
     * 此参数必填     */
    public function setGmtCreate( $gmtCreate) {
        $this->gmtCreate = $gmtCreate;
    }
    
        	
    private $gmtModified;
    
        /**
    * @return 模块的最近一次修改时间
    */
        public function getGmtModified() {
        return $this->gmtModified;
    }
    
    /**
     * 设置模块的最近一次修改时间     
     * @param Date $gmtModified     
          
     * 此参数必填     */
    public function setGmtModified( $gmtModified) {
        $this->gmtModified = $gmtModified;
    }
    
        	
    private $name;
    
        /**
    * @return 模块的名称
    */
        public function getName() {
        return $this->name;
    }
    
    /**
     * 设置模块的名称     
     * @param String $name     
          
     * 此参数必填     */
    public function setName( $name) {
        $this->name = $name;
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
          
     * 此参数必填     */
    public function setType( $type) {
        $this->type = $type;
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
          
     * 此参数必填     */
    public function setStatus( $status) {
        $this->status = $status;
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
          
     * 此参数必填     */
    public function setModuleContents( $moduleContents) {
        $this->moduleContents = $moduleContents;
    }
    
        	
    private $aliMemberId;
    
        /**
    * @return 这个模块所有者的主账户ID
    */
        public function getAliMemberId() {
        return $this->aliMemberId;
    }
    
    /**
     * 设置这个模块所有者的主账户ID     
     * @param Long $aliMemberId     
          
     * 此参数必填     */
    public function setAliMemberId( $aliMemberId) {
        $this->aliMemberId = $aliMemberId;
    }
    
        	
    private $displayContent;
    
        /**
    * @return 
    */
        public function getDisplayContent() {
        return $this->displayContent;
    }
    
    /**
     * 设置     
     * @param String $displayContent     
          
     * 此参数必填     */
    public function setDisplayContent( $displayContent) {
        $this->displayContent = $displayContent;
    }
    
        	
    private $success;
    
        /**
    * @return 接口的调用结果。true/false分别表示成功和失败。
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置接口的调用结果。true/false分别表示成功和失败。     
     * @param Boolean $success     
          
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtCreate", $this->stdResult )) {
    				$this->gmtCreate = $this->stdResult->{"gmtCreate"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtModified", $this->stdResult )) {
    				$this->gmtModified = $this->stdResult->{"gmtModified"};
    			}
    			    		    				    			    			if (array_key_exists ( "name", $this->stdResult )) {
    				$this->name = $this->stdResult->{"name"};
    			}
    			    		    				    			    			if (array_key_exists ( "type", $this->stdResult )) {
    				$this->type = $this->stdResult->{"type"};
    			}
    			    		    				    			    			if (array_key_exists ( "status", $this->stdResult )) {
    				$this->status = $this->stdResult->{"status"};
    			}
    			    		    				    			    			if (array_key_exists ( "moduleContents", $this->stdResult )) {
    				$this->moduleContents = $this->stdResult->{"moduleContents"};
    			}
    			    		    				    			    			if (array_key_exists ( "aliMemberId", $this->stdResult )) {
    				$this->aliMemberId = $this->stdResult->{"aliMemberId"};
    			}
    			    		    				    			    			if (array_key_exists ( "displayContent", $this->stdResult )) {
    				$this->displayContent = $this->stdResult->{"displayContent"};
    			}
    			    		    				    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['id'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtCreate", $this->arrayResult )) {
    			$this->gmtCreate = $arrayResult['gmtCreate'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtModified", $this->arrayResult )) {
    			$this->gmtModified = $arrayResult['gmtModified'];
    			}
    		    	    			    		    			if (array_key_exists ( "name", $this->arrayResult )) {
    			$this->name = $arrayResult['name'];
    			}
    		    	    			    		    			if (array_key_exists ( "type", $this->arrayResult )) {
    			$this->type = $arrayResult['type'];
    			}
    		    	    			    		    			if (array_key_exists ( "status", $this->arrayResult )) {
    			$this->status = $arrayResult['status'];
    			}
    		    	    			    		    			if (array_key_exists ( "moduleContents", $this->arrayResult )) {
    			$this->moduleContents = $arrayResult['moduleContents'];
    			}
    		    	    			    		    			if (array_key_exists ( "aliMemberId", $this->arrayResult )) {
    			$this->aliMemberId = $arrayResult['aliMemberId'];
    			}
    		    	    			    		    			if (array_key_exists ( "displayContent", $this->arrayResult )) {
    			$this->displayContent = $arrayResult['displayContent'];
    			}
    		    	    			    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['success'];
    			}
    		    	    		}

}
?>