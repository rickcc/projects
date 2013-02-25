<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 18:19:42
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/form/tableformwizard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6291544250a594ae91c5e9-52709874%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c09ffc84ba946e15154e34f41d622328a4248af' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/form/tableformwizard.tpl',
      1 => 1352280068,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6291544250a594ae91c5e9-52709874',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fwizard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a594ae9e70c4_25578011',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a594ae9e70c4_25578011')) {function content_50a594ae9e70c4_25578011($_smarty_tpl) {?><table>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['fwizard']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?>
<tr><td><input type="checkbox" name="gen_forceuse[]" class="gen_forceuse" value="1" checked/></td><td><label class="field-label"><input type="hidden" class="gen_forcefield" name="gen_forcefield[]" value="<?php echo $_smarty_tpl->tpl_vars['fwizard']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['fieldname'];?>
"/><?php echo $_smarty_tpl->tpl_vars['fwizard']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['fieldname'];?>
</label></td><td><select class="gen_forcetype" name="gen_forcetype[]"><option value="1" <?php if ($_smarty_tpl->tpl_vars['fwizard']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['datatype']==1){?>selected<?php }?>>Single Line</option><option value="3" <?php if ($_smarty_tpl->tpl_vars['fwizard']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['datatype']==3){?>selected<?php }?>>Multi Line</option><option value="100" <?php if ($_smarty_tpl->tpl_vars['fwizard']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['datatype']==100){?>selected<?php }?>>Dropdown</option><option value="101" <?php if ($_smarty_tpl->tpl_vars['fwizard']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['datatype']==101){?>selected<?php }?>>Radio</option><option value="103" <?php if ($_smarty_tpl->tpl_vars['fwizard']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['datatype']==103){?>selected<?php }?>>Checkbox</option><option value="102" <?php if ($_smarty_tpl->tpl_vars['fwizard']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['datatype']==102){?>selected<?php }?>>Multi Select</option><option value="10" <?php if ($_smarty_tpl->tpl_vars['fwizard']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['datatype']==10){?>selected<?php }?>>Date</option></select></td></tr>
<?php endfor; endif; ?>
</table><?php }} ?>