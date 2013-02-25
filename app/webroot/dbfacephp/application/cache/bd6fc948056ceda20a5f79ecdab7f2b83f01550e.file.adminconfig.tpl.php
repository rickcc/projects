<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 18:19:04
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/adminconfig.tpl" */ ?>
<?php /*%%SmartyHeaderCode:64991128650a594881e0ee5-65562019%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd6fc948056ceda20a5f79ecdab7f2b83f01550e' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/adminconfig.tpl',
      1 => 1352279990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64991128650a594881e0ee5-65562019',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dbconfigwritable' => 0,
    'cd_host' => 0,
    'cd_username' => 0,
    'cd_password' => 0,
    'cd_database' => 0,
    'configwritable' => 0,
    'language' => 0,
    'showMySQLInfo' => 0,
    'register_open' => 0,
    'showRowCountAtMenu' => 0,
    'settings_table_lines' => 0,
    'settings_sqllab_lines' => 0,
    'checkupdate' => 0,
    'white_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a594882afb12_12420446',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a594882afb12_12420446')) {function content_50a594882afb12_12420446($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ci_lang')) include '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application/libraries/Smarty/libs/plugins/function.ci_lang.php';
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="content-type" content="text/html; charset=UTF-8"><link type="text/css"href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/admin.css" rel="stylesheet"><link REL="SHORTCUT ICON" href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/favorite.ico" type="image/x-icon"/><title>DbFacePHP for MySQL Administration</title><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/prototype.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/rview.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/jquery.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/tommick.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/Utils.js"></script><script type="text/javascript">
    var dbTemplate=new Template("<tr class='app-row' onmouseover='this.className=\"app-row-hover\";' onmouseout='this.className=\"app-row\";' valign='top' align='left'><td valign='middle' align='center'><a class='row-edit'>Edit</a></td><td class='access-link' valign='middle'>#{dbalias}<br/><span class='created-time'>#{dbname}@#{dbhost}:#{dbport}</span></td><td class='access-link' valign='middle'>#{dbnote}</td><td class='created-time' valign='middle' nowrap='nowrap'>#{createdate}</td></tr>");
    var ugTemplate=new Template("<tr class='app-row' onmouseover='this.className=\"app-row-hover\";' onmouseout='this.className=\"app-row\";' valign='top' align='left'><td valign='middle' align='center'><a class='row-edit'>Edit</a></td><td class='access-link' valign='middle'>#{username}</td><td class='access-link' valign='middle'>#{usernote}</td><td class='created-time' valign='middle' nowrap='nowrap'>#{createdate}</td></tr>");

    function changeCreateType(page) {
      $('initDIV', 'databasesDIV', 'usergroupDIV').invoke('hide');
      $('initIcon').className = "createapp-type-inactive";
      $('databasesIcon').className = "createapp-type-inactive";
      $('usergroupIcon').className = "createapp-type-inactive";
      $(page+"Icon").className = "createapp-type-active";
      $(page+"DIV").show();
    }
    
    function update_database() {
      new Ajax.Request(ROOT_URL+"?c=admin&m=update_database", {
        method: 'post',
        parameters:{},
        onSuccess: function(transport) {
          TmMsgBox.showError("Configuration database updated!");
        }
      });
    }
    
    function update_config() {
      new Ajax.Request(ROOT_URL+"?c=admin&m=update_config", {
        method: 'post',
        parameters:{},
        onSuccess: function(transport) {
          TmMsgBox.showError("Settings updated!");
        }
      });
    }
    
    document.observe("dom:loaded", function() {
      new Form.Observer('createAppForm', 0.3, function(form, value){  
         $('msg').update('Your preferences have changed. Resubmit to save').style.color = 'red'   
         form.down().setStyle({ background:'lemonchiffon', borderColor:'red' }) 
       });       
     });
  </script></head><body><div id="bodyColumn"><div id="navcolumn"><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=home&m=dashboard"><?php echo smarty_function_ci_lang(array('key'=>'strDashboard'),$_smarty_tpl);?>
</a> > <?php echo smarty_function_ci_lang(array('key'=>'strDbFacePHPConfig'),$_smarty_tpl);?>
</div><input type="hidden" id="createType"/><table width="97%" align="left" border="0" cellpadding="3" cellspacing="0" height="100%"><tbody><tr><td valign="top" align="left" height="100%"><form method="post" id="createAppForm" name="createAppForm" action="/createApp.do" onsubmit="if(!createApp()){return false};" style="height: 99%;"><input name="layoutType" value="null" type="hidden"><table class="createapp-outertable" align="left" border="0" cellpadding="0" cellspacing="0" height="100%"><tbody><tr><td valign="top" align="left" height="100%"><table style="padding:4px 0px;" width="100%" align="left" border="0" cellpadding="0" cellspacing="0" height="100%"><tbody><tr><td valign="top" width="140"><div class="createapp-type"><ul><li class="createapp-type-active" id="initIcon" onclick='changeCreateType("init")'><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/addform.png" style="padding-top: 12px;" width="34" height="30"><p><?php echo smarty_function_ci_lang(array('key'=>'strIntroduction'),$_smarty_tpl);?>
</p></li><li class="createapp-type-inactive" id="databasesIcon" onclick='changeCreateType("databases")'><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/appgallery.png" style="padding-top: 9px;" width="38" height="32"><p><?php echo smarty_function_ci_lang(array('key'=>'strConfiguration'),$_smarty_tpl);?>
</p></li><li class="createapp-type-inactive" id="usergroupIcon" onclick='changeCreateType("usergroup")'><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/writescript.png" style="padding-top: 9px;" width="38" height="33"><p><?php echo smarty_function_ci_lang(array('key'=>'strSettings'),$_smarty_tpl);?>
</p></li></ul></div></td><td valign="top" align="center"><div id="initDIV" style="margin-left: 10px; padding: 0px; height: 99%;"><span class="welcome-text"><?php echo smarty_function_ci_lang(array('key'=>'strIntroduction'),$_smarty_tpl);?>
</span><p/><div class="welcome-text" style="align:left;text-align:left;color:black">Welcome to DbFacePHP for MySQL administration center.</div><table width="90%" cellspacing="0" cellpadding="1" border="0" align="left"><tbody><tr><td valign="middle" height="22" align="left" class="defaultViewQText" colspan="2">1. Change, backup, restore configuration data </td></tr><tr><td valign="middle" align="right"><div align="right" style="height: 12px; width: 14px;" class="defaultViewBullet"> </div></td><td valign="middle" class="defaultViewText">Before upgrade to the latest version, please backup your configuration data, and restore after installation.</td></tr><tr><td valign="middle" align="right"><div align="right" style="height: 8px; width: 14px;" class="defaultViewBullet"> </div></td><td valign="middle" class="defaultViewText">Before reinstallation, please backup it to save your work on DbFacePHP.</td></tr><tr><td valign="middle" align="right"><div align="right" style="height: 8px; width: 14px;" class="defaultViewBullet"> </div></td><td valign="middle" class="defaultViewText">Make sure you provide correct configuration database profile, or DbFacePHP does not work.</td></tr><tr><td height=10 colspan=2></td></tr><tr><td valign="middle" align="left" class="defaultViewQText" colspan="2">2. General settings, security topics</td></tr><tr><td width="30" valign="middle" align="right"><div align="right" style="height: 12px; width: 14px;" class="defaultViewBullet"> </div></td><td valign="middle" class="defaultViewText">In the production environment, it recommends that you enable the whitelist.</td></tr><tr><td width="30" valign="middle" align="right"><div align="right" style="height: 12px; width: 14px;" class="defaultViewBullet"> </div></td><td valign="middle" class="defaultViewText">Please keep the DbFacePHP administrator's account strong enough.</td></tr><tr><td height=10 colspan=2></td></tr><tr><td valign="middle" align="left" class="defaultViewQText" colspan="2"><span> 3. Change default role permissions.</span></td></tr><tr><td valign="middle" align="right"><div align="right" style="height: 12px; width: 14px;" class="defaultViewBullet"> </div></td><td valign="middle" class="defaultViewText">The DbFacePHP administration has all permissions and it can't be changed.</td></tr><tr><td valign="middle" align="right"><div align="right" style="height: 8px; width: 14px;" class="defaultViewBullet"> </div></td><td valign="middle" class="defaultViewText">If you want the user role can access the database tables, configure it here.</td></tr><tr><td colspan=2>If you want to use the default DbFacePHP configuration, please <p/><a class="gbtn primary" href="javascript:;" onclick="javascript:update_database();"><span><span>Click here to restore to the default configuration</span></span></a>.</td></tr><tr><td colspan=2><br/></td></tr></tbody></table></div><div id="databasesDIV" style="margin-left: 10px; height: 298px; display: none;text-align:left">
<?php if (!$_smarty_tpl->tpl_vars['dbconfigwritable']->value){?>
<div id="error">Database settings can not be updated. The webserver does not have write permission on application/database.php file.</div>
<?php }?>
<fieldset><legend><span class="welcome-text" style="text-align:center">Configuration Database</span></legend><p/><table width="60%" border="0" cellpadding="3" cellspacing="0" id="databasesTable"><tbody><tr valign="middle"><td style="padding-left: 15px;"><b>Hostname:</b></td><td><input type="text" name="hostname" value="<?php echo $_smarty_tpl->tpl_vars['cd_host']->value;?>
" class="config-textfield"/></td></tr><tr valign="middle"><td style="padding-left: 15px;"><b>Username:</b></td><td><input type="text" name="username" value="<?php echo $_smarty_tpl->tpl_vars['cd_username']->value;?>
" class="config-textfield"/></td></tr><tr valign="middle"><td style="padding-left: 15px;"><b>Password:</b></td><td><input type="text" name="password" value="<?php echo $_smarty_tpl->tpl_vars['cd_password']->value;?>
" class="config-textfield"/></td></tr><tr valign="middle"><td style="padding-left: 15px;"><b>Database:</b></td><td><input type="text" name="database" value="<?php echo $_smarty_tpl->tpl_vars['cd_database']->value;?>
" class="config-textfield"/></td></tr><tr align="center"><td colspan=2><a class="gbtn" href="javascript:;" onclick="javascript:update_database();"><span><span>Update</span></span></a></td></tr></tbody></table></fieldset><fieldset><legend><span class="welcome-text">Backup and Restore</span></legend>
All MySQL connection profiles, applications, forms, queries you created are stored in the configuration database. Please backup your configuration
data when you want to upgrade DbFacePHP to the latest version, then you can restore your work on DbFacePHP anytime.<p/><a class="gbtn" href="javascript:;" onclick="javascript:update_database();"><span><span>Click here to download current DbFacePHP configuration data</span></span></a> or
<p/>Upload a configuration file <input type="file" name="confile" value=""/> to <a class="gbtn" href="javascript:;" onclick="javascript:update_database();"><span><span>Restore</span></span></a>.
</fieldset></div><div id="usergroupDIV" style="margin-left: 10px; text-align:left; height: 298px; display: none;">
<?php if (!$_smarty_tpl->tpl_vars['configwritable']->value){?>
<div id="error">Settings can not be updated. The webserver does not have write permission on application/config.php file.</div>
<?php }?>
<fieldset><legend><span class="welcome-text" style="text-align:center">General Settings</span></legend><p/><table width="60%" border="0" cellpadding="3" cellspacing="0" id="databasesTable"><tbody><tr valign="middle"><td style="padding-left: 15px;"><b>Language:</b></td><td><select name="language" class="config-picklist"><option value="english" <?php if ($_smarty_tpl->tpl_vars['language']->value=="english"){?>selected<?php }?>>English</option><option value="zh" <?php if ($_smarty_tpl->tpl_vars['language']->value=="zh"){?>selected<?php }?>>简体中文</option></select></td></tr><tr valign="middle"><td style="padding-left: 15px;"><b>Show MySQL Server Information</b></td><td><input type="checkbox" name="showMySQLInfo" value="1" <?php if ($_smarty_tpl->tpl_vars['showMySQLInfo']->value){?>checked<?php }?>/></td></tr><tr valign="middle"><td style="padding-left: 15px;"><b>Allow user registration</b></td><td><input type="checkbox" name="register_open" value="1" <?php if ($_smarty_tpl->tpl_vars['register_open']->value){?>checked<?php }?>/></td></tr><tr valign="middle"><td style="padding-left: 15px;"><b>Show table row count at menu:</b></td><td><input type="checkbox" name="showRowCountAtMenu" value="1" <?php if ($_smarty_tpl->tpl_vars['showRowCountAtMenu']->value){?>checked<?php }?>/></td></tr><tr valign="middle"><td style="padding-left: 15px;"><b>Default Page Lines:</b></td><td><input type="text" name="settings_table_lines" value="<?php echo $_smarty_tpl->tpl_vars['settings_table_lines']->value;?>
" class="config-textfield"/></td></tr><tr valign="middle"><td style="padding-left: 15px;"><b>Page Lines for SQL Editor:</b></td><td><input type="text" name="settings_sqllab_lines" value="<?php echo $_smarty_tpl->tpl_vars['settings_sqllab_lines']->value;?>
" class="config-textfield"/></td></tr><tr valign="middle"><td style="padding-left: 15px;"><b>Automatically check for updates:</b></td><td><input type="checkbox" name="checkupdate" value="1" <?php if ($_smarty_tpl->tpl_vars['checkupdate']->value){?>checked<?php }?>/></td></tr><tr align="center"><td colspan=2><a class="gbtn" href="javascript:;" onclick="javascript:update_database();"><span><span>Update</span></span></a></td></tr></tbody></table></fieldset><fieldset><legend><span class="welcome-text" style="text-align:center">Security Settings</span></legend><p/><table width="60%" border="0" cellpadding="3" cellspacing="0" id="databasesTable"><tbody><tr valign="top"><td style="padding-left: 15px;"><b>Enable Whitelist</b></td><td><textarea class="config-textarea" name="white_list" rows=4><?php echo $_smarty_tpl->tpl_vars['white_list']->value;?>
</textarea></td></tr><tr align="center"><td colspan=2><a class="gbtn" href="javascript:;" onclick="javascript:update_database();"><span><span>Update</span></span></a></td></tr></tbody></table></fieldset></div></td></tr></tbody></table></td></tr><tr><td class="createapp-footer" valign="top" align="right">&nbsp;</td></tr></tbody></table></form></td></tr></tbody></table></div></body></html><?php }} ?>