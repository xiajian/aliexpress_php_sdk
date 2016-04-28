<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/FilePath.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/Summary.class.php');

class DetailResult extends SDKDomain {

       	
    private $id;
    
        /**
    * @return 消息ID
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置消息ID     
     * @param Long $id     
     * 参数示例：<pre>11333443434</pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
        	
    private $gmtCreate;
    
        /**
    * @return 创建时间
    */
        public function getGmtCreate() {
        return $this->gmtCreate;
    }
    
    /**
     * 设置创建时间     
     * @param Long $gmtCreate     
     * 参数示例：<pre>11333443434</pre>     
     * 此参数必填     */
    public function setGmtCreate( $gmtCreate) {
        $this->gmtCreate = $gmtCreate;
    }
    
        	
    private $senderName;
    
        /**
    * @return 发送者名字
    */
        public function getSenderName() {
        return $this->senderName;
    }
    
    /**
     * 设置发送者名字     
     * @param String $senderName     
     * 参数示例：<pre>jack.li</pre>     
     * 此参数必填     */
    public function setSenderName( $senderName) {
        $this->senderName = $senderName;
    }
    
        	
    private $messageType;
    
        /**
    * @return 消息类别(product/order/member/store)不同的消息类别，typeId为相应的值，如messageType为product,typeId为productId,对应summary中有相应的附属性信，如果为product,则有产品相关的信息
    */
        public function getMessageType() {
        return $this->messageType;
    }
    
    /**
     * 设置消息类别(product/order/member/store)不同的消息类别，typeId为相应的值，如messageType为product,typeId为productId,对应summary中有相应的附属性信，如果为product,则有产品相关的信息     
     * @param String $messageType     
     * 参数示例：<pre>product</pre>     
     * 此参数必填     */
    public function setMessageType( $messageType) {
        $this->messageType = $messageType;
    }
    
        	
    private $content;
    
        /**
    * @return 消息详情
    */
        public function getContent() {
        return $this->content;
    }
    
    /**
     * 设置消息详情     
     * @param String $content     
     * 参数示例：<pre>hello</pre>     
     * 此参数必填     */
    public function setContent( $content) {
        $this->content = $content;
    }
    
        	
    private $typeId;
    
        /**
    * @return 相关类型ID
    */
        public function getTypeId() {
        return $this->typeId;
    }
    
    /**
     * 设置相关类型ID     
     * @param Long $typeId     
     * 参数示例：<pre>345555</pre>     
     * 此参数必填     */
    public function setTypeId( $typeId) {
        $this->typeId = $typeId;
    }
    
        	
    private $filePath;
    
        /**
    * @return 图片地址
    */
        public function getFilePath() {
        return $this->filePath;
    }
    
    /**
     * 设置图片地址     
     * @param array include @see FilePath[] $filePath     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setFilePath(FilePath $filePath) {
        $this->filePath = $filePath;
    }
    
        	
    private $summary;
    
        /**
    * @return 附属信息
    */
        public function getSummary() {
        return $this->summary;
    }
    
    /**
     * 设置附属信息     
     * @param Summary $summary     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSummary(Summary $summary) {
        $this->summary = $summary;
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
    			    		    				    			    			if (array_key_exists ( "senderName", $this->stdResult )) {
    				$this->senderName = $this->stdResult->{"senderName"};
    			}
    			    		    				    			    			if (array_key_exists ( "messageType", $this->stdResult )) {
    				$this->messageType = $this->stdResult->{"messageType"};
    			}
    			    		    				    			    			if (array_key_exists ( "content", $this->stdResult )) {
    				$this->content = $this->stdResult->{"content"};
    			}
    			    		    				    			    			if (array_key_exists ( "typeId", $this->stdResult )) {
    				$this->typeId = $this->stdResult->{"typeId"};
    			}
    			    		    				    			    			if (array_key_exists ( "filePath", $this->stdResult )) {
    			$filePathResult=$this->stdResult->{"filePath"};
    				$object = json_decode ( json_encode ( $filePathResult ), true );
					$this->filePath = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$FilePathResult=new FilePath();
						$FilePathResult->setArrayResult($arrayobject );
						$this->filePath [$i] = $FilePathResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "summary", $this->stdResult )) {
    				$summaryResult=$this->stdResult->{"summary"};
    				$this->summary = new Summary();
    				$this->summary->setStdResult ( $summaryResult);
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
    		    	    			    		    			if (array_key_exists ( "senderName", $this->arrayResult )) {
    			$this->senderName = $arrayResult['senderName'];
    			}
    		    	    			    		    			if (array_key_exists ( "messageType", $this->arrayResult )) {
    			$this->messageType = $arrayResult['messageType'];
    			}
    		    	    			    		    			if (array_key_exists ( "content", $this->arrayResult )) {
    			$this->content = $arrayResult['content'];
    			}
    		    	    			    		    			if (array_key_exists ( "typeId", $this->arrayResult )) {
    			$this->typeId = $arrayResult['typeId'];
    			}
    		    	    			    		    		if (array_key_exists ( "filePath", $this->arrayResult )) {
    		$filePathResult=$arrayResult['filePath'];
    			$this->filePath = FilePath();
    			$this->filePath->$this->setStdResult ( $filePathResult);
    		}
    		    	    			    		    		if (array_key_exists ( "summary", $this->arrayResult )) {
    		$summaryResult=$arrayResult['summary'];
    			    			$this->summary = new Summary();
    			    			$this->summary->$this->setStdResult ( $summaryResult);
    		}
    		    	    		}
 
   
}
?>