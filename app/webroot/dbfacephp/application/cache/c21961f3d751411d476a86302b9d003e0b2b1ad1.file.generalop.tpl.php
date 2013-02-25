<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 18:14:22
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/generalop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:187452622850a5936e620640-36532206%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c21961f3d751411d476a86302b9d003e0b2b1ad1' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/generalop.tpl',
      1 => 1352280072,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187452622850a5936e620640-36532206',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'iframe' => 0,
    'appname' => 0,
    'appid' => 0,
    'searchFormHTML' => 0,
    'apptype' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a5936e789f72_26153389',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a5936e789f72_26153389')) {function content_50a5936e789f72_26153389($_smarty_tpl) {?><html><head><meta http-equiv='content-type' content='text/html;charset=UTF-8'/><link href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/style-default.css" rel="stylesheet" type="text/css"><link href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/te.css" rel="stylesheet" type="text/css"><link href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/c/theme.css" rel="stylesheet" type="text/css"><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/rview.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/prototype.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/jquery.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/Utils.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/calendar.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/calendar-en.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/calendar-setup.js"></script></head><body><div id="bodyColumn">
<?php if (!$_smarty_tpl->tpl_vars['iframe']->value){?>
<div id="navcolumn" style="margin:0px"><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=home&m=dashboard">Dashboard</a> > <?php echo $_smarty_tpl->tpl_vars['appname']->value;?>
<img src='<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/help.gif' align='absmiddle' onmouseover='javascript:openHelpTip(this, 3, "<?php echo $_smarty_tpl->tpl_vars['appid']->value;?>
");' onmouseout='javascript:closeHelpTip();'/></div>
<?php }?>
<form action="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=app" method="post" id="mainForm" name="mainForm"> <?php if ($_smarty_tpl->tpl_vars['searchFormHTML']->value){?> <div id="searchForm" style="margin-bottom:10px"><?php echo $_smarty_tpl->tpl_vars['searchFormHTML']->value;?>
</div> <?php }?> <div id="error" style="display:none"></div><div id="dataset" class="borderbrown" style="overflow:auto;display:none;" cellpadding="0" cellspacing="0"></div><input type="hidden" name="action" value="submitform"><input type="hidden" name="appid" value="<?php echo $_smarty_tpl->tpl_vars['appid']->value;?>
"/><input type="hidden" name="apptype" value="<?php echo $_smarty_tpl->tpl_vars['apptype']->value;?>
"/><input type="hidden" name="rowNo" id="rowNo" value=""></form></div>
<?php echo $_smarty_tpl->getSubTemplate ("analytics.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body></html>
<?php if ($_smarty_tpl->tpl_vars['searchFormHTML']->value){?>
<script type="text/javascript">$('mainForm').focusFirstElement();</script>
<?php }?><?php }} ?>