<form action="[{#dbfacephp_base_url#}]/index.php?c=conn&m=setpermission" method="post" id="f_adduserpermission" name="f_adduserpermission"><input type="hidden" name="dbid" value="[{$dbinfo.dbid}]"/><table id="adduserpermission_head" cellpadding="0" cellspacing="0" style="margin:0px;border-bottom:0px;width:100%"><thead onMouseDown="catchFlyBar(event, 'div_adduserpermission')" onMouseUp="releaseFlyBar(event)"><tr ondblclick="unFreezeBackground();DisplayMenu('div_adduserpermission', 'groupSelect')"><td width="80%"><span class="info-text">[{$dbinfo.aliasname}]:[{$dbinfo.dbname}]@[{$dbinfo.host}]</span></td><td width="5%" align="right" valign="bottom"><a href="javascript:;" onClick="javascript:unFreezeBackground();DisplayMenu('div_adduserpermission', 'groupSelect');" class="close">&nbsp;</a></td></tr></thead></table><div id="te_rowinsert_tb_div"><table id="te_rowinsert_tb" border="0" cellpadding="0" cellspacing="0" class="popdialog1"><tbody><tr><td width="5px">&nbsp;</td><td colspan="2"><div id="error"><h1>Edit permissions for the connection:</h1><ul style="margin-left:0px;padding-left:15px"><li>Administrator: All permission to the connection.</li><li>User: Only access the application section of the connection</li></ul></div></td></tr> [{section name=i loop=$users}] <tr><td width="5px">&nbsp;</td><td>[{$users[i].username}]<input type="hidden" name="userid[]" value="[{$users[i].userid}]" [{if $users[i].userid==$dbinfo.creatorid}]disabled[{/if}]/></td><td><select name="permission[]" style="vertical-align:middle" [{if $users[i].userid==$dbinfo.creatorid}]disabled[{/if}]><option value="-1" [{if $users[i].priv == -1}]selected[{/if}]>Non permission</option><option value="9" [{if $users[i].priv == 9}]selected[{/if}]>User</option><option value="1" [{if $users[i].priv == 1}]selected[{/if}]>Administrator</option></select></td></tr> [{/section}] <tr height="20px"><td colspan="3"></td></tr></tbody></table></div><table id="te_rowinsert_button" border="0" cellpadding="0" cellspacing="0" class="popdialog1"><tr><td colspan="5"><center><input type="submit" class="input-submit" value="Apply"/><input type="button" class="input-submit gray" onclick="javascript:closeLayer();" value="Cancel"/></center></td></tr></table></form>