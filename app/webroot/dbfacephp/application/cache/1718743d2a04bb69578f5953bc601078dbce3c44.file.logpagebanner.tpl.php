<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 18:18:58
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/logpagebanner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:133686199250a594822ba4a0-85070715%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1718743d2a04bb69578f5953bc601078dbce3c44' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/logpagebanner.tpl',
      1 => 1352280080,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133686199250a594822ba4a0-85070715',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'totalrow' => 0,
    'start' => 0,
    'end' => 0,
    'nav_str' => 0,
    'startDate' => 0,
    'endDate' => 0,
    'selectedtable' => 0,
    'tables' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a5948231e109_59366897',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a5948231e109_59366897')) {function content_50a5948231e109_59366897($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ci_lang')) include '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application/libraries/Smarty/libs/plugins/function.ci_lang.php';
?><span class="pagebanner"><?php echo smarty_function_ci_lang(array('key'=>'strTablePageBanner','p0'=>$_smarty_tpl->tpl_vars['totalrow']->value,'p1'=>$_smarty_tpl->tpl_vars['start']->value,'p2'=>$_smarty_tpl->tpl_vars['end']->value),$_smarty_tpl);?>

<div id="gbar"><span class="pagelinks">
<?php echo $_smarty_tpl->tpl_vars['nav_str']->value;?>

<input type="text" class="config-textfield" id="startDate" value="<?php echo $_smarty_tpl->tpl_vars['startDate']->value;?>
" name="startDate" size="20"/><a href="javascript:;" onmouseover="javascript:setupCalendar('startDate');"><img id="c_startDate" src='<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/form/date_icon.gif' width='16' height='17' border='0' title='Insert Date' style='vertical-align:middle;'/></a><input type="text" class="config-textfield" id="endDate" value="<?php echo $_smarty_tpl->tpl_vars['endDate']->value;?>
" name="endDate" size="20"/><a href="javascript:;" onmouseover="javascript:setupCalendar('endDate');"><img id="c_endDate" src='<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/form/date_icon.gif' width='16' height='17' border='0' title='Insert Date' style='vertical-align:middle;'/></a><select id="selectedtable"><option value="-1" <?php if ($_smarty_tpl->tpl_vars['selectedtable']->value==-1){?>selected<?php }?>>All Tables</option>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tables']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?> <option value="<?php echo $_smarty_tpl->tpl_vars['tables']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
" <?php if ($_smarty_tpl->tpl_vars['selectedtable']->value==$_smarty_tpl->tpl_vars['tables']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['tables']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
</option>
<?php endfor; endif; ?>
</select><input type="button" value="Search" onclick="javascript:searchLogs()"/></span><?php }} ?>