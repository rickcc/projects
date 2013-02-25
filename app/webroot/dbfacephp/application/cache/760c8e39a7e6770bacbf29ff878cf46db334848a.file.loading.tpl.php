<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 16:05:08
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/inc/loading.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115623544250a5752417efd0-02895373%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '760c8e39a7e6770bacbf29ff878cf46db334848a' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/inc/loading.tpl',
      1 => 1352280074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115623544250a5752417efd0-02895373',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'width' => 0,
    'loadingmsg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a57524203cb9_32458455',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a57524203cb9_32458455')) {function content_50a57524203cb9_32458455($_smarty_tpl) {?><style>.status-window{z-index:10000;position:absolute;border:#98BFE2 2px solid;color:#000;font-weight:bold;background-color:#EEF6FD;}.status-window-table{font-weight:bold;font-family:Verdana,Arial,Helvetica,sans-serif;font-size:11px;border:0 none;margin-bottom:10px;}</style><div id="loading" style="display:none;width:<?php if ($_smarty_tpl->tpl_vars['width']->value){?><?php echo $_smarty_tpl->tpl_vars['width']->value;?>
<?php }else{ ?>220<?php }?>px" class="status-window"><table cellpadding="3" cellspacing="0" border="0" class="status-window-table"><tr align="center" valign="top"><td colspan="2" style="text-align:center;align:center"><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/loading_b.gif" width="32" height="32"></td></tr><tr align="left" valign="top"><td width="100%" colspan="2" valign='top' id='loadingmsg' nowrap><?php echo $_smarty_tpl->tpl_vars['loadingmsg']->value;?>
</td></tr></table></div><?php }} ?>