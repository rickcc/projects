<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 16:36:18
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/aw_inc_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:153493797950a57c723986b9-19254524%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bcaf267923131bbd4c32bb721122402438d77e2e' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/aw_inc_form.tpl',
      1 => 1352280014,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153493797950a57c723986b9-19254524',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'forms' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a57c723ffe95_63924788',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a57c723ffe95_63924788')) {function content_50a57c723ffe95_63924788($_smarty_tpl) {?><tr id="div_form"><td colspan="2"><fieldset><legend><b>Form</b><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/help.gif" align="absmiddle"/></legend><input type="radio" id="form_none" name="form_option" value="0" style="vertical-align: bottom;" checked onclick="javascript:$('option_form_choose').hide();$('option_form_new').hide();getFormVar(-1);return true;"/><label for="form_none">Without form</label><input type="radio" id="form_choose" name="form_option" value="1" style="vertical-align: bottom;" onclick="javascript:$('option_form_choose').show();$('option_form_new').hide();getFormVar($('formid').value);return true;"/><label for="form_choose">Choose existing form</label><input type="radio" id="form_new" name="form_option" value="2" style="vertical-align: bottom;" onclick="javascript:show_formbuilder();getFormVar(-1);return true;"/><label for="form_new">Create new</label> (<a href="javascript:;" class="subopen" id="btn_closefb" onclick="javascript:$('option_form_new').hide();$(this).hide();$('btn_showfb').show();">Close</a><a href="javascript:;" id="btn_showfb" style="display:none" class="subopen" onclick="javascript:$('option_form_new').show();$(this).hide();$('btn_closefb').show();">Show</a>) <div id="option_form_choose" style="display:none;margin-top:3px;margin-left:5px"><select id="formid" name="formid" onchange="javascript:getFormVar();" class="it1"> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['forms']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?> <option value="<?php echo $_smarty_tpl->tpl_vars['forms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['formID'];?>
"><?php echo $_smarty_tpl->tpl_vars['forms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['formName'];?>
</option> <?php endfor; else: ?> <option value="-1">No form found!</option> <?php endif; ?> </select><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/refresh.gif" alt="click the image button to refresh the form list." title="click the image button to refresh the form list." id="fbclosetrigger" onclick="javascript:getFormList('formid');" class="imgbtn"/><br/><span class="info-text">Please choose a search form or go to <a href="javascript:;" onclick="javascript:openFB('openFBCloseTrigger()');">Form Builder</a> to create a new form.</span></div><div id="option_form_new" style="display:none"></div></fieldset></td></tr><?php }} ?>