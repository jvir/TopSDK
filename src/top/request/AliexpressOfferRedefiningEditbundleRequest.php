<?php
/**
 * TOP API: aliexpress.offer.redefining.editbundle request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class AliexpressOfferRedefiningEditbundleRequest
{
	/** 
	 * 商品搭配
	 **/
	private $aeopOfferBundle;
	
	private $apiParas = array();
	
	public function setAeopOfferBundle($aeopOfferBundle)
	{
		$this->aeopOfferBundle = $aeopOfferBundle;
		$this->apiParas["aeop_offer_bundle"] = $aeopOfferBundle;
	}

	public function getAeopOfferBundle()
	{
		return $this->aeopOfferBundle;
	}

	public function getApiMethodName()
	{
		return "aliexpress.offer.redefining.editbundle";
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
