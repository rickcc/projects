<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 16:24:05
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/advrep_clist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15180628850a57995a9a3a4-72966202%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48d6b36624ad46b4c866aa92efa3953b9225c22d' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/advrep_clist.tpl',
      1 => 1352279994,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15180628850a57995a9a3a4-72966202',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tblcolumninfos' => 0,
    'singletable' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a57995b5edc3_16297712',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a57995b5edc3_16297712')) {function content_50a57995b5edc3_16297712($_smarty_tpl) {?><table cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top"><div analysisel="attachedFieldsListEl" style="margin-right: 11px;"><div class="chartfieldsbg">Select/Drag and Drop the fields</div><div analysisel="analysisFieldHolder" class="analysisfieldbr"><table cellspacing="0" cellpadding="0" border="0" align="left" style="padding-top: 3px; padding-left: 3px;"><tbody> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tblcolumninfos']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['j'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['j']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['name'] = 'j';
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tblcolumninfos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['columns']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']):

for ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total']);
?> <tr><td height="24px" align="left"><div id="drag_<?php if ($_smarty_tpl->tpl_vars['singletable']->value){?><?php echo $_smarty_tpl->tpl_vars['tblcolumninfos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['columns'][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['name'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['tblcolumninfos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['tblname'];?>
.<?php echo $_smarty_tpl->tpl_vars['tblcolumninfos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['columns'][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['name'];?>
<?php }?>" onmousedown="DNDEvents.startDrag(this,event);" onmouseover="this.className='ZDBDNDFieldWthBG'" onmouseout="this.className='ZDBDNDFieldTrans'" style="z-index: 1000; width: 176px; height: 24px;" panel="left" columntype="<?php echo $_smarty_tpl->tpl_vars['tblcolumninfos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['columns'][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['type'];?>
" <?php if ($_smarty_tpl->tpl_vars['singletable']->value){?>columnname="<?php echo $_smarty_tpl->tpl_vars['tblcolumninfos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['columns'][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['name'];?>
"<?php }else{ ?>columnname="<?php echo $_smarty_tpl->tpl_vars['tblcolumninfos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['tblname'];?>
.<?php echo $_smarty_tpl->tpl_vars['tblcolumninfos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['columns'][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['name'];?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['singletable']->value){?>displayname="<?php echo $_smarty_tpl->tpl_vars['tblcolumninfos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['columns'][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['name'];?>
"<?php }else{ ?>displayname="<?php echo $_smarty_tpl->tpl_vars['tblcolumninfos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['tblname'];?>
.<?php echo $_smarty_tpl->tpl_vars['tblcolumninfos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['columns'][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['name'];?>
"<?php }?> class="ZDBDNDFieldTrans"><table width="176" height="24px" cellspacing="0" cellpadding="0" border="0" class="ZDBDNDFieldMainBG"><tbody><tr><td valign="middle" nowrap="nowrap" class="FTypePlainText <?php echo $_smarty_tpl->tpl_vars['tblcolumninfos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['columns'][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['csstype'];?>
" style="padding-left: 20px;"><?php if (!$_smarty_tpl->tpl_vars['singletable']->value){?><?php echo $_smarty_tpl->tpl_vars['tblcolumninfos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['tblname'];?>
.<?php }?><?php echo $_smarty_tpl->tpl_vars['tblcolumninfos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['columns'][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['name'];?>
</td></tr></tbody></table></div></td></tr> <?php endfor; endif; ?> <?php endfor; endif; ?> </tbody></table></div></div></td></tr></tbody></table><?php }} ?>