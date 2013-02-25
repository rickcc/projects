<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 16:36:18
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/newapp.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40032594850a57c721a1c45-86416742%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2752da1cf3410d8acbdb3786e612d3c3721302e7' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/newapp.tpl',
      1 => 1352280088,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40032594850a57c721a1c45-86416742',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'apptype' => 0,
    'appname' => 0,
    'apptitle' => 0,
    'appdesc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a57c722f67d9_46666892',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a57c722f67d9_46666892')) {function content_50a57c722f67d9_46666892($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ci_lang')) include '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application/libraries/Smarty/libs/plugins/function.ci_lang.php';
?><html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/><link href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/style-default.css" rel="stylesheet" type="text/css"><link href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/c/thickbox.css" rel="stylesheet" type="text/css"><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/prototype.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/jquery.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/tommick.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/Utils.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/rview.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/codepress.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/thickbox.js"></script><script type="text/javascript">
   configFocusInput();
   function togglebookmarked() {
    $j('#span_exists_bk').slideToggle('fast');
  }
  
  function op_bk(op) {
    var bkid=$('bkid').value;
    if (bkid=='') {
      return;
    }
    $j.get('<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=req&m=getbookmarkedsql&bkid='+bkid, function(data) {
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
     $j.post('<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=create', {appname:appname,apptitle:apptitle,appdesc:appdesc,apptype:apptype,formid:formid,sql:sql, monNum:monNum}, 
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
     $j.post('<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=create', {appname:appname,apptitle:apptitle,appdesc:appdesc,apptype:apptype,formid:formid,sql:sql, repType:repType}, 
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
     $j.post('<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=create', {appname:appname,apptitle:apptitle,appdesc:appdesc,apptype:apptype,formid:formid,sql:sql, tablename:tablename}, 
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
    		sql = sql.replace(/<.*?<?php ?>>/g,'');
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
     $j.post('<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=create', {appname:appname,apptitle:apptitle,appdesc:appdesc,apptype:apptype,formid:formid,sql:sql, opTip:opTip}, 
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
     $j.post('<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=create', {appname:appname,apptitle:apptitle,appdesc:appdesc,apptype:apptype,formid:formid,sql:sql}, 
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
    new Ajax.Request('<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=app&m=getcolumns', {
       method: 'post',
       parameters: {'tablename':tablename},
       onSuccess: function(transport) {
       }
     }); 
   
   }
   
   function show_formbuilder() {
     $('option_form_choose').hide();
     if ($('option_form_new').innerHTML == '') {
       $('option_form_new').update('<iframe id="fb_frame" src="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=form&m=show&iframe=true" style="width:100%;height:400px;border:0;"></iframe>');
     }
     $('option_form_new').show();
   }

   var lastplist="initialized";
   function show_querybuilder() {
     $('option_qb_free').hide();
     var plist = getFormVarList(); 
     if (lastplist != plist) {
       $('option_qb_new').update('<iframe id="qb_frame" src="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=qb&m=show&iframe=true&closeFun=copyToEditor();&plist='+plist+'" style="width:100%;height:400px;border:0;"></iframe>');
       lastplist = plist;
     }
     $('option_qb_new').show();   
   
   }
   function show_dmlbuilder() {
     $('option_qb_free').hide();
     var plist = getFormVarList(); 
     if (lastplist != plist) {
       $('option_qb_new').update('<iframe id="qb_frame" src="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=req&m=initiudbuilder&iframe=true&closeFun=copyToEditor();&plist='+plist+'" style="width:100%;height:400px;border:0;"></iframe>');
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
       <?php if ($_smarty_tpl->tpl_vars['apptype']->value==3){?>getRepTypeImg();<?php }?>
    });   
  </script></head><body><div id="bodyColumn"><div id="navcolumn"><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=home&m=dashboard"><?php echo smarty_function_ci_lang(array('key'=>'strDashboard'),$_smarty_tpl);?>
</a> ><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=app&m=applist"><?php echo smarty_function_ci_lang(array('key'=>'strApplicationManagement'),$_smarty_tpl);?>
</a> > <?php echo smarty_function_ci_lang(array('key'=>'strCreateApplication'),$_smarty_tpl);?>
</div><div id="errorDIV" class="" style="display:none"></div><div class="clear"></div><form action="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=create" method="post" id="mainForm" name="mainForm"><input type="hidden" name="appname" id="appname" value="<?php echo $_smarty_tpl->tpl_vars['appname']->value;?>
"/><input type="hidden" name="apptitle" id="apptitle" value="<?php echo $_smarty_tpl->tpl_vars['apptitle']->value;?>
"/><input type="hidden" name="appdesc" id="appdesc" value="<?php echo $_smarty_tpl->tpl_vars['appdesc']->value;?>
"/><input type="hidden" name="apptype" id="apptype" value="<?php echo $_smarty_tpl->tpl_vars['apptype']->value;?>
"/><input type="hidden" name="sql" id="sql" value=""/><input type="hidden" name="create_form_id" id="create_form_id" value=""/><table border="0" cellpadding="0" cellspacing="0" class="otherDisplay2"> <?php if ($_smarty_tpl->tpl_vars['apptype']->value==0){?> <?php echo $_smarty_tpl->getSubTemplate ("aw_queryapp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <?php }elseif($_smarty_tpl->tpl_vars['apptype']->value==1){?> <?php echo $_smarty_tpl->getSubTemplate ("aw_generaloperationapp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <?php }elseif($_smarty_tpl->tpl_vars['apptype']->value==2){?> <?php echo $_smarty_tpl->getSubTemplate ("aw_queryforupdateapp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <?php }elseif($_smarty_tpl->tpl_vars['apptype']->value==3){?> <?php echo $_smarty_tpl->getSubTemplate ("aw_chartreportapp.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <?php }elseif($_smarty_tpl->tpl_vars['apptype']->value==4){?> <?php echo $_smarty_tpl->getSubTemplate ("aw_resultsetcheckpoint.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <?php }elseif($_smarty_tpl->tpl_vars['apptype']->value==5){?> <?php }?> <tr><td colspan="2" class="bodyText"><hr/></td></tr><tr><td colspan="2" style="text-align:right"><input type="button" class="input-submit gray" value="<< <?php echo smarty_function_ci_lang(array('key'=>'strBack'),$_smarty_tpl);?>
" onclick="javascript:document.location='<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=app&m=create_step1';"/><input type="button" class="input-submit" value="<?php echo smarty_function_ci_lang(array('key'=>'strCreate'),$_smarty_tpl);?>
" onclick="javascript:createapp();"/></td></tr><tr height="5px"><td colspan="2">&nbsp;</td></tr></table></form></div><div id="help_using_formvars" style="display:none"><div><span style="border-bottom: 1px solid rgb(229, 229, 229);font-size:13px"><strong>How to use form variables in your SQL scripts? </strong></span><p/>
DbFacePHP has 6 kinds of tag for the form variables. For example, if you create a form containing a field named '<b>productcode</b>', then you can insert <ul style="padding-left:0px;list-style-type: none;margin-top:0px"><li><b>${productcode}</b></li><li><b>@{productcode}</b></li><li><b>#{${productcode}}#</b></li><li><b>#{@{productcode}}#</b></li><li><b>*{${productcode}}*</b></li><li><b>*{@{productcode}}*</b></li> into your sql script expressing the user's input.<p/></div></div>
<?php echo $_smarty_tpl->getSubTemplate ("analytics.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body></html><?php }} ?>