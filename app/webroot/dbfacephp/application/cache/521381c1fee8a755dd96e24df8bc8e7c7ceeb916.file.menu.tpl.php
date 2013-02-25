<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 16:04:51
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:106880878850a575131cc6a5-20580745%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '521381c1fee8a755dd96e24df8bc8e7c7ceeb916' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/menu.tpl',
      1 => 1352280084,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106880878850a575131cc6a5-20580745',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'phpload' => 0,
    'hidetablesection' => 0,
    'strDbSectionTitle' => 0,
    'dbname' => 0,
    'tables' => 0,
    'priv' => 0,
    'strAppSectionTitle' => 0,
    'apps' => 0,
    'showAbout' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a575134ec2c7_82054212',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a575134ec2c7_82054212')) {function content_50a575134ec2c7_82054212($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ci_lang')) include '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application/libraries/Smarty/libs/plugins/function.ci_lang.php';
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd"><html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/><title><?php echo $_smarty_tpl->getConfigVariable('title');?>
</title> <?php if ($_smarty_tpl->tpl_vars['phpload']->value){?> <link type="text/css" href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/load.php?load=style-default.css" rel="stylesheet"/><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/load.php?load=prototype.js,tommick.js,Utils.js,rview.js"></script><script src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/global.js" type="text/javascript"></script> <?php }else{ ?> <link href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/style-default.css" rel="stylesheet" type="text/css"><script src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/prototype.js" type="text/javascript"></script><script src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/tommick.js" type="text/javascript"></script><script src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/global.js" type="text/javascript"></script><script src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/Utils.js" type="text/javascript"></script><script src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/rview.js" type="text/javascript"></script> <?php }?> <style>html{overflow-y:scroll;}</style></head><body><div id="dl-navigation" class="clearfix"><div id="xNav"><form action="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=req" method="post" name="menuform" target="content"><input type="hidden" name="requestID" value=""/> <?php if (!$_smarty_tpl->tpl_vars['hidetablesection']->value){?> <div class="xNavGrp" id="nav_grp_tables"><h5><a href="javascript:;"><?php if ($_smarty_tpl->tpl_vars['strDbSectionTitle']->value){?><?php echo $_smarty_tpl->tpl_vars['strDbSectionTitle']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['dbname']->value;?>
<?php }?></a></h5><ul id="categories" id="cat_grp_tables"> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
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
?> <li><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=viewtable&viewname=<?php echo $_smarty_tpl->tpl_vars['tables']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
" target="content"><?php echo $_smarty_tpl->tpl_vars['tables']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['menuname'];?>
</a></li> <?php endfor; endif; ?> </ul></div> <?php }?> <div class="xNavGrp" id="nav_grp_apps"><h5><?php if ($_smarty_tpl->tpl_vars['priv']->value==1||$_smarty_tpl->tpl_vars['priv']->value==2){?><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=app&m=applist" target="content"><?php if ($_smarty_tpl->tpl_vars['strAppSectionTitle']->value){?><?php echo $_smarty_tpl->tpl_vars['strAppSectionTitle']->value;?>
<?php }else{ ?><?php echo smarty_function_ci_lang(array('key'=>'strApplications'),$_smarty_tpl);?>
<?php }?></a><?php }else{ ?><a href="javascript:;"><?php if ($_smarty_tpl->tpl_vars['strAppSectionTitle']->value){?><?php echo $_smarty_tpl->tpl_vars['strAppSectionTitle']->value;?>
<?php }else{ ?><?php echo smarty_function_ci_lang(array('key'=>'strApplications'),$_smarty_tpl);?>
<?php }?></a><?php }?></h5><ul id="categories" id="cat_grp_apps"> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
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
?> <li><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=app&appid=<?php echo $_smarty_tpl->tpl_vars['apps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['appid'];?>
" target="content"><?php echo $_smarty_tpl->tpl_vars['apps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['appname'];?>
</a></li> <?php endfor; else: ?> <?php if ($_smarty_tpl->tpl_vars['priv']->value==1||$_smarty_tpl->tpl_vars['priv']->value==2){?> <li><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=app&m=create_step1" target="content"><?php echo smarty_function_ci_lang(array('key'=>'strCreateApplication'),$_smarty_tpl);?>
</a></li> <?php }else{ ?> <li><a href="javascript:;">no application found</a></li> <?php }?> <?php endif; ?> </ul></div> <?php if ($_smarty_tpl->tpl_vars['priv']->value==1||$_smarty_tpl->tpl_vars['priv']->value==2){?> <div class="xNavGrp" id="nav_grp_tools"><h5><a href="javascript:;"><?php echo smarty_function_ci_lang(array('key'=>'strSettingsAndTools'),$_smarty_tpl);?>
</a></h5><ul id="categories"><li><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=conn&m=listconn" target="content"><?php echo smarty_function_ci_lang(array('key'=>'strAdministration'),$_smarty_tpl);?>
</a></li><li><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=form&m=show" target="content"><?php echo smarty_function_ci_lang(array('key'=>'strFormbuilder'),$_smarty_tpl);?>
</a></li><li><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=qb&m=show" target="content"><?php echo smarty_function_ci_lang(array('key'=>'strQuerybuilder'),$_smarty_tpl);?>
</a></li><li><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=req&m=initiudbuilder" target="content"><?php echo smarty_function_ci_lang(array('key'=>'strDmlbuilder'),$_smarty_tpl);?>
</a></li><li><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=webconsole" target="content"><?php echo smarty_function_ci_lang(array('key'=>'strWebConsole'),$_smarty_tpl);?>
</a></li><li><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=sqllab" target="content"><?php echo smarty_function_ci_lang(array('key'=>'strSQLEditor'),$_smarty_tpl);?>
</a></li><li><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=structure" target="content"><?php echo smarty_function_ci_lang(array('key'=>'strDatabaseStructure'),$_smarty_tpl);?>
</a></li><li><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=privileges" target="content"><?php echo smarty_function_ci_lang(array('key'=>'strDatabasePrivileges'),$_smarty_tpl);?>
</a></li><li><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=importandexport" target="content"><?php echo smarty_function_ci_lang(array('key'=>'strBackupandRestore'),$_smarty_tpl);?>
</a></li><li><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=showlogs" target="content"><?php echo smarty_function_ci_lang(array('key'=>'strShowLog'),$_smarty_tpl);?>
</a></li><li><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=admin" target="content"><?php echo smarty_function_ci_lang(array('key'=>'strDbFacePHPConfig'),$_smarty_tpl);?>
</a></li> <?php if ($_smarty_tpl->tpl_vars['showAbout']->value){?> <li><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=about" target="content"><?php echo smarty_function_ci_lang(array('key'=>'strAbout'),$_smarty_tpl);?>
</a></li> <?php }?> </ul></div> <?php }?> </form></div></div>
<?php echo $_smarty_tpl->getSubTemplate ("analytics.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body></html><?php }} ?>