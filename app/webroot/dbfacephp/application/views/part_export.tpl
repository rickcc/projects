<form name="dump" method="post" action="index.php?c=importandexport&m=export"><fieldset id="exportoptions"><legend>Export</legend><div class="formelementrow"><div align="left"><fieldset><legend>Please select table(s) to export(<a class="subopen" href="javascript:;" onclick="setCheckboxes('exportoptions', true); return false;">Check All</a> /<a href="javascript:;" class="subopen" onclick="setCheckboxes('exportoptions', false);  return false;">Uncheck All</a>)</legend><table style="background:none;border:0;margin:5px"><tbody> [{section name=i loop=$tables}] <tr><td><input type="checkbox" name="table_select[]" value="[{$tables[i]}]" id="table_select_[{$smarty.section.i.index+1}]" checked/><label for="table_select_[{$smarty.section.i.index+1}]" title="[{$tables[i]}]">[{$tables[i]}]</label></td></tr> [{/section}] </tbody></table></fieldset></div><br/></div><div class="formelementrow"> Compression: <input type="radio" name="compression" value="none" id="radio_compression_none" onclick="document.getElementById('checkbox_dump_asfile').checked = true;" checked="checked"/><label for="radio_compression_none">None</label><input type="radio" name="compression" value="zip" id="radio_compression_zip" onclick="document.getElementById('checkbox_dump_asfile').checked = true;"/><label for="radio_compression_zip">"zipped"</label><input type="radio" name="compression" value="gzip" id="radio_compression_gzip" onclick="document.getElementById('checkbox_dump_asfile').checked = true;"/><label for="radio_compression_gzip">"gzipped"</label><input type="radio" name="compression" value="bzip" id="radio_compression_bzip" onclick="document.getElementById('checkbox_dump_asfile').checked = true;"/><label for="radio_compression_bzip">"bzipped"</label></div></fieldset><fieldset class="tblFooters"><input type="submit" class="input-submit" value="Go" id="buttonGo"/></fieldset></form>