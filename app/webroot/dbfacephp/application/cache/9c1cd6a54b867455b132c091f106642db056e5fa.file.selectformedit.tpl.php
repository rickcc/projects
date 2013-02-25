<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 18:12:52
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/form/selectformedit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:104554599250a593145227d1-11975055%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c1cd6a54b867455b132c091f106642db056e5fa' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/form/selectformedit.tpl',
      1 => 1352280066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104554599250a593145227d1-11975055',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a593145404e6_14442355',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a593145404e6_14442355')) {function content_50a593145404e6_14442355($_smarty_tpl) {?><div id="formallpdiv" style="display:none;"><div class="popup-outer-table" style="width:500px"><table width="100%" cellpadding="0" cellspacing="0" class="popup-header"><tr align="left" valign="top" onmousedown="captureDialog(event)"><td width="80%">Select a Form to Edit...</td><td width="5%" align="right" valign="bottom"><a href="javascript:;" onClick="closeDialog()" class="close">&nbsp;</a></td></tr></table><table width="100%" cellpadding="0" cellspacing="0" border="0" class="popup-inner-table"><tr><td align="left" valign="top"><div style="overflow:auto;max-height:410px;"><input type="hidden" id="formID" value=""/><table width="100%" height="100%" border="0" cellpadding="0" cellspacing="2"><tr align="left" valign="top"><td width="25%" height="1" valign="middle" nowrap class="label"><label for="editfname"><strong>Form ID&Label:</strong></label></td><td width="75%" height="35px" valign="top"><select id="allformlist" class='config-picklist' style='width:100%'></select><span class="info-text">Please select a form from the above list to edit.or<br/><a href="javascript:;" onclick="javascript:deleteForm(0);">click here to delete the selected form</a>.</span></td></tr><tr><td colspan="2" height="90%">&nbsp;</td></tr><tr valign="bottom"><td colspan="2" align="right" class="popup-footer"><input type="button" class="input-submit" onclick="selectForm();" value="Select"/><input type="button" class="input-submit gray" onclick="closeDialog();" value="Cancel"/></td></tr></table></div></td></tr></table></div></div><?php }} ?>