<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 16:16:38
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/myconnlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40526451350a577d63f7b22-94753236%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eac8ee2a04c6691de5cb353ce429519458ffc4b8' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/myconnlist.tpl',
      1 => 1352280086,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40526451350a577d63f7b22-94753236',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'dbs' => 0,
    'cur_dbid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a577d65b3191_61264727',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a577d65b3191_61264727')) {function content_50a577d65b3191_61264727($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ci_lang')) include '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application/libraries/Smarty/libs/plugins/function.ci_lang.php';
?><html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/><link href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/style-default.css" rel="stylesheet" type="text/css"><script language="javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/rview.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/prototype.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/jquery.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/tommick.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/Utils.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/rview.js"></script><script language="javascript">
    function submitRow(argReqID, argUserID, argConnID) {
      document.mainForm.requestID.value = argReqID;
      document.mainForm.userID.value = argUserID;
      document.mainForm.connID.value = argConnID;
      document.mainForm.submit();
    }
    
    function submitTablePermission() {
    }
    
    function deleteUserConn(userid, dbid) {
      if (confirm("The user will not be able to access the connection.If you are the creator of this connection, the connection will be deleted!\nDo you really want to do it?\nPress OK to confirm or press Cancel to return back.")) {
        document.mainForm.requestID.value="deleteuserpriv";
        document.mainForm.dbid.value = dbid;
        document.mainForm.userid.value=userid;
        document.mainForm.submit();
      }
    }
    function deleteConn(dbid) {
      if (confirm("All data for this connection will be lost, Do you really want to delete the connection.\nPress OK to delete or press Cancel to return back.")) {
        document.mainForm.requestID.value="deleteconn";
        document.mainForm.dbid.value = dbid;
        document.mainForm.submit();
      }
    }
    function show_permission_users(dbid) {
      freezeBackground(true);
      var ajax=new Ajax.Request(ROOT_URL+'?c=conn&m=listpriv', {
        method:'get',
        parameters: {"dbid": dbid},
        onComplete:function(transport) {
          removeFreezeLoading();
          var eleDiv = $('div_adduserpermission');
          eleDiv.update(transport.responseText);
          eleDiv.style.display="block";
          eleDiv.style.width="500px";

          if(!lastFlyBarX || !lastFlyBarY) {
            eleDiv.style.left="100px";
            eleDiv.style.top="100px";
          } else {
            eleDiv.style.left=lastFlyBarX+"px";
            eleDiv.style.top=lastFlyBarY+"px";
          }
        }
      });
    }
    function closeLayer() {
      unFreezeBackground();
      var ele=document.getElementById('div_adduserpermission');
      if(ele != null) {
        ele.style.display="none";
      }
    } 
    
    function show_permission_tables(uid, dbid) {
      freezeBackground(true);
	  
      var ajax=new Ajax.Request(ROOT_URL+'?c=conn&m=listtablepermission', {
        method:'get',
        parameters: {"dbid": dbid, "uid" :uid},
        onComplete:function(transport) {
          removeFreezeLoading();
          var eleDiv = $('div_tablepermission');
          eleDiv.update(transport.responseText);
          eleDiv.style.display="block";
          eleDiv.style.width="500px";

          if(!lastFlyBarX || !lastFlyBarY) {
            eleDiv.style.left="100px";
            eleDiv.style.top="100px";
          } else {
            eleDiv.style.left=lastFlyBarX+"px";
            eleDiv.style.top=lastFlyBarY+"px";
          }
        }
      });
    }
    
    function close_permission_tables() {
      unFreezeBackground();
      var ele=document.getElementById('div_tablepermission');
      if(ele != null) {
        ele.style.display="none";
      }
    }
</script></head><body><div id="bodyColumn"><div id="navcolumn"><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=home&m=dashboard"><?php echo smarty_function_ci_lang(array('key'=>'strDashboard'),$_smarty_tpl);?>
</a> > <?php echo smarty_function_ci_lang(array('key'=>'strAdministration'),$_smarty_tpl);?>
</div><div class="clear" style="margin-bottom:5px"></div>
<?php if ($_smarty_tpl->tpl_vars['message']->value){?><div id="error"><h1><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h1><img style="float:right;cursor: pointer;" onclick='javascript:hideElement("error")' src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/close.gif"/></div><?php }?>
<form action="index.php?c=conn" method="post" name="mainForm"><input type="hidden" name="requestID" value=""><input type="hidden" name="userid" value=""><input type="hidden" name="dbid" value=""></form><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=conn&m=create"><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/setupconn.gif" align='absmiddle'>Setup new connection</a>&nbsp;
<a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=register"><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/newaccount.png" align='absmiddle'>Create new account</a><table><thead><tr><th>No</th><th>Action</th><th>Connection Name</th><th>User Permission</th></tr></thead><tbody> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dbs']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?> <tr class="<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['i']['index']%2==0){?>odd<?php }else{ ?>even<?php }?> <?php if ($_smarty_tpl->tpl_vars['dbs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['dbid']==$_smarty_tpl->tpl_vars['cur_dbid']->value){?>marked<?php }?>"><td><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['i']['index']+1;?>
</td><td style="width:60px" nowrap><a href="javascript:show_permission_users(<?php echo $_smarty_tpl->tpl_vars['dbs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['dbid'];?>
);"><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/user_per.png" align='absmiddle'></a><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=conn&m=inedit&dbid=<?php echo $_smarty_tpl->tpl_vars['dbs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['dbid'];?>
"><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/edit.gif" align='absmiddle'></a><a href="javascript:deleteConn('<?php echo $_smarty_tpl->tpl_vars['dbs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['dbid'];?>
')"><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/delete20.gif" align='absmiddle'></a></td><td><?php echo $_smarty_tpl->tpl_vars['dbs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['aliasname'];?>
<br/><span class="info-text"><?php echo $_smarty_tpl->tpl_vars['dbs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['dbname'];?>
@<?php echo $_smarty_tpl->tpl_vars['dbs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['host'];?>
</span></td><td><table class="simple sublist" id="child1"><thead><tr><th>Username</th><th>Role</th><th>Action</th></tr></thead><tbody> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['j'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['j']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['name'] = 'j';
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['dbs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['dbusers']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['show']):

for ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['j']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['j']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['j']['total']);
?> <tr class="<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['j']['index']%2==0){?>odd<?php }else{ ?>even<?php }?>"><td><?php echo $_smarty_tpl->tpl_vars['dbs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['dbusers'][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['username'];?>
</td><td><?php if ($_smarty_tpl->tpl_vars['dbs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['dbusers'][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['priv']==1){?>Administrator<?php }elseif($_smarty_tpl->tpl_vars['dbs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['dbusers'][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['priv']==2){?>Developer<?php }elseif($_smarty_tpl->tpl_vars['dbs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['dbusers'][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['priv']==9){?>User<?php }?></td><td><a class="row-edit" href="javascript:deleteUserConn('<?php echo $_smarty_tpl->tpl_vars['dbs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['dbusers'][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['userid'];?>
', '<?php echo $_smarty_tpl->tpl_vars['dbs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['dbid'];?>
')">&nbsp;Unauthorize&nbsp;</a> <?php if ($_smarty_tpl->tpl_vars['dbs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['dbusers'][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['priv']!=1){?><a class="row-edit" href="javascript:show_permission_tables('<?php echo $_smarty_tpl->tpl_vars['dbs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['dbusers'][$_smarty_tpl->getVariable('smarty')->value['section']['j']['index']]['userid'];?>
', '<?php echo $_smarty_tpl->tpl_vars['dbs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['dbid'];?>
')">&nbsp;Permission&nbsp;</a><?php }else{ ?>&nbsp;<?php }?> </td></tr> <?php endfor; endif; ?> </tbody></table></td></tr> <?php endfor; endif; ?> </tbody></table></div><div id="div_adduserpermission" style="display:none;position:absolute;z-index:1000;"></div><div id="div_tablepermission" style="display:none;position:absolute;z-index:1000;"></div>
<?php echo $_smarty_tpl->getSubTemplate ("analytics.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body></html><?php }} ?>