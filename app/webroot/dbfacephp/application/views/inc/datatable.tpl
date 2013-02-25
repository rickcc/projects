<html><head><style type="text/css" media="all">#bodyColumn{margin-right:1.5em;margin-left:15px;font-family:Verdana,Geneva,Arial,Helvetica,sans-serif;font-size:11px;}a{text-decoration:none;}#navcolumn h5{font-size:12px;color:#666;border:none;border-bottom:1px solid #ccc;border-top:1px solid #ccc;background-color:#ECFEBC;}table{border:1px solid #666;margin:20px 0 20px 0!important;}th,td{padding:2px 4px 2px 4px!important;text-align:left;vertical-align:top;}thead tr{background-color:#fc0;}th.sorted{background-color:orange;}th.sorted a,th.sortable a{background-position:right;display:block;}tr.odd{background-color:#fff;}tr.even{background-color:#fea;}span.pagebanner{background-color:#eee;border:1px dotted #999;padding:2px 4px 2px 4px;display:block;margin-top:10px;border-bottom:none;}h4,h5,h6,div,table,td,th,span,a,hr{margin:0;padding:0;font-size:1em;background-repeat:no-repeat;list-style-type:none;}</style></head><body><div id="bodyColumn">
[{if $title}]<div id="navcolumn"><h5>Data Name: [{$title}]</h5></div>[{/if}] <table>
[{if $putfieldrow}]
<thead><tr><th><br/></th>
[{section name=i loop=$fields}]
<th class="sortable"><a href="#">[{$fields[i]}]</a></th>
[{/section}]
</tr></thead>
[{/if}]
<tbody>
[{section name=i loop=$datas}]
<tr class="[{cycle values="odd,even"}]"><td>[{$smarty.section.i.index+1}]</td>
[{section name=j loop=$fields}]
<td>[{$datas[i][j]}]</td>
[{/section}]
</tr>
[{/section}]
</tbody></table></div></body></html>