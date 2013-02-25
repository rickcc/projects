<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 16:23:37
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/selapptype.tpl" */ ?>
<?php /*%%SmartyHeaderCode:90190778450a57979ea1378-20754462%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0806564f7e000896e1a1339a59e748a9fbea3a93' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/selapptype.tpl',
      1 => 1352280108,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90190778450a57979ea1378-20754462',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'phpload' => 0,
    'apptype' => 0,
    'error' => 0,
    'appname' => 0,
    'apptitle' => 0,
    'appdesc' => 0,
    'tables' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a5797a2440c2_34526708',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a5797a2440c2_34526708')) {function content_50a5797a2440c2_34526708($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ci_lang')) include '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application/libraries/Smarty/libs/plugins/function.ci_lang.php';
?><html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> <?php if ($_smarty_tpl->tpl_vars['phpload']->value){?> <link type="text/css" href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/load.php?load=style-default.css" rel="stylesheet"/><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/load.php?load=prototype.js,jquery.js,tommick.js,Utils.js,rview.js"></script> <?php }else{ ?> <link href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/style-default.css" rel="stylesheet" type="text/css"><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/prototype.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/jquery.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/tommick.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/Utils.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/rview.js"></script> <?php }?> <script type="text/javascript">
    function radio_trigger(ele) {
      $j('label').each(function(i){this.style.color='#333333'});
      $j(($j(ele).next('label')[0])).css('color', 'blue');
      return true;
    }
    var columnDatas = new Array();
    function set_columns(tablename, ele) {
      if (tablename == "") {
        return;
      }
      var ls = $j($j($j(ele).parent(".advrep_div")[0]).next(".advrep_div")[0]).children(".left")[0];
      var rs = $j(ele).siblings(".right")[0];
      if ((rs == undefined || rs == null) && (ls == undefined || ls == null)) {
        return;
      }
      if (columnDatas[tablename] == undefined || columnDatas[tablename] == null) {
        $j.getJSON('<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=req&m=json_getcolumns&tblname='+tablename, function(json) {
          columnDatas[tablename] = json;
          _set_column(ls, tablename);
          _set_column(rs, tablename);
        });
      } else {
        _set_column(ls, tablename);
        _set_column(rs, tablename);
      }
    }
    
    function _set_column(ele, tablename) {
      if (ele == null || ele == undefined) {
        return;
      }
      ele.options.length = 0;
      for(var i=0; i<columnDatas[tablename].length;i++) {
        AddSelectOption(ele, columnDatas[tablename][i],tablename+"."+columnDatas[tablename][i], false);
      }
    }
    function checkAppSubmitData() {
      var apptype=$('apptype').value;
      if (apptype!=6&&$('appname').value=='') {
        alert('Please specify a short(less than 16 characters) words as the application identified name!');
        $('appname').focus();
        return false;
      }
      if (apptype!=6&&$('apptitle').value=='') {
        alert('Please specify a short(less than 32 characters) words as the application title!');
        $('apptitle').focus();
        return false;
      }
      if (apptype==6&&$('tablename').value=='') {
        alert('You must select on table at least as base table.');
        $('tablename').focus();
        return false;
      }
      return true;
    }
    $j(document).ready(function() {
     <?php if ($_smarty_tpl->tpl_vars['apptype']->value){?>
     $('help_0', 'help_1', 'help_2', 'help_3', 'help_4', 'help_5', 'help_6').invoke('hide');
     if(<?php echo $_smarty_tpl->tpl_vars['apptype']->value;?>
=='6'){
       $('tr_general').hide();
     } else {
       $('tr_general').show();
     };
     $('help_'+<?php echo $_smarty_tpl->tpl_vars['apptype']->value;?>
).show();
     <?php }?>
    });
  </script></head><body><div id="bodyColumn"><div id="navcolumn"><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=home&m=dashboard"><?php echo smarty_function_ci_lang(array('key'=>'strDashboard'),$_smarty_tpl);?>
</a> ><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=app&m=applist"><?php echo smarty_function_ci_lang(array('key'=>'strApplicationManagement'),$_smarty_tpl);?>
</a> > <?php echo smarty_function_ci_lang(array('key'=>'strCreateApplication'),$_smarty_tpl);?>
</div> <?php if ($_smarty_tpl->tpl_vars['error']->value){?><div class="js_warning" ondblclick="javascript:hideElement(this);"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?> <div class="clear"></div><form action="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=app&m=create_step2" method="post" id="mainForm" name="mainForm" onsubmit="javascript:return checkAppSubmitData();"><table border="0" cellpadding="0" cellspacing="0" class="otherDisplay2"><tr><td colspan="2"><span class="config-label"><?php echo smarty_function_ci_lang(array('key'=>'strAppMode'),$_smarty_tpl);?>
:</span><select id="apptype" name="apptype" class="config-picklist" onchange="javascript:$('help_0', 'help_1', 'help_2', 'help_3', 'help_4', 'help_5', 'help_6').invoke('hide');if($('apptype').value=='6'){$('tr_general').hide();}else{$('tr_general').show();}; $('help_'+$('apptype').value).show();"><option value="0" <?php if ($_smarty_tpl->tpl_vars['apptype']->value=='0'){?>selected<?php }?>><?php echo smarty_function_ci_lang(array('key'=>'strQueryApp'),$_smarty_tpl);?>
</option><option value="1" <?php if ($_smarty_tpl->tpl_vars['apptype']->value=='1'){?>selected<?php }?>><?php echo smarty_function_ci_lang(array('key'=>'strGeneralOperationApp'),$_smarty_tpl);?>
</option><option value="2" <?php if ($_smarty_tpl->tpl_vars['apptype']->value=='2'){?>selected<?php }?>><?php echo smarty_function_ci_lang(array('key'=>'strQueryForUpdateApp'),$_smarty_tpl);?>
</option><option value="3" <?php if ($_smarty_tpl->tpl_vars['apptype']->value=='3'){?>selected<?php }?>><?php echo smarty_function_ci_lang(array('key'=>'strChartReportApp'),$_smarty_tpl);?>
</option><option value="4" <?php if ($_smarty_tpl->tpl_vars['apptype']->value=='4'){?>selected<?php }?>><?php echo smarty_function_ci_lang(array('key'=>'strResultSetCheckPointApp'),$_smarty_tpl);?>
</option><option value="6" <?php if ($_smarty_tpl->tpl_vars['apptype']->value=='6'){?>selected<?php }?>><?php echo smarty_function_ci_lang(array('key'=>'strAdvancedReportApp'),$_smarty_tpl);?>
</option><option value="5" <?php if ($_smarty_tpl->tpl_vars['apptype']->value=='5'){?>selected<?php }?>><?php echo smarty_function_ci_lang(array('key'=>'strDashboardApp'),$_smarty_tpl);?>
</option></select></td></tr><tr id="tr_general"><td colspan="2"><fieldset><legend><b>General Application Information</b></legend><table style="border:0"><tr><td class="config-label"><?php echo smarty_function_ci_lang(array('key'=>'strName'),$_smarty_tpl);?>
&nbsp;:</td><td><input id="appname" name="appname" type="text" class="it1" value="<?php echo $_smarty_tpl->tpl_vars['appname']->value;?>
" size="30" onblur="javascript:if($('apptitle').value=='') {$('apptitle').value=$('appname').value;}"/><img src='<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/help.gif' style="align:absmiddle" onmouseover='javascript:openHelp(this, "<?php echo smarty_function_ci_lang(array('key'=>'strAppNameTip'),$_smarty_tpl);?>
");' onmouseout='javascript:closeHelpTip();'/></td></tr><tr><td class="config-label"><?php echo smarty_function_ci_lang(array('key'=>'strTitle'),$_smarty_tpl);?>
&nbsp;:</td><td><input id="apptitle" name="apptitle" type="text" class="it1" value="<?php echo $_smarty_tpl->tpl_vars['apptitle']->value;?>
" size="30"><img src='<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/help.gif' style="align:absmiddle" onmouseover='javascript:openHelp(this, "<?php echo smarty_function_ci_lang(array('key'=>'strAppTitleTip'),$_smarty_tpl);?>
");' onmouseout='javascript:closeHelpTip();'/></td></tr><tr><td class="config-label"><?php echo smarty_function_ci_lang(array('key'=>'strDescription'),$_smarty_tpl);?>
&nbsp;:</td><td><textarea id="appdesc" name="appdesc" rows="4" class="it1" cols="58"><?php echo $_smarty_tpl->tpl_vars['appdesc']->value;?>
</textarea><img src='<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/help.gif' style="align:absmiddle" onmouseover='javascript:openHelp(this, "<?php echo smarty_function_ci_lang(array('key'=>'strAppDescTip'),$_smarty_tpl);?>
");' onmouseout='javascript:closeHelpTip();'/></td></tr></table></fieldset></td></tr><tr><td colspan="2"><div id="help_0" <?php if ($_smarty_tpl->tpl_vars['apptype']->value!='0'){?>style="display:none"<?php }?>><fieldset><legend><b><?php echo smarty_function_ci_lang(array('key'=>'strSpecialNotes'),$_smarty_tpl);?>
</b></legend><table width="90%" cellspacing="0" cellpadding="0" align="left" style="border:0"><tbody><tr><td class="defaultViewText"><img src='<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/s/item.png'/> <?php echo smarty_function_ci_lang(array('key'=>'strSpecialNotesQueryAppLine1'),$_smarty_tpl);?>
</td></tr><tr><td valign="middle" class="defaultViewText"><img src='<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/s/item.png'/> <?php echo smarty_function_ci_lang(array('key'=>'strSpecialNotesQueryAppLine2'),$_smarty_tpl);?>
</td></tr><tr><td valign="middle" class="defaultViewText"><img src='<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/s/item.png'/> <?php echo smarty_function_ci_lang(array('key'=>'strSpecialNotesQueryAppLine3'),$_smarty_tpl);?>
</td></tr></tbody></table></fieldset></div><div id="help_1" <?php if ($_smarty_tpl->tpl_vars['apptype']->value!='1'){?>style="display:none"<?php }?>><fieldset><legend><b><?php echo smarty_function_ci_lang(array('key'=>'strSpecialNotes'),$_smarty_tpl);?>
</b></legend><table width="90%" cellspacing="0" cellpadding="0" align="left" style="border:0"><tbody><tr><td class="defaultViewText"><img src='<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/s/item.png'/> <?php echo smarty_function_ci_lang(array('key'=>'strSpecialNotesGeneralOperationAppLine1'),$_smarty_tpl);?>
</td></tr><tr><td valign="middle" class="defaultViewText"><img src='<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/s/item.png'/> <?php echo smarty_function_ci_lang(array('key'=>'strSpecialNotesGeneralOperationAppLine2'),$_smarty_tpl);?>
</td></tr><tr><td valign="middle" class="defaultViewText"><img src='<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/s/item.png'/> <?php echo smarty_function_ci_lang(array('key'=>'strSpecialNotesGeneralOperationAppLine3'),$_smarty_tpl);?>
</td></tr></tbody></table></fieldset></div><div id="help_2" <?php if ($_smarty_tpl->tpl_vars['apptype']->value!='2'){?>style="display:none"<?php }?>><fieldset><legend><b><?php echo smarty_function_ci_lang(array('key'=>'strSpecialNotes'),$_smarty_tpl);?>
</b></legend><table width="90%" cellspacing="0" cellpadding="0" align="left" style="border:0"><tbody><tr><td class="defaultViewText"><img src='<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/s/item.png'/> <?php echo smarty_function_ci_lang(array('key'=>'strSpecialNotesQueryForUpdateAppLine1'),$_smarty_tpl);?>
</td></tr><tr><td valign="middle" class="defaultViewText"><img src='<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/s/item.png'/> <?php echo smarty_function_ci_lang(array('key'=>'strSpecialNotesQueryForUpdateAppLine2'),$_smarty_tpl);?>
</td></tr><tr><td valign="middle" class="defaultViewText"><img src='<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/s/item.png'/> <?php echo smarty_function_ci_lang(array('key'=>'strSpecialNotesQueryForUpdateAppLine3'),$_smarty_tpl);?>
</td></tr></tbody></table></fieldset></div><div id="help_3" <?php if ($_smarty_tpl->tpl_vars['apptype']->value!='3'){?>style="display:none"<?php }?>><fieldset><legend><b><?php echo smarty_function_ci_lang(array('key'=>'strSpecialNotes'),$_smarty_tpl);?>
</b></legend><table width="90%" cellspacing="0" cellpadding="0" align="left" style="border:0"><tbody><tr><td class="defaultViewText"><img src='<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/s/item.png'/> <?php echo smarty_function_ci_lang(array('key'=>'strSpecialNotesChartReportAppLine1'),$_smarty_tpl);?>
</td></tr><tr><td valign="middle" class="defaultViewText"><img src='<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/s/item.png'/> <?php echo smarty_function_ci_lang(array('key'=>'strSpecialNotesChartReportAppLine2'),$_smarty_tpl);?>
</td></tr><tr><td valign="middle" class="defaultViewText"><img src='<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/s/item.png'/> <?php echo smarty_function_ci_lang(array('key'=>'strSpecialNotesChartReportAppLine3'),$_smarty_tpl);?>
</td></tr></tbody></table></fieldset></div><div id="help_4" <?php if ($_smarty_tpl->tpl_vars['apptype']->value!='4'){?>style="display:none"<?php }?>><fieldset><legend><b><?php echo smarty_function_ci_lang(array('key'=>'strSpecialNotes'),$_smarty_tpl);?>
</b></legend><table width="90%" cellspacing="0" cellpadding="0" align="left" style="border:0"><tbody><tr><td class="defaultViewText"><img src='<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/s/item.png'/> <?php echo smarty_function_ci_lang(array('key'=>'strSpecialNotesResultsetCheckPointAppLine1'),$_smarty_tpl);?>
</td></tr><tr><td valign="middle" class="defaultViewText"><img src='<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/s/item.png'/> <?php echo smarty_function_ci_lang(array('key'=>'strSpecialNotesResultsetCheckPointAppLine2'),$_smarty_tpl);?>
</td></tr><tr><td valign="middle" class="defaultViewText"><img src='<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/s/item.png'/> <?php echo smarty_function_ci_lang(array('key'=>'strSpecialNotesResultsetCheckPointAppLine3'),$_smarty_tpl);?>
</td></tr></tbody></table></fieldset></div><div id="help_5"<?php if ($_smarty_tpl->tpl_vars['apptype']->value!='5'){?> style="display:none"<?php }?>><fieldset><legend><b><?php echo smarty_function_ci_lang(array('key'=>'strSpecialNotes'),$_smarty_tpl);?>
</b></legend><table width="90%" cellspacing="0" cellpadding="0" align="left" style="border:0"><tbody><tr><td class="defaultViewText"><img src='<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/s/item.png'/> <?php echo smarty_function_ci_lang(array('key'=>'strSpecialNotesDashboardAppLine1'),$_smarty_tpl);?>
</td></tr><tr><td valign="middle" class="defaultViewText"><img src='<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/s/item.png'/> <?php echo smarty_function_ci_lang(array('key'=>'strSpecialNotesDashboardAppLine2'),$_smarty_tpl);?>
</td></tr><tr><td valign="middle" class="defaultViewText"><img src='<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/s/item.png'/> <?php echo smarty_function_ci_lang(array('key'=>'strSpecialNotesDashboardAppLine3'),$_smarty_tpl);?>
</td></tr></tbody></table></fieldset></div><div id="help_6" <?php if ($_smarty_tpl->tpl_vars['apptype']->value!='6'){?>style="display:none"<?php }?>> <?php echo $_smarty_tpl->getSubTemplate ("advrep_step1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 </div></td></tr><tr><td class="bodyText" colspan="2"><hr/></td></tr><tr><td style="text-align:right" colspan="2"><a class="subopen" href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=app&m=applist">back to application list</a><input type="submit" class="input-submit" value="<?php echo smarty_function_ci_lang(array('key'=>'strNext'),$_smarty_tpl);?>
>>"/></td></tr><tr><td colspan="2">&nbsp;</td></tr></table></form></div><span id="span_advrep_join_tmp" style="display:none"><div class="advrep_div" style="margin-top:2px;margin-bottom:2px;"><select name="jointype[]" style="border:1px" onchange="javascript:set_columns(this.value, this);"><option value="join" selected>JOIN</option><option value="leftjoin">LEFT JOIN</option><option value="rightjoin">RIGHT JOIN</option></select><select name="tablename[]" class="sel_tbl" style="border:1px" onchange="javascript:set_columns(this.value, this);"><option value="" selected>-- Table --</option> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
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
</option> <?php endfor; endif; ?> </select> ON <select name="left_columnname[]" class="left" style="border:1px"></select> equal <select name="right_columnname[]" class="right" style="border:1px"></select><img align="absmiddle" onclick="javascript:advrep_addjoin(this);" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/add2.gif"/><img align="absmiddle" onclick="javascript:advrep_deljoin(this);" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/delete2.gif"/><br/></div></span></body></html><?php }} ?>