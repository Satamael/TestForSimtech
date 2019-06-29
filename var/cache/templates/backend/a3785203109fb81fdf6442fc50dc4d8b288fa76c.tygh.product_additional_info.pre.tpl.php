<?php /* Smarty version Smarty-3.1.21, created on 2019-06-28 22:10:30
         compiled from "C:\Users\Demon\Downloads\OpenServer\OSPanel\domains\localhost\cscart\design\backend\templates\addons\product_variations\hooks\products\product_additional_info.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18761425575d166626a89180-54999817%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3785203109fb81fdf6442fc50dc4d8b288fa76c' => 
    array (
      0 => 'C:\\Users\\Demon\\Downloads\\OpenServer\\OSPanel\\domains\\localhost\\cscart\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\product_additional_info.pre.tpl',
      1 => 1560234193,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '18761425575d166626a89180-54999817',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d166626a8c790_02249860',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d166626a8c790_02249860')) {function content_5d166626a8c790_02249860($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['product']->value['variation_features']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/product_variations/views/product_variations/components/variation_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('variation_features'=>$_smarty_tpl->tpl_vars['product']->value['variation_features'],'features_split'=>true,'features_inline'=>true,'features_mini'=>true), 0);?>

<?php }?>
<?php }} ?>
