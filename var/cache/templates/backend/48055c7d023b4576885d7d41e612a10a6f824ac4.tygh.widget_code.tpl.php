<?php /* Smarty version Smarty-3.1.21, created on 2019-06-29 16:10:15
         compiled from "C:\Users\Demon\Downloads\OpenServer\OSPanel\domains\localhost\cscart\design\backend\templates\views\block_manager\widget_code.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20244568595d176337243110-34614085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48055c7d023b4576885d7d41e612a10a6f824ac4' => 
    array (
      0 => 'C:\\Users\\Demon\\Downloads\\OpenServer\\OSPanel\\domains\\localhost\\cscart\\design\\backend\\templates\\views\\block_manager\\widget_code.tpl',
      1 => 1560234193,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20244568595d176337243110-34614085',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'widget_https_url' => 0,
    'widget_http_url' => 0,
    'widget_layout_id' => 0,
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d176337325595_96629338',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d176337325595_96629338')) {function content_5d176337325595_96629338($_smarty_tpl) {?><div class="tygh" id="tygh_container">
</div>
<?php echo '<script'; ?>
 type="text/javascript" data-no-defer>
    (function() {
        var url = 'https:' == document.location.protocol ? '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_https_url']->value, ENT_QUOTES, 'UTF-8');?>
' : '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['widget_http_url']->value, ENT_QUOTES, 'UTF-8');?>
';
        var cw = document.createElement('script'); cw.type = 'text/javascript'; cw.async = true;
        cw.src = '//widget.cart-services.com/static/init.js?url=' + url + '&layout=<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['widget_layout_id']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['runtime']->value['layout']['layout_id'] : $tmp), ENT_QUOTES, 'UTF-8');?>
';
        document.getElementById('tygh_container').appendChild(cw);
        })();
<?php echo '</script'; ?>
>
<!-- Before using a widget make sure that the
" <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> "
meta tag exists. -->
<?php }} ?>
