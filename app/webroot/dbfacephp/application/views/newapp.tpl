<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/><link href="[{#s_base#}]/dbfacephp/css/style-default.css" rel="stylesheet" type="text/css"><link href="[{#s_base#}]/dbfacephp/css/c/thickbox.css" rel="stylesheet" type="text/css"><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/prototype.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/jquery.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/tommick.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/Utils.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/rview.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/codepress.js"></script><script type="text/javascript" src="[{#s_base#}]/dbfacephp/js/thickbox.js"></script><script type="text/javascript">
   configFocusInput();
   function togglebookmarked() {
    $j('#span_exists_bk').slideToggle('fast');
  }
  
  function op_bk(op) {
    var bkid=$('bkid').value;
    if (bkid=='') {
      return;
    }
    $j.get('[{#dbfacephp_base_url#}]/index.php?c=req&m=getbookmarkedsql&bkid='+bkid, function(data) {
      var sql=data;
      codepress.setCode(sql);
      $j('#span_exists_bk').slideUp('fast');
    });
  }  
   function createapp() {
     $('mainForm').disable();
     switch($("apptype").value) {
       case '0':
         createapp_0();
         break;
       case '1':
         createapp_1();
         break;
       case '2':
         createapp_2();
         break;
       case '3':
         createapp_3();
         break;
       case '4':
         createapp_4();
         break;
       default:
         alert("Unknow application type!");
         return;
     }
   }
   function createapp_4() {
     // query sql parameters:
     // 1. appname, 2. apptitle, 3. appdesc, 4. formid, 5.sql
     var appname=$('appname').value;
     var apptitle=$('apptitle').value;
     var appdesc=$('appdesc').value;
     var apptype=4;
     var formid=-1;
     if ($('form_none').checked) {
       formid=-1;
     } else if ($('form_choose').checked) {
       formid=$('formid').value;
     } else if ($('form_new').checked) {
       formid = $('fb_frame').contentWindow.document.getElementById('formID').value;
       if (formid == "" || formid == -1) {
         document.body.scrollTop=0;
         alert("Please save the form first!");
         $('fb_frame').contentWindow.shformprop();
         $('mainForm').enable();
         return;
       }
     }
    
     var sql="";
     if ($('qb_free').checked) {
       sql = codepress ? codepress.getCode() : document.getElementById('sqlContent').value;
     } else if ($('qb_new').checked) {
       $('qb_frame').contentWindow.qb_genSQL();
       sql = $('qb_frame').contentWindow.codepress ? $('qb_frame').contentWindow.codepress.getCode() : $('qb_frame').contentWindow.document.getElementById('QUERYTEXT').value
     }
     
     if (!sql || sql.trim() == '') {
       alert("The application script should be input!");
       $('mainForm').enable();
       return;
     }
     var monNum=$('monNum').value;
     $j.post('[{#dbfacephp_base_url#}]/index.php?c=create', {appname:appname,apptitle:apptitle,appdesc:appdesc,apptype:apptype,formid:formid,sql:sql, monNum:monNum}, 
       function(json) {
         $('mainForm').enable();
         if (json.success) {
           $('errorDIV').className='js_success';
         } else {
           $('errorDIV').className='js_warning';
         }
         $('errorDIV').update(json.message).show();
         document.body.scrollTop = 0;
         window.parent.frames['menu'].document.location.reload();
         setCookie('NavAccordion', 'false|true|false');         
       }, "json");
   }   
   function createapp_3() {
     // query sql parameters:
     // 1. appname, 2. apptitle, 3. appdesc, 4. formid, 5.sql
     var appname=$('appname').value;
     var apptitle=$('apptitle').value;
     var appdesc=$('appdesc').value;
     var apptype=3;
     var formid=-1;
     if ($('form_none').checked) {
       formid=-1;
     } else if ($('form_choose').checked) {
       formid=$('formid').value;
     } else if ($('form_new').checked) {
       formid = $('fb_frame').contentWindow.document.getElementById('formID').value;
       if (formid == "" || formid == -1) {
         document.body.scrollTop=0;
         alert("Please save the form first!");
         $('fb_frame').contentWindow.shformprop();
         $('mainForm').enable();
         return;
       }
     }
    
     var sql="";
     if ($('qb_free').checked) {
       sql = codepress ? codepress.getCode() : document.getElementById('sqlContent').value;
     } else if ($('qb_new').checked) {
       $('qb_frame').contentWindow.qb_genSQL();
       sql = $('qb_frame').contentWindow.codepress ? $('qb_frame').contentWindow.codepress.getCode() : $('qb_frame').contentWindow.document.getElementById('QUERYTEXT').value
     }
     
     if (!sql || sql.trim() == '') {
       alert("The application script should be input!");
       $('mainForm').enable();
       return;
     }
     var repType=$('repType').value;
     $j.post('[{#dbfacephp_base_url#}]/index.php?c=create', {appname:appname,apptitle:apptitle,appdesc:appdesc,apptype:apptype,formid:formid,sql:sql, repType:repType}, 
       function(json) {
         $('mainForm').enable();
         if (json.success) {
           $('errorDIV').className='js_success';
         } else {
           $('errorDIV').className='js_warning';
         }
         $('errorDIV').update(json.message).show();
         document.body.scrollTop = 0;
         window.parent.frames['menu'].document.location.reload();
         setCookie('NavAccordion', 'false|true|false');         
       }, "json");
   }
   function createapp_2() {
     // query sql parameters:
     // 1. appname, 2. apptitle, 3. appdesc, 4. formid, 5.sql
     var appname=$('appname').value;
     var apptitle=$('apptitle').value;
     var appdesc=$('appdesc').value;
     var apptype=2;
     var formid=-1;
     if ($('form_none').checked) {
       formid=-1;
     } else if ($('form_choose').checked) {
       formid=$('formid').value;
     } else if ($('form_new').checked) {
       formid = $('fb_frame').contentWindow.document.getElementById('formID').value;
       if (formid == "" || formid == -1) {
         document.body.scrollTop=0;
         alert("Please save the form first!");
         $('fb_frame').contentWindow.shformprop();
         $('mainForm').enable();
         return;
       }
     }
    
     var sql="";
     if ($('qb_free').checked) {
       sql = codepress ? codepress.getCode() : document.getElementById('sqlContent').value;
     } else if ($('qb_new').checked) {
       $('qb_frame').contentWindow.qb_genSQL();
       sql = $('qb_frame').contentWindow.codepress ? $('qb_frame').contentWindow.codepress.getCode() : $('qb_frame').contentWindow.document.getElementById('QUERYTEXT').value
     }
     
     if (!sql || sql.trim() == '') {
       alert("The application script should be input!");
       $('mainForm').enable();
       return;
     }
     var tablename=$('tablename').value;
     $j.post('[{#dbfacephp_base_url#}]/index.php?c=create', {appname:appname,apptitle:apptitle,appdesc:appdesc,apptype:apptype,formid:formid,sql:sql, tablename:tablename}, 
       function(json) {
         $('mainForm').enable();
         if (json.success) {
           $('errorDIV').className='js_success';
         } else {
           $('errorDIV').className='js_warning';
         }
         $('errorDIV').update(json.message).show();
         document.body.scrollTop = 0;
         window.parent.frames['menu'].document.location.reload();
         setCookie('NavAccordion', 'false|true|false');         
       }, "json");   
   }
   
   function createapp_1() {
     // general operation parameters:
     // 1. appname 2. apptitle, 3. appdesc 4. formid, 5. sql 6. confirmmessage
     var appname=$('appname').value;
     var apptitle=$('apptitle').value;
     var appdesc=$('appdesc').value;
     var apptype=1;
     var formid=-1;
     if ($('form_none').checked) {
       formid=-1;
     } else if ($('form_choose').checked) {
       formid=$('formid').value;
     } else if ($('form_new').checked) {
       formid = $('fb_frame').contentWindow.document.getElementById('formID').value;
       if (formid == "" || formid == -1) {
         document.body.scrollTop=0;
         alert("Please save the form first!");
         $('fb_frame').contentWindow.shformprop();
         $('mainForm').enable();
         return;
       }
     }
     var sql="";
     if ($('qb_free').checked) {
       sql = codepress ? codepress.getCode() : document.getElementById('sqlContent').value;
     } else if ($('qb_new').checked) {
       $('qb_frame').contentWindow.iud_gensql();
       sql=$('qb_frame').contentWindow.document.getElementById("iud_sql").innerHTML.stripTags();
    		sql = sql.replace(/<br>/g,'\n');
    		sql= sql.replace(/\u2009/g,'');
    		sql = sql.replace(/<.*?>/g,'');
    		sql = sql.replace(/&lt;/g,'<');
    		sql = sql.replace(/&gt;/g,'>');
    		sql = sql.replace(/&amp;/gi,'&');
        sql = sql.replace(/&nbsp;/g,' ');
        sql = sql.replace(/ /g, '');
     }
     
     if (!sql || sql.trim() == '') {
       alert("The application script should be input!");
       $('mainForm').enable();
       return;
     }
     var opTip=$('opTip').value;
     $j.post('[{#dbfacephp_base_url#}]/index.php?c=create', {appname:appname,apptitle:apptitle,appdesc:appdesc,apptype:apptype,formid:formid,sql:sql, opTip:opTip}, 
       function(json) {
         $('mainForm').enable();
         if (json.success) {
           $('errorDIV').className='js_success';
         } else {
           $('errorDIV').className='js_warning';
         }
         $('errorDIV').update(json.message).show();
         document.body.scrollTop = 0;
         window.parent.frames['menu'].document.location.reload();
         setCookie('NavAccordion', 'false|true|false');         
       }, "json"); 
   }
   function createapp_0() {
     // query sql parameters:
     // 1. appname, 2. apptitle, 3. appdesc, 4. formid, 5.sql
     var appname=$('appname').value;
     var apptitle=$('apptitle').value;
     var appdesc=$('appdesc').value;
     var apptype=0;
     var formid=-1;
     if ($('form_none').checked) {
       formid=-1;
     } else if ($('form_choose').checked) {
       formid=$('formid').value;
     } else if ($('form_new').checked) {
       formid = $('fb_frame').contentWindow.document.getElementById('formID').value;
       if (formid == "" || formid == -1) {
         document.body.scrollTop=0;
         alert("Please save the form first!");
         $('fb_frame').contentWindow.shformprop();
         $('mainForm').enable();
         return;
       }
     }
    
     var sql="";
     if ($('qb_free').checked) {
       sql = codepress ? codepress.getCode() : document.getElementById('sqlContent').value;
     } else if ($('qb_new').checked) {
       $('qb_frame').contentWindow.qb_genSQL();
       sql = $('qb_frame').contentWindow.codepress ? $('qb_frame').contentWindow.codepress.getCode() : $('qb_frame').contentWindow.document.getElementById('QUERYTEXT').value
     }
     
     if (!sql || sql.trim() == '') {
       alert("The application script should be input!");
       $('mainForm').enable();
       return;
     }
     $j.post('[{#dbfacephp_base_url#}]/index.php?c=create', {appname:appname,apptitle:apptitle,appdesc:appdesc,apptype:apptype,formid:formid,sql:sql}, 
       function(json) {
         $('mainForm').enable();
         if (json.success) {
           $('errorDIV').className='js_success';
         } else {
           $('errorDIV').className='js_warning';
         }
         $('errorDIV').update(json.message).show();
         document.body.scrollTop = 0;
         window.parent.frames['menu'].document.location.reload();
         setCookie('NavAccordion', 'false|true|false');         
       }, "json");
   }
   
   function gettablecolumns() {
    var tablename = $('tablename').value;
    new Ajax.Request('[{#dbfacephp_base_url#}]/index.php?c=app&m=getcolumns', {
       method: 'post',
       parameters: {'tablename':tablename},
       onSuccess: function(transport) {
       }
     }); 
   
   }
   
   function show_formbuilder() {
     $('option_form_choose').hide();
     if ($('option_form_new').innerHTML == '') {
       $('option_form_new').update('<iframe id="fb_frame" src="[{#dbfacephp_base_url#}]/index.php?c=form&m=show&iframe=true" style="width:100%;height:400px;border:0;"></iframe>');
     }
     $('option_form_new').show();
   }

   var lastplist="initialized";
   function show_querybuilder() {
     $('option_qb_free').hide();
     var plist = getFormVarList(); 
     if (lastplist != plist) {
       $('option_qb_new').update('<iframe id="qb_frame" src="[{#dbfacephp_base_url#}]/index.php?c=qb&m=show&iframe=true&closeFun=copyToEditor();&plist='+plist+'" style="width:100%;height:400px;border:0;"></iframe>');
       lastplist = plist;
     }
     $('option_qb_new').show();   
   
   }
   function show_dmlbuilder() {
     $('option_qb_free').hide();
     var plist = getFormVarList(); 
     if (lastplist != plist) {
       $('option_qb_new').update('<iframe id="qb_frame" src="[{#dbfacephp_base_url#}]/index.php?c=req&m=initiudbuilder&iframe=true&closeFun=copyToEditor();&plist='+plist+'" style="width:100%;height:400px;border:0;"></iframe>');
       lastplist = plist;
     }
     $('option_qb_new').show();   
   }   
   function notify_create_form(formid) {
     $('create_form_id').value = formid;
     getFormVar(formid);
   }
    document.observe("dom:loaded", function() {
       if (!$('form_none').checked&&$('formid').value != "-1") {
         getFormVar();
       }
       [{if $apptype == 3}]getRepTypeImg();[{/if}]
    });   
  </script></head><body><div id="bodyColumn"><div id="navcolumn"><a href="[{#dbfacephp_base_url#}]/index.php?c=home&m=dashboard">[{ci_lang key='strDashboard'}]</a> ><a href="[{#dbfacephp_base_url#}]/index.php?c=app&m=applist">[{ci_lang key='strApplicationManagement'}]</a> > [{ci_lang key='strCreateApplication'}]</div><div id="errorDIV" class="" style="display:none"></div><div class="clear"></div><form action="[{#dbfacephp_base_url#}]/index.php?c=create" method="post" id="mainForm" name="mainForm"><input type="hidden" name="appname" id="appname" value="[{$appname}]"/><input type="hidden" name="apptitle" id="apptitle" value="[{$apptitle}]"/><input type="hidden" name="appdesc" id="appdesc" value="[{$appdesc}]"/><input type="hidden" name="apptype" id="apptype" value="[{$apptype}]"/><input type="hidden" name="sql" id="sql" value=""/><input type="hidden" name="create_form_id" id="create_form_id" value=""/><table border="0" cellpadding="0" cellspacing="0" class="otherDisplay2"> [{if $apptype == 0}] [{include file="aw_queryapp.tpl"}] [{elseif $apptype == 1}] [{include file="aw_generaloperationapp.tpl"}] [{elseif $apptype == 2}] [{include file="aw_queryforupdateapp.tpl"}] [{elseif $apptype == 3}] [{include file="aw_chartreportapp.tpl"}] [{elseif $apptype == 4}] [{include file="aw_resultsetcheckpoint.tpl"}] [{elseif $apptype == 5}] [{/if}] <tr><td colspan="2" class="bodyText"><hr/></td></tr><tr><td colspan="2" style="text-align:right"><input type="button" class="input-submit gray" value="<< [{ci_lang key='strBack'}]" onclick="javascript:document.location='[{#dbfacephp_base_url#}]/index.php?c=app&m=create_step1';"/><input type="button" class="input-submit" value="[{ci_lang key='strCreate'}]" onclick="javascript:createapp();"/></td></tr><tr height="5px"><td colspan="2">&nbsp;</td></tr></table></form></div><div id="help_using_formvars" style="display:none"><div><span style="border-bottom: 1px solid rgb(229, 229, 229);font-size:13px"><strong>How to use form variables in your SQL scripts? </strong></span><p/>
DbFacePHP has 6 kinds of tag for the form variables. For example, if you create a form containing a field named '<b>productcode</b>', then you can insert <ul style="padding-left:0px;list-style-type: none;margin-top:0px"><li><b>${productcode}</b></li><li><b>@{productcode}</b></li><li><b>#{${productcode}}#</b></li><li><b>#{@{productcode}}#</b></li><li><b>*{${productcode}}*</b></li><li><b>*{@{productcode}}*</b></li> into your sql script expressing the user's input.<p/></div></div>
[{include file="analytics.tpl"}]
</body></html>