<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/PhtobankPaginationQuery.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/PhotobankImageRecord.class.php');

class ApiListImagePaginationResult {

        	
    private $query;
    
        /**
    * @return 当前参数组成的查询对象。
    */
        public function getQuery() {
        return $this->query;
    }
    
    /**
     * 设置当前参数组成的查询对象。     
     * @param PhtobankPaginationQuery $query     
          
     * 此参数必填     */
    public function setQuery(PhtobankPaginationQuery $query) {
        $this->query = $query;
    }
    
        	
    private $images;
    
        /**
    * @return 本次查询结果返回的图片列表。
    */
        public function getImages() {
        return $this->images;
    }
    
    /**
     * 设置本次查询结果返回的图片列表。     
     * @param array include @see PhotobankImageRecord[] $images     
          
     * 此参数必填     */
    public function setImages(PhotobankImageRecord $images) {
        $this->images = $images;
    }
    
        	
    private $total;
    
        /**
    * @return 当前分组下的图片总数。如果locationType取值为"allGroup", 则为这个用户的图片总数。
    */
        public function getTotal() {
        return $this->total;
    }
    
    /**
     * 设置当前分组下的图片总数。如果locationType取值为"allGroup", 则为这个用户的图片总数。     
     * @param Integer $total     
          
     * 此参数必填     */
    public function setTotal( $total) {
        $this->total = $total;
    }
    
        	
    private $totalPage;
    
        /**
    * @return 本次查询结果分页的页数。
    */
        public function getTotalPage() {
        return $this->totalPage;
    }
    
    /**
     * 设置本次查询结果分页的页数。     
     * @param Integer $totalPage     
          
     * 此参数必填     */
    public function setTotalPage( $totalPage) {
        $this->totalPage = $totalPage;
    }
    
        	
    private $success;
    
        /**
    * @return 本次调用是否成功。
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置本次调用是否成功。     
     * @param Boolean $success     
          
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "query", $this->stdResult )) {
    				$queryResult=$this->stdResult->{"query"};
    				$this->query = new PhtobankPaginationQuery();
    				$this->query->setStdResult ( $queryResult);
    			}
    			    		    				    			    			if (array_key_exists ( "images", $this->stdResult )) {
    			$imagesResult=$this->stdResult->{"images"};
    				$object = json_decode ( json_encode ( $imagesResult ), true );
					$this->images = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$PhotobankImageRecordResult=new PhotobankImageRecord();
						$PhotobankImageRecordResult->setArrayResult($arrayobject );
						$this->images [$i] = $PhotobankImageRecordResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "total", $this->stdResult )) {
    				$this->total = $this->stdResult->{"total"};
    			}
    			    		    				    			    			if (array_key_exists ( "totalPage", $this->stdResult )) {
    				$this->totalPage = $this->stdResult->{"totalPage"};
    			}
    			    		    				    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "query", $this->arrayResult )) {
    		$queryResult=$arrayResult['query'];
    			    			$this->query = new PhtobankPaginationQuery();
    			    			$this->query->$this->setStdResult ( $queryResult);
    		}
    		    	    			    		    		if (array_key_exists ( "images", $this->arrayResult )) {
    		$imagesResult=$arrayResult['images'];
    			$this->images = PhotobankImageRecord();
    			$this->images->$this->setStdResult ( $imagesResult);
    		}
    		    	    			    		    			if (array_key_exists ( "total", $this->arrayResult )) {
    			$this->total = $arrayResult['total'];
    			}
    		    	    			    		    			if (array_key_exists ( "totalPage", $this->arrayResult )) {
    			$this->totalPage = $arrayResult['totalPage'];
    			}
    		    	    			    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['success'];
    			}
    		    	    		}

}
?>