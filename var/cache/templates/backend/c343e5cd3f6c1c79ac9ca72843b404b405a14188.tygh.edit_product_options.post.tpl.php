<?php /* Smarty version Smarty-3.1.21, created on 2019-06-28 22:28:27
         compiled from "C:\Users\Demon\Downloads\OpenServer\OSPanel\domains\localhost\cscart\design\backend\templates\addons\yml_export\hooks\product_options\edit_product_options.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6062016735d166a5bbd0e99-02846858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c343e5cd3f6c1c79ac9ca72843b404b405a14188' => 
    array (
      0 => 'C:\\Users\\Demon\\Downloads\\OpenServer\\OSPanel\\domains\\localhost\\cscart\\design\\backend\\templates\\addons\\yml_export\\hooks\\product_options\\edit_product_options.post.tpl',
      1 => 1560234193,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6062016735d166a5bbd0e99-02846858',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'num' => 0,
    'vr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d166a5bbe9340_05232195',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d166a5bbe9340_05232195')) {function content_5d166a5bbe9340_05232195($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('yml_export.yml2_option_variant'));
?>
<div class="control-group cm-non-cb">
    <label class="control-label"><?php echo $_smarty_tpl->__("yml_export.yml2_option_variant");?>
</label>
    <div class="controls">
        <input type="text" name="option_data[variants][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][yml2_variant]" value="<?php if (!empty($_smarty_tpl->tpl_vars['vr']->value['yml2_variant'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['vr']->value['yml2_variant'], ENT_QUOTES, 'UTF-8');
}?>" class="input-medium" />
    </div>
</div>
<?php }} ?>
