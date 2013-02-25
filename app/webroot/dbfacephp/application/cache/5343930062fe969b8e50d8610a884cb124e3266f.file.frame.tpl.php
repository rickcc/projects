<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 16:04:50
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/frame.tpl" */ ?>
<?php /*%%SmartyHeaderCode:140404980050a57512321ac0-66865787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5343930062fe969b8e50d8610a884cb124e3266f' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/frame.tpl',
      1 => 1352280070,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140404980050a57512321ac0-66865787',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nextaction' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a57512465916_08687128',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a57512465916_08687128')) {function content_50a57512465916_08687128($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd"><html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/><title><?php echo $_smarty_tpl->getConfigVariable('title');?>
</title><meta http-equiv="Pragma" content="no-cache"/><meta http-equiv="Cache-Control" content="no-cache"/><link REL="SHORTCUT ICON" href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/favorite.ico" type="image/x-icon"/></head><frameset rows="30,*" frameborder="1" framespacing="1" topmargin="0" leftmargin="0" marginheight="0" marginwidth="0" border="1" bordercolor="#ffffff"><frame name="bar" src="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=bar" frameborder=0 noresize scrolling=no><frameset id="mainset" cols="178,5,*" frameborder="0" framespacing="1" topmargin="0" leftmargin="0" marginheight="0" marginwidth="0" border="1" bordercolor="#ffffff"><frame name="menu" src="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=home&m=menu" frameborder="0" noresize><frame name="function" src="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=spliter" frameborder="0" scrolling="no" marginwidth="0" marginheight="0" border=0 framespacing="0" noresize> <?php if ($_smarty_tpl->tpl_vars['nextaction']->value){?> <frame name="content" src="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=<?php echo $_smarty_tpl->tpl_vars['nextaction']->value;?>
" frameborder="0" noresize> <?php }else{ ?> <frame name="content" src="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=home&m=dashboard" frameborder="0" noresize> <?php }?> </frameset><noframes><body><p>This page uses frames, but your browser doesn't support them.</p></body></noframes></frameset></html><?php }} ?>