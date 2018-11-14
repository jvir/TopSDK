<?php

/**
 * 总金额
 * @author auto create
 */
class Money
{
	
	/** 
	 * 金额
	 **/
	public $amount;
	
	/** 
	 * 分
	 **/
	public $cent;
	
	/** 
	 * 到最小货币单元的乘积因子
	 **/
	public $cent_factor;
	
	/** 
	 * 货币描述
	 **/
	public $currency;
	
	/** 
	 * 币种USD/RUB
	 **/
	public $currency_code;	
}
?>