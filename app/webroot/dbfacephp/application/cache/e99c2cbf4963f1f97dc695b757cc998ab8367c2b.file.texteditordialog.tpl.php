<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 18:12:52
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/form/texteditordialog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:58900626550a5931463a0c3-70026813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e99c2cbf4963f1f97dc695b757cc998ab8367c2b' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/form/texteditordialog.tpl',
      1 => 1352280070,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58900626550a5931463a0c3-70026813',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a5931465e723_83340955',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a5931465e723_83340955')) {function content_50a5931465e723_83340955($_smarty_tpl) {?><div id="plaintxtdiv" style="display:none;position: absolute;top: 100px;left: 100px; z-index: 102;"><div class="popup-outer-table" style="width:600px"><div class="popup-inner-table" style="height:300px"><form id="descform" name="descform" method="post" onSubmit="if(!submitDesc()){return false};" action="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=form&m=editfield"><input type="hidden" name="update" value='false'/><input type="hidden" name="fcid" value=''/><input type="hidden" name="coldisp" value=''/><input type="hidden" name="before" value=''/><input type="hidden" name="fctype" value='14'/><input type="hidden" name="fieldtype" value='14'/><table id="plaintable" width="100%" height="96%" cellpadding="0" cellspacing="0" border="0"><tr align="left" valign="top" class="popup-header" onmousedown="setCurrentTaskDef(document.getElementById('plaintxtdiv'));captureTaskDef(event);"><td width="64%" height="1" style="font-size:12px">Add notes to help your users while filling out the form.</td><td width="36%" align="right" valign="middle"><a href="javascript:;" onClick="clDescPop();" class="close">&nbsp;</a></td></tr><tr><td colspan="2" valign="top" height="220"><?php echo $_smarty_tpl->getSubTemplate ("inc/texteditor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</td></tr><tr><td nowrap colspan="2" align="right" valign="bottom"><input type="button" class="input-submit" onclick="submitDesc();" value="Done"/><input type="button" class="input-submit gray" onclick="clDescPop();" value="Cancel"/></td></tr></table></form></div></div></div><?php }} ?>