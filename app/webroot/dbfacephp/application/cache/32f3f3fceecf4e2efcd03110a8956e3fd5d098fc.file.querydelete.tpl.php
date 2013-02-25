<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 16:05:08
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/qb/querydelete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:206550287550a57524059494-32043472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32f3f3fceecf4e2efcd03110a8956e3fd5d098fc' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/qb/querydelete.tpl',
      1 => 1352280100,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206550287550a57524059494-32043472',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a575240a4651_16646646',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a575240a4651_16646646')) {function content_50a575240a4651_16646646($_smarty_tpl) {?><div id="querydeldiv" style="display:none;"><div class="popup-outer-table" style="width:500px"><table width="100%" cellpadding="0" cellspacing="0" class="popup-header"><tr align="left" valign="top" onmousedown="captureDialog(event)"><td width="80%">Select a Query to Delete</td><td width="5%" align="right" valign="bottom"><a href="javascript:void(0);" onClick="closeDialog()" class="close">&nbsp;</a></td></tr></table><table width="100%" cellpadding="0" cellspacing="0" border="0" class="popup-inner-table"><tr><td align="left" valign="top"><div style="overflow:auto; max-height:410px;"><form id="formprop" name="formprop" method="post" style="height:100%"><table width="100%" height="100%" border="0" cellpadding="0" cellspacing="2"><tr align="left" valign="top"><td width="25%" height="1" valign="middle" nowrap class="label"><label for="editfname"><strong>Query ID&Name:</strong></label></td><td width="75%" height="35px" valign="top"><select id="allqblistd" class="config-picklist" id="allqblistd" style="width:100%"></select><span class="info-text">Please select a query from the above list to delete. <br/>Click <a href="javascript:getsqldetail();">here</a> to open/close sql content detail.</span></td></tr><tr><td colspan="2" style="font-size:10px">this will lose any unsaved changes to the current query.</p><b>Do you wish to continue?</b></td></tr><tr id="sqldetaildiv" style="align:center;display:none"><td colspan="2"><textarea class="config-textarea" id="sqlcontent" name="sqlcontent" style="width:100%" rows="10"></textarea><br/><input type="button" class="inputsubmit" value="Update" onclick="javascript:updatequery();"/></td></tr><tr valign="bottom"><td colspan="2" align="right" class="popup-footer"><input type="button" class="inputsubmit" onclick="deleteQuery();" value="Delete"/><input type="button" class="inputbutton inputaux" onclick="closeDialog();" value="Cancel"/></td></tr></table></form></div></td></tr></table></div></div><?php }} ?>