<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/><link REL="SHORTCUT ICON" href="[{#s_base#}]/dbfacephp/img/favorite.ico" type="image/x-icon"/><link href="[{#s_base#}]/dbfacephp/css/style-default.css" rel="stylesheet" type="text/css"><link type="text/css" href="[{#s_base#}]/dbfacephp/css/main.css" rel="stylesheet"><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/prototype.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/jquery.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/tommick.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/Utils.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/rview.js"></script><script type="text/javascript">
    document.observe("dom:loaded", function() {
      if (typeof(autoSug) == "undefined") {
        autoSug = new autoSuggest("username", {'urlFun':accountlisturl});
      }  
    });
    function editconn() {
      var dbid = $('dbid').value;
      document.location.href="[{#dbfacephp_base_url#}]/index.php?c=req&m=editconn&dbid="+dbid;
    }
    function deleteconnection() {
       if (confirm("All data of the selected connection will be lost. Do you really want to delete the connection "+$('dbid').options[$('dbid').selectedIndex].text+"?\n\nPress OK to delete or press Cancel to return back.")) {
        document.location.href="[{#dbfacephp_base_url#}]/index.php?c=conn&m=del&dbid="+$('dbid').value;      
      }
    }
    function accountlisturl() {
      return "[{#dbfacephp_base_url#}]/index.php?c=req&m=accountlist&query="+$('username').value;
    }
    function enter() {
      var seldbid=$('dbid').value;
      var ajax=new Ajax.Request(ROOT_URL+'?c=home&m=enter', {
        method:'post',
        parameters: 'seldbid='+seldbid,
        onComplete:function(ajax) {
          var json = ajax.responseJSON;
          if (!json.success) {
            // $('div_message').update('<div style="padding: 0pt 0.7em;" class="ui-state-error ui-corner-all"> <strong>Alert:</strong> '+json.message+'</div>').show();
          } else {
            document.menuForm.submit();
          }
        }
      });       
    }
    // 根据用户的Email赋予该用户执行权限
    function addprivilege() {
      var dbid = $('dbid').value;
      var username = $('username').value;

      new Ajax.Request("[{#dbfacephp_base_url#}]/index.php?c=conn&m=addprivilege", {
        method: 'get',
        parameters: {'dbid':dbid, 'username':username},
        onSuccess: function(o) {
          var data = eval("("+o.responseText+")");
          var success = data.success;
          var message = data.message;
          if (success == 0) {
            $('error').update(message).show();
          } else {
            $('accessusers').options[$('accessusers').options.length]=new Option(data.username+"("+data.email+")", data.userid, false, true);
          }
        }
      });
    }
    
    function delprivilege() {
      var dbid = $('dbid').value;
      var username = $('accessusers').value;
      var usernametext = $('accessusers').options[$('accessusers').selectedIndex].text;
      var dbname = $('dbid').options[$('dbid').selectedIndex].text;
      if (confirm(usernametext + " will not be able to accesss the connection :" + dbname + ", Do you really want to delete the user privilege ?\n\nPress OK to delete or press Cancel to return back.")) {
        new Ajax.Request("[{#dbfacephp_base_url#}]/index.php?c=conn&m=delprivilege", {
          method: 'get',
          parameters: {'dbid':dbid, 'username':username},
          onSuccess: function(o) {
          var data = eval("("+o.responseText+")");
          var success = data.success;
          var message = data.message;
          if (success == 0) {
            $('error').update(message).show();
          } else {
             var u = $('accessusers').options;
	           var li = u.length;
	           for( i = 0 ; i < li ; i ++ ) { if( u[i].value==data.userid ) { u[i] = null; li -=1; i-=1; } }
          }
          }
        });
      }    
    }
  </script></head><body style="text-align:center;"><form action="[{#dbfacephp_base_url#}]/index.php" method="post" id="menuForm" name="menuForm"><input type="hidden" name="action" value="main"/><input type="hidden" name="seldbid" value=""/></form><div id="breadcrumbs"><div class="xright"><noscript><font color="red">You must enable javascript to run this product.</font></noscript>&nbsp;</div><div class="clear"><hr/></div></div><br/><br/><br/><div style="width:600px;margin:0 auto;text-align:left"> [{if $message}]<div id="error">[{$message}]</div>[{else}]<div id="error" style="display:none"></div>[{/if}] <form action="[{#dbfacephp_base_url#}]/index.php?c=req&m=myconnections" method="post" id="mainForm" name="mainForm"> [{if $owner}] <table border="0" cellpadding="0" cellspacing="0" class="otherDisplay2"><tr><td class="config-label">Connections:</td><td><select id="dbid" name="dbid" class="config-picklist"> [{section name=i loop=$dbs}] <option value="[{$dbs[i].dbid}]" [{if $dbs[i].dbid == $dbid}]selected[{/if}]>[{$dbs[i].aliasname}]</option> [{/section}] </select><a href="javascript:editconn();"><img src="[{#s_base#}]/dbfacephp/img/add.gif" class="imgbtn" style="vertical-align:middle"/></a><img src="[{#s_base#}]/dbfacephp/img/delete20.gif" href="javascript:;" onclick="javascript:deleteconnection();" class="imgbtn" style="vertical-align:middle"/></td></tr><tr><td colspan="2" class="bodyText"><hr/></td></tr><tr><td class="config-label">Creator:</td><td id="creator">[{$creator}]</td></tr><tr><td colspan="2" class="bodyText"><hr/></td></tr><tr><td class="config-label">Access Users:</td><td><select MULTIPLE size=5 id="accessusers" name="accessusers" class="config-textarea" style="width:200px"> [{section name=i loop=$accessusers}] <option value="[{$accessusers[i].userid}]">[{$accessusers[i].accessuser}]</option> [{/section}] </select><img src="[{#s_base#}]/dbfacephp/img/user_delete.png" href="javascript:;" onclick="javascript:delprivilege();" class="imgbtn" style="vertical-align:bottom"/></td></tr><tr><td colspan="2" class="bodyText"><hr/></td></tr><tr><td class="config-label">Username:</td><td><input type="text" class="config-textfield" id="username" name="username" size="30" value="" autocomplete="off"/><input type="button" class="input-submit" value="Add" onclick="javascript:addprivilege();"/><br/><span class="info-text">Enter the username account that you want to give access privilege to the selected connection. </span></td></tr></table> [{else}] <table border="0" cellpadding="0" cellspacing="0" class="otherDisplay2"><tr><td class="config-label">Connections:</td><td><select id="dbid" name="dbid" class="config-picklist"> [{section name=i loop=$dbs}] <option value="[{$dbs[i].dbid}]" [{if $dbs[i].dbid == $dbid}]selected[{/if}]>[{$dbs[i].aliasname}]</option> [{/section}] </select></td></tr><tr><td colspan="2" class="bodyText"><hr/></td></tr><tr><td class="config-label">Creator:</td><td id="creator">[{$creator}]</td></tr></table> [{/if}] </form><input type="button" class="input-submit" value="Enter" onclick="javascript:enter();"/><input type="button" class="input-submit" value="Create new connection" onclick="javascript:document.location='[{#dbfacephp_base_url#}]/index.php?c=req&m=createconn';"/></div>
[{include file="analytics.tpl"}]
</body></html>