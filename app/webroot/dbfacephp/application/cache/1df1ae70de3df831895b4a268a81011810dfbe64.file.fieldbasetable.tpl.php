<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 18:12:52
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/form/fieldbasetable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29764389050a593145e82a7-98281860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1df1ae70de3df831895b4a268a81011810dfbe64' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/form/fieldbasetable.tpl',
      1 => 1352280058,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29764389050a593145e82a7-98281860',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a5931461f204_88082281',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a5931461f204_88082281')) {function content_50a5931461f204_88082281($_smarty_tpl) {?><table id="propstable" cellpadding="0" cellspacing="0" border="0" width="100%" class="property-option-table"><tbody id="propstbody"><tr id="lname"><td><label for="labelName" class="textBold">Label Name:&nbsp;</label><input type="text" id="labelName" name="labelName" class="inputtext"></td><td><label for="scriptName" class="textBold">Field Name:&nbsp</label><input type="text" id="scriptName" name="scriptName" class="inputtext"><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/s/b_help.png" align="absmiddle" tooltip="You will be referring this name in script with tags." onmouseover="javascript:js_show_tooltip(this)"/></td></tr><tr id="actionscript"><td colspan="2"><span class="config-label"><input type="checkbox" name="updatescriptenable" id="updatescriptenable" value="1" onclick="javascript:checkFormEffect();" style="vertical-align:middle"/><label for="updatescriptenable" style="vertical-align:middle">Updating Script</label>&nbsp;<a href="javascript:openQB('copyToEffectForm');"><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/sql-query.png" border="0" alt="open query builder to help you build a updating script." title="open query builder to help you build a updating script." align='absmiddle'/></a>&nbsp;<img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/help.gif" align="absmiddle" tooltip="This script will be executed for updating current form while this field changed(on user input). You can also use form variables in this script." onmouseover="javascript:js_show_tooltip(this)"/></span></td></tr><tr id="actionscripttdiv"><td colspan="2"><textarea style="width:100%" id="updatescript" name="updatescript" class="inputtextarea" rows="4"></textarea></td></tr><tr id="dfname"><td valign="top"><fieldset style="padding:6px 11px 13px 11px"><legend>Appearance & Validation</legend><table cellpadding="0" cellspacing="0" border="0"><tbody id="delfname"><tr><td nowrap><label for="initValue">initial value:</label></td><td><input id="initValue" type="text" name="initValue" class="inputtext"></td></tr><tr id="dfieldsize" style="display:none"><td nowrap><label for="fieldsize">max characters:</label></td><td><input id="fieldsize" type="text" name="fieldsize" class="inputtext" onKeypress="return onlyNumber(event)"></td></tr><tr id="inputdatatype" style="display:none"><td nowrap><label for="inputdt">Data Type:</label></td><td><select class="config-picklist" id="inputdt" name="inputdt" style="width:100%"><option value="0">Any</option><option value="1">Numberic</option><option value="2">Decimal</option></select></td></tr><tr id="inputdateformat" style="display:none"><td nowrap><label for="inputdt">Date Format:</label></td><td><input class="inputtext" name="inputdateformat" id="inputdateformat" value="%Y-%m-%d %H:%M:%S"/></td></tr><tr id="required"><td colspan="2"><input id="reqd" type="checkbox" name="reqd" value="1" style="vertical-align:middle"/><label for="reqd">This is required field</label></td></tr><tr id="disablefld"><td colspan="2"><input id="disabledf" type="checkbox" name="disabledf" value="1" style="vertical-align:middle"/><label for="disabledf">This is uneditable field</label></td></tr></tbody></table></fieldset></td><td valign="top"><fieldset style="padding:6px 11px 13px 11px"><legend>DataSource&nbsp;<img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/s/b_help.png" align="absmiddle" style="border:0;" tooltip="'Datasource' indicates what's the field data source.<br/>If this field is 'Single Line', 'Multi Line', or 'Date', the data fetched by this script will drop down as user inputing tip.<br/>If this field is 'Dropdown', 'Radio', 'Checkbox', or 'Multi Select', the data fetched by this script will be the field's value list." onmouseover="javascript:js_show_tooltip(this)"/></legend><table border="0" cellpadding="0" cellspacing="0"><tbody id="appearance"><tr><td class="info-text" colspan="2" nowrap>Please specify the field's datasource.</td></tr><tr id="tr_datasource_none"><td colspan="2"><input type="radio" name="srctype" id="srctype1" value="1" onclick="javascript:docid('datasourcediv').style.display='none'" style="vertical-align:middle" checked><label for="srctype1" class="info-text">unrestricted</label></td></tr><tr><td colspan="2"><input type="radio" name="srctype" id="srctype2" value="2" onclick="javascript:docid('datasourcediv').style.display=''" style="vertical-align:middle"><label for="srctype2" class="info-text">mapping script&nbsp;<a href="javascript:openQB('copyToDataSource');"><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/sql-query.png" alt="open query builder" title="open query builder" border="0" align='absmiddle'/></a></label>&nbsp;<img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/help.gif" align="absmiddle" tooltip="Making a query statement containing one or two column(s) as the field's data source." onmouseover="javascript:js_show_tooltip(this)"/></td></tr><tr><td colspan="2"><input type="radio" name="srctype" id="srctype3" value="3" onclick="javascript:docid('datasourcediv').style.display='';$('datasource').focus();" style="vertical-align:middle"><label for="srctype3" class="info-text">enter values directly(one per line)</label>&nbsp;<img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/help.gif" align="absmiddle" tooltip="Enter the field's data source directly, 'value' or 'key:value'." onmouseover="javascript:js_show_tooltip(this)"/></td></tr></tbody></table><div id="datasourcediv"><textarea style="width:100%" id="datasource" name="datasource" class="inputtextarea" rows="6"></textarea></div></fieldset></td></tr></tbody></table><script language="javascript">
  checkFormEffect();
  if(docid('srctype1').checked) {
    docid('datasourcediv').style.display='none'
  } else {
    docid('datasourcediv').style.display='';
  }
</script><?php }} ?>