<?php
/* Smarty version 4.3.1, created on 2024-06-29 07:22:29
  from 'C:\xampp\htdocs\simpleCRMdemo\modules\DynamicFields\templates\Fields\Forms\coreTop.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_667f9a157c0b80_70305390',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0265bceffe2b1f2a782f9d58822a74dc83b7fd49' => 
    array (
      0 => 'C:\\xampp\\htdocs\\simpleCRMdemo\\modules\\DynamicFields\\templates\\Fields\\Forms\\coreTop.tpl',
      1 => 1717746209,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667f9a157c0b80_70305390 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\simpleCRMdemo\\include\\Smarty\\plugins\\function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),));
?>

<table width="100%">
<tr>
	<td class='mbLBL' width='30%' ><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"COLUMN_TITLE_NAME"),$_smarty_tpl);?>
:</td>
	<td>
	<?php if ($_smarty_tpl->tpl_vars['hideLevel']->value == 0) {?>
		<input id="field_name_id" maxlength=<?php if ((isset($_smarty_tpl->tpl_vars['package']->value->name)) && $_smarty_tpl->tpl_vars['package']->value->name != "studio") {?>30<?php } else { ?>28<?php }?> type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
"
		  onchange="
		document.getElementById('label_key_id').value = 'LBL_'+document.getElementById('field_name_id').value.toUpperCase();
		document.getElementById('label_value_id').value = document.getElementById('field_name_id').value.replace(/\_+/g,' ').replace(/^\s\s*/, '').replace(/\s\s*$/, '');
		document.getElementById('field_name_id').value = document.getElementById('field_name_id').value.toLowerCase();" />
	<?php } else { ?>
		<input id= "field_name_id" type="hidden" name="name" value="<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
"
		  onchange="
		document.getElementById('label_key_id').value = 'LBL_'+document.getElementById('field_name_id').value.toUpperCase();
		document.getElementById('label_value_id').value = document.getElementById('field_name_id').value.replace(/\_+/g,' ').replace(/^\s\s*/, '').replace(/\s\s*$/, '');
		document.getElementById('field_name_id').value = document.getElementById('field_name_id').value.toLowerCase();"/>
		<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>

	<?php }?>
		<?php echo '<script'; ?>
>
		addToValidate('popup_form', 'name', 'DBName', true,'<?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"COLUMN_TITLE_NAME"),$_smarty_tpl);?>
 [a-zA-Z_]' );
		addToValidateIsInArray('popup_form', 'name', 'in_array', true,'<?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"ERR_RESERVED_FIELD_NAME"),$_smarty_tpl);?>
', '<?php echo $_smarty_tpl->tpl_vars['field_name_exceptions']->value;?>
', 'u==');
		<?php if ($_smarty_tpl->tpl_vars['hideLevel']->value == 0) {?>	
		addToValidateIsInArray('popup_form', 'name', 'in_array', true, '<?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"ERR_FIELD_NAME_ALREADY_EXISTS"),$_smarty_tpl);?>
', '<?php echo $_smarty_tpl->tpl_vars['existing_field_names']->value;?>
', 'u==');
		<?php }?>	
		<?php echo '</script'; ?>
>
	</td>
</tr>
<tr>
	<td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"COLUMN_TITLE_DISPLAY_LABEL"),$_smarty_tpl);?>
:</td>
	<td>
		<input id="label_value_id" type="text" name="labelValue" value="<?php echo $_smarty_tpl->tpl_vars['lbl_value']->value;?>
">
	</td>
</tr>
<tr>
	<td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"COLUMN_TITLE_LABEL"),$_smarty_tpl);?>
:</td>
	<td>
    <?php if ($_smarty_tpl->tpl_vars['hideLevel']->value < 1) {?>
	    <input id ="label_key_id" type="text" name="label" value="<?php echo $_smarty_tpl->tpl_vars['vardef']->value['vname'];?>
">
	<?php } else { ?>
		<input type="text" readonly value="<?php echo $_smarty_tpl->tpl_vars['vardef']->value['vname'];?>
" disabled=1>
		<input id ="label_key_id" type="hidden" name="label" value="<?php echo $_smarty_tpl->tpl_vars['vardef']->value['vname'];?>
">
	<?php }?>
	</td>
</tr>
<tr>
	<td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"COLUMN_TITLE_HELP_TEXT"),$_smarty_tpl);?>
:</td><td><?php if ($_smarty_tpl->tpl_vars['hideLevel']->value < 5) {?><input type="text" name="help" value="<?php echo $_smarty_tpl->tpl_vars['vardef']->value['help'];?>
"><?php } else { ?><input type="hidden" name="help" value="<?php echo $_smarty_tpl->tpl_vars['vardef']->value['help'];?>
"><?php echo $_smarty_tpl->tpl_vars['vardef']->value['help'];
}?>
	</td>
</tr>
<tr>
    <td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"COLUMN_TITLE_COMMENT_TEXT"),$_smarty_tpl);?>
:</td><td><?php if ($_smarty_tpl->tpl_vars['hideLevel']->value < 5) {?><input type="text" name="comments" value="<?php echo $_smarty_tpl->tpl_vars['vardef']->value['comments'];?>
"><?php } else { ?><input type="hidden" name="comment" value="<?php echo $_smarty_tpl->tpl_vars['vardef']->value['comment'];?>
"><?php echo $_smarty_tpl->tpl_vars['vardef']->value['comment'];
}?>
    </td>
</tr>
<?php }
}
