<?php
/* Smarty version 4.3.1, created on 2024-06-29 07:22:29
  from 'C:\xampp\htdocs\simpleCRMdemo\modules\DynamicFields\templates\Fields\Forms\coreBottom.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_667f9a157ec371_75581350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4919aacd26c1940da50f2f573ace477e439398be' => 
    array (
      0 => 'C:\\xampp\\htdocs\\simpleCRMdemo\\modules\\DynamicFields\\templates\\Fields\\Forms\\coreBottom.tpl',
      1 => 1717746209,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667f9a157ec371_75581350 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\simpleCRMdemo\\include\\Smarty\\plugins\\function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),1=>array('file'=>'C:\\xampp\\htdocs\\simpleCRMdemo\\include\\Smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),2=>array('file'=>'C:\\xampp\\htdocs\\simpleCRMdemo\\include\\Smarty\\plugins\\function.sugar_help.php','function'=>'smarty_function_sugar_help',),));
?>


<?php if ($_smarty_tpl->tpl_vars['vardef']->value['type'] != 'bool') {?>
<tr ><td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"COLUMN_TITLE_REQUIRED_OPTION"),$_smarty_tpl);?>
:</td><td><input type="checkbox" name="required" value="1" <?php if (!empty($_smarty_tpl->tpl_vars['vardef']->value['required'])) {?>CHECKED<?php }?> <?php if ($_smarty_tpl->tpl_vars['hideLevel']->value > 5) {?>disabled<?php }?>/><?php if ($_smarty_tpl->tpl_vars['hideLevel']->value > 5) {?><input type="hidden" name="required" value="<?php echo $_smarty_tpl->tpl_vars['vardef']->value['required'];?>
"><?php }?></td></tr>
<?php }?>
<tr><td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"COLUMN_TITLE_AUDIT"),$_smarty_tpl);?>
:</td><td><input type="checkbox" name="audited" value="1" <?php if (!empty($_smarty_tpl->tpl_vars['vardef']->value['audited'])) {?>CHECKED<?php }?> <?php if ($_smarty_tpl->tpl_vars['hideLevel']->value > 5) {?>disabled<?php }?>/><?php if ($_smarty_tpl->tpl_vars['hideLevel']->value > 5) {?><input type="hidden" name="audited" value="<?php echo $_smarty_tpl->tpl_vars['vardef']->value['audited'];?>
"><?php }?></td></tr>

<tr>
    <td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"COLUMN_TITLE_INLINE_EDIT_TEXT"),$_smarty_tpl);?>
:</td>
    <td><input type="hidden" name="inline_edit" value=""><input type="checkbox" name="inline_edit" value="1"
        <?php if (!empty($_smarty_tpl->tpl_vars['vardef']->value['inline_edit'])) {?>CHECKED<?php }?> <?php if (($_smarty_tpl->tpl_vars['hideLevel']->value > 5 || !empty($_smarty_tpl->tpl_vars['disableInlineEdit']->value))) {?>disabled<?php }?>/><?php if ($_smarty_tpl->tpl_vars['hideLevel']->value > 5) {?>
            <input type="hidden" name="inline_edit" value="<?php echo $_smarty_tpl->tpl_vars['vardef']->value['inline_edit'];?>
">
        <?php }?>
    </td>
</tr>

<?php if (!$_smarty_tpl->tpl_vars['hideImportable']->value) {?>
<tr><td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"COLUMN_TITLE_IMPORTABLE"),$_smarty_tpl);?>
:</td><td>
    <?php if ($_smarty_tpl->tpl_vars['hideLevel']->value < 5) {?>
        <?php echo smarty_function_html_options(array('name'=>"importable",'id'=>"importable",'selected'=>$_smarty_tpl->tpl_vars['vardef']->value['importable'],'options'=>$_smarty_tpl->tpl_vars['importable_options']->value),$_smarty_tpl);?>

        <?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['mod_strings']->value['LBL_POPHELP_IMPORTABLE'],'FIXX'=>250,'FIXY'=>80),$_smarty_tpl);?>

    <?php } else { ?>
        <?php if ((isset($_smarty_tpl->tpl_vars['vardef']->value['importable']))) {
echo $_smarty_tpl->tpl_vars['importable_options']->value[$_smarty_tpl->tpl_vars['vardef']->value['importable']];?>

        <?php } else {
echo $_smarty_tpl->tpl_vars['importable_options']->value['true'];
}?>
    <?php }?>
</td></tr>
<?php }
if (!$_smarty_tpl->tpl_vars['hideDuplicatable']->value) {?>
<tr><td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"COLUMN_TITLE_DUPLICATE_MERGE"),$_smarty_tpl);?>
:</td><td>
<?php if ($_smarty_tpl->tpl_vars['hideLevel']->value < 5) {?>
    <?php echo smarty_function_html_options(array('name'=>"duplicate_merge",'id'=>"duplicate_merge",'selected'=>$_smarty_tpl->tpl_vars['vardef']->value['duplicate_merge_dom_value'],'options'=>$_smarty_tpl->tpl_vars['duplicate_merge_options']->value),$_smarty_tpl);?>

    <?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['mod_strings']->value['LBL_POPHELP_DUPLICATE_MERGE'],'FIXX'=>250,'FIXY'=>80),$_smarty_tpl);?>

<?php } else { ?>
    <?php if ((isset($_smarty_tpl->tpl_vars['vardef']->value['duplicate_merge_dom_value']))) {
echo $_smarty_tpl->tpl_vars['vardef']->value['duplicate_merge_dom_value'];?>

    <?php } else {
echo $_smarty_tpl->tpl_vars['duplicate_merge_options']->value[0];
}
}?>
</td></tr>
<?php }?>
</table>
<?php }
}
