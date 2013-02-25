[{if $fields}]
<table class="htmldbStandard3" border="0" cellpadding="0" cellspacing="0"><tbody><tr>
[{section name=i loop=$fields}]
<th>[{$fields[i]}]</th>
[{/section}]
</tr>
[{section name=i loop=$datas}]
<tr>
[{section name=j loop=$fields}]
<td>[{$datas[i][$fields[j]]}]</td>
[{/section}]
</tr>
[{/section}]
</tbody></table>
[{/if}]
<div class='info-text' style='font-size:11px,font-color:red'>[{$message}]</div>