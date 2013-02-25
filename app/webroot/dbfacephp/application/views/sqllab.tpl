<html><head><meta http-equiv='content-type' content='text/html;charset=UTF-8'/> [{if $phpload}] <link type="text/css" href="[{#s_base#}]/dbfacephp/css/load.php?load=style-default.css" rel="stylesheet"/><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/load.php?load=prototype.js,rview.js,jquery.js,Utils.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/codepress.js"></script> [{else}] <link type="text/css" href="[{#s_base#}]/dbfacephp/css/style-default.css" rel="stylesheet"/><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/prototype.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/rview.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/codepress.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/jquery.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/Utils.js"></script> [{/if}] <script type="text/javascript">
    function go4(argReqID, argPageNo) {
      document.mainForm.pageNo.value=argPageNo;
      document.mainForm.sqlcontent.value=codepress.getCode();
      document.mainForm.submit();
    }
    function exportData(argDownloadType) {
      closeLayer();
      var oldaction = document.mainForm.action;
      var option = $('f_option_'+argDownloadType).serialize();
      document.mainForm.action = "[{#dbfacephp_base_url#}]/index.php?c=export&"+option; 
      document.mainForm.downloadType.value=argDownloadType;
      document.mainForm.sqlcontent.value=codepress.getCode();
      document.mainForm.submit();
      document.mainForm.action = oldaction;
    }
    function submitDataX(argReqID) {
      document.mainForm.sqlcontent.value=codepress.getCode();
      document.mainForm.submit();
    }
    
    function save_sql_bookmark() {
      var bkname=$('bkname').value;
      var sql = codepress ? codepress.getCode() : $('textarea_sql').value;
      $j.getJSON('[{#dbfacephp_base_url#}]/index.php?c=req&m=savesqlbookmark&cat=sql&subcat=sqleditor', {catkey:bkname, sql:sql}, function(json) {
        if (!json.success) {
          alert(json.message);
          $j('bkname').focus();
        } else {
          alert(json.message);
          togglebookmark();
        }
      });
    }
    
    function showbkmenu(a){
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
  }
  
  function op_bk(op) {
    var bkid=$('bkid').value;
    if (bkid=='') {
      return;
    }
    if (op=='delete') {
      $j.getJSON('[{#dbfacephp_base_url#}]/index.php?c=req&m=delsqlbookmark&bkid='+bkid, function(json) {
        var sel=$('bkid');
        sel.options.length=0;
        AddSelectOption(sel, '-- pick a script from bookmarks --', '', true);
        for(var i=0;i<json.length;i++) {
          AddSelectOption(sel, json[i].catkey, json[i].bkid, false);
        }
      });
      return;
    }
    $j.get('[{#dbfacephp_base_url#}]/index.php?c=req&m=getbookmarkedsql&bkid='+bkid, function(data) {
      var sql=data;
      if (op=='view') {
        codepress.setCode(sql);
        $j('#span_exists_bk').slideUp('fast');
      } else if (op=='submit') {
        codepress.setCode(sql);
        submitDataX('executesql');
      }
    });
  }
  
  function togglebookmark() {
    $j('#span_bk_name').slideToggle('fast');
  }
  function togglebookmarked() {
    $j('#span_exists_bk').slideToggle('fast');
  }
  var selPageLayer;
  function showDownloadOption(type) {
    selPageLayer = "option_"+type;
    var eleDiv=$("option_"+type);
    eleDiv.style.display="block";
    eleDiv.style.width="400px";

    if(!lastFlyBarX || !lastFlyBarY) {
      eleDiv.style.left="100px";
      eleDiv.style.top="100px";
    } else {
      eleDiv.style.left=lastFlyBarX+"px";
      eleDiv.style.top=lastFlyBarY+"px";
    }    
  }  
  function closeLayer() {
    var ele=document.getElementById(selPageLayer);
    if(ele != null) {
      ele.style.display="none";
    }
  }  
  </script></head><body><div id="bodyColumn"><div id="navcolumn"><a href="[{#dbfacephp_base_url#}]/index.php?c=home&m=dashboard">Dashboard</a> > SQL Editor</div><form action="[{#dbfacephp_base_url#}]/index.php?c=sqllab" method="post" name='mainForm'><input type="hidden" name="pageNo" value="[{$pageNo}]"><input type="hidden" name="downloadType" value=""><input type="hidden" name="sqlcontent" value=""><table class="otherDisplay2"><tbody><tr><td class="config-label">SQL Scripts:<div id="autoComp" class="autoComp"><table id="autoCompTable" class="autoComp"><tbody></tbody></table></div></td><td><textarea rows="15" cols="75" id="textarea_sql" class="codepress sql linenumbers-on">[{$sql}]</textarea></td></tr><tr><td></td><td><div id="gbar" class="gb1"><a href="javascript:;" style="font-size:10px" onclick="return togglebookmark();">Bookmark&#9660</a><a href="javascript:;" style="font-size:10px" onclick="return togglebookmarked();">Bookmarked SQL&#9660</a></div><span id="span_bk_name" style="display:none;margin-top:3px"><input type="text" class="config-textfield" value="" id="bkname" name="bkname"/><a class="gbtn primary" href="javascript:;" onclick="javascript:save_sql_bookmark();"><span><span>OK</span></span></a><a class="gbtn" href="javascript:;" onclick="javascript:$j('#span_bk_name').slideUp('fast');"><span><span>Cancel</span></span></a></span><span id="span_exists_bk" style="display:none;margin-top:3px"><select id="bkid" class="config-picklist"><option value="">-- pick a script from bookmarks --</option> [{section name=i loop=$bookmarks}] <option value="[{$bookmarks[i].bkid}]">[{$bookmarks[i].catkey}]</option> [{/section}] </select><a class="gbtn" href="javascript:;" onclick="javascript:op_bk('submit');"><span><span>Submit</span></span></a><a class="gbtn primary" href="javascript:;" onclick="javascript:op_bk('view');"><span><span>View Only</span></span></a><a class="gbtn" href="javascript:;" onclick="javascript:op_bk('delete');"><span><span>Delete</span></span></a><a class="gbtn" href="javascript:;" onclick="javascript:$j('#span_exists_bk').slideUp('fast');"><span><span>Close</span></span></a></span></td></tr><tr><td width="10">&nbsp;</td><td><input type="button" class="input-submit" onclick="javascript:this.disabled='true';submitDataX('executesql');" value="Execute(Ctrl+Enter)"/></td></tr></tbody></table></form>
[{if $pageNum > 0}]
<span class="pagebanner">[{$totalNum}] items found.</span>
[{/if}]
<table style="margin-bottom:5px"><thead><tr><th>[{if $fieldnum > 0}]No[{else}]Enter Sql statement to start.[{/if}]</th> [{section name=i loop=$columnNames}] <th>[{$columnNames[i]}]</th> [{/section}] </tr></thead><tbody> [{section name=i loop=$searchResult}] <tr class="[{cycle values="odd,even"}]"><td>[{math equation="x *(y-1)+z+1" x=$pageLineNum y=$pageNo z=$smarty.section.i.index}]</td> [{foreach from=$columnNames item=j}] <td>[{$searchResult[i].$j}]</td> [{/foreach}] </tr> [{sectionelse}] <tr class="odd"><td><span class="info-text">Please enter a valid sql statement to execute!</span></td></tr> [{/section}] </tbody></table><div class="exportlinks">[{ci_lang key='strExportOptions'}]: <a href="javascript:showDownloadOption('csv');"><span class="export csv">CSV </span></a>| <a href="javascript:showDownloadOption('xls');"><span class="export excel">Excel </span></a>| <a href="javascript:showDownloadOption('xml');"><span class="export xml">XML </span></a>| <a href="javascript:showDownloadOption('html');"><span class="export html">HTML </span></a>| <a href="javascript:showDownloadOption('pdf');"><span class="export pdf">PDF </span></a></div></div>
[{include file="exportoption.tpl"}]
[{include file="analytics.tpl"}]
</body></html>