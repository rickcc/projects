[{section name=i loop=$pkColumns}]
<input type="hidden" name="p_[{$pkColumns[i].name}]" value="[{$pkColumns[i].value}]"/>
[{/section}]
<table>
[{section name=i loop=$fields}]
<tr><td class='config-label' style='width:10%'>[{$fields[i].name}]:</td><td>[{$fields[i].fieldhtml}]</td></tr>
[{/section}]
<tr align='center'><td colspan='2'><input type='button' class='input-submit' onclick='javascript:op_updateform([{$rowNo}]);' value='Update'/>&nbsp;<input type='button' class='input-submit gray' onclick='javascript:removeOPEditRow([{$rowNo}]);' value='Cancel'/></td></tr></table>