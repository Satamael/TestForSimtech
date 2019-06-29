<?php /* Smarty version Smarty-3.1.21, created on 2019-06-28 22:28:22
         compiled from "C:\Users\Demon\Downloads\OpenServer\OSPanel\domains\localhost\cscart\design\backend\templates\addons\product_variations\hooks\products\update_product_feature.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7686453205d166a5616feb7-93884045%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0fc298b64cf5d72529cef170512ded2fe5bd1ca1' => 
    array (
      0 => 'C:\\Users\\Demon\\Downloads\\OpenServer\\OSPanel\\domains\\localhost\\cscart\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\update_product_feature.override.tpl',
      1 => 1560234193,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7686453205d166a5616feb7-93884045',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'feature' => 0,
    'feature_id' => 0,
    'variant' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d166a56179675_07155444',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d166a56179675_07155444')) {function content_5d166a56179675_07155444($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('product_variations.feature_used_by_variation_group.tooltip'));
?>
<?php if ($_smarty_tpl->tpl_vars['feature']->value['product_variation_group']) {?>
    <div class="control-group">
        <label class="control-label" for="feature_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['description'], ENT_QUOTES, 'UTF-8');?>
</label>
        <div class="controls">
            <?php  $_smarty_tpl->tpl_vars['variant'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['variant']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feature']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->key => $_smarty_tpl->tpl_vars['variant']->value) {
$_smarty_tpl->tpl_vars['variant']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['variant']->value['selected']) {?>
                    <span class="shift-input"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['variant'], ENT_QUOTES, 'UTF-8');?>
</span>
                <?php }?>
            <?php } ?>
            <?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("product_variations.feature_used_by_variation_group.tooltip",array("[code]"=>$_smarty_tpl->tpl_vars['feature']->value['product_variation_group']['code']))), 0);?>

        </div>
    </div>
<?php }?><?php }} ?>
