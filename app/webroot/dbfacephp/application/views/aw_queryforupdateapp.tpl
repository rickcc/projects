[{include file="aw_inc_form.tpl"}]
<tr><td colspan="2"><fieldset><legend><b>Table Name</b></legend><select id="tablename" name="tablename" class="config-picklist"> [{section name=i loop=$tables}] <option value="[{$tables[i]}]">[{$tables[i]}]</option> [{/section}] </select></fieldset></td></tr>
[{include file="aw_inc_script.tpl" scripttype='query'}]