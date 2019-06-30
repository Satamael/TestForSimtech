<?php /* Smarty version Smarty-3.1.21, created on 2019-06-30 19:16:23
         compiled from "C:\Users\Demon\Downloads\OpenServer\OSPanel\domains\localhost\cscart\design\backend\templates\addons\EANadd\hooks\products\detailed_content.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12367254905d188c3a4d5585-90088657%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0fe0fd343111cffff8a765f9c0d1e61551d05b5d' => 
    array (
      0 => 'C:\\Users\\Demon\\Downloads\\OpenServer\\OSPanel\\domains\\localhost\\cscart\\design\\backend\\templates\\addons\\EANadd\\hooks\\products\\detailed_content.pre.tpl',
      1 => 1561911375,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12367254905d188c3a4d5585-90088657',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d188c3a4f3804_77249317',
  'variables' => 
  array (
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d188c3a4f3804_77249317')) {function content_5d188c3a4f3804_77249317($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('EANcode','ttc_EANcode'));
?>
<div class="control-group">
     <label for="EANcode" class="control-label"><?php echo $_smarty_tpl->__("EANcode");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("ttc_EANcode")), 0);?>
</label>
    <div class="controls">
        <input class="input-large" form="form" type="text" name="product_data[EANcode]" id="EANcode" size="55" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_data']->value['EANcode'], ENT_QUOTES, 'UTF-8');?>
" />
    </div>
</div><?php }} ?>
