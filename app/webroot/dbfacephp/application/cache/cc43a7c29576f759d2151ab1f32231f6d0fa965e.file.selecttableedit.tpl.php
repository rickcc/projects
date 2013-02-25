<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 18:12:52
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/form/selecttableedit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:81579677250a59314561ff4-28005257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc43a7c29576f759d2151ab1f32231f6d0fa965e' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/form/selecttableedit.tpl',
      1 => 1352280066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81579677250a59314561ff4-28005257',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a5931457eb15_04466785',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a5931457eb15_04466785')) {function content_50a5931457eb15_04466785($_smarty_tpl) {?><div id="tableallpdiv" style="display:none;"><div class="popup-outer-table" style="width:500px"><table width="100%" cellpadding="0" cellspacing="0" class="popup-header"><tr align="left" valign="top" onmousedown="captureDialog(event)"><td width="80%">Select Base Table...</td><td width="5%" align="right" valign="bottom"><a href="javascript:;" onClick="closeDialog()" class="close">&nbsp;</a></td></tr></table><table width="100%" cellpadding="0" cellspacing="0" border="0" class="popup-inner-table"><tr><td align="left" valign="top"><div style="overflow:auto;max-height:410px;"><input type="hidden" id="formID" value=""/><table width="100%" height="100%" border="0" cellpadding="0" cellspacing="2"><tr align="left" valign="top"><td width="25%" height="1" valign="middle" nowrap class="label"><label for="editfname"><strong>Table Name:</strong></label></td><td width="75%" height="35px" valign="top"><select id="alltablelist" class='config-picklist' style='width:100%' onchange="javascript:get_table_column_for_gen();"></select><span class="info-text">Will auto generate form for the selected table, by analyzing & applying advanced rules on the fields in the table.</span></td></tr><tr><td></td><td height="90%" id="td_table_wizard"></td></tr><tr><td colspan="2" height="90%">&nbsp;</td></tr><tr valign="bottom"><td colspan="2" align="right" class="popup-footer"><input type="button" class="input-submit" onclick="selectTableasTemplate();" value="Select"/><input type="button" class="input-submit gray" onclick="closeDialog();" value="Cancel"/></td></tr></table></div></td></tr></table></div></div><?php }} ?>