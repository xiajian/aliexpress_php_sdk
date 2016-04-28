<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/openapi/sdk/aeopenapi/param/IssueAPIIssueDTO.class.php');

class IssueAPIDetailDTO extends SDKDomain {

       	
    private $snapshotUrl;
    
        /**
    * @return 交易快照
    */
        public function getSnapshotUrl() {
        return $this->snapshotUrl;
    }
    
    /**
     * 设置交易快照     
     * @param String $snapshotUrl     
     * 参数示例：<pre>http://www.aliexpress.com/snapshot/3005612434.html?orderId=30***********804</pre>     
     * 此参数必填     */
    public function setSnapshotUrl( $snapshotUrl) {
        $this->snapshotUrl = $snapshotUrl;
    }
    
        	
    private $issueAPIIssueDTO;
    
        /**
    * @return 纠纷详情
    */
        public function getIssueAPIIssueDTO() {
        return $this->issueAPIIssueDTO;
    }
    
    /**
     * 设置纠纷详情     
     * @param IssueAPIIssueDTO $issueAPIIssueDTO     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setIssueAPIIssueDTO(IssueAPIIssueDTO $issueAPIIssueDTO) {
        $this->issueAPIIssueDTO = $issueAPIIssueDTO;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "snapshotUrl", $this->stdResult )) {
    				$this->snapshotUrl = $this->stdResult->{"snapshotUrl"};
    			}
    			    		    				    			    			if (array_key_exists ( "issueAPIIssueDTO", $this->stdResult )) {
    				$issueAPIIssueDTOResult=$this->stdResult->{"issueAPIIssueDTO"};
    				$this->issueAPIIssueDTO = new IssueAPIIssueDTO();
    				$this->issueAPIIssueDTO->setStdResult ( $issueAPIIssueDTOResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "snapshotUrl", $this->arrayResult )) {
    			$this->snapshotUrl = $arrayResult['snapshotUrl'];
    			}
    		    	    			    		    		if (array_key_exists ( "issueAPIIssueDTO", $this->arrayResult )) {
    		$issueAPIIssueDTOResult=$arrayResult['issueAPIIssueDTO'];
    			    			$this->issueAPIIssueDTO = new IssueAPIIssueDTO();
    			    			$this->issueAPIIssueDTO->$this->setStdResult ( $issueAPIIssueDTOResult);
    		}
    		    	    		}
 
   
}
?>