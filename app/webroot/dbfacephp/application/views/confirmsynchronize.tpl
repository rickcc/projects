<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/><link href="[{#s_base#}]/dbfacephp/css/structure.css" rel="stylesheet" type="text/css"><link href="[{#s_base#}]/dbfacephp/css/style-default.css" rel="stylesheet" type="text/css"><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/prototype.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/jquery.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/tommick.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/Utils.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/rview.js"></script></head><body><div id="bodyColumn"><div id="navcolumn"><a href="[{#dbfacephp_base_url#}]/index.php?c=home&m=dashboard">Dashboard</a> ><a href="[{#dbfacephp_base_url#}]/index.php?c=importandexport">Backup and Restore</a> > Synchronization Confirmation</div><form name="synchronize_form" id="synchronize_form" method="post" action="index.php?c=importandexport&m=confirmsyn"><input type="hidden" name="src_db" value="[{$src_db}]"/><input type="hidden" name="src_host" value="[{$src_host}]"/><input type="hidden" name="src_pass" value="[{$src_pass}]"/><input type="hidden" name="src_type" value="[{$src_type}]"/><input type="hidden" name="src_username" value="[{$src_username}]"/><input type="hidden" name="trg_db" value="[{$trg_db}]"/><input type="hidden" name="trg_host" value="[{$trg_host}]"/><input type="hidden" name="trg_pass" value="[{$trg_pass}]"/><input type="hidden" name="trg_type" value="[{$trg_type}]"/><input type="hidden" name="trg_username" value="[{$trg_username}]"/><div id="serverstatus" style="overflow: auto; padding:0px; "><table id="serverstatustraffic" class="data" width="55%" style="margin-bottom:3px"><tr><th>Source database: [{$src_db}]<br/>([{if $src_type=='cur'}]Current Server[{else}][{$src_host}][{/if}])</th><th>Target database: [{$trg_db}]<br/>([{if $trg_type=='cur'}]Current Server[{else}][{$trg_host}][{/if}])(<a href="javascript:;" onclick="javascript:setCheckboxes('serverstatustraffic', true);">Check All</a>/<a href="javascript:;" onclick="javascript:setCheckboxes('serverstatustraffic', false);">Uncheck All</a>)</th></tr> [{section name=i loop=$src_tbls}] <tr class="[{cycle values="odd,even"}]"><td>[{$src_tbls[i]}]</td><td><input type="checkbox" name="chk_tbls[]" value='[{$src_tbls[i]}]' checked/>[{if $trg_exists[i]}]<font color="red">(Already Exists, All data in the target database table will be lost)</font>[{else}](not present)[{/if}]<br/></td></tr> [{/section}] <tr class="tblFooters"><td colspan=2 style="text-align:right"><input type="checkbox" name="onlystructure" value="1"/>Only Table Structure&nbsp;<input type="submit" name="synchronize_db" value="Synchronize Tables"/></td></tr></table></div></form></div></div></body></html>