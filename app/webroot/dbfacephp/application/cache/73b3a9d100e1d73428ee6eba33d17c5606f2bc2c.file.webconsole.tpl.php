<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 18:19:17
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/webconsole.tpl" */ ?>
<?php /*%%SmartyHeaderCode:172184327150a5949565c503-92571243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73b3a9d100e1d73428ee6eba33d17c5606f2bc2c' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/webconsole.tpl',
      1 => 1352280130,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172184327150a5949565c503-92571243',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'phpload' => 0,
    'webconsolePrefix' => 0,
    'serverversion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a5949571efd4_28686143',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a5949571efd4_28686143')) {function content_50a5949571efd4_28686143($_smarty_tpl) {?><html><head><meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<?php if ($_smarty_tpl->tpl_vars['phpload']->value){?>
<link type="text/css" href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/load.php?load=style-default.css" rel="stylesheet"/><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/load.php?load=jquery.js,prototype.js"></script>
<?php }else{ ?>
<link type="text/css" href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/style-default.css" rel="stylesheet"/><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/jquery.js"></script><script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/prototype.js"></script>
<?php }?>
<style media="all" type="text/css">.hide{display:none;}.show{display:block;}.grid{border-collapse:collapse;margin:0;border:0;width:auto;}.grid td{margin:0;padding:0;}#layout{font-family:'Lucida Console',Monaco,monospace;width:100%;height:500px;border:0;border-collapse:collapse;display:block;overflow:auto;}#input-query,#layout{margin:0;margin-top:5px;padding:0;background-color:#000;font-weight:normal;color:#0f0;}#layout-td{vertical-align:bottom;text-align:left;margin:0;padding:6px;}#layout-internal{width:100%;border:0;border-collapse:collapse;}#area-output{margin:0;padding:0;vertical-align:bottom;text-align:left;height:auto;}#area-bottom{margin:0;padding:0;vertical-align:bottom;text-align:left;height:20px;}#area-bottom .grid{width:100%;}#area-command-prefix-td{margin:0;padding:0;vertical-align:middle;text-align:left;width:auto;height:20px;white-space:nowrap;}#area-command-prefix{margin:0;padding:0;vertical-align:middle;white-space:nowrap;color:#0f0;}#area-command{margin:0;padding:0;vertical-align:middle;text-align:left;width:100%;height:20px;}#input-query{margin:0;padding:0;padding:0 1px 0 0;vertical-align:middle;text-align:left;width:100%;border:0;outline:none;}.block-message{margin:8px 0 6px 8px;color:#219860;text-align:left;vertical-align:top;}.block-message a,.block-message a:visited,.block-message a:active,.block-message a:hover{color:#b48c00;background-color:#000;text-decoration:underline;}.block-cmd{margin:0;padding:0;}.block-cmd-command{margin:0;padding:0;color:#0f0;}.block-cmd-result{margin:0;padding:0;color:#0f0;font-family:'Lucida Console';white-space:pre;}.block-error{margin:0 0 0 16px;padding:0;color:#e25120;}.t-blue,.t-title{color:#1196cb;}.t-green,.t-message{color:#219860;}.t-green-light{color:#528c6a;}.t-brown,.t-link,.t-cmd,.t-mark,.s-link{color:#b48c00;}.t-brown-light{color:#b66640;}a.t-cmd,a.t-cmd:visited,a.t-cmd:active,a.t-cmd:hover{color:#b48c00;text-decoration:none;}a.t-link-notUL,a.t-link-notUL:visited,a.t-link-notUL:active,a.t-link-notUL:hover{color:#b48c00;text-decoration:none;}.t-yellow,.t-dash{color:#aeac0d;}.t-grey,.t-wait,.t-timer{color:#7d7d7d;}.t-red{color:#e51b16;}.t-red-light,.t-alert{color:#e25120;}.t-red-dark{color:#ca412d;}.t-lime{color:#00cd00;}.t-author{color:#ca412d;}a.a-no-line,a.a-no-line:visited,a.a-no-line:active,a.a-no-line:hover{text-decoration:none;}a.a-brown,a.a-brown:visited,a.a-brown:active,a.a-brown:hover{color:#b48c00;}</style><script type="text/javascript">
  var cmdhistory = new Array();
  var cmdhistoryIndex = 0;
  $j(document).ready(function(){
    $j('#input-query').focus();
    $j(document).click(function(){
      $j('#input-query').focus();
    });
    $j('#input-query').keyup(function(evt) { 
      //1. submit the input and execute 
      if (evt.keyCode == 13) {
        var tmp = $j.trim($j('#input-query').val());
        if (tmp == "") {
          $j('#input-query').focus();
        } else {
          sendCmd(tmp);
        }
      } 
      //2. the last cmd
      if (evt.keyCode == 38 || evt.keyCode == 40) {
        if (evt.keyCode == 38) {
          cmdhistoryIndex--;
          if (cmdhistoryIndex < 0) {
            cmdhistoryIndex = 0;
          }
        }
        // 3. the next cmd
        if (evt.keyCode == 40) {
          cmdhistoryIndex++;
          if (cmdhistoryIndex >= cmdhistory.length) {
            cmdhistoryIndex = cmdhistory.length - 1;
          }      
        }
        $j('#input-query').val(cmdhistory[cmdhistoryIndex]);
      }
    }); 
  });
  
  function sendCmd(cmds) {
    var sqls = cmds.split(";");
    for (var i=0; i<sqls.length;i++) {
      if (sqls[i] == "") {
        continue;
      }
      // javascript command
      if (sqls[i] == 'cls' || sqls[i] == 'clear') {
        $j('#area-output').html('');
        $j('#input-query').val('');
        continue;
      }
      $j.getJSON("<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=webconsole&m=execute", { sql: sqls[i] },
       function(data){
         var content = "<div class='block-cmd' id='wc_id_3'>";
         content += "<div class='block-cmd-command' id='wc_id_3_command'><?php echo $_smarty_tpl->tpl_vars['webconsolePrefix']->value;?>
>&nbsp;"+data.cmd+"</div>";
         content += "<div class='block-cmd-result' id='wc_id_3_result'>"+data.result+"</div>";
         content += "</div>";
         $j('#area-output').append(content);
         $j('#input-query').val('');
         cmdhistory.push(data.cmd);
         cmdhistoryIndex = cmdhistory.length - 1;
         document.getElementById('layout').scrollTop = document.getElementById('layout').scrollHeight;
       } 
      );
    } 
  }
 
</script></head><body><div id="bodycolumn"><div id="navcolumn"><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=home&m=dashboard">Dashboard</a> > Web Console</div><table id="layout"><tbody><tr><td id="layout-td"><table id="layout-internal"><tbody><tr><td id="area-bottom"><table class="grid"><tbody><tr><td colspan="2" id="area-output"><div class="block-message" id="wc_id_2"><span class="t-title">Welcome to DbFacePHP Console. Commands end with ; or \g.</span><br/><span class="t-title">Server version: <?php echo $_smarty_tpl->tpl_vars['serverversion']->value;?>
</span><br/><span class="t-title">Please type SQL script and press "Enter" to execute it on the server.</span></div></td></tr><tr id="area-bottom-tr"><td id="area-command-prefix-td"><span id="area-command-prefix"><?php echo $_smarty_tpl->tpl_vars['webconsolePrefix']->value;?>
>&nbsp;</span></td><td id="area-command"><form onsubmit="return false" autocomplete="off" method="post" action="" id="form-MAIN"><input type="text" autocomplete="off" name="_input-query" id="input-query"/></form></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></div>
<?php echo $_smarty_tpl->getSubTemplate ("analytics.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body></html><?php }} ?>