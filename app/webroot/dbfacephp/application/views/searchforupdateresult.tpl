<table id='databody' class='gridAreaTable' cellpadding='0' cellspacing='0'><tbody><tr><td class='colHead' style='width:100px'>&nbsp</td>
[{section name=i loop=$columnNames}]
<td class='colHead'>[{$columnNames[i]}]</td>
[{/section}]
</tr>
[{section name=i loop=$datas}]
<tr class='tetr' onmouseover='javascript:this.className="tetrhover";' onmouseout='javascript:this.className="tetr";'><td class='dataCell' style='width:100px'><a class='row-edit' onclick='javascript:op_editrow(this.parentNode.parentNode, [{$smarty.section.i.index}])'>&nbsp;Edit&nbsp;</a>&nbsp;&nbsp;<a class='row-edit' onclick='javascript:op_delrow([{$smarty.section.i.index}])'>&nbsp;Delete&nbsp;</a></td> [{section name=j loop=$columnNames}] <td class='dataCell'>[{$datas[i][j]}]</td> [{/section}]
</tr>
[{/section}]
</tbody></table><p/><span class='info-text'>[{$smarty.section.i.loop}] items match your query, please notice that some columns may not be editable.</span>