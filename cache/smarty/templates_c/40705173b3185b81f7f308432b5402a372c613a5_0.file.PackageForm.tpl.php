<?php
/* Smarty version 4.3.1, created on 2024-06-29 07:34:03
  from 'C:\xampp\htdocs\simpleCRMdemo\ModuleInstall\PackageManager\tpls\PackageForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_667f9ccb558211_04156147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40705173b3185b81f7f308432b5402a372c613a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\simpleCRMdemo\\ModuleInstall\\PackageManager\\tpls\\PackageForm.tpl',
      1 => 1717746209,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667f9ccb558211_04156147 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['ERR_SUHOSIN']->value == true) {
echo $_smarty_tpl->tpl_vars['APP_STRINGS']->value['ERR_SUHOSIN'];?>

<?php } else {
echo $_smarty_tpl->tpl_vars['scripts']->value;?>

<?php echo $_smarty_tpl->tpl_vars['TREEHEADER']->value;?>



<style type="text/css">
#demo { width:100%; }
#demo .yui-content {
    padding:1em; /* pad content container */
}
.list {list-style:square;width:500px;padding-left:16px;}
.list li{padding:2px;font-size:8pt;}

/* hide the tab content while loading */
.tab-content{display:none;}

pre {
   font-size:11px;
}

#tabs1 {width:100%;}
#tabs1 .yui-ext-tabbody {border:1px solid #999;border-top:none;}
#tabs1 .yui-ext-tabitembody {display:none;padding:10px;}

/* default loading indicator for ajax calls */
.loading-indicator {
	font-size:8pt;
	background-image:url('../../resources/images/grid/loading.gif');
	background-repeat: no-repeat;
	background-position: left;
	padding-left:20px;
}
/* height of the rows in the grids */
.ygrid-row {
    height:27px;
}
.ygrid-col {
    height:27px !important;
}
</style>

<?php echo $_smarty_tpl->tpl_vars['INSTALLED_PACKAGES_HOLDER']->value;?>

<br>

<form action='<?php echo $_smarty_tpl->tpl_vars['form_action']->value;?>
' method="post" name="installForm">
<input type=hidden name="release_id">
<?php echo $_smarty_tpl->tpl_vars['hidden_fields']->value;?>

<div id='server_upload_div'>
<?php echo $_smarty_tpl->tpl_vars['FORM_2_PLACE_HOLDER']->value;?>

<?php echo $_smarty_tpl->tpl_vars['MODULE_SELECTOR']->value;?>

<div id='search_results_div'></div>
</div>
</form>
<div id='local_upload_div'>
<?php echo $_smarty_tpl->tpl_vars['FORM_1_PLACE_HOLDER']->value;?>

</div>

<?php if ($_smarty_tpl->tpl_vars['module_load']->value == 'true') {?>
<div id='upload_table'>
<table width='100%'><tr><td><div id='patch_downloads' class='ygrid-mso' style='height:205px;'></div></td></tr></table>
</div>

<?php echo '<script'; ?>
>
//PackageManager.toggleView('browse');
<?php echo '</script'; ?>
>

<?php }
}
}
}
