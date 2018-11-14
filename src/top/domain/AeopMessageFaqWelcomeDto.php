<?php

/**
 * 返回结果
 * @author auto create
 */
class AeopMessageFaqWelcomeDto
{
	
	/** 
	 * 正文内容
	 **/
	public $content;
	
	/** 
	 * 创建时间
	 **/
	public $gmt_create;
	
	/** 
	 * 更新时间
	 **/
	public $gmt_modified;
	
	/** 
	 * 语言：目前支持5种语言：en_US，es_ES，fr_FR，pt_BR，ru_RU
	 **/
	public $language;
	
	/** 
	 * 卖家主帐号loginId
	 **/
	public $seller_admin_login_id;	
}
?>