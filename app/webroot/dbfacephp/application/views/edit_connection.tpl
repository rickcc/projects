<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link REL="SHORTCUT ICON" href="[{#s_base#}]/dbfacephp/img/favorite.ico" type="image/x-icon"/><title>tmWorks dbFace for PHP --- create your first database connection.</title><link type="text/css" href="[{#s_base#}]/dbfacephp/css/ui-lightness/jquery-ui-1.7.2.custom.css" rel="stylesheet"><link type="text/css" href="[{#s_base#}]/dbfacephp/css/main.css" rel="stylesheet"><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/Utils.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/rview.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/prototype.js"></script><script type="text/javascript">
  function create_first_conn() {
    $('mainForm').request({
      onComplete: function(ajax){
        var ele=document.getElementById('error');
        ele.style.display="block";
        ele.innerHTML=ajax.responseText+"<img src='"+STATIC_URL+"/img/close.gif' onclick='javascript:hideElement(\"error\")' style='float:right;cursor:pointer'>";
        document.body.scrollTop=0;
        $('mainForm').enable();
        setBusy(false);
      }
    });
    $('mainForm').disable();
  }
  </script></head><body style="background:#E2F3B8"><div align="center" style="margin-top:100px"><form action="[{#dbfacephp_base_url#}]/index.php?c=conn" method="post" target="_self" name="mainForm" id="mainForm"><input type="hidden" name="requestID" value="editconn"><input type="hidden" name="dbid" value="[{$dbid}]"><table width="400" border="0" cellspacing="0" cellpadding="0" class="loginTable"><tr><td width="70%" valign="top" class="otherDisplay2" style="padding: 15px;"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="otherDisplay2"><tr><td colspan=5 class="bodyText" style="font-size:14px;font-weight:bold">Correct the connection profile.</td></tr><tr><td colspan=5><div id="error" style="display:none"></div></td></tr><tr><td height="10" colspan="5" class="bodyText"></td></tr><tr><td width="10" nowrap class="bodyText"></td><td width="30%" height="30" nowrap class="bodyTextBold">Alias:</td><td width="10"></td><td width="70%" height="30"><input name="alias" id="alias" type="text" class="textField" value="[{$alias}]" size="30"></td><td width="10"></td></tr><tr><td width="10" nowrap class="bodyText"></td><td width="30%" height="30" nowrap class="bodyTextBold">Host:</td><td width="10"></td><td width="70%" height="30"><input type="text" class="textField" name="host" id="host" value="[{$host}]" size="30"/></td><td width="10"></td></tr><tr><td width="10" nowrap class="bodyText">&nbsp;</td><td width="30%" height="30" nowrap class="bodyTextBold">Port:</td><td width="10">&nbsp;</td><td width="70%" height="30"><input type="text" class="textField" name="port" id="port" size="30" value="[{$port}]"></td><td width="10" height="30">&nbsp;</td></tr><tr><td width="10" nowrap class="bodyText">&nbsp;</td><td width="30%" height="30" nowrap class="bodyTextBold">Username:</td><td width="10">&nbsp;</td><td width="70%" height="30"><input type="text" class="textField" name="username" id="username" size="30" value="[{$username}]"></td><td width="10" height="30">&nbsp;</td></tr><tr><td width="10" nowrap class="bodyText">&nbsp;</td><td width="30%" height="30" nowrap class="bodyTextBold">Password:</td><td width="10">&nbsp;</td><td width="70%" height="30"><input type="password" class="textField" name="password" id="password" size="30" value="[{$password}]"></td><td width="10" height="30">&nbsp;</td></tr><tr><td width="10" nowrap class="bodyText">&nbsp;</td><td width="30%" height="30" nowrap class="bodyTextBold">Database Name:</td><td width="10">&nbsp;</td><td width="70%" height="30"><input type="text" class="textField" name="dbname" id="dbname" size="30" value="[{$dbname}]">&nbsp;<a class='subopen' href="javascript:pickdb();">Pick</a></td><td width="10" height="30">&nbsp;</td></tr><tr><td height="10" colspan="5"></td></tr><tr><td width="10" align="center">&nbsp;</td><td height="30" align="center"></td><td height="30" align="center">&nbsp;</td><td width="70%" height="30" align="center"><input class="reg" onmouseover="this.style.backgroundImage='url([{#s_base#}]/dbfacephp/img/btn_bkg_glass_green_hover.gif)'" onmouseout="this.style.backgroundImage='url([{#s_base#}]/dbfacephp/img/btn_bkg_glass_green.gif)'" value="Test and Correct" name="create" id="create" type="button" onclick="javascript:create_first_conn();"><span id="loading_f" style="display:none"><img align="absmiddle" src="[{#s_base#}]/dbfacephp/img/loading.gif"/></span><span class="bodyText">or <a href="javascript:document.location='[{#dbfacephp_base_url#}]/index.php?c=home&m=select';">Back</a></span><td width="10" height="30" align="center">&nbsp;</td></tr></table></td></tr></table></form></div><div class="clear"><hr/></div><div id="footer"><div class="xright">&#169; 2006-2012 <a href="http://www.dbfacephp.com" style="text-decoration:none;color:#000666" target="_blank">tmWorks Dev Team</a></div><div class="clear"><hr/></div></div></body></html>