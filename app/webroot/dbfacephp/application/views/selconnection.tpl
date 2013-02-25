<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link REL="SHORTCUT ICON" href="[{#s_base#}]/dbfacephp/img/favorite.ico" type="image/x-icon"/><title>tmWorks dbFace for PHP --- take your hosted database to web.</title><link type="text/css" href="[{#s_base#}]/dbfacephp/css/main.css" rel="stylesheet"><link type="text/css" href="[{#s_base#}]/dbfacephp/css/ui-lightness/jquery-ui-1.7.2.custom.css" rel="stylesheet"><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/Utils.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/rview.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/prototype.js"></script><script type="text/javascript">
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
  </script></head><body><div id="breadcrumbs"><div class="xright"><noscript><font color="red">You must enable javascript to run this product.</font></noscript>&nbsp;</div><div class="clear"><hr/></div></div><br/><br/><br/><div align="center"><div class="ui-widget" id="div_message" style="margin-bottom:5px;width:430px;text-align:left;display:none"></div><form action="[{#dbfacephp_base_url#}]/index.php" method="post" target="_self" name="main" id="main"><input type="hidden" name="action" value="main"/></form><form action="[{#dbfacephp_base_url#}]/index.php" method="post" target="_self" name="login" id="login"><input type="hidden" name="action" value="enter"/><table width="400" border="0" cellspacing="0" cellpadding="0" class="loginTable"><tr><td width="30%" valign="top" class="otherDisplay2" style="padding:15px;"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td align="center"><img src="[{#s_base#}]/dbfacephp/img/logingif.gif"></td></tr><tr><td height="20" class="bodyText" nowrap>Welcome to tmWorks dbFace!</td></tr><tr><td height="10"></td></tr><tr><td class="bodyText">Enter your username and password to login.<br/><br/></td></tr><tr><td class="bodyText">New to dbFace? It's free and easy. <a href="[{#dbfacephp_base_url#}]/index.php?c=register" class="subopen">Sign Up Now</a></td></tr></table></td><td width="70%" valign="top" class="otherDisplay2" style="padding: 15px;"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td><img src="[{#s_base#}]/dbfacephp/img/login.gif" width="80" height="36"></td></tr></table><table width="100%" border="0" cellpadding="0" cellspacing="0" class="otherDisplay2" id="div_selconnection"><tr><td height="10" colspan="4" class="bodyText"></td></tr><tr><td colspan="4" class="bodyText">Please select a valid connection to enter. </td></tr><tr><td width="30%" height="30" class="bodyTextBold" align=right>Connections:</td><td width="10"></td><td width="70%" height="30"><select name="seldbid" id="connection"> [{section name=i loop=$conns}] <option value='[{$conns[i].dbid}]'>[{$conns[i].aliasname}]</option> [{/section}] </select></td><td width="10"></td></tr><tr><td colspan=4 class="bodyText">Click <a href="[{#dbfacephp_base_url#}]/index.php?c=req&m=createconn">here </a> to create a new connection, or Click <a href="javascript:editconn();">here</a> to manage my existed connection profiles.</td></tr><tr><td height="10" colspan="4"></td></tr><tr><td height="30" align="center"></td><td height="30" align="center">&nbsp;</td><td width="70%" height="30" align="center"><input class="reg" onmouseover="this.style.backgroundImage='url([{#s_base#}]/dbfacephp/img/btn_bkg_glass_green_hover.gif)'" onmouseout="this.style.backgroundImage='url([{#s_base#}]/dbfacephp/img/btn_bkg_glass_green.gif)'" value="Enter" name="Enter" id="Enter" type="button" onclick="javascript:enter();"><td width="10" height="30" align="center">&nbsp;</td></tr></table></td></tr></table></form></div><div class="clear"><hr/></div><div id="footer"><div class="xright">&#169; 2006-2012 <a href="http://www.dbfacephp.org" style="text-decoration:none;color:#000666" target="_blank">tmWorks Dev Team</a></div><div class="clear"><hr/></div></div></body></html>