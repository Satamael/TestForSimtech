<?php /* Smarty version Smarty-3.1.21, created on 2019-06-28 18:01:29
         compiled from "C:\Users\Demon\Downloads\OpenServer\OSPanel\domains\localhost\cscart\design\backend\templates\views\settings_wizard\components\password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20774169415d162bc9afa023-36703291%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22194afd1a636c97e2092429d09024a16c8cd66d' => 
    array (
      0 => 'C:\\Users\\Demon\\Downloads\\OpenServer\\OSPanel\\domains\\localhost\\cscart\\design\\backend\\templates\\views\\settings_wizard\\components\\password.tpl',
      1 => 1560234193,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20774169415d162bc9afa023-36703291',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d162bc9b18043_54151634',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d162bc9b18043_54151634')) {function content_5d162bc9b18043_54151634($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include 'C:/Users/Demon/Downloads/OpenServer/OSPanel/domains/localhost/cscart/app/functions/smarty_plugins\\block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('new_administrator_password','show','generate','hide','show','hide'));
?>
<div class="control-group setting-wide">
    <label for="password_field" class="control-label"><?php echo $_smarty_tpl->__("new_administrator_password");?>
:</label>
    <div class="controls">
        <input type="password" value="" id="password_field" name="new_password"><br>
        <a class="cm-show-password a-pseudo cm-off-password" data-ca-result-id="password_field"><?php echo $_smarty_tpl->__("show");?>
</a> <a class="cm-generate-password a-pseudo" data-ca-result-id="password_field"><?php echo $_smarty_tpl->__("generate");?>
</a>
    </div>
</div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
    (function($, _) {
        $('.cm-show-password').on('click', function(e) {
            _this = $(this);
            if (_this.hasClass('cm-off-password')) {
                $('#' + _this.data('caResultId')).prop('type', 'text');
                _this.removeClass('cm-off-password').html('<?php echo $_smarty_tpl->__("hide");?>
');
            } else {
                $('#' + _this.data('caResultId')).prop('type', 'password');
                _this.addClass('cm-off-password').html('<?php echo $_smarty_tpl->__("show");?>
');
            }
        });

        $('.cm-generate-password').on('click', function(e) {
            $('#' + $(this).data('caResultId')).val(Math.random().toString(36).slice(-10)).prop('type', 'text');
            if ($('.cm-show-password').hasClass('cm-off-password')) {
                $('.cm-show-password').removeClass('cm-off-password').html('<?php echo $_smarty_tpl->__("hide");?>
');
            }
        });
    })(Tygh.$, Tygh);
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
