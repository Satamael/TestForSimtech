<?php /* Smarty version Smarty-3.1.21, created on 2019-06-28 22:28:21
         compiled from "C:\Users\Demon\Downloads\OpenServer\OSPanel\domains\localhost\cscart\design\backend\templates\buttons\remove_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21126065115d166a559f9054-34577168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '762e873e3cf1cadccd6586b35ef8d9c4b9085ed7' => 
    array (
      0 => 'C:\\Users\\Demon\\Downloads\\OpenServer\\OSPanel\\domains\\localhost\\cscart\\design\\backend\\templates\\buttons\\remove_item.tpl',
      1 => 1560234193,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '21126065115d166a559f9054-34577168',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'simple' => 0,
    'only_delete' => 0,
    'item_id' => 0,
    'but_class' => 0,
    'but_onclick' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d166a55a479b2_52617738',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d166a55a479b2_52617738')) {function content_5d166a55a479b2_52617738($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('remove','remove'));
?>
<?php if (!$_smarty_tpl->tpl_vars['simple']->value) {?>
    <button type="button"
            class="btn-link btn-link--contents cm-opacity cm-tooltip <?php if ($_smarty_tpl->tpl_vars['only_delete']->value=="Y") {?> hidden<?php }?>"
            name="remove"
            id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            title="<?php echo $_smarty_tpl->__("remove");?>
"
    >
        <i class="icon-remove"></i>
    </button>
<?php }?>

<button type="button"
        name="remove_hidden"
        id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
"
        class="btn-link btn-link--contents cm-tooltip <?php if (!$_smarty_tpl->tpl_vars['simple']->value&&$_smarty_tpl->tpl_vars['only_delete']->value!="Y") {?> hidden<?php }
if ($_smarty_tpl->tpl_vars['but_class']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_class']->value, ENT_QUOTES, 'UTF-8');
}?>"
        title="<?php echo $_smarty_tpl->__("remove");?>
"
        <?php if ($_smarty_tpl->tpl_vars['but_onclick']->value) {?> onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
>
    <i class="icon-remove"></i>
</button>
<?php }} ?>
