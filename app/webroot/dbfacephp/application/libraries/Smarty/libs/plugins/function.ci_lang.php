<?php
/**
* Smarty plugin
* 
* @package Smarty
* @subpackage PluginsFunction
*/

/**
* Smarty {lang} function plugin
* 
* Type:     function<br>
* Name:     lang<br>
* Date:     Feb 24, 2003<br>
* Purpose:  format HTML tags for the image<br>
* Examples: {lang key="the lang key"}
* Output:   the string from the lang file
* 
* @link http://smarty.php.net/manual/en/language.function.html.image.php {html_image}
(Smarty online manual)
* @author Monte Ohrt <monte at ohrt dot com> 
* @author credits to Duda <duda@big.hu> 
* @version 1.0
* @param array $params parameters
* Input:<br>
*          - file = file (and path) of image (required)
*          - height = image height (optional, default actual height)
*          - width = image width (optional, default actual width)
*          - basedir = base directory for absolute paths, default
*                      is environment variable DOCUMENT_ROOT
*          - path_prefix = prefix for path output (optional, default empty)
* @param object $smarty Smarty object
* @param object $template template object
* @return string 
*/
function smarty_function_ci_lang($params, $template) {
if (empty($params['key'])) {
return "";
}
$CI = & get_instance();
$CI->lang->load('message');
$CI->load->helper('language');
$msg = lang($params['key']);
if (count($params) == 1) {
return $msg;
} else {
$tmp = array_values($params);
$tmp[0] = $msg;
return call_user_func_array('sprintf', $tmp);
}
}
?>
