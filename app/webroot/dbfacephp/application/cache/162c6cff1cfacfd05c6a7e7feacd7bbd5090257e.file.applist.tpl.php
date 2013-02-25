<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 16:15:39
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/applist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:50119658750a5779b4935b5-22220447%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '162c6cff1cfacfd05c6a7e7feacd7bbd5090257e' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/applist.tpl',
      1 => 1352280012,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50119658750a5779b4935b5-22220447',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'refresh_menu' => 0,
    'apps' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a5779b90e5b7_64161165',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a5779b90e5b7_64161165')) {function content_50a5779b90e5b7_64161165($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ci_lang')) include '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application/libraries/Smarty/libs/plugins/function.ci_lang.php';
if (!is_callable('smarty_function_cycle')) include '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application/libraries/Smarty/libs/plugins/function.cycle.php';
?><html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/><link href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/style-default.css" rel="stylesheet" type="text/css"><link type="text/css" href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/c/thickbox.css" rel="stylesheet"/><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/prototype.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/jquery.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/Utils.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/rview.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/thickbox.js"></script><script tyle="text/javascript">
    function delete_app(appid) {
      document.mainForm.appid.value=appid;
      document.mainForm.action="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=app&m=delete";
      if (confirm("This operation will delete the created application, are you sure?")) {
        document.mainForm.submit();
      }    
    }
    <?php if ($_smarty_tpl->tpl_vars['refresh_menu']->value){?>
    refreshmenu();
    <?php }?>
  </script></head><body><div id="bodyColumn"><div id="navcolumn" style="margin-bottom:3px"><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=home&m=dashboard"><?php echo smarty_function_ci_lang(array('key'=>'strDashboard'),$_smarty_tpl);?>
</a> > <?php echo smarty_function_ci_lang(array('key'=>'strApplicationManagement'),$_smarty_tpl);?>
</div><form action="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
" action="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=app" method="post" name="mainForm"><input type="hidden" name="appid" value=""/></form><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=app&m=create_step1"><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/addapp.gif" align='absmiddle'>&nbsp;<?php echo smarty_function_ci_lang(array('key'=>'strCreateApplication'),$_smarty_tpl);?>
</a><table><thead><tr><th>No</th><th class="sortable">Name</th><th class="sortable">Key</th><th class="sortable">Title</th><th>Description</th><th><br/></th></tr></thead><tbody>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['apps']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?>
<tr class="<?php echo smarty_function_cycle(array('values'=>"odd,even"),$_smarty_tpl);?>
"><td><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index']+1;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['apps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['appname'];?>
</td><td><a class="thickbox" href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=app&m=editappkey&appid=<?php echo $_smarty_tpl->tpl_vars['apps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['appid'];?>
&width=450&height=150"><?php if (empty($_smarty_tpl->tpl_vars['apps']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['i']['index']]['appkey'])){?>Enable<?php }else{ ?>Disable<?php }?></a></a></td><td><?php echo $_smarty_tpl->tpl_vars['apps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['apptitle'];?>
<br></td><td><?php echo $_smarty_tpl->tpl_vars['apps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['appdesc'];?>
<br></td><td nowrap><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=app&m=duplicate&appid=<?php echo $_smarty_tpl->tpl_vars['apps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['appid'];?>
"><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/duplicate.gif" alt="Copy the application as a new one for editing." title="Copy the application as a new one for editing." align='absmiddle'>Duplicate</a>&nbsp; <a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=app&m=edit&appid=<?php echo $_smarty_tpl->tpl_vars['apps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['appid'];?>
"><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/edit.gif" alt="Edit the application" title="Edit the application." align='absmiddle'>Edit</a>&nbsp; <a href="javascript:delete_app(<?php echo $_smarty_tpl->tpl_vars['apps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['appid'];?>
);"><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/delete20.gif" alt="Delete the application" title="Delete the application" align='absmiddle'>Delete</a></td></tr>
<?php endfor; else: ?>
<tr class="odd"><td colspan="5"><span class="info-text"><?php echo smarty_function_ci_lang(array('key'=>'strNoApplicationMsg'),$_smarty_tpl);?>
</span></td></tr>
<?php endif; ?> </tbody></table></div>
<?php echo $_smarty_tpl->getSubTemplate ("analytics.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body></html><?php }} ?>