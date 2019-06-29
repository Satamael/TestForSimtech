<?php /* Smarty version Smarty-3.1.21, created on 2019-06-28 22:28:24
         compiled from "C:\Users\Demon\Downloads\OpenServer\OSPanel\domains\localhost\cscart\design\backend\templates\addons\yml_export\common\yml_categories_selector.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20353312405d166a58637324-56953748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff3fa2567f329e93bbb285607c0d3159fe07613b' => 
    array (
      0 => 'C:\\Users\\Demon\\Downloads\\OpenServer\\OSPanel\\domains\\localhost\\cscart\\design\\backend\\templates\\addons\\yml_export\\common\\yml_categories_selector.tpl',
      1 => 1560234193,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20353312405d166a58637324-56953748',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'obj_id' => 0,
    'name' => 0,
    'value' => 0,
    'yml2_market_category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d166a586519b1_90160079',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d166a586519b1_90160079')) {function content_5d166a586519b1_90160079($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/Users/Demon/Downloads/OpenServer/OSPanel/domains/localhost/cscart/app/functions/smarty_plugins\\function.script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('yml2_export_market_category','tt_yml2_export_market_category'));
?>
<?php echo smarty_function_script(array('src'=>"js/addons/yml_export/yml_categories.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars['obj_id'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['obj_id']->value)===null||$tmp==='' ? "yml_categories" : $tmp), null, 0);?>

<div class="control-group">
    <label for="product_type_prefix" class="control-label"><?php echo $_smarty_tpl->__("yml2_export_market_category");?>
 <?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("tt_yml2_export_market_category")), 0);?>
:</label>
    <div class="controls" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
_box">
        <input type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" size="200" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" class="input-large cm-yml-categories" <?php if ((!empty($_smarty_tpl->tpl_vars['yml2_market_category']->value))) {?>placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['yml2_market_category']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>/></br>
    </div>
</div>

<?php }} ?>
