<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 16:24:06
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/aw_reportpro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82027176350a57996ab6eb9-19592462%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f76f32447b29c377dc43aa1a57f5375a59a355c9' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/aw_reportpro.tpl',
      1 => 1352280018,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82027176350a57996ab6eb9-19592462',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'appname' => 0,
    'apptitle' => 0,
    'appdesc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a57996b543f9_96908335',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a57996b543f9_96908335')) {function content_50a57996b543f9_96908335($_smarty_tpl) {?><div id="reppropdiv" style="display:none;"><div class="popup-outer-table" style="width:500px;"><table width="100%" cellpadding="0" cellspacing="0" class="popup-header"><tr align="left" valign="top" onmousedown="captureDialog(event)"><td width="80%">Edit Advanced Report Properties...</td><td width="5%" align="right" valign="bottom"><a href="javascript:;" onClick="closeDialog()" class="close">&nbsp;</a></td></tr></table><table width="100%" cellpadding="0" cellspacing="0" border="0" class="popup-inner-table"><tr><td align="left" valign="top"><div style="overflow:auto; max-height:410px;"><table width="100%" height="100%" border="0" cellpadding="0" cellspacing="2"><tr align="left" valign="top"><td width="25%" height="1" valign="middle" nowrap class="label"><label for="appname"><strong>Application Name:</strong></label></td><td width="75%" height="35px" valign="top"><input type='text' class="config-textfield" id="appname" name="appname" style="width:100%" value='<?php echo $_smarty_tpl->tpl_vars['appname']->value;?>
'/></td></tr><tr align="left" valign="top"><td width="25%" height="1" valign="middle" nowrap class="label"><label for="apptitle"><strong>Application Title:</strong></label></td><td width="75%" height="35px" valign="top"><input type='text' class="config-textfield" id="apptitle" name="apptitle" style="width:100%" value='<?php echo $_smarty_tpl->tpl_vars['apptitle']->value;?>
'/></td></tr><tr align="left" valign="top"><td height="1" class="label" nowrap><label for="appdesc"><strong>Application Description:</strong></label></td><td height="60px"><textarea cols="3" rows='5' id="appdesc" name="appdesc" value='' style="width:100%" class="config-textarea"><?php echo $_smarty_tpl->tpl_vars['appdesc']->value;?>
</textarea></td></tr><tr valign="bottom"><td colspan="2" align="right" class="popup-footer"><input type="button" class="input-submit" onclick="doSaveReport();" value="Done"/><input type="button" class="input-submit gray" onclick="closeDialog();" value="Cancel"/></td></tr></table></div></td></tr></table></div></div><?php }} ?>