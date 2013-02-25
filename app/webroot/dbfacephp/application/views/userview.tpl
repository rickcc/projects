<html><head><meta http-equiv='content-type' content='text/html;charset=UTF-8'/> [{if $phpload}] <link type="text/css" href="[{#s_base#}]/dbfacephp/css/load.php?load=style-default.css,c/theme.css" rel="stylesheet"/><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/load.php?load=rview.js,prototype.js,jquery.js,Utils.js,calendar.js,calendar-en.js,calendar-setup.js"></script> [{else}] <link href="[{#s_base#}]/dbfacephp/css/style-default.css" rel="stylesheet" type="text/css"><link href="[{#s_base#}]/dbfacephp/css/c/theme.css" rel="stylesheet" type="text/css"><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/rview.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/prototype.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/jquery.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/Utils.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/calendar.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/calendar-en.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/calendar-setup.js"></script> [{/if}] <script type="text/javascript">
  function exportData(argDownloadType) {
    var oldaction = document.mainForm.action;
    document.mainForm.downloadType.value=argDownloadType;
    document.mainForm.action = "[{#dbfacephp_base_url#}]/index.php?c=export";
    document.mainForm.submit();
    document.mainForm.action = oldaction;
  }
</script></head><body><div id="bodyColumn" [{if $iframe}]style="margin-left:auto;margin-right:auto;width:100%"[{/if}]>
[{if !$iframe}]
[{if $showtoolbar}]
<div id="navcolumn"><a href="[{#dbfacephp_base_url#}]/index.php?c=home&m=dashboard">Dashboard</a> > [{$appname}]&nbsp;<img src='[{#s_base#}]/dbfacephp/img/help.gif' align='absmiddle' onmouseover='javascript:openHelpTip(this, 3, "[{$appid}]");' onmouseout='javascript:closeHelpTip();'/></div>
[{/if}]
[{/if}]
<form action="[{#dbfacephp_base_url#}]/index.php?c=app" method="post" id="mainForm" name='mainForm'>
[{if $searchFormHTML}] <div id="searchForm">[{$searchFormHTML}]</div><input type="hidden" name="dowhat" value="searchform"/>
[{/if}] <input type="hidden" name="appid" value="[{$appid}]"/><input type="hidden" name="downloadType" value=""/></form><div id="searchResultDiv">
[{if $searchFormHTML == null}]
[{$pagebanner}]
<table id="databody" style="margin-bottom:5px"><thead><tr><th><br></th>[{section name=i loop=$fields}]<th>[{$fields[i]}]</th>[{/section}]</tr></thead><tbody> [{section name=i loop=$datas}]
<tr class="[{cycle values="odd,even"}]"><td class="rowHead">[{$smarty.section.i.index+$start}]</td> [{section name=j loop=$fields}] <td>[{$datas[i][j]}]</td> [{/section}]
</tr>
[{sectionelse}] <tr><td colspan="[{$columnLen+2}]"><span class="info-text">please click search button to get data from the target database.</span></td></tr>
[{/section}] </tbody></table><div class="exportlinks">Export options: <a href="javascript:exportData('csv');"><span class="export csv">CSV </span></a>| <a href="javascript:exportData('xls');"><span class="export excel">Excel </span></a>| <a href="javascript:exportData('xml');"><span class="export xml">XML </span></a>| <a href="javascript:exportData('html');"><span class="export xml">HTML </span></a>| <a href="javascript:exportData('pdf');"><span class="export pdf">PDF </span></a></div>
[{/if}]
</div>
[{include file="analytics.tpl"}]
</body></html>
[{if $searchFormHTML != null}]
<script language="javascript">loadableFormInit();$('mainForm').focusFirstElement();</script>
[{/if}]