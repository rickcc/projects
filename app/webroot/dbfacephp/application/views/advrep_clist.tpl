<table cellspacing="0" cellpadding="0" border="0"><tbody><tr><td valign="top"><div analysisel="attachedFieldsListEl" style="margin-right: 11px;"><div class="chartfieldsbg">Select/Drag and Drop the fields</div><div analysisel="analysisFieldHolder" class="analysisfieldbr"><table cellspacing="0" cellpadding="0" border="0" align="left" style="padding-top: 3px; padding-left: 3px;"><tbody> [{section name=i loop=$tblcolumninfos}] [{section name=j loop=$tblcolumninfos[i].columns}] <tr><td height="24px" align="left"><div id="drag_[{if $singletable}][{$tblcolumninfos[i].columns[j].name}][{else}][{$tblcolumninfos[i].tblname}].[{$tblcolumninfos[i].columns[j].name}][{/if}]" onmousedown="DNDEvents.startDrag(this,event);" onmouseover="this.className='ZDBDNDFieldWthBG'" onmouseout="this.className='ZDBDNDFieldTrans'" style="z-index: 1000; width: 176px; height: 24px;" panel="left" columntype="[{$tblcolumninfos[i].columns[j].type}]" [{if $singletable}]columnname="[{$tblcolumninfos[i].columns[j].name}]"[{else}]columnname="[{$tblcolumninfos[i].tblname}].[{$tblcolumninfos[i].columns[j].name}]"[{/if}] [{if $singletable}]displayname="[{$tblcolumninfos[i].columns[j].name}]"[{else}]displayname="[{$tblcolumninfos[i].tblname}].[{$tblcolumninfos[i].columns[j].name}]"[{/if}] class="ZDBDNDFieldTrans"><table width="176" height="24px" cellspacing="0" cellpadding="0" border="0" class="ZDBDNDFieldMainBG"><tbody><tr><td valign="middle" nowrap="nowrap" class="FTypePlainText [{$tblcolumninfos[i].columns[j].csstype}]" style="padding-left: 20px;">[{if !$singletable}][{$tblcolumninfos[i].tblname}].[{/if}][{$tblcolumninfos[i].columns[j].name}]</td></tr></tbody></table></div></td></tr> [{/section}] [{/section}] </tbody></table></div></div></td></tr></tbody></table>