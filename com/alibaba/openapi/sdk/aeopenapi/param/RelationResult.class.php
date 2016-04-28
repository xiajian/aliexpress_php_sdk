<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class RelationResult extends SDKDomain {

       	
    private $unreadCount;
    
        /**
    * @return 未读数
    */
        public function getUnreadCount() {
        return $this->unreadCount;
    }
    
    /**
     * 设置未读数     
     * @param Long $unreadCount     
     * 参数示例：<pre>2</pre>     
     * 此参数必填     */
    public function setUnreadCount( $unreadCount) {
        $this->unreadCount = $unreadCount;
    }
    
        	
    private $channelId;
    
        /**
    * @return 通道ID，即关系ID(订单留言为订单号，站内信为站内信的关系ID)
    */
        public function getChannelId() {
        return $this->channelId;
    }
    
    /**
     * 设置通道ID，即关系ID(订单留言为订单号，站内信为站内信的关系ID)     
     * @param String $channelId     
     * 参数示例：<pre>2234455</pre>     
     * 此参数必填     */
    public function setChannelId( $channelId) {
        $this->channelId = $channelId;
    }
    
        	
    private $lastMessageId;
    
        /**
    * @return 最后一条消息ID
    */
        public function getLastMessageId() {
        return $this->lastMessageId;
    }
    
    /**
     * 设置最后一条消息ID     
     * @param Long $lastMessageId     
     * 参数示例：<pre>2455566</pre>     
     * 此参数必填     */
    public function setLastMessageId( $lastMessageId) {
        $this->lastMessageId = $lastMessageId;
    }
    
        	
    private $readStat;
    
        /**
    * @return 未读状态(0未读1已读)
    */
        public function getReadStat() {
        return $this->readStat;
    }
    
    /**
     * 设置未读状态(0未读1已读)     
     * @param String $readStat     
     * 参数示例：<pre>0</pre>     
     * 此参数必填     */
    public function setReadStat( $readStat) {
        $this->readStat = $readStat;
    }
    
        	
    private $lastMessageContent;
    
        /**
    * @return 最后一条消息内容
    */
        public function getLastMessageContent() {
        return $this->lastMessageContent;
    }
    
    /**
     * 设置最后一条消息内容     
     * @param String $lastMessageContent     
     * 参数示例：<pre>hello</pre>     
     * 此参数必填     */
    public function setLastMessageContent( $lastMessageContent) {
        $this->lastMessageContent = $lastMessageContent;
    }
    
        	
    private $lastMessageIsOwn;
    
        /**
    * @return 最后一条消息是否自己这边发送(true是，false否)
    */
        public function getLastMessageIsOwn() {
        return $this->lastMessageIsOwn;
    }
    
    /**
     * 设置最后一条消息是否自己这边发送(true是，false否)     
     * @param Boolean $lastMessageIsOwn     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setLastMessageIsOwn( $lastMessageIsOwn) {
        $this->lastMessageIsOwn = $lastMessageIsOwn;
    }
    
        	
    private $childName;
    
        /**
    * @return 消息所属账号(主账号查询默认包含子账号的信息，如果属于子账号，这里有子账号的名字)
    */
        public function getChildName() {
        return $this->childName;
    }
    
    /**
     * 设置消息所属账号(主账号查询默认包含子账号的信息，如果属于子账号，这里有子账号的名字)     
     * @param String $childName     
     * 参数示例：<pre>jack.liu</pre>     
     * 此参数必填     */
    public function setChildName( $childName) {
        $this->childName = $childName;
    }
    
        	
    private $messageTime;
    
        /**
    * @return 最后一条消息时间
    */
        public function getMessageTime() {
        return $this->messageTime;
    }
    
    /**
     * 设置最后一条消息时间     
     * @param Long $messageTime     
     * 参数示例：<pre>33443344455</pre>     
     * 此参数必填     */
    public function setMessageTime( $messageTime) {
        $this->messageTime = $messageTime;
    }
    
        	
    private $childId;
    
        /**
    * @return 消息所属账号(主账号查询默认包含子账号的信息，如果属于子账号，这里有子账号的ID)
    */
        public function getChildId() {
        return $this->childId;
    }
    
    /**
     * 设置消息所属账号(主账号查询默认包含子账号的信息，如果属于子账号，这里有子账号的ID)     
     * @param Long $childId     
     * 参数示例：<pre>6645774</pre>     
     * 此参数必填     */
    public function setChildId( $childId) {
        $this->childId = $childId;
    }
    
        	
    private $otherName;
    
        /**
    * @return 与当前卖家或子账号建立关系的买家名字
    */
        public function getOtherName() {
        return $this->otherName;
    }
    
    /**
     * 设置与当前卖家或子账号建立关系的买家名字     
     * @param String $otherName     
     * 参数示例：<pre>jack.ma</pre>     
     * 此参数必填     */
    public function setOtherName( $otherName) {
        $this->otherName = $otherName;
    }
    
        	
    private $otherLoginId;
    
        /**
    * @return 与当前卖家或子账号建立关系的买家账号
    */
        public function getOtherLoginId() {
        return $this->otherLoginId;
    }
    
    /**
     * 设置与当前卖家或子账号建立关系的买家账号     
     * @param String $otherLoginId     
     * 参数示例：<pre>us3333</pre>     
     * 此参数必填     */
    public function setOtherLoginId( $otherLoginId) {
        $this->otherLoginId = $otherLoginId;
    }
    
        	
    private $dealStat;
    
        /**
    * @return 处理状态(0未处理,1已处理)
    */
        public function getDealStat() {
        return $this->dealStat;
    }
    
    /**
     * 设置处理状态(0未处理,1已处理)     
     * @param String $dealStat     
     * 参数示例：<pre>0</pre>     
     * 此参数必填     */
    public function setDealStat( $dealStat) {
        $this->dealStat = $dealStat;
    }
    
        	
    private $rank;
    
        /**
    * @return 标签值(0,1,2,3,4,5)依次表示为白，红，橙，绿，蓝，紫
    */
        public function getRank() {
        return $this->rank;
    }
    
    /**
     * 设置标签值(0,1,2,3,4,5)依次表示为白，红，橙，绿，蓝，紫     
     * @param String $rank     
     * 参数示例：<pre>0</pre>     
     * 此参数必填     */
    public function setRank( $rank) {
        $this->rank = $rank;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "unreadCount", $this->stdResult )) {
    				$this->unreadCount = $this->stdResult->{"unreadCount"};
    			}
    			    		    				    			    			if (array_key_exists ( "channelId", $this->stdResult )) {
    				$this->channelId = $this->stdResult->{"channelId"};
    			}
    			    		    				    			    			if (array_key_exists ( "lastMessageId", $this->stdResult )) {
    				$this->lastMessageId = $this->stdResult->{"lastMessageId"};
    			}
    			    		    				    			    			if (array_key_exists ( "readStat", $this->stdResult )) {
    				$this->readStat = $this->stdResult->{"readStat"};
    			}
    			    		    				    			    			if (array_key_exists ( "lastMessageContent", $this->stdResult )) {
    				$this->lastMessageContent = $this->stdResult->{"lastMessageContent"};
    			}
    			    		    				    			    			if (array_key_exists ( "lastMessageIsOwn", $this->stdResult )) {
    				$this->lastMessageIsOwn = $this->stdResult->{"lastMessageIsOwn"};
    			}
    			    		    				    			    			if (array_key_exists ( "childName", $this->stdResult )) {
    				$this->childName = $this->stdResult->{"childName"};
    			}
    			    		    				    			    			if (array_key_exists ( "messageTime", $this->stdResult )) {
    				$this->messageTime = $this->stdResult->{"messageTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "childId", $this->stdResult )) {
    				$this->childId = $this->stdResult->{"childId"};
    			}
    			    		    				    			    			if (array_key_exists ( "otherName", $this->stdResult )) {
    				$this->otherName = $this->stdResult->{"otherName"};
    			}
    			    		    				    			    			if (array_key_exists ( "otherLoginId", $this->stdResult )) {
    				$this->otherLoginId = $this->stdResult->{"otherLoginId"};
    			}
    			    		    				    			    			if (array_key_exists ( "dealStat", $this->stdResult )) {
    				$this->dealStat = $this->stdResult->{"dealStat"};
    			}
    			    		    				    			    			if (array_key_exists ( "rank", $this->stdResult )) {
    				$this->rank = $this->stdResult->{"rank"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "unreadCount", $this->arrayResult )) {
    			$this->unreadCount = $arrayResult['unreadCount'];
    			}
    		    	    			    		    			if (array_key_exists ( "channelId", $this->arrayResult )) {
    			$this->channelId = $arrayResult['channelId'];
    			}
    		    	    			    		    			if (array_key_exists ( "lastMessageId", $this->arrayResult )) {
    			$this->lastMessageId = $arrayResult['lastMessageId'];
    			}
    		    	    			    		    			if (array_key_exists ( "readStat", $this->arrayResult )) {
    			$this->readStat = $arrayResult['readStat'];
    			}
    		    	    			    		    			if (array_key_exists ( "lastMessageContent", $this->arrayResult )) {
    			$this->lastMessageContent = $arrayResult['lastMessageContent'];
    			}
    		    	    			    		    			if (array_key_exists ( "lastMessageIsOwn", $this->arrayResult )) {
    			$this->lastMessageIsOwn = $arrayResult['lastMessageIsOwn'];
    			}
    		    	    			    		    			if (array_key_exists ( "childName", $this->arrayResult )) {
    			$this->childName = $arrayResult['childName'];
    			}
    		    	    			    		    			if (array_key_exists ( "messageTime", $this->arrayResult )) {
    			$this->messageTime = $arrayResult['messageTime'];
    			}
    		    	    			    		    			if (array_key_exists ( "childId", $this->arrayResult )) {
    			$this->childId = $arrayResult['childId'];
    			}
    		    	    			    		    			if (array_key_exists ( "otherName", $this->arrayResult )) {
    			$this->otherName = $arrayResult['otherName'];
    			}
    		    	    			    		    			if (array_key_exists ( "otherLoginId", $this->arrayResult )) {
    			$this->otherLoginId = $arrayResult['otherLoginId'];
    			}
    		    	    			    		    			if (array_key_exists ( "dealStat", $this->arrayResult )) {
    			$this->dealStat = $arrayResult['dealStat'];
    			}
    		    	    			    		    			if (array_key_exists ( "rank", $this->arrayResult )) {
    			$this->rank = $arrayResult['rank'];
    			}
    		    	    		}
 
   
}
?>