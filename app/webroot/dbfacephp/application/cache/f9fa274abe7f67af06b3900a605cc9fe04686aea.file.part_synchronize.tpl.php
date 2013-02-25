<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 18:18:54
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/part_synchronize.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59341947450a5947ebe1d18-41199276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9fa274abe7f67af06b3900a605cc9fe04686aea' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/part_synchronize.tpl',
      1 => 1352280094,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59341947450a5947ebe1d18-41199276',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'message' => 0,
    'dbs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a5947ec430c7_08790623',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a5947ec430c7_08790623')) {function content_50a5947ec430c7_08790623($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['error']->value){?><div class="error"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div><?php }?>
<form name="connection_form" id="connection_form" method="post" action="index.php?c=importandexport&m=synchronize"><fieldset><legend>Synchronize</legend><table id="serverconnection_src_remote" class="data" style="width:300px;float:left"><tr><th colspan="2">Source database</th></tr><tr class="odd"><td colspan="2" style="text-align: left"><select name="src_type" id="src_type" class="config-picklist" onchange="javascript:syn_change_type('src', $('src_type').value=='cur')"><option value="rmt">Remote server</option><option value="cur">Current server</option></select></td></tr><tr class="even" id="srctr1"><td>Host</td><td><input type="text" name="src_host" class="config-textfield"/></td></tr><tr class="odd" id="srctr2"><td>Port</td><td><input type="text" name="src_port" value="3306" class="config-textfield" maxlength="5" size="5"/></td></tr><tr class="even" id="srctr3"><td>Socket</td><td><input type="text" name="src_socket" class="config-textfield"/></td></tr><tr class="odd" id="srctr4"><td>User name</td><td><input type="text" name="src_username" class="config-textfield"/></td></tr><tr class="even" id="srctr5"><td>Password</td><td><input type="password" name="src_pass" class="config-textfield"/></td></tr><tr class="odd" id="srctr6"><td>Database</td><td><input type="text" name="src_db" class="config-textfield"/></td></tr><tr class="even" id="srctr7" style="display: none;"><td>Database</td><td><select name="src_db_sel" class="config-picklist" style="text-align:left"> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dbs']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?> <option value="<?php echo $_smarty_tpl->tpl_vars['dbs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['Database'];?>
"><?php echo $_smarty_tpl->tpl_vars['dbs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['Database'];?>
</option> <?php endfor; endif; ?> </select></td></tr></table><table id="serverconnection_trg_remote" class="data" style="width:300px;margin-left:10px"><tr><th colspan="2">Target database</th></tr><tr class="odd"><td colspan="2" style="text-align: left"><select name="trg_type" id="trg_type" class="config-picklist" style="text-align:left" onchange="javascript:syn_change_type('trg', $('trg_type').value=='cur')"><option value="rmt">Remote server</option><option value="cur">Current server</option></select></td></tr><tr class="even" id="trgtr1"><td>Host</td><td><input type="text" name="trg_host" class="config-textfield"/></td></tr><tr class="odd" id="trgtr2"><td>Port</td><td><input type="text" name="trg_port" class="config-textfield" value="3306" maxlength="5" size="5"/></td></tr><tr class="even" id="trgtr3"><td>Socket</td><td><input type="text" name="trg_socket" class="config-textfield"/></td></tr><tr class="odd" id="trgtr4"><td>User name</td><td><input type="text" name="trg_username" class="config-textfield"/></td></tr><tr class="even" id="trgtr5"><td>Password</td><td><input type="password" name="trg_pass" class="config-textfield"/></td></tr><tr class="odd" id="trgtr6"><td>Database</td><td><input type="text" name="trg_db" class="config-textfield"/></td></tr><tr class="even" id="trgtr7" style="display: none;"><td>Database</td><td><select name="trg_db_sel" class="config-picklist" style="text-align:left"> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dbs']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?> <option value="<?php echo $_smarty_tpl->tpl_vars['dbs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['Database'];?>
"><?php echo $_smarty_tpl->tpl_vars['dbs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['Database'];?>
</option> <?php endfor; endif; ?> </select></td></tr></table></fieldset><fieldset class="tblFooters"><input type="submit" class="input-submit" name="submit_connect" value="Go" id="buttonGo"/></fieldset></form><?php }} ?>