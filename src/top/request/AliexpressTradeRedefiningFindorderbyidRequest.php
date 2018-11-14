<?php
/**
 * TOP API: aliexpress.trade.redefining.findorderbyid request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class AliexpressTradeRedefiningFindorderbyidRequest
{
	/** 
	 * 12345
	 **/
	private $param1;
	
	private $apiParas = array();
	
	public function setParam1($param1)
	{
		$this->param1 = $param1;
		$this->apiParas["param1"] = $param1;
	}

	public function getParam1()
	{
		return $this->param1;
	}

	public function getApiMethodName()
	{
		return "aliexpress.trade.redefining.findorderbyid";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
