<?php /* Smarty version Smarty-3.1.21, created on 2019-06-28 22:28:24
         compiled from "C:\Users\Demon\Downloads\OpenServer\OSPanel\domains\localhost\cscart\design\backend\templates\addons\product_variations\hooks\products\update_product_buttons.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20776476965d166a58efd489-73108425%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b44454443c021b6868ae460d92b86cf09341568' => 
    array (
      0 => 'C:\\Users\\Demon\\Downloads\\OpenServer\\OSPanel\\domains\\localhost\\cscart\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\update_product_buttons.post.tpl',
      1 => 1560234193,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20776476965d166a58efd489-73108425',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_form_readonly' => 0,
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d166a58f078e5_99773407',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d166a58f078e5_99773407')) {function content_5d166a58f078e5_99773407($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('save','save'));
?>
<?php if (!$_smarty_tpl->tpl_vars['is_form_readonly']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['product_data']->value['variation_group_id']) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"cm-tab-tools hidden",'but_id'=>"tools_variations_btn",'but_text'=>$_smarty_tpl->__("save"),'but_name'=>"dispatch[products.m_update]",'but_role'=>"submit-link",'but_target_form'=>"manage_variation_products_form"), 0);?>

    <?php } else { ?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_meta'=>"cm-tab-tools hidden",'but_id'=>"tools_variations_btn",'but_text'=>$_smarty_tpl->__("save"),'but_name'=>"dispatch[product_variations.add_product]",'but_role'=>"submit-link",'but_target_form'=>"manage_variation_products_form"), 0);?>

    <?php }?>
<?php }?>

<?php }} ?>
