<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 16:41:26
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/error/syserror.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3135369350a57da62df6d6-78492034%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d3280294aac17ae145f6cc90312a65ac3cfe125' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/error/syserror.tpl',
      1 => 1352280040,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3135369350a57da62df6d6-78492034',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'iframe' => 0,
    'message_css' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a57da6473549_94057559',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a57da6473549_94057559')) {function content_50a57da6473549_94057559($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ci_lang')) include '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application/libraries/Smarty/libs/plugins/function.ci_lang.php';
?><html><head><title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title><link rel="stylesheet" href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/rview-common.css" type="text/css" media="all"/></head><body <?php if ($_smarty_tpl->tpl_vars['iframe']->value){?>style="margin-left:auto;margin-right:auto;width:100%"<?php }else{ ?>style="width:90%;margin-top:0px;margin-left:5px"<?php }?>>
<?php if (!$_smarty_tpl->tpl_vars['iframe']->value){?>
<div id="navcolumn"><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=home&m=dashboard"><?php echo smarty_function_ci_lang(array('key'=>'strDashboard'),$_smarty_tpl);?>
</a> ><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=app&m=applist"><?php echo smarty_function_ci_lang(array('key'=>'strApplicationManagement'),$_smarty_tpl);?>
</a></div>
<?php }?>
<div class="<?php echo $_smarty_tpl->tpl_vars['message_css']->value;?>
"><b><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</b><br/><span><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</span></div></body></html><?php }} ?>