<?php /* Smarty version Smarty-3.1.21, created on 2019-06-28 17:58:32
         compiled from "C:\Users\Demon\Downloads\OpenServer\OSPanel\domains\localhost\cscart\design\backend\templates\addons\help_tutorial\hooks\index\actions.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11243707055d162b183675b7-10422270%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '328fa97f5d11fe201af6e286b0192db5ba8250b8' => 
    array (
      0 => 'C:\\Users\\Demon\\Downloads\\OpenServer\\OSPanel\\domains\\localhost\\cscart\\design\\backend\\templates\\addons\\help_tutorial\\hooks\\index\\actions.post.tpl',
      1 => 1560234193,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11243707055d162b183675b7-10422270',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'sidebar_content' => 0,
    'sidebar_position' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5d162b184e0af6_12541664',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d162b184e0af6_12541664')) {function content_5d162b184e0af6_12541664($_smarty_tpl) {?><?php
\Tygh\Languages\Helper::preloadLangVars(array('help_tutorial.need_help_button','close'));
?>
<?php if (($_smarty_tpl->tpl_vars['runtime']->value['controller']=="block_manager"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage")||($_smarty_tpl->tpl_vars['runtime']->value['controller']=="themes"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage")||(fn_allowed_for("ULTIMATE")&&$_smarty_tpl->tpl_vars['runtime']->value['controller']=="companies"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage")||($_smarty_tpl->tpl_vars['runtime']->value['controller']=="index"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="index")||($_smarty_tpl->tpl_vars['runtime']->value['controller']=="seo_rules"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage")||($_smarty_tpl->tpl_vars['runtime']->value['controller']=="categories"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage")||($_smarty_tpl->tpl_vars['runtime']->value['controller']=="products"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage")||($_smarty_tpl->tpl_vars['runtime']->value['controller']=="products"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="update")||($_smarty_tpl->tpl_vars['runtime']->value['controller']=="products"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="add")||($_smarty_tpl->tpl_vars['runtime']->value['controller']=="settings_wizard"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="view")||($_smarty_tpl->tpl_vars['runtime']->value['controller']=="menus"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage")||($_smarty_tpl->tpl_vars['runtime']->value['controller']=="templates"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage")||($_smarty_tpl->tpl_vars['runtime']->value['controller']=="tabs"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage")||($_smarty_tpl->tpl_vars['runtime']->value['controller']=="seo_redirects"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage")||($_smarty_tpl->tpl_vars['runtime']->value['controller']=="discussion_manager"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage")||($_smarty_tpl->tpl_vars['runtime']->value['controller']=="sitemap"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage")||($_smarty_tpl->tpl_vars['runtime']->value['controller']=="promotions"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage")||($_smarty_tpl->tpl_vars['runtime']->value['controller']=="cart"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="cart_list")||($_smarty_tpl->tpl_vars['runtime']->value['controller']=="newsletters"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage")||($_smarty_tpl->tpl_vars['runtime']->value['controller']=="gift_certificates"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage")||($_smarty_tpl->tpl_vars['runtime']->value['controller']=="banners"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage")||($_smarty_tpl->tpl_vars['runtime']->value['controller']=="profile_fields"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage")||($_smarty_tpl->tpl_vars['runtime']->value['controller']=="shippings"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage")||($_smarty_tpl->tpl_vars['runtime']->value['controller']=="payments"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage")||($_smarty_tpl->tpl_vars['runtime']->value['controller']=="orders"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage")||($_smarty_tpl->tpl_vars['runtime']->value['controller']=="languages"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage")||($_smarty_tpl->tpl_vars['runtime']->value['controller']=="languages"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="translations")||($_smarty_tpl->tpl_vars['runtime']->value['controller']=="exim"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="export")||($_smarty_tpl->tpl_vars['runtime']->value['controller']=="exim"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="import")||($_smarty_tpl->tpl_vars['runtime']->value['controller']=="settings"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage"&&$_REQUEST['section_id']=="General")||($_smarty_tpl->tpl_vars['runtime']->value['controller']=="settings"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage"&&$_REQUEST['section_id']=="Appearance")||($_smarty_tpl->tpl_vars['runtime']->value['controller']=="settings"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage"&&$_REQUEST['section_id']=="Company")||($_smarty_tpl->tpl_vars['runtime']->value['controller']=="settings"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage"&&$_REQUEST['section_id']=="Stores")||($_smarty_tpl->tpl_vars['runtime']->value['controller']=="settings"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage"&&$_REQUEST['section_id']=="Checkout")||($_smarty_tpl->tpl_vars['runtime']->value['controller']=="settings"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage"&&$_REQUEST['section_id']=="Emails")||($_smarty_tpl->tpl_vars['runtime']->value['controller']=="settings"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage"&&$_REQUEST['section_id']=="Thumbnails")||($_smarty_tpl->tpl_vars['runtime']->value['controller']=="settings"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage"&&$_REQUEST['section_id']=="Security")||($_smarty_tpl->tpl_vars['runtime']->value['controller']=="settings"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage"&&$_REQUEST['section_id']=="Sitemap")||($_smarty_tpl->tpl_vars['runtime']->value['controller']=="settings"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage"&&$_REQUEST['section_id']=="Upgrade_center")||($_smarty_tpl->tpl_vars['runtime']->value['controller']=="settings"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage"&&$_REQUEST['section_id']=="Logging")||($_smarty_tpl->tpl_vars['runtime']->value['controller']=="settings"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage"&&$_REQUEST['section_id']=="Reports")||($_smarty_tpl->tpl_vars['runtime']->value['controller']=="discussion"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="update"&&$_REQUEST['discussion_type']=="E")||($_smarty_tpl->tpl_vars['runtime']->value['controller']=="profiles"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage"&&$_REQUEST['user_type']=="A")||($_smarty_tpl->tpl_vars['runtime']->value['controller']=="profiles"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage"&&$_REQUEST['user_type']=="C")||($_smarty_tpl->tpl_vars['runtime']->value['controller']=="file_editor"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage")||($_smarty_tpl->tpl_vars['runtime']->value['controller']=="pages"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage"&&$_REQUEST['get_tree']=="multi_level"&&$_REQUEST['page_type']!="B")||($_smarty_tpl->tpl_vars['runtime']->value['controller']=="pages"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage"&&$_REQUEST['get_tree']=="multi_level"&&$_REQUEST['page_type']=="B")||($_smarty_tpl->tpl_vars['runtime']->value['controller']=="product_filters"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage")||($_smarty_tpl->tpl_vars['runtime']->value['controller']=="product_features"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage")) {?>
    <div class="help-tutorial clearfix">
    <span class="help-tutorial-link cm-external-click <?php if (trim($_smarty_tpl->tpl_vars['sidebar_content']->value)!='') {
if ($_smarty_tpl->tpl_vars['sidebar_position']->value=="right") {?>pulled-left<?php } elseif ($_smarty_tpl->tpl_vars['sidebar_position']->value=="left") {?>pulled-right<?php }
}?>" id="help_tutorial_link" data-ca-scroll="main_column">
        <span class="help-tutorial-show"><i class="help-tutorial-icon icon-question-sign"></i><?php echo $_smarty_tpl->__("help_tutorial.need_help_button");?>
</span>
        <span class="help-tutorial-close"><i class="help-tutorial-icon icon-remove"></i><?php echo $_smarty_tpl->__("close");?>
</span>
    </span>
    </div>
<?php }?><?php }} ?>
