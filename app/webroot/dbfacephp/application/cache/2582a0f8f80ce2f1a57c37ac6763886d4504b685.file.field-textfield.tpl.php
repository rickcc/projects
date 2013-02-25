<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 18:20:04
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/form/field/field-textfield.tpl" */ ?>
<?php /*%%SmartyHeaderCode:71893789350a594c4d469c3-84829814%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2582a0f8f80ce2f1a57c37ac6763886d4504b685' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/form/field/field-textfield.tpl',
      1 => 1352280056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71893789350a594c4d469c3-84829814',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elementID' => 0,
    'label' => 0,
    'inputdt' => 0,
    'disabledf' => 0,
    'updatescriptenable' => 0,
    'updatescript' => 0,
    'fieldType' => 0,
    'fieldName' => 0,
    'initval' => 0,
    'isReq' => 0,
    'fieldSize' => 0,
    'srctype' => 0,
    'datasource' => 0,
    'datatype' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a594c4e117f1_86675768',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a594c4e117f1_86675768')) {function content_50a594c4e117f1_86675768($_smarty_tpl) {?><div ondblclick="editf('<?php echo $_smarty_tpl->tpl_vars['elementID']->value;?>
', 1)" id='<?php echo $_smarty_tpl->tpl_vars['elementID']->value;?>
' class='field-outer-container' onMouseOver='fcm(this)' onMouseOut="fcm(this, 'true')"><ul class='label-field-container-LR'><li style='padding-left:16px'></li><li class='field-label'><label id='dispName<?php echo $_smarty_tpl->tpl_vars['elementID']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</label></li><li><input type='text' id='input<?php echo $_smarty_tpl->tpl_vars['elementID']->value;?>
' inputdt='<?php echo $_smarty_tpl->tpl_vars['inputdt']->value;?>
' disabledf='<?php echo $_smarty_tpl->tpl_vars['disabledf']->value;?>
' updatescriptenable='<?php echo $_smarty_tpl->tpl_vars['updatescriptenable']->value;?>
' updatescript='<?php echo $_smarty_tpl->tpl_vars['updatescript']->value;?>
' labelname='<?php echo $_smarty_tpl->tpl_vars['label']->value;?>
' fieldtype='<?php echo $_smarty_tpl->tpl_vars['fieldType']->value;?>
' fieldname='<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
' initval='<?php echo $_smarty_tpl->tpl_vars['initval']->value;?>
' scriptname='<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
' name='<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
' isreq='<?php echo $_smarty_tpl->tpl_vars['isReq']->value;?>
' maxLength='<?php echo $_smarty_tpl->tpl_vars['fieldSize']->value;?>
' size='30' srctype='<?php echo $_smarty_tpl->tpl_vars['srctype']->value;?>
' datasource='<?php echo $_smarty_tpl->tpl_vars['datasource']->value;?>
' datatype='<?php echo $_smarty_tpl->tpl_vars['datatype']->value;?>
' value='<?php echo $_smarty_tpl->tpl_vars['initval']->value;?>
' class='config-textfield' style='width:150px'></li></ul></div><?php }} ?>