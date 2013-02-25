<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 16:05:07
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/qb/queryproperties.tpl" */ ?>
<?php /*%%SmartyHeaderCode:147585893050a57523e30ab6-95653036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3805bba66c1e2a487157dc5ac8345f4027ba324' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/qb/queryproperties.tpl',
      1 => 1352280102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147585893050a57523e30ab6-95653036',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dialogtype' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a57523ec2ee3_48865658',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a57523ec2ee3_48865658')) {function content_50a57523ec2ee3_48865658($_smarty_tpl) {?><div id="querypropdiv" style="display:none;"><div class="popup-outer-table" style="width:500px"><table width="100%" cellpadding="0" cellspacing="0" class="popup-header"><tr align="left" valign="top" onmousedown="captureDialog(event)"><td width="80%">Save as bookmark...</td><td width="5%" align="right" valign="bottom"><a href="javascript:void(0);" onClick="closeDialog()" class="close">&nbsp;</a></td></tr></table><table width="100%" cellpadding="0" cellspacing="0" border="0" class="popup-inner-table"><tr><td align="left" valign="top"><div style="overflow:auto; max-height:410px;"><form id="formprop" name="formprop" method="post" style="height:100%"><table width="100%" height="100%" border="0" cellpadding="0" cellspacing="2"><tr align="left" valign="top"><td width="25%" height="1" valign="middle" nowrap class="label"><label for="editfname"><strong>Bookmark Name:</strong></label></td><td width="75%" height="35px" valign="top"><input type='text' class="config-textfield" id="qbName" name="qbName" style="width:100%" value='Untitled Query'/></td></tr><tr align="left" valign="top"><td height="1" nowrap class="label"><label for="fmsucmsg"><strong>Content:</strong></label></td><td height="60px" valign="top"><textarea cols="3" rows='10' id="qbContent" name="qbContent" value='Untitled Form.' style="width:100%" class="config-textarea"></textarea><br/><span class="info-text">* you can modify the sql statement above for saving.</span></td></tr><tr valign="bottom"><td colspan="2" align="right" class="popup-footer"><input type="button" class="input-submit" onclick="subQueryProp('<?php echo $_smarty_tpl->tpl_vars['dialogtype']->value;?>
');" value="Done"/><input type="button" class="input-submit gray" onclick="closeDialog();" value="Cancel"/></td></tr></table></form></div></td></tr></table></div></div><?php }} ?>