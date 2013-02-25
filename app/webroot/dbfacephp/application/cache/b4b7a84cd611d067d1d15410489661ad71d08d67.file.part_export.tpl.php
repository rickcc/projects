<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 18:18:54
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/part_export.tpl" */ ?>
<?php /*%%SmartyHeaderCode:171614221250a5947eb4bb17-07327398%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4b7a84cd611d067d1d15410489661ad71d08d67' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/part_export.tpl',
      1 => 1352280092,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171614221250a5947eb4bb17-07327398',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tables' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a5947ebafb37_98815551',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a5947ebafb37_98815551')) {function content_50a5947ebafb37_98815551($_smarty_tpl) {?><form name="dump" method="post" action="index.php?c=importandexport&m=export"><fieldset id="exportoptions"><legend>Export</legend><div class="formelementrow"><div align="left"><fieldset><legend>Please select table(s) to export(<a class="subopen" href="javascript:;" onclick="setCheckboxes('exportoptions', true); return false;">Check All</a> /<a href="javascript:;" class="subopen" onclick="setCheckboxes('exportoptions', false);  return false;">Uncheck All</a>)</legend><table style="background:none;border:0;margin:5px"><tbody> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
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
?> <tr><td><input type="checkbox" name="table_select[]" value="<?php echo $_smarty_tpl->tpl_vars['tables']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
" id="table_select_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index']+1;?>
" checked/><label for="table_select_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index']+1;?>
" title="<?php echo $_smarty_tpl->tpl_vars['tables']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['tables']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
</label></td></tr> <?php endfor; endif; ?> </tbody></table></fieldset></div><br/></div><div class="formelementrow"> Compression: <input type="radio" name="compression" value="none" id="radio_compression_none" onclick="document.getElementById('checkbox_dump_asfile').checked = true;" checked="checked"/><label for="radio_compression_none">None</label><input type="radio" name="compression" value="zip" id="radio_compression_zip" onclick="document.getElementById('checkbox_dump_asfile').checked = true;"/><label for="radio_compression_zip">"zipped"</label><input type="radio" name="compression" value="gzip" id="radio_compression_gzip" onclick="document.getElementById('checkbox_dump_asfile').checked = true;"/><label for="radio_compression_gzip">"gzipped"</label><input type="radio" name="compression" value="bzip" id="radio_compression_bzip" onclick="document.getElementById('checkbox_dump_asfile').checked = true;"/><label for="radio_compression_bzip">"bzipped"</label></div></fieldset><fieldset class="tblFooters"><input type="submit" class="input-submit" value="Go" id="buttonGo"/></fieldset></form><?php }} ?>