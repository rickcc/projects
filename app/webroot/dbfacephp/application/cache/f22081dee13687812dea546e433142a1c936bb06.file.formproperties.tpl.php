<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 18:12:52
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/form/formproperties.tpl" */ ?>
<?php /*%%SmartyHeaderCode:131175875850a593144cddf9-86844404%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f22081dee13687812dea546e433142a1c936bb06' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/form/formproperties.tpl',
      1 => 1352280064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131175875850a593144cddf9-86844404',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a593144fb029_97899410',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a593144fb029_97899410')) {function content_50a593144fb029_97899410($_smarty_tpl) {?><div id="formpropdiv" style="display:none;"><div class="popup-outer-table" style="width:500px;"><table width="100%" cellpadding="0" cellspacing="0" class="popup-header"><tr align="left" valign="top" onmousedown="captureDialog(event)"><td width="80%">Edit Form Properties...</td><td width="5%" align="right" valign="bottom"><a href="javascript:;" onClick="closeDialog()" class="close">&nbsp;</a></td></tr></table><table width="100%" cellpadding="0" cellspacing="0" border="0" class="popup-inner-table"><tr><td align="left" valign="top"><div style="overflow:auto; max-height:410px;"><form id="formprop" name="formprop" method="post" style="height:100%" action="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=form&m=update"><input type="hidden" name="formID" id="formID" value=""/><table width="100%" height="100%" border="0" cellpadding="0" cellspacing="2"><tr align="left" valign="top"><td width="25%" height="1" valign="middle" nowrap class="label"><label for="editfname"><strong>Form Name:</strong></label></td><td width="75%" height="35px" valign="top"><input type='text' class="config-textfield" id="editfname" name="editformname" style="width:100%" value='Untitled Form'/></td></tr><tr align="left" valign="top"><td height="1" class="label" nowrap><label for="fmsucmsg"><strong>Form Description:</strong></label></td><td height="60px"><textarea cols="3" rows='5' id="fmsucmsg" name="formsucmsg" value='Untitled Form.' style="width:100%" class="config-textarea">This is an untitled form.</textarea></td></tr><tr><td class="info-text" colspan="2"><strong><a class="subopen" href="javascript:switchElement('loadactiondiv');">Edit/Hide Load Action</a></strong>&nbsp;<a href="javascript:openQB('copyToLoadAction');"><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/sql-query.png" border="0" alt="open query builder" title="open query builder" align='absmiddle'/></a>&nbsp;<img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/s/b_help.png" align="absmiddle" tooltip="this is a sample text" onmouseover="javascript:js_show_tooltip(this)" style="border:0;"/></td></tr><tr align="left" valign="top"><td colspan="2"><div id="loadactiondiv" style="display:none"><textarea cols="3" rows='5' id="loadAction" name="loadAction" style="width:100%" class="config-textarea"></textarea></div></td></tr><tr align="left" valign="top"><td colspan="2"><input type="checkbox" name="copynew" id="copynew" style="vertical-align:middle"><span class="info-text">copy as new form.</span></td></tr><tr valign="bottom"><td colspan="2" align="right" class="popup-footer"><input type="button" class="input-submit" onclick="subFormProp();" value="Done"/><input type="button" class="input-submit gray" onclick="closeDialog();" value="Cancel"/></td></tr></table></form></div></td></tr></table></div></div><?php }} ?>