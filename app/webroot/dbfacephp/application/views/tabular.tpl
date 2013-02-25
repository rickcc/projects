<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> [{if $phpload}] <link type="text/css" href="[{#s_base#}]/dbfacephp/css/load.php?load=db.css" rel="stylesheet"/><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/load.php?load=jquery.js,prototype.js,rview.js,Utils.js,tommick.js"></script> [{else}] <link type="text/css" media="all" rel="stylesheet" href="[{#s_base#}]/dbfacephp/css/db.css"/><link type="text/css" href="[{#s_base#}]/dbfacephp/css/te.css" rel="stylesheet"/><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/jquery.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/prototype.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/rview.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/Utils.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/tommick.js"></script> [{/if}]
</head><body>
[{if !$iframe}]
[{if $showtoolbar}]
<div id="navcolumn" style="margin-left:5px;width:95%"><a href="[{#dbfacephp_base_url#}]/index.php?c=home&m=dashboard">Dashboard</a> > [{$appname}]</div>
[{/if}]
[{/if}]
<div style="margin-left:5px">
[{include file="advrep_cell.tpl"}]
</div></body></html>