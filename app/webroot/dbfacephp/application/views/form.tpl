<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/><title>Form Builder</title> [{if $phpload}] <link type="text/css" href="[{#s_base#}]/dbfacephp/css/load.php?load=fb.css" rel="stylesheet"/><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/load.php?load=prototype.js,innerxhtml.js,jquery.js,tommick.js,rview.js,fb.js,Utils.js,texteditor.js"></script> [{else}] <link href="[{#s_base#}]/dbfacephp/css/fb.css" rel="stylesheet" type="text/css"><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/prototype.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/jquery.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/tommick.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/rview.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/fb.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/Utils.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/texteditor.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/innerxhtml.js"></script> [{/if}] <script type="text/javascript">
    var MainContent;
    var currOrd;
    $j(document).ready(function() {
      selectForm(-1);
    });
    var iframe = false;
    [{if $iframe}]
    iframe = true;
    [{/if}]
  </script></head><body style="margin-top:0px;margin-left:5px" [{if $closeTrigger}]Onbeforeunload="javascript:[{$closeTrigger}];"[{/if}]>
[{if !$withouttitle}]
<div id="navcolumn"><a href="./index.php?c=home&m=dashboard">[{ci_lang key='strDashboard'}]</a> > Form Builder</div>
[{/if}]
<div style="margin-top:8px"><a href="javascript:shformprop();" class="tm-formbutton">Form Properties</a><a href="javascript:saveForm();" class="tm-formbutton">Save the Form</a><a href="javascript:showAllForms();" class="tm-formbutton">Select a Form to Edit</a><a href="javascript:showAllTables();" class="tm-formbutton">Auto Generate Form for Table</a></div><hr align="left" style="margin-top:2px;margin-bottom:2px"/>
[{include file="inc/loading.tpl"}]
<table width="100%" border="0" cellpadding="0" cellspacing="0"><tr>[{include file="form/formtoolbox.tpl"}]</tr><tr><td id="cachecontainer">[{include file="form/formmenu.tpl"}]</td></tr></table><div style="visibility:hidden;border:1px dashed #E3805E" id="dotlayer"></div><div id="hiddendiv" style="position:absolute;left:0px;top:0px;visibility:hidden;z-index:1">Untitled Form</div>
[{include file="form/fieldeditmenu.tpl"}]
[{include file="form/formproperties.tpl"}]
[{include file="form/selectformedit.tpl"}]
[{include file="form/selecttableedit.tpl"}]
[{include file="form/fieldproperties.tpl"}]
[{include file="form/texteditordialog.tpl"}]
<div id="addfieldinfo" style="position:absolute;display:none"></div><div class="field-action" id="actionsdiv" style="display:none;position:absolute;" onmouseover="movropt();" onmouseout="moutopt();"></div>
[{include file="analytics.tpl"}]
</body></html>