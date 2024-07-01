<?php
/* Smarty version 4.3.1, created on 2024-06-29 07:22:29
  from 'C:\xampp\htdocs\simpleCRMdemo\modules\DynamicFields\templates\Fields\Forms\enum.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_667f9a157a6fc1_35253710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3002e855631a1cc6a947ad1f983aed50060f2b4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\simpleCRMdemo\\modules\\DynamicFields\\templates\\Fields\\Forms\\enum.tpl',
      1 => 1717746209,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/DynamicFields/templates/Fields/Forms/coreTop.tpl' => 1,
    'file:modules/DynamicFields/templates/Fields/Forms/coreBottom.tpl' => 1,
  ),
),false)) {
function content_667f9a157a6fc1_35253710 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\simpleCRMdemo\\include\\Smarty\\plugins\\function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),1=>array('file'=>'C:\\xampp\\htdocs\\simpleCRMdemo\\include\\Smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>

 <?php $_smarty_tpl->_subTemplateRender("file:modules/DynamicFields/templates/Fields/Forms/coreTop.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<tr>
	<td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"LBL_DROP_DOWN_LIST"),$_smarty_tpl);?>
:</td>
	<td>
	<?php if ($_smarty_tpl->tpl_vars['hideLevel']->value < 5 && empty($_smarty_tpl->tpl_vars['vardef']->value['function'])) {?>
		<?php echo smarty_function_html_options(array('name'=>"options",'id'=>"options",'selected'=>$_smarty_tpl->tpl_vars['selected_dropdown']->value,'values'=>$_smarty_tpl->tpl_vars['dropdowns']->value,'output'=>$_smarty_tpl->tpl_vars['dropdowns']->value,'onChange'=>"ModuleBuilder.dropdownChanged(this.value);"),$_smarty_tpl);
if (!$_smarty_tpl->tpl_vars['uneditable']->value) {?><br><input type='button' value='<?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"LBL_BTN_EDIT"),$_smarty_tpl);?>
' class='button' onclick="if(check_form('popup_form')) { ModuleBuilder.moduleDropDown(this.form.options.value, this.form.options.value); }">&nbsp;<input type='button' value='<?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"LBL_BTN_ADD"),$_smarty_tpl);?>
' class='button' onclick="if(check_form('popup_form')) { ModuleBuilder.moduleDropDown('', this.form.name.value); }"><?php }?>
	<?php } else { ?>
		<input type='hidden' name='options' value='<?php echo $_smarty_tpl->tpl_vars['selected_dropdown']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['selected_dropdown']->value;?>

	<?php }?>
	</td>
</tr>
<tr>
	<td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"COLUMN_TITLE_DEFAULT_VALUE"),$_smarty_tpl);?>
:</td>
	<td>
	<?php if ($_smarty_tpl->tpl_vars['hideLevel']->value < 5 && empty($_smarty_tpl->tpl_vars['vardef']->value['function'])) {?>
		<?php echo smarty_function_html_options(array('name'=>"default[]",'id'=>"default[]",'selected'=>$_smarty_tpl->tpl_vars['selected_options']->value,'options'=>$_smarty_tpl->tpl_vars['default_dropdowns']->value,'multiple'=>$_smarty_tpl->tpl_vars['multi']->value),$_smarty_tpl);?>

	<?php } else { ?>
		<input type='hidden' name='default[]' id='default[]' value='$vardef.default'><?php echo $_smarty_tpl->tpl_vars['vardef']->value['default'];?>

	<?php }?>
	</td>
</tr>
<tr>
	<td class='mbLBL' ><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"COLUMN_TITLE_MASS_UPDATE"),$_smarty_tpl);?>
:</td>
	<td>
	<?php if ($_smarty_tpl->tpl_vars['hideLevel']->value < 5) {?>
		<input type="checkbox" id="massupdate"  name="massupdate" value="1" <?php if (!empty($_smarty_tpl->tpl_vars['vardef']->value['massupdate'])) {?>checked<?php }?>/>
	<?php } else { ?>
		<input type="checkbox" id="massupdate"  name="massupdate" value="1" disabled <?php if (!empty($_smarty_tpl->tpl_vars['vardef']->value['massupdate'])) {?>checked<?php }?>/>
	<?php }?>
	</td>
</tr>
<?php $_smarty_tpl->_subTemplateRender("file:modules/DynamicFields/templates/Fields/Forms/coreBottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
