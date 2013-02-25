<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 16:16:13
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/iudbuilder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14017969850a577bd8ec3b5-81842585%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca9c25c0c712c6ac96fc3e2eec2dd908b02a3e92' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/iudbuilder.tpl',
      1 => 1352280078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14017969850a577bd8ec3b5-81842585',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'plist' => 0,
    'wt' => 0,
    'closeFun' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a577bda45d69_23041239',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a577bda45d69_23041239')) {function content_50a577bda45d69_23041239($_smarty_tpl) {?><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>Script Builder for inserting, updating, deleting</title><link rel="stylesheet" href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/qb.css" type="text/css"><link rel="stylesheet" href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/prettify.css" type="text/css"><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/prototype.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/rview.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/qb.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/Utils.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/tommick.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/prettify.js"></script><script type="text/javascript">
    var plist;
    <?php if ($_smarty_tpl->tpl_vars['plist']->value){?>
    plist="<?php echo $_smarty_tpl->tpl_vars['plist']->value;?>
";
    <?php }?>
    document.observe("dom:loaded", function() {
      getHTMLByURL('<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=req&requestID=iud_gettablelist', 'dbaseObjectsSlider');
      prettyPrint();
    });    
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
  }

  function closeTip(a){
    var b=document.getElementById("gbardd");
    b.style.display="none";
  }
  </script></head><body style="margin-left:5px">
<?php if ($_smarty_tpl->tpl_vars['wt']->value){?>
<div id="navcolumn"><a href="./index.php?c=home&m=dashboard">Dashboard</a> > DML Builder</div>
<?php }?>
<div style="margin-top:5px;"><div id="gbar" class="gb1"><a href="javascript:;" style="font-size:10px" onclick="return showScriptMenu(this, event);">Bookmarks&#9660</a><div class="gbard" id="gbarif" style="border:0;z-index:1"></div><div class="gbard" id="gbardd" style="text-align:left" onclick="javascript:close(event);"><span><a href="javascript:shqueryProp('dml');closeTip();">Bookmark SQL As...</a></span><span><a href="javascript:closeTip(this);">Close</a></span></div></div> <?php if ($_smarty_tpl->tpl_vars['closeFun']->value!=null){?>
<input type="button" class="input-submit" onclick="<?php echo $_smarty_tpl->tpl_vars['closeFun']->value;?>
" value="Copy and Close"/>
<?php }?>
</div><div id="htmldbBreadcrumbTop"></div><form method="post" name="mainForm" id="mainForm"><input type="hidden" id="qbID" value=""/><table id="qbTable" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td id="qbSideBar" valign="top"><div id="qbLeftHeader"><input type="text" name="p_t02" size="25" id="P1002_FIND" onkeyup="qb_searchTables()"></div><div id="dbaseObjectsSlider"><div align="center"><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/await.gif"/><br/><span class="info-text">Loading tables, please wait...</span></div></div></td><td id="v_slide" class="obSlideBar" valign="middle" width="5"><span id="qbSideBartoggle" onclick="qb_toggleSideBar();"><img id="qbSideBar_toggle" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/qb/close.png" class="htmldbPseudoButton"></span></td><td id="qbFrameHolder" valign="top" width="100%"><div style="height:300px" id="qbTableHolder" class="d1"><div id="loadingtable" align="center" style="display:none;position:absolute;left:30%;top:30%;z-index:900"><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/loadingAnimation.gif"/><br/><span class="textBold">Loaing table, please wait...</span></div><div align="right"><div id="qbLinkHolder"></div></div></div><div id="h_slide" onmousedown="qb_hPosition(this);">&nbsp;</div><div id="qbBottomHolder"><pre id="iud_sql" class="prettyprint" style="overflow:auto;">click the table container left to start...</pre></div></td></tr></tbody></table></form><div id="fieldpanel" style="display:none;"><table class="htmldbTabbedNavigationList" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td><a class="tabcurrent" href="#" id="edit_list" onclick="html_TabClick(this,'edit_listHolder');return false;">List</a></td><td><a href="#" id="edit_input" onclick="html_TabClick(this,'edit_inputHolder');return false;">Edit</a></td></tr></tbody></table><div id="htmlTabHolder"><div id="edit_listHolder"><select id="edit_listHolder_select" size="10" style="width:200px" class="config-textarea" ondblclick="assignAppendItem();"></select></div><div id="edit_inputHolder" style="display:none;"><input type="text" size="40" class="inputtext" id="edit_inputHolder_input"/><br/><input type="checkbox" id="edit_input_checkbox" checked><label class="info-text">Add Quote</label></div></div><div align="center"><input type="button" value="OK" class="input-submit" onclick="javascript:assignAppendItem();"/><input type="button" value="Close" class="input-submit gray" onclick="javascript:$('fieldpanel').hide();"/></div></div>
<?php echo $_smarty_tpl->getSubTemplate ("qb/queryproperties.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('dialogtype'=>'dml'), 0);?>
 <?php echo $_smarty_tpl->getSubTemplate ("analytics.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body></html><?php }} ?>