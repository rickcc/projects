<div ondblclick="editf('[{$elementID}]', 103)" id="[{$elementID}]" class="field-outer-container" onMouseOver="fcm(this)" onMouseOut="fcm(this, 'true')"><table width="100%" border="0px" cellpadding="0" cellspacing="0"><tr><td class="radio-check-widthfix"></td><td width="162" valign="top" class="field-label" style="padding-left:16px;"><label id="dispName[{$elementID}]">[{$label}]</label></td><td id="input[{$elementID}]" disabledf='[{$disabledf}]' updatescriptenable='[{$updatescriptenable}]' updatescript='[{$updatescript}]' labelname="[{$label}]" fieldtype="[{$fieldType}]" fieldname="[{$fieldName}]" initval="[{$initval}]" multivalue="true" scriptname="[{$fieldName}]" name="[{$fieldName}]" isreq="[{$isReq}]" srctype="[{$srctype}]" datasource="[{$datasource}]" class="radio-check-label"><span class="remove_when_save">
[{section name=i loop=$s_datasource}]
<input type="checkbox" name='ck_[{$elementID}]' id="r_[{$elementID}]_[{$smarty.section.i.index}]" value="[{$s_datasource[i].key}]"/><label for="r_[{$elementID}]_[{$smarty.section.i.index}]">[{$s_datasource[i].value}]</label><br/>
[{/section}]
</span></td></tr></table></div>