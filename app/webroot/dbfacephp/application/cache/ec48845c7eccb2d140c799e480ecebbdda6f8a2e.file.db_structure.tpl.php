<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 18:18:46
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/db_structure.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198080246850a594768ccb63-49610893%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec48845c7eccb2d140c799e480ecebbdda6f8a2e' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/db_structure.tpl',
      1 => 1352280032,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198080246850a594768ccb63-49610893',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'has_sqlconfirm' => 0,
    'dbname' => 0,
    'tables' => 0,
    'table' => 0,
    'num_fields' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a59476ad0258_05259220',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a59476ad0258_05259220')) {function content_50a59476ad0258_05259220($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ci_lang')) include '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application/libraries/Smarty/libs/plugins/function.ci_lang.php';
if (!is_callable('smarty_function_cycle')) include '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application/libraries/Smarty/libs/plugins/function.cycle.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/structure.css"/><link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/prettify.css"/><link type="text/css" href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/c/thickbox.css" rel="stylesheet"/><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/rview.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/jquery.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/thickbox.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/prettify.js"></script><script type="text/javascript">
  function check_tbl() {
    var tblname = document.getElementById('tblname').value.replace(/(^\s*)|(\s*$)/g, "");
    var tblnumfields = document.getElementById('tblnumfields').value.replace(/(^\s*)|(\s*$)/g, "");
    if (tblname == "") {
      alert("The table name is empty! ");
      return false;
    }
    if (isNaN(tblnumfields)) {
      alert("Please enter a valid number!");
      return false;
    }
    return true;
  }
</script></head><body style="margin-top:0px"><div id="navcolumn"><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=home&m=dashboard"><?php echo smarty_function_ci_lang(array('key'=>"strDashboard"),$_smarty_tpl);?>
</a> > Database Structure</div> <?php if ($_smarty_tpl->tpl_vars['has_sqlconfirm']->value==true){?><?php echo $_smarty_tpl->getSubTemplate ("sqlconfirm.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?> <form method="post" action="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=structure" name="tablesForm" id="tablesForm"><input type="hidden" name="db" value="<?php echo $_smarty_tpl->tpl_vars['dbname']->value;?>
"/><table class="data" style="border:1px solid #666666;margin-top:5px"><thead><tr><th></th><th>Table</th><th colspan="5">Action</th><th>Records</th><th>Type</th><th>Collation</th><th>Size</th></tr></thead><tbody> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tables']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?> <tr class="<?php echo smarty_function_cycle(array('values'=>"odd,even"),$_smarty_tpl);?>
"><td align="center"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index']+1;?>
</td><th><label for="checkbox_tbl_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index']+1;?>
" title="<?php echo $_smarty_tpl->tpl_vars['tables']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['TABLE_NAME'];?>
" style=""><?php echo $_smarty_tpl->tpl_vars['tables']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['TABLE_NAME'];?>
</label></th><td align="center"><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=viewtable&viewname=<?php echo $_smarty_tpl->tpl_vars['tables']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['TABLE_NAME'];?>
"><img class="icon" width="16" height="16" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/s/b_browse.png" alt="Browse" title="Browse"/></a></td><td align="center"><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=tablestructure&viewname=<?php echo $_smarty_tpl->tpl_vars['tables']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['TABLE_NAME'];?>
"><img class="icon" width="16" height="16" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/s/b_props.png" alt="Structure" title="Structure"/></a></td><td align="center"><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=sql&sql=TRUNCATE `<?php echo $_smarty_tpl->tpl_vars['tables']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['TABLE_NAME'];?>
`&message=<?php echo $_smarty_tpl->tpl_vars['tables']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['TABLE_NAME'];?>
+has+been+emptied" onclick="return confirmLink(this, 'TRUNCATE `<?php echo $_smarty_tpl->tpl_vars['tables']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['TABLE_NAME'];?>
`', '<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=structure')"><img class="icon" width="16" height="16" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/s/b_empty.png" alt="Empty" title="Empty"/></a></td><td align="center"><a class="thickbox" href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=duplicatetable&viewname=<?php echo $_smarty_tpl->tpl_vars['tables']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['TABLE_NAME'];?>
&width=450&height=150"><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/duplicate.gif" alt="Duplicate Table" title="Duplicate Table" class="icon" width="16" height="16"/></a></td><td align="center"><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=sql&sql=DROP TABLE `<?php echo $_smarty_tpl->tpl_vars['tables']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['TABLE_NAME'];?>
`&message=<?php echo $_smarty_tpl->tpl_vars['tables']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['TABLE_NAME'];?>
+has+been+dropped" onclick="return confirmLink(this, 'DROP TABLE `<?php echo $_smarty_tpl->tpl_vars['tables']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['TABLE_NAME'];?>
`', '<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=structure')"><img class="icon" width="16" height="16" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/s/b_drop.png" alt="Drop" title="Drop"/></a></td><td class="value"><?php echo $_smarty_tpl->tpl_vars['tables']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['TABLE_ROWS'];?>
</td><td nowrap="nowrap"><?php echo $_smarty_tpl->tpl_vars['tables']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['ENGINE'];?>
</td><td nowrap="nowrap"><?php echo $_smarty_tpl->tpl_vars['tables']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['TABLE_COLLATION'];?>
</td><td class="value"><?php echo $_smarty_tpl->tpl_vars['tables']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['DATA_LENGTH'];?>
</td></tr> <?php endfor; endif; ?> </tbody></table><div class="clearfloat"></div></form><form method="post" action="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=structure&m=createtable" onsubmit="javascript:return check_tbl();"><fieldset><legend><img class="icon" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/addapp.gif" width="16" height="16"/>Create new table on database <a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=structure"><?php echo $_smarty_tpl->tpl_vars['dbname']->value;?>
</a></legend><input type="hidden" name="db" value="<?php echo $_smarty_tpl->tpl_vars['dbname']->value;?>
"/><div class="formelement">Name:<input class="config-textfield" type="text" id="tblname" name="table" maxlength="64" size="30" value="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
"/></div><div class="formelement">Number of fields:<input class="config-textfield" id="tblnumfields" type="text" name="num_fields" size="2" value="<?php echo $_smarty_tpl->tpl_vars['num_fields']->value;?>
"/></div><div class="clearfloat"></div></fieldset><fieldset class="tblFooters"><input type="submit" class="input-submit" value="Go"/></fieldset></form></body></html><?php }} ?>