<?php
if (!defined('BOOTSTRAP')) { die('Access denied'); }

function fn_EANadd_detailed_content()
{
	 $arow = db_query("UPDATE ?:products SET ?u WHERE product_id = ?i", $_data, $product_id);
}