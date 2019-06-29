<?php /* Smarty version Smarty-3.1.21, created on 2019-06-28 22:12:01
         compiled from "C:\Users\Demon\Downloads\OpenServer\OSPanel\domains\localhost\cscart\design\backend\templates\addons\discussion\hooks\categories\fields_to_edit.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2454830355d166681bf1154-73686038%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f15dd9a6354fe2b7593fb2c685f70cb24f88feea' => 
    array (
      0 => 'C:\\Users\\Demon\\Downloads\\OpenServer\\OSPanel\\domains\\localhost\\cscart\\design\\backend\\templates\\addons\\discussion\\hooks\\categories\\fields_to_edit.post.tpl',
      1 => 1560234193,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2454830355d166681bf1154-73686038',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d166681bf3257_63032514',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d166681bf3257_63032514')) {function content_5d166681bf3257_63032514($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('discussion_title_category'));
?>
<label for="discussion_type" class="checkbox">
<input type="checkbox" value="discussion_type" id="discussion_type" name="selected_fields[extra][]" checked="checked" class="cm-item-s" />
<?php echo $_smarty_tpl->__("discussion_title_category");?>
</label>
<?php }} ?>
