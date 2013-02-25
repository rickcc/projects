<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 16:04:51
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/bar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179578706150a57513603c87-59324751%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a59e2b91cd5f758ecd9d6a7a6bff7fa651192464' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/bar.tpl',
      1 => 1352280020,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179578706150a57513603c87-59324751',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dbs' => 0,
    'lastdbid' => 0,
    'showadminlink' => 0,
    'loginname' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a575137b4c55_94500940',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a575137b4c55_94500940')) {function content_50a575137b4c55_94500940($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ci_lang')) include '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application/libraries/Smarty/libs/plugins/function.ci_lang.php';
?><html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/><link type="text/css" href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/style-default.css" rel="stylesheet"><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/rview.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/Utils.js"></script><script type="text/javascript">
    function go(argReqID) {
      if (argReqID=="refresh") {
        document.headform.target="menu";
      } else if(argReqID=="home"){
      	document.headform.action="login/main";
        document.headform.target="content";
      }
      setCookie("NavAccordion", parent.frames.menu.defaultNavAccordion.Accordion.elementsVisible.join("|"));
      document.headform.submit();
    }
    function changedb() {
      var oldtarget=document.headform.target;
      document.headform.target="_top";
      document.headform.action.value='changedb';
      document.headform.submit();
      document.headform.target=oldtarget;
    }
    function openDashboard() {
      var sunWin = window.open(ROOT_URL+'?c=home&m=dashboard','','scrollbars=yes,menubar=no,height=600,width=1024,resizable=yes,toolbar=no,location=no,status=no');
    }   
  </script></head><body><form action="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php" method="post" name="headform" target="content"><input type="hidden" name="action" value="main"><div id="breadcrumbs"><div class="xleft"><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=home&m=menu" target="menu"><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/refresh.gif" alt="Refresh" title="Refresh"/></a><a href="javascript:;" onclick="javascript:parent.frames.menu.defaultNavAccordion.hideAll();"><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/collapse.gif" alt="Collapse Menu" title="Collapse Menu"/></a><a href="javascript:;" onclick="javascript:parent.frames.menu.defaultNavAccordion.showAll();"><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/expand.gif" alt="Expand Menu" title="Expand Menu"/></a><a href="javascript:parent.frames.content.location.reload(true);" target="content"><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/refresh.png" alt="refresh content" title="refresh content"/></a><a href="javascript:history.go(-1);" target="content"><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/action_back.gif" alt="refresh content" title="refresh content"/></a><span style="height:18px;overflow:hidden;"><select name="dbid" style="position:relative;left:-2px;top:-2px;font-size:10px;line-height:18px;border:1px;color:blue;" onchange="javascript:changedb();"> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
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
?> <option value="<?php echo $_smarty_tpl->tpl_vars['dbs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['dbid'];?>
" <?php if ($_smarty_tpl->tpl_vars['dbs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['dbid']==$_smarty_tpl->tpl_vars['lastdbid']->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['dbs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['aliasname'];?>
:<?php echo $_smarty_tpl->tpl_vars['dbs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['dbname'];?>
@<?php echo $_smarty_tpl->tpl_vars['dbs']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['host'];?>
</option> <?php endfor; endif; ?> </select></span><span id="busyflag" class="info-text" style="display:none;color:blue"><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/cogwheel.gif">&nbsp;<?php echo smarty_function_ci_lang(array('key'=>'strBarLoading'),$_smarty_tpl);?>
</span><br/></div><div class="xright"><a href="javascript:openDashboard();"><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/new_window.gif" alt="open DbFacePHP dashboard in a new opener window." title="open DbFacePHP dashboard in a new opener window."/></a><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=home&m=dashboard" target="content"><?php echo smarty_function_ci_lang(array('key'=>'strDashboard'),$_smarty_tpl);?>
</a> <?php if ($_smarty_tpl->tpl_vars['showadminlink']->value){?>| <a href="index.php?c=admin" target="content"><?php echo smarty_function_ci_lang(array('key'=>'strSettings'),$_smarty_tpl);?>
</a><?php }?> | <a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=home&m=logout" target="_top"><?php echo smarty_function_ci_lang(array('key'=>'strSignOut'),$_smarty_tpl);?>
 (<?php echo $_smarty_tpl->tpl_vars['loginname']->value;?>
)</a></div><div class="clear"></div></div></form></body></html><?php }} ?>