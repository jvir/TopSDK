<?php
/**
 * TOP API: aliexpress.postproduct.redefining.postmultilanguageaeproduct request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class AliexpressPostproductRedefiningPostmultilanguageaeproductRequest
{
	/** 
	 * none
	 **/
	private $product;
	
	private $apiParas = array();
	
	public function setProduct($product)
	{
		$this->product = $product;
		$this->apiParas["product"] = $product;
	}

	public function getProduct()
	{
		return $this->product;
	}

	public function getApiMethodName()
	{
		return "aliexpress.postproduct.redefining.postmultilanguageaeproduct";
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
