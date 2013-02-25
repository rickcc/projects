<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 16:04:51
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:53357917550a575135da5d4-49237251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b9a78449b3cf596a26e8923bc9252983709d7a3' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/dashboard.tpl',
      1 => 1352280028,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53357917550a575135da5d4-49237251',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'priv' => 0,
    'hidetablesection' => 0,
    'tables' => 0,
    'apps' => 0,
    'userName' => 0,
    'lastvisitdate' => 0,
    'config_showmysqlinfo' => 0,
    'hostinfo' => 0,
    'serverversion' => 0,
    'protocalinfo' => 0,
    'config_chkupdate' => 0,
    'edition' => 0,
    'usercode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a5751388db64_66305317',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a5751388db64_66305317')) {function content_50a5751388db64_66305317($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ci_lang')) include '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application/libraries/Smarty/libs/plugins/function.ci_lang.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html><head><meta http-equiv='content-type' content='text/html;charset=UTF-8'/><link href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/home.css" rel="stylesheet" type="text/css"><script src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/qb.js" type="text/javascript"></script><script src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/Utils.js" type="text/javascript"></script><script src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/rview.js" type="text/javascript"></script><script src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/prototype.js" type="text/javascript"></script><script src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/jquery.js" type="text/javascript"></script></head><body><div style="padding-left:5px;top:0px"><table id="bodyTable" cellpadding="0" cellspacing="0"><tbody><tr><td id="mainCell" style="border-width:0px;" valign="top"><table cellpadding="0" cellspacing="0"><tbody><tr><td valign="top"><table style="border:1px solid rgb(182, 182, 182);background-color:white;" cellspacing="0"><tbody><tr class="grey_title_bar"><td>DbFacePHP <?php echo smarty_function_ci_lang(array('key'=>'strDashboard'),$_smarty_tpl);?>
</td></tr><tr><td style="height:400px;" valign="top"><table id="simpList" cellspacing="20" cellpadding="0"><tbody><tr><td valign="top" colspan=5 style="padding-top: 6px;"><p style="font-size: 150%; color: rgb(255, 153, 51); font-weight: bold;margin-top:0px"><?php echo smarty_function_ci_lang(array('key'=>'strDashboardTitle'),$_smarty_tpl);?>
</p><p style="line-height: 150%;"><?php echo smarty_function_ci_lang(array('key'=>'strDashboardContent1'),$_smarty_tpl);?>
</p><br/><p><?php echo smarty_function_ci_lang(array('key'=>'strDashboardContent2'),$_smarty_tpl);?>
</p></td></tr><tr><td valign="top" colspan=5 style="padding-top: 6px;"><div id="categoryItemsBox" class="categoryItemsBox"><div class="categoryItemsParentPanel"><div class="categoryItemsPanel"><ul class="categoryItems" id="SoftwareTab"><li class="defaultLI" style="background:url('<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/application.gif') top no-repeat;z-index:10000"><div class="categoryLabel"><span style="width: 98px;"><?php echo smarty_function_ci_lang(array('key'=>'strDatabase'),$_smarty_tpl);?>
</span><div class="subcategoryContainer"><ul> <?php if ($_smarty_tpl->tpl_vars['priv']->value==1||$_smarty_tpl->tpl_vars['priv']->value==2){?> <li><a onclick="javascript:void(0);" href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=createdatabase"><?php echo smarty_function_ci_lang(array('key'=>'strCreateDatabase'),$_smarty_tpl);?>
</a></li> <?php }else{ ?> <li><a href="javascript:;">None</a></li> <?php }?> </ul></div></div></li><li class="defaultLI" style="background:url('<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/h_table.gif') top no-repeat;z-index:9999"><div class="categoryLabel"><span style="width: 98px;"><?php echo smarty_function_ci_lang(array('key'=>'strDatabaseTables'),$_smarty_tpl);?>
</span><div class="subcategoryContainer"><ul> <?php if (!$_smarty_tpl->tpl_vars['hidetablesection']->value){?> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tables']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?> <li><a onclick="javascript:void(0);" href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=viewtable&viewname=<?php echo $_smarty_tpl->tpl_vars['tables']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['tables']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['menuname'];?>
</a></li> <?php endfor; endif; ?> <?php }else{ ?> <li><a href="javascript:void(0);">None</a></li> <?php }?> </ul></div></div></li><li class="defaultLI" style="background:url('<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/h_chart.gif') top no-repeat;z-index:9998"><div class="categoryLabel"><span style="width: 98px;"><?php echo smarty_function_ci_lang(array('key'=>'strApplications'),$_smarty_tpl);?>
</span><div class="subcategoryContainer"><ul> <?php if ($_smarty_tpl->tpl_vars['priv']->value==1||$_smarty_tpl->tpl_vars['priv']->value==2){?> <li><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=app&m=create_step1"><?php echo smarty_function_ci_lang(array('key'=>'strCreateApplication'),$_smarty_tpl);?>
</a></li> <?php }?> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['apps']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
?> <li><a onclick="javascript:void(0);" href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=app&appid=<?php echo $_smarty_tpl->tpl_vars['apps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['appid'];?>
"><?php echo $_smarty_tpl->tpl_vars['apps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['appname'];?>
</a></li> <?php endfor; endif; ?> </ul></div></div></li><li class="defaultLI" style="background:url('<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/h_op.gif') top no-repeat;z-index:9997"><div class="categoryLabel"><span style="width: 98px;"><?php echo smarty_function_ci_lang(array('key'=>'strSettingsAndTools'),$_smarty_tpl);?>
</span><div class="subcategoryContainer"><ul> <?php if ($_smarty_tpl->tpl_vars['priv']->value==1||$_smarty_tpl->tpl_vars['priv']->value==2){?> <li><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=conn&m=listconn"><?php echo smarty_function_ci_lang(array('key'=>'strAdministration'),$_smarty_tpl);?>
</a></li><li><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=form&m=show"><?php echo smarty_function_ci_lang(array('key'=>'strFormbuilder'),$_smarty_tpl);?>
</a></li><li><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=qb&m=show"><?php echo smarty_function_ci_lang(array('key'=>'strQuerybuilder'),$_smarty_tpl);?>
</a></li><li><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=req&m=initiudbuilder"><?php echo smarty_function_ci_lang(array('key'=>'strDmlbuilder'),$_smarty_tpl);?>
</a></li><li><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=webconsole"><?php echo smarty_function_ci_lang(array('key'=>'strWebConsole'),$_smarty_tpl);?>
</a></li><li><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=sqllab"><?php echo smarty_function_ci_lang(array('key'=>'strSQLEditor'),$_smarty_tpl);?>
</a></li><li><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=structure"><?php echo smarty_function_ci_lang(array('key'=>'strDatabaseStructure'),$_smarty_tpl);?>
</a></li><li><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=privileges"><?php echo smarty_function_ci_lang(array('key'=>'strDatabasePrivileges'),$_smarty_tpl);?>
</a></li><li><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=importandexport"><?php echo smarty_function_ci_lang(array('key'=>'strBackupandRestore'),$_smarty_tpl);?>
</a></li><li><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=about"><?php echo smarty_function_ci_lang(array('key'=>'strAbout'),$_smarty_tpl);?>
</a></li> <?php }else{ ?> <li><a href="javascript:;">None</a></li> <?php }?> </ul></div></div></li><li class="defaultLI" style="background:url('<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/h_sc.gif') top no-repeat;z-index:9996"><div class="categoryLabel"><span style="width: 98px;"><?php echo smarty_function_ci_lang(array('key'=>'strHelpAndSupport'),$_smarty_tpl);?>
</span><div class="subcategoryContainer"><ul><li><a href="http://www.dbfacephp.com/documentation">User Guide</a></li><li><a href="http://www.dbfacephp.com/" target="content">Home Page</a></li><li style="border-bottom: 1px solid rgb(101, 197, 255); background-image: none;"><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=about" target="content">About</a></li></ul></div></div></li></ul></div></div><div></td></tr></tbody></table></td></tr></tbody></table></td><td style="padding-left:5px;" nowrap="nowrap" valign="top"><table class="std_box" style="width:100%;" cellpadding="0" cellspacing="0"><tbody><tr class="grey_title_bar"><td><?php echo smarty_function_ci_lang(array('key'=>'strWelcome'),$_smarty_tpl);?>
, <b><nobr><?php echo $_smarty_tpl->tpl_vars['userName']->value;?>
</nobr></b></td></tr><tr><td class="mid"><table cellpadding="1" cellspacing="1"><tbody><tr><td style="font-size:12px" nowrap="nowrap"><?php echo smarty_function_ci_lang(array('key'=>'strLastVisited'),$_smarty_tpl);?>
: <?php echo $_smarty_tpl->tpl_vars['lastvisitdate']->value;?>
</a></td></tr></tbody></table><div style="padding:12px 0px;line-height:180%;"><div><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=changepsd" style="text-decoration:none;"><nobr><?php echo smarty_function_ci_lang(array('key'=>'strChangePassword'),$_smarty_tpl);?>
</nobr></a><br></div></div></td></tr></tbody></table> <?php if ($_smarty_tpl->tpl_vars['config_showmysqlinfo']->value){?> <table class="std_box" style="width:100%;margin-top:5px" cellpadding="0" cellspacing="0"><tbody><tr class="grey_title_bar"><td><b><nobr>MySQL Server</nobr></b></td></tr><tr><td class="mid"><div><ul style="list-style-type:none;padding-left:0px;margin-top:0px;margin-left:0px"><li><b><?php echo smarty_function_ci_lang(array('key'=>'strServer'),$_smarty_tpl);?>
 :</b><?php echo $_smarty_tpl->tpl_vars['hostinfo']->value;?>
</li><li><b><?php echo smarty_function_ci_lang(array('key'=>'strVersion'),$_smarty_tpl);?>
 :</b><?php echo $_smarty_tpl->tpl_vars['serverversion']->value;?>
</li><li><b><?php echo smarty_function_ci_lang(array('key'=>'strProtocal'),$_smarty_tpl);?>
:</b><?php echo $_smarty_tpl->tpl_vars['protocalinfo']->value;?>
</li></ul></div></td></tr></tbody></table> <?php }?> <?php if ($_smarty_tpl->tpl_vars['config_chkupdate']->value){?> <script type="text/javascript">
      $j(document).ready(function() {
        $j.getJSON('<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=home&m=chkupdate', function(json) {
          if (json.newversion && json.message && json.curversion && json.toversion) {
            $('alert_newversion_message').update(json.message+"<p/><a href='javascript:;' onclick='javascript:start_upgrade(\"alert_progress\", "+json.curversion+", "+json.toversion+");'><img src='<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/top_upgrade_btn.gif'/></a>");
            $j('#alert_newversion').fadeIn('normal');
          } else if (json.message) {
            $('alert_newversion_message').update(json.message);
            $j('#alert_newversion').fadeIn('normal');          
          }
        });
      });
      </script><table id="alert_newversion" class="std_box" style="width:100%;margin-top:5px;display:none" cellpadding="0" cellspacing="0"><tbody><tr class="grey_title_bar"><td><b><nobr>Message</nobr></b></td></tr><tr><td class="mid"><div id="alert_progress" style="display:none;text-align:center"><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/progress.gif" alt="Upgrading" title="Upgrading"/><br/>Upgrading, please wait...</div><div id="alert_newversion_message"></div></td></tr></tbody></table> <?php }?> </td></tr></tbody></table></td><td><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/spacer.gif" height="2" width="18"></td></tr></tbody></table><table id="bottomSpacer" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/spacer.gif" height="15"></td></tr></tbody></table><div id="bottomFooter" style="width:100%; visibility:visible;"><div id="trialFooter"><table cellpadding="2" cellspacing="0" width="100%"><tbody><tr><td style="border-right:1px solid rgb(224, 216, 192);font-size:11px" align="center" width="33%"> <?php if ($_smarty_tpl->tpl_vars['edition']->value=='trial'){?> This is a trial version of DbFacePHP for evaluation purpose only, <a href="http://www.dbfacephp.com/store" target="_blank">Order now!</a><br>If you already have a license key, Click <a href="http://www.dbfacephp.com/apps/index.php?c=upgrade" target="_top">here</a> to upgrade to Pro Edition.<br>Any Question about this copy of product, please mailto:<br> support@tmworks.org <?php }else{ ?> Pro Version, License User Code: <?php echo $_smarty_tpl->tpl_vars['usercode']->value;?>
 <?php }?> </td></tr></tbody></table></div></div></div>
<?php echo $_smarty_tpl->getSubTemplate ("chkupdate.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("analytics.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body></html><?php }} ?>