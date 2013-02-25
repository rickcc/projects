<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 18:18:54
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/selectinex.tpl" */ ?>
<?php /*%%SmartyHeaderCode:177394815350a5947e9b63b4-52044766%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0df45bbcb159940dc5f530465d5e615715224ad3' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/selectinex.tpl',
      1 => 1352280110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177394815350a5947e9b63b4-52044766',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'phpload' => 0,
    'message' => 0,
    'message_css' => 0,
    'optype' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a5947ea9c689_21108867',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a5947ea9c689_21108867')) {function content_50a5947ea9c689_21108867($_smarty_tpl) {?><html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> <?php if ($_smarty_tpl->tpl_vars['phpload']->value){?> <link type="text/css" href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/load.php?load=structure.css,style-default.css" rel="stylesheet"/><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/load.php?load=prototype.js,jquery.js,tommick.js,Utils.js,rview.js"></script> <?php }else{ ?> <link href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/structure.css" rel="stylesheet" type="text/css"><link href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/style-default.css" rel="stylesheet" type="text/css"><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/prototype.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/jquery.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/tommick.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/Utils.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/rview.js"></script> <?php }?> <script type="text/javascript">
    function changeinextype(inextype) {
      if (inextype == 0) {
        $('part_export').hide();
        $('part_import').show();
        $('part_synchronize').hide();
      } else if (inextype == 1) {
        $('part_export').show();
        $('part_import').hide(); 
        $('part_synchronize').hide();     
      } else {
        $('part_export').hide();
        $('part_import').hide(); 
        $('part_synchronize').show();           
      }
    }
  </script></head><body><div id="bodyColumn"><div id="navcolumn"><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=home&m=dashboard">Dashboard</a> > Backup and Restore</div> <?php if ($_smarty_tpl->tpl_vars['message']->value){?><div class="<?php if ($_smarty_tpl->tpl_vars['message_css']->value){?><?php echo $_smarty_tpl->tpl_vars['message_css']->value;?>
<?php }else{ ?>js_success<?php }?>" ondblclick="javascript:hideElement(this)"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div><?php }?> <div class="clear"></div><form action="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php" method="post" id="mainForm" name="mainForm"><table border="0" cellpadding="0" cellspacing="0" class="otherDisplay2" style="padding-bottom:10px"><tr><td class="config-label"><input type="radio" name="inextype" id="inextype1" value="1" style="vertical-align:middle;" onclick="javascript:changeinextype(1);" <?php if ($_smarty_tpl->tpl_vars['optype']->value=='export'){?>checked<?php }elseif(!$_smarty_tpl->tpl_vars['optype']->value){?>checked<?php }?>/><label for="inextype1" style="vertical-align:middle;">Backup to Dump File</label><input type="radio" name="inextype" id="inextype0" value="0" style="vertical-align:middle;" onclick="javascript:changeinextype(0);" <?php if ($_smarty_tpl->tpl_vars['optype']->value=='import'){?>checked<?php }?>/><label for="inextype0" style="vertical-align:middle;">Restore from Dump File</label><input type="radio" name="inextype" id="inextype2" value="2" style="vertical-align:middle;" onclick="javascript:changeinextype(2);" <?php if ($_smarty_tpl->tpl_vars['optype']->value=='synchronize'){?>checked<?php }?>/><label for="inextype2" style="vertical-align:middle;">Save a Copy to Another Database</label></td></tr></table></form></div>
<?php if ($_smarty_tpl->tpl_vars['optype']->value=='synchronize'){?>
<div id="part_import" style="display:none;width:90%;margin-left:5px">
<?php echo $_smarty_tpl->getSubTemplate ("part_import.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div><div id="part_export" style="display:none;width:90%;margin-left:5px">
<?php echo $_smarty_tpl->getSubTemplate ("part_export.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div><div id="part_synchronize" style="width:90%;margin-left:5px">
<?php echo $_smarty_tpl->getSubTemplate ("part_synchronize.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }elseif($_smarty_tpl->tpl_vars['optype']->value=='import'){?>
<div id="part_import" style="width:90%;margin-left:5px">
<?php echo $_smarty_tpl->getSubTemplate ("part_import.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div><div id="part_export" style="display:none;width:90%;margin-left:5px">
<?php echo $_smarty_tpl->getSubTemplate ("part_export.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div><div id="part_synchronize" style="display:none;width:90%;margin-left:5px">
<?php echo $_smarty_tpl->getSubTemplate ("part_synchronize.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }else{ ?>
<div id="part_import" style="display:none;width:90%;margin-left:5px">
<?php echo $_smarty_tpl->getSubTemplate ("part_import.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div><div id="part_export" style="width:90%;margin-left:5px">
<?php echo $_smarty_tpl->getSubTemplate ("part_export.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div><div id="part_synchronize" style="display:none;width:90%;margin-left:5px">
<?php echo $_smarty_tpl->getSubTemplate ("part_synchronize.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>
</div></body></html><?php }} ?>