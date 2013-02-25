<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 18:20:04
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/form/field/field-dropdown.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105580020850a594c4ec5397-24657356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb50881d5355cc70850af7c1bbf2a6724b9b5d48' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/form/field/field-dropdown.tpl',
      1 => 1352280050,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105580020850a594c4ec5397-24657356',
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
    'fieldType' => 0,
    'fieldName' => 0,
    'initval' => 0,
    'isReq' => 0,
    'srctype' => 0,
    'datasource' => 0,
    's_datasource' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a594c503efb1_63208659',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a594c503efb1_63208659')) {function content_50a594c503efb1_63208659($_smarty_tpl) {?><div ondblclick="editf('<?php echo $_smarty_tpl->tpl_vars['elementID']->value;?>
', 100)" id="<?php echo $_smarty_tpl->tpl_vars['elementID']->value;?>
" class="field-outer-container" onMouseOver="fcm(this)" onMouseOut="fcm(this, 'true')"><ul class="label-field-container-LR"><li style="padding-left:16px"></li><li class="field-label"><label id="dispName<?php echo $_smarty_tpl->tpl_vars['elementID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</label></li><li><select id="input<?php echo $_smarty_tpl->tpl_vars['elementID']->value;?>
" disabledf='<?php echo $_smarty_tpl->tpl_vars['disabledf']->value;?>
' updatescriptenable='<?php echo $_smarty_tpl->tpl_vars['updatescriptenable']->value;?>
' updatescript='<?php echo $_smarty_tpl->tpl_vars['updatescript']->value;?>
' labelname="<?php echo $_smarty_tpl->tpl_vars['label']->value;?>
" fieldtype="<?php echo $_smarty_tpl->tpl_vars['fieldType']->value;?>
" fieldname="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
" initval="<?php echo $_smarty_tpl->tpl_vars['initval']->value;?>
" scriptname="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
" isreq="<?php echo $_smarty_tpl->tpl_vars['isReq']->value;?>
" srctype="<?php echo $_smarty_tpl->tpl_vars['srctype']->value;?>
" datasource="<?php echo $_smarty_tpl->tpl_vars['datasource']->value;?>
" class="config-picklist" style="width:150px"><option>-Select-</option>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['s_datasource']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['s_datasource']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['key'];?>
" class="remove_when_save"><?php echo $_smarty_tpl->tpl_vars['s_datasource']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['value'];?>
</option>
<?php endfor; endif; ?>
</select></li></ul></div><?php }} ?>