<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link REL="SHORTCUT ICON" href="[{#s_base#}]/dbfacephp/img/favorite.ico" type="image/x-icon"/><title>[{#title#}]</title><link type="text/css" href="[{#s_base#}]/dbfacephp/css/main.css" rel="stylesheet"> [{if $phpload}] <script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/load.php?load=jquery.js,Utils.js,rview.js,prototype.js"></script> [{else}] <script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/jquery.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/Utils.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/rview.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/prototype.js"></script> [{/if}] <script type="text/javascript">
  function editconn() {
    var dbid=$('connection').value;
    document.location.href = "[{#dbfacephp_base_url#}]/index.php?c=req&requestID=myconnections&dbid="+dbid;
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
[{if $msg}]<div id="error" style="margin-bottom:5px;width:430px;text-align:left;">[{$msg}]</div>[{/if}]
<form action="[{#dbfacephp_base_url#}]/index.php?c=home&m=login" method="post" target="_self" name="login" id="login"><table width="400" border="0" cellspacing="0" cellpadding="0" class="loginTable"><tr><td width="30%" valign="top" class="otherDisplay2" style="padding:15px;"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td align="center"><img src="[{#s_base#}]/dbfacephp/img/logingif.gif"></td></tr><tr><td height="20" class="bodyText" nowrap>[{ci_lang key='strLoginWelcome'}]</td></tr><tr><td height="10"></td></tr><tr><td class="bodyText">[{ci_lang key='strLoginTip'}]<br/><br/></td></tr></table></td><td width="70%" valign="top" class="otherDisplay2" style="padding: 15px;"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td><img src="[{#s_base#}]/dbfacephp/img/login.gif" width="80" height="36"></td></tr></table><table width="100%" border="0" cellpadding="0" cellspacing="0" class="otherDisplay2" id="div_login"><tr><td height="10" colspan="5" class="bodyText"></td></tr><tr><td width="10" nowrap class="bodyText"></td><td width="30%" height="30" class="bodyTextBold" align="right">[{ci_lang key='strUsername'}]:</td><td width="10"></td><td width="70%" height="30"><input type="text" class="textField" name="username" id="username" value="[{$username}]" size="30"/></td><td width="10"></td></tr><tr><td width="10" nowrap class="bodyText">&nbsp;</td><td width="30%" height="30" nowrap class="bodyTextBold" align="right">[{ci_lang key='strPassword'}]:</td><td width="10">&nbsp;</td><td width="70%" height="30"><input type="password" class="textField" name="password" id="password" size="30" value="[{$password}]"></td><td width="10" height="30">&nbsp;</td></tr><tr><td width="10" nowrap class="bodyText">&nbsp;</td><td width="30%" height="30" nowrap class="bodyText">&nbsp;</td><td width="10">&nbsp;</td><td width="70%" height="30"><table border="0" cellspacing="0" cellpadding="0"><tr><td height="26" align="left"><input type="checkbox" name="autologin" id="autologin" value="1"/></td><td height="26" class="bodyText" nowrap>[{ci_lang key='strRemember'}]</td></tr></table></td><td width="10" height="30">&nbsp;</td></tr><tr><td height="10" colspan="5"></td></tr><tr><td width="10" align="center">&nbsp;</td><td height="30" align="center"></td><td height="30" align="center">&nbsp;</td><td width="70%" height="30" align="center"><input class="reg" onmouseover="this.style.backgroundImage='url([{#s_base#}]/dbfacephp/img/btn_bkg_glass_green_hover.gif)'" onmouseout="this.style.backgroundImage='url([{#s_base#}]/dbfacephp/img/btn_bkg_glass_green.gif)'" value="[{ci_lang key='strSignIn'}]" name="SignIn" id="signin" type="submit"><span id="loading_f" style="display:none"><img align="absmiddle" src="[{#s_base#}]/dbfacephp/img/loading.gif"/></span><td width="10" height="30" align="center">&nbsp;</td></tr></table></td></tr></table><div style="margin-top:5px">[{include file="tb.tpl"}]</div></form></div><div class="clear"><hr/></div><div id="footer"><div class="xright">[{ci_lang key='strCopyRightFooter'}]</div><div class="clear"><hr/></div></div>
[{include file="chkupdate.tpl"}]
[{include file="analytics.tpl"}]
</body></html>