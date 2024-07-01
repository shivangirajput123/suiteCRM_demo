<?php
/* Smarty version 4.3.1, created on 2024-06-25 13:07:52
  from 'C:\xampp\htdocs\simpleCRMdemo\modules\Campaigns\WizardEmailSetup.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_667aa50888ed05_83949231',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cee896a6a5c5384b308c5ca1e4550f5bb86ca49f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\simpleCRMdemo\\modules\\Campaigns\\WizardEmailSetup.html',
      1 => 1717746209,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667aa50888ed05_83949231 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\simpleCRMdemo\\include\\Smarty\\plugins\\function.sugar_getimagepath.php','function'=>'smarty_function_sugar_getimagepath',),1=>array('file'=>'C:\\xampp\\htdocs\\simpleCRMdemo\\include\\Smarty\\plugins\\function.sugar_getscript.php','function'=>'smarty_function_sugar_getscript',),));
?>
<!--
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */
-->
<?php echo $_smarty_tpl->tpl_vars['ROLLOVER']->value;?>

<?php echo $_smarty_tpl->tpl_vars['ERROR']->value;?>

<form id="wizform" name="wizform" method="POST" action="index.php">
	<input type="hidden" name="module" value="Campaigns">
	<input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
">
	<input type="hidden" name="action">
	<input type="hidden" name="return_module" value="<?php echo $_smarty_tpl->tpl_vars['RETURN_MODULE']->value;?>
">
	<input type="hidden" name="return_id" value="<?php echo $_smarty_tpl->tpl_vars['RETURN_ID']->value;?>
">
	<input type="hidden" name="return_action" value="<?php echo $_smarty_tpl->tpl_vars['RETURN_ACTION']->value;?>
">
	<input type='hidden' name='campaign_type' value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NEWSLETTER'];?>
">
	<input type="hidden" id="wiz_total_steps" name="totalsteps" value="3">
	<input type="hidden" id="wiz_current_step" name="currentstep" value='0'>
	<input type="hidden" id="wiz_summary_step" name="wiz_summary_step" value='create_email_setup_summary'>


<p>
	<div id ='buttons'>
		<table width="100%" border="0" cellspacing="0" cellpadding="0" >
			<tr>
				<td align="left" width='30%'>
					<table border="0" cellspacing="0" cellpadding="0" ><tr>
						<td><div id="back_button_div"><input id="wiz_back_button" type='button' title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_BACK'];?>
" class="button" onclick="navigate('back');"  name="back" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_BACK'];?>
"></div></td>
						<td><div id="cancel_button_div"><input id="wiz_cancel_button" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="this.form.action.value='<?php echo $_smarty_tpl->tpl_vars['RETURN_ACTION']->value;?>
'; this.form.module.value='<?php echo $_smarty_tpl->tpl_vars['RETURN_MODULE']->value;?>
'; this.form.record.value='<?php echo $_smarty_tpl->tpl_vars['RETURN_ID']->value;?>
'" type="submit" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
"></div></td>
						<td><div id="save_button_div"><input id="wiz_submit_button" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_KEY'];?>
" class="button" onclick="this.form.action.value='WizardEmailSetupSave';" type="submit" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
" > </div></td>
						<td><div id="next_button_div"><input id="wiz_next_button" type='button' title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_NEXT_BUTTON_LABEL'];?>
" class="button" onclick="navigate('next');create_summary();" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_NEXT_BUTTON_LABEL'];?>
"></div></td>
					</tr></table>
				</td>
				<td align="right" width='40%'><div id='wiz_location_message'></td>
			</tr>
		</table>
	</div>
</p>


<table class='other view' width="100%" border="0" cellspacing="3" cellpadding="0">
<tr>
<td width="10%" style="vertical-align: top;">
<div id='nav'>
<table border="0" cellspacing="0" cellpadding="0" width="100%" >
<tr><td scope='row' nowrap><div id='nav_step1'><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NAVIGATION_MENU_SETUP'];?>
</div></td></tr>
<tr><td scope='row' nowrap><div id='nav_step2'><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NAVIGATION_MENU_NEW_MAILBOX'];?>
</div></td></tr>
<tr><td scope='row' nowrap><div id='nav_step3'><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NAVIGATION_MENU_SUMMARY'];?>
</div></td></tr>
</table>
</div>
</td>

<td class='edit view' width='100%'>
<div id="wiz_message"></div>
<div id=wizard class="wizard-unique-elem">

	<div id='step1'><table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
	<th colspan="2" align="left" ><h4 class="header-4"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NAVIGATION_MENU_SETUP'];?>
</h4></th>
	</tr>
	<tr>
	<td scope="row"><span sugar='slot1'>
	<?php echo $_smarty_tpl->tpl_vars['EMAILSETUP']->value;
echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_EMAIL_SETUP_DESC'];?>

	</span sugar='slot'></td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" >
				<tr>
					<td>
						<table width="100%" border="0" cellspacing="0" cellpadding="0">

							<tr>
								<td width="20%" scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_WIZ_FROM_NAME'];?>
 <span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span></td>
								<td width="30%" ><input name="wiz_step1_notify_fromname" tabindex='1' size='25' maxlength='128' type="text" id="notify_fromname" value="<?php echo $_smarty_tpl->tpl_vars['notify_fromname']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_WIZ_FROM_NAME'];?>
"></td>
							</tr>
							<tr>
								<td scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MAIL_SENDTYPE'];?>
</td>
								<td >
									<select id="mail_sendtype"  name="wiz_step1_mail_sendtype" title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MAIL_SENDTYPE'];?>
" onChange="notify_setrequired();" tabindex="1"><?php echo $_smarty_tpl->tpl_vars['mail_sendtype_options']->value;?>
</select>
								</td>
							</tr>							<tr>
								<td scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_WIZ_FROM_ADDRESS'];?>
 <span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span></td>
								<td ><input name='wiz_step1_notify_fromaddress' id='notify_fromaddress' tabindex='1' size='25' maxlength='128' type="text" value="<?php echo $_smarty_tpl->tpl_vars['notify_fromaddress']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_WIZ_FROM_ADDRESS'];?>
"></td></tr>
							<tr>
								<td colspan="4">
									<div id="smtp_settings">
										<table width="100%" cellpadding="0" cellspacing="0">
											<tr>
												<td width="20%" scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MAIL_SMTPSERVER'];?>
 <span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span></td>
												<td width="30%" ><input type="text"  title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MAIL_SMTPSERVER'];?>
"  name="wiz_step1_mail_smtpserver"  id='mail_smtpserver'  tabindex="1" size="25" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['mail_smtpserver']->value;?>
"></td>
												<td width="20%" scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MAIL_SMTPPORT'];?>
 <span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span></td>
												<td width="30%" ><input type="text" id='mail_smtpport' name="wiz_step1_mail_smtpport" title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MAIL_SMTPPORT'];?>
" tabindex="1" size="5" maxlength="5" value="<?php echo $_smarty_tpl->tpl_vars['mail_smtpport']->value;?>
"></td>
											</tr>
											<tr>
												<td scope="row">
													<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MAIL_SMTPAUTH_REQ'];?>

												</td>
												<td>
													<input title ="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MAIL_SMTPAUTH_REQ'];?>
"  id='mail_smtpauth_req'  name='wiz_step1_mail_smtpauth_req' type="checkbox" class="checkbox" value="1" tabindex='1'
													onclick="notify_setrequired();" <?php echo $_smarty_tpl->tpl_vars['mail_smtpauth_req']->value;?>
>
												</td>
												<td width="15%" scope="row">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EMAIL_SMTP_SSL_OR_TLS'];?>
:</td>
                                                <td width="35%" >
												<select id="mail_smtpssl" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EMAIL_SMTP_SSL_OR_TLS'];?>
" name="mail_smtpssl" tabindex="1"><?php echo $_smarty_tpl->tpl_vars['MAIL_SSL_OPTIONS']->value;?>
</select>
                                                </td>
											</tr>
											<tr>
												<td colspan="4">
													<div id="smtp_auth">
														<table width="100%" cellpadding="0" cellspacing="0">
															<tr>
																<td width="20%" scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MAIL_SMTPUSER'];?>
 <span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span></td>
																<td width="30%" ><input type="text" name="wiz_step1_mail_smtpuser" id='mail_smtpuser' title='<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MAIL_SMTPUSER'];?>
' size="25" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['mail_smtpuser']->value;?>
" tabindex='1' ></td>
																<td width="20%" scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MAIL_SMTPPASS'];?>
 <span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span></td>
																<td width="30%" ><input type="password" title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MAIL_SMTPPASS'];?>
" name="wiz_step1_mail_smtppass" id='mail_smtppass' size="25" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['mail_smtppass']->value;?>
" tabindex='1'></td>
															</tr>
														</table>
													</div>
									 			</td>
									 		</tr>
									 	</table>
									 </div>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr><td>&nbsp;</td></tr>
				<tr><td>&nbsp;</td></tr>
				<tr><td><h4 class="header-4"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MASS_MAILING_TITLE'];?>
</h4></td></tr>
			<tr><td>
			 <table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
				<td width="40%" scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_EMAILS_PER_RUN'];?>
&nbsp;<span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span></td>
				<td width="50%" ><input name='wiz_step1_massemailer_campaign_emails_per_run' id='massemailer_campaign_emails_per_run' title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_EMAILS_PER_RUN'];?>
"tabindex='1' maxlength='128' type="text" value="<?php echo $_smarty_tpl->tpl_vars['EMAILS_PER_RUN']->value;?>
"></td>
				</tr><tr>
				<td scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_LOCATION_TRACK'];?>
&nbsp;<span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span></td>
				<td ><input type='radio' onclick="change_state(this);" name='wiz_step1_massemailer_tracking_entities_location_type' id='massemailer_tracking_entities_location_type' title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_DEFAULT_LOCATION'];?>
" value="1" <?php echo $_smarty_tpl->tpl_vars['DEFAULT_CHECKED']->value;?>
><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_DEFAULT_LOCATION'];?>
&nbsp;<input type='radio' <?php echo $_smarty_tpl->tpl_vars['USERDEFINED_CHECKED']->value;?>
 onclick="change_state(this);" name='wiz_step1_massemailer_tracking_entities_location_type' id='massemailer_tracking_entities_location_type' title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CUSTOM_LOCATION'];?>
" value="2"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CUSTOM_LOCATION'];?>

				</tr><tr>
				<td scope="row"></td>
				<td ><input name='wiz_step1_massemailer_tracking_entities_location'  id='massemailer_tracking_entities_location' title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_LOCATION_TRACK'];?>
" <?php echo $_smarty_tpl->tpl_vars['TRACKING_ENTRIES_LOCATION_STATE']->value;?>
 maxlength='128' type="text" value="<?php echo $_smarty_tpl->tpl_vars['TRACKING_ENTRIES_LOCATION']->value;?>
"></td>
				</tr>
			<tr>
				<td scope="row">
					<div id="rollover">
						<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CAMP_MESSAGE_COPY'];?>
&nbsp;<span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span>
                        <a href="#" class="rollover"><span><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CAMP_MESSAGE_COPY_DESC'];?>
</span><img border="0" src="<?php echo smarty_function_sugar_getimagepath(array('file'=>'helpInline.gif'),$_smarty_tpl);?>
"></a>
                    </div>

				</td>
				<td >
						<input type='radio'  name='massemailer_email_copy' value="1" <?php echo $_smarty_tpl->tpl_vars['YES_CHECKED']->value;?>
><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_YES'];?>
&nbsp;<input type='radio' <?php echo $_smarty_tpl->tpl_vars['NO_CHECKED']->value;?>
  name='massemailer_email_copy' value="2"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NO'];?>

				</td>

			</tr>
			 </table>
				</td></tr></table>
		</td></tr></table>
		<?php echo '<script'; ?>
 type="text/javascript" >
		
		function change_state(radiobutton) {

			if (radiobutton.value == '1') {
				radiobutton.form['wiz_step1_massemailer_tracking_entities_location'].disabled=true;
				
				radiobutton.form['wiz_step1_massemailer_tracking_entities_location'].value='<?php echo $_smarty_tpl->tpl_vars['MOD']->value['TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE'];?>
';
				
			} else {
				radiobutton.form['wiz_step1_massemailer_tracking_entities_location'].disabled=false;
				radiobutton.form['wiz_step1_massemailer_tracking_entities_location'].value='<?php echo $_smarty_tpl->tpl_vars['SITEURL']->value;?>
';
			}
		}
		<?php echo '</script'; ?>
>
	</div>


	<div id='step2' class="step2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
	<td  colspan="2"><h3><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NAVIGATION_MENU_NEW_MAILBOX'];?>
</h3></td>
	<td colspan="2">&nbsp;</td>
	</tr>
	<tr>
	<td scope="row" colspan ='3'><?php echo $_smarty_tpl->tpl_vars['MAILBOXES_DETECTED_MESSAGE']->value;?>
</td></td>&nbsp;</td>
	</tr>
	<tr><td scope="row"><input type='hidden' id='wiz_new_mbox' name='wiz_new_mbox' value='0'>
	<input title ="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MAIL_SMTPAUTH_REQ'];?>
"  id='create_mbox' name='wiz_create_mbox'  type="checkbox" class="checkbox"
	onclick="notify_setrequired();" <?php echo $_smarty_tpl->tpl_vars['MBOX_NEEDED']->value;?>
>&nbsp;<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CREATE_MAILBOX'];?>
</td>
	<td colspan='3'>&nbsp;</td></tr>
	</table>
	<div id="new_mbox">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td valign="top" scope="row" width="20%" NOWRAP>
				<span><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MAILBOX_NAME'];?>
 <span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span>&nbsp;</span></td>
			<td valign="top"  width="30%">
				<span><input id='name' name='wiz_step2_name' title='<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MAILBOX_NAME'];?>
' tabindex='10' size='30' maxlength='255' type="text" value="" ></span></td>
			<td valign="top" scope="row" width="20%" NOWRAP>
				<span><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_FROM_ADDR'];?>
:&nbsp;</span></td>
			<td valign="top"  width="30%" NOWRAP>
				<span><input name="wiz_step2_from_addr" id="from_addr" title='<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_FROM_ADDR'];?>
' size='30'>&nbsp;</span></td>

		</tr>
		<tr>
			<td valign="top" scope="row">
					<span><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SERVER_URL'];?>
: <span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span>&nbsp;</span></td>
			<td valign="top"  width="30%">
				<span><input title='<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SERVER_URL'];?>
' name='wiz_step2_server_url' id='server_url' tabindex='20' size='30' maxlength='100' type="text" value="" ></span></td>
			<td valign="top" scope="row">
				<span><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_LOGIN'];?>
:
				<span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span>&nbsp;</span></td>
			<td valign="top"  width="30%">
				<span><input title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_LOGIN'];?>
" name='wiz_step2_email_user' id='email_user' tabindex='70' size='30' maxlength='100' type="text" value="" ></span></td>
		</tr>
		<tr>
			<td valign="top" scope="row" width="20%" NOWRAP>
				<span><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SERVER_TYPE'];?>
:
				<span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span>&nbsp;</span></td>
			<td valign="top"  width="30%">
				<span>
				<select title='<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SERVER_TYPE'];?>
' name='wiz_step2_protocol' id='protocol' tabindex='30' onchange="toggle_monitored_folder(this); setPortDefault();" ><?php echo $_smarty_tpl->tpl_vars['PROTOCOL']->value;?>
</select></span></td>
			<td valign="top" scope="row">
				<span><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PASSWORD'];?>
:
				<span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
&nbsp;</span></td>
			<td valign="top"  width="30%">
				<span><input id='email_password' title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PASSWORD'];?>
" name='wiz_step_email_password' tabindex='80' size='30' maxlength='100' type="password" value="<?php echo $_smarty_tpl->tpl_vars['PASSWORD']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['IE_DISABLED']->value;?>
></span></span></td>
		</tr>
		<tr>
			<td valign="top" scope="row" width="20%" NOWRAP>
				<span><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PORT'];?>
:
				<span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span>&nbsp;</span></td>
			<td valign="top"  width="30%">
				<span>
				<input title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PORT'];?>
"  type='text' name='wiz_step2_port' id='port' tabindex="40" value="<?php echo $_smarty_tpl->tpl_vars['PORT']->value;?>
" size='10'>
            <td valign="top" scope="row" width="20%" NOWRAP>
                <span><div id='label_inbox' style="<?php echo $_smarty_tpl->tpl_vars['DISPLAY']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MAILBOX'];?>
: <span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</div></span>&nbsp;</span></td>
            <td valign="top"  width="30%">
                <span><div id='inbox' style="<?php echo $_smarty_tpl->tpl_vars['DISPLAY']->value;?>
"><input id="mailbox" name='mailbox' title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MAILBOX'];?>
" tabindex='90' size='30' maxlength='50' type="text" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MAILBOX_DEFAULT'];?>
"></div>
                </span></td>
		</tr>
        <tr>
            <td valign="top" scope="row" width="1%" NOWRAP>
                <div class="maybe">
                    <span><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SSL'];?>
:&nbsp;</span>
                </div>
            </td>
            <td valign="top"  width="33%">
                <span>
                    <div class="maybe">
                        <div id="rollover">
                            <a href="#" class="rollover"><span><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SSL_DESC'];?>
</span><img border="0" src="<?php echo smarty_function_sugar_getimagepath(array('file'=>'helpInline.gif'),$_smarty_tpl);?>
"></a>
                        </div>
                        <input name='ssl' id='ssl' tabindex='45' type='checkbox' class="checkbox" value="1" onClick="setPortDefault();" title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SSL'];?>
" <?php echo $_smarty_tpl->tpl_vars['IE_DISABLED']->value;?>
>
                    </div>
                </span>
            </td>
        </tr>
	</table>
	</div>
	</div>


	<div id='step3' class="step3">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr><td>
			<h3><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NAVIGATION_MENU_SUMMARY'];?>
</h3>
		</td></tr>
		<tr><td>
			<div id='wiz_summ'></div>
		</td></tr>
	</table>
	</div>

</div>
</td>
</tr>
</table>


</form>
<input id="mark_read" type='hidden'>

<div id='pop3_warn'></div>

<?php echo smarty_function_sugar_getscript(array('file'=>"modules/Campaigns/wizard.js"),$_smarty_tpl);?>

<?php echo smarty_function_sugar_getscript(array('file'=>"modules/InboundEmail/InboundEmail.js"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->tpl_vars['WIZ_JAVASCRIPT']->value;?>

<?php echo $_smarty_tpl->tpl_vars['DIV_JAVASCRIPT']->value;?>

<?php echo $_smarty_tpl->tpl_vars['JAVASCRIPT']->value;?>



<?php }
}
