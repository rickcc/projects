<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 16:39:08
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/editapp.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6068997450a57d1c919464-17819384%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd514cf573994c088172f8c5e8d25f9c76eb64376' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/editapp.tpl',
      1 => 1352280036,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6068997450a57d1c919464-17819384',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'apptype' => 0,
    'appinfo' => 0,
    'forms' => 0,
    'formid' => 0,
    'tables' => 0,
    'charttypes' => 0,
    'curcharttype' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a57d1cb97a69_36235498',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a57d1cb97a69_36235498')) {function content_50a57d1cb97a69_36235498($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ci_lang')) include '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application/libraries/Smarty/libs/plugins/function.ci_lang.php';
?><html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/><link href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/style-default.css" rel="stylesheet" type="text/css"><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/prototype.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/jquery.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/tommick.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/Utils.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/rview.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/codepress.js"></script><script type="text/javascript">
   configFocusInput();   
   function previewapp() {
     $('mainForm').disable();
     document.mainForm.action.value='preview';
     document.mainForm.sql.value=encodeURIComponent(codepress ? codepress.getCode() : document.getElementById('sqlContent').value);
     new Ajax.Request('<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=app&m=preview', {
       method: 'post',
       parameters: $('mainForm').serialize(),
       onSuccess: function(transport) {
         $('mainForm').enable();
         $('error').update(transport.responseText).show();
         document.body.scrollTop = 0;
       }
     });
   }
   
   function editapp() {
     document.mainForm.action.value='submit';
     document.mainForm.sql.value=encodeURIComponent(codepress ? codepress.getCode() : document.getElementById('sqlContent').value);
     new Ajax.Request('<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=app&m=edit', {
       method: 'post',
       parameters: $('mainForm').serialize(),
       onSuccess: function(transport) {
         $('mainForm').enable();
         $('error').update(transport.responseText).show();
         document.body.scrollTop = 0;
         
         window.parent.frames['menu'].document.location.reload();
         setCookie('NavAccordion', 'false|true|false');
       }
     });     
   }
    document.observe("dom:loaded", function() {
       if ($('formid').value != "-1") {
         getFormVar();
       }
       <?php if ($_smarty_tpl->tpl_vars['apptype']->value==3){?>getRepTypeImg();<?php }?>
    });      
  </script></head><body><div id="bodyColumn"><div id="navcolumn"><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=home&m=dashboard">Dashboard</a> ><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=app&m=applist">Application Management</a> > Edit application</div><div id="error" style="display:none"></div><form action="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=app&m=edit" method="post" id="mainForm" name="mainForm"><input type="hidden" name="action" value="submit"/><input type="hidden" name="appid" value="<?php echo $_smarty_tpl->tpl_vars['appinfo']->value['appid'];?>
"/><input type="hidden" name="sql" value=""/><table border="0" cellpadding="0" cellspacing="0" class="otherDisplay2"><tr><td class="config-label">Name:</td><td><input id="appname" name="appname" type="text" class="it1" value="<?php echo $_smarty_tpl->tpl_vars['appinfo']->value['appname'];?>
" size="30" onblur="javascript:if($('apptitle').value=='') {$('apptitle').value=$('appname').value;}"></td></tr><tr><td class="config-label">Title:</td><td><textarea id="apptitle" name="apptitle" rows="4" cols="53" class="it1"><?php echo $_smarty_tpl->tpl_vars['appinfo']->value['apptitle'];?>
</textarea></td></tr><tr><td class="config-label">Description:</td><td><textarea id="appdesc" name="appdesc" rows="4" cols="53" class="it1"><?php echo $_smarty_tpl->tpl_vars['appinfo']->value['appdesc'];?>
</textarea></td></tr><tr><td colspan="2" class="bodyText"><hr/></td></tr> <?php if ($_smarty_tpl->tpl_vars['appinfo']->value['apptype']==0){?> <tr id="div_form"><td class="config-label">Parameters Form:</td><td><select id="formid" name="formid" onchange="javascript:getFormVar();" class="config-picklist"><option value="-1">not Required</option> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
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
" <?php if ($_smarty_tpl->tpl_vars['forms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['formID']==$_smarty_tpl->tpl_vars['formid']->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['forms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['formName'];?>
</option> <?php endfor; endif; ?> </select><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/refresh.gif" href="javascript:;" id="fbclosetrigger" onclick="javascript:getFormList('formid');" class="imgbtn"/><br/><span class="info-text">Please choose a search form or go to <a href="javascript:;" onclick="javascript:openFB();">Form Builder</a> to create/edit a form.</span></td></tr><tr><td colspan="2" class="bodyText"><hr/></td></tr><tr id="div_sql_content"><td class="config-label">SQL Content*:<div id="autoComp" class="autoComp"><table id="autoCompTable" class="autoComp"><tbody></tbody></table></div></td><td><a href="javascript:viewOpener();" class="subopen">Larger</a><br/><textarea id="sqlContent" name="sqlContent" rows="15" cols="70" class="codepress sql linenumbers-on"><?php echo $_smarty_tpl->tpl_vars['appinfo']->value['sqlcontent'];?>
</textarea><br/><span class="info-text">Please choose a sql query with form script. or go to <a href="javascript:;" onclick="javascript:openQB('copyToEditor', getFormVarList());">Query Builder</a> to create/edit a query sql.</span><div id="formvar" class="info-text"><font color="blue">No variables you can used in your query sql without a search form.</font></div></td></tr> <?php }elseif($_smarty_tpl->tpl_vars['appinfo']->value['apptype']==1){?> <tr id="div_form"><td class="config-label">Choose a Form:</td><td><select id="formid" name="formid" onchange="javascript:getFormVar();" class="config-picklist"><option value="-1">not Required</option> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
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
" <?php if ($_smarty_tpl->tpl_vars['forms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['formID']==$_smarty_tpl->tpl_vars['formid']->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['forms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['formName'];?>
</option> <?php endfor; endif; ?> </select><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/refresh.gif" href="javascript:;" id="fbclosetrigger" onclick="javascript:getFormList('formID');" class="imgbtn"/><br/><span class="info-text">Please choose a search form or go to <a href="javascript:;" onclick="javascript:openFB();">Form Builder</a> to create/edit a form.</span></td></tr><tr><td colspan="2" class="bodyText"><hr/></td></tr><tr id="div_sql_content"><td class="config-label">Application Scripts*:<div id="autoComp" class="autoComp"><table id="autoCompTable" class="autoComp"><tbody></tbody></table></div></td><td><a href="javascript:viewOpener();" class="subopen">Larger</a><br/><textarea id="sqlContent" name="sqlContent" rows="15" cols="70" class="codepress sql linenumbers-on"><?php echo $_smarty_tpl->tpl_vars['appinfo']->value['sqlcontent'];?>
</textarea><br/><span class="info-text">Please choose a sql query with form script. or open <a href="javascript:;" onclick="javascript:openIUDB('copyToIUDEditor', getFormVarList());">DML Builder</a> to help you create one.</span><div id="formvar" class="info-text"><font color="blue">No variables you can used in your query sql without a search form.</font></div></td></tr><tr><td colspan="2" class="bodyText"><hr/></td></tr><tr id="div_tiprow"><td class="bodyTextBold">Confirmation Message:</td><td><textarea id="opTip" name="opTip" id="opTip" rows="2" cols="52" class="config-textarea"><?php echo $_smarty_tpl->tpl_vars['appinfo']->value['param1'];?>
</textarea><br/><div class="info-text">This message will display before sql execution.'Search for Update' will ignore this field.</div></td></tr> <?php }elseif($_smarty_tpl->tpl_vars['appinfo']->value['apptype']==2){?> <tr id="div_form"><td class="config-label">Choose a Form:</td><td><select id="formid" name="formid" onchange="javascript:getFormVar();" class="config-picklist"><option value="-1">not Required</option> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
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
" <?php if ($_smarty_tpl->tpl_vars['forms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['formID']==$_smarty_tpl->tpl_vars['formid']->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['forms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['formName'];?>
</option> <?php endfor; endif; ?> </select><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/refresh.gif" href="javascript:;" id="fbclosetrigger" onclick="javascript:getFormList('formID');" class="imgbtn"/><br/><span class="info-text">Please choose a search form or go to <a href="javascript:;" onclick="javascript:openFB();">Form Builder</a> to create/edit a form.</span></td></tr><tr id="div_form_hr" style="display:none"><td colspan="2" class="bodyText"><hr/></td></tr><tr><td class="config-label">Table Name:</td><td><select id="tablename" name="tablename" class="config-picklist"> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
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
" <?php if ($_smarty_tpl->tpl_vars['tables']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]==$_smarty_tpl->tpl_vars['appinfo']->value['param1']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['tables']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
</option> <?php endfor; endif; ?> </select></td></tr><tr id="div_sql_content"><td class="config-label">Application Scripts*:<div id="autoComp" class="autoComp"><table id="autoCompTable" class="autoComp"><tbody></tbody></table></div></td><td><a href="javascript:viewOpener();" class="subopen">Larger</a><br/><textarea id="sqlContent" name="sqlContent" rows="15" cols="70" class="codepress sql linenumbers-on"><?php echo $_smarty_tpl->tpl_vars['appinfo']->value['sqlcontent'];?>
</textarea><br/><span class="info-text">Please choose a sql query with form script. or go to <a href="javascript:;" onclick="javascript:openQB('copyToEditor', getFormVarList());">Query Builder</a> to create/edit a query sql.</span><div id="formvar" class="info-text"><font color="blue">No variables you can used in your query sql without a search form.</font></div></td></tr> <?php }elseif($_smarty_tpl->tpl_vars['appinfo']->value['apptype']==3){?> <tr><td class="bodyTextBold">Chart Type:</td><td><select id="repType" name="repType" onchange="javascript:getRepTypeImg();" class="config-picklist"> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['charttypes']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?> <optgroup label="<?php echo $_smarty_tpl->tpl_vars['charttypes']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['label'];?>
"> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['j'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['j']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['name'] = 'j';
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['charttypes']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['charts']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?> <option value="<?php echo $_smarty_tpl->tpl_vars['charttypes']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['charts'][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['chartclass'];?>
" <?php if ($_smarty_tpl->tpl_vars['curcharttype']->value==($_smarty_tpl->tpl_vars['charttypes']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['charts'][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['chartclass'])){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['charttypes']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['charts'][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['label'];?>
</option> <?php endfor; endif; ?> </optgroup> <?php endfor; endif; ?> </select><br/><img id="img_rep" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/charts/column3d.jpg"/><div id="charthelp" class="info-text"></div></td></tr><tr><td colspan="2" class="bodyText"><hr/></td></tr><tr><td class="config-label">Choose a Form:</td><td><select id="formid" name="formid" onchange="javascript:getFormVar();" class="config-picklist"><option value="-1">not Required</option> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
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
" <?php if ($_smarty_tpl->tpl_vars['forms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['formID']==$_smarty_tpl->tpl_vars['formid']->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['forms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['formName'];?>
</option> <?php endfor; endif; ?> </select><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/refresh.gif" href="javascript:;" id="fbclosetrigger" onclick="javascript:getFormList('formID');" class="imgbtn"/><br/><span class="info-text">Please choose a search form or go to <a href="javascript:;" onclick="javascript:openFB();">Form Builder</a> to create/edit a form.</span></td></tr><tr id="div_form_hr"><td colspan="2" class="bodyText"><hr/></td></tr><tr id="div_sql_content"><td class="config-label">Datasource*:<div id="autoComp" class="autoComp"><table id="autoCompTable" class="autoComp"><tbody></tbody></table></div></td><td><a href="javascript:viewOpener();" class="subopen">Larger</a><br/><textarea id="sqlContent" name="sqlContent" rows="15" cols="70" class="codepress sql linenumbers-on"><?php echo $_smarty_tpl->tpl_vars['appinfo']->value['sqlcontent'];?>
</textarea><br/><span class="info-text">Please choose a sql query with form script. or go to <a href="javascript:;" onclick="javascript:openQB('copyToEditor', getFormVarList());">Query Builder</a> to create/edit a query sql.</span><div id="formvar" class="info-text"><font color="blue">No variables you can used in your query sql without a search form.</font></div></td></tr> <?php }elseif($_smarty_tpl->tpl_vars['appinfo']->value['apptype']==4){?> <tr id="div_form"><td class="config-label">Parameters Form:</td><td><select id="formid" name="formid" onchange="javascript:getFormVar();" class="config-picklist"><option value="-1">not Required</option> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
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
" <?php if ($_smarty_tpl->tpl_vars['forms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['formID']==$_smarty_tpl->tpl_vars['formid']->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['forms']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['formName'];?>
</option> <?php endfor; endif; ?> </select><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/refresh.gif" href="javascript:;" id="fbclosetrigger" onclick="javascript:getFormList('formid');" class="imgbtn"/><br/><span class="info-text">Please choose a search form or go to <a href="javascript:;" onclick="javascript:openFB();">Form Builder</a> to create/edit a form.</span></td></tr><tr><td colspan="2" class="bodyText"><hr/></td></tr><tr id="div_sql_content"><td class="config-label">SQL Content*:<div id="autoComp" class="autoComp"><table id="autoCompTable" class="autoComp"><tbody></tbody></table></div></td><td><a href="javascript:viewOpener();" class="subopen">Larger</a><br/><textarea id="sqlContent" name="sqlContent" rows="15" cols="70" class="codepress sql linenumbers-on"><?php echo $_smarty_tpl->tpl_vars['appinfo']->value['sqlcontent'];?>
</textarea><br/><span class="info-text">Please choose a sql query with form script. or go to <a href="javascript:;" onclick="javascript:openQB('copyToEditor', getFormVarList());">Query Builder</a> to create/edit a query sql.</span><div id="formvar" class="info-text"><font color="blue">No variables you can used in your query sql without a search form.</font></div></td></tr><tr id="div_tiprow"><td colspan="2"><fieldset><legend><b>Max checkpoint num</b></legend><input name="monNum" type="text" class="config-textfield" id="monNum" value="5" size="30" onKeypress="return onlyNumber(event)"><br/><div class="info-text">The field defines how many checkpoints you want to save.</div></fieldset></td></tr> <?php }?> <tr><td colspan="2">&nbsp;</td></tr><tr><td align="center">&nbsp;</td><td align="center"><input type="button" class="input-submit gray" onclick="javascript:document.location='<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=app&m=applist'" value="<< <?php echo smarty_function_ci_lang(array('key'=>'strBack'),$_smarty_tpl);?>
"/><input type="button" class="input-submit" onclick="javascript:editapp();" value="Confirm to Update"/></td></tr><tr height="10px"><td colspan="2">&nbsp;</td></tr></table></form></div>
<?php echo $_smarty_tpl->getSubTemplate ("analytics.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body></html><?php }} ?>