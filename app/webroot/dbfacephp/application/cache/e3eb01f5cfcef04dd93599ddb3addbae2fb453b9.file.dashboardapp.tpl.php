<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 16:33:17
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/dashboardapp.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121416743450a57bbd2932f8-07636340%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3eb01f5cfcef04dd93599ddb3addbae2fb453b9' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/dashboardapp.tpl',
      1 => 1352280030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121416743450a57bbd2932f8-07636340',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'appid' => 0,
    'appname' => 0,
    'apptitle' => 0,
    'appdesc' => 0,
    'update' => 0,
    'apps' => 0,
    'layout' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a57bbd46e504_66925255',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a57bbd46e504_66925255')) {function content_50a57bbd46e504_66925255($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ci_lang')) include '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application/libraries/Smarty/libs/plugins/function.ci_lang.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/><link href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/style-default.css" rel="stylesheet" type="text/css"><link href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/colors-fresh.css" rel="stylesheet" type="text/css"><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/prototype.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/jquery.js"></script><script type="text/javascript">
  function create_dashboard_app() {
    var dapps = $j("#sidebar-1").find("._wpnonce_widgets");
    var appids = "";
    for(var i=0; i<dapps.length;i++) {
      appids += "&dappid[]="+dapps[i].value;
    }
    var fullwidth = "";
    var dfullwidths = $j("#sidebar-1").find("._widgets_fullwidth");
    for(var i=0; i<dfullwidths.length;i++) {
      fullwidth += "&fullwidth[]="+(dfullwidths[i].checked ? 1 : 0);
    }
    var minimized = "";
    var dminimizeds = $j("#sidebar-1").find("._widgets_minimized");
    for(var i=0; i<dminimizeds.length;i++) {
      minimized += "&minimized[]="+(dminimizeds[i].checked ? 1 : 0);
    }
    document.mainForm.action.value='create';
    new Ajax.Request('<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=create&m=dashboard', {
       method: 'post',
       parameters: $('mainForm').serialize()+appids+fullwidth+minimized,
       onSuccess: function(transport) {
         $('js_error').update(transport.responseText).show();
         document.body.scrollTop = 0;
         
         window.parent.frames['menu'].document.location.reload();
         setCookie('NavAccordion', 'false|true|false');         
       }
     });    
  }
</script></head><body id="bodyColumn" style="margin-left:5px"><div id="navcolumn"><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=home&m=dashboard"><?php echo smarty_function_ci_lang(array('key'=>'strDashboard'),$_smarty_tpl);?>
</a> > <?php echo smarty_function_ci_lang(array('key'=>'strApplicationManagement'),$_smarty_tpl);?>
</div><div id="js_error" class="js_success" style="display:none"></div><form name="mainForm" id="mainForm" method="POST"><input type="hidden" name="appid" value="<?php echo $_smarty_tpl->tpl_vars['appid']->value;?>
"/><input type="hidden" name="appname" value="<?php echo $_smarty_tpl->tpl_vars['appname']->value;?>
"/><input type="hidden" name="apptitle" value="<?php echo $_smarty_tpl->tpl_vars['apptitle']->value;?>
"/><input type="hidden" name="appdesc" value="<?php echo $_smarty_tpl->tpl_vars['appdesc']->value;?>
"/><input type="hidden" name="apptype" value="5"/> <?php if ($_smarty_tpl->tpl_vars['update']->value){?><input type="hidden" name="update" value="1"/><?php }?>
</form><div id="wpwrap"><div id="wpcontent"><div id="wpbody"><div id="wpbody-content"><div class="wrap"><table cellspacing="0" cellpadding="0" style="border:0;"><tr><td style="width:300px"><div class="widget-liquid-left"><div id="widgets-left"><div id="available-widgets" class="widgets-holder-wrap"><div class="sidebar-name"><div class="sidebar-name-arrow"><br/></div><h3>Available Applications</h3></div><div class="widget-holder" style="height:410px;overflow:auto"><p class="description">Drag applications from here to a dashboard on the right to activate them. Drag application back here to deactivate them and delete their settings.</p><div id="widget-list"> <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
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
?> <div id='widget-1_archives-__i__' class='widget'><div class="widget-top"><div class="widget-title-action"><a class="widget-action hide-if-no-js" href="#available-widgets"></a><a class="widget-control-edit hide-if-js" href="#"></a></div><div class="widget-title"><h4><?php echo $_smarty_tpl->tpl_vars['apps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['appname'];?>
<span class="in-widget-title"></span></h4></div></div><div class="widget-inside"><form action="" method="post"><div class="widget-content"><p><input type="checkbox" class="_widgets_fullwidth" id="widget-archives-__i__-fullwidth" name="widget-archives-__i__-fullwidth" value="1" checked/><label for="widget-archives-__i__-fullwidth">Full Width</label><input type="checkbox" class="_widgets_minimized" id="widget-archives-__i__-minimized" name="widget-archives-__i__-minimized" value="1"/><label for="widget-archives-__i__-minimized">Minimized</label></p></div><input type="hidden" name="widget-id" class="widget-id" value="archives-__i__"/><input type="hidden" name="widget-width" class="widget-width" value="250"/><input type="hidden" name="widget-height" class="widget-height" value="200"/><input type="hidden" name="add_new" class="add_new" value="multi"/><input type="hidden" name="_wpnonce_widgets" class="_wpnonce_widgets" value="<?php echo $_smarty_tpl->tpl_vars['apps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['appid'];?>
"/><div class="widget-control-actions"><div class="alignleft"><a class="widget-control-remove" href="#remove">Remove</a> |	<a class="widget-control-close" href="#close">Close</a><img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/wpspin_light.gif" class="ajax-feedback " title="" alt=""/></div></div></form></div><div class="widget-description"><?php echo $_smarty_tpl->tpl_vars['apps']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['appdesc'];?>
</div></div> <?php endfor; endif; ?> </div><br class='clear'/></div><br class="clear"/></div></div></div></td><td><div class="widget-liquid-right"><div id="widgets-right"><div class="widgets-holder-wrap"><div class="sidebar-name"><div class="sidebar-name-arrow"><br/></div><h3>Dashboard Application:<?php echo $_smarty_tpl->tpl_vars['appname']->value;?>
</h3></div><div id='sidebar-1' class='widgets-sortables' style="height:400px;overflow:auto">
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['layout']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<div class="widget ui-draggable" id="widget-1_archives-<?php echo $_smarty_tpl->tpl_vars['layout']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['appid'];?>
" style="display: block;"><div class="widget-top"><div class="widget-title-action"><a href="#available-widgets" class="widget-action hide-if-no-js"></a><a href="#" class="widget-control-edit hide-if-js"></a></div><div class="widget-title"><h4><?php echo $_smarty_tpl->tpl_vars['layout']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['appname'];?>
<span class="in-widget-title"></span></h4></div></div><div class="widget-inside" style="display: block;"><form method="post" action=""><div class="widget-content"><p><input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['layout']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['fullwidth']=="1"){?>checked="checked"<?php }?> value="1" name="widget-archives-<?php echo $_smarty_tpl->tpl_vars['layout']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['appid'];?>
-fullwidth" id="widget-archives-<?php echo $_smarty_tpl->tpl_vars['layout']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['appid'];?>
-fullwidth" class="_widgets_fullwidth"><label for="widget-archives-<?php echo $_smarty_tpl->tpl_vars['layout']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['appid'];?>
-fullwidth">Full Width</label><input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['layout']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['minimized']=="1"){?>checked="checked"<?php }?> value="1" name="widget-archives-<?php echo $_smarty_tpl->tpl_vars['layout']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['appid'];?>
-minimized" id="widget-archives-<?php echo $_smarty_tpl->tpl_vars['layout']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['appid'];?>
-minimized" class="_widgets_minimized"><label for="widget-archives-<?php echo $_smarty_tpl->tpl_vars['layout']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['appid'];?>
-minimized">Minimized</label></p></div><input type="hidden" value="archives-<?php echo $_smarty_tpl->tpl_vars['layout']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['appid'];?>
" class="widget-id" name="widget-id"><input type="hidden" value="250" class="widget-width" name="widget-width"><input type="hidden" value="200" class="widget-height" name="widget-height"><input type="hidden" value="" class="add_new" name="add_new"><input type="hidden" class="_wpnonce_widgets" name="_wpnonce_widgets" value="<?php echo $_smarty_tpl->tpl_vars['layout']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['appid'];?>
"><div class="widget-control-actions"><div class="alignleft"><a href="#remove" class="widget-control-remove">Remove</a> |	<a href="#close" class="widget-control-close">Close</a><img alt="" title="" class="ajax-feedback " src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/wpspin_light.gif" style="visibility: hidden;"></div></div></form></div><div class="widget-description"><?php echo $_smarty_tpl->tpl_vars['layout']->value[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['appdesc'];?>
</div></div>
<?php endfor; endif; ?> </div></div></div></div></td></tr><tr><td colspan="2" style="text-align:right"><hr/><input type="button" class="input-submit gray" value="<< <?php echo smarty_function_ci_lang(array('key'=>'strBack'),$_smarty_tpl);?>
" onclick="javascript:document.location='<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=app&m=create_step1';"/><input type="button" class="input-submit" value="<?php if ($_smarty_tpl->tpl_vars['update']->value){?><?php echo smarty_function_ci_lang(array('key'=>'strUpdate'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smarty_function_ci_lang(array('key'=>'strCreate'),$_smarty_tpl);?>
<?php }?>" onclick="javascript:create_dashboard_app();"/></tr></table></div></div></div></div></div><script type='text/javascript' src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/jquery/hoverIntent.js"></script><script type='text/javascript' src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/jquery/ui.core.js"></script><script type='text/javascript' src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/jquery/ui.droppable.js"></script><script type='text/javascript' src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/jquery/ui.draggable.js"></script><script type='text/javascript' src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/jquery/ui.sortable.js"></script><script type='text/javascript' src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/widgets.js"></script>
<?php echo $_smarty_tpl->getSubTemplate ("analytics.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 </body></html><?php }} ?>