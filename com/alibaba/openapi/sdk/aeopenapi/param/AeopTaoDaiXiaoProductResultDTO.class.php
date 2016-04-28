<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AeopTaoDaiXiaoProductResultDTO extends SDKDomain {

       	
    private $detailUrl;
    
        /**
    * @return 淘代销商品URL
    */
        public function getDetailUrl() {
        return $this->detailUrl;
    }
    
    /**
     * 设置淘代销商品URL     
     * @param String $detailUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDetailUrl( $detailUrl) {
        $this->detailUrl = $detailUrl;
    }
    
        	
    private $title;
    
        /**
    * @return 淘代销商品的标题
    */
        public function getTitle() {
        return $this->title;
    }
    
    /**
     * 设置淘代销商品的标题     
     * @param String $title     
     * 参数示例：<pre>beautiful clothes in 2015</pre>     
     * 此参数必填     */
    public function setTitle( $title) {
        $this->title = $title;
    }
    
        	
    private $tbNumIid;
    
        /**
    * @return 淘宝商品ID
    */
        public function getTbNumIid() {
        return $this->tbNumIid;
    }
    
    /**
     * 设置淘宝商品ID     
     * @param Long $tbNumIid     
     * 参数示例：<pre>1234</pre>     
     * 此参数必填     */
    public function setTbNumIid( $tbNumIid) {
        $this->tbNumIid = $tbNumIid;
    }
    
        	
    private $nick;
    
        /**
    * @return 淘宝卖家的昵称
    */
        public function getNick() {
        return $this->nick;
    }
    
    /**
     * 设置淘宝卖家的昵称     
     * @param String $nick     
     * 参数示例：<pre>hello</pre>     
     * 此参数必填     */
    public function setNick( $nick) {
        $this->nick = $nick;
    }
    
        	
    private $picUrl;
    
        /**
    * @return 产品主图的URL
    */
        public function getPicUrl() {
        return $this->picUrl;
    }
    
    /**
     * 设置产品主图的URL     
     * @param String $picUrl     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPicUrl( $picUrl) {
        $this->picUrl = $picUrl;
    }
    
        	
    private $shopTitle;
    
        /**
    * @return 淘宝店铺名称
    */
        public function getShopTitle() {
        return $this->shopTitle;
    }
    
    /**
     * 设置淘宝店铺名称     
     * @param String $shopTitle     
     * 参数示例：<pre>qi gege</pre>     
     * 此参数必填     */
    public function setShopTitle( $shopTitle) {
        $this->shopTitle = $shopTitle;
    }
    
        	
    private $userType;
    
        /**
    * @return 商品所属卖家用户类型，b：商城， c：淘宝集市
    */
        public function getUserType() {
        return $this->userType;
    }
    
    /**
     * 设置商品所属卖家用户类型，b：商城， c：淘宝集市     
     * @param String $userType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setUserType( $userType) {
        $this->userType = $userType;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "detailUrl", $this->stdResult )) {
    				$this->detailUrl = $this->stdResult->{"detailUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "title", $this->stdResult )) {
    				$this->title = $this->stdResult->{"title"};
    			}
    			    		    				    			    			if (array_key_exists ( "tbNumIid", $this->stdResult )) {
    				$this->tbNumIid = $this->stdResult->{"tbNumIid"};
    			}
    			    		    				    			    			if (array_key_exists ( "nick", $this->stdResult )) {
    				$this->nick = $this->stdResult->{"nick"};
    			}
    			    		    				    			    			if (array_key_exists ( "picUrl", $this->stdResult )) {
    				$this->picUrl = $this->stdResult->{"picUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "shopTitle", $this->stdResult )) {
    				$this->shopTitle = $this->stdResult->{"shopTitle"};
    			}
    			    		    				    			    			if (array_key_exists ( "userType", $this->stdResult )) {
    				$this->userType = $this->stdResult->{"userType"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "detailUrl", $this->arrayResult )) {
    			$this->detailUrl = $arrayResult['detailUrl'];
    			}
    		    	    			    		    			if (array_key_exists ( "title", $this->arrayResult )) {
    			$this->title = $arrayResult['title'];
    			}
    		    	    			    		    			if (array_key_exists ( "tbNumIid", $this->arrayResult )) {
    			$this->tbNumIid = $arrayResult['tbNumIid'];
    			}
    		    	    			    		    			if (array_key_exists ( "nick", $this->arrayResult )) {
    			$this->nick = $arrayResult['nick'];
    			}
    		    	    			    		    			if (array_key_exists ( "picUrl", $this->arrayResult )) {
    			$this->picUrl = $arrayResult['picUrl'];
    			}
    		    	    			    		    			if (array_key_exists ( "shopTitle", $this->arrayResult )) {
    			$this->shopTitle = $arrayResult['shopTitle'];
    			}
    		    	    			    		    			if (array_key_exists ( "userType", $this->arrayResult )) {
    			$this->userType = $arrayResult['userType'];
    			}
    		    	    		}
 
   
}
?>