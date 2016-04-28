<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/AeProhibitedWord.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/AeProhibitedWord.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/AeProhibitedWord.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/AeProhibitedWord.class.php');

class ApiFindAeProductProhibitedWordsResult {

        	
    private $titleProhibitedWords;
    
        /**
    * @return 标题中的违禁词列表, 如果标题字中没有违禁词, 则返回一个"'[]"。否则将以示例值中的格式返回。其中每个违禁词都包含了2个属性: primaryWord和types。其中primaryWord表示违禁词，types表示违禁词的类型，总共有四种类型: FORBIDEN_TYPE(禁用), RESTRICT_TYPE(限定), BRAND_TYPE(品牌), TORT_TYPE(侵权)。
    */
        public function getTitleProhibitedWords() {
        return $this->titleProhibitedWords;
    }
    
    /**
     * 设置标题中的违禁词列表, 如果标题字中没有违禁词, 则返回一个"'[]"。否则将以示例值中的格式返回。其中每个违禁词都包含了2个属性: primaryWord和types。其中primaryWord表示违禁词，types表示违禁词的类型，总共有四种类型: FORBIDEN_TYPE(禁用), RESTRICT_TYPE(限定), BRAND_TYPE(品牌), TORT_TYPE(侵权)。     
     * @param array include @see AeProhibitedWord[] $titleProhibitedWords     
          
     * 此参数必填     */
    public function setTitleProhibitedWords(AeProhibitedWord $titleProhibitedWords) {
        $this->titleProhibitedWords = $titleProhibitedWords;
    }
    
        	
    private $keywordsProhibitedWords;
    
        /**
    * @return 关键字的违禁词列表, 如果关键字中没有违禁词, 则返回一个"'[]"。否则将以示例值中的格式返回。其中每个违禁词都包含了2个属性: primaryWord和types。其中primaryWord表示违禁词，types表示违禁词的类型，总共有四种类型: FORBIDEN_TYPE(禁用), RESTRICT_TYPE(限定), BRAND_TYPE(品牌), TORT_TYPE(侵权)。
    */
        public function getKeywordsProhibitedWords() {
        return $this->keywordsProhibitedWords;
    }
    
    /**
     * 设置关键字的违禁词列表, 如果关键字中没有违禁词, 则返回一个"'[]"。否则将以示例值中的格式返回。其中每个违禁词都包含了2个属性: primaryWord和types。其中primaryWord表示违禁词，types表示违禁词的类型，总共有四种类型: FORBIDEN_TYPE(禁用), RESTRICT_TYPE(限定), BRAND_TYPE(品牌), TORT_TYPE(侵权)。     
     * @param array include @see AeProhibitedWord[] $keywordsProhibitedWords     
          
     * 此参数必填     */
    public function setKeywordsProhibitedWords(AeProhibitedWord $keywordsProhibitedWords) {
        $this->keywordsProhibitedWords = $keywordsProhibitedWords;
    }
    
        	
    private $productPropertiesProhibitedWords;
    
        /**
    * @return 类目属性的违禁词列表, 如果类目属性中没有违禁词, 则返回一个"'[]"。否则将以示例值中的格式返回。其中每个违禁词都包含了2个属性: primaryWord和types。其中primaryWord表示违禁词，types表示违禁词的类型，总共有四种类型: FORBIDEN_TYPE(禁用), RESTRICT_TYPE(限定), BRAND_TYPE(品牌), TORT_TYPE(侵权)。
    */
        public function getProductPropertiesProhibitedWords() {
        return $this->productPropertiesProhibitedWords;
    }
    
    /**
     * 设置类目属性的违禁词列表, 如果类目属性中没有违禁词, 则返回一个"'[]"。否则将以示例值中的格式返回。其中每个违禁词都包含了2个属性: primaryWord和types。其中primaryWord表示违禁词，types表示违禁词的类型，总共有四种类型: FORBIDEN_TYPE(禁用), RESTRICT_TYPE(限定), BRAND_TYPE(品牌), TORT_TYPE(侵权)。     
     * @param array include @see AeProhibitedWord[] $productPropertiesProhibitedWords     
          
     * 此参数必填     */
    public function setProductPropertiesProhibitedWords(AeProhibitedWord $productPropertiesProhibitedWords) {
        $this->productPropertiesProhibitedWords = $productPropertiesProhibitedWords;
    }
    
        	
    private $detailProhibitedWords;
    
        /**
    * @return 商品详描中的违禁词列表, 如果商品详描中没有违禁词, 则返回一个"'[]"。否则将以示例值中的格式返回。其中每个违禁词都包含了2个属性: primaryWord和types。其中primaryWord表示违禁词，types表示违禁词的类型，总共有四种类型: FORBIDEN_TYPE(禁用), RESTRICT_TYPE(限定), BRAND_TYPE(品牌), TORT_TYPE(侵权)。
    */
        public function getDetailProhibitedWords() {
        return $this->detailProhibitedWords;
    }
    
    /**
     * 设置商品详描中的违禁词列表, 如果商品详描中没有违禁词, 则返回一个"'[]"。否则将以示例值中的格式返回。其中每个违禁词都包含了2个属性: primaryWord和types。其中primaryWord表示违禁词，types表示违禁词的类型，总共有四种类型: FORBIDEN_TYPE(禁用), RESTRICT_TYPE(限定), BRAND_TYPE(品牌), TORT_TYPE(侵权)。     
     * @param array include @see AeProhibitedWord[] $detailProhibitedWords     
          
     * 此参数必填     */
    public function setDetailProhibitedWords(AeProhibitedWord $detailProhibitedWords) {
        $this->detailProhibitedWords = $detailProhibitedWords;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "titleProhibitedWords", $this->stdResult )) {
    			$titleProhibitedWordsResult=$this->stdResult->{"titleProhibitedWords"};
    				$object = json_decode ( json_encode ( $titleProhibitedWordsResult ), true );
					$this->titleProhibitedWords = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AeProhibitedWordResult=new AeProhibitedWord();
						$AeProhibitedWordResult->setArrayResult($arrayobject );
						$this->titleProhibitedWords [$i] = $AeProhibitedWordResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "keywordsProhibitedWords", $this->stdResult )) {
    			$keywordsProhibitedWordsResult=$this->stdResult->{"keywordsProhibitedWords"};
    				$object = json_decode ( json_encode ( $keywordsProhibitedWordsResult ), true );
					$this->keywordsProhibitedWords = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AeProhibitedWordResult=new AeProhibitedWord();
						$AeProhibitedWordResult->setArrayResult($arrayobject );
						$this->keywordsProhibitedWords [$i] = $AeProhibitedWordResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "productPropertiesProhibitedWords", $this->stdResult )) {
    			$productPropertiesProhibitedWordsResult=$this->stdResult->{"productPropertiesProhibitedWords"};
    				$object = json_decode ( json_encode ( $productPropertiesProhibitedWordsResult ), true );
					$this->productPropertiesProhibitedWords = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AeProhibitedWordResult=new AeProhibitedWord();
						$AeProhibitedWordResult->setArrayResult($arrayobject );
						$this->productPropertiesProhibitedWords [$i] = $AeProhibitedWordResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "detailProhibitedWords", $this->stdResult )) {
    			$detailProhibitedWordsResult=$this->stdResult->{"detailProhibitedWords"};
    				$object = json_decode ( json_encode ( $detailProhibitedWordsResult ), true );
					$this->detailProhibitedWords = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AeProhibitedWordResult=new AeProhibitedWord();
						$AeProhibitedWordResult->setArrayResult($arrayobject );
						$this->detailProhibitedWords [$i] = $AeProhibitedWordResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "titleProhibitedWords", $this->arrayResult )) {
    		$titleProhibitedWordsResult=$arrayResult['titleProhibitedWords'];
    			$this->titleProhibitedWords = AeProhibitedWord();
    			$this->titleProhibitedWords->$this->setStdResult ( $titleProhibitedWordsResult);
    		}
    		    	    			    		    		if (array_key_exists ( "keywordsProhibitedWords", $this->arrayResult )) {
    		$keywordsProhibitedWordsResult=$arrayResult['keywordsProhibitedWords'];
    			$this->keywordsProhibitedWords = AeProhibitedWord();
    			$this->keywordsProhibitedWords->$this->setStdResult ( $keywordsProhibitedWordsResult);
    		}
    		    	    			    		    		if (array_key_exists ( "productPropertiesProhibitedWords", $this->arrayResult )) {
    		$productPropertiesProhibitedWordsResult=$arrayResult['productPropertiesProhibitedWords'];
    			$this->productPropertiesProhibitedWords = AeProhibitedWord();
    			$this->productPropertiesProhibitedWords->$this->setStdResult ( $productPropertiesProhibitedWordsResult);
    		}
    		    	    			    		    		if (array_key_exists ( "detailProhibitedWords", $this->arrayResult )) {
    		$detailProhibitedWordsResult=$arrayResult['detailProhibitedWords'];
    			$this->detailProhibitedWords = AeProhibitedWord();
    			$this->detailProhibitedWords->$this->setStdResult ( $detailProhibitedWordsResult);
    		}
    		    	    		}

}
?>