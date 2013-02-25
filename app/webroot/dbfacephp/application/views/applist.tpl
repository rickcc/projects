<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/><link href="[{#s_base#}]/dbfacephp/css/style-default.css" rel="stylesheet" type="text/css"><link type="text/css" href="[{#s_base#}]/dbfacephp/css/c/thickbox.css" rel="stylesheet"/><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/prototype.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/jquery.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/Utils.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/rview.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/thickbox.js"></script><script tyle="text/javascript">
    function delete_app(appid) {
      document.mainForm.appid.value=appid;
      document.mainForm.action="[{#dbfacephp_base_url#}]/index.php?c=app&m=delete";
      if (confirm("This operation will delete the created application, are you sure?")) {
        document.mainForm.submit();
      }    
    }
    [{if $refresh_menu}]
    refreshmenu();
    [{/if}]
  </script></head><body><div id="bodyColumn"><div id="navcolumn" style="margin-bottom:3px"><a href="[{#dbfacephp_base_url#}]/index.php?c=home&m=dashboard">[{ci_lang key='strDashboard'}]</a> > [{ci_lang key='strApplicationManagement'}]</div><form action="[{#dbfacephp_base_url#}]" action="[{#dbfacephp_base_url#}]/index.php?c=app" method="post" name="mainForm"><input type="hidden" name="appid" value=""/></form><a href="[{#dbfacephp_base_url#}]/index.php?c=app&m=create_step1"><img src="[{#s_base#}]/dbfacephp/img/addapp.gif" align='absmiddle'>&nbsp;[{ci_lang key='strCreateApplication'}]</a><table><thead><tr><th>No</th><th class="sortable">Name</th><th class="sortable">Key</th><th class="sortable">Title</th><th>Description</th><th><br/></th></tr></thead><tbody>
[{section name=i loop=$apps}]
<tr class="[{cycle values="odd,even"}]"><td>[{$smarty.section.i.index+1}]</td><td>[{$apps[i].appname}]</td><td><a class="thickbox" href="[{#dbfacephp_base_url#}]/index.php?c=app&m=editappkey&appid=[{$apps[i].appid}]&width=450&height=150">[{if empty($apps[i].appkey)}]Enable[{else}]Disable[{/if}]</a></a></td><td>[{$apps[i].apptitle}]<br></td><td>[{$apps[i].appdesc}]<br></td><td nowrap><a href="[{#dbfacephp_base_url#}]/index.php?c=app&m=duplicate&appid=[{$apps[i].appid}]"><img src="[{#s_base#}]/dbfacephp/img/duplicate.gif" alt="Copy the application as a new one for editing." title="Copy the application as a new one for editing." align='absmiddle'>Duplicate</a>&nbsp; <a href="[{#dbfacephp_base_url#}]/index.php?c=app&m=edit&appid=[{$apps[i].appid}]"><img src="[{#s_base#}]/dbfacephp/img/edit.gif" alt="Edit the application" title="Edit the application." align='absmiddle'>Edit</a>&nbsp; <a href="javascript:delete_app([{$apps[i].appid}]);"><img src="[{#s_base#}]/dbfacephp/img/delete20.gif" alt="Delete the application" title="Delete the application" align='absmiddle'>Delete</a></td></tr>
[{sectionelse}]
<tr class="odd"><td colspan="5"><span class="info-text">[{ci_lang key='strNoApplicationMsg'}]</span></td></tr>
[{/section}] </tbody></table></div>
[{include file="analytics.tpl"}]
</body></html>