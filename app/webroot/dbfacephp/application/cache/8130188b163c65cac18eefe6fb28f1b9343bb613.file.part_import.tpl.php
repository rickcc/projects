<?php /* Smarty version Smarty-3.1.8, created on 2012-11-15 18:18:54
         compiled from "/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/part_import.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5252277950a5947eaee894-92268911%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8130188b163c65cac18eefe6fb28f1b9343bb613' => 
    array (
      0 => '/home/content/65/8545965/html/projects/app/webroot/dbfacephp/application//views/part_import.tpl',
      1 => 1352280092,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5252277950a5947eaee894-92268911',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50a5947eb1e0c1_13080047',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a5947eb1e0c1_13080047')) {function content_50a5947eb1e0c1_13080047($_smarty_tpl) {?><iframe id="import_upload_iframe" name="import_upload_iframe" width="1" height="1" style="display: none" src="about:blank"></iframe><script type="text/javascript">
function startUpload() {
  $('upload_form_form').style.display =  "none"; // hide form
  $('upload_form_status').style.display =  "inline"; // show progress bar
  $('upload_form_status_info').style.display =  "inline"; // - || -
  $('upload_form_status_info').update('<img src="<?php echo $_smarty_tpl->getConfigVariable('s_base');?>
/dbfacephp/img/cogwheel.gif" alt="ajax clock" /> Please be patient, the file is being uploaded. Details about the upload are not available.');
  $('upload_form_status').style.display =  "none"; 
}
function match_file(fname) {
  farr = fname.toLowerCase().split(".");
  
}
</script><form action="<?php echo $_smarty_tpl->getConfigVariable('dbfacephp_base_url');?>
/index.php?c=importandexport&m=import" method="post" enctype="multipart/form-data" name="import"><fieldset class="options"><legend>File to import</legend><div class="formelementrow" id="upload_form"><div id="upload_form_status" style="display: none;"></div><div id="upload_form_status_info" style="display: none;"></div><div id="upload_form_form"><label for="input_import_file">Location of the text file</label><input style="margin: 5px" class="config-textfield" type="file" name="import_file" id="input_import_file" onchange="match_file(this.value);"/>(Max: 2,048 KiB) <input type="hidden" name="MAX_FILE_SIZE" value="2097152"/></div></div><div class="formelementrow"><label for="charset_of_file">Character set of the file:</label><select name="charset_of_file" id="charset_of_file" class="config-picklist"><option value=""></option><option value="armscii8" title="ARMSCII-8 Armenian">armscii8</option><option value="ascii" title="US ASCII">ascii</option><option value="big5" title="Big5 Traditional Chinese">big5</option><option value="binary" title="Binary pseudo charset">binary</option><option value="cp1250" title="Windows Central European">cp1250</option><option value="cp1251" title="Windows Cyrillic">cp1251</option><option value="cp1256" title="Windows Arabic">cp1256</option><option value="cp1257" title="Windows Baltic">cp1257</option><option value="cp850" title="DOS West European">cp850</option><option value="cp852" title="DOS Central European">cp852</option><option value="cp866" title="DOS Russian">cp866</option><option value="cp932" title="SJIS for Windows Japanese">cp932</option><option value="dec8" title="DEC West European">dec8</option><option value="eucjpms" title="UJIS for Windows Japanese">eucjpms</option><option value="euckr" title="EUC-KR Korean">euckr</option><option value="gb2312" title="GB2312 Simplified Chinese">gb2312</option><option value="gbk" title="GBK Simplified Chinese">gbk</option><option value="geostd8" title="GEOSTD8 Georgian">geostd8</option><option value="greek" title="ISO 8859-7 Greek">greek</option><option value="hebrew" title="ISO 8859-8 Hebrew">hebrew</option><option value="hp8" title="HP West European">hp8</option><option value="keybcs2" title="DOS Kamenicky Czech-Slovak">keybcs2</option><option value="koi8r" title="KOI8-R Relcom Russian">koi8r</option><option value="koi8u" title="KOI8-U Ukrainian">koi8u</option><option value="latin1" title="cp1252 West European">latin1</option><option value="latin2" title="ISO 8859-2 Central European">latin2</option><option value="latin5" title="ISO 8859-9 Turkish">latin5</option><option value="latin7" title="ISO 8859-13 Baltic">latin7</option><option value="macce" title="Mac Central European">macce</option><option value="macroman" title="Mac West European">macroman</option><option value="sjis" title="Shift-JIS Japanese">sjis</option><option value="swe7" title="7bit Swedish">swe7</option><option value="tis620" title="TIS620 Thai">tis620</option><option value="ucs2" title="UCS-2 Unicode">ucs2</option><option value="ujis" title="EUC-JP Japanese">ujis</option><option value="utf8" title="UTF-8 Unicode" selected="selected">utf8</option></select></div><div class="formelementrow">Imported file compression will be automatically detected from: None, gzip, bzip2, zip</div></fieldset><fieldset class="tblFooters"><input type="submit" class="input-submit" value="Go" id="buttonGo" onclick="javascript:startUpload();"/></fieldset></form></div><?php }} ?>