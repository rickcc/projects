<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/><link type="text/css" href="[{#s_base#}]/dbfacephp/css/style-default.css" rel="stylesheet"><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/rview.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/Utils.js"></script><script type="text/javascript">
    function go(argReqID) {
      if (argReqID=="refresh") {
        document.headform.target="menu";
      } else if(argReqID=="home"){
      	document.headform.action="login/main";
        document.headform.target="content";
      }
      setCookie("NavAccordion", parent.frames.menu.defaultNavAccordion.Accordion.elementsVisible.join("|"));
      document.headform.submit();
    }
    function changedb() {
      var oldtarget=document.headform.target;
      document.headform.target="_top";
      document.headform.action.value='changedb';
      document.headform.submit();
      document.headform.target=oldtarget;
    }
    function openDashboard() {
      var sunWin = window.open(ROOT_URL+'?c=home&m=dashboard','','scrollbars=yes,menubar=no,height=600,width=1024,resizable=yes,toolbar=no,location=no,status=no');
    }   
  </script></head><body><form action="[{#dbfacephp_base_url#}]/index.php" method="post" name="headform" target="content"><input type="hidden" name="action" value="main"><div id="breadcrumbs"><div class="xleft"><a href="[{#dbfacephp_base_url#}]/index.php?c=home&m=menu" target="menu"><img src="[{#s_base#}]/dbfacephp/img/refresh.gif" alt="Refresh" title="Refresh"/></a><a href="javascript:;" onclick="javascript:parent.frames.menu.defaultNavAccordion.hideAll();"><img src="[{#s_base#}]/dbfacephp/img/collapse.gif" alt="Collapse Menu" title="Collapse Menu"/></a><a href="javascript:;" onclick="javascript:parent.frames.menu.defaultNavAccordion.showAll();"><img src="[{#s_base#}]/dbfacephp/img/expand.gif" alt="Expand Menu" title="Expand Menu"/></a><a href="javascript:parent.frames.content.location.reload(true);" target="content"><img src="[{#s_base#}]/dbfacephp/img/refresh.png" alt="refresh content" title="refresh content"/></a><a href="javascript:history.go(-1);" target="content"><img src="[{#s_base#}]/dbfacephp/img/action_back.gif" alt="refresh content" title="refresh content"/></a><span style="height:18px;overflow:hidden;"><select name="dbid" style="position:relative;left:-2px;top:-2px;font-size:10px;line-height:18px;border:1px;color:blue;" onchange="javascript:changedb();"> [{section name=i loop=$dbs}] <option value="[{$dbs[i].dbid}]" [{if $dbs[i].dbid==$lastdbid}]selected[{/if}]>[{$dbs[i].aliasname}]:[{$dbs[i].dbname}]@[{$dbs[i].host}]</option> [{/section}] </select></span><span id="busyflag" class="info-text" style="display:none;color:blue"><img src="[{#s_base#}]/dbfacephp/img/cogwheel.gif">&nbsp;[{ci_lang key='strBarLoading'}]</span><br/></div><div class="xright"><a href="javascript:openDashboard();"><img src="[{#s_base#}]/dbfacephp/img/new_window.gif" alt="open DbFacePHP dashboard in a new opener window." title="open DbFacePHP dashboard in a new opener window."/></a><a href="[{#dbfacephp_base_url#}]/index.php?c=home&m=dashboard" target="content">[{ci_lang key='strDashboard'}]</a> [{if $showadminlink}]| <a href="index.php?c=admin" target="content">[{ci_lang key='strSettings'}]</a>[{/if}] | <a href="[{#dbfacephp_base_url#}]/index.php?c=home&m=logout" target="_top">[{ci_lang key='strSignOut'}] ([{$loginname}])</a></div><div class="clear"></div></div></form></body></html>