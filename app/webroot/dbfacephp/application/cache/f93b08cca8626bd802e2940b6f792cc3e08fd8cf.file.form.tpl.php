<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 18:12:52
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16947107050a59314242995-08848050%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f93b08cca8626bd802e2940b6f792cc3e08fd8cf' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/form.tpl',
      1 => 1352280044,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16947107050a59314242995-08848050',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'phpload' => 0,
    'iframe' => 0,
    'closeTrigger' => 0,
    'withouttitle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a593143956f8_90879659',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a593143956f8_90879659')) {function content_50a593143956f8_90879659($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ci_lang')) include '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application/libraries/Smarty/libs/plugins/function.ci_lang.php';
?><html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/><title>Form Builder</title> <?php if ($_smarty_tpl->tpl_vars['phpload']->value){?> <link type="text/css" href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/load.php?load=fb.css" rel="stylesheet"/><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/load.php?load=prototype.js,innerxhtml.js,jquery.js,tommick.js,rview.js,fb.js,Utils.js,texteditor.js"></script> <?php }else{ ?> <link href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/fb.css" rel="stylesheet" type="text/css"><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/prototype.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/jquery.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/tommick.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/rview.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/fb.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/Utils.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/texteditor.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/innerxhtml.js"></script> <?php }?> <script type="text/javascript">
    var MainContent;
    var currOrd;
    $j(document).ready(function() {
      selectForm(-1);
    });
    var iframe = false;
    <?php if ($_smarty_tpl->tpl_vars['iframe']->value){?>
    iframe = true;
    <?php }?>
  </script></head><body style="margin-top:0px;margin-left:5px" <?php if ($_smarty_tpl->tpl_vars['closeTrigger']->value){?>Onbeforeunload="javascript:<?php echo $_smarty_tpl->tpl_vars['closeTrigger']->value;?>
;"<?php }?>>
<?php if (!$_smarty_tpl->tpl_vars['withouttitle']->value){?>
<div id="navcolumn"><a href="./index.php?c=home&m=dashboard"><?php echo smarty_function_ci_lang(array('key'=>'strDashboard'),$_smarty_tpl);?>
</a> > Form Builder</div>
<?php }?>
<div style="margin-top:8px"><a href="javascript:shformprop();" class="tm-formbutton">Form Properties</a><a href="javascript:saveForm();" class="tm-formbutton">Save the Form</a><a href="javascript:showAllForms();" class="tm-formbutton">Select a Form to Edit</a><a href="javascript:showAllTables();" class="tm-formbutton">Auto Generate Form for Table</a></div><hr align="left" style="margin-top:2px;margin-bottom:2px"/>
<?php echo $_smarty_tpl->getSubTemplate ("inc/loading.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<table width="100%" border="0" cellpadding="0" cellspacing="0"><tr><?php echo $_smarty_tpl->getSubTemplate ("form/formtoolbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</tr><tr><td id="cachecontainer"><?php echo $_smarty_tpl->getSubTemplate ("form/formmenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</td></tr></table><div style="visibility:hidden;border:1px dashed #E3805E" id="dotlayer"></div><div id="hiddendiv" style="position:absolute;left:0px;top:0px;visibility:hidden;z-index:1">Untitled Form</div>
<?php echo $_smarty_tpl->getSubTemplate ("form/fieldeditmenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("form/formproperties.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("form/selectformedit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("form/selecttableedit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("form/fieldproperties.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("form/texteditordialog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="addfieldinfo" style="position:absolute;display:none"></div><div class="field-action" id="actionsdiv" style="display:none;position:absolute;" onmouseover="movropt();" onmouseout="moutopt();"></div>
<?php echo $_smarty_tpl->getSubTemplate ("analytics.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body></html><?php }} ?>