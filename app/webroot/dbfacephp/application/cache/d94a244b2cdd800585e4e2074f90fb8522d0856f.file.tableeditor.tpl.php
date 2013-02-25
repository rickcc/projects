<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 16:16:53
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/tableeditor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:214598031950a577e5510506-55960707%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd94a244b2cdd800585e4e2074f90fb8522d0856f' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/tableeditor.tpl',
      1 => 1352280116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214598031950a577e5510506-55960707',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'phpload' => 0,
    'fields' => 0,
    'pkColumnNames' => 0,
    'viewname' => 0,
    'dbname' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a577e586daf9_08829892',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a577e586daf9_08829892')) {function content_50a577e586daf9_08829892($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ci_lang')) include '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application/libraries/Smarty/libs/plugins/function.ci_lang.php';
?><html><head><meta http-equiv='content-type' content='text/html;charset=UTF-8'/> <?php if ($_smarty_tpl->tpl_vars['phpload']->value){?> <link type="text/css" href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/load.php?load=style-default.css,te.css" rel="stylesheet"/><link type="text/css" href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/c/thickbox.css" rel="stylesheet"/><link type="text/css" href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/c/theme.css" rel="stylesheet"/><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/load.php?load=tommick.js,Utils.js,rview.js,jquery.js,thickbox.js,prototype.js,calendar.js,calendar-en.js,calendar-setup.js"></script> <?php }else{ ?> <link type="text/css" href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/style-default.css" rel="stylesheet"/><link type="text/css" href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/te.css" rel="stylesheet"/><link type="text/css" href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/c/thickbox.css" rel="stylesheet"/><link type="text/css" href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/c/theme.css" rel="stylesheet"/><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/tommick.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/Utils.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/rview.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/jquery.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/thickbox.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/prototype.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/calendar.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/calendar-en.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/calendar-setup.js"></script> <?php }?> <style type="text/css">.fixPopTable{display:block;overflow:auto;height:300px;width:100%;}</style><script type="text/javascript">
  var columnTypes = new Array();
  <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['fields']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
  columnTypes[<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index'];?>
] = <?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type'];?>
;
  <?php endfor; endif; ?>
  function uploadForm() {
    var theForm=document.uploadform;
    theForm.submit();
  }
  function searchBtn() {
    setBusy();
    return submitData('selectview2');
  }
  function sv_columnorder(argOrderColumnName, argOrderMethod) {
    document.mainForm.orderColumnName.value=argOrderColumnName;
    if (argOrderMethod == 1) {
      document.mainForm.orderMethod.value=0;
    } else if (argOrderMethod == 0) {
      document.mainForm.orderMethod.value=2;
    } else {
      document.mainForm.orderMethod.value=1;
    }
    sv_search(document.mainForm.pageNo.value);
  }
  function closeLayer() {
    unFreezeBackground();
    var ele=document.getElementById(selPageLayer);
    if(ele != null) {
      ele.style.display="none";
    }
  }

  function showInsertPage(rowNo) {
  	selPageLayer = "te_rowinsert";
    closeLayer();
    freezeBackground();
  	var eleDiv=$("te_rowinsert");
  	var ele=$('te_rowinsert_tb');

  	if(rowNo >= 0) {
      var tb=document.getElementById('databody');
      var row=tb.rows[rowNo];
  	  var cellNum=row.cells.length-1;
	    for(var i=2;i<cellNum;i++) {
	      var cell=$(row.cells[i]);
	      var temp=$(ele.rows[i-1].cells[2]);
	      if (cell.getAttribute("cdt") == 2) {
	        temp.down(0).disabled=true;
	        temp.down(0).className="disabled";
	        temp.down(1).disabled=true;
	        temp.down(1).className="disabled";
	        temp.down(1).value="[Binary Data]";
	      } else {
	        temp.down(0).checked=false;
	        temp.down(1).value=cell.firstChild ? cell.firstChild.nodeValue : "";
	      }
	    }
  	}

    eleDiv.style.display="block";
    eleDiv.style.width="500px";

    if (ele.offsetHeight > 300) {
      $('te_rowinsert_tb_div').className="fixPopTable";
    } else {
      $('te_rowinsert_tb_div').className="defaultPopTable";
    }
    eleDiv.style.left="100px";
    eleDiv.style.top="100px";
  }

  function insertresultDetail() {
    var oldaction = document.te_rowform_insert.action;
    if (document.te_rowform_insert.action.indexOf('?') <= 0) {
      document.te_rowform_insert.action+="?";
    } else {
      document.te_rowform_insert.action+="&";
    }
    var arr = new Array();
    for (var i=0; i < document.te_rowform_insert.keyChecks_.length; i++) {
      if (document.te_rowform_insert.keyChecks_[i].checked) {
        arr.push("keyChecks[]=1");
      } else {
        arr.push("keyChecks[]=0");
      }
    }
    document.te_rowform_insert.action+=arr.join("&");
    $('te_rowform_insert').request({
      onComplete: function(ajax){
        var h=$H(ajax.responseJSON);
        var success=h.get("success");
        var message=h.get("message");
        closeLayer();
        if (success==true) {
          TmMsgBox.showInfo(message);
          sv_search(document.mainForm.pageNo.value);
        } else {
          TmMsgBox.showError(message);
        }
        $('te_rowform_insert').enable();
        document.te_rowform_insert.action = oldaction;
        setBusy(false);
      }
    });
    $('te_rowform_insert').disable();
  }
  
  function showQuickApplicationDialog() {
    selPageLayer = "div_quick_app";
    closeLayer();
    freezeBackground();
    var eleDiv=$("div_quick_app");
    eleDiv.style.display="block";
    eleDiv.style.width="450px";

    if(!lastFlyBarX || !lastFlyBarY) {
      eleDiv.style.left="100px";
      eleDiv.style.top="100px";
    } else {
      eleDiv.style.left=lastFlyBarX+"px";
      eleDiv.style.top=lastFlyBarY+"px";
    }  
  }
  
  function showFilterNameDialog() {
    selPageLayer = "div_bookmark_name";
    closeLayer();
    freezeBackground();
    var eleDiv=$("div_bookmark_name");
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
  
  var selPageLayer="";
  function showPage(reqID, rowNo) {
    closeLayer();
    freezeBackground();
    document.te_rowform.rowNo.value=rowNo;
    var reqTag="";
    if(reqID=="viewresultdetail") {
      reqTag="te_rowdetail";
    } else if (reqID=="changeresultdetail") {
      reqTag="te_rowchange";
    } else {
      reqTag="te_rowdelete";
    }
    selPageLayer=reqTag;
    var tb=document.getElementById('databody');
    var eleDiv=document.getElementById(reqTag);
    var row=tb.rows[rowNo];
    var ele=$(reqTag+'_tb');
    var cellNum=row.cells.length-1;
    if (reqID=="viewresultdetail") {
      for(var i=2;i<cellNum;i++) {
        var cell=row.cells[i];
        if (cell.getAttribute("cdt") == 2) {
          $(ele.rows[i-1].cells[2]).update("<i>Can not be input directly</i>");
        } else {
          $(ele.rows[i-1].cells[2]).update(cell.innerHTML);
        }
      }
    } else if (reqID=="changeresultdetail") {
      for(var i=2;i<cellNum;i++) {
        var cell=$(row.cells[i]);
        var temp=$(ele.rows[i-1].cells[2]);
        if (cell.getAttribute("cdt") == 2) {
          temp.down(0).disabled=true;
          temp.down(0).className="disabled";
          temp.down(1).disabled=true;
          temp.down(1).className="disabled";
          temp.down(1).value="[Binary Data]";
        } else {
          temp.down(0).checked=false;
          temp.down(1).value=cell.firstChild ? cell.firstChild.nodeValue : "";
        }
      }
    }
    eleDiv.style.display="block";
    eleDiv.style.width="500px";
    if (ele.offsetHeight > 300) {
      $(reqTag+'_tb_div').className="fixPopTable";
    } else {
      $(reqTag+'_tb_div').className="defaultPopTable";
    }
    if(!lastFlyBarX || !lastFlyBarY) {
      eleDiv.style.left="100px";
      eleDiv.style.top="100px";
    } else {
      eleDiv.style.left=lastFlyBarX+"px";
      eleDiv.style.top=lastFlyBarY+"px";
    }
  }
  function deleteresultrow(rowNo) {
    if (!confirm("All data of the selected row will be lost. Do you really want to delete the row data?\n\nPress OK to delete or press Cancel to return back.")) {
      return;
    }
    document.mainForm.action="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=rowdelete&";
    var table=document.getElementById('databody');
    var pkColumnNames = new Array();
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['pkColumnNames']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
    pkColumnNames[<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index'];?>
]="<?php echo $_smarty_tpl->tpl_vars['pkColumnNames']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
";
    document.mainForm.action+="&pkColumnNames[]="+"<?php echo $_smarty_tpl->tpl_vars['pkColumnNames']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
";
    <?php endfor; endif; ?>

    var pkColumnValuesData = new Array();
    for (var i=0;i<pkColumnNames.length;i++) {
      for (var j=2; j<table.rows[0].cells.length-1; j++) {
        var text=table.rows[0].cells[j].getAttribute("cname");
        if (text == pkColumnNames[i]) {
          if (table.rows[rowNo].cells[j].firstChild && table.rows[rowNo].cells[j].firstChild.tagName=="INPUT") {
            document.mainForm.action+="&pkColumnValues[]="+oldValue;
          } else {
            document.mainForm.action+="&pkColumnValues[]="+table.rows[rowNo].cells[j].innerHTML;
          }
        }
      }
    }
    document.mainForm.rowNo.value=rowNo;
    $("mainForm").request({
      onComplete: function(ajax){
        var h=$H(ajax.responseJSON);
        var success=h.get("success");
        var message=h.get("message");
        closeLayer();
        if (success==true) {
          TmMsgBox.showInfo(message);
          sv_search(document.mainForm.pageNo.value);
        } else {
          TmMsgBox.showError(message);
        }
      }
    });
    document.mainForm.action="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=viewtablej";
  }

  function updateresultDetail() {
    var table=document.getElementById('databody');
    var rowNo=document.te_rowform.rowNo.value;
    var pkColumnNames = new Array();

    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['pkColumnNames']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
    pkColumnNames[<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index'];?>
]="<?php echo $_smarty_tpl->tpl_vars['pkColumnNames']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
";
    document.te_rowform_change.action+="&pkColumnNames[]="+"<?php echo $_smarty_tpl->tpl_vars['pkColumnNames']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
";
    <?php endfor; endif; ?>

    var pkColumnValuesData = new Array();
    for (var i=0;i<pkColumnNames.length;i++) {
      for (var j=2; j<table.rows[0].cells.length-1; j++) {
        var text=table.rows[0].cells[j].getAttribute("cname");
        if (text == pkColumnNames[i]) {
          if (table.rows[rowNo].cells[j].firstChild && table.rows[rowNo].cells[j].firstChild.tagName=="INPUT") {
            document.te_rowform_change.action+="&pkColumnValues[]="+oldValue;
          } else {
            document.te_rowform_change.action+="&pkColumnValues[]="+table.rows[rowNo].cells[j].innerHTML;
          }
        }
      }
    }
    var selUpdateColumn = false;
    for (var i=0; i < document.te_rowform_change.keyChecks_.length; i++) {
      if (document.te_rowform_change.keyChecks_[i].checked) {
        document.te_rowform_change.action+="&keyChecks[]=1";
        selUpdateColumn = true;
      } else {
        document.te_rowform_change.action+="&keyChecks[]=0";
      }
    }
    if(selUpdateColumn) {
      $("te_rowform_change").request({
        onComplete: function(ajax){
          var h=$H(ajax.responseJSON);
          var success=h.get("success");
          var message=h.get("message");
          closeLayer();
          if (success==true) {
            TmMsgBox.showInfo(message);
            sv_search(document.mainForm.pageNo.value);
          } else {
            TmMsgBox.showError(message);
          }
        }
      });
    } else {
      alert("Please check the columns you want to updated!");
    }
    document.te_rowform_change.action="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=rowupdate";
  }

  function go4(argReqID, argPageNo) {
    setBusy();
    document.mainForm.requestID.value=argReqID;
    document.mainForm.pageNo.value=argPageNo;
    document.mainForm.submit();
  }
  
  function exportData(downloadType) {
    document.mainForm.downloadType.value=downloadType;
    var oldurl = document.mainForm.action;
    var option = $('f_option_'+downloadType).serialize();
    document.mainForm.action = "<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=export&"+option;
    document.mainForm.submit();
    document.mainForm.action = oldurl;
    closeLayer();
  }

  function sv_filter() {
    document.mainForm.filterDisplay.value=document.getElementById('moreFilterDialog').style.display;
    sv_search(1);
  }
  var tipshow = 0;
  var selRealRowNo;
  var selRow;
  var selColumn;
  function openblob(requestID, argRow, argColumn) {
    var table = document.getElementById('databody');
    var pkColumnNamesData = "";
    var pkColumnNames = new Array();

    pkColumnNamesData +="&pkColumnNames=employeeNumber";
    pkColumnNames[0]="employeeNumber";   

    var pkColumnValuesData = "";
    for (var i=0;i<pkColumnNames.length;i++) {
      for (var j=2; j<table.rows[0].cells.length-1; j++) {
        var text=table.rows[0].cells[j].getAttribute("cname");
        if (text == pkColumnNames[i]) {
          if (table.rows[argRow].cells[j].childNodes[0].tagName=="INPUT") {
            pkColumnValuesData+="&pkColumnValues="+encodeURIComponent(oldValue);
          } else {
            pkColumnValuesData+="&pkColumnValues="+encodeURIComponent(table.rows[argRow].cells[j].innerHTML);
          }
        }
      }
    }
    var href = "<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=viewtablej&viewName=employees"
      +"&columnNo="+(argColumn-1)
      +pkColumnNamesData
      +pkColumnValuesData
      +"&width=500&height=300";
    return href;
  }

  function pageUpdate(argRow, argColumn) {
    var table = document.getElementById('databody');
    if (table.rows[argRow].cells[argColumn].lastChild != null && table.rows[argRow].cells[argColumn].lastChild.type == "text") {
      return;
    }
    selRow=argRow;
    selColumn=argColumn;
    var selElement = null;
    var selValue="";
    if(table.rows[argRow].cells[argColumn].firstChild) {
      selValue = table.rows[argRow].cells[argColumn].firstChild.nodeValue;
    }
    if(selValue.length < 50) {
      selElement = document.createElement("input");
      selElement.type="text";
      selElement.className="te_input";

    } else {
      selElement = document.createElement("textarea");
      selElement.className="te_textarea";
      selElement.rows="5";
    }
    selElement.style.width="100%";
    var oldValue=selElement.value=selValue;
    table.rows[argRow].cells[argColumn].innerHTML="";
    table.rows[argRow].cells[argColumn].appendChild(selElement);
    
    selElement.id = "tmp_cal_"+argColumn;
    // date, setup calendar
    if (columnTypes[argColumn-2] == 102) {
      setupCalendar3("tmp_cal_"+argColumn);
    } else if (columnTypes[argColumn-2] == 100) {
      $j(selElement).keypress( function(event) {return checkNumberic(event); } );
    } else if (columnTypes[argColumn-2] == 101) {
      $j(selElement).keypress( function(event) {return checkDecimal(event); } );
    }
    // move to end
    if (selElement.createTextRange) {
      var rng = selElement.createTextRange();
      rng.moveStart('character',selValue.length); 
      rng.select();  
　  }
    
    selElement.onblur=function() {
      var cellEle=table.rows[argRow].cells[argColumn];
      cellEle.removeChild(selElement);
      var textnode=document.createTextNode(selElement.value);
      cellEle.appendChild(textnode);
    };
    selElement.oncontextmenu = function() {
    };
    selElement.focus();
    selElement.onchange=function(){
      setBusy();
      var pkColumnNamesData="";
      var pkColumnNames=new Array();

      <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['pkColumnNames']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
      pkColumnNamesData +="&pkColumnNames[]=<?php echo $_smarty_tpl->tpl_vars['pkColumnNames']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
";
      pkColumnNames[<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index'];?>
]="<?php echo $_smarty_tpl->tpl_vars['pkColumnNames']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
";
      <?php endfor; endif; ?>

      var pkColumnValuesData = "";
      for (var i=0;i<pkColumnNames.length;i++) {
        for (var j=2; j<table.rows[0].cells.length-1; j++) {
          var text=table.rows[0].cells[j].getAttribute("cname");
          if (text == pkColumnNames[i]) {
            if (table.rows[argRow].cells[j].childNodes[0].tagName=="INPUT") {
              pkColumnValuesData+="&pkColumnValues[]="+oldValue;
            } else {
              pkColumnValuesData+="&pkColumnValues[]="+table.rows[argRow].cells[j].firstChild.nodeValue;
            }
          }
        }
      }
      var url = "<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=columnupdate&viewname=<?php echo $_smarty_tpl->tpl_vars['viewname']->value;?>
&dbname=<?php echo $_smarty_tpl->tpl_vars['dbname']->value;?>
"
        +"&columnNo="+(argColumn-1)
        +"&newValue="+encodeURIComponent(selElement.value)
        +pkColumnNamesData
        +pkColumnValuesData
        +"&oldValue="+encodeURIComponent(oldValue);

      new Ajax.Request(url, {
          method:'get',
          onSuccess:function(transport) {
            setBusy(false);
            var scrollX=document.getElementById('te_container').scrollLeft;
            var scrollY=document.getElementById('te_container').scrollTop;
            var doc =transport.responseText.evalJSON(true);

            var msgtype = doc.msgtype;
            var msg = doc.message;
            var oldvalue = doc.oldValue;
            var newvalue = doc.newValue;

            var ele_tip=document.createElement("span");
            ele_tip.id="btc";
            ele_tip.style.position="absolute";
            var tooltip=CreateEl("span","tooltip");
            var s=CreateEl("span","top");
            //var aa=document.createElement("span");
            s.innerHTML = msg;
            //s.appendChild(aa);
            tooltip.appendChild(s);

            var b=CreateEl("b","bottom");
            b.appendChild(document.createTextNode(getSumary(oldValue, 100) + "->" + getSumary(newvalue, 100)));
            tooltip.appendChild(b);

            setOpacity(tooltip);
            ele_tip.appendChild(tooltip);
            document.getElementsByTagName("body")[0].appendChild(ele_tip);
            var table = document.getElementById('databody');
            var cell = table.rows[argRow].cells[argColumn];
            if (msgtype == "1") {
              cell.innerHTML = oldvalue;
            }

            var changedEle =document.getElementById('databody').rows[argRow].cells[argColumn];
            var bubble=document.getElementById("btc");
            bubble.style.top=(findPosY(changedEle)-scrollY+15)+"px";
            bubble.style.left=(changedEle.offsetLeft-scrollX-20)+"px";
            tipshow = 1;
            $("btc").observe("click", function(){
              $("btc").remove();
            });
          }
        });
   };
  }
  
  function change_operator(ele) {
    var valEle = $j(ele).parent().children("input")[0];
    var val=ele.value;
    if (val=="is null" || val=="is not null") {
      valEle.value=val;
      valEle.disable();
    } else {
      if (valEle.value=="is null" || valEle.value=="is not null") {
        valEle.value="";
      }
      valEle.enable();
    }
  }
  
  var ptEle = null;
  function set_pickdt_url(ele) {
    ptEle = ele;
    var je =$j(ele);
    var columnname=je.parent().find("select")[0].value;
    je.attr('href', ROOT_URL+'?c=req&m=columndata&columnname=<?php echo $_smarty_tpl->tpl_vars['viewname']->value;?>
.'+columnname+'&width=350&height=300');
  }
  
  function datalist_choose(ele) {
    if (ptEle != null) {
      var returnData= new Array();
      $j('table.searchResults').find("input:checked").each(function(i) {
        returnData.push(this.value);
      });
      var datalist = returnData.join(",");
      $j(ptEle).parent().find("input")[0].value=datalist;
      var opEle=$j(ptEle).parent().find("select")[1];
      if (opEle.value=='ignore') {
        if (returnData.length == 1) {
          opEle.value="=";
        } else if (returnData.length > 1) {
          opEle.value="in";
        }
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

  function close(a){
    var b=document.getElementById("gbardd");
    b.style.display="none";
  }
  
  function renew_filter_bookmarks() {
    $j.getJSON("<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=req&m=getbookmarks&cat=filter&subcat=<?php echo $_smarty_tpl->tpl_vars['viewname']->value;?>
",
    function(json) {
      set_filter_bookmarks(json);
    });
  }
  
  function get_bookmark(bkid) {
    $j.getJSON("<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=req&m=getbookmark", {bkid: bkid}, function(json) {
      resetFilters();
      var sqlconditions=json.sqlcondition;
      var sqlops=json.sqlop;
      var sqlvalues=json.sqlvalue;
      var sqljoins=json.sqljoin;
      
      for(var i=0;i<sqlconditions.length-1;i++) {
        addCondition();
      }
      var trRows = $('filter_body').rows;
      for(var i=0; i<trRows.length-1; i++) {
        var td = $j(trRows[i]).children("td");
        var selects = $j(td).children("select");
        var inputs = $j(td).children("input");
        if (selects && inputs && selects.length == 3 && inputs.length == 1) {
          selects[0].value = sqlconditions[i];
          selects[1].value = sqlops[i];
          inputs[0].value=sqlvalues[i];
          selects[2].value = sqljoins[i];
        }
      }
      sv_filter();
    });    
  }
  
  function delfilterbookmark(bkid) {
    var cat = 'filter';
    var subcat='<?php echo $_smarty_tpl->tpl_vars['viewname']->value;?>
';  
    $j.getJSON("<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=req&m=delfilterbookmark", {bkid: bkid, cat:cat, subcat: subcat}, function(json) {
      set_filter_bookmarks(json);
    });   
  }  
  
  function set_filter_bookmarks(json) {
    var html='<span><a href="javascript:showFilterNameDialog();close();">Bookmark Filter As...</a></span>';
    html+='<span><a href="javascript:showQuickApplicationDialog();close();">Save As Application...</a></span>';
    if (json.length > 0) {
      for(var i=0; i<json.length; i++) {
        html+='<span><a  href="javascript:delfilterbookmark('+json[i].bkid+');close();"><img src="'+STATIC_URL+'/img/delete3.png" align="absmiddle"/></a>&nbsp;<a href="javascript:get_bookmark('+json[i].bkid+');close();">'+json[i].catkey+'</a></span>';
      }
    }
    html+='<span><a href="javascript:close(this);">Close</a></span>';
    $('gbardd').update(html);  
  }

  function save_bookmark() {
    var filtername = $('filtername').value;
    var cat = 'filter';
    var subcat='<?php echo $_smarty_tpl->tpl_vars['viewname']->value;?>
';
    var f = $('mainForm').serialize();
    $j.getJSON('<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=req&m=savefilterbookmark&'+f, {cat:cat, subcat: subcat, catkey:filtername}, function(data){
      set_filter_bookmarks(data);
    });
  }
  
  function save_query_app() {
    var appname=$('appname').value;
    var apptitle=$('apptitle').value;
    var appdesc=$('appdesc').value;
    if (appname == "" || apptitle=="") {
      alert("Please specify the application name and title!");
      return;
    }
    var f = $('mainForm').serialize();
    $j.getJSON('<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=viewtable&m=saveapp&'+f, {appname:appname, apptitle: apptitle, appdesc:appdesc}, function(json){
      var success = json.success;
      var message = json.message;
      if (success) {
        closeLayer();
      }
      alert(message);
    });
  
  }
  
  function showDownloadOption(type) {
    selPageLayer = "option_"+type;
    closeLayer();
    freezeBackground();
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
    
  $j(document).ready(function() {
    renew_filter_bookmarks();
  });
</script></head><body><div id="bodyColumn"><div id="navcolumn"><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=home&m=dashboard"><?php echo smarty_function_ci_lang(array('key'=>'strDashboard'),$_smarty_tpl);?>
</a> > <?php echo smarty_function_ci_lang(array('key'=>'strYouVisit'),$_smarty_tpl);?>
: <?php echo $_smarty_tpl->tpl_vars['viewname']->value;?>
<span><a href="javascript:parent.frames.content.window.print();"><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/print.png" style="vertical-align:middle"/></a>&nbsp;&nbsp;</span></div><div id="TmMsgDiv" style="position:absolute;z-index:500;left:5px;top:0px;width:90%;display:none;"><div style="position:absolute;left:5px;top:0px;"><input type="button" class="messageclose" style="border:0px;cursor:pointer;width:9px;height:9px;" onclick="TmMsgBox.hideError('navcontent');"></div><table class="borderbrown" cellpadding="3" cellspacing="5" height="40px" border="0"><tr class="errcellbottombdr"><td width="25px" id="msgicon" class="successicon"></td><td id="err" align="right" class="infomessage" style="border:0;background:none">Error Message Here</td></tr></table></div><div id="pagebanner">
<?php echo $_smarty_tpl->getSubTemplate ("pagebanner.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div></div><form action="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=viewtable" method="post" id="mainForm" name='mainForm'><input type="hidden" name="dbname" value="<?php echo $_smarty_tpl->tpl_vars['dbname']->value;?>
"><input type="hidden" name="viewname" value="<?php echo $_smarty_tpl->tpl_vars['viewname']->value;?>
"><input type="hidden" name="orderColumnName" value=""><input type="hidden" name="orderMethod" value=""><input type="hidden" name="pageNo" value=""><input type="hidden" name="rowNo" value=""><input type="hidden" name="downloadType" value=""><input type="hidden" name="filterDisplay" value="none"><div id="moreFilterDialog" style="display:none;width:50%;margin-top:10px;"><table border="0" cellpadding="0" cellspacing="0" class="popdialog1" id="filter_table"><tbody id="filter_body"><tr id="filter_row0"><td style="text-align:center;align:center" nowrap><select name="sqlcondition[]" class="config-picklist"> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['fields']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?> <option value="<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
</option> <?php endfor; endif; ?> </select><select name="sqlop[]" class="config-picklist" onchange="javascript:change_operator(this);"><option value="=">equals</option><option value=">">greater than</option><option value=">=">greater or equal</option><option value="<">less than</option><option value="<=">less or equal</option><option value="<>">not equal to</option><option value="like">contains</option><option value="not like">does not contain</option><option value="in">includes</option><option value="not in">not includes</option><option value="between">between</option><option value="not between">not between</option><option value="is null">is null</option><option value="is not null">is not null</option><option value="ignore" selected>--No Filter--</option></select><input type="text" name="sqlvalue[]" class="config-textfield" value=""><select name="sqljoin[]" class="config-picklist"><option value="and" selected>and</option><option value="or">or</option></select><a class="thickbox" renewhref="set_pickdt_url"><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/pickdt.gif" alt="Pick distinct data from table" title="Pick distinct data from table" align="absmiddle"/></a><a href="javascript:;" onclick="javascript:addCondition();"><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/add2.gif" alt="add new condition." title="add new condition." align="absmiddle"/></a><a href="javascript:;" onclick="javascript:delFilter(this);"><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/delete2.gif" alt="Remove the condition." title="Remove the condition." align="absmiddle"/></a></td></tr><tr id="filter_button"><td style="text-align:center;align:center" nowrap><input type="button" class="input-submit" onclick="javascript:sv_filter();" value="Apply"/><input type="button" class="input-submit gray" onclick="DisplayMenu('moreFilterDialog', 'groupSelect');document.mainForm.filterDisplay.value='none';" value="Close"/><div id="gbar" class="gb1"><a href="javascript:;" style="font-size:10px" onclick="return showScriptMenu(this, event);">Bookmarks&#9660</a><div class="gbard" id="gbarif" style="border:0;z-index:1"></div><div class="gbard" id="gbardd" style="text-align:left" onclick="javascript:close(event);"></div></div><a style="valign:bottom" href="javascript:resetFilters();sv_filter();" class="subopen">clear all filters</a></td></tr></tbody></table></div></form><div id="te_container" class="borderbrown" style="overflow:auto;width:100%;height:80%;_height:400px;display:block;" cellpadding="0" cellspacing="0">
<?php echo $_smarty_tpl->getSubTemplate ("datagrid.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div><div class="exportlinks"><?php echo smarty_function_ci_lang(array('key'=>'strExportOptions'),$_smarty_tpl);?>
: <a href="javascript:showDownloadOption('csv');"><span class="export csv">CSV </span></a>| <a href="javascript:showDownloadOption('xls');"><span class="export excel">Excel </span></a>| <a href="javascript:showDownloadOption('xml');"><span class="export xml">XML </span></a>| <a href="javascript:showDownloadOption('html');"><span class="export html">HTML </span></a>| <a href="javascript:showDownloadOption('pdf');"><span class="export pdf">PDF </span></a></div></div><form action="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=viewtablej" method="post" name="te_rowform"><input type="hidden" name="rowNo" value=""/></form><div id="te_rowdetail" style="display:none;position:absolute;z-index:1000"><table id="te_rowdetail_head" cellpadding="0" cellspacing="0" style="margin:0px;border-bottom:0px;width:100%"><thead onMouseDown="catchFlyBar(event, 'te_rowdetail')" onMouseUp="releaseFlyBar(event)"><tr ondblclick="unFreezeBackground();DisplayMenu('te_rowdetail', 'groupSelect')" align="right"><td width="80%">&nbsp;</td><td width="5%" align="right" valign="bottom"><a href="javascript:;" onClick="javascript:unFreezeBackground();DisplayMenu('te_rowdetail', 'groupSelect');" class="close">&nbsp;</a></td></tr></thead></table><div id="te_rowdetail_tb_div"><table id="te_rowdetail_tb" border="0" cellpadding="0" cellspacing="0" class="popdialog1"><tbody><tr><td colspan="3"></td></tr> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['fields']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?> <tr><td width="5px">&nbsp;</td><td class="bodyTextBold" style="width:5%" nowrap><?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
:</td><td>&nbsp;</td></tr> <?php endfor; endif; ?> <tr height="10px"><td colspan="3"></td></tr></tbody></table></div><table id="te_rowdetail_button" border="0" cellpadding="0" cellspacing="5" class="popdialog1"><tr><td colspan="4"><center><input type="button" class="input-submit" value="Change" onclick="javascript:showPage('changeresultdetail', document.te_rowform.rowNo.value);"/><input type="button" class="input-submit gray" value="Cancel" onclick="javascript:closeLayer();"/></center></td></tr></table></div><div id="te_rowchange" style="display:none;position:absolute;z-index:1000;"><form action="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=rowupdate" method="post" id="te_rowform_change" name="te_rowform_change"><input type="hidden" name="dbname" value="<?php echo $_smarty_tpl->tpl_vars['dbname']->value;?>
"><input type="hidden" name="viewname" value="<?php echo $_smarty_tpl->tpl_vars['viewname']->value;?>
"><table id="te_rowchange_head" cellpadding="0" cellspacing="0" style="margin:0px;border-bottom:0px;width:100%"><thead onMouseDown="catchFlyBar(event, 'te_rowchange')" onMouseUp="releaseFlyBar(event)"><tr ondblclick="unFreezeBackground();DisplayMenu('te_rowchange', 'groupSelect')"><td width="80%">&nbsp;</td><td width="5%" align="right" valign="bottom"><a href="javascript:;" onClick="javascript:unFreezeBackground();DisplayMenu('te_rowchange', 'groupSelect');" class="close">&nbsp;</a></td></tr></thead></table><div id="te_rowchange_tb_div"><table id="te_rowchange_tb" border="0" cellpadding="0" cellspacing="0" class="popdialog1"><tbody><tr><td colspan="3"></td></tr> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['fields']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?> <tr><td width="5px">&nbsp;</td><td class="bodyTextBold" nowrap><?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
:<input type="hidden" name="keyColumns[]" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
"/></td><td nowrap><input type="checkbox" name="keyChecks_" style="vertical-align:middle;margin:1px"/> <?php if ($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type']==@CDT_TEXTAREA){?> <textarea class="config-textarea" name="keyValues[]" cols="40" style="font-size:10px;height:48px;" onchange="javascript:setChecked(this);"></textarea> <?php }elseif($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type']==@CDT_DATETIME){?> <input type="text" class="config-textfield" id="keyValues<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index'];?>
" name="keyValues[]" size="36" onchange="javascript:setChecked(this);"/><a href="javascript:;" onmouseover="javascript:setupCalendar('keyValues<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index'];?>
');"><img id="c_keyValues<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index'];?>
" src='<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/form/date_icon.gif' width='16' height='17' border='0' title='Insert Date' style='vertical-align:middle;'/></a> <?php }elseif($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type']==@CDT_NUMBERIC){?> <input type="text" class="config-textfield" name="keyValues[]" size="40" onkeypress="return checkNumberic(event);" onchange="javascript:setChecked(this);"/> <?php }elseif($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type']==@CDT_DECIMAL){?> <input type="text" class="config-textfield" name="keyValues[]" size="40" onkeypress="return checkDecimal(event);" onchange="javascript:setChecked(this);"/> <?php }else{ ?> <input type="text" class="config-textfield" name="keyValues[]" size="40" style="vertical-align:middle;" onchange="javascript:setChecked(this);"/> <?php }?> </td></tr> <?php endfor; endif; ?> <tr height="20px"><td colspan="3"></td></tr></tbody></table></div><table id="te_rowchange_button" border="0" cellpadding="0" cellspacing="5" class="popdialog1"><tr><td colspan="5"><center><input type="button" class="input-submit" value="Change" onclick="javascript:updateresultDetail();"/><input type="button" class="input-submit gray" value="Cancel" onclick="javascript:closeLayer();"/></center></td></tr></table></form></div><div id="te_rowinsert" style="display:none;position:absolute;z-index:1000;"><form action="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=rowinsert" method="post" id="te_rowform_insert" name="te_rowform_insert"><input type="hidden" name="dbname" value="<?php echo $_smarty_tpl->tpl_vars['dbname']->value;?>
"/><input type="hidden" name="viewname" value="<?php echo $_smarty_tpl->tpl_vars['viewname']->value;?>
"/><table id="te_rowinsert_head" cellpadding="0" cellspacing="0" style="margin:0px;border-bottom:0px;width:100%;"><thead onMouseDown="catchFlyBar(event, 'te_rowinsert')" onMouseUp="releaseFlyBar(event)"><tr ondblclick="unFreezeBackground();DisplayMenu('te_rowinsert', 'groupSelect')"><td width="80%">&nbsp;</td><td width="5%" align="right" valign="bottom"><a href="javascript:;" onClick="javascript:unFreezeBackground();DisplayMenu('te_rowinsert', 'groupSelect');" class="close">&nbsp;</a></td></tr></thead></table><div id="te_rowinsert_tb_div"><table id="te_rowinsert_tb" border="0" cellpadding="0" cellspacing="0" class="popdialog1"><tbody><tr><td colspan="3"></td></tr> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['fields']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?> <tr><td width="5px">&nbsp;</td><td class="bodyTextBold" nowrap><?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
:<input type="hidden" name="columnNames[]" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
"/></td><td nowrap><input type="checkbox" name="keyChecks_" style="vertical-align:middle;margin:1px" onclick="javascript:field_setnull(this);"/> <?php if ($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type']==@CDT_TEXTAREA){?> <textarea class="config-textarea" name="keyValues[]" cols="40" style="font-size:10px;height:48px;" onchange="javascript:setChecked(this);"></textarea> <?php }elseif($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type']==@CDT_DATETIME){?> <input type="text" class="config-textfield" name="keyValues[]" id="i_keyValues<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index'];?>
" size="46" onchange="javascript:setChecked(this);"/><a href="javascript:;" onmouseover="javascript:setupCalendar4('i_keyValues<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index'];?>
');"><img id="b_i_keyValues<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index'];?>
" src='<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/form/date_icon.gif' width='16' height='17' border='0' title='Insert Date' style='vertical-align:middle;'/></a> <?php }elseif($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type']==@CDT_NUMBERIC){?> <input type="text" class="config-textfield" name="keyValues[]" size="40" onkeypress="return checkNumberic(event);" onchange="javascript:setChecked(this);"/> <?php }elseif($_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type']==@CDT_DECIMAL){?> <input type="text" class="config-textfield" name="keyValues[]" size="40" onkeypress="return checkDecimal(event);" onchange="javascript:setChecked(this);"/> <?php }else{ ?> <input type="text" class="config-textfield" name="keyValues[]" size="40" style="vertical-align:middle;" onchange="javascript:setChecked(this);"/> <?php }?> </td></tr> <?php endfor; endif; ?> <tr height="20px"><td colspan="3"></td></tr></tbody></table></div><table id="te_rowinsert_button" border="0" cellpadding="0" cellspacing="5" class="popdialog1"><tr><td colspan="5"><center><input type="button" class="input-submit" value="Insert" onclick="javascript:insertresultDetail();"/><input type="button" class="input-submit gray" value="Cancel" onclick="javascript:closeLayer();"/></center></td></tr></table></form></div>
<?php echo $_smarty_tpl->getSubTemplate ("exportoption.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="div_bookmark_name" style="display:none;position:absolute;z-index:1000;"><form action="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=export" name="f_bookmark_name" id="f_bookmark_name" method="post"><table id="bookmark_name_head" cellpadding="0" cellspacing="0" style="margin:0px;border-bottom:0px;width:100%;"><thead onMouseDown="catchFlyBar(event, 'div_bookmark_name')" onMouseUp="releaseFlyBar(event)"><tr ondblclick="unFreezeBackground();DisplayMenu('div_bookmark_name', 'groupSelect')"><td width="80%"><strong></strong></td><td width="5%" align="right" valign="bottom"><a href="javascript:;" onClick="javascript:unFreezeBackground();DisplayMenu('div_bookmark_name', 'groupSelect');" class="close">&nbsp;</a></td></tr></thead></table><div id="bookmark_name_tb_div"><table id="bookmark_name_tb" border="0" cellpadding="0" cellspacing="0" class="popdialog1" style="padding-left:15px"><tbody><tr><td colspan="2"></td></tr><tr><td class="bodyTextBold"><label for="filtername">Filter name:</label></td><td><input type="text" class="config-textfield" size="30" id="filtername" name="filtername" value=""/></td></tr></tr><tr height="20px"><td colspan="2"></td></tr></tbody></table></div><table id="bookmark_name_button" border="0" cellpadding="0" cellspacing="5" class="popdialog1"><tr><td colspan="5"><center><input type="button" class="input-submit" value="Save" onclick="javascript:save_bookmark();closeLayer();"/><input type="button" class="input-submit gray" value="Cancel" onclick="javascript:closeLayer();"/></center></td></tr></table></form></div><div id="div_quick_app" style="display:none;position:absolute;z-index:1000;"><form action="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=export" name="f_div_quick_app" id="f_div_quick_app" method="post"><table id="div_quick_app_head" cellpadding="0" cellspacing="0" style="margin:0px;border-bottom:0px;width:100%;"><thead onMouseDown="catchFlyBar(event, 'div_quick_app')" onMouseUp="releaseFlyBar(event)"><tr ondblclick="unFreezeBackground();DisplayMenu('div_quick_app', 'groupSelect')"><td width="80%"><strong></strong></td><td width="5%" align="right" valign="bottom"><a href="javascript:;" onClick="javascript:unFreezeBackground();DisplayMenu('div_quick_app', 'groupSelect');" class="close">&nbsp;</a></td></tr></thead></table><div id="div_quick_app_tb_div"><table id="div_quick_app_tb" border="0" cellpadding="0" cellspacing="0" class="popdialog1" style="padding-left:15px"><tbody><tr><td colspan="2"></td></tr><tr><td class="bodyTextBold"><label for="filtername">Application name:</label></td><td><input type="text" class="config-textfield" size="30" id="appname" name="appname" value=""/></td></tr></tr><tr><td class="bodyTextBold"><label for="filtername">Application Title:</label></td><td><input type="text" class="config-textfield" size="30" id="apptitle" name="apptitle" value=""/></td></tr></tr><tr><td class="bodyTextBold"><label for="filtername">Application Description:</label></td><td><textarea class="config-textarea" rows="4" style="width:100%" name="appdesc" id="appdesc"></textarea></td></tr></tr><tr height="20px"><td colspan="2"></td></tr></tbody></table></div><table id="div_quick_app_button" border="0" cellpadding="0" cellspacing="5" class="popdialog1"><tr><td colspan="5"><center><input type="button" class="input-submit" value="Save" onclick="javascript:save_query_app();"/><input type="button" class="input-submit gray" value="Cancel" onclick="javascript:closeLayer();"/></center></td></tr></table></form></div>
<?php echo $_smarty_tpl->getSubTemplate ("inc/loading.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('loadingmsg'=>"Loading data, please wait..."), 0);?>

</body></html><?php }} ?>