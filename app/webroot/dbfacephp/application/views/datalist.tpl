<table class="searchResults" border="1" style="border:1px solid #666666;border-collapse:collapse"><tbody><tr><td colspan="4"><input type="button" class="input-submit" value="Select" onclick="javascript:datalist_choose(this);"/></td></tr> [{section name=i loop=$datas}] [{if $smarty.section.i.index % 2 ==0}]<tr class="[{cycle values="even,odd"}]">[{/if}] <td style="width:16px;text-align:center"><input type="checkbox" name="selected_data[]" value="[{$datas[i]}]" id="checkbox_db_[{$smarty.section.i.index+1}]"/></td><td><label for="checkbox_db_[{$smarty.section.i.index+1}]" title="[{$datas[i]}]" style="font-size:9px;">[{$datas[i]}]</label></td> [{if $smarty.section.i.index > 0 && ($smarty.section.i.index-1) % 2 ==0}]</tr>[{/if}] [{/section}] </tbody></table>