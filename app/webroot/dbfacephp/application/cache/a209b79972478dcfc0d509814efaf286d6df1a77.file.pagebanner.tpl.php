<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 16:16:53
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/pagebanner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185495534650a577e592f6b0-94539056%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a209b79972478dcfc0d509814efaf286d6df1a77' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/pagebanner.tpl',
      1 => 1352280090,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185495534650a577e592f6b0-94539056',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'totalrow' => 0,
    'start' => 0,
    'end' => 0,
    'nav_str' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a577e598ca40_33037153',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a577e598ca40_33037153')) {function content_50a577e598ca40_33037153($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ci_lang')) include '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application/libraries/Smarty/libs/plugins/function.ci_lang.php';
?><span class="pagebanner"><?php echo smarty_function_ci_lang(array('key'=>'strTablePageBanner','p0'=>$_smarty_tpl->tpl_vars['totalrow']->value,'p1'=>$_smarty_tpl->tpl_vars['start']->value,'p2'=>$_smarty_tpl->tpl_vars['end']->value),$_smarty_tpl);?>

<a href="javascript:;" id='btnmoreFilterDialog' onclick="DisplayMenu('moreFilterDialog', 'groupSelect')"><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/filter.gif" align="right"></img></a><br/></span><div id="gbar"><span class="pagelinks">
<?php echo $_smarty_tpl->tpl_vars['nav_str']->value;?>

[<a href="javascript:showInsertPage(getLastSelectRowNo())"><?php echo smarty_function_ci_lang(array('key'=>'strNewRecord'),$_smarty_tpl);?>
</a>]
</span><?php }} ?>