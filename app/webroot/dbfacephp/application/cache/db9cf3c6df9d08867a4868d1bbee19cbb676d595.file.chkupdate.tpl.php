<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 16:04:12
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/chkupdate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:70270971350a574ece37f95-43110326%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db9cf3c6df9d08867a4868d1bbee19cbb676d595' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/chkupdate.tpl',
      1 => 1352280022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70270971350a574ece37f95-43110326',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'checkupdate' => 0,
    'u' => 0,
    'v' => 0,
    'token' => 0,
    'edition' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a574eceaed10_04422759',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a574eceaed10_04422759')) {function content_50a574eceaed10_04422759($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['checkupdate']->value){?>
<div style="visibility:hidden"><img src="http://www.dbfacephp.com/apps/index.php?c=chkupdate&u=<?php echo $_smarty_tpl->tpl_vars['u']->value;?>
&v=<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
&token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
&edition=<?php echo $_smarty_tpl->tpl_vars['edition']->value;?>
" width="0" height="0"/></div>
<?php }?><?php }} ?>