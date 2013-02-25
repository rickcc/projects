<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 16:36:18
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/aw_inc_script.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145580166950a57c72434e79-04161803%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '871cd7cc6b4eff20af699f925568e607ef1808e7' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/aw_inc_script.tpl',
      1 => 1352280016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145580166950a57c72434e79-04161803',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'scripttype' => 0,
    'sqlContent' => 0,
    'bookmarks' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a57c724aba61_65822893',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a57c724aba61_65822893')) {function content_50a57c724aba61_65822893($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ci_lang')) include '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application/libraries/Smarty/libs/plugins/function.ci_lang.php';
?><tr id="div_sql_content"><td colspan="2"><fieldset><legend><b><?php if ($_smarty_tpl->tpl_vars['scripttype']->value=='query'){?><?php echo smarty_function_ci_lang(array('key'=>'strSearchingScript'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smarty_function_ci_lang(array('key'=>'strOperationScript'),$_smarty_tpl);?>
<?php }?></b><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/help.gif" align="absmiddle"/></legend><div><input type="radio" id="qb_free" name="qb_option" value="0" style="vertical-align: bottom;" checked onclick="javascript:$('option_qb_free').show();$('option_qb_new').hide();return true;"/><label for="qb_free">Free-flow scripting</label> <?php if ($_smarty_tpl->tpl_vars['scripttype']->value=='query'){?> <input type="radio" id="qb_new" name="qb_option" value="1" style="vertical-align: bottom;" onclick="javascript:show_querybuilder();return true;"/><label for="qb_new">Query builder</label> <?php }else{ ?> <input type="radio" id="qb_new" name="qb_option" value="1" style="vertical-align: bottom;" onclick="javascript:show_dmlbuilder();return true;"/><label for="qb_new">D-M-L builder</label> <?php }?> </div><div class="clear"></div><div id="option_qb_free"><table style="border:0"><tr><td><textarea id="sqlContent" name="sqlContent" rows="15" class="codepress sql linenumbers-on"><?php echo $_smarty_tpl->tpl_vars['sqlContent']->value;?>
</textarea></td><td style="width:200px;display:none" id="td_formvars"><ul id="cklist_formvars" class="checklist cl1" style="height:220px;"><li class="alt">no form variable available</li></ul></td></tr><tr><td colspan="2"> <?php if ($_smarty_tpl->tpl_vars['scripttype']->value=='query'){?> <span class="info-text">Please write a sql query with form tags. or using <a href="javascript:;" onclick="javascript:openQB('copyToEditor', getFormVarList());">Query Builder</a> to help you create a query sql.</span> <?php }else{ ?> <span class="info-text">Please write sql scripts for the creating application. or using <a href="javascript:;" onclick="javascript:openIUDB('copyToIUDEditor', getFormVarList());">DML Builder</a> to help you create one.</span> <?php }?> <br/> Click <a class="thickbox" href="/#TB_inline?inlineId=help_using_formvars&width=450&height=300">here</a> to learn how the 'Form Variables' works with the scripts?<br/><div id="gbar" class="gb1"><a href="javascript:;" style="font-size:10px" onclick="return togglebookmarked();">Bookmarked SQL&#9660</a></div><span id="span_exists_bk" style="display:none;margin-top:3px"><select id="bkid" class="config-picklist"><option value="">-- pick a script from bookmarks --</option> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['bookmarks']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?> <option value="<?php echo $_smarty_tpl->tpl_vars['bookmarks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['bkid'];?>
"><?php echo $_smarty_tpl->tpl_vars['bookmarks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['catkey'];?>
</option> <?php endfor; endif; ?> </select><a class="gbtn primary" href="javascript:;" onclick="javascript:op_bk('view');"><span><span>View Only</span></span></a><a class="gbtn" href="javascript:;" onclick="javascript:$j('#span_exists_bk').slideUp('fast');"><span><span>Close</span></span></a></span></td></tr></table></div><div id="option_qb_new" style="display:none"></div></fieldset></td></tr><?php }} ?>