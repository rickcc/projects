<table id="databody" style="margin-bottom:5px"><thead><tr><th><br/></th><th>Table Name</th><th>Field Name</th><th>Action</th><th>UserName</th><th>Comment</th><th>Date</th></tr></thead><tbody> [{section name=i loop=$datas}]
<tr class="[{cycle values="odd,even"}]"><td class="rowHead">[{$smarty.section.i.index+$start}]</td> [{section name=j loop=$fields}] <td>[{$datas[i][j]}]</td> [{/section}]
</tr>
[{/section}]
</tbody></table>