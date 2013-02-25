<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 16:27:27
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/tabular.tpl" */ ?>
<?php /*%%SmartyHeaderCode:65926482850a57a5f5e7657-69018344%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46a350f75a08d99f00580e745e3d5f02aee3dd9b' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/tabular.tpl',
      1 => 1352280118,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65926482850a57a5f5e7657-69018344',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'phpload' => 0,
    'iframe' => 0,
    'showtoolbar' => 0,
    'appname' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a57a5f67a586_76501357',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a57a5f67a586_76501357')) {function content_50a57a5f67a586_76501357($_smarty_tpl) {?><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> <?php if ($_smarty_tpl->tpl_vars['phpload']->value){?> <link type="text/css" href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/load.php?load=db.css" rel="stylesheet"/><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/load.php?load=jquery.js,prototype.js,rview.js,Utils.js,tommick.js"></script> <?php }else{ ?> <link type="text/css" media="all" rel="stylesheet" href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/db.css"/><link type="text/css" href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/te.css" rel="stylesheet"/><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/jquery.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/prototype.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/rview.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/Utils.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/tommick.js"></script> <?php }?>
</head><body>
<?php if (!$_smarty_tpl->tpl_vars['iframe']->value){?>
<?php if ($_smarty_tpl->tpl_vars['showtoolbar']->value){?>
<div id="navcolumn" style="margin-left:5px;width:95%"><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=home&m=dashboard">Dashboard</a> > <?php echo $_smarty_tpl->tpl_vars['appname']->value;?>
</div>
<?php }?>
<?php }?>
<div style="margin-left:5px">
<?php echo $_smarty_tpl->getSubTemplate ("advrep_cell.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div></body></html><?php }} ?>