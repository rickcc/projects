<html><head><meta http-equiv='content-type' content='text/html;charset=UTF-8'/><link href="[{#s_base#}]/dbfacephp/css/style-default.css" rel="stylesheet" type="text/css"><link href="[{#s_base#}]/dbfacephp/css/c/theme.css" rel="stylesheet" type="text/css"><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/rview.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/prototype.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/jquery.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/Utils.js"></script></head><body><div id="bodyColumn"><div id="navcolumn"><a href="[{#dbfacephp_base_url#}]/index.php?c=home&m=dashboard">Dashboard</a> > [{$appname}]&nbsp;<img src='[{#s_base#}]/dbfacephp/img/help.gif' align='absmiddle' onmouseover='javascript:openHelpTip(this, 5, "<%= monID %>");' onmouseout='javascript:closeHelpTip();'/></div><form action="[{#dbfacephp_base_url#}]/index.php?c=app" method="post" id="mainForm" name="mainForm">
[{if $searchFormHTML}] <div id="searchForm">[{$searchFormHTML}]</div>
[{/if}] <input type="hidden" name="dowhat" id="dowhat" value="searchform"/><input type="hidden" name="appid" value="[{$appid}]"></form><div id="searchResultDiv" style="margin-top:5px">
[{if $searchFormHTML == null}]
[{include file="cppage.tpl"}]
[{/if}]
</div></div></body></html>
[{if $searchFormHTML != null}]
<script language="javascript">loadableFormInit();$('mainForm').focusFirstElement();</script>
[{/if}]