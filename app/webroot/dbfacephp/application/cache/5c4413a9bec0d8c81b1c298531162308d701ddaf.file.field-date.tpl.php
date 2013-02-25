<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 18:20:05
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/form/field/field-date.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49123142750a594c51009b8-49939893%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c4413a9bec0d8c81b1c298531162308d701ddaf' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/form/field/field-date.tpl',
      1 => 1352280050,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49123142750a594c51009b8-49939893',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elementID' => 0,
    'label' => 0,
    'disabledf' => 0,
    'updatescriptenable' => 0,
    'updatescript' => 0,
    'fieldName' => 0,
    'fieldType' => 0,
    'srctype' => 0,
    'inputdateformat' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a594c52546a8_84148972',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a594c52546a8_84148972')) {function content_50a594c52546a8_84148972($_smarty_tpl) {?><div ondblclick="editf('<?php echo $_smarty_tpl->tpl_vars['elementID']->value;?>
', 10)" id="<?php echo $_smarty_tpl->tpl_vars['elementID']->value;?>
" class="field-outer-container" onMouseOver="fcm(this)" onMouseOut="fcm(this, 'true')"><ul class="label-field-container-LR"><li style="padding-left:16px"></li><li class="field-label"><label id="dispName<?php echo $_smarty_tpl->tpl_vars['elementID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</label></li><li><input id="input<?php echo $_smarty_tpl->tpl_vars['elementID']->value;?>
" disabledf='<?php echo $_smarty_tpl->tpl_vars['disabledf']->value;?>
' updatescriptenable='<?php echo $_smarty_tpl->tpl_vars['updatescriptenable']->value;?>
' updatescript='<?php echo $_smarty_tpl->tpl_vars['updatescript']->value;?>
' scriptname="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
" labelname="<?php echo $_smarty_tpl->tpl_vars['label']->value;?>
" fieldtype="<?php echo $_smarty_tpl->tpl_vars['fieldType']->value;?>
" dfname="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
" initval="" title="" srctype="<?php echo $_smarty_tpl->tpl_vars['srctype']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['label']->value;?>
" dtfmt="<?php echo $_smarty_tpl->tpl_vars['inputdateformat']->value;?>
" type="text" size="22" class="config-textfield" style="width:125px"/><a href="javascript:;"><img name="imgCalendar" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/form/date_icon.gif" width="16" height="17" border="0" title="Insert Date"/></a></li></ul></div><?php }} ?>