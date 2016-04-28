<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/DetailResult.class.php');

class ApiQueryMsgDetailListByBuyerIdResult {

        	
    private $result;
    
        /**
    * @return 站内信详情结果集
    */
        public function getResult() {
        return $this->result;
    }
    
    /**
     * 设置站内信详情结果集     
     * @param array include @see DetailResult[] $result     
          
     * 此参数必填     */
    public function setResult(DetailResult $result) {
        $this->result = $result;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "result", $this->stdResult )) {
    			$resultResult=$this->stdResult->{"result"};
    				$object = json_decode ( json_encode ( $resultResult ), true );
					$this->result = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$DetailResultResult=new DetailResult();
						$DetailResultResult->setArrayResult($arrayobject );
						$this->result [$i] = $DetailResultResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "result", $this->arrayResult )) {
    		$resultResult=$arrayResult['result'];
    			$this->result = DetailResult();
    			$this->result->$this->setStdResult ( $resultResult);
    		}
    		    	    		}

}
?>