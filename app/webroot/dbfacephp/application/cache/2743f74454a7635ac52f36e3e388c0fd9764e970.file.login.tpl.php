<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 16:04:12
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:34471944650a574ec5f4235-42682509%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2743f74454a7635ac52f36e3e388c0fd9764e970' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/login.tpl',
      1 => 1352280080,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34471944650a574ec5f4235-42682509',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'phpload' => 0,
    'msg' => 0,
    'username' => 0,
    'password' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a574ecb92f41_58364263',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a574ecb92f41_58364263')) {function content_50a574ecb92f41_58364263($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ci_lang')) include '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application/libraries/Smarty/libs/plugins/function.ci_lang.php';
?><html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link REL="SHORTCUT ICON" href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/favorite.ico" type="image/x-icon"/><title><?php echo $_smarty_tpl->getConfigVariable('title');?>
</title><link type="text/css" href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/main.css" rel="stylesheet"> <?php if ($_smarty_tpl->tpl_vars['phpload']->value){?> <script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/load.php?load=jquery.js,Utils.js,rview.js,prototype.js"></script> <?php }else{ ?> <script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/jquery.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/Utils.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/rview.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/prototype.js"></script> <?php }?> <script type="text/javascript">
  function editconn() {
    var dbid=$('connection').value;
    document.location.href = "<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=req&requestID=myconnections&dbid="+dbid;
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
  </script></head><body style="background:#E2F3B8"><div align="center" style="margin-top:100px">
<?php if ($_smarty_tpl->tpl_vars['msg']->value){?><div id="error" style="margin-bottom:5px;width:430px;text-align:left;"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</div><?php }?>
<form action="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=home&m=login" method="post" target="_self" name="login" id="login"><table width="400" border="0" cellspacing="0" cellpadding="0" class="loginTable"><tr><td width="30%" valign="top" class="otherDisplay2" style="padding:15px;"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td align="center"><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/logingif.gif"></td></tr><tr><td height="20" class="bodyText" nowrap><?php echo smarty_function_ci_lang(array('key'=>'strLoginWelcome'),$_smarty_tpl);?>
</td></tr><tr><td height="10"></td></tr><tr><td class="bodyText"><?php echo smarty_function_ci_lang(array('key'=>'strLoginTip'),$_smarty_tpl);?>
<br/><br/></td></tr></table></td><td width="70%" valign="top" class="otherDisplay2" style="padding: 15px;"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/login.gif" width="80" height="36"></td></tr></table><table width="100%" border="0" cellpadding="0" cellspacing="0" class="otherDisplay2" id="div_login"><tr><td height="10" colspan="5" class="bodyText"></td></tr><tr><td width="10" nowrap class="bodyText"></td><td width="30%" height="30" class="bodyTextBold" align="right"><?php echo smarty_function_ci_lang(array('key'=>'strUsername'),$_smarty_tpl);?>
:</td><td width="10"></td><td width="70%" height="30"><input type="text" class="textField" name="username" id="username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" size="30"/></td><td width="10"></td></tr><tr><td width="10" nowrap class="bodyText">&nbsp;</td><td width="30%" height="30" nowrap class="bodyTextBold" align="right"><?php echo smarty_function_ci_lang(array('key'=>'strPassword'),$_smarty_tpl);?>
:</td><td width="10">&nbsp;</td><td width="70%" height="30"><input type="password" class="textField" name="password" id="password" size="30" value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
"></td><td width="10" height="30">&nbsp;</td></tr><tr><td width="10" nowrap class="bodyText">&nbsp;</td><td width="30%" height="30" nowrap class="bodyText">&nbsp;</td><td width="10">&nbsp;</td><td width="70%" height="30"><table border="0" cellspacing="0" cellpadding="0"><tr><td height="26" align="left"><input type="checkbox" name="autologin" id="autologin" value="1"/></td><td height="26" class="bodyText" nowrap><?php echo smarty_function_ci_lang(array('key'=>'strRemember'),$_smarty_tpl);?>
</td></tr></table></td><td width="10" height="30">&nbsp;</td></tr><tr><td height="10" colspan="5"></td></tr><tr><td width="10" align="center">&nbsp;</td><td height="30" align="center"></td><td height="30" align="center">&nbsp;</td><td width="70%" height="30" align="center"><input class="reg" onmouseover="this.style.backgroundImage='url(<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/btn_bkg_glass_green_hover.gif)'" onmouseout="this.style.backgroundImage='url(<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/btn_bkg_glass_green.gif)'" value="<?php echo smarty_function_ci_lang(array('key'=>'strSignIn'),$_smarty_tpl);?>
" name="SignIn" id="signin" type="submit"><span id="loading_f" style="display:none"><img align="absmiddle" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/loading.gif"/></span><td width="10" height="30" align="center">&nbsp;</td></tr></table></td></tr></table><div style="margin-top:5px"><?php echo $_smarty_tpl->getSubTemplate ("tb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></form></div><div class="clear"><hr/></div><div id="footer"><div class="xright"><?php echo smarty_function_ci_lang(array('key'=>'strCopyRightFooter'),$_smarty_tpl);?>
</div><div class="clear"><hr/></div></div>
<?php echo $_smarty_tpl->getSubTemplate ("chkupdate.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("analytics.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body></html><?php }} ?>