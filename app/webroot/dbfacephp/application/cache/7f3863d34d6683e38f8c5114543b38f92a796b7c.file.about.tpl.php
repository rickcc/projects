<?php /* Smarty version Smarty-3.1.8, created on 2012-11-16 08:00:49
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:136175487550a655214a72f9-93253255%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f3863d34d6683e38f8c5114543b38f92a796b7c' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/about.tpl',
      1 => 1352279988,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136175487550a655214a72f9-93253255',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'version' => 0,
    'buildid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a65521ce4715_55145694',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a65521ce4715_55145694')) {function content_50a65521ce4715_55145694($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ci_lang')) include '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application/libraries/Smarty/libs/plugins/function.ci_lang.php';
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="content-type" content="text/html; charset=UTF-8"><link href="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/css/style-default.css" rel="stylesheet" type="text/css"><script language="javascript" src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/js/rview.js"></script></head><body><div id="bodyColumn"><div id="navcolumn"><a href="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=home&m=dashboard"><?php echo smarty_function_ci_lang(array('key'=>'strDashboard'),$_smarty_tpl);?>
</a> > About DbFacePHP for MySQL</div><br/>
Version : <?php echo $_smarty_tpl->tpl_vars['version']->value;?>
 (<a href="http://www.dbfacephp.com/release-notes/"><span class="info-text">Release Notes</span></a>)<br/>
Build ID: <?php echo $_smarty_tpl->tpl_vars['buildid']->value;?>
<br/><br>
Copyright by tmWorks Dev Team, All Rights Reserved.<br>
Visit our website to get more information<br><a href="http://www.dbfacephp.com" target="_blank">http://www.dbfacephp.com</a>.<br><br>
Any Question, Please feel free to send a mail to<br><a href="mailto:support@tmworks.org">support@tmworks.org</a>.<br><br>
This product includes software developed by<br>
EllisLab, Inc <br><a href="http://codeigniter.com/" target="_blank">http://codeigniter.com/</a>.<br><br>
This product includes software developed by<br>
jQuery Team<br><a href="http://www.jquery.com" target="_blank">http://www.jquery.com</a>.<br><br>
This product includes software developed by<br>
Prototype Core Team<br><a href="http://www.prototypejs.org/" target="_blank">http://www.prototypejs.org/</a>.<br><br>
This product includes software developed by<br>
Open Flash Chart Team<br><a href="http://teethgrinder.co.uk/open-flash-chart-2/" target="_blank">http://teethgrinder.co.uk</a>.<br><br>
More thirdpart software and license, please visit:<br/><a href="http://www.dbfacephp.com/documents/license#credits" target="_blank">http://www.dbfacephp.com/documents/license#credits</a><br>
Getting More Information, Please Reading the NOTE File .<br><br>
THIS SOFTWARE IS PROVIDED BY THE AUTHOR `AS IS' AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
</div>
<?php echo $_smarty_tpl->getSubTemplate ("analytics.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body></html><?php }} ?>