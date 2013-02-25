<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/><link href="[{#s_base#}]/dbfacephp/css/style-default.css" rel="stylesheet" type="text/css"><script language="javascript" src="[{#s_base#}]/dbfacephp/js/rview.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/prototype.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/jquery.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/tommick.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/Utils.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/rview.js"></script><script language="javascript">
    function submitRow(argReqID, argUserID, argConnID) {
      document.mainForm.requestID.value = argReqID;
      document.mainForm.userID.value = argUserID;
      document.mainForm.connID.value = argConnID;
      document.mainForm.submit();
    }
    
    function submitTablePermission() {
    }
    
    function deleteUserConn(userid, dbid) {
      if (confirm("The user will not be able to access the connection.If you are the creator of this connection, the connection will be deleted!\nDo you really want to do it?\nPress OK to confirm or press Cancel to return back.")) {
        document.mainForm.requestID.value="deleteuserpriv";
        document.mainForm.dbid.value = dbid;
        document.mainForm.userid.value=userid;
        document.mainForm.submit();
      }
    }
    function deleteConn(dbid) {
      if (confirm("All data for this connection will be lost, Do you really want to delete the connection.\nPress OK to delete or press Cancel to return back.")) {
        document.mainForm.requestID.value="deleteconn";
        document.mainForm.dbid.value = dbid;
        document.mainForm.submit();
      }
    }
    function show_permission_users(dbid) {
      freezeBackground(true);
      var ajax=new Ajax.Request(ROOT_URL+'?c=conn&m=listpriv', {
        method:'get',
        parameters: {"dbid": dbid},
        onComplete:function(transport) {
          removeFreezeLoading();
          var eleDiv = $('div_adduserpermission');
          eleDiv.update(transport.responseText);
          eleDiv.style.display="block";
          eleDiv.style.width="500px";

          if(!lastFlyBarX || !lastFlyBarY) {
            eleDiv.style.left="100px";
            eleDiv.style.top="100px";
          } else {
            eleDiv.style.left=lastFlyBarX+"px";
            eleDiv.style.top=lastFlyBarY+"px";
          }
        }
      });
    }
    function closeLayer() {
      unFreezeBackground();
      var ele=document.getElementById('div_adduserpermission');
      if(ele != null) {
        ele.style.display="none";
      }
    } 
    
    function show_permission_tables(uid, dbid) {
      freezeBackground(true);
	  
      var ajax=new Ajax.Request(ROOT_URL+'?c=conn&m=listtablepermission', {
        method:'get',
        parameters: {"dbid": dbid, "uid" :uid},
        onComplete:function(transport) {
          removeFreezeLoading();
          var eleDiv = $('div_tablepermission');
          eleDiv.update(transport.responseText);
          eleDiv.style.display="block";
          eleDiv.style.width="500px";

          if(!lastFlyBarX || !lastFlyBarY) {
            eleDiv.style.left="100px";
            eleDiv.style.top="100px";
          } else {
            eleDiv.style.left=lastFlyBarX+"px";
            eleDiv.style.top=lastFlyBarY+"px";
          }
        }
      });
    }
    
    function close_permission_tables() {
      unFreezeBackground();
      var ele=document.getElementById('div_tablepermission');
      if(ele != null) {
        ele.style.display="none";
      }
    }
</script></head><body><div id="bodyColumn"><div id="navcolumn"><a href="[{#dbfacephp_base_url#}]/index.php?c=home&m=dashboard">[{ci_lang key='strDashboard'}]</a> > [{ci_lang key='strAdministration'}]</div><div class="clear" style="margin-bottom:5px"></div>
[{if $message}]<div id="error"><h1>[{$message}]</h1><img style="float:right;cursor: pointer;" onclick='javascript:hideElement("error")' src="[{#s_base#}]/dbfacephp/img/close.gif"/></div>[{/if}]
<form action="index.php?c=conn" method="post" name="mainForm"><input type="hidden" name="requestID" value=""><input type="hidden" name="userid" value=""><input type="hidden" name="dbid" value=""></form><a href="[{#dbfacephp_base_url#}]/index.php?c=conn&m=create"><img src="[{#s_base#}]/dbfacephp/img/setupconn.gif" align='absmiddle'>Setup new connection</a>&nbsp;
<a href="[{#dbfacephp_base_url#}]/index.php?c=register"><img src="[{#s_base#}]/dbfacephp/img/newaccount.png" align='absmiddle'>Create new account</a><table><thead><tr><th>No</th><th>Action</th><th>Connection Name</th><th>User Permission</th></tr></thead><tbody> [{section name=i loop=$dbs}] <tr class="[{if $smarty.section.i.index % 2 == 0}]odd[{else}]even[{/if}] [{if $dbs[i].dbid==$cur_dbid}]marked[{/if}]"><td>[{$smarty.section.i.index+1}]</td><td style="width:60px" nowrap><a href="javascript:show_permission_users([{$dbs[i].dbid}]);"><img src="[{#s_base#}]/dbfacephp/img/user_per.png" align='absmiddle'></a><a href="[{#dbfacephp_base_url#}]/index.php?c=conn&m=inedit&dbid=[{$dbs[i].dbid}]"><img src="[{#s_base#}]/dbfacephp/img/edit.gif" align='absmiddle'></a><a href="javascript:deleteConn('[{$dbs[i].dbid}]')"><img src="[{#s_base#}]/dbfacephp/img/delete20.gif" align='absmiddle'></a></td><td>[{$dbs[i].aliasname}]<br/><span class="info-text">[{$dbs[i].dbname}]@[{$dbs[i].host}]</span></td><td><table class="simple sublist" id="child1"><thead><tr><th>Username</th><th>Role</th><th>Action</th></tr></thead><tbody> [{section name=j loop=$dbs[i].dbusers}] <tr class="[{if $smarty.section.j.index % 2 == 0}]odd[{else}]even[{/if}]"><td>[{$dbs[i].dbusers[j].username}]</td><td>[{if $dbs[i].dbusers[j].priv == 1}]Administrator[{elseif $dbs[i].dbusers[j].priv == 2}]Developer[{elseif $dbs[i].dbusers[j].priv == 9}]User[{/if}]</td><td><a class="row-edit" href="javascript:deleteUserConn('[{$dbs[i].dbusers[j].userid}]', '[{$dbs[i].dbid}]')">&nbsp;Unauthorize&nbsp;</a> [{if $dbs[i].dbusers[j].priv != 1}]<a class="row-edit" href="javascript:show_permission_tables('[{$dbs[i].dbusers[j].userid}]', '[{$dbs[i].dbid}]')">&nbsp;Permission&nbsp;</a>[{else}]&nbsp;[{/if}] </td></tr> [{/section}] </tbody></table></td></tr> [{/section}] </tbody></table></div><div id="div_adduserpermission" style="display:none;position:absolute;z-index:1000;"></div><div id="div_tablepermission" style="display:none;position:absolute;z-index:1000;"></div>
[{include file="analytics.tpl"}]
</body></html>