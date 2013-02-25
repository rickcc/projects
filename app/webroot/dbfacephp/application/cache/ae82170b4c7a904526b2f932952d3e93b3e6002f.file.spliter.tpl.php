<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 16:04:51
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/spliter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29881066650a57513511663-22162466%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae82170b4c7a904526b2f932952d3e93b3e6002f' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/spliter.tpl',
      1 => 1352280112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29881066650a57513511663-22162466',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a57513618770_66416040',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a57513618770_66416040')) {function content_50a57513618770_66416040($_smarty_tpl) {?><html><script type="text/javascript">
  function collapseMenu() {
    var curCols = top.document.getElementById("mainset").cols;
    if (curCols == "178,5,*") {
      top.document.getElementById("mainset").cols = "0,5,*";
      document.getElementById('arrowImage').src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/bl.gif";
    } else {
      top.document.getElementById("mainset").cols = "178,5,*";
      document.getElementById('arrowImage').src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/al.gif";
    }
  }
</script><body><div><a onclick="javascript:collapseMenu();"><img id="arrowImage" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/al.gif"></img></a></div></body></html><?php }} ?>