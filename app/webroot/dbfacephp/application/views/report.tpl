<html><head><meta http-equiv='content-type' content='text/html;charset=UTF-8'/><link href="[{#s_base#}]/dbfacephp/css/style-default.css" rel="stylesheet" type="text/css"><link href="[{#s_base#}]/dbfacephp/css/c/theme.css" rel="stylesheet" type="text/css"><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/rview.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/prototype.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/jquery.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/Utils.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/swfobject.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/calendar.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/calendar-en.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/calendar-setup.js"></script></head><body><div id="bodyColumn">
[{if !$iframe}]
<div id="navcolumn"><a href="[{#dbfacephp_base_url#}]/index.php?c=home&m=dashboard">Dashboard</a> > [{$appname}]<img src='[{#s_base#}]/dbfacephp/img/help.gif' align='absmiddle' onmouseover='javascript:openHelpTip(this, 6, "[{$appid}]");' onmouseout='javascript:closeHelpTip();'/></div><div class="clear" style="margin-bottom:5px;"></div>
[{/if}]
<form action="[{#dbfacephp_base_url#}]/index.php?c=app" method="post" id='mainForm' name='mainForm'>
[{if $searchFormHTML}]<div id="searchForm">[{$searchFormHTML}]</div>[{/if}] <input type="hidden" name="appid" value="[{$appid}]"/><input type="hidden" name="action" value="submitform"></form><div id="chartdivp"><div id="chartdiv"></div></div>
[{if $showchart}]
[{include file='chartjs.tpl'}]
[{/if}]
</div>
[{include file="analytics.tpl"}]
</body></html>
[{if $searchFormHTML}]
<script language="javascript">$('mainForm').focusFirstElement();</script>
[{/if}]