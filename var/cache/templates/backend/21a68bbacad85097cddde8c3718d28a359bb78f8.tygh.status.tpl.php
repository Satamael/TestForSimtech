<?php /* Smarty version Smarty-3.1.21, created on 2019-06-28 22:10:28
         compiled from "C:\Users\Demon\Downloads\OpenServer\OSPanel\domains\localhost\cscart\design\backend\templates\views\products\components\bulk_edit\status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4836610385d166624eee8b9-32564119%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21a68bbacad85097cddde8c3718d28a359bb78f8' => 
    array (
      0 => 'C:\\Users\\Demon\\Downloads\\OpenServer\\OSPanel\\domains\\localhost\\cscart\\design\\backend\\templates\\views\\products\\components\\bulk_edit\\status.tpl',
      1 => 1560234193,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4836610385d166624eee8b9-32564119',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d166624ef8198_24393221',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d166624ef8198_24393221')) {function content_5d166624ef8198_24393221($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('bulk_edit.make_active','bulk_edit.make_disabled','bulk_edit.make_hidden'));
?>
<li>
    <?php ob_start();
echo $_smarty_tpl->__("bulk_edit.make_active");
$_tmp2=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_tmp2,'dispatch'=>"dispatch[products.m_activate]",'form'=>"manage_products_form"));?>

</li>

<li>
    <?php ob_start();
echo $_smarty_tpl->__("bulk_edit.make_disabled");
$_tmp3=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_tmp3,'dispatch'=>"dispatch[products.m_disable]",'form'=>"manage_products_form"));?>

</li>

<li>
    <?php ob_start();
echo $_smarty_tpl->__("bulk_edit.make_hidden");
$_tmp4=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_tmp4,'dispatch'=>"dispatch[products.m_hide]",'form'=>"manage_products_form"));?>

</li>
<?php }} ?>
