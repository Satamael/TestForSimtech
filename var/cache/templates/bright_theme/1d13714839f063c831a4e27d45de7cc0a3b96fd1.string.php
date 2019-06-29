<?php /* Smarty version Smarty-3.1.21, created on 2019-06-29 14:26:55
         compiled from "1d13714839f063c831a4e27d45de7cc0a3b96fd1" */ ?>
<?php /*%%SmartyHeaderCode:16065716895d174aff3caf32-21815304%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d13714839f063c831a4e27d45de7cc0a3b96fd1' => 
    array (
      0 => '1d13714839f063c831a4e27d45de7cc0a3b96fd1',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '16065716895d174aff3caf32-21815304',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d174aff3f3d73_80291317',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d174aff3f3d73_80291317')) {function content_5d174aff3f3d73_80291317($_smarty_tpl) {?><?php if (!is_callable('smarty_function_call_phone')) include 'C:/Users/Demon/Downloads/OpenServer/OSPanel/domains/localhost/cscart/app/addons/call_requests/functions/smarty_plugins\\function.call_phone.php';
if (!is_callable('smarty_function_call_request')) include 'C:/Users/Demon/Downloads/OpenServer/OSPanel/domains/localhost/cscart/app/addons/call_requests/functions/smarty_plugins\\function.call_request.php';
?><?php if ($_smarty_tpl->tpl_vars['addons']->value['call_requests']['status']=="A") {?>
<div class="ty-cr-phone-number-link">
    <div class="ty-cr-phone"><?php echo smarty_function_call_phone(array(),$_smarty_tpl);?>
  <span class="ty-cr-work">Пн-Пт с 9:00 до 18:00</span></div>
    <div class="ty-cr-link"><?php echo smarty_function_call_request(array(),$_smarty_tpl);?>
</div>
</div>
<?php }?><?php }} ?>
