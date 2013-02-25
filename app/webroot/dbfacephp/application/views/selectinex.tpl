<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> [{if $phpload}] <link type="text/css" href="[{#s_base#}]/dbfacephp/css/load.php?load=structure.css,style-default.css" rel="stylesheet"/><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/load.php?load=prototype.js,jquery.js,tommick.js,Utils.js,rview.js"></script> [{else}] <link href="[{#s_base#}]/dbfacephp/css/structure.css" rel="stylesheet" type="text/css"><link href="[{#s_base#}]/dbfacephp/css/style-default.css" rel="stylesheet" type="text/css"><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/prototype.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/jquery.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/tommick.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/Utils.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/rview.js"></script> [{/if}] <script type="text/javascript">
    function changeinextype(inextype) {
      if (inextype == 0) {
        $('part_export').hide();
        $('part_import').show();
        $('part_synchronize').hide();
      } else if (inextype == 1) {
        $('part_export').show();
        $('part_import').hide(); 
        $('part_synchronize').hide();     
      } else {
        $('part_export').hide();
        $('part_import').hide(); 
        $('part_synchronize').show();           
      }
    }
  </script></head><body><div id="bodyColumn"><div id="navcolumn"><a href="[{#dbfacephp_base_url#}]/index.php?c=home&m=dashboard">Dashboard</a> > Backup and Restore</div> [{if $message}]<div class="[{if $message_css}][{$message_css}][{else}]js_success[{/if}]" ondblclick="javascript:hideElement(this)">[{$message}]</div>[{/if}] <div class="clear"></div><form action="[{#dbfacephp_base_url#}]/index.php" method="post" id="mainForm" name="mainForm"><table border="0" cellpadding="0" cellspacing="0" class="otherDisplay2" style="padding-bottom:10px"><tr><td class="config-label"><input type="radio" name="inextype" id="inextype1" value="1" style="vertical-align:middle;" onclick="javascript:changeinextype(1);" [{if $optype=='export'}]checked[{elseif !$optype}]checked[{/if}]/><label for="inextype1" style="vertical-align:middle;">Backup to Dump File</label><input type="radio" name="inextype" id="inextype0" value="0" style="vertical-align:middle;" onclick="javascript:changeinextype(0);" [{if $optype=='import'}]checked[{/if}]/><label for="inextype0" style="vertical-align:middle;">Restore from Dump File</label><input type="radio" name="inextype" id="inextype2" value="2" style="vertical-align:middle;" onclick="javascript:changeinextype(2);" [{if $optype=='synchronize'}]checked[{/if}]/><label for="inextype2" style="vertical-align:middle;">Save a Copy to Another Database</label></td></tr></table></form></div>
[{if $optype == 'synchronize'}]
<div id="part_import" style="display:none;width:90%;margin-left:5px">
[{include file="part_import.tpl"}]
</div><div id="part_export" style="display:none;width:90%;margin-left:5px">
[{include file="part_export.tpl"}]
</div><div id="part_synchronize" style="width:90%;margin-left:5px">
[{include file="part_synchronize.tpl"}]
[{elseif $optype =='import'}]
<div id="part_import" style="width:90%;margin-left:5px">
[{include file="part_import.tpl"}]
</div><div id="part_export" style="display:none;width:90%;margin-left:5px">
[{include file="part_export.tpl"}]
</div><div id="part_synchronize" style="display:none;width:90%;margin-left:5px">
[{include file="part_synchronize.tpl"}]
[{else}]
<div id="part_import" style="display:none;width:90%;margin-left:5px">
[{include file="part_import.tpl"}]
</div><div id="part_export" style="width:90%;margin-left:5px">
[{include file="part_export.tpl"}]
</div><div id="part_synchronize" style="display:none;width:90%;margin-left:5px">
[{include file="part_synchronize.tpl"}]
[{/if}]
</div></body></html>