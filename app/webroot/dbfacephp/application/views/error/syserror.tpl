<html><head><title>[{$title}]</title><link rel="stylesheet" href="[{#s_base#}]/dbfacephp/css/rview-common.css" type="text/css" media="all"/></head><body [{if $iframe}]style="margin-left:auto;margin-right:auto;width:100%"[{else}]style="width:90%;margin-top:0px;margin-left:5px"[{/if}]>
[{if !$iframe}]
<div id="navcolumn"><a href="[{#dbfacephp_base_url#}]/index.php?c=home&m=dashboard">[{ci_lang key='strDashboard'}]</a> ><a href="[{#dbfacephp_base_url#}]/index.php?c=app&m=applist">[{ci_lang key='strApplicationManagement'}]</a></div>
[{/if}]
<div class="[{$message_css}]"><b>[{$title}]</b><br/><span>[{$message}]</span></div></body></html>