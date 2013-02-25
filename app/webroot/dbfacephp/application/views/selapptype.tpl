<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> [{if $phpload}] <link type="text/css" href="[{#s_base#}]/dbfacephp/css/load.php?load=style-default.css" rel="stylesheet"/><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/load.php?load=prototype.js,jquery.js,tommick.js,Utils.js,rview.js"></script> [{else}] <link href="[{#s_base#}]/dbfacephp/css/style-default.css" rel="stylesheet" type="text/css"><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/prototype.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/jquery.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/tommick.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/Utils.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/rview.js"></script> [{/if}] <script type="text/javascript">
    function radio_trigger(ele) {
      $j('label').each(function(i){this.style.color='#333333'});
      $j(($j(ele).next('label')[0])).css('color', 'blue');
      return true;
    }
    var columnDatas = new Array();
    function set_columns(tablename, ele) {
      if (tablename == "") {
        return;
      }
      var ls = $j($j($j(ele).parent(".advrep_div")[0]).next(".advrep_div")[0]).children(".left")[0];
      var rs = $j(ele).siblings(".right")[0];
      if ((rs == undefined || rs == null) && (ls == undefined || ls == null)) {
        return;
      }
      if (columnDatas[tablename] == undefined || columnDatas[tablename] == null) {
        $j.getJSON('[{#dbfacephp_base_url#}]/index.php?c=req&m=json_getcolumns&tblname='+tablename, function(json) {
          columnDatas[tablename] = json;
          _set_column(ls, tablename);
          _set_column(rs, tablename);
        });
      } else {
        _set_column(ls, tablename);
        _set_column(rs, tablename);
      }
    }
    
    function _set_column(ele, tablename) {
      if (ele == null || ele == undefined) {
        return;
      }
      ele.options.length = 0;
      for(var i=0; i<columnDatas[tablename].length;i++) {
        AddSelectOption(ele, columnDatas[tablename][i],tablename+"."+columnDatas[tablename][i], false);
      }
    }
    function checkAppSubmitData() {
      var apptype=$('apptype').value;
      if (apptype!=6&&$('appname').value=='') {
        alert('Please specify a short(less than 16 characters) words as the application identified name!');
        $('appname').focus();
        return false;
      }
      if (apptype!=6&&$('apptitle').value=='') {
        alert('Please specify a short(less than 32 characters) words as the application title!');
        $('apptitle').focus();
        return false;
      }
      if (apptype==6&&$('tablename').value=='') {
        alert('You must select on table at least as base table.');
        $('tablename').focus();
        return false;
      }
      return true;
    }
    $j(document).ready(function() {
     [{if $apptype}]
     $('help_0', 'help_1', 'help_2', 'help_3', 'help_4', 'help_5', 'help_6').invoke('hide');
     if([{$apptype}]=='6'){
       $('tr_general').hide();
     } else {
       $('tr_general').show();
     };
     $('help_'+[{$apptype}]).show();
     [{/if}]
    });
  </script></head><body><div id="bodyColumn"><div id="navcolumn"><a href="[{#dbfacephp_base_url#}]/index.php?c=home&m=dashboard">[{ci_lang key='strDashboard'}]</a> ><a href="[{#dbfacephp_base_url#}]/index.php?c=app&m=applist">[{ci_lang key='strApplicationManagement'}]</a> > [{ci_lang key='strCreateApplication'}]</div> [{if $error}]<div class="js_warning" ondblclick="javascript:hideElement(this);">[{$error}]</div>[{/if}] <div class="clear"></div><form action="[{#dbfacephp_base_url#}]/index.php?c=app&m=create_step2" method="post" id="mainForm" name="mainForm" onsubmit="javascript:return checkAppSubmitData();"><table border="0" cellpadding="0" cellspacing="0" class="otherDisplay2"><tr><td colspan="2"><span class="config-label">[{ci_lang key='strAppMode'}]:</span><select id="apptype" name="apptype" class="config-picklist" onchange="javascript:$('help_0', 'help_1', 'help_2', 'help_3', 'help_4', 'help_5', 'help_6').invoke('hide');if($('apptype').value=='6'){$('tr_general').hide();}else{$('tr_general').show();}; $('help_'+$('apptype').value).show();"><option value="0" [{if $apptype=='0'}]selected[{/if}]>[{ci_lang key='strQueryApp'}]</option><option value="1" [{if $apptype=='1'}]selected[{/if}]>[{ci_lang key='strGeneralOperationApp'}]</option><option value="2" [{if $apptype=='2'}]selected[{/if}]>[{ci_lang key='strQueryForUpdateApp'}]</option><option value="3" [{if $apptype=='3'}]selected[{/if}]>[{ci_lang key='strChartReportApp'}]</option><option value="4" [{if $apptype=='4'}]selected[{/if}]>[{ci_lang key='strResultSetCheckPointApp'}]</option><option value="6" [{if $apptype=='6'}]selected[{/if}]>[{ci_lang key='strAdvancedReportApp'}]</option><option value="5" [{if $apptype=='5'}]selected[{/if}]>[{ci_lang key='strDashboardApp'}]</option></select></td></tr><tr id="tr_general"><td colspan="2"><fieldset><legend><b>General Application Information</b></legend><table style="border:0"><tr><td class="config-label">[{ci_lang key='strName'}]&nbsp;:</td><td><input id="appname" name="appname" type="text" class="it1" value="[{$appname}]" size="30" onblur="javascript:if($('apptitle').value=='') {$('apptitle').value=$('appname').value;}"/><img src='[{#s_base#}]/dbfacephp/img/help.gif' style="align:absmiddle" onmouseover='javascript:openHelp(this, "[{ci_lang key='strAppNameTip'}]");' onmouseout='javascript:closeHelpTip();'/></td></tr><tr><td class="config-label">[{ci_lang key='strTitle'}]&nbsp;:</td><td><input id="apptitle" name="apptitle" type="text" class="it1" value="[{$apptitle}]" size="30"><img src='[{#s_base#}]/dbfacephp/img/help.gif' style="align:absmiddle" onmouseover='javascript:openHelp(this, "[{ci_lang key='strAppTitleTip'}]");' onmouseout='javascript:closeHelpTip();'/></td></tr><tr><td class="config-label">[{ci_lang key='strDescription'}]&nbsp;:</td><td><textarea id="appdesc" name="appdesc" rows="4" class="it1" cols="58">[{$appdesc}]</textarea><img src='[{#s_base#}]/dbfacephp/img/help.gif' style="align:absmiddle" onmouseover='javascript:openHelp(this, "[{ci_lang key='strAppDescTip'}]");' onmouseout='javascript:closeHelpTip();'/></td></tr></table></fieldset></td></tr><tr><td colspan="2"><div id="help_0" [{if $apptype!='0'}]style="display:none"[{/if}]><fieldset><legend><b>[{ci_lang key='strSpecialNotes'}]</b></legend><table width="90%" cellspacing="0" cellpadding="0" align="left" style="border:0"><tbody><tr><td class="defaultViewText"><img src='[{#s_base#}]/dbfacephp/img/s/item.png'/> [{ci_lang key='strSpecialNotesQueryAppLine1'}]</td></tr><tr><td valign="middle" class="defaultViewText"><img src='[{#s_base#}]/dbfacephp/img/s/item.png'/> [{ci_lang key='strSpecialNotesQueryAppLine2'}]</td></tr><tr><td valign="middle" class="defaultViewText"><img src='[{#s_base#}]/dbfacephp/img/s/item.png'/> [{ci_lang key='strSpecialNotesQueryAppLine3'}]</td></tr></tbody></table></fieldset></div><div id="help_1" [{if $apptype!='1'}]style="display:none"[{/if}]><fieldset><legend><b>[{ci_lang key='strSpecialNotes'}]</b></legend><table width="90%" cellspacing="0" cellpadding="0" align="left" style="border:0"><tbody><tr><td class="defaultViewText"><img src='[{#s_base#}]/dbfacephp/img/s/item.png'/> [{ci_lang key='strSpecialNotesGeneralOperationAppLine1'}]</td></tr><tr><td valign="middle" class="defaultViewText"><img src='[{#s_base#}]/dbfacephp/img/s/item.png'/> [{ci_lang key='strSpecialNotesGeneralOperationAppLine2'}]</td></tr><tr><td valign="middle" class="defaultViewText"><img src='[{#s_base#}]/dbfacephp/img/s/item.png'/> [{ci_lang key='strSpecialNotesGeneralOperationAppLine3'}]</td></tr></tbody></table></fieldset></div><div id="help_2" [{if $apptype!='2'}]style="display:none"[{/if}]><fieldset><legend><b>[{ci_lang key='strSpecialNotes'}]</b></legend><table width="90%" cellspacing="0" cellpadding="0" align="left" style="border:0"><tbody><tr><td class="defaultViewText"><img src='[{#s_base#}]/dbfacephp/img/s/item.png'/> [{ci_lang key='strSpecialNotesQueryForUpdateAppLine1'}]</td></tr><tr><td valign="middle" class="defaultViewText"><img src='[{#s_base#}]/dbfacephp/img/s/item.png'/> [{ci_lang key='strSpecialNotesQueryForUpdateAppLine2'}]</td></tr><tr><td valign="middle" class="defaultViewText"><img src='[{#s_base#}]/dbfacephp/img/s/item.png'/> [{ci_lang key='strSpecialNotesQueryForUpdateAppLine3'}]</td></tr></tbody></table></fieldset></div><div id="help_3" [{if $apptype!='3'}]style="display:none"[{/if}]><fieldset><legend><b>[{ci_lang key='strSpecialNotes'}]</b></legend><table width="90%" cellspacing="0" cellpadding="0" align="left" style="border:0"><tbody><tr><td class="defaultViewText"><img src='[{#s_base#}]/dbfacephp/img/s/item.png'/> [{ci_lang key='strSpecialNotesChartReportAppLine1'}]</td></tr><tr><td valign="middle" class="defaultViewText"><img src='[{#s_base#}]/dbfacephp/img/s/item.png'/> [{ci_lang key='strSpecialNotesChartReportAppLine2'}]</td></tr><tr><td valign="middle" class="defaultViewText"><img src='[{#s_base#}]/dbfacephp/img/s/item.png'/> [{ci_lang key='strSpecialNotesChartReportAppLine3'}]</td></tr></tbody></table></fieldset></div><div id="help_4" [{if $apptype!='4'}]style="display:none"[{/if}]><fieldset><legend><b>[{ci_lang key='strSpecialNotes'}]</b></legend><table width="90%" cellspacing="0" cellpadding="0" align="left" style="border:0"><tbody><tr><td class="defaultViewText"><img src='[{#s_base#}]/dbfacephp/img/s/item.png'/> [{ci_lang key='strSpecialNotesResultsetCheckPointAppLine1'}]</td></tr><tr><td valign="middle" class="defaultViewText"><img src='[{#s_base#}]/dbfacephp/img/s/item.png'/> [{ci_lang key='strSpecialNotesResultsetCheckPointAppLine2'}]</td></tr><tr><td valign="middle" class="defaultViewText"><img src='[{#s_base#}]/dbfacephp/img/s/item.png'/> [{ci_lang key='strSpecialNotesResultsetCheckPointAppLine3'}]</td></tr></tbody></table></fieldset></div><div id="help_5"[{if $apptype!='5'}] style="display:none"[{/if}]><fieldset><legend><b>[{ci_lang key='strSpecialNotes'}]</b></legend><table width="90%" cellspacing="0" cellpadding="0" align="left" style="border:0"><tbody><tr><td class="defaultViewText"><img src='[{#s_base#}]/dbfacephp/img/s/item.png'/> [{ci_lang key='strSpecialNotesDashboardAppLine1'}]</td></tr><tr><td valign="middle" class="defaultViewText"><img src='[{#s_base#}]/dbfacephp/img/s/item.png'/> [{ci_lang key='strSpecialNotesDashboardAppLine2'}]</td></tr><tr><td valign="middle" class="defaultViewText"><img src='[{#s_base#}]/dbfacephp/img/s/item.png'/> [{ci_lang key='strSpecialNotesDashboardAppLine3'}]</td></tr></tbody></table></fieldset></div><div id="help_6" [{if $apptype!='6'}]style="display:none"[{/if}]> [{include file="advrep_step1.tpl"}] </div></td></tr><tr><td class="bodyText" colspan="2"><hr/></td></tr><tr><td style="text-align:right" colspan="2"><a class="subopen" href="[{#dbfacephp_base_url#}]/index.php?c=app&m=applist">back to application list</a><input type="submit" class="input-submit" value="[{ci_lang key='strNext'}]>>"/></td></tr><tr><td colspan="2">&nbsp;</td></tr></table></form></div><span id="span_advrep_join_tmp" style="display:none"><div class="advrep_div" style="margin-top:2px;margin-bottom:2px;"><select name="jointype[]" style="border:1px" onchange="javascript:set_columns(this.value, this);"><option value="join" selected>JOIN</option><option value="leftjoin">LEFT JOIN</option><option value="rightjoin">RIGHT JOIN</option></select><select name="tablename[]" class="sel_tbl" style="border:1px" onchange="javascript:set_columns(this.value, this);"><option value="" selected>-- Table --</option> [{section name=i loop=$tables}] <option value="[{$tables[i]}]">[{$tables[i]}]</option> [{/section}] </select> ON <select name="left_columnname[]" class="left" style="border:1px"></select> equal <select name="right_columnname[]" class="right" style="border:1px"></select><img align="absmiddle" onclick="javascript:advrep_addjoin(this);" src="[{#s_base#}]/dbfacephp/img/add2.gif"/><img align="absmiddle" onclick="javascript:advrep_deljoin(this);" src="[{#s_base#}]/dbfacephp/img/delete2.gif"/><br/></div></span></body></html>