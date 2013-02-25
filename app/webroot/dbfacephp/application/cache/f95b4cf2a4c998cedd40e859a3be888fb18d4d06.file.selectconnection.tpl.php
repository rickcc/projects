<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 16:04:27
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/selectconnection.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69046289950a574fb7eddc2-45045063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f95b4cf2a4c998cedd40e859a3be888fb18d4d06' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/selectconnection.tpl',
      1 => 1352280110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69046289950a574fb7eddc2-45045063',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dbs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a574fba571c0_09215636',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a574fba571c0_09215636')) {function content_50a574fba571c0_09215636($_smarty_tpl) {?><html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link REL="SHORTCUT ICON" href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/favorite.ico" type="image/x-icon"/><title>tmWorks dbFace for PHP --- take your hosted database to web.</title><link type="text/css" href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/main.css" rel="stylesheet"><link type="text/css" href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/ui-lightness/jquery-ui-1.7.2.custom.css" rel="stylesheet"><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/Utils.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/rview.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/prototype.js"></script><script type="text/javascript">

  function editconn() {
    var dbid=$('connection').value;
    document.location.href = "<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=conn&m=edit&dbid="+dbid;
  }
  function enter() {
    var seldbid = $('connection').value;
    var ajax=new Ajax.Request(ROOT_URL+'?c=home&m=enter', {
      method:'post',
      parameters: 'seldbid='+seldbid,
      onComplete:function(ajax) {
        var json = ajax.responseJSON;
        if (!json.success) {
          $('div_message').update('<div style="padding: 0pt 0.7em;" class="ui-state-error ui-corner-all"> <strong>Alert:</strong> '+json.message+'</div>').show();
        } else {
          document.main.submit();
        }
      }
    }); 
  }
  </script></head><body style="background:#E2F3B8"><div align="center" style="margin-top:100px"><div class="ui-widget" id="div_message" style="margin-bottom:5px;width:430px;text-align:left;display:none"></div><form action="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php" method="post" target="_self" name="main" id="main"><input type="hidden" name="action" value="main"/></form><form action="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php" method="post" target="_self" name="login" id="login"><input type="hidden" name="action" value="enter"/> <?php if ($_smarty_tpl->tpl_vars['dbs']->value){?> <table width="400" border="0" cellspacing="0" cellpadding="0" class="loginTable"><tr><td width="30%" valign="top" class="otherDisplay2" style="padding:15px;"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td align="center"><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/logingif.gif"></td></tr><tr><td height="20" class="bodyText" nowrap>Welcome to tmWorks dbFace!</td></tr><tr><td height="10"></td></tr><tr><td class="bodyText">Please select or create a valid connection.<br/><br/></td></tr><tr><td class="bodyText">This is not your account, Click <a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=home&m=logout" class="subopen">here</a> to back</td></tr></table></td><td width="70%" valign="top" class="otherDisplay2" style="padding: 15px;"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/login.gif" width="80" height="36"></td></tr></table><table width="100%" border="0" cellpadding="0" cellspacing="0" class="otherDisplay2" id="div_selconnection"><tr><td height="10" colspan="4" class="bodyText"></td></tr><tr><td colspan="4" class="bodyText">Please select a valid connection to enter. </td></tr><tr><td width="30%" height="30" class="bodyTextBold" align=right>Connections:</td><td width="10"></td><td width="70%" height="30"><select name="seldbid" id="connection"> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
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
?> <option value="<?php echo $_smarty_tpl->tpl_vars['dbs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['dbid'];?>
"><?php echo $_smarty_tpl->tpl_vars['dbs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['aliasname'];?>
:<?php echo $_smarty_tpl->tpl_vars['dbs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['dbname'];?>
@<?php echo $_smarty_tpl->tpl_vars['dbs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['host'];?>
</option> <?php endfor; endif; ?> </select></td><td width="10"></td></tr><tr><td colspan=4 class="bodyText">Click <a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=req&m=createconn">here </a> to create a new connection, or Click <a href="javascript:editconn();">here</a> to manage the existed connections profiles.</td></tr><tr><td height="10" colspan="4"></td></tr><tr><td height="30" align="center"></td><td height="30" align="center">&nbsp;</td><td width="70%" height="30" align="center"><input class="reg" onmouseover="this.style.backgroundImage='url(<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/btn_bkg_glass_green_hover.gif)'" onmouseout="this.style.backgroundImage='url(<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/btn_bkg_glass_green.gif)'" value="Enter" name="Enter" id="Enter" type="button" onclick="javascript:enter();"><td width="10" height="30" align="center">&nbsp;</td></tr></table> <?php }else{ ?> <table width="400" border="0" cellspacing="0" cellpadding="0" class="loginTable"><tr><td valign="top" class="otherDisplay2" style="padding: 15px;"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="otherDisplay2" id="div_selconnection"><tr><td height="10" colspan="4" class="bodyText" style="font-size:14px;color:#5C99C7"><b>Ready to starting your DbFacePHP !</b></td></tr><tr><td height="20" colspan="4">&nbsp;</td></tr><tr><td colspan=4 class="bodyText" style="line-height:18px;font-size:12px">No DbFacePHP connection found, you can <p/>Click <a class="gbtn primary" href="javascript:;" onclick="javascript:document.location='<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=home&m=bindall'"><span><span>Quick Bind All</span></span></a><br/>to manage databases on the same host with DbFacePHP, or <p/><br/>Click <a class="gbtn primary" href="javascript:;" onclick="javascript:document.location='<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=req&m=createconn'"><span><span>Create a connection</span></span></a><br/>to create MySQL connection on any host.</td></tr><tr><td height="10" colspan="4"></td></tr></table> <?php }?> </td></tr></table></form></div><div class="clear"><hr/></div><div id="footer"><div class="xright">&#169; 2006-2012 <a href="http://www.dbfacephp.com/" style="text-decoration:none;color:#000666" target="_blank">tmWorks Dev Team</a></div><div class="clear"><hr/></div></div></body></html><?php }} ?>