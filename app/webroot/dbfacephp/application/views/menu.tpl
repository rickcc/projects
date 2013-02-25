<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd"><html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/><title>[{#title#}]</title> [{if $phpload}] <link type="text/css" href="[{#s_base#}]/dbfacephp/css/load.php?load=style-default.css" rel="stylesheet"/><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/load.php?load=prototype.js,tommick.js,Utils.js,rview.js"></script><script src="[{#s_base#}]/dbfacephp/js/global.js" type="text/javascript"></script> [{else}] <link href="[{#s_base#}]/dbfacephp/css/style-default.css" rel="stylesheet" type="text/css"><script src="[{#s_base#}]/dbfacephp/js/prototype.js" type="text/javascript"></script><script src="[{#s_base#}]/dbfacephp/js/tommick.js" type="text/javascript"></script><script src="[{#s_base#}]/dbfacephp/js/global.js" type="text/javascript"></script><script src="[{#s_base#}]/dbfacephp/js/Utils.js" type="text/javascript"></script><script src="[{#s_base#}]/dbfacephp/js/rview.js" type="text/javascript"></script> [{/if}] <style>html{overflow-y:scroll;}</style></head><body><div id="dl-navigation" class="clearfix"><div id="xNav"><form action="[{#dbfacephp_base_url#}]/index.php?c=req" method="post" name="menuform" target="content"><input type="hidden" name="requestID" value=""/> [{if !$hidetablesection}] <div class="xNavGrp" id="nav_grp_tables"><h5><a href="javascript:;">[{if $strDbSectionTitle}][{$strDbSectionTitle}][{else}][{$dbname}][{/if}]</a></h5><ul id="categories" id="cat_grp_tables"> [{section name=i loop=$tables}] <li><a href="[{#dbfacephp_base_url#}]/index.php?c=viewtable&viewname=[{$tables[i].name}]" target="content">[{$tables[i].menuname}]</a></li> [{/section}] </ul></div> [{/if}] <div class="xNavGrp" id="nav_grp_apps"><h5>[{if $priv == 1 || $priv == 2}]<a href="[{#dbfacephp_base_url#}]/index.php?c=app&m=applist" target="content">[{if $strAppSectionTitle}][{$strAppSectionTitle}][{else}][{ci_lang key='strApplications'}][{/if}]</a>[{else}]<a href="javascript:;">[{if $strAppSectionTitle}][{$strAppSectionTitle}][{else}][{ci_lang key='strApplications'}][{/if}]</a>[{/if}]</h5><ul id="categories" id="cat_grp_apps"> [{section name=i loop=$apps}] <li><a href="[{#dbfacephp_base_url#}]/index.php?c=app&appid=[{$apps[i].appid}]" target="content">[{$apps[i].appname}]</a></li> [{sectionelse}] [{if $priv == 1 || $priv == 2}] <li><a href="[{#dbfacephp_base_url#}]/index.php?c=app&m=create_step1" target="content">[{ci_lang key='strCreateApplication'}]</a></li> [{else}] <li><a href="javascript:;">no application found</a></li> [{/if}] [{/section}] </ul></div> [{if $priv == 1 || $priv == 2}] <div class="xNavGrp" id="nav_grp_tools"><h5><a href="javascript:;">[{ci_lang key='strSettingsAndTools'}]</a></h5><ul id="categories"><li><a href="[{#dbfacephp_base_url#}]/index.php?c=conn&m=listconn" target="content">[{ci_lang key='strAdministration'}]</a></li><li><a href="[{#dbfacephp_base_url#}]/index.php?c=form&m=show" target="content">[{ci_lang key='strFormbuilder'}]</a></li><li><a href="[{#dbfacephp_base_url#}]/index.php?c=qb&m=show" target="content">[{ci_lang key='strQuerybuilder'}]</a></li><li><a href="[{#dbfacephp_base_url#}]/index.php?c=req&m=initiudbuilder" target="content">[{ci_lang key='strDmlbuilder'}]</a></li><li><a href="[{#dbfacephp_base_url#}]/index.php?c=webconsole" target="content">[{ci_lang key='strWebConsole'}]</a></li><li><a href="[{#dbfacephp_base_url#}]/index.php?c=sqllab" target="content">[{ci_lang key='strSQLEditor'}]</a></li><li><a href="[{#dbfacephp_base_url#}]/index.php?c=structure" target="content">[{ci_lang key='strDatabaseStructure'}]</a></li><li><a href="[{#dbfacephp_base_url#}]/index.php?c=privileges" target="content">[{ci_lang key='strDatabasePrivileges'}]</a></li><li><a href="[{#dbfacephp_base_url#}]/index.php?c=importandexport" target="content">[{ci_lang key='strBackupandRestore'}]</a></li><li><a href="[{#dbfacephp_base_url#}]/index.php?c=showlogs" target="content">[{ci_lang key='strShowLog'}]</a></li><li><a href="[{#dbfacephp_base_url#}]/index.php?c=admin" target="content">[{ci_lang key='strDbFacePHPConfig'}]</a></li> [{if $showAbout}] <li><a href="[{#dbfacephp_base_url#}]/index.php?c=about" target="content">[{ci_lang key='strAbout'}]</a></li> [{/if}] </ul></div> [{/if}] </form></div></div>
[{include file="analytics.tpl"}]
</body></html>