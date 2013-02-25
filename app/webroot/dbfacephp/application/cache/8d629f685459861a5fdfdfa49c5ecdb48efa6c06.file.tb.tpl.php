<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 16:04:12
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/tb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:87542028550a574eccfbd76-12532230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d629f685459861a5fdfdfa49c5ecdb48efa6c06' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/tb.tpl',
      1 => 1352280120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87542028550a574eccfbd76-12532230',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'trial' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a574ecd55d38_84891393',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a574ecd55d38_84891393')) {function content_50a574ecd55d38_84891393($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ci_lang')) include '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application/libraries/Smarty/libs/plugins/function.ci_lang.php';
?><?php if ($_smarty_tpl->tpl_vars['trial']->value){?>
<span id="persfree_anncmentdiv"><span style="padding-left:10px;padding-right:10px;background-color: rgb(220, 20, 60); color: White; text-align: center;">
<?php echo smarty_function_ci_lang(array('key'=>'strTrialTip'),$_smarty_tpl);?>
 </span></span>
<?php }?><?php }} ?>