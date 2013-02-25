<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 18:12:52
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/form/fieldproperties.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3847397150a593145a2a75-35593900%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb408dd5cc2ce9e2aaa2df5781a8a11a1f61a13f' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/form/fieldproperties.tpl',
      1 => 1352280062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3847397150a593145a2a75-35593900',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a593145ca735_45081202',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a593145ca735_45081202')) {function content_50a593145ca735_45081202($_smarty_tpl) {?><div id="props" style="display:none;"><div class="popup-outer-table"><table cellpadding="0" cellspacing="0" border="0" width="550px"><tr align="left" valign="top" class="popup-header" onmousedown="captureDialog(event)"><td width="80%" id="dialogtitle" style="font-size:12px"></td><td width="5%" align="right" valign="middle"><a href="javascript:;" onClick="closeDialog()" class="close">&nbsp;</a></td></tr><tr><td colspan="2" height="100%"><form id="properties" name="properties" method="post" action="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=form&m=editfield" style="margin:0px; padding:0px"><input type="hidden" name="update" value='false'/><input type="hidden" name="fcid" value=''/><input type="hidden" name="fctype" value=''/><input type="hidden" id="fields" name="fieldtype"/><table cellpadding="0" cellspacing="0" border="0" class="popup-inner-table" width="100%"><tr><td><?php echo $_smarty_tpl->getSubTemplate ("form/fieldbasetable.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</td></tr><tr><td><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="width:1px">&nbsp;</td><td height="35" class="popup-footer" width="100%" nowrap style="padding-left:0px;padding-right:0px;padding-top:0px;padding-bottom:0px;"><table cellpadding="0" cellspacing="0" width="100%"><tr valign="middle"><td height="30" align="right" valign="middle" nowrap width="100%"><input type="button" class="input-submit" onclick="javascript:fb_submitField();" value="Done"/><input type="button" class="input-submit gray" onclick="closeDialog();" value="Cancel"/></td></tr></table></td><td style="width:1px">&nbsp;</td></tr></table></td></tr></table></form></td></tr></table></div></div><?php }} ?>