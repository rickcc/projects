<span class="pagebanner">[{ci_lang key='strTablePageBanner' p0=$totalrow p1=$start p2=$end}]
<div id="gbar"><span class="pagelinks">
[{$nav_str}]
<input type="text" class="config-textfield" id="startDate" value="[{$startDate}]" name="startDate" size="20"/><a href="javascript:;" onmouseover="javascript:setupCalendar('startDate');"><img id="c_startDate" src='[{#s_base#}]/dbfacephp/img/form/date_icon.gif' width='16' height='17' border='0' title='Insert Date' style='vertical-align:middle;'/></a><input type="text" class="config-textfield" id="endDate" value="[{$endDate}]" name="endDate" size="20"/><a href="javascript:;" onmouseover="javascript:setupCalendar('endDate');"><img id="c_endDate" src='[{#s_base#}]/dbfacephp/img/form/date_icon.gif' width='16' height='17' border='0' title='Insert Date' style='vertical-align:middle;'/></a><select id="selectedtable"><option value="-1" [{if $selectedtable == -1}]selected[{/if}]>All Tables</option>
[{section name=i loop=$tables}] <option value="[{$tables[i]}]" [{if $selectedtable == $tables[i]}]selected[{/if}]>[{$tables[i]}]</option>
[{/section}]
</select><input type="button" value="Search" onclick="javascript:searchLogs()"/></span>