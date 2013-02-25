<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 18:19:13
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/sqllab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:61330656850a59491c77ac3-91958294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bcbb23ef89a8c274943910a9ff99ca0478dd06a' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/sqllab.tpl',
      1 => 1352280114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61330656850a59491c77ac3-91958294',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'phpload' => 0,
    'pageNo' => 0,
    'sql' => 0,
    'bookmarks' => 0,
    'pageNum' => 0,
    'totalNum' => 0,
    'fieldnum' => 0,
    'columnNames' => 0,
    'searchResult' => 0,
    'pageLineNum' => 0,
    'j' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a59491f116f3_68361958',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a59491f116f3_68361958')) {function content_50a59491f116f3_68361958($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application/libraries/Smarty/libs/plugins/function.cycle.php';
if (!is_callable('smarty_function_math')) include '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application/libraries/Smarty/libs/plugins/function.math.php';
if (!is_callable('smarty_function_ci_lang')) include '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application/libraries/Smarty/libs/plugins/function.ci_lang.php';
?><html><head><meta http-equiv='content-type' content='text/html;charset=UTF-8'/> <?php if ($_smarty_tpl->tpl_vars['phpload']->value){?> <link type="text/css" href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/load.php?load=style-default.css" rel="stylesheet"/><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/load.php?load=prototype.js,rview.js,jquery.js,Utils.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/codepress.js"></script> <?php }else{ ?> <link type="text/css" href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/style-default.css" rel="stylesheet"/><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/prototype.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/rview.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/codepress.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/jquery.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/Utils.js"></script> <?php }?> <script type="text/javascript">
    function go4(argReqID, argPageNo) {
      document.mainForm.pageNo.value=argPageNo;
      document.mainForm.sqlcontent.value=codepress.getCode();
      document.mainForm.submit();
    }
    function exportData(argDownloadType) {
      closeLayer();
      var oldaction = document.mainForm.action;
      var option = $('f_option_'+argDownloadType).serialize();
      document.mainForm.action = "<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=export&"+option; 
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
      $j.getJSON('<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=req&m=savesqlbookmark&cat=sql&subcat=sqleditor', {catkey:bkname, sql:sql}, function(json) {
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
      $j.getJSON('<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=req&m=delsqlbookmark&bkid='+bkid, function(json) {
        var sel=$('bkid');
        sel.options.length=0;
        AddSelectOption(sel, '-- pick a script from bookmarks --', '', true);
        for(var i=0;i<json.length;i++) {
          AddSelectOption(sel, json[i].catkey, json[i].bkid, false);
        }
      });
      return;
    }
    $j.get('<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=req&m=getbookmarkedsql&bkid='+bkid, function(data) {
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
  </script></head><body><div id="bodyColumn"><div id="navcolumn"><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=home&m=dashboard">Dashboard</a> > SQL Editor</div><form action="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=sqllab" method="post" name='mainForm'><input type="hidden" name="pageNo" value="<?php echo $_smarty_tpl->tpl_vars['pageNo']->value;?>
"><input type="hidden" name="downloadType" value=""><input type="hidden" name="sqlcontent" value=""><table class="otherDisplay2"><tbody><tr><td class="config-label">SQL Scripts:<div id="autoComp" class="autoComp"><table id="autoCompTable" class="autoComp"><tbody></tbody></table></div></td><td><textarea rows="15" cols="75" id="textarea_sql" class="codepress sql linenumbers-on"><?php echo $_smarty_tpl->tpl_vars['sql']->value;?>
</textarea></td></tr><tr><td></td><td><div id="gbar" class="gb1"><a href="javascript:;" style="font-size:10px" onclick="return togglebookmark();">Bookmark&#9660</a><a href="javascript:;" style="font-size:10px" onclick="return togglebookmarked();">Bookmarked SQL&#9660</a></div><span id="span_bk_name" style="display:none;margin-top:3px"><input type="text" class="config-textfield" value="" id="bkname" name="bkname"/><a class="gbtn primary" href="javascript:;" onclick="javascript:save_sql_bookmark();"><span><span>OK</span></span></a><a class="gbtn" href="javascript:;" onclick="javascript:$j('#span_bk_name').slideUp('fast');"><span><span>Cancel</span></span></a></span><span id="span_exists_bk" style="display:none;margin-top:3px"><select id="bkid" class="config-picklist"><option value="">-- pick a script from bookmarks --</option> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['bookmarks']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?> <option value="<?php echo $_smarty_tpl->tpl_vars['bookmarks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['bkid'];?>
"><?php echo $_smarty_tpl->tpl_vars['bookmarks']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['catkey'];?>
</option> <?php endfor; endif; ?> </select><a class="gbtn" href="javascript:;" onclick="javascript:op_bk('submit');"><span><span>Submit</span></span></a><a class="gbtn primary" href="javascript:;" onclick="javascript:op_bk('view');"><span><span>View Only</span></span></a><a class="gbtn" href="javascript:;" onclick="javascript:op_bk('delete');"><span><span>Delete</span></span></a><a class="gbtn" href="javascript:;" onclick="javascript:$j('#span_exists_bk').slideUp('fast');"><span><span>Close</span></span></a></span></td></tr><tr><td width="10">&nbsp;</td><td><input type="button" class="input-submit" onclick="javascript:this.disabled='true';submitDataX('executesql');" value="Execute(Ctrl+Enter)"/></td></tr></tbody></table></form>
<?php if ($_smarty_tpl->tpl_vars['pageNum']->value>0){?>
<span class="pagebanner"><?php echo $_smarty_tpl->tpl_vars['totalNum']->value;?>
 items found.</span>
<?php }?>
<table style="margin-bottom:5px"><thead><tr><th><?php if ($_smarty_tpl->tpl_vars['fieldnum']->value>0){?>No<?php }else{ ?>Enter Sql statement to start.<?php }?></th> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['columnNames']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?> <th><?php echo $_smarty_tpl->tpl_vars['columnNames']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']];?>
</th> <?php endfor; endif; ?> </tr></thead><tbody> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['searchResult']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?> <tr class="<?php echo smarty_function_cycle(array('values'=>"odd,even"),$_smarty_tpl);?>
"><td><?php echo smarty_function_math(array('equation'=>"x *(y-1)+z+1",'x'=>$_smarty_tpl->tpl_vars['pageLineNum']->value,'y'=>$_smarty_tpl->tpl_vars['pageNo']->value,'z'=>$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']),$_smarty_tpl);?>
</td> <?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['columnNames']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['j']->key => $_smarty_tpl->tpl_vars['j']->value){
$_smarty_tpl->tpl_vars['j']->_loop = true;
?> <td><?php echo $_smarty_tpl->tpl_vars['searchResult']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']][$_smarty_tpl->tpl_vars['j']->value];?>
</td> <?php } ?> </tr> <?php endfor; else: ?> <tr class="odd"><td><span class="info-text">Please enter a valid sql statement to execute!</span></td></tr> <?php endif; ?> </tbody></table><div class="exportlinks"><?php echo smarty_function_ci_lang(array('key'=>'strExportOptions'),$_smarty_tpl);?>
: <a href="javascript:showDownloadOption('csv');"><span class="export csv">CSV </span></a>| <a href="javascript:showDownloadOption('xls');"><span class="export excel">Excel </span></a>| <a href="javascript:showDownloadOption('xml');"><span class="export xml">XML </span></a>| <a href="javascript:showDownloadOption('html');"><span class="export html">HTML </span></a>| <a href="javascript:showDownloadOption('pdf');"><span class="export pdf">PDF </span></a></div></div>
<?php echo $_smarty_tpl->getSubTemplate ("exportoption.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("analytics.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body></html><?php }} ?>