<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/><link href="[{#s_base#}]/dbfacephp/css/style-default.css" rel="stylesheet" type="text/css"><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/prototype.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/jquery.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/tommick.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/Utils.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/rview.js"></script></head><body><div id="bodyColumn"><div id="navcolumn"><a href="[{#dbfacephp_base_url#}]/index.php?c=home&m=dashboard">Dashboard</a> > Create new database</div><form name='switchform' action='index.php' target='_top' method=post><input type=hidden name="action" value='changedb'/><input type=hidden name="dbid" value=""/><input type=hidden name="nextaction" value="structure"/></form><form action="[{#dbfacephp_base_url#}]/index.php?c=createdatabase&m=create" method="post" id='mainForm' name='mainForm'><div id="error" style="display:none"></div><table border="0" cellpadding="0" cellspacing="0" id="connTable" class="otherDisplay2"><tr><td colspan=3><b>Create a new database and binding to your account.</b></td></tr><tr height="5"><td colspan=3>&nbsp;</td></tr><tr><td width="20%" height="30" nowrap class="bodyTextBold" id="l_connName">Database Name:</td><td width="70%" height="18"><input name="dbname" id="dbname" type="text" class="config-textfield" value="[{$dbname}]" size="30"></td><td width="10" height="30">&nbsp;</td></tr><tr><td width="20%" height="30" nowrap class="bodyTextBold" id="l_collation">Collation:</td><td width="70%" height="30"><select name="collations" class="config-picklist"><option value="" selected></option> [{foreach key=charset item=collation from=$collations}] <optgroup label="[{$charset}]" title="[{$charset}]"> [{section name=j loop=$collation}] <option value="[{$collation[j]}]" title="[{$collation[j]}]" [{if $columns[k].field_collation}] == '[{$collation[j]}]'}]selected[{/if}]>[{$collation[j]}]</option> [{/section}] </optgroup> [{/foreach}] </select></td><td width="10" height="30">&nbsp;</td></tr><tr><td style="text-align:center" colspan=3><input type="button" onclick="javascript:createdb();" class="input-button" value="Create database"/></td></tr></table></form></div></body></html>