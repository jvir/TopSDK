<?php

/**
 * 活动商品对象列表
 * @author auto create
 */
class AeopStorePromProduct
{
	
	/** 
	 * 每人限购数量(每人最多购买数量)
	 **/
	public $buy_max_num;
	
	/** 
	 * 活动商品优惠信息
	 **/
	public $product_discount_list;
	
	/** 
	 * 商品id
	 **/
	public $product_id;
	
	/** 
	 * 商品sku信息
	 **/
	public $sku_inventory_list;
	
	/** 
	 * 是否使用共享库存
	 **/
	public $used_warehouse;	
}
?>