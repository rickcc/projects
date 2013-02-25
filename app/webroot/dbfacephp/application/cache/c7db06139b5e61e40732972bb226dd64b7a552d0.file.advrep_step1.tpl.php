<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 16:23:38
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/advrep_step1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:207958534250a5797a2ea2a2-14717883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7db06139b5e61e40732972bb226dd64b7a552d0' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/advrep_step1.tpl',
      1 => 1352280008,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207958534250a5797a2ea2a2-14717883',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tables' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a5797a32f581_98699958',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a5797a32f581_98699958')) {function content_50a5797a32f581_98699958($_smarty_tpl) {?><fieldset><legend><strong>Select Report Format</strong></legend><table style="width:756px;border:0" cellspacing="0" cellpadding="0" align="left"><tbody><tr><td valign="top"><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/tabular.gif" width="158" height="81"/></td><td valign="top" style="width:220px"><span><input type="radio" id="radio_tabular" name="radio_rpf" value="tabular" style="margin-left:0px" onclick="javascript:radio_trigger(this);" checked/><label for="radio_tabular" style="color:blue"><b>Tabular Report</b></label></span><br/><div style="margin-top: 5px;">Tabular reports are the simplest and fastest way to list your data.</div></td><td>&nbsp;</td><td valign="top"><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/chartview.gif" width="158" height="81"/></td><td valign="top" style="width:220px"><span><input type="radio" id="radio_chart" name="radio_rpf" value="chart" style="margin-left:0px" onclick="javascript:radio_trigger(this);"/><label for="radio_chart"><b>Chart Report</b></label></span><br/><div style="margin-top: 5px;">Chart Report allows you to create a graphical view using different types of charts.</div></td></tr><tr><td colspan="5"><br/></td></tr><tr><td valign="top"><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/pivotview.gif" width="158" height="81"/></td><td valign="top" style="width:220px"><span><input type="radio" id="radio_pivot" name="radio_rpf" value="pivot" style="margin-left:0px" onclick="javascript:radio_trigger(this);"/><label for="radio_pivot"><b>Matrix Report</b></label></span><br/><div style="margin-top: 5px;">Matrix reports list summaries of your data in a grid against both horizontal and vertical criteria.</div></td><td>&nbsp;</td><td valign="top"><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/summaryview.gif" width="158" height="81"/></td><td valign="top" style="width:220px"><span><input type="radio" id="radio_summary" name="radio_rpf" value="summary" style="margin-left:0px" onclick="javascript:radio_trigger(this);"/><label for="radio_summary"><b>Summary Report</b></label></span><br/><div style="margin-top: 5px;">Summary reports list your data with subtotals and other summary information.</div></td></tr><tr><td colspan="5"><br/></td></tr><tr><td valign="top"><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/calendar.png" width="158" height="81"/></td><td colspan="4" valign="top" style="width:220px"><span><input type="radio" id="radio_calendar" name="radio_rpf" value="calendar" style="margin-left:0px" onclick="javascript:radio_trigger(this);"/><label for="radio_calendar"><b>Calendar Report</b></label></span><br/><div style="margin-top: 5px;">Calendar report helps you organize data in a monthly calendar.</div></td></tr></tbody></table></fieldset><fieldset><legend><strong>Select base table(s) to create the report</strong></legend><div id="adv_rep_join_content"><div class="advrep_div" style="margin-top:2px;margin-bottom:2px;"><label for="tablename">Table name: </label><select class="sel_tbl" name="tablename[]" id="tablename" style="border:1px" onchange="javascript:set_columns(this.value, this);"><option value="" selected>-- Table --</option> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
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
"><?php echo $_smarty_tpl->tpl_vars['tables']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
</option> <?php endfor; endif; ?> </select><img align="absmiddle" onclick="advrep_addjoin(this);" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/add2.gif"/><br/></div></div></fieldset><?php }} ?>