<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>Query Builder for DbFacePHP</title>
[{if $phpload}]
<link type="text/css" href="[{#s_base#}]/dbfacephp/css/load.php?load=qb.css,c/thickbox.css" rel="stylesheet"/><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/load.php?load=prototype.js,rview.js,qb.js,Utils.js,tommick.js,jquery.js,thickbox.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/codepress.js"></script>
[{else}] <link rel="stylesheet" href="[{#s_base#}]/dbfacephp/css/qb.css" type="text/css"><link type="text/css" href="[{#s_base#}]/dbfacephp/css/c/thickbox.css" rel="stylesheet"/><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/prototype.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/rview.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/qb.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/Utils.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/tommick.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/codepress.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/jquery.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/thickbox.js"></script>
[{/if}]
<script type="text/javascript">
var plist;
[{if $plist}]
plist="[{$plist}]";
[{/if}]
function ab() {
  $("autoComp").style.display="none";
}
document.observe("dom:loaded", function() {
  getHTMLByURL('[{#dbfacephp_base_url#}]/index.php?c=req&requestID=gettablelist', 'dbaseObjectsSlider');
});
document.observe("click", function(event) {
  var ele=Event.element(event);
  if (ele&&ele.tagName!='INPUT') {
    ab();
  }
});
var ptEle = null;
function set_pickdt_url(ele) {
  ptEle = ele;
  var je =$j(ele);
  var columnname=$j(je.parent().parent().find("td")[1]).find("input")[0].value;
  je.attr('href', ROOT_URL+'?c=req&m=columndata&columnname='+columnname+'&width=350&height=300');
}
function datalist_choose(ele) {
  if (ptEle != null) {
    var returnData= new Array();
    $j('table.searchResults').find("input:checked").each(function(i) {
      returnData.push(this.value);
    });
    var datalist = returnData.join(",");
    $j($j(ptEle).parent().parent().find("td")[3]).find("input")[0].value=datalist;
    var opEle=$j($j(ptEle).parent().parent().find("td")[2]).find("select")[0];
      if (returnData.length == 1) {
        opEle.value="=";
      } else if (returnData.length > 1) {
        opEle.value="in";
      }
  }
  tb_remove();
}
  function showScriptMenu(a){
    var b=document.getElementById("gbardd"),
    c=document.getElementById("gbarif");
    if(b&&c){
      b.style.display=b.style.display=="block"?"none":"block";
      if (b.style.display=='block') {
        b.style.left=findPosX(a) + "px";
        b.style.top =(findPosY(a) + 12) + "px";
        c.width = b.offsetWidth;
        c.height = b.offsetHeight;
      }
      c.style.display = b.style.display;
      
    }
    return false;
  };

  function closeTip(a){
    var b=document.getElementById("gbardd");
    b.style.display="none";
  }
</script></head><body style="padding-top:0px;margin-left:5px">
[{if !$withouttitle}]
<div id="navcolumn"><a href="./index.php?c=home&m=dashboard">[{ci_lang key='strDashboard'}]</a> > Query Builder</div>
[{/if}]
<div style="margin-top:5px;">
[{if $closeFun != null}]
<input type="button" class="input-submit" onclick="[{$closeFun}]" value="Copy and Close"/>
[{/if}]
<div id="gbar" class="gb1"><a href="javascript:;" style="font-size:10px" onclick="return showScriptMenu(this, event);">Bookmarks&#9660</a><div class="gbard" id="gbarif" style="border:0;z-index:1"></div><div class="gbard" id="gbardd" style="text-align:left" onclick="javascript:closeTip(event);"><span><a href="javascript:shqueryProp();closeTip();">Bookmark SQL As...</a></span><span><a href="javascript:closeTip(this);">Close</a></span></div></div></div><div id="htmldbBreadcrumbTop"></div><form method="post" name="mainForm" id="mainForm"><input type="hidden" id="qbID" value=""/><table id="qbTable" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td id="qbSideBar" valign="top"><div id="qbLeftHeader"><input type="text" name="p_t02" size="25" id="P1002_FIND" onkeyup="qb_searchTables()"></div><div id="dbaseObjectsSlider"><div align="center"><img src="[{#s_base#}]/dbfacephp/img/await.gif"/><br/><span class="info-text">Loading tables, please wait...</span></div></div></td><td id="v_slide" class="obSlideBar" valign="middle" width="5"><span id="qbSideBartoggle" onclick="qb_toggleSideBar();"><img id="qbSideBar_toggle" src="[{#s_base#}]/dbfacephp/img/qb/close.png" class="htmldbPseudoButton"></span></td><td id="qbFrameHolder" valign="top" width="100%"><div style="height:221px" id="qbTableHolder" class="d1"><div id="loadingtable" align="center" style="display:none;position:absolute;left:30%;top:30%;z-index:900"><img src="[{#s_base#}]/dbfacephp/img/loadingAnimation.gif"/><br/><span class="textBold">Loaing table, please wait...</span></div><div align="right"><div id="qbLinkHolder"></div></div></div><div id="h_slide" onmousedown="qb_hPosition(this);">&nbsp;</div><div id="qbBottomHolder"><table class="htmldbTabbedNavigationList" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td><a class="tabcurrent" href="javascript:;" id="cond_tab" onclick="html_TabClick(this,'conditionsHolder');return false;">Columns</a></td><td><a href="javascript:;" id="sql_tab" onclick="html_TabClick(this,'querycondition_table');return false;">Conditions</a></td><td><a href="javascript:;" id="result_tab" onclick="html_TabClick(this,'querySorting_table');return false;">Sorting</a></td><td><a href="javascript:;" id="SavedSql_tab" onclick="return qb_tabToQueryText(this);">Preview</a></td><td><a href="javascript:;" id="result_tab" onclick="qb_getResult();html_TabClick(this,'queryResults_table');return false;">ResultSet</a></td></tr></tbody></table><div id="htmlTabHolder"><div id="conditionsHolder"><table id="conditions" class="htmldbStandard3" border="0" cellpadding="0" cellspacing="0"><tr><th><br></th><th>Column</th><th>Alias</th><th>Aggregate</th><th>Group By</th><th>Delete</th></tr></table><div style="font-size:11px"><input type="checkbox" id="uniquerecords" style="vertical-align:middle"/>only include unique records</div></div><div id="querycondition_table" style="display:none;"><table id="columnconditions" class="htmldbStandard3" border="0" cellpadding="0" cellspacing="0"><tr><th><br/></th><th>Column/Value</th><th>Operator</th><th>Column/Value</th><th>Match Type</th><th><br></th></tr><tr><td style="text-align:center;"><img class="htmldbPseudoButton" style="margin: 2px;" src="[{#s_base#}]/dbfacephp/img/qb/green_arrow_up.gif" onclick="qb_RowUp(this)"><img class="htmldbPseudoButton" style="margin: 2px;" src="[{#s_base#}]/dbfacephp/img/qb/green_arrow_down.gif" onclick="qb_RowDown(this)"></td><td><input class="inputtext" type="text" id="con_key" name="con_key" value="" onkeydown="return showTipList(event, this.id)" onclick="getFullColumnNames(this);"/></td><td><select class="config-picklist"><option value="=">equals</option><option value=">">greater than</option><option value=">=">greater or equal</option><option value="<">less than</option><option value="<=">less or equal</option><option value="<>">not equal to</option><option value="like">contains</option><option value="not like">does not contain</option><option value="in">include</option><option value="not in">not include</option><option value="between">between</option><option value="not between">not between</option><option value="is null">is null</option><option value="is not null">is not null</option></select></td><td><input class="inputtext" type="text" id="con_value" name="con_value" value="" onkeydown="return showTipList(event, this.id)" onclick="getFullColumnNames(this)"/></td><td><select name="matchtype"><option value="AND">and</option><option value="OR">or</option></select></td><td class="htmldbPseudoButton"><a class="thickbox" renewhref="set_pickdt_url"><img id="_del" border="0" src="[{#s_base#}]/dbfacephp/img/pickdt.gif"/></a><img id="_del" src="[{#s_base#}]/dbfacephp/img/add2.gif" onclick="qb_copyNewCondition(this.parentNode.parentNode);"><img id="_del" src="[{#s_base#}]/dbfacephp/img/delete2.gif" onclick="qb_delCondition(this.parentNode.parentNode)"></td></tr></table></div><div id="querySorting_table" style="display:none"><table id="sortcolumns" class="htmldbStandard3" border="0" cellpadding="0" cellspacing="0"><tr><th><br></th><th>Sorted Columns</th><th>Order</th><th><br></th></tr><tr><td style="text-align: center;" class="qbTableData"><img class="htmldbPseudoButton" style="margin: 2px;" src="[{#s_base#}]/dbfacephp/img/qb/green_arrow_up.gif" onclick="qb_RowUp(this)"><img class="htmldbPseudoButton" style="margin: 2px;" src="[{#s_base#}]/dbfacephp/img/qb/green_arrow_down.gif" onclick="qb_RowDown(this)"></td><td class="qbTableData"><input class="inputtext" type="text" id="sort_key" name="sort_key" value="" onkeydown="return showTipList(event, this.id)" onclick="getFullColumnNames(this);"/></td><td class="qbTableData"><select><option value="DESC">DESC</option><option value="ASC">ASC</option></select></td><td class="htmldbPseudoButton"><img id="_del" src="[{#s_base#}]/dbfacephp/img/add2.gif" onclick="qb_copyNewSort(this.parentNode.parentNode);"><img id="_del" src="[{#s_base#}]/dbfacephp/img/delete2.gif" onclick="qb_delSort(this.parentNode.parentNode);"></td></tr></table></div><div id="queryText_table"><textarea name="p_t07" style="width:100%" rows="15" id="QUERYTEXT" class="codepress sql linenumbers-on">Click the table to the sql workshop above to begin.</textarea></div><div id="queryResults_table" style="display:none;"><div id="queryResults"><br></div></div></div><br><br></div></td></tr></tbody></table><table style="display: none;"><tr id="clone"><td><img class="htmldbPseudoButton" style="margin: 2px;" src="[{#s_base#}]/dbfacephp/img/qb/green_arrow_up.gif" onclick="qb_RowUp(this)"><img class="htmldbPseudoButton" style="margin: 2px;" src="[{#s_base#}]/dbfacephp/img/qb/green_arrow_down.gif" onclick="qb_RowDown(this)"></td><td><br/></td><td><input id="_alias" class="inputtext"></td><td><select id="_fun"></select></td><td style="text-align:center"><input id="_grp" type="checkbox"></td><td style="text-align:center;" class="htmldbPseudoButton"><img id="_del" src="[{#s_base#}]/dbfacephp/img/delete2.gif" onclick="qb_rmConditionImg(this.value)"></td></tr></table><div id="defaultLinkMenu" style="display:none;"><ul class="dList"><li><a href="javascript:qb_delLinkClick();" class="dList">Delete Join</a></li><li><a href="javascript:qb_outer('I');" class="dList">Set Inner Join</a></li><li><a href="javascript:qb_outer('L');" class="dList">Set Left Outer Join</a></li><li><a href="javascript:qb_outer('R');" class="dList">Set Right Outer Join</a></li><li><a href="javascript:qb_outer('F');" class="dList">Set Full Outer Join</a></li><li><a href="javascript:qb_outer('E');" class="dList">Unset Outer Join</a></li></ul></div>
[{include file="qb/queryproperties.tpl"}]
[{include file="qb/querydelete.tpl"}]
</div><div id="autoComp"><table id="autoCompTable"><tbody></tbody></table></div></form>
[{include file="inc/loading.tpl" width="300" loadingmsg="Getting data from database, please wait..."}]
[{include file="analytics.tpl"}]
</body></html>