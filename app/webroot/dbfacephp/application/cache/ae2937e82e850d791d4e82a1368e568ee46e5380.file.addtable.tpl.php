<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 16:06:18
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/qb/addtable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173462472050a5756a409e40-34462545%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae2937e82e850d791d4e82a1368e568ee46e5380' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/qb/addtable.tpl',
      1 => 1352280098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173462472050a5756a409e40-34462545',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'renewTableName' => 0,
    'columns' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a5756a5e1236_30077118',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a5756a5e1236_30077118')) {function content_50a5756a5e1236_30077118($_smarty_tpl) {?><div class='qbDataTableHolder' dbname='<?php echo $_smarty_tpl->tpl_vars['renewTableName']->value;?>
' id='<?php echo $_smarty_tpl->tpl_vars['renewTableName']->value;?>
_0_thold'><table id='<?php echo $_smarty_tpl->tpl_vars['renewTableName']->value;?>
_0_data' cellpadding='0' cellspacing='0' border='0' class='qbDataTable'><tr style='cursor:default'><th class='qbth2' colspan='3'><?php echo $_smarty_tpl->tpl_vars['renewTableName']->value;?>
</th><th style='padding:0px;'><img src='<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/common/close.gif' width='9' height='9' onclick='qb_removeTable(this);'/></th></tr><tr><td colspan='4'><div class='qbTableBody' id='<?php echo $_smarty_tpl->tpl_vars['renewTableName']->value;?>
_0_tog'><table class='qbData' cellpadding='0' cellspacing='0' border='0' width='100%'><tr><td><input id='checkColumns_<?php echo $_smarty_tpl->tpl_vars['renewTableName']->value;?>
' type='checkbox' onclick='javascript:qb_switchCheckAllColumns(this);'/></td><td colspan='3'><input type='text' id='<?php echo $_smarty_tpl->tpl_vars['renewTableName']->value;?>
_alias' value='<?php echo $_smarty_tpl->tpl_vars['renewTableName']->value;?>
'/></td></tr> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['columns']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?> <tr><td class='qbtd1'><input id='selectColumns_<?php echo $_smarty_tpl->tpl_vars['columns']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['tab_col'];?>
' type='checkbox' onclick='qb_checkColumn(this)' value='<?php echo $_smarty_tpl->tpl_vars['columns']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['tab_col'];?>
' alt='<?php echo $_smarty_tpl->tpl_vars['columns']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['typeName'];?>
'/></td><td class='qbtd2'><?php echo $_smarty_tpl->tpl_vars['columns']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['columnName'];?>
</td><td class='qbtd3'><?php echo $_smarty_tpl->tpl_vars['columns']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['imageName'];?>
</td><td class='qbtd4' id='<?php echo $_smarty_tpl->tpl_vars['columns']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['tab_col'];?>
'><div id='<?php echo $_smarty_tpl->tpl_vars['columns']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['tab_col'];?>
_jbox' class='htmldbPseudoButton' onclick='qb_linkTable(this);'>&nbsp;</div></td></tr> <?php endfor; endif; ?> </table></div></td></tr></table></div><?php }} ?>