<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 16:24:06
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/advrep_help.tpl" */ ?>
<?php /*%%SmartyHeaderCode:63512256350a5799614bee1-14974867%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8aa408735a906bbcab90c9af8b488f3d196512a5' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/advrep_help.tpl',
      1 => 1352279998,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63512256350a5799614bee1-14974867',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rpf' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a579962ef115_84484325',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a579962ef115_84484325')) {function content_50a579962ef115_84484325($_smarty_tpl) {?><div style=" height: 100%; width: 100%;" class="AnalysisChartArea" elname="chartArea" id="ZDBChartPlaceHolder"><div id="chartprevdiv" style="display:none"><div id="chartdiv" style="margin-top:10px"></div><div style="text-align:center"><input type="button" class="input-submit" value="Save the Report" onclick="saveReport();"/></div></div><div style="display: block;" id="defaultSummaryView"><table cellspacing="0" cellpadding="0" bgcolor="#ffffff"><tbody><tr><td colspan="2" style="padding-right: 5px;" class="defaultViewBody"><br/> <?php if ($_smarty_tpl->tpl_vars['rpf']->value=='tabular'){?> <?php echo $_smarty_tpl->getSubTemplate ("advrep_help_tabular.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <?php }elseif($_smarty_tpl->tpl_vars['rpf']->value=='summary'){?> <?php echo $_smarty_tpl->getSubTemplate ("advrep_help_summary.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <?php }elseif($_smarty_tpl->tpl_vars['rpf']->value=='pivot'){?> <?php echo $_smarty_tpl->getSubTemplate ("advrep_help_matrix.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <?php }elseif($_smarty_tpl->tpl_vars['rpf']->value=='chart'){?> <?php echo $_smarty_tpl->getSubTemplate ("advrep_help_chart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <?php }elseif($_smarty_tpl->tpl_vars['rpf']->value=='calendar'){?> <?php echo $_smarty_tpl->getSubTemplate ("advrep_help_calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <?php }?> </td></tr></tbody></table></div></div><?php }} ?>