<?php

/**
 * list of supported sku attributes
 * @author auto create
 */
class SupportedSkuAttributeDto
{
	
	/** 
	 * aliexpress sku name, the same field when indicating the sku_name for posting product
	 **/
	public $aliexpress_sku_name;
	
	/** 
	 * Indicates whether the field sku_image_url must be filled in or not when posting a product.
	 **/
	public $need_customized_picture;
	
	/** 
	 * size limit of the specific sku values
	 **/
	public $size_limit;
	
	/** 
	 * Indicates whether the field sku_image_url could be filled in or not when posting a product.
	 **/
	public $support_customized_picture;	
}
?>