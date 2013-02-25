<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 16:33:42
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/dashboardapprun.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157600022050a57bd686c5f5-76771083%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2cf67aba7946068bfab3fdb803bb8bb467c7fa67' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/dashboardapprun.tpl',
      1 => 1352280030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157600022050a57bd686c5f5-76771083',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'appname' => 0,
    'layout' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a57bd6969ef8_53114511',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a57bd6969ef8_53114511')) {function content_50a57bd6969ef8_53114511($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ci_lang')) include '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application/libraries/Smarty/libs/plugins/function.ci_lang.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/><link href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/style-default.css" rel="stylesheet" type="text/css"><link href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/colors-fresh.css" rel="stylesheet" type="text/css"><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/jquery.js"></script><script type="text/javascript">
    function loadingIFRAME(iframeID) {
      $j('#load'+iframeID).hide();
      $j('#iframe'+iframeID).css('visibility', 'visible');
    }
  </script></head><body id="bodyColumn" style="margin-left:5px"><div id="navcolumn"><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=home&m=dashboard"><?php echo smarty_function_ci_lang(array('key'=>'strDashboard'),$_smarty_tpl);?>
</a> > <?php echo $_smarty_tpl->tpl_vars['appname']->value;?>
</div><div id="wpwrap"><div id="wpcontent"><div id="wpbody"><div id="wpbody-content"><div class="wrap"><div id="dashboard-widgets-wrap"><div id='dashboard-widgets' class='metabox-holder'> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['layout']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?> <div class='postbox-container' style='<?php if ($_smarty_tpl->tpl_vars['layout']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['fullwidth']==1){?>width:98%<?php }else{ ?>width:49%<?php }?>;'><div id='normal-sortables' class='meta-box-sortables'> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['j'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['j']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['name'] = 'j';
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['layout']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['apps']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?> <div class="postbox"><div class="handlediv" title="Click to toggle" onclick="javascript:$j('#div_inside_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index'];?>
_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['j']['index'];?>
').slideToggle('fast');"><br/></div> <?php if ($_smarty_tpl->tpl_vars['layout']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['minimized']==1){?> <script type="text/javascript">
          $j(document).ready(function() {
            $j('#div_inside_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index'];?>
_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['j']['index'];?>
').slideToggle('fast');
          });
        </script> <?php }?> <h3 class='hndle'><span><?php echo $_smarty_tpl->tpl_vars['layout']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['apps'][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['appname'];?>
</span></h3><div class="inside" style="align:center" id="div_inside_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index'];?>
_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['j']['index'];?>
"><div id="load<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index'];?>
_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['j']['index'];?>
" style="text-align:center;valign:middle"><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/iframe-loader.gif" alt="Application Loading..."/></div><iframe onload="javascript:loadingIFRAME('<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index'];?>
_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['j']['index'];?>
');" id="iframe<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index'];?>
_<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['j']['index'];?>
" style="margin-left:auto;margin-right:auto;visibility:hidden;border: 0px solid #ffffff;framespacing:0px;width:100%;min-height:300px" frameborder="0" src="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=app&appid=<?php echo $_smarty_tpl->tpl_vars['layout']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['apps'][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['appid'];?>
&iframe=true"></iframe></div></div> <?php endfor; endif; ?> </div></div> <?php endfor; endif; ?>
</div></div></div></div></div></div></div></body></html><?php }} ?>